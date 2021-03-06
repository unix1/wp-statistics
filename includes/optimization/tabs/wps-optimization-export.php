<div class="wrap">

    <form method="post">
        <input type="hidden" name="wps_export" value="true">
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e( 'Export', 'wp-statistics' ); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="table-to-export"><?php _e( 'Export from:', 'wp-statistics' ); ?></label>
                </th>

                <td>
                    <select dir="ltr" id="table-to-export" name="table-to-export" required>
                        <option value=""><?php _e( 'Please select', 'wp-statistics' ); ?></option>
                        <option value="useronline"><?php echo $wpdb->prefix . 'statistics_useronline'; ?></option>
                        <option value="visit"><?php echo $wpdb->prefix . 'statistics_visit'; ?></option>
                        <option value="visitor"><?php echo $wpdb->prefix . 'statistics_visitor'; ?></option>
                        <option value="exclusions"><?php echo $wpdb->prefix . 'statistics_exclusions'; ?></option>
                        <option value="pages"><?php echo $wpdb->prefix . 'statistics_pages'; ?></option>
                        <option value="search"><?php echo $wpdb->prefix . 'statistics_search'; ?></option>
                    </select>

                    <p class="description"><?php _e( 'Select the table for the output file.', 'wp-statistics' ); ?></p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="export-file-type"><?php _e( 'Export To:', 'wp-statistics' ); ?></label>
                </th>

                <td>
                    <select dir="ltr" id="export-file-type" name="export-file-type" required>
                        <option value=""><?php _e( 'Please select', 'wp-statistics' ); ?></option>
                        <option value="xml">XML</option>
                        <option value="csv">CSV</option>
                        <option value="tsv">TSV</option>
                    </select>

                    <p class="description"><?php _e( 'Select the output file type.', 'wp-statistics' ); ?></p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="export-headers"><?php _e( 'Include Header Row:', 'wp-statistics' ); ?></label>
                </th>

                <td>
                    <input id="export-headers" type="checkbox" value="1" name="export-headers">

                    <p class="description"><?php _e(
							'Include a header row as the first line of the exported file.',
							'wp-statistics'
						); ?></p>
					<?php submit_button( __( 'Start Now!', 'wp-statistics' ), 'primary', 'export-file-submit' ); ?>
                </td>
            </tr>

            </tbody>
        </table>
    </form>
</div>
