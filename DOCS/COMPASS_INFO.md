Compass
=============================

Compass is an open-source CSS Authoring Framework to help you organizing and maintaining your CSS. 
To integrate the exiting styles to Compass, I copied the content of initial CSS-Files to SCSS-Files for Compass integration.


## Getting started with Compass
As Compass is well documentated I refer to the official documentations

* Installation: [http://compass-style.org/install/](http://compass-style.org/install/)
* Documentation: [http://compass-style.org/reference/compass/](http://compass-style.org/reference/compass/)

I've also added a Compass Plugin named 'Animate'.
* Installation of Animate [https://github.com/ericam/compass-animation](https://github.com/ericam/compass-animation)

You can modify the pre-configuration by opening the 'config.rb' in your root. A sample configuration can be found in the 'config.txt'.

Pro Tipp: Don't deliver the 'config.rb' and the 'scss'-Folder to a running project. Use it for production only to keep the delivery of your software as clean as possible.

***


## I don't want to use Compass. Can I use CSS instead?
I recommend using Compass to generate the CSS Files, but if you want you can also use the CSS-Files.
They are located in 'assets/css/originals'. To switch back just...

### ... 1. Copy back the originals to the CSS folder
Copy the files from 'assets/css/originals' to 'assets/css'. The paths inside the CSS-Files will work then from the scratch.

### ... 2. Change the markup in your Template
Template Files are located at 'application/views/'. Open them in your editor, search for the CSS integration in <head> and apply the following changes:

Remove the dynamic generated style
```html
<link rel="stylesheet" href="assets/css/style.css">
```
You can safely delete the file now.

Add the original CSS Files to the template. Please keep the order to make them work together smoothly... :-)
```html
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link rel="stylesheet" href="assets/css/font-icons.css">
<!--[if IE 7]><link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"><![endif]-->
<link rel="stylesheet" href="assets/css/demo.css">
```

### ... 3. Tidy up
As you have decided not to use Compass, you can get rid of the Compass files. You can safely delete the following files and folders:

Location  | Description
  ------------- | -------------
  ../config.rb  | configuration file for Compass Build
  ../scss/  | Folder containing the SCSS-Files
  ../assets/style.css  | dynamic generated CSS file from Compass


