        </div>

        <footer>

            <nav id="bottom-nav">
                <?php echo public_nav_main(); ?>
            </nav>

            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
                <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
            </div>

            <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

        </footer>

    </div><!-- end wrap -->

    <script>

    jQuery(document).ready(function() {
        jQuery("#primary-nav").accessibleMegaMenu({
            /* prefix for generated unique id attributes, which are required 
               to indicate aria-owns, aria-controls and aria-labelledby */
            uuidPrefix: "accessible-megamenu",
        
            /* css class used to define the megamenu styling */
            menuClass: "nav-menu",
        
            /* css class for a top-level navigation item in the megamenu */
            topNavItemClass: "nav-item",
        
            /* css class for a megamenu panel */
            panelClass: "sub-nav",
        
            /* css class for a group of items within a megamenu panel */
            panelGroupClass: "sub-nav-group",
        
            /* css class for the hover state */
            hoverClass: "hover",
        
            /* css class for the focus state */
            focusClass: "focus",
        
            /* css class for the open state */
            openClass: "open"
        });
    });

    </script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54028600-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
