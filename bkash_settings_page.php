<?php _e('<h1>Bkash Settings Data</h1>','bkash-plugin')?>

<form method="post" action="<?php echo admin_url('admin-post.php') ?>">
    <?php
    wp_nonce_field("bkash-plugin");
    ?>
    <table class=form-table>
        <tr>
            <th><label for="bkashmode"><?php _e('Enable Test Mood', 'bkash-plugin'); ?></label></th>
            <td>
                <input type="checkbox" id ="bkashmode" name="bkashmode" value="checked" <?php echo((get_option('bkashmode')) ? "checked" : "");?>/>
            </td>
        </tr>
        <tr>
            <th><label for="bkashusername"><?php _e('Username', 'bkash-plugin'); ?></label></th>
            <td>
                <input type="text" id ="bkashusername"name="bkashusername" value="<?php echo esc_attr(get_option('bkashusername')); ?> " size="50" />
            </td>
        </tr>
        <tr>
            <th><label for="bkashpassword"><?php _e('Password', 'bkash-plugin'); ?></label></th>
            <td>
                <input type="password" id ="bkashpassword"name="bkashpassword" value="<?php echo esc_attr(get_option('bkashpassword')); ?> " size="50" />
            </td>
        </tr>
        <tr>
            <th><label for="bkashappkey"><?php _e('APP Key', 'bkash-plugin'); ?></label></th>
            <td>
                <input type="text" id ="bkashappkey"name="bkashappkey" value="<?php echo esc_attr(get_option('bkashappkey')); ?> " size="50" />
            </td>
        </tr>
        <tr>
            <th><label for="bkashappsecret"><?php _e('APP Secret', 'bkash-plugin'); ?></label></th>
            <td>
                <input type="text" id ="bkashappsecret"name="bkashappsecret" value="<?php echo esc_attr(get_option('bkashappsecret')); ?> " size="50" />
            </td>
        </tr>

        <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
                <input type="submit" name="bp_submit" value="Save changes" class="button-primary" />
            </td>
        </tr>
        <input type="hidden" name="action" value="bp_admin_page">
    </table>
</form> 