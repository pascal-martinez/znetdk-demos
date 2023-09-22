<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demoformval" class="zdk-form">
                <fieldset>
                    <legend>Validation messages</legend>
                    <!-- Required -->
                    <label>Mandatory</label>
                    <input type="text" name="fld_required" required
                           data-zdkerrmsg-required="ZnetDK - enter a value for the 'Mandatory' field!">
                    <!-- Dropdown -->
                    <label>Selection</label>
                    <select class="zdk-dropdown" name="list_required" required
                            data-zdkerrmsg-required="ZnetDK - Select a value for the 'Selection' list!">
                        <option value="">Select a value</option>
                        <option value="1">Choice 1</option>
                        <option value="2">Choice 2</option>
                        <option value="3">Choice 3</option>
                        <option value="4">Choice 4</option>
                    </select>
                    <!-- Max length -->
                    <label>Max length</label>
                    <input type="text" name="fld_maxlength" maxlength="4" placeholder="4 char. maxi">
                    <!-- Pattern -->
                    <label>Pattern</label>
                    <input type="text" pattern="[A-Z]{3}" name="fld_pattern" placeholder="ex. ZDK"
                           data-zdkerrmsg-pattern="ZnetDK - 3 letters in upper case are expected!">
                    <!-- Minimum value -->
                    <label>Min. value</label>
                    <input type="number" name="fld_minvalue" min="10" placeholder="&gt;= 10"
                           data-zdkerrmsg-min="ZnetDK - enter a value &gt;= 10!">
                    <!-- Maximum value -->
                    <label>Max. value</label>
                    <input type="number" name="fld_maxvalue" max="25" placeholder="&lt;= 25"
                           data-zdkerrmsg-max="ZnetDK - enter a value &lt;= 25!">
                    <!-- Type date -->
                    <label>Type date</label>
                    <input type="date" name="fld_date"
                           data-zdkerrmsg-date="ZnetDK - The date you've entered is invalid!">
                    <!-- Type email -->
                    <label>Type email</label>
                    <input type="email" name="fld_email" placeholder="contact@notexist.zz"
                           data-zdkerrmsg-type="ZnetDK - this is not a valid email address!">
                    <!-- Type url -->
                    <label>Type url</label>
                    <input type="url" name="fld_url" placeholder="https://www.znetdk.fr"
                           data-zdkerrmsg-type="ZnetDK - this is not a valid URL!">
                </fieldset>
                <!-- Action buttons -->
                <button class="zdk-bt-yes" type="submit">Submit</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <i class="fa fa-info-circle fa-lg"></i>  <?php echo LC_DEMOFORMVAL_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_val">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoformval-code-html.html"></iframe>
                </div>
                <h3>JavaScript source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoformval-code-js.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>
<script>
    $(function () {
        $("#demoformval").zdkform({
            complete: function () {
                var formData = $(this).zdkform('getFormData',true),
                        message = "Form validated successfully:\n\n";
                for (i = 0; i < formData.length; i++) {
                    var inputValue = formData[i].value === "" ? "<empty>" : "'"
                            + formData[i].value + "'";
                    message += "° " + formData[i].name
                            + " = " + inputValue + "\n";
                }
                alert(message);
            }
        });
        $("#accordion_code_val").puiaccordion();
    });
</script>