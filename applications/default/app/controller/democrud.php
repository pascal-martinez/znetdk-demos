<?php

namespace app\controller;

class DemoCRUD extends \AppController {

    static protected function action_save() {
        /* Get request data */
        $request = new \Request();
        $id = intval($request->id);
        $part_number = $request->part_number;
        $product_name = $request->product_name;
        $product_description = $request->product_description===NULL?"":$request->product_description;
        $product_price = number_format(floatval($request->product_price), 2, '.', '');

        $action = $id === 0 ? 'new' : 'update';
        $result = true;
        if ($action === 'new') {
            $success_msg = LC_DEMO_INFO_MSG_NEW;
            if (!isset($_SESSION['id_max'])) {
                $_SESSION['id_max'] = 100;
            }
            $new_id = $_SESSION['id_max'];
            $new_product = array('id' => $new_id, 'part_number' => $part_number, 'product_name' => $product_name, 'product_description' => $product_description, 'product_price' => $product_price);
            if (!isset($_SESSION['added_products'])) {
                $_SESSION['added_products'] = array($new_id => $new_product);
                $_SESSION['id_max'] += 1;
            } elseif (count($_SESSION['added_products']) >= 3) {
                $result = false;
                $error_msg = LC_DEMO_ERROR_MSG_NEW;
            } else {
                $_SESSION['added_products'][$new_id] = $new_product;
                $_SESSION['id_max'] += 1;
            }
        } else { /* Product update... */
            $success_msg = LC_DEMO_INFO_MSG_UPDATE;
            $updated_product = array('id' => $id, 'part_number' => $part_number, 'product_name' => $product_name, 'product_description' => $product_description, 'product_price' => $product_price);
            if (!isset($_SESSION['updated_products'])) {
                $_SESSION['updated_products'] = array($id => $updated_product);
            } elseif (count($_SESSION['updated_products']) >= 3) {
                $result = false;
                $error_msg = LC_DEMO_ERROR_MSG_UPDATE;
            } else {
                $_SESSION['updated_products'][$id] = $updated_product;
            }
        }

        /* Response returned to the front controller */
        $response = new \Response();
        $response->action = $action;
        $response->summary = LC_DEMO_DIALOG_SAVE;
        if ($result) {
            $response->success = true;
            $response->msg = $success_msg;
        } else {
            $response->success = false;
            $response->msg = $error_msg;
        }
        return $response;
    }

    static protected function action_remove() {
        /* Get request data */
        $request = new \Request();
        $id = intval($request->id);

        $success_msg = LC_DEMO_INFO_MSG_REMOVE;
        $result = true;

        if (!isset($_SESSION['removed_products'])) {
            $_SESSION['removed_products'] = array($id);
        } elseif (count($_SESSION['removed_products']) >= 3) {
            $result = false;
            $error_msg = LC_DEMO_ERROR_MSG_REMOVE;
        } else {
            $_SESSION['removed_products'][] = $id;
        }

        /* Response returned to the front controller */
        $response = new \Response();
        $response->summary = LC_DEMO_DIALOG_REMOVE;
        if ($result) {
            $response->success = true;
            $response->msg = $success_msg;
        } else {
            $response->success = false;
            $response->msg = $error_msg;
        }
        return $response;
    }

    static protected function action_getdata() {
        /* Get request parameters */
        $request = new \Request();
        $first = $request->first;
        $rows = $request->rows;
        $sort_field = $request->sortfield;
        $sort_order = $request->sortorder;
        $criteria = $request->search_criteria;

        /* Get data rows */
        $result = self::getRowData($first, $rows, $sort_field, $sort_order, $criteria);

        /* Response returned to the front controller */
        $response = new \Response();
        $response->setResponse($result);
        $response->summary = LC_DEMO_WARN_MSG_TITLE;
        return $response;
    }

    static protected function action_getsearchsuggestions() {
        /* Get request parameters */
        $request = new \Request();
        $criteria = $request->criteria;

        /* Get data rows */
        $result = self::getRowData(0, 5, 'product_name', 1, $criteria, true);

        $suggestions = array();
        /* Contruct response array */
        $previous = '';
        if ($result["success"]) {
            foreach ($result["rows"] as $value) {
                if ($previous !== $value["product_name"]) {
                    $suggestions[]['label'] = $value["product_name"];
                }
                $previous = $value["product_name"];
            }
        }

        $response = new \Response();
        $response->setResponse($suggestions);
        return $response;
    }

