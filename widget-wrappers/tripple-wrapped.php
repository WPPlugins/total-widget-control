<?php 
/**
 * Wrapper Title: Tripple Wrapped Widget
 * Description: This widget has three wrappers
 * 
 * twc_widget :: will echo the widget display
 * @example 
	<pre>

		<?php twc_widget(); ?>

	</pre>
 * 
 * twc_get_widget :: will return the widget display as a string
 * @example 
	<pre>

		<?php echo twc_get_widget(); ?>

	</pre>
 * 
 * twc_widget_object :: will return all of the widgets information
 * @example 
	<pre>

		<?php $widget = twc_widget_object(); ?>

	</pre>
 * 
 * twc_get_widget_sidebar :: will return the current sidebar parameters 
 * @example 
	<pre>

		<?php $sidebar = twc_get_widget_sidebar(); ?>

	</pre>
 * 
 * 
 */
?>
<div class="tripple-wrapped-wrapper">
	<div class="tripple-wrapped-outside">
		<div class="tripple-wrapped-inside">
		<?php twc_widget(); ?>
		</div>
	</div>
</div>


