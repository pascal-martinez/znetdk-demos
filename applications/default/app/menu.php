<?php

namespace app;

class Menu implements \iMenu {

    static public function initAppMenuItems() {
        \MenuManager::addMenuItem(NULL, 'home', LC_MENU_HOME, 'ui-icon-home');
        \MenuManager::addMenuItem(NULL, '_themes', LC_MENU_THEMES, 'ui-icon-lightbulb');
        \MenuManager::addMenuItem('_themes', 'try_themes', LC_MENU_THEMES, 'ui-icon-image');
        \MenuManager::addMenuItem('_themes', 'check_widgets', LC_MENU_EXAMPLE, 'ui-icon-suitcase');
        \MenuManager::addMenuItem(NULL, '_democrud', LC_MENU_CRUDDEMO, 'ui-icon-play');
        \MenuManager::addMenuItem('_democrud', 'democrud', LC_MENU_SHOWCRUDDEMO, 'ui-icon-newwin');
        \MenuManager::addMenuItem('_democrud', 'crudsourcecode', LC_MENU_CRUDSOURCECODE, 'ui-icon-script');
        \MenuManager::addMenuItem(NULL, '_demoform', LC_MENU_DEMOFORM, 'ui-icon-play');
        \MenuManager::addMenuItem('_demoform', 'demoform', LC_MENU_DEMOZNETDKFORM, 'ui-icon-contact');
        \MenuManager::addMenuItem('_demoform', 'demoformval', LC_MENU_DEMOFORMVAL, 'ui-icon-alert');
        \MenuManager::addMenuItem('_demoform', 'demorbgroup', LC_MENU_DEMORBGROUP, 'ui-icon-radio-off');
        \MenuManager::addMenuItem('_demoform', 'demoloadata', LC_MENU_DEMOLOADATA, 'ui-icon-signal-diag');
        \MenuManager::addMenuItem('_demoform', 'demoautocomplete', LC_MENU_DEMOAUTOCOMPLETE, 'ui-icon-search');
        \MenuManager::addMenuItem('_demoform', 'demoupload', LC_MENU_DEMOUPLOAD, 'ui-icon-circle-arrow-n');
        \MenuManager::addMenuItem('_demoform', 'demoserverside', LC_MENU_DEMOSERVERSIDE, 'ui-icon-gear');
        \MenuManager::addMenuItem(null, '_authorization', LC_MENU_AUTHORIZATION, 'ui-icon-locked');
        \MenuManager::addMenuItem('_authorization', 'users', LC_MENU_AUTHORIZ_USERS, 'ui-icon-person');
        \MenuManager::addMenuItem('_authorization', 'profiles', LC_MENU_AUTHORIZ_PROFILES, 'ui-icon-key');
    }

}
