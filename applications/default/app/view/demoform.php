<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demoform" class="zdk-form">
                <fieldset>
                    <legend>ZnetDK form</legend>
                    <!-- Input text -->
                    <label>Inputtext</label>
                    <input type="text" name="inputtext" required>
                    <!-- Textarea -->
                    <label>Textarea</label>
                    <textarea name="textarea" rows="2" required></textarea>
                    <!-- Dropdown -->
                    <label>Dropdown</label>
                    <select class="zdk-dropdown" name="dropdown">
                        <option value="">Select a value</option>
                        <option value="1">Choice 1</option>
                        <option value="2">Choice 2</option>
                        <option value="3">Choice 3</option>
                        <option value="4">Choice 4</option>
                    </select>
                    <!-- Radio button group -->
                    <label>Radio group</label>
                    <div class="zdk-radiobuttongroup" data-name="radiogroup">
                        <input type="radio" value="1">
                        <label>Option 1</label>
                        <input type="radio" value="2">
                        <label>Option 2</label><br>
                        <input type="radio" value="3">
                        <label>Option 3</label>
                        <input type="radio" value="4">
                        <label>Option 4</label>  
                    </div>
                    <!-- Checkbox -->
                    <label>Checkbox</label>
                    <input type="checkbox" name="checkbox" value="1">
                    <span>Check box label</span>
                    <!-- Listbox -->
                    <label>Listbox</label>
                    <select class="zdk-listbox" name="listbox" multiple>
                        <option value="1">Value 1</option>
                        <option value="2">Value 2</option>
                        <option value="3">Value 3</option>
                        <option value="4">Value 4</option>
                    </select>
                </fieldset>
                <button class="zdk-bt-yes" type="submit">Submit</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
                <button id="bt-defval-demo" class="zdk-bt-refresh" type="button">
                    Fill out
                </button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <span class="ui-icon ui-icon-info" style="float: left; margin:0 3px 0 0;"></span>
                <?php echo LC_DEMOFORM_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoform-code-html.html"></iframe>
                </div>
                <h3>JavaScript source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoform-code-js.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>
<script>
    $(function () {
        $('#bt-defval-demo').click(function () {
            var formValues = {
                inputtext: "my text",
                textarea: "my other text",
                dropdown: "3",
                radiogroup: "2",
                checkbox: "1",
                listbox: ["1", "4"]
            };
            $("#demoform").zdkform('init', formValues);
        });
        $("#demoform").zdkform({
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
        $("#accordion_code").puiaccordion();
    });
</script>