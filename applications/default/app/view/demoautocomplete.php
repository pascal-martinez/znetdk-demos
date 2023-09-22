<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">

            <form id="demoformautocomplete" class='zdk-form'>
                <fieldset>
                    <legend>AutoComplete</legend>
                    <!-- Autocomplete (required) -->
                    <label>Language</label>
                    <input class="zdk-autocomplete" type="text" name="myautocomplete"
                           data-zdk-action="demoform:suggestedlang"
                           placeholder="With suggestions..." required>
                    <!-- Simple text input (required) -->
                    <label>Simple text</label>
                    <input type="text" name="mytext" 
                           placeholder="Mandatory, no autocompletion" required>
                    <!-- Simple text input (optional) -->
                    <label>Other simple text</label>
                    <input type="text" name="myothertext" placeholder="Classic input field">
                </fieldset>
                <button class="zdk-bt-yes" type="submit">Submit</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
                <button class="zdk-bt-refresh" type="button">Default values</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <i class="fa fa-info-circle fa-lg"></i>  <?php echo LC_DEMOAUTOCOMPL_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_autoc">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoautocompl-code-html.html"></iframe>
                </div>
                <h3>JavaScript source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoautocompl-code-js.html"></iframe>
                </div>
                <h3>PHP source code (application controller)</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoautocompl-code-php.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>

<script>
    $(function () {
        $("#demoformautocomplete").zdkform({
            complete: function () {
                var formData = $(this).zdkform('getFormData', true),
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

        $('#demoformautocomplete .zdk-bt-refresh').click(function () {
            var formValues = {
                myautocomplete: "French",
                mytext: "my text",
                myothertext: "my other text"
            };
            $("#demoformautocomplete").zdkform('init', formValues);
        });



        $("#accordion_code_autoc").puiaccordion();

    });
</script>