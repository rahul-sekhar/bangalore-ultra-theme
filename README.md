Bangalore Ultra Theme
=====================
This is a wordpress theme for the Bangalore Ultra website. It must be added to a wordpress install and activated as a theme. Built and tested with wordpress 3.9.2.

The theme is based on the roots starter theme, and uses the roots wrapper for templates. It also follows the roots build process using [grunt](http://gruntjs.com/) for build tasks. One difference is that this theme uses [SASS](http://sass-lang.com/) with the [Compass](http://compass-style.org/) framework rather than LESS.

Setup
-----
`WP_ENV` must be defined in the `wp-config.php` file of your wordpress install, and set to either `development` or `production`. `CACHE_BAN_URL` must also be set. This URL will be sent a `BAN` request when the cache is to be cleared.