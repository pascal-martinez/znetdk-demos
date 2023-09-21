<script>
    $(function () {
        $('#home_theme_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('try_themes');
        });
        $('#home_crud_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('democrud');
        });
        $('#home_form_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoform');
        });
        $('#home_formval_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoformval');
        });
        $('#home_formrbgrp_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demorbgroup');
        });
        $('#home_users_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('users');
        });
        $('#home_profiles_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('profiles');
        });
        $('#home_formload_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoloadata');
        });
        $('#home_formautocomp_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoautocomplete');
        });
        $('#home_formupload_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoupload');
        });
        
        
        $('#home_formserverside_link').click(function (event) {
            event.preventDefault();
            znetdk.showMenuView('demoserverside');
        });
        
    });
</script>