
<?php
global $wpdb;
$table_name = $wpdb->prefix . 'chaty_contact_form_leads';
$result = $wpdb->get_results ( "SELECT * FROM ".$table_name ." ORDER BY ID DESC" );
?>
<style>
    #wpwrap {
        position: inherit;
    }
</style>
<div class="wrap">
    <?php
    $result = $wpdb->get_results ( "SELECT * FROM ".$table_name ." ORDER BY ID DESC" );
    if($result){
    ?>
        <div class="">
            <table id="mystickyelement_contact_tab">
                <tbody>
                    <tr>
                        <td><strong>Download &amp; Export All Subscriber to CSV file: </strong></td>
                        <td><a href="<?php echo admin_url("?download_chaty_file=chaty_contact_leads&nonce=".wp_create_nonce("download_chaty_contact_leads")) ?>" class="wpappp_buton" id="wpappp_export_to_csv" value="Export to CSV">Download &amp; Export to CSV</a></td>
                        <td><strong>Delete All Subscribers from Database: </strong></td>
                        <td><input type="button" class="wpappp_buton" id="chaty_delete_all_leads" value="Delete All Data"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <div>
        <form action="" method="post">
            <?php if($result){ ?>
            <div class="tablenav top">
                <div class="alignleft actions bulkactions">
                    <select name="action" id="bulk-action-selector-top">
                        <option value="">Bulk Actions</option>
                        <option value="delete_message">Delete</option>
                    </select>
                    <input type="submit" id="doaction" class="button action" value="Apply">
                </div>
            </div>
            <h2>Contact Form Leads</h2>
            <style>
                body {
                    background: #ffffff;
                }
                #wpwrap {
                    position: inherit;
                }
            </style>
            <?php } ?>
            <?php
            $result = $wpdb->get_results ( "SELECT * FROM ".$table_name ." ORDER BY ID DESC" );
            if($result){
            ?>
                <table border="0" class="responstable">
                    <tr>
                        <th style="width:1%"><?php esc_html_e( 'Bulk', 'chaty' );?></th>
                        <th><?php esc_html_e( 'ID', 'chaty');?></th>
                        <th><?php esc_html_e( 'Widget Name', 'chaty');?></th>
                        <th><?php esc_html_e( 'Name', 'chaty');?></th>
                        <th><?php esc_html_e( 'Email', 'chaty');?></th>
                        <th><?php esc_html_e( 'Phone number', 'chaty');?></th>
                        <th><?php esc_html_e( 'Message', 'chaty');?></th>
                        <th><?php esc_html_e( 'Date', 'chaty');?></th>
                        <th class="text-center"><?php esc_html_e( 'URL', 'chaty');?></th>
                        <th class="text-center"><?php esc_html_e( 'Delete', 'chaty');?></th>
                    </tr>
                    <?php
                    foreach( $result as $res ) {
                        if($res->widget_id == 0) {
                            $widget_name = "Default";
                        } else {
                            $widget_name = get_option("cht_widget_title_".$res->widget_id);
                            if(empty($widget_name)) {
                                $widget_name = "Widget #".($res->widget_id+1);
                            }
                        }
                        ?>
                        <tr data-id="<?php echo $res->id ?>">
                            <td><input type="checkbox" value="<?php echo $res->id ?>" name="chaty_leads[]"></td>
                            <td><?php echo $res->id ?></td>
                            <td><?php echo $widget_name ?></td>
                            <td><?php echo $res->name ?></td>
                            <td><?php echo $res->email ?></td>
                            <td><?php echo $res->phone_number ?></td>
                            <td><?php echo nl2br($res->message) ?></td>
                            <td><?php echo $res->created_on ?></td>
                            <td class="text-center"><a class="url" target="_blank" href="<?php echo $res->ref_page ?>"><span class="dashicons dashicons-external"></span></a></td>
                            <td class="text-center"><a class="remove-record" href="#"><span class="dashicons dashicons-trash"></span></a></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } else { ?>
                <div class="chaty-new-widget-wrap">
                    <h2 class="no-records-title">Contact Form Leads</h2>
                    <div class="chaty-new-widget-row no-records">Your contact form leads will appear here once you get some leads. Please make sure you've added the contact form channel to your Chaty channels in order to collect leads</div>
                </div>
            <?php } ?>
            <input type="hidden" name="remove_chaty_leads" value="<?php echo wp_create_nonce("remove_chaty_leads") ?>">
        </form>
    </div>
</div>
<script>
    jQuery(document).ready(function(){
        var selectedURL = '<?php echo admin_url("admin.php?page=chaty-contact-form-feed&remove_chaty_leads=".wp_create_nonce("remove_chaty_leads")."&action=delete_message&chaty_leads=") ?>';
        jQuery(document).on("click", ".remove-record", function(e){
            e.preventDefault();
            var redirectRemoveURL = selectedURL+jQuery(this).closest("tr").data("id");
            if(confirm("Are you sure you want to delete Record with ID# "+jQuery(this).closest("tr").data("id"))) {
                window.location = redirectRemoveURL;
            }
        });jQuery(document).on("click", "#chaty_delete_all_leads", function(e){
            e.preventDefault();
            var redirectRemoveURL = selectedURL+"remove-all";
            if(confirm("Are you sure you want to delete all Record from the database?")) {
                window.location = redirectRemoveURL;
            }
        });
    });
</script>