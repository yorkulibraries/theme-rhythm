<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Stylesheets -->
<?php 
$stylesheet = (get_theme_option('Style Sheet') ? get_theme_option('Style Sheet') : 'fall'); 
?>
<link rel="stylesheet" media="screen" href="<?php echo html_escape(css($stylesheet)); ?>" /><link rel="stylesheet" media="print" href="<?php echo css('print'); ?>" />

<!-- JavaScripts -->
<?php echo js('default'); ?>

<!-- Plugin Stuff -->
<?php echo plugin_header(); ?>

</head>
<body<?php echo $bodyid ? ' id="'.$bodyid.'"' : ''; ?><?php echo $bodyclass ? ' class="'.$bodyclass.'"' : ''; ?>>

<div id="wrap">
  <div id="header">
	
	<div id="site-title">    
		<p class="sitetitle"><?php echo link_to_home_page(); ?></p>
	    <p class="tagline">Brief tagline about this exhibit.</p><!-- <span class="more"><a href="about.php">learn more...</a></span> --></p>   
		
		<!--<div id="about">
	    </div>end #about-->
	</div> <!-- end #site-title -->
	
    <div id="searchwrap">
     	<?php echo simple_search(); ?>
		<?php echo link_to_advanced_search(); ?>
	</div> <!-- end #searchwrap -->

  </div>  <!-- end #header -->
  
 <div id="primary-nav">
     <ul class="navigation">
		<?php echo public_nav_main(array('Browse Items' => uri('items'), 'Browse Collections'=>uri('collections'))); ?>
     	
    </ul>
  <!-- end #primary-nav -->
  </div>

<div id="content">