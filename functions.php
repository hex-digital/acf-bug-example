<?php

add_action( 'acf/init', function () {
    if ( ! function_exists( 'acf_register_block_type' ) ) {
        return;
    }

    acf_register_block_type( array(
        'name' => 'test-block',
        'title' => 'Test Block',
        'description' => 'A test block',
        'category' => 'media',
        'icon' => 'align-pull-right',
        'mode' => 'preview',
        'render_callback' => 'bug_test_render_block',
    ) );
} );

function bug_test_render_block( $block, $content = '', $is_preview = false, $post_id = 0 ) {
    $block_file_path = __DIR__ . '/blocks/' . $block['name'] . '.php';

    if ( file_exists( $block_file_path ) ) {
        include $block_file_path;
    }
}
