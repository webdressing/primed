<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<base href="<?= base_url();?>" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome Page - webdressing primed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

		<!-- see: http://bit.ly/dxGlpE (Apple Safari Documentation) for touch-icon information -->
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="" />
		<link rel="apple-touch-icon" sizes="114x114" href="" />
		<link rel="apple-touch-icon" sizes="144x144" href="" />
		
		<link rel="icon" href="" type="image/png" />
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                
    </head>
    <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <span class="brand"><span class="sep"><i class="fa fa-ils"></i></span> .primed</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav">

                            <li class="nav"><a href="<?= site_url('yeah');?>"><?= $this->lang->line('nav_welcome');?></a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->lang->line('nav_doc');?> &nbsp;<i class="fa fa-book"></i></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="https://github.com/webdressing/primed/blob/master/DOCS/DOCUMENTATIONS.md" target="_blank">List of Documentations</a></li>
                                    <li><a href="https://github.com/webdressing/primed/blob/master/DOCS/COMPASS_INFO.md" target="_blank">Compass (S)CSS</a></li>
                                
                                </ul>
                            </li> 

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->lang->line('nav_templates');?> &nbsp;<i class="fa fa-picture-o"></i></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="<?= site_url("yeah/templates/bootstrap/basic");?>" target="_blank">Bootstrap Basic</a></li>
                                    <li><a href="<?= site_url("yeah/templates/bootstrap/jumbotron");?>" target="_blank">Bootstrap Jumbotron</a></li>
                                    <li><a href="<?= site_url("yeah/templates/bootstrap/theme");?>" target="_blank">Bootstrap Theme</a></li>

                                    <li class="divider"></li>

                                    <li><a href="<?= site_url("yeah/templates/html5bp/initializr");?>" target="_blank">initializr</a></li>
                                
                                </ul>
                            </li> 

                        </ul>

                        <p class="text-right lang ">
                           <?= anchor($this->lang->switch_uri('de'),'DE');?> | <?= anchor($this->lang->switch_uri('en'),'EN');?>
                        </p>

                    </div>
                </div>
            </div>
        </nav>


        <div class="container">

            <div class="hero-unit welcome-block">
                
                <?= $this->lang->line('welcome');?>

            </div>

            <hr />

            <div class="row plugins">

                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-compass">CodeIgniter</h2>
                    <p class="plugin plugin-text">This installation uses <strong>CodeIgniter 2.1.3</strong> as server-side application framework. </p>
                    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://ellislab.com/codeigniter/user-guide/" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                        <a class="btn btn-small tooltipped" href="https://github.com/EllisLab/CodeIgniter/" target="_blank" data-original-title="show Project on GitHub"><i class="fa fa-github"></i> GitHub</a>
                        <a class="btn btn-small tooltipped" href="http://ellislab.com/forums" target="_blank" data-original-title="CodeIgniter Community"><i class="fa fa-comments"></i> Community</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-html5">HTML5 Boilerplate</h2>
                    <p class="plugin plugin-text">The page you see here is a clean, responsive HTML5 template using <strong>HTML5 Boilerplate 4.1.0</strong>, <strong>Modernizr 2.6.2</strong> and <strong>JQuery 1.9.1</strong>.</p>
                    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="https://github.com/h5bp/html5-boilerplate" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation / <i class="fa fa-github"></i> GitHub</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-bootstrap">Bootstrap </h2>
                    <p class="plugin plugin-text">To bring it all up to a round figure, we added <strong>Twitter Bootstrap 3.3.0</strong> as extension with all it's nice and fancy CSS and Javascript magic.</p>
                    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://twitter.github.com/bootstrap/getting-started.html" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                        <a class="btn btn-small tooltipped" href="https://github.com/twitter/bootstrap" target="_blank" data-original-title="show Project on GitHub"><i class="fa fa-github"></i> GitHub</a>
                        <a class="btn btn-small tooltipped" href="http://blog.getbootstrap.com/" target="_blank" data-original-title="Project Blog"><i class="fa fa-comment"></i> Blog</a>
                    </p>
                </div>
            </div>
            
            <hr />

            <div class="row plugins">
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-fontawesome">Font Icon Sets</h2>
                    <p class="plugin plugin-text">I've added <strong>Font Awesome 4.2</strong> and <strong>Ligature Symbols 2.11</strong> Icon Sets. You will find the fonts at "assets/fonts".</p>
                    <p class="plugin">
                        <a class="btn btn-small tooltipped" href="http://fortawesome.github.io/Font-Awesome/3.2.1/icons/" target="_blank" data-original-title="Font Awesome Homepage"><i class="fa fa-star"></i> Font Awesome</a>
                        <a class="btn btn-small tooltipped" href="http://kudakurage.com/ligature_symbols/" target="_blank" data-original-title="Ligature Symbols Homepage"><i class="fa fa-star"></i> Ligature Symbols</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-i18n">CodeIgniter i18n </h2>
                    <p class="plugin plugin-text">Integrated plugin for internationalization with language codes for the European Union. The Plugin uses a SEO-friendly URI to get/set the language.</p>
                    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://jeromejaglale.com/doc/php/codeigniter_i18n" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-ci">Compass SCSS</h2>
                    <p class="plugin plugin-text">Generate well formatted CSS and make your stylesheets easier to organize and maintain with the Compass Framework. </p>
                    <p class="plugin">
                        <a class="btn btn-small tooltipped" href="http://compass-style.org" target="_blank" data-original-title="Compass Homepage"><i class="fa fa-star"></i> Compass</a>
                    </p>
                </div>
            </div>

            <hr />

            <footer>
                <p class="text-right">
                	<a class="flink tooltiped" href="http://www.webdressing.de" target="_blank" data-original-title="visit webdressing.de"> <i class="fa fa-code"></i> &amp; <i class="fa fa-coffee"></i> </a>
                </p>
            </footer>

        </div> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
