<?php
/**
 * Metabox "PopUp Content"
 *
 * Used in class-popup-admin.php
 * Available variables: $popup
 */

$has_image = ! empty( $popup->image );

?>
<div class="content-main">
	<div class="wpmui-grid-12">
		<label for="po_content">
			<h3 class="main-content"><?php _e( 'Inner Content', PO_LANG ); ?></h3>
		</label>
	</div>
	<div>
		<?php
		$args = array(
			'textarea_rows' => 10,
			'drag_drop_upload' => true,
		);
		wp_editor( $popup->content, 'po_content', $args );
		?>
	</div>
</div>


<div class="content-image">
	<div class="wpmui-grid-12">
		<label>
			<h3><?php _e( 'Side Image', PO_LANG ); ?></h3>
		</label>
	</div>
	<div class="wpmui-grid-12">
	<p style="margin-top:0px;">To unlock the Side Image feature, please upgrade to the $9 version <strong><a target="_blank" href="http://plugin-boutique.com/responsive-popup/">here</a></strong>.</p>
<p>
	<a href="http://plugin-boutique.com/responsive-popup/" target="_blank" class="button">Purchase $9 Version</a>
</p>

	

		<div class="img-pos"
			<?php if ( ! $has_image ) : ?>
			style="display: none;"
			<?php endif; ?> >

			<div>
				<label>
					<input type="checkbox"
						name="po_image_no_mobile"
						<?php checked( $popup->image_mobile, false ); ?>>
					<?php _e( 'Hide image for mobile devices', PO_LANG ); ?>
				</label>
			</div>

			<div>
				<label class="option <?php if ( 'left' == $popup->image_pos ) : ?>selected<?php endif; ?>">
					<input type="radio" name="po_image_pos" value="left" <?php checked( 'left' == $popup->image_pos ); ?> />
					<span class="image left">
						<i class="dashicons dashicons-format-image"></i>
					</span>
					<i class="dashicons dashicons-editor-alignleft"></i>
				</label>

				<label class="option <?php if ( 'left' != $popup->image_pos ) : ?>selected<?php endif; ?>">
					<input type="radio" name="po_image_pos" value="right" <?php checked( 'left' != $popup->image_pos ); ?> />
					<i class="dashicons dashicons-editor-alignleft"></i>
					<span class="image right">
						<i class="dashicons dashicons-format-image"></i>
					</span>
				</label>
			</div>
		</div>
	</div>
</div>