<?php
/* 
	Main ZnetDK application Layout
	Input variables >>
	- $pageTitle       : title of the page
	- $loginName       : login name
	- $connectedUser   : user name of the connected user
	- $language        : current language of the page
	- $controller      : used by the method renderNavigationMenu() if CFG_VIEW_PAGE_RELOAD is enabled or HTTP error occured
	- $metaDescription : meta Tag "description" to render if CFG_VIEW_PAGE_RELOAD is enabled
	- $metaKeywords    : meta Tag "keywords" to render if CFG_VIEW_PAGE_RELOAD is enabled
	- $metaAuthor      : meta Tag "author" to render if CFG_VIEW_PAGE_RELOAD is enabled
*/
?>
<!DOCTYPE HTML>
<html lang="<?php echo $language; ?>">
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php self::renderMetaTags($metaDescription, $metaKeywords, $metaAuthor); ?>
        <title><?php echo $pageTitle; ?></title>
<?php if (CFG_NON_MOBILE_PWA_ENABLED) :
    $faviconDir = ZNETDK_ROOT_URI . CFG_MOBILE_FAVICON_DIR . '/';
    require ZNETDK_ROOT . CFG_MOBILE_FAVICON_CODE_FILENAME;
endif; ?>
        <style>.js #zdk-fouc{display: none;}</style>
        <script>document.documentElement.className='js';</script>
        <?php self::renderDependencies(); ?>
	</head>
    <body id="zdk-fouc" data-ui-token="<?php echo \UserSession::setUIToken(); ?>" data-appver="<?php echo CFG_APPLICATION_VERSION; ?>"<?php echo CFG_NON_MOBILE_PWA_ENABLED ? ' data-service-worker-url="'.CFG_MOBILE_SERVICE_WORKER_URL.'"' : ''; ?>>
		<div id="zdk-messages"></div><div id="zdk-critical-err"></div>
        <span id="zdk-network-error-msg" class="ui-helper-hidden"><?php echo LC_MSG_ERR_NETWORK; ?></span>
        <img class="ui-helper-hidden" src="<?php echo ZNETDK_ROOT_URI; ?>resources/images/messages.png">
        <div id="zdk-header">
                <a id="zdk-header-logo" href="<?php self::renderLogoURL(); ?>"><img src="<?php echo LC_HEAD_IMG_LOGO; ?>" alt="banner logo" /></a>
                <div id="zdk-header-title">
                        <h1><?php echo LC_HEAD_TITLE; ?></h1>
                        <h2><?php echo LC_HEAD_SUBTITLE; ?></h2>
                </div>
                <div id="zdk-connection-area" data-zdk-login="<?php echo $loginName; ?>" data-zdk-username="<?php echo $connectedUser; ?>"
                        data-zdk-usermail="<?php echo $userEmail; ?>" data-zdk-changepwd="<?php echo LC_FORM_LBL_PASSWORD; ?>" data-zdk-myuserrights="<?php echo LC_HEAD_USERPANEL_MY_USER_RIGHTS; ?>"<?php echo !isset($connectedUser) ? ' class="ui-helper-hidden"' : ''; ?>>
                    <a id="zdk-profile" href="#"><img src="<?php echo ZNETDK_APP_URI; ?>images/profile.png" alt="profile"/><?php echo $loginName; ?></a>
                    <a id="zdk-logout" href="#"><img src="<?php echo ZNETDK_APP_URI; ?>images/logout.png" alt="logout"/><?php echo LC_HEAD_LNK_LOGOUT; ?></a>
                </div>
        </div>
        <div class="ui-helper-clearfix"></div>
        <?php self::renderNavigationMenu('custom',$controller); ?>
        <div id="zdk-navi-toolbar">
            <div id="zdk-breadcrumb">
                    <div class="icone"></div>
                    <?php self::renderBreadcrumb($controller); ?>
            </div>
            <div id="zdk-language-area-wrapper">
                    <div class="icone"></div>
                    <?php self::renderLangSelection(); ?>
            </div>
            <div id="zdk-help-area" data-zdk-helptitle="<?php echo LC_FORM_TITLE_HELP; ?>"
                 data-zdk-helpclosebutton="<?php echo LC_BTN_CLOSE; ?>"
                     <?php if(!CFG_HELP_ENABLED){echo 'class="ui-helper-hidden"';} ?>>
                    <div class="icone"></div>
                    <a href="#"><?php echo LC_HEAD_LNK_HELP; ?></a>
            </div>
        </div>
        <?php self::renderCustomContent($controller); ?>
        <img id="zdk-ajax-loading-img" class="ui-helper-hidden" src="<?php echo ZNETDK_APP_URI; ?>images/ajax-loader.gif" alt="ajax loader"/>
        <div class="ui-helper-clearfix"></div>
        <div id="zdk-footer" class="zdk-sticky">
            <span class="first"><?php echo LC_FOOTER_LEFT; ?></span>
            <span class="second"><?php echo LC_FOOTER_CENTER; ?></span>
            <span class="third"><?php echo LC_FOOTER_RIGHT; ?></span>
        </div>
        <script>document.getElementById('zdk-fouc').style.display='block';</script>
    </body>
</html>