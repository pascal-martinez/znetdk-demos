<?php
/* MODIFICATION VERSION 2.5 (01/10/2021) */
namespace app\controller;

class Users extends \controller\Users {
    
    static public function isActionAllowed($action) {
        return TRUE;
    }

    // Action methods
    static protected function action_all() {
        // Get order specifications from request
        $request = new \Request();
        $sortfield = $request->sortfield;
        $sortorder = $request->sortorder;
        $searchCriteria = $request->search_criteria === NULL ? NULL 
                        : json_decode($request->search_criteria, TRUE);		
        $users = array();
        if (is_array($searchCriteria) && key_exists('status', $searchCriteria) 
                && is_numeric($searchCriteria['status']) && $searchCriteria['status'] < 1) {
                        // No row returned
        } else {
            $users[] = array('user_id' => 1, 'login_name' => 'j_deer', 'login_password' => \General::getDummyPassword(),
                    'user_name' => 'John Deer', 'user_email' => 'j_deer@znetdk.fr', 'full_menu_access' => '0', 'menu_access' => '',
                    'expiration_date' => '2014-10-16', 'user_enabled' => '1', 'user_profiles' => 'Consultant',
                    'profiles[]' => array(3), 'login_password2' => \General::getDummyPassword(),
                    'expiration_date_locale' => \Convert::W3CtoLocaleDate('2014-10-16'), 'has_expired' => '1');
            $users[] = array('user_id' => 2, 'login_name' => 'p_martinez', 'login_password' => \General::getDummyPassword(),
                    'user_name' => 'Pascal Martinez', 'user_email' => 'p_martinez@znetdk.fr', 'full_menu_access' => '1', 'menu_access' => LC_FORM_LBL_USER_MENU_ACCESS_FULL,
                    'expiration_date' => '2015-01-31', 'user_enabled' => '1', 'user_profiles' => 'Manager,
                                    Basic user', 'profiles[]' => array(1, 2), 'login_password2' => \General::getDummyPassword(),
                    'expiration_date_locale' => \Convert::W3CtoLocaleDate('2015-01-31'), 'has_expired' => '1');
            $users[] = array('user_id' => 3, 'login_name' => 'j_valjean', 'login_password' => \General::getDummyPassword(),
                    'user_name' => 'Jean Valjean', 'user_email' => 'j_valjean@znetdk.fr', 'full_menu_access' => '0', 'menu_access' => '',
                    'expiration_date' => '2014-12-25', 'user_enabled' => '0', 'user_profiles' => 'Basic user',
                    'profiles[]' => array(2), 'login_password2' => \General::getDummyPassword(),
                    'expiration_date_locale' => \Convert::W3CtoLocaleDate('2014-12-25'), 'has_expired' => '1');
            $users[] = array('user_id' => 4, 'login_name' => 'e_zion', 'login_password' => \General::getDummyPassword(),
                    'user_name' => 'Eva Zion', 'user_email' => 'e_zion@znetdk.fr', 'full_menu_access' => '1', 'menu_access' => LC_FORM_LBL_USER_MENU_ACCESS_FULL,
                    'expiration_date' => '2015-04-03', 'user_enabled' => '1', 'user_profiles' => 'Manager',
                    'profiles[]' => array(3), 'login_password2' => \General::getDummyPassword(),
                    'expiration_date_locale' => \Convert::W3CtoLocaleDate('2015-04-03'), 'has_expired' => '1');		
            /* Sort users */
            $sortfield = isset($sortfield) ? $sortfield : 'login_name';
            $sortorder = isset($sortorder) ? intval($sortorder) : 1;
            usort($users, $sortorder === 1 ? self::sort_asc($sortfield) : self::sort_desc($sortfield));
        }
        // JSON Response
        $response = new \Response();
        $response->rows = self::getInHtml($users);
        $response->success = true;
        $response->summary = LC_TABLE_AUTHORIZ_USERS_CAPTION;
        $response->total = count($users);
        return $response;
    }

    static protected function action_profiles() {
        $profiles = array();
        $profiles[] = array('label' => 'Manager', 'value' => 1);
        $profiles[] = array('label' => 'Basic user', 'value' => 2);
        $profiles[] = array('label' => 'Consultant', 'value' => 3);
        // JSON Response
        $response = new \Response();
        $response->rows = $profiles;
        $response->success = true;
        $response->summary = LC_MENU_AUTHORIZ_PROFILES;
        return $response;
    }

    static protected function action_save() {
        $request = new \Request();
        /* JSON response sent back to the main controller */
        $response = new \Response();
        $summary = $request->user_id ? LC_FORM_TITLE_USER_MODIFY : LC_FORM_TITLE_USER_NEW;
        $response->setWarningMessage($summary, LC_DEMO_AUTH_FUNC_NOT_AVAIL);
        return $response;
    }

    static protected function action_remove() {
        /* JSON response sent back to the main controller */
        $response = new \Response();
        $response->setWarningMessage(LC_FORM_TITLE_USER_REMOVE, LC_DEMO_AUTH_FUNC_NOT_AVAIL);
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

    /* Public method */

    static public function getUserName() {
        $loginName = \UserSession::getLoginName();
        if (isset($loginName)) {
            return 'Demo user';
        } else {
            return null;
        }
    }

    static public function getUserEmail() {
        $loginName = \UserSession::getLoginName();
        if (isset($loginName)) {
            return 'contact@znetdk.fr';
        } else {
            return null;
        }
    }
    
    /**
     * Returns the suggested words found for searching users by keyword
     */
    static protected function action_suggestions() {
        // 1) Read POST parameters */
        $response = new \Response();
        $response->setWarningMessage(LC_FORM_TITLE_USER_REMOVE, LC_DEMO_AUTH_FUNC_NOT_AVAIL);
        // 3) Return JSON response
        return $response;
    }

}
