require_once(ABSPATH . 'controller/media/media-new.php'); 
<div class="wrap">
	<h2><?php echo esc_html( $title ); ?></h2>

	<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('media-new.php'); ?>" class="<?php echo esc_attr( $form_class ); ?>" id="file-form">

	<?php media_upload_form(); ?>

	<script type="text/javascript">
	var post_id = <?php echo $post_id; ?>, shortform = 3;
	</script>
	<input type="hidden" name="post_id" id="post_id" value="<?php echo $post_id; ?>" />
	<?php wp_nonce_field('media-form'); ?>
	<div id="media-items" class="hide-if-no-js"></div>
	</form>
</div>