<?php

/**
* Define current environment
*
* Add as many cases as you have environments
*/

switch ($http_host) {
	case 'yourdomain.com' :
		define('ENV', 'prod');
		define('ENV_FULL', 'Production');
		define('ENV_DEBUG', FALSE );
	break;

	case 'stage.yourdomain.com' :
		define('ENV', 'stage');
		define('ENV_FULL', 'Staging');
		define('ENV_DEBUG', FALSE);
	break;
	
	case 'dev.yourdomain.com' :
		define('ENV', 'dev');
		define('ENV_FULL', 'Development');
		define('ENV_DEBUG', FALSE);
	break;

	default : 
		define('ENV', 'local');
		define('ENV_FULL', 'Local');
		define('ENV_DEBUG', FALSE);
	break;
}