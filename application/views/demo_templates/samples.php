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
		<meta name="msapplication-TileColor" content="#D83434">
		<meta name="msapplication-TileImage" content="assets/icons/microsoft-tileicon.png">

        <link rel="stylesheet" href="assets/css/style.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                
    </head>
    <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html and slightly modified...  -->

        <nav class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <span class="brand"><strong><span class="sep">//</span> webdressing</strong> primed</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="nav"><a href="<?= site_url('demo');?>">Welcome</a></li>
                            <li class="nav"><a href="https://github.com/webdressing/primed/blob/master/README.md" target="_blank">Getting Started</a></li>
                            <li class="nav active"><a href="<?= site_url("demo/samples");?>">Demo Templates</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language Demo<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><?= anchor($this->lang->switch_uri('de'),'deutsch / german (refresh)');?></li>
                                    <li><?= anchor($this->lang->switch_uri('en'),'englisch / english (refresh)');?></li>
                                    
                                </ul>
                            </li> 
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="hero-unit" id="heroContainer">
                <h1><?=lang('demo_headline')?></h1>
                <p><?=lang('demo_p1')?></p>
                <a class="lnk" href="http://twitter.github.com/bootstrap/getting-started.html#examples" target="_blank" data-original-title="Explore Twitter Samples"><i style="font-size:14px;" class="icon-chevron-right"></i> <?= lang('demo_twitter');?></a>
            </div>


            <div class="row">
                <div class="span4">
                    <h2>Fluid Layout</h2>
                    <p>Simple fluid, responsive Layout with 2 navigations, hero article and content-boxes.</p>
                    <p>
                    	<a class="btn btn-small btn-green" href="<?= site_url("demo/example_fluid");?>" target="_blank"><i class="icon-share-alt"></i> open Example</a>
                    </p>
                </div>
                <div class="span4">
                    <h2>Narrow Layout</h2>
                    <p>A narrow, blog-like Layout with responsive content and fixed Navigation.</p>
                    <p>
                    	<a class="btn btn-small btn-green" href="<?= site_url("demo/example_narrow");?>" target="_blank"><i class="icon-share-alt"></i> open Example</a>
					</p>
               	</div>
                <div class="span4">
                    <h2>Login Example</h2>
                    <p>Sample login page, centered in the viewport with form-elements.</p>
                    <p>
                    	<a class="btn btn-small btn-green" href="<?= site_url("demo/example_login");?>" target="_blank"><i class="icon-share-alt"></i> open Example</a>
					</p>
               	</div>
            </div>

            <hr>

            <footer>
                <p class="text-right">
                	<a class="btn btn-mini footer" href="http://www.webdressing.de" target="_blank" data-original-title="webdressing.de"><i class="icon-comment"></i></a>
                	<a class="btn btn-mini footer" href="https://github.com/webdressing" target="_blank" data-original-title="GitHub"><i class="icon-github"></i></a>
                	<a class="btn btn-mini footer" href="http://de.linkedin.com/in/christopherkrumm" target="_blank" data-original-title="LinkedIn"><i class="icon-linkedin"></i></a>
                </p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
        <script type="text/javascript">$(document).ready(function () {$('.footer').tooltip({placement:'top'});});</script>

    </body>
</html>
