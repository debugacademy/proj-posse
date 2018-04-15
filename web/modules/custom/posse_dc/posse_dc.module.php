<?php

function posse_dc_preprocess(&$variables, $hook) {
	views_embed_view('blog_posts', 'block_1');
	$variables['blog_block'] = $blog_block;
}