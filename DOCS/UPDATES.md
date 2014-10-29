UPDATES
=============================


## 29.10.2014

* updated i18n-Plugin and changed the configuration, 'routes' are fixed 
* added automatic browser language detection to i18n module
<<<<<<< HEAD
* updated 'Font-Awesome' to version 4.2.0, now we support SCSS and LESS
=======
* updated 'Font-Awesome' to version 4.2.0
* updated Twitter Bootstrap to version 3.3.0
>>>>>>> bootstrap

## initial version

* added assets folder to document root and structured css, javascripts, icons, fonts and images there
* moved images, js, css to from boilerplate to assets folder
* moved the template file to 'application/views' to be loaded inside CodeIgniter
* added Windows 8 tile icon file and markup to the template file
* changed the view in 'application/controllers/welcome.php' to template-file to load the HTML5 Template
* changed path's to folders inside the template file
* added apple-touch-icons in multiple resolutions to 'assets/icons'
* extended Bootstrap with Font Awesome Icons, inclusion via CSS-File, see 'assets/css'
* extended CodeIgniter with internationalization Plugin, therefor I modified the 
  routing in 'application/config/routes.php' and added files to 'application/core'
* prepared language folders in 'application/language' for European Union and added sample language
  files to 'application/language/english' and 'application/language/german' for demonstration
* added some Twitter demo-templates to 'application/views' wich can be loaded inside CodeIgniter
* moved the content of initial CSS-Files to SCSS-Files for [Compass SCSS/SASS Framework](DOCS/COMPASS_INFO.md) Compass integration
