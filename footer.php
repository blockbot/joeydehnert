            </div> <!-- end #content -->
        
            <footer data-template-url="<?php bloginfo("template_url"); ?>">

                <p>Copyright &copy; 2011 - <?php echo date(Y); ?> Site Owner </p>

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
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
    </body>
</html>
