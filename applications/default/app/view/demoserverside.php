<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demoserverside" class="zdk-form" 
                    data-zdk-action="demoform:validate" novalidate>
                <fieldset>
                    <legend>Server-side validation</legend>
                    <!-- Required -->
                    <label>Mandatory</label>
                    <input type="text" name="fld_required" required>
                    <!-- Dropdown -->
                    <label>Selection</label>
                    <select class="zdk-dropdown" name="list_required" required>
                        <option value="">Select a value</option>
                        <option value="1">Choice 1</option>
                        <option value="2">Choice 2</option>
                        <option value="3">Choice 3</option>
                        <option value="4">Choice 4</option>
                    </select>
                    <!-- Max length -->
                    <label>Max length</label>
                    <input type="text" name="fld_maxlength" placeholder="4 char. maxi">
                    <!-- Pattern -->
                    <label>Pattern</label>
                    <input type="text" name="fld_pattern" placeholder="ex. ZDK">
                    <!-- Minimum value -->
                    <label>Min. value</label>
                    <input type="number" name="fld_minvalue" placeholder="&gt;= 10">
                    <!-- Maximum value -->
                    <label>Max. value</label>
                    <input type="number" name="fld_maxvalue" placeholder="&lt;= 25">
                    <!-- Type date -->
                    <label>Type date</label>
                    <input type="date" name="fld_date">
                    <!-- Type email -->
                    <label>Type email</label>
                    <input type="email" name="fld_email" placeholder="contact@notexist.zz">
                    <!-- Type url -->
                    <label>Type url</label>
                    <input type="url" name="fld_url" placeholder="https://www.znetdk.fr">
                </fieldset>
                <!-- Action buttons -->
                <button class="zdk-bt-yes" type="submit">Submit</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <i class="fa fa-info-circle fa-lg"></i>  <?php echo LC_DEMOSERVERSIDE_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_server">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoserverside-code-html.html"></iframe>
                </div>
                <h3>PHP source code (application controller)</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoserverside-code-php-ctrl.html"></iframe>
                </div>
                <h3>PHP source code (Validator object)</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoserverside-code-php-valid.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>
<script>
    $(function () {
        $("#accordion_code_server").puiaccordion();
    });
</script>