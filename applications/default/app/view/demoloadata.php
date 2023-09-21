<table style='width:100%;table-layout:fixed;'>
    <tr>
        <td style="width:370px;padding-right:10px;vertical-align:top;">
            <form id="demoloadata" class='zdk-form'>
                <fieldset>
                    <legend>Content loaded remotly</legend>
                    <label>Data source</label>
                    <div class="zdk-radiobuttongroup" data-name="datasource">
                        <input type="radio" value="getcountries" checked>
                        <label>Countries</label>
                        <br>
                        <input type="radio" value="getcities">
                        <label>Cities</label>
                    </div>
                    <!-- Checkbox -->
                    <label>Keep selection</label>
                    <input type="checkbox" name="checkbox" value="1">
                    <span>On refresh</span>
                    <!-- Dropdown -->
                    <label>Dropdown</label>
                    <select class="zdk-dropdown" name="dropdown" 
                            data-zdk-action="demoform:getcountries"
                            data-zdk-noselection="Select a value..."></select>
                    <!-- Listbox -->
                    <label>Listbox</label>
                    <select class="zdk-listbox" name="listbox" multiple
                            data-zdk-action="demoform:getcountries"></select>
                </fieldset>
                <button class="zdk-bt-refresh" type="button">Refresh</button>
                <button class="zdk-bt-reset" type="button">Clear selection</button>
            </form>
            <p class="ui-state-highlight ui-corner-all" style="padding:10px;">
                <span class="ui-icon ui-icon-info" style="float: left; margin:0 3px 0 0;"></span>
                <?php echo LC_DEMOLOADATA_DESC; ?>
            </p>
        </td>
        <td style="vertical-align:top;">
            <div id="accordion_code_loadata">
                <h3>HTML5 source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoloadata-code-html.html"></iframe>
                </div>
                <h3>JavaScript source code</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoloadata-code-js.html"></iframe>
                </div>
                <h3>PHP source code (application controller)</h3>
                <div>
                    <iframe src="<?php echo ZNETDK_APP_URI; ?>demoloadata-code-php.html"></iframe>
                </div>
            </div>
        </td>
    </tr>
</table>

<script>
    $(function () {
        $("#demoloadata .zdk-bt-reset").click(function() {
            $("#demoloadata .zdk-listbox").zdklistbox('resetSelection');
            $("#demoloadata .zdk-dropdown").zdkdropdown('resetSelection');
        });
        $("#demoloadata .zdk-bt-refresh").click(function () {
            refresh();
        });
        $("#demoloadata :checkbox").bind('puicheckboxchange', function () {
            if ($(this).puicheckbox('isChecked')) {
                $("#demoloadata :radio").puiradiobutton('disable');
            } else {
                $("#demoloadata :radio").puiradiobutton('enable');
                bindChangeDataSource();
            }
        });
        var refresh = function () {
            var formData = $('#demoloadata').zdkform('getFormData', true);
            $("#demoloadata .zdk-listbox").zdklistbox('option', 'action', formData[0].value)
                    .zdklistbox('refresh', formData[1].value);
            $("#demoloadata .zdk-dropdown").zdkdropdown('option', 'action', formData[0].value)
                    .zdkdropdown('refresh', formData[1].value);
        };
        function bindChangeDataSource() {
            $("#demoloadata :radio").bind('puiradiobuttonselectionchange', refresh);
        }
        bindChangeDataSource();
        /* Accordion widget instantiation */
        $("#accordion_code_loadata").puiaccordion();
    });
</script>