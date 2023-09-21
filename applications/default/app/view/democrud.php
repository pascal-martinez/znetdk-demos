<!-- Actions bar -->
<div id="crud_bar" class="zdk-action-bar" data-zdk-dialog="edit_dialog" data-zdk-datatable="datatable">
    <!-- Action buttons -->
    <button class="zdk-bt-add" title="<?php echo LC_DEMO_BUTTON_TOOLTIP_NEW; ?>"><?php echo LC_DEMO_BUTTON_NEW; ?></button>
    <button class="zdk-bt-edit" title="<?php echo LC_DEMO_BUTTON_TOOLTIP_EDIT; ?>" data-zdk-noselection="<?php echo LC_DEMO_WARN_MSG_SELECT; ?>"><?php echo LC_DEMO_BUTTON_EDIT; ?></button>
    <button class="zdk-bt-remove" title="<?php echo LC_DEMO_BUTTON_TOOLTIP_REMOVE; ?>" data-zdk-noselection="<?php echo LC_DEMO_WARN_MSG_SELECT; ?>" data-zdk-confirm="<?php echo LC_DEMO_QUESTION_MSG_REMOVE . ':' . LC_BTN_YES . ':' . LC_BTN_NO; ?>" data-zdk-action="democrud:remove"><?php echo LC_DEMO_BUTTON_REMOVE; ?></button>
    <!-- Number of rows per page -->
    <select class="zdk-select-rows" title="<?php echo LC_DEMO_RADIO_ROWS; ?>">  
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="100"><?php echo LC_DEMO_RADIO_ALL_ROWS; ?></option>
    </select>
    <!-- Search form -->
    <div class="zdk-filter-rows">
        <input title="<?php echo LC_DEMO_FIELD_SEARCH; ?>" data-zdk-action="democrud:getSearchSuggestions">
        <button class="zdk-bt-clear" title="<?php echo LC_DEMO_BUTTON_TOOLTIP_SEARCH; ?>"></button>
        <button class="zdk-bt-search" title="<?php echo LC_DEMO_FIELD_TOOLTIP_SEARCH; ?>" data-zdk-novalue="<?php echo LC_DEMO_WARN_MSG_CRITERIA; ?>"></button>
    </div>
</div>
<!-- Datatable -->
<div id="datatable" class="zdk-datatable zdk-synchronize" title="<?php echo LC_DEMO_DATATABLE_PRODUCTS; ?>" data-zdk-action="democrud:getData" data-zdk-paginator="10" data-zdk-columns='[
     {"field":"product_name", "headerText": "<?php echo LC_DEMO_FIELD_PRODUCT_NAME; ?>", "sortable":true},
     {"field":"part_number", "headerText": "<?php echo LC_DEMO_FIELD_PART_NUMBER; ?>", "sortable":true},
     {"field":"product_description", "headerText": "<?php echo LC_DEMO_FIELD_DESCRIPTION; ?>", "sortable":true, "tooltip":true},
     {"field":"product_price_money", "headerText": "<?php echo LC_DEMO_FIELD_PRICE; ?>", "sortable":true}]'>
</div>
<!-- Reset button -->
<button id="bt_reset_data" title="<?php echo LC_DEMO_BUTTON_TOOLTIP_RESET; ?>"><?php echo LC_DEMO_BUTTON_RESET; ?></button>
<p id='crud-source-code-link'><?php echo LC_DEMO_LINK_SOURCE_CODE; ?></p>
<!-- form dialog -->
<div id="edit_dialog" class="zdk-modal" title="Product" data-zdk-width="340px"
        data-zdk-confirm="<?php echo LC_MSG_ASK_CANCEL_CHANGES.':'.LC_BTN_YES.':'.LC_BTN_NO;?>">
    <form class='zdk-form' data-zdk-action="democrud:save" data-zdk-datatable="datatable">
        <label><?php echo LC_DEMO_FIELD_PART_NUMBER . LC_DEMO_FIELD_SEMICOLON; ?></label>
        <input name="part_number" maxlength="10" required>
        <label><?php echo LC_DEMO_FIELD_PRODUCT_NAME . LC_DEMO_FIELD_SEMICOLON; ?></label>
        <input name="product_name" maxlength="25" required>
        <label><?php echo LC_DEMO_FIELD_DESCRIPTION . LC_DEMO_FIELD_SEMICOLON; ?></label>
        <textarea name="product_description" rows="3" maxlength="200"></textarea>
        <label><?php echo LC_DEMO_FIELD_PRICE . LC_DEMO_FIELD_SEMICOLON; ?></label>
        <input name="product_price" placeholder="format 999.99" pattern="^\d+\.?\d{0,2}$" maxlength="6" required>
        <input name="id" type="hidden">
        <button class="zdk-bt-save zdk-close-dialog" type="submit"><?php echo LC_DEMO_BUTTON_SAVE; ?></button>
        <button class="zdk-bt-cancel zdk-close-dialog" type="button"><?php echo LC_DEMO_BUTTON_CANCEL; ?></button>
    </form>
</div>
<script>
    $(function () {
        /********* Reset demo data button **********/
        $('#bt_reset_data').puibutton({
            icon: 'ui-icon-arrowreturnthick-1-w',
            iconPos: 'right'
        }).click(function () {
            znetdk.request({
                control: 'democrud',
                action: 'resetData',
                callback: function (response) {
                    $('#datatable').zdkdatatable('setPaginator', 'page', 0);
                    $('#datatable').zdkdatatable('refresh');
                    $('#zdk-messages').puigrowl('show', [{severity: 'info', summary: '<?php echo LC_DEMO_BUTTON_RESET; ?>', detail: response.msg}]);
                }
            });
        });

        /* CRUD bar set as sticky... */
        $(document).one("L1menuTabChange", initStickyBar);
        $(document).one("L1menuViewLoad", initStickyBar);
        function initStickyBar(event) {
            if (event.index === 2) {
                $('#crud_bar').puisticky({
                    scrollableParent: $('div[id="menu-democrud"] > .pui-panel > .pui-panel-content'),
                    autoWidth: true
                });
            }
        }
    });
</script>