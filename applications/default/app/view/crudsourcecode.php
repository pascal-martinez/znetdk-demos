<table style='width:100%;table-layout:fixed;'><tr><td>
<p id='teaser_crud_code'><?php echo LC_DEMO_TEASER_SOURCE_CODE; ?></p>
<div id="accordion_crud_code">
    <h3>HTML5 - View - app/view/democrudview.php</h3>
    <div>
        <iframe src="<?php echo ZNETDK_APP_URI; ?>democrud-code-html.html"></iframe>
    </div>
    <h3>PHP - Controller - app/controller/democrudctrl.php</h3>
    <div>
        <iframe src="<?php echo ZNETDK_APP_URI; ?>democrud-code-php-ctrl.html"></iframe>
    </div>
    <h3>PHP - DAO - app/model/productsdao.php</h3>
    <div>
        <iframe src="<?php echo ZNETDK_APP_URI; ?>democrud-code-php-dao.html"></iframe>
    </div>
    <h3>SQL - Table - products</h3>
    <div>
        <iframe src="<?php echo ZNETDK_APP_URI; ?>democrud-code-sql.html"></iframe>
    </div>
</div>
        </td></tr></table>
<script>
    $(function () {
        $("#accordion_crud_code").puiaccordion();
    });
</script>