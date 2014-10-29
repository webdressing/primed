<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<base href="<?= base_url();?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome Page - webdressing primed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

		<!-- see: http://bit.ly/dxGlpE (Apple Safari Documentation) for touch-icon information -->
		<link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-touch-icon-ipad72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-touch-icon-iphone-retina114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-touch-icon-ipad-retina144.png" />
		
		<!-- see: http://www.jonathantneal.com/blog/understand-the-favicon/ for favicon implementation -->		
		<link rel="icon" href="favicon.png" type="image/png" />
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#ffffff">
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
                    <span class="brand"><span class="sep"><i class="fa fa-barcode"></i></span> .primed</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="nav active"><a href="<?= site_url('demo');?>">Welcome</a></li>
                            <li class="nav"><a href="https://github.com/webdressing/primed/blob/master/README.md" target="_blank">Getting Started</a></li>
                            <!--li class="nav"><a href="<?= site_url("demo/samples");?>">Demo Templates</a></li-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language Demo<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><?= anchor($this->lang->switch_uri('de'),'deutsch / german (refresh)');?></li>
                                    <li><?= anchor($this->lang->switch_uri('en'),'englisch / english (refresh)');?></li>
                                    
                                    <li class="divider"></li>
                                    <li class="ajaxnav"><a href="<?= site_url("demo/ajax/german");?>">deutsch / german (ajax)</a></li>
                                    <li class="ajaxnav"><a href="<?= site_url("demo/ajax/english");?>">englisch / english (ajax)</a></li>
                                
                                </ul>
                            </li> 
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="hero-unit" id="heroContainer"></div> <!-- content via ajax, script at the foot -->

            <div class="row">

                <!--h1>Frameworks & Plugins</h1-->

                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-ci">CodeIgniter</h2>
                    <p class="plugin">This installation uses <strong>CodeIgniter 2.1.3</strong> as server-side application framework. </p>
                    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://ellislab.com/codeigniter/user-guide/" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                        <a class="btn btn-small tooltipped" href="https://github.com/EllisLab/CodeIgniter/" target="_blank" data-original-title="show Project on GitHub"><i class="fa fa-github"></i> GitHub</a>
                        <a class="btn btn-small tooltipped" href="http://ellislab.com/forums" target="_blank" data-original-title="CodeIgniter Community"><i class="fa fa-comments"></i> Community</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-html5">HTML5 Boilerplate</h2>
                    <p class="plugin">The page you see here is a clean, responsive HTML5 template using <strong>HTML5 Boilerplate 4.1.0</strong>, <strong>Modernizr 2.6.2</strong> and <strong>JQuery 1.9.1</strong>.</p>
               	    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="https://github.com/h5bp/html5-boilerplate" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation / <i class="fa fa-github"></i> GitHub</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-bootstrap">Bootstrap</h2>
                    <p class="plugin">To bring it all up to a round figure, we added <strong>Twitter Bootstrap 2.3.0</strong> as extension with all it's nice and fancy CSS and Javascript magic.</p>
               	    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://twitter.github.com/bootstrap/getting-started.html" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                        <a class="btn btn-small tooltipped" href="https://github.com/twitter/bootstrap" target="_blank" data-original-title="show Project on GitHub"><i class="fa fa-github"></i> GitHub</a>
                        <a class="btn btn-small tooltipped" href="http://blog.getbootstrap.com/" target="_blank" data-original-title="Project Blog"><i class="fa fa-comment"></i> Blog</a>
                    </p>
                </div>
            </div>
            
            <hr>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-fontawesome">Font Icon Sets <a href="https://github.com/webdressing/primed/blob/master/DOCS/UPDATES.md" target="_blank"><i class="fa fa-star tooltipped update" data-original-title="UPDATE!"></a></i></h2>
                    <p class="plugin">I've added <strong>Font Awesome 4.2</strong> and <strong>Ligature Symbols 2.11</strong> Icon Sets. You will find the fonts at "assets/fonts".</p>
               	    <p class="plugin">
                        <a class="btn btn-small tooltipped" href="http://fortawesome.github.io/Font-Awesome/3.2.1/icons/" target="_blank" data-original-title="Font Awesome Homepage"><i class="fa fa-star"></i> Font Awesome</a>
                        <a class="btn btn-small tooltipped" href="http://kudakurage.com/ligature_symbols/" target="_blank" data-original-title="Ligature Symbols Homepage"><i class="fa fa-star"></i> Ligature Symbols</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-i18n">CodeIgniter i18n <a href="https://github.com/webdressing/primed/blob/master/DOCS/UPDATES.md" target="_blank"><i class="fa fa-star tooltipped update" data-original-title="UPDATE!"></a></i></h2>
                    <p class="plugin">Integrated plugin for internationalization with language codes for the European Union. The Plugin uses a SEO-friendly URI to get/set the language.</p>
               	    <p class="plugin">
                        <a class="btn btn-small btn-green tooltipped" href="http://jeromejaglale.com/doc/php/codeigniter_i18n" target="_blank" data-original-title="User Guide"><i class="fa fa-book"></i> Documentation</a>
                    </p>
                </div>
                <div class="span4 pc">
                    <h2 class="plugin plugin-icon plugins-compass">Supports SCSS</h2>
                    <p class="plugin">Generate well formatted CSS and make your stylesheets easier to organize and maintain with the Compass Framework. </p>
                    <p class="plugin">
                        <a class="btn btn-small tooltipped" href="http://compass-style.org" target="_blank" data-original-title="Compass Homepage"><i class="fa fa-star"></i> Compass</a>
                    </p>
                </div>
            </div> 

            <hr>

            <footer>
                <p class="text-right">
                	<a class="flink tooltiped" href="http://www.webdressing.de" target="_blank" data-original-title="webdressing"> <i class="fa fa-heart"></i> &amp; <i class="fa fa-coffee"></i> </a>
                </p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
        <script type="text/javascript">
        	$(document).ready(function () { 
        	
        		$('.tooltipped').tooltip({placement:'bottom'}); 
        		$('.flink').tooltip({placement:'top'});
        		
        		$("a.nav:first-child").addClass('active'); 
        		
        		$.ajax({
  					type: 'POST',
  					url: '<?= site_url("demo/ajax");?>',
  					beforeSend:function(){
    					// this is where we append a loading image
    					$('#heroContainer').empty();
    					$('#heroContainer').html('<p class="text-center"><i class="icon-spinner icon-spin"></i></p>');
  					},
  					success:function(data){
    					// successful request; do something with the data
    					$('#heroContainer').empty();
    					$("#heroContainer").html(data);
                    	$("#heroContainer").fadeIn(1000, "linear");
  					},
  					error:function(){
    					// failed request; give feedback to user
    					$('#heroContainer').html('<p class="text-center text-error"><i class="icon-remove"></i> <small>The processing Controller <em><u>controllers/welcome/ajax</u></em> is not found or not responding. Please check if the Installation is correct.</small></p>');
  					}
				});

  			});
  							
				
			$('li.ajaxnav').click(function() { 

				$.ajax({
  					type: 'POST',
  					url: $(this).children().attr('href'),
  					beforeSend:function(){
    					// this is where we append a loading image
    					$('#heroContainer').empty();
    					$('#heroContainer').html('<p class="text-center"><i class="icon-spinner icon-spin"></i></p>');
  					},
  					success:function(data){
    					// successful request; do something with the data
    					$('#heroContainer').empty();
    					$("#heroContainer").html(data);
                    	$("#heroContainer").fadeIn(1000, "linear");
  					},
  					error:function(){
    					// failed request; give feedback to user
    					$('#heroContainer').html('<p class="text-center text-error"><i class="icon-remove"></i> <small>The processing Controller <em><u>controllers/welcome</u></em> is not found or not responding. Please check if the Installation is correct.</small></p>');
  					}
				});
				
    			return false; // prevent default
    			    			
    		});

        </script>

    </body>
</html>
