<?php
/* General labels */
define('LC_PAGE_TITLE','Démo ZnetDK');

/* Heading labels */
define('LC_HEAD_TITLE','Démonstration de ZnetDK');
define('LC_HEAD_SUBTITLE','Application prête à développer...');

/* Menu item labels */
define('LC_MENU_HOME', 'Accueil');
define('LC_MENU_THEMES', 'Thèmes');
define('LC_MENU_EXAMPLE', 'Exemple');
define('LC_MENU_CRUDDEMO', 'Démo CRUD');
define('LC_MENU_SHOWCRUDDEMO', 'Démonstration CRUD');
define('LC_MENU_CRUDSOURCECODE', 'Code source CRUD');
define('LC_MENU_DEMOFORM', 'Démo FORM');
define('LC_MENU_DEMOZNETDKFORM', 'Formulaire ZnetDK');
define('LC_MENU_DEMOFORMVAL', 'Messages de formulaire');
define('LC_MENU_DEMORBGROUP', 'Groupe de boutons radio');
define('LC_MENU_DEMOLOADATA', 'Données distantes');
define('LC_MENU_DEMOAUTOCOMPLETE', 'Auto-complétion');
define('LC_MENU_DEMOUPLOAD','Upload de fichier');
define('LC_MENU_DEMOSERVERSIDE', 'Validation côté serveur');

/* Heading images */
define('LC_HEAD_IMG_LOGO', ZNETDK_APP_URI . 'images/monlogo_fr.png');

/* Authentication page lable */
define('LC_DEMO_AUTH_FUNC_NOT_AVAIL', 'Fonctionnalité non disponible dans cette version de démonstration.');

/* CRUD Demo page labels */
define('LC_DEMO_FIELD_SEMICOLON', ' : ');
define('LC_DEMO_BUTTON_NEW', 'Nouveau');
define('LC_DEMO_BUTTON_TOOLTIP_NEW', 'Ajouter un nouveau produit...');
define('LC_DEMO_BUTTON_EDIT', 'Modifier');
define('LC_DEMO_BUTTON_TOOLTIP_EDIT', 'Modifier le produit sélectionné...');
define('LC_DEMO_BUTTON_REMOVE', 'Supprimer');
define('LC_DEMO_BUTTON_TOOLTIP_REMOVE', 'Supprimer le produit sélectionné...');
define('LC_DEMO_BUTTON_RESET', 'Réinitialiser la démo');
define('LC_DEMO_BUTTON_TOOLTIP_RESET', "Réinitialiser les données de la démo à leurs valeurs d'origine.");
define('LC_DEMO_RADIO_ROWS', 'Lignes');
define('LC_DEMO_RADIO_ALL_ROWS', 'Toutes');
define('LC_DEMO_FIELD_SEARCH', 'critères de recherche...');
define('LC_DEMO_FIELD_TOOLTIP_SEARCH', 'Rechercher les produits qui correspondent aux critères...');
define('LC_DEMO_BUTTON_TOOLTIP_SEARCH', 'Vider le champ de recherche...');
define('LC_DEMO_DATATABLE_PRODUCTS', 'produits');
define('LC_DEMO_FIELD_PRODUCT_NAME', 'Nom du produit');
define('LC_DEMO_FIELD_PART_NUMBER', 'Référence');
define('LC_DEMO_FIELD_DESCRIPTION', 'Description');
define('LC_DEMO_FIELD_PRICE', 'Prix');
define('LC_DEMO_DIALOG_NEW', 'Nouveau produit');
define('LC_DEMO_DIALOG_EDIT', 'Modifier un produit');
define('LC_DEMO_DIALOG_SAVE', 'Enregistrer un produit');
define('LC_DEMO_DIALOG_REMOVE', 'Supprimer un produit');
define('LC_DEMO_BUTTON_SAVE', 'Enregistrer');
define('LC_DEMO_BUTTON_CANCEL', 'Annuler');
define('LC_DEMO_BUTTON_YES', 'Oui');
define('LC_DEMO_BUTTON_NO', 'Non');
define('LC_DEMO_QUESTION_MSG_REMOVE', 'Souhaitez vous réellement supprimer le produit sélectionné ?');
define('LC_DEMO_WARN_MSG_SELECT', "Sélectionnez au préalable un produit s&rsquo;il vous plaît !");
define('LC_DEMO_WARN_MSG_TITLE', 'Recherche');
define('LC_DEMO_WARN_MSG_CRITERIA', "Saisissez d&rsquo;abord un critère s&rsquo;il vous plaît");
define('LC_DEMO_WARN_MSG_SEARCH', 'Aucun produit trouvé !');
define('LC_DEMO_ERROR_MSG_NEW', 'Désolé, 3 produits au maximum peuvent être ajoutés dans cette version de démonstration. Opération annulée.');
define('LC_DEMO_ERROR_MSG_UPDATE', 'Désolé, 3 produits au maximum peuvent être modifiés dans cette version de démonstration. Opération annulée.');
define('LC_DEMO_ERROR_MSG_REMOVE', 'Désolé, 3 produits au maximum peuvent être supprimés dans cette version de démonstration. Opération annulée.');
define('LC_DEMO_INFO_MSG_NEW', 'Le produit a été ajouté.');
define('LC_DEMO_INFO_MSG_UPDATE', 'Le produit a été modifié.');
define('LC_DEMO_INFO_MSG_REMOVE', 'Le produit a été supprimé.');
define('LC_DEMO_INFO_MSG_RESET', 'Les données de démonstration ont été restaurées.');
define('LC_DEMO_LINK_SOURCE_CODE', "Voir le <a href='#' onclick='znetdk.showMenuView(\"crudsourcecode\");'>code source</a> de cette démo");
define('LC_DEMO_TEASER_SOURCE_CODE', "Ce code source est téléchargeable sur <a href='http://www.znetdk.fr/telechargements#democrud' target='_blank'>www.znetdk.fr</a>");

