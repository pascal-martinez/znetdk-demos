<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demorbgroup" class="zdk-form">
                <fieldset>
                    <legend>Horizontal</legend>
                    <div class="zdk-radiobuttongroup" data-name="radiogroup1">
                        <input type="radio" value="1">
                        <label>Option 1</label>
                        <input type="radio" value="2">
                        <label>Option 2</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Vertical</legend>
                    <div class="zdk-radiobuttongroup" data-name="radiogroup2">
                        <input type="radio" value="1">
                        <label>Option 1</label>
                        <br>
                        <input type="radio" value="2">
                        <label>Option 2</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Mixed</legend>
                    <div class="zdk-radiobuttongroup" data-name="radiogroup3">
                        <input type="radio" value="1">
                        <label>Option 1</label>
                        <input type="radio" value="2">
                        <label>Option 2</label>
                        <br>
                        <input type="radio" value="3">
                        <label>Option 3</label>
                        <input type="radio" value="4">
                        <label>Option 4</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Label is missing</legend>
                    <div class="zdk-radiobuttongroup" data-name="radiogroup4">
                        <input type="radio" value="1">
                        <input type="radio" value="2">
                        <label>Option 2</label>
                    </div>
                </fieldset>
                <!-- Action buttons -->
                <button class="zdk-bt-yes" type="submit">Submit</button>
                <button class="zdk-bt-reset" type="reset">Reset</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <i class="fa fa-info-circle fa-lg"></i>  <?php echo LC_DEMORBGROUP_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_rbgrp">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demorbgroup-code-html.html"></iframe>
                </div>
                <h3>JavaScript source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demorbgroup-code-js.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>
<script>
    $(function () {
        $("#demorbgroup").zdkform({
            complete: function () {
                var formData = $(this).zdkform('getFormData', true),
                        message = "Form validated successfully:\n\n";
                for (i = 0; i < formData.length; i++) {
                    var inputValue = formData[i].value === "" ? "<no selection>" : "'"
                            + formData[i].value + "'";
                    message += "° " + formData[i].name
                            + " = " + inputValue + "\n";
                }
                alert(message);
            }
        });
        $("#accordion_code_rbgrp").puiaccordion();
    });
</script>