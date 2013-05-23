<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.


return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Startup Jobs Asia',

	// preloading 'log' component
	'preload'=>array('log'),
        

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.yii-mail.*',
                
            ),

   
       // 'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
		
                'generatorPaths'=>array(
                'bootstrap.gii',
                 ),
           
                    'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			 'class'=>'WebUser',
                        'allowAutoLogin'=>true,
		),
                'bootstrap'=>array(
                'class'=>'bootstrap.components.Bootstrap',
                
                 ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		//'db'=>array(
		//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		//),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=startupjobs',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	
       'mail' => array(
        'class' => 'application.extensions.yii-mail.YiiMail',
        'transportType'=>'smtp', /// case sensitive!
        'transportOptions'=>array(
            'host'=>'smtp.gmail.com',
            'username'=>'inspiredwearntu@gmail.com',
            // or email@googleappsdomain.com
            'password'=>'2011inspiredwear',
            'port'=>'465',
            'encryption'=>'ssl',
            ),
        'viewPath' => 'application.views.mail',
        'logging' => true,
        'dryRun' => false
    ),
            
            
        
        
     
 
            
            
            
         ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);