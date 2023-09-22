<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demoupload" class='zdk-form'>
                <fieldset>
                    <legend>File upload</legend>
                    <label>Picture file</label>
                    <input type="file" name="file1" data-zdk-action="demoform:upload"
                           data-zdk-nofilelabel="No picture selected!"
                           data-zdk-selbuttonlabel="Select a picture..." required>
                </fieldset>
                <button class="zdk-bt-refresh" type="submit">Upload</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <i class="fa fa-info-circle fa-lg"></i>  <?php echo LC_DEMOUPLOAD_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_upload">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoupload-code-html.html"></iframe>
                </div>
                <h3>PHP source code (application controller)</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoupload-code-php-ctrl.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>

<script>
    $(function () {
        /* Accordion widget instantiation */
        $("#accordion_code_upload").puiaccordion();
    });
</script>