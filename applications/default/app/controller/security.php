<?php

namespace app\controller;

class Security extends \AppController {

    static protected function action_login() {
        $response = new \Response(false);
        $request = new \Request(false);
        $login_name = $request->login_name;
        $password = $request->password;
        $access = $request->access;
        $changePasswordRequested = !($request->login_password === null && $request->login_password2 === null);
        $response->ename = $changePasswordRequested ? 'password' : 'login_name';
        if (empty($login_name) || empty($password)) {
            $response->success = false;
            $response->msg = LC_MSG_ERR_LOGIN;
        } else {
            if ($login_name === 'znetdk' && $password === 'demo') {
                if ($changePasswordRequested) {
                    $response->success = false;
                    if ($request->login_password !== $request->login_password2) {
                        $response->ename = 'login_password';
                        $response->msg = LC_MSG_ERR_PWD_MISMATCH;
                    } elseif ($request->login_password === $request->password) {
                        $response->ename = 'login_password';
                        $response->msg = LC_MSG_ERR_PWD_IDENTICAL;
                    } else {
                        $response->setWarningMessage(LC_FORM_TITLE_CHANGE_PASSWORD, LC_DEMO_AUTH_FUNC_NOT_AVAIL);
                    }
                } else {
                    \UserSession::setLoginName($login_name);
                    \UserSession::setAccessMode($access);
                    $response->success = true;
                    $response->summary = LC_FORM_TITLE_LOGIN;
                    $response->msg = LC_MSG_INF_LOGIN;
                }
            } else {
                $response->ename = 'password';
                $response->success = false;
                $response->msg = LC_MSG_ERR_LOGIN;
            }
        }
        return $response;
    }

    static public function getAllowedMenuItems() {
        // All menu items are authorized for the authenticated user
        return \MenuManager::getMenuItemIDs();
    }

}
