<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>" class="<?php echo get_theme_option('Style Sheet'); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php plugin_body(); ?>

<div id="wrap">
    <div id="header">
	    <?php plugin_page_header(); ?>
        <div id="site-title">    
            <p class="sitetitle"><?php echo link_to_home_page(custom_display_logo()); ?></p>
            <?php echo rhythm_display_tagline(); ?>
        </div> <!-- end #site-title -->
	
        <div id="searchwrap">
            <?php echo simple_search_form(); ?>
            <?php echo link_to_advanced_search(); ?>
    	</div> <!-- end #searchwrap -->
	
    </div>  <!-- end #header -->
  
    <div id="primary-nav">
        <ul class="navigation">
            <?php echo custom_public_nav_header(); ?>
        </ul>
    </div>  <!-- end #primary-nav -->
    
    <div id="content">
        <?php plugin_page_content(); ?>