Modifications / Changes
=============================

To fit the Framworks and let them work together smoothly I had to make some adaptions.
Although I left the core functionality of each Framework untouched, so that you can rely
on Updates and Documentations.

## Changes

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