/* Form Demo page labels */
define('LC_DEMOFORM_DESC', 'Les widgets PrimeUI affichés dans ce formulaire
            sont <strong>automatiquement instanciés</strong> par ZnetDK
            à partir de leur seule définition HTML (voir le code source sur la droite).');
define('LC_DEMOFORMVAL_DESC', "Les messages d'erreur affichés à la validation du formulaire peuvent
            être personnalisés à la définition HTML de chaque champ, à l'aide de l'attribut
            <q>data-zdkerrmsg-...</q> qui convient (voir le code source sur la droite).");
define('LC_DEMORBGROUP_DESC', "Les boutons radio PrimeUI sont automatiquement alignés par le widget ZnetDK 'Radio button group'"
        . ".<br>L'élément HTML <strong>&lt;br&gt;</strong> permet de passer à la ligne suivante les boutons radio "
        . "(voir le code source sur la droite).");
define('LC_DEMOLOADATA_DESC', "Ce formulaire illustre le chargement du contenu des widgets <strong>dropdown</strong>"
        . " et <strong>listbox</strong>, à partir d'un contrôleur d'application ZnetDK (voir l'attribut HTML5 <q>data-zdk-action</q>)."
        . "<br>Le contenu du widget peut être actualisé à la demande, avec conservation ou non de la sélection actuelle."
        . "<br>Se référer au code source HTML5, JavaScript et PHP présenté sur la droite pour plus de détails.");
define('LC_DEMOAUTOCOMPL_DESC', 'Dans ce formulaire, le champ <q>Language</q> est le widget PrimeUI <strong>AutoComplete</strong>'
        . ' qui est directement connecté à un contrôleur applicatif ZnetDK, pour obtenir les langues qui correspondent '
        . 'au mot-clé saisi dans le champ texte (voir le code source sur la droite).');
define('LC_DEMOUPLOAD_DESC',"Ce formulaire illustre l'upload de fichier avec le widget '<strong>InputFile</strong>'."
        . " Une miniature est affichée quand une image est sélectionnée. Le contrôleur vérifie que l'image <i>uploadée</i>"
        . " est bien une image.");
define('LC_DEMOSERVERSIDE_DESC', "Les données de formulaire sont validées par l'action spécifiée pour la propriété HTML "
        . "<q>data-zdk-action</q>. Le contrôleur s'appuie sur le <strong>validateur</strong> <q>MyValidator</q> pour contrôler"
        . " les données. La réponse retournées par le contrôleur indique si les données sont OK (<q>setSuccessMessage</q>) ou non "
        . "(<q>setFailedMessage</q>). Voir le code source à droite.");
