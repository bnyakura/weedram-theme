<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('font-body text-neutral-900 bg-white'); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<?php get_template_part('template-parts/sections/header'); ?>