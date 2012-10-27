# WP Multi Config #
## WP Multi Config is multi rad!  ##

> WP Multi Config allows you to run the same site in different environments with ease.


### Installation ###

* **Backup** your `wp-config.php` file
* Place `public_html/wp-config.php` into your root directory (*edit accordingly first*.) 
* Place the included `config folder` above root (*can be moved if need be*.)
* Edit `config/config.env.php` to include your different environment cases.
* Edit a config file for each environment you plan on using (*local, dev, production and staging etc.*)

### Notes ###

* Tested with WP 3.4.2
* Don't forget to add or change out any [Keys & Salts](https://api.wordpress.org/secret-key/1.1/salt/).
* WP Multi Config is meant to be used with version control via Git ([Beanstalk](http://beanstalkapp.com) anyone?) and in cases that you have multiple environments. For example you work locally via [MAMP](http://www.mamp.info/en/index.html)/[WAMP](http://www.wampserver.com/en/) and push to a dev server to test changes before you later deploy to a live/production server etc.
* WPMC doesn't manage syncing of your databases. Only *the connection* to each environment's DB is made. You'd probably need something like [Ramp](http://crowdfavorite.com/wordpress/ramp/) or similar for any kind of content syncing.

### To-Do ###

* Label all configs by when they became available (which version of WP this will or will not work with.)
* Add more configs little by little or as needed (feel free to send in pull requests.)


### Change Log ###

**Oct 26, 2012: 1.0.0**

	Initial Release
	
#### Support ####

[Github Issues](https://github.com/Natetronn/wp-multi-config/issues)

[@natetronn](http://twitter.com/natetronn)