    static protected function action_resetdata() {
        unset($_SESSION['added_products']);
        unset($_SESSION['updated_products']);
        unset($_SESSION['removed_products']);

        $response = new \Response();
        $response->success = true;
        $response->msg = LC_DEMO_INFO_MSG_RESET;
        return $response;
    }

    static private function getRowData($first, $rows, $sort_field, $sort_order, $criteria, $search_on_sort_field_only = false) {
        /* Set default values */
        $first = isset($first) ? intval($first) : 0;
        $rows = isset($rows) ? intval($rows) : 10;
        $sort_field = isset($sort_field) ? $sort_field : 'product_name';
        $sort_order = isset($sort_order) ? intval($sort_order) : 1;

        $removed_products_count = 0;
        $updated_products_count = 0;

        /*  Default data rows */
        $products = self::getDefaultRowData();

        /* New user rows */
        if (isset($_SESSION['added_products'])) {
            $added_products = $_SESSION['added_products'];
            foreach ($added_products as $value) {
                $value['product_price_money'] = \Convert::toMoney($value['product_price'], FALSE);
                $products[$value['id']] = $value;
            }
        }

        /* Data rows filter */
        if (isset($_SESSION['removed_products'])) {
            $removed_products = $_SESSION['removed_products'];
            $removed_products_count = count($removed_products);
        }
        if (isset($_SESSION['updated_products'])) {
            $updated_products = $_SESSION['updated_products'];
            $updated_products_count = count($updated_products);
        }
        if (!empty($criteria) || $removed_products_count || $updated_products_count) {
            foreach ($products as &$value) {
                if ($removed_products_count && in_array($value['id'], $removed_products)) {
                    // Product has been removed, nothing to do...
                } else {
                    if ($updated_products_count && array_key_exists($value['id'], $updated_products)) {
                        $value = $updated_products[$value['id']];
                        $value['product_price_money'] = \Convert::toMoney($value['product_price'], FALSE);
                    }
                    if (!empty($criteria)) {
                        if ((stripos($value['product_name'], $criteria) !== FALSE) || (!$search_on_sort_field_only && stripos($value['product_description'], $criteria) !== FALSE)) {
                            $filtered_array[] = $value;
                        }
                    } else {
                        $filtered_array[] = $value;
                    }
                }
            }
        } else {
            $filtered_array = $products;
        }

        /* Data rows sort */
        if (isset($filtered_array)) {
            usort($filtered_array, $sort_order === 1 ? self::sort_asc($sort_field) : self::sort_desc($sort_field));
            $result["total"] = count($filtered_array);
            $result["rows"] = array_slice($filtered_array, $first, $rows);
            $result["success"] = true;
            $result["msg"] = 'Products successfuly requested.';
        } else {
            $result["success"] = false;
            $result["msg"] = LC_DEMO_WARN_MSG_SEARCH;
        }

        return $result;
    }

    /* Tools methods */

    static private function sort_asc($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }

    static private function sort_desc($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }

