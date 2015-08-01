<?php
/**
 * Search form template
 *
 * @package Starter_Theme
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text"><?php _e( 'Search', 'starter-theme' ); ?></label>
    <input type="text" class="field" name="s" id="s" placeholder="" />
    <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'starter-theme' ); ?>" />
	<input type="hidden" name="post_type[]" value="post" />	
</form>