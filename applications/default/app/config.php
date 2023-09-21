<?php
/**
* ZnetDK, Starter Web Application for rapid & easy development
* See official website http://www.znetdk.fr 
* ------------------------------------------------------------
* Custom parameters of the application
* YOU CAN FREELY CUSTOMIZE THE CONTENT OF THIS FILE
*/

/** Page layout choosen for the application.
 *  @return 'classic'|'office'|'custom' Name of the layout used by the application.
 */
define('CFG_PAGE_LAYOUT','custom');

/** Is online help enabled?
 * @return boolean true when online help facility is enabled, false when disabled.
 */
define('CFG_HELP_ENABLED',true);

/** Relative path of the custom CSS file of the application */
define('CFG_APPLICATION_CSS','applications/' . ZNETDK_APP_NAME . '/public/css/demo.css');

/** Relative path of the Javascript file specially developed for the application */
define('CFG_APP_JS','applications/' . ZNETDK_APP_NAME . '/public/js/myapp.js');

/** Is multilingual translation enabled for your application?
 * @return boolean Value true if multilingual is enabled
 */
define('CFG_MULTI_LANG_ENABLED',true);

/** Session Time out in minutes
 * @return integer Number of minutes without user activity before his session expires
 */
define('CFG_SESSION_TIMEOUT',1);

/** Is authentication required?
 * @return boolean Value true if the user must authenticate to access to the
 *  application
 */
define('CFG_AUTHENT_REQUIRED',true);

/** Host name of the machine where the database MySQL is installed.
 * @return string For example, '127.0.0.1' or 'mysql78.perso'
 */
define('CFG_SQL_HOST',null);

/** Database which contains the tables specially created for the application.
 * @return string For example 'znetdk-app'
 */
define('CFG_SQL_APPL_DB',null);

/** User declared in the database of the application to access to the tables
 *  specially created for business needs
 * @return string For example 'app'
 */
define('CFG_SQL_APPL_USR',null);

/** User's password declared in the database of the application.
 * @return string For example 'password'
 */
define('CFG_SQL_APPL_PWD',null);

/** Theme enabled for the application ('znetdk' in standard)
 * @return string Name of the theme choosen for the application.<br>
 * For example: 'znetdk', 'flat-blue', 'aristo', 'south-street' ...
 */
define('CFG_THEME','flat-blue');

/** Load Development version of the PrimeUI & ZnetDK widgets for debug purpose */
define('CFG_DEV_JS_ENABLED',TRUE);