    static private function getDefaultRowData() {
        $products = array(
            1 => array('id' => 1, 'part_number' => 'PN1645', 'product_name' => 'Tyre 185x13', 'product_description' => 'Tyre 185x13 for Alfa Romeo vehicles', 'product_price' => '21.30', 'product_price_money' => \Convert::toMoney('21.30', FALSE)),
            2 => array('id' => 2, 'part_number' => 'PN1688', 'product_name' => 'Oil filter', 'product_description' => 'Oil filter for petrol engines', 'product_price' => '39.96', 'product_price_money' => \Convert::toMoney('39.96', FALSE)),
            3 => array('id' => 3, 'part_number' => 'PN5122', 'product_name' => 'Air filter', 'product_description' => 'Air filter for Jaguar vehicles', 'product_price' => '54.13', 'product_price_money' => \Convert::toMoney('54.13', FALSE)),
            4 => array('id' => 4, 'part_number' => 'PN3391', 'product_name' => 'Fuel filter', 'product_description' => 'Fuel filter for petrol engine ', 'product_price' => '16.87', 'product_price_money' => \Convert::toMoney('16.87', FALSE)),
            5 => array('id' => 5, 'part_number' => 'PN7116', 'product_name' => 'Cabin filter', 'product_description' => 'Cabin filter for Citroen vehicle', 'product_price' => '84.67', 'product_price_money' => \Convert::toMoney('84.67', FALSE)),
            6 => array('id' => 6, 'part_number' => 'PN5766', 'product_name' => 'Engine oil', 'product_description' => 'Engine oil 5W40 for fuel engines', 'product_price' => '36.50', 'product_price_money' => \Convert::toMoney('36.50', FALSE)),
            7 => array('id' => 7, 'part_number' => 'PN6983', 'product_name' => 'Spark plug', 'product_description' => 'Spark plug NGK', 'product_price' => '8.69', 'product_price_money' => \Convert::toMoney('8.69', FALSE)),
            8 => array('id' => 8, 'part_number' => 'PN6911', 'product_name' => 'Brake pads', 'product_description' => 'Brake pads (front) for Peugeot vehicle', 'product_price' => '29.38', 'product_price_money' => \Convert::toMoney('29.38', FALSE)),
            9 => array('id' => 9, 'part_number' => 'PN4638', 'product_name' => 'Alternator', 'product_description' => 'Universal alternator suitable for Honda engines', 'product_price' => '158.98', 'product_price_money' => \Convert::toMoney('158.98', FALSE)),
            10 => array('id' => 10, 'part_number' => 'PN6811', 'product_name' => 'Brake pads', 'product_description' => 'Brake pads (front) for Ford fiesta vehicle', 'product_price' => '33.05', 'product_price_money' => \Convert::toMoney('33.05', FALSE)),
            11 => array('id' => 11, 'part_number' => 'PN4122', 'product_name' => 'Exhaust', 'product_description' => 'Exhaust system for Peugeot vehicle', 'product_price' => '218.21', 'product_price_money' => \Convert::toMoney('218.21', FALSE)),
            12 => array('id' => 12, 'part_number' => 'PN4123', 'product_name' => 'Brake disc', 'product_description' => 'Brake Disc COATED suitable for Renault Clio', 'product_price' => '74.20', 'product_price_money' => \Convert::toMoney('74.20', FALSE)),
            13 => array('id' => 13, 'part_number' => 'PN9104', 'product_name' => 'Battery', 'product_description' => 'Starter Battery SILVER dynamic suitable for CITROËN BERLINGO', 'product_price' => '16.98', 'product_price_money' => \Convert::toMoney('16.98', FALSE)),
            14 => array('id' => 14, 'part_number' => 'PN2155', 'product_name' => 'Air cooling', 'product_description' => 'Fan, radiator Diameter 340mm Voltage 12V', 'product_price' => '11.55', 'product_price_money' => \Convert::toMoney('11.55', FALSE)),
            15 => array('id' => 15, 'part_number' => 'PN4126', 'product_name' => 'Radiator fan', 'product_description' => 'Fan for vehicles without air conditioning', 'product_price' => '76.17', 'product_price_money' => \Convert::toMoney('76.17', FALSE)),
            16 => array('id' => 16, 'part_number' => 'PN8127', 'product_name' => 'Water pump', 'product_description' => 'Water Pump 18 Teeth Operating Mode Mechanical', 'product_price' => '56.41', 'product_price_money' => \Convert::toMoney('56.41', FALSE)),
            17 => array('id' => 17, 'part_number' => 'PN4128', 'product_name' => 'Throttle sensor', 'product_description' => 'Sensor, throttle position 12V Rotation DirectionClockwise 3 ports', 'product_price' => '22.78', 'product_price_money' => \Convert::toMoney('22.78', FALSE)),
            18 => array('id' => 18, 'part_number' => 'PN8179', 'product_name' => 'Heat exchanger', 'product_description' => 'Heat Exchanger, interior heating 1,02Kg Aluminium 234x57 mm', 'product_price' => '65.99', 'product_price_money' => \Convert::toMoney('65.99', FALSE)),
            19 => array('id' => 19, 'part_number' => 'PN2130', 'product_name' => 'Ignition coil', 'product_description' => 'Coil ignition Housing Colour Grey Port Type SAE Number of Poles 4 Number of Inlets / Outlets 4', 'product_price' => '17.01', 'product_price_money' => \Convert::toMoney('17.01', FALSE)),
            20 => array('id' => 20, 'part_number' => 'PN4131', 'product_name' => 'Silencer', 'product_description' => 'End Silencer Technical Information Number Stock code 62 Weight 3,500Kg', 'product_price' => '9.00', 'product_price_money' => \Convert::toMoney('9.00', FALSE)),
            21 => array('id' => 21, 'part_number' => 'PN4132', 'product_name' => 'Bulb spotlight', 'product_description' => 'Bulb spotlight Vision Socket P43t-38 60/55W 12V Bulb Type H4', 'product_price' => '51.33', 'product_price_money' => \Convert::toMoney('51.33', FALSE))
        );
        return $products;
    }

}
