	</div>
	<footer>
		 <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 foot-col-1">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer_1');
                ?>
            </div><!-- class="col-lg-2" -->

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 foot-col-2">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer_2');
                ?>
            </div><!-- class="col-lg-2" -->

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 foot-col-3">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer_3');
                ?>
            </div><!-- class="col-lg-2" -->

            <div class="four col-lg-4 col-md-12 col-sm-12 col-xs-12 foot-col-4">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer_4');
                ?>
            </div><!-- class="col-lg-2" -->
        </div><!-- class="row" -->  
    </div><!-- class="container" -->

 <div class="footer-bottom">
<div class="container">
 <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-5 col-xs-12 footer-left">
                <p class="footer-left-p">2013  ModusVersus</p>
            </div><!-- class="col-lg-5 -->
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 footer-right">
            	<?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer_5');
                ?>               
            </div><!-- class="col-lg-5 -->
        </div>
</div><!-- class="row" -->
 </div><!-- class="container" -->

	</footer>
	<?php wp_footer(); ?>
</body>
</html>