<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>" class="<?php echo get_theme_option('Style Sheet'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'normalize', 'style'));
    queue_css_url('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic|PT+Serif:700');
    if (get_current_record('exhibit')) {
        queue_css_file(get_current_record('exhibit')->slug);
    }
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php queue_js_file(array('globals', 'jquery-accessibleMegaMenu')); ?>
    <?php echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>

<div id="wrap" class="<?php echo 'exhibit-' . get_current_record('exhibit')->slug; ?>">
    <header>
	    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>
	    <?php echo theme_header_image(); ?>
        <div id="title-tagline">
            <div id="site-title">
              <?php if($exhibit = get_view()->exhibit): ?>
                <p><?php echo link_to($exhibit, 'show', theme_logo()); ?></p>
              <?php else: ?>
                <?php echo link_to_home_page(theme_logo()); ?>
              <?php endif; ?>
            </div>
            <?php echo rhythm_display_tagline(); ?>
        </div> <!-- end #site-title -->

        <div id="search-container">
            <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
            <?php echo search_form(array('show_advanced' => true)); ?>
            <?php else: ?>
            <?php echo search_form(); ?>
            <?php endif; ?>
        </div>
    </header>

    <nav id="primary-nav">
            <?php echo public_nav_main(); ?>
    </nav>  <!-- end #primary-nav -->

    <div id="content">
        <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>
