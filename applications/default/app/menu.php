<?php

namespace app;

class Menu implements \iMenu {

    static public function initAppMenuItems() {
        \MenuManager::addMenuItem(NULL, 'home', LC_MENU_HOME, 'fa-home');
        \MenuManager::addMenuItem(NULL, '_themes', LC_MENU_THEMES, 'fa-television');
        \MenuManager::addMenuItem('_themes', 'try_themes', LC_MENU_THEMES, 'fa-image');
        \MenuManager::addMenuItem('_themes', 'check_widgets', LC_MENU_EXAMPLE, 'fa-gamepad');
        \MenuManager::addMenuItem(NULL, '_democrud', LC_MENU_CRUDDEMO, 'fa-cube');
        \MenuManager::addMenuItem('_democrud', 'democrud', LC_MENU_SHOWCRUDDEMO, 'fa-book');
        \MenuManager::addMenuItem('_democrud', 'crudsourcecode', LC_MENU_CRUDSOURCECODE, 'fa-code');
        \MenuManager::addMenuItem(NULL, '_demoform', LC_MENU_DEMOFORM, 'fa-cubes');
        \MenuManager::addMenuItem('_demoform', 'demoform', LC_MENU_DEMOZNETDKFORM, 'fa-address-card-o');
        \MenuManager::addMenuItem('_demoform', 'demoformval', LC_MENU_DEMOFORMVAL, 'fa-warning');
        \MenuManager::addMenuItem('_demoform', 'demorbgroup', LC_MENU_DEMORBGROUP, 'fa-circle-o');
        \MenuManager::addMenuItem('_demoform', 'demoloadata', LC_MENU_DEMOLOADATA, 'fa-plug');
        \MenuManager::addMenuItem('_demoform', 'demoautocomplete', LC_MENU_DEMOAUTOCOMPLETE, 'fa-search');
        \MenuManager::addMenuItem('_demoform', 'demoupload', LC_MENU_DEMOUPLOAD, 'fa-cloud-upload');
        \MenuManager::addMenuItem('_demoform', 'demoserverside', LC_MENU_DEMOSERVERSIDE, 'fa-cogs');
        \MenuManager::addMenuItem(null, '_authorization', LC_MENU_AUTHORIZATION, 'fa-unlock-alt');
        \MenuManager::addMenuItem('_authorization', 'users', LC_MENU_AUTHORIZ_USERS, 'fa-user');
        \MenuManager::addMenuItem('_authorization', 'profiles', LC_MENU_AUTHORIZ_PROFILES, 'fa-key');
    }

}
