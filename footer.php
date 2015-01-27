            </div> <!-- end #content -->
        
            <footer data-template-url="<?php bloginfo("template_url"); ?>">

                <p>Copyright &copy; 2006 - <?php echo date(Y); ?> Joey Dehnert</p>

            </footer> 

        </div> <!-- end #container -->  

        <?php

            // to make use of this update your .htaccess on your local machine 
            // in your wordpress root directory to include:
            // SetEnv APPLICATION_ENV development

            if(getenv('APPLICATION_ENV') == 'development'){
                $js_directory = 'js';
            } else {
                $js_directory = 'js-build';
            }

        ?>
        
        <script data-main="<?php bloginfo("template_url"); ?>/library/<?php echo $js_directory; ?>/main" src="<?php bloginfo("template_url"); ?>/library/js/require.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-1881290-7']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        
    </body>
</html>
