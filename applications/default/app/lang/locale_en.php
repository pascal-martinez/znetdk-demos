<?php
/* General labels */
define('LC_PAGE_TITLE','ZnetDK demo');

/* Heading labels */
define('LC_HEAD_TITLE','Demonstration of ZnetDK');
define('LC_HEAD_SUBTITLE','Application ready for development...');

/* Menu item labels */
define('LC_MENU_HOME', 'Home');
define('LC_MENU_THEMES', 'Themes');
define('LC_MENU_EXAMPLE', 'Example');
define('LC_MENU_CRUDDEMO', 'CRUD demo');
define('LC_MENU_SHOWCRUDDEMO', 'CRUD demonstration');
define('LC_MENU_CRUDSOURCECODE', 'CRUD source code');
define('LC_MENU_DEMOFORM', 'FORM demo');
define('LC_MENU_DEMOZNETDKFORM', 'ZnetDK form');
define('LC_MENU_DEMOFORMVAL', "Form's messages");
define('LC_MENU_DEMORBGROUP', 'Radio buttons group');
define('LC_MENU_DEMOLOADATA', 'Remote data');
define('LC_MENU_DEMOAUTOCOMPLETE', 'Autocompletion');
define('LC_MENU_DEMOUPLOAD','File upload');
define('LC_MENU_DEMOSERVERSIDE', 'Server-side validation');

/* Heading images */
define('LC_HEAD_IMG_LOGO', ZNETDK_APP_URI . 'images/mylogo_en.png');

/* Authentication page label */
define('LC_DEMO_AUTH_FUNC_NOT_AVAIL', 'Functionality not available in this demo version.');

/* CRUD Demo page labels */
define('LC_DEMO_FIELD_SEMICOLON', ': ');
define('LC_DEMO_BUTTON_NEW', 'New');
define('LC_DEMO_BUTTON_TOOLTIP_NEW', 'Add a new product...');
define('LC_DEMO_BUTTON_EDIT', 'Edit');
define('LC_DEMO_BUTTON_TOOLTIP_EDIT', 'Edit the selected product...');
define('LC_DEMO_BUTTON_REMOVE', 'Remove');
define('LC_DEMO_BUTTON_TOOLTIP_REMOVE', 'Remove the selected product...');
define('LC_DEMO_BUTTON_RESET', 'Reset the demo');
define('LC_DEMO_BUTTON_TOOLTIP_RESET', 'Reinitialize the demo data to their original values.');
define('LC_DEMO_RADIO_ROWS', 'Rows');
define('LC_DEMO_RADIO_ALL_ROWS', 'All');
define('LC_DEMO_FIELD_SEARCH', 'search criteria...');
define('LC_DEMO_FIELD_TOOLTIP_SEARCH', 'Search the products that correspond to the criteria...');
define('LC_DEMO_BUTTON_TOOLTIP_SEARCH', 'Reset the search field content...');
define('LC_DEMO_DATATABLE_PRODUCTS', 'products');
define('LC_DEMO_FIELD_PRODUCT_NAME', 'Product name');
define('LC_DEMO_FIELD_PART_NUMBER', 'Part number');
define('LC_DEMO_FIELD_DESCRIPTION', 'Description');
define('LC_DEMO_FIELD_PRICE', 'Price');
define('LC_DEMO_DIALOG_NEW', 'New product');
define('LC_DEMO_DIALOG_EDIT', 'Edit product');
define('LC_DEMO_DIALOG_SAVE', 'Save product');
define('LC_DEMO_DIALOG_REMOVE', 'Remove product');
define('LC_DEMO_BUTTON_SAVE', 'Save');
define('LC_DEMO_BUTTON_CANCEL', 'Cancel');
define('LC_DEMO_BUTTON_YES', 'Yes');
define('LC_DEMO_BUTTON_NO', 'No');
define('LC_DEMO_QUESTION_MSG_REMOVE', 'Do you really want to remove the selected product?');
define('LC_DEMO_WARN_MSG_SELECT', 'Please, select a product first!');
define('LC_DEMO_WARN_MSG_TITLE', 'Search');
define('LC_DEMO_WARN_MSG_CRITERIA', 'Please, type in a criteria first.');
define('LC_DEMO_WARN_MSG_SEARCH', 'No product found.');
define('LC_DEMO_ERROR_MSG_NEW', 'Sorry, a maximum of 3 products can be added in this demo version. Operation aborted.');
define('LC_DEMO_ERROR_MSG_UPDATE', 'Sorry, a maximum of 3 products can be updated in this demo version. Operation aborted.');
define('LC_DEMO_ERROR_MSG_REMOVE', 'Sorry, a maximum of 3 products can be removed in this demo version. Operation aborted.');
define('LC_DEMO_INFO_MSG_NEW', 'Product added successfully.');
define('LC_DEMO_INFO_MSG_UPDATE', 'Product successfully updated.');
define('LC_DEMO_INFO_MSG_REMOVE', 'Product removed successfully.');
define('LC_DEMO_INFO_MSG_RESET', 'The demo data has been reset.');
define('LC_DEMO_LINK_SOURCE_CODE', "See the <a href='#' onclick='znetdk.showMenuView(\"crudsourcecode\");'>source code</a> of this demo");
define('LC_DEMO_TEASER_SOURCE_CODE', "This source code can be downloaded at <a href='https://www.znetdk.fr/telechargements#democrud' target='_blank'>www.znetdk.fr</a>");

/* Form Demo page labels */
define('LC_DEMOFORM_DESC', 'The PrimeUI widgets displayed into this entry form
            are <strong>automatically instantiated</strong> by ZnetDK
            from a minimalist HTML definition (see source code on your right hand).');
define('LC_DEMOFORMVAL_DESC', 'The error messages displayed at the form validation can be customized
            for each field from its HTML definition using the matching attribute <q>data-zdkerrmsg-...</q> 
            (see source code on your right hand).');
define('LC_DEMORBGROUP_DESC', 'The PrimeUI radio buttons are automatically aligned thanks to the ZnetDK "Radio button group" widget'
        . '.<br> The <strong>&lt;br&gt;</strong> HTML element allows the radio buttons to be moved to the next line '
        . '(see source code on your right hand).');
define('LC_DEMOLOADATA_DESC', "This entry form illustrates the loading of the <strong>dropdown</strong>'s and "
        . "<strong>listbox</strong>'s content, from a ZnetDK application controller (see the HTML5 attribute "
        . "<q>data-zdk-action</q>).<br>The widget's content can be refreshed on demand, keeping or not its current selection."
        . "<br>For further details, see source code in HTML5, JavaScript and PHP on your right hand.");
define('LC_DEMOAUTOCOMPL_DESC', "In this entry form, the <q>Language</q> field is the PrimeUI <strong>AutoComplete</strong> widget that"
        . " is directly connected to a ZnetDK controller action, for getting the languages that match the keyword typed in"
        . " the input field (see source code on your right hand).");
define('LC_DEMOUPLOAD_DESC',"This form illustrates the upload facility of the '<strong>InputFile</strong>' widget."
        . " A thumbnail is displayed when a picture is selected. The controller checks if the uploaded file"
        . " is effectively a picture.");
define('LC_DEMOSERVERSIDE_DESC', "The content of this form is validated by the controller action specified thru "
        . "the HTML property <q>data-zdk-action</q>. The controller checks the data thanks to the <strong>custom validator</strong> "
        . "<q>MyValidator</q>. The response returned by the controller indicates whether the data is OK "
        . "(<q>setSuccessMessage</q>) or not (<q>setFailedMessage</q>).<br>See source code on your right hand for details.");
