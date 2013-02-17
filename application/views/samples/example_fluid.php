<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<base href="<?= base_url();?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Codeigniter - HTML5 Boilerplate - Twitter Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

		<!-- see: http://bit.ly/dxGlpE (Apple Safari Documentation) for touch-icon information -->
		<link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-touch-icon-ipad72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-touch-icon-iphone-retina114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-touch-icon-ipad-retina144.png" />
		
		<!-- see: http://www.jonathantneal.com/blog/understand-the-favicon/ for favicon implementation -->		
		<link rel="icon" href="favicon.png" type="image/png" />
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico" /><![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/icons/microsoft-tileicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/css/font-icons.css">
		<!--[if IE 7]><link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                
    </head>
    <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html and slightly modified -->

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
            
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?= site_url('welcome');?>">CodeIgniter // HTML5 bp // Bootstrap</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


    	<div class="container-fluid">
      		<div class="row-fluid">
        
        		<div class="span3">
          
          			<!-- navigation left -->
          			<div class="well sidebar-nav">
            			<ul class="nav nav-list">
              				<li class="nav-header">Sidebar</li>
              				<li class="active"><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li class="nav-header">Sidebar</li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li class="nav-header">Sidebar</li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
              				<li><a href="#">Link</a></li>
            			</ul>
          			</div><!--/.well -->
          			
          			
        		</div><!--/span3-->
        		
        		
        		<div class="span9">
        		
          			<div class="hero-unit">
            			<h1>Hello, world!</h1>
            			<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          			</div>
          			
          			<div class="row-fluid">
          			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            
          			</div><!--/row-->
          			
          			<div class="row-fluid">
          			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            			
            			<div class="span4">
              				<h2>Heading</h2>
              				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              				<p><a class="btn" href="#">View details &raquo;</a></p>
            			</div><!--/span-->
            
          			</div><!--/row-->
          			

        		</div><!--/span9-->
        		
      		</div><!--/row-->

      		<hr>

            <footer>
                <p>footer</p>
            </footer>

    	</div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
        
    <!-- sample google analytics integration -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
        
    </body>
</html>
