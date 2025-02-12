<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Awesome – hello from a dynamic block!', 'awesome' ); ?>
</p>

<p class="follow-us" id="supportroll">If you liked this article, then please follow me on  
<a href="https://github.com/cluhring" title="Chris Luhring on Github" target="_blank" rel="nofollow">Github</a>
and <a href="https://www.linkedin.com/in/cluhring/" title="Chris Luhring on LinkedIn" target="_blank" rel="nofollow">LinkedIn</a>.</p>