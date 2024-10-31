<?php
/**
 * Metabox "Behavior"
 *
 * Used in class-popup-admin.php
 * Available variables: $popup
 */

?>
<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'PopUp Appearance', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12" style="overflow: visible">
	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-delay"
				value="delay"
				data-toggle=".opt-display-delay"
				<?php checked( $popup->display, 'delay' ); ?> />
			<?php _e( 'Show after', PO_LANG ); ?>
		</label>
		<span class="opt-display-delay">
			<input type="number"
				min="0"
				max="999"
				maxlength="3"
				name="po_display_data[delay]"
				class="inp-small"
				value="<?php echo esc_attr( $popup->display_data['delay'] ); ?>"
				placeholder="10" />
			<select name="po_display_data[delay_type]">
				<option value="s" <?php selected( $popup->display_data['delay_type'], 's' ); ?>>
					<?php _e( 'Seconds', PO_LANG ); ?>
				</option>
				<option value="m" <?php selected( $popup->display_data['delay_type'], 'm' ); ?>>
					<?php _e( 'Minutes', PO_LANG ); ?>
				</option>
			</select>
		</span>
	</div>

	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-scroll"
				value="scroll"
				data-toggle=".opt-display-scroll"
				<?php checked( $popup->display, 'scroll' ); ?> />
			<?php _e( 'Show after', PO_LANG ); ?>
		</label>
		<span class="opt-display-scroll">
			<input type="number"
				min="0"
				max="9999"
				maxlength="4"
				name="po_display_data[scroll]"
				class="inp-small"
				value="<?php echo esc_attr( $popup->display_data['scroll'] ); ?>"
				placeholder="25" />
			<select name="po_display_data[scroll_type]">
				<option value="%" <?php selected( $popup->display_data['scroll_type'], '%' ); ?>>
					<?php _e( '%', PO_LANG ); ?>
				</option>
				<option value="px" <?php selected( $popup->display_data['scroll_type'], 'px' ); ?>>
					<?php _e( 'px', PO_LANG ); ?>
				</option>
			</select>
		</span>
		<?php _e( 'of the page has been scrolled.', PO_LANG ); ?>
	</div>
	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-anchor"
				value="anchor"
				data-toggle=".opt-display-anchor"
				<?php checked( $popup->display, 'anchor' ); ?> />
			<?php _e( 'Show after user scrolls to CSS class', PO_LANG ); ?>
		</label>
		<span class="opt-display-anchor">
			<input type="text"
				maxlength="50"
				name="po_display_data[anchor]"
				value="<?php echo esc_attr( $popup->display_data['anchor'] ); ?>"
				placeholder="<?php _e( '.class or #id', PO_LANG ); ?>" />
		</span>
	</div>
	<?php do_action( 'popup-display-behavior', $popup ); ?>
</div>

<hr />

<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'Never show this PopUp again', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12">
	<div class="col-12 inp-row">
		<p style="margin-top:0px;">To unlock the "Never show this PopUp again" feature, please upgrade to the $9 version <strong><a target="_blank" href="http://plugin-boutique.com/responsive-popup/">here</a></strong>.</p>
				<p>
				<a href="http://plugin-boutique.com/responsive-popup/" target="_blank" class="button">Purchase $9 Version</a>
			</p>
	</div>
</div>

<hr />

<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'Close PopUp Settings', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12">
	<div class="col-12 inp-row">
		<p style="margin-top:0px;">To unlock the Close PopUp Settings, please upgrade to the $9 version <strong><a target="_blank" href="http://plugin-boutique.com/responsive-popup/">here</a></strong>.</p>
				<p>
				<a href="http://plugin-boutique.com/responsive-popup/" target="_blank" class="button">Purchase $9 Version</a>
			</p>
	</div>

</div>

<hr />

<?php
/**
 * Choose what to do when the PopUp contains a form.
 *
 * @since  4.7.0
 */
?>
<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'Form Settings', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12">
	<div class="col-12 inp-row">
		<p style="margin-top:0px;">To unlock the Form Settings, please upgrade to the $9 version <strong><a target="_blank" href="http://plugin-boutique.com/responsive-popup/">here</a></strong>.</p>
				<p>
				<a href="http://plugin-boutique.com/responsive-popup/" target="_blank" class="button">Purchase $9 Version</a>
			</p>

	</div>
</div>