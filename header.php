<!doctype html>
<html <?php language_attributes() ?>>
<head itemscope itemtype="https://schema.org/WebSite">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php is_front_page() ? bloginfo('description') : wp_title('|', true, 'right') ?> | <?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>

<body <?= body_class() ?>>
    <main id="skip-to--content">
