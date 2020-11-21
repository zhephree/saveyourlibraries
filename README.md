# saveyourlibraries
This will run anwhere PHP will run. PHP is pretty much just to avoid copy/paste of the header and footer. There is a Dockerfile, but any Apache-like setup will work. The `.htaccess` file differs a little on the production server as it handles `https://www` redirection from the naked http domain.

There is no build system as it's all vanilla JS and CSS since this is a straightforward webpage and not an app. JS just exists for the mobile menu dropdown.

A11y is important so all images must have `alt` text. Color contrast is also important. Use Google's Lighouse tool to verify your changes are accessible.
