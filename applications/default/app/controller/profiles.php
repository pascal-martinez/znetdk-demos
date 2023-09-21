<?php

namespace app\controller;

class Profiles extends \AppController {

    // Action methods
    static protected function action_all() {
        // Get order specifications from request
        $request = new \Request();
        $sortfield = $request->sortfield;
        $sortorder = $request->sortorder;
        $sortCriteria = isset($sortfield) && isset($sortorder) ? $sortfield . ($sortorder == -1 ? ' DESC' : '') : 'profile_name';
        $profiles = array();
        $profiles[] = array('profile_id' => 1, 'profile_name' => 'Manager', 'profile_description' => 'Has full rights',
            'menu_items' => '', 'menu_ids[]' => array());
        $profiles[] = array('profile_id' => 2, 'profile_name' => 'Basic user', 'profile_description' => 'Basic user menu items',
            'menu_items' => LC_MENU_HOME . ', ' . LC_MENU_THEMES . ', ' . LC_MENU_EXAMPLE, 'menu_ids[]' => array('home', 'try_themes', 'check_widgets'));
        $profiles[] = array('profile_id' => 3, 'profile_name' => 'Consultant', 'profile_description' => 'Access in read mode',
            'menu_items' => '', 'menu_ids[]' => array());

        /* Sort profiles */
        $sortfield = isset($sortfield) ? $sortfield : 'profile_name';
        $sortorder = isset($sortorder) ? intval($sortorder) : 1;
        usort($profiles, $sortorder === 1 ? self::sort_asc($sortfield) : self::sort_desc($sortfield));

        // JSON Response
        $response = new \Response();
        $response->rows = $profiles;
        $response->success = true;
        $response->summary = LC_MENU_AUTHORIZ_PROFILES;
        $response->total = count($profiles);
        return $response;
    }

    static protected function action_save() {
        $request = new \Request();
        /* Response returned to the main controller... */
        $response = new \Response();
        $summary = $request->profile_id ? LC_FORM_TITLE_PROFILE_MODIFY : LC_FORM_TITLE_PROFILE_NEW;
        $response->setWarningMessage($summary,LC_DEMO_AUTH_FUNC_NOT_AVAIL);
        return $response;
    }

    /** Get the remove confirmation message */
    static protected function action_removeconfirm() {
        $message['question'] = LC_MSG_ASK_REMOVE;
        $message['yes_label'] = LC_BTN_YES;
        $message['no_label'] = LC_BTN_NO;
        $message['question'] .= LC_MSG_WARN_PROFILE_ROWS_EXIST;
        $response = new \Response();
        $response->setResponse($message);
        return $response;
    }
    
    static protected function action_remove() {
        /* Réponse retournée au contrôleur principal */
        $response = new \Response();
        $response->setWarningMessage(LC_FORM_TITLE_PROFILE_REMOVE, LC_DEMO_AUTH_FUNC_NOT_AVAIL);
        return $response;
    }

    static protected function action_menuitems() {
        $response = new \Response();
        $response->success = true;
        $response->treenodes = \MenuManager::getMenuItemsAsTreeNodes();
        return $response;
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

}
