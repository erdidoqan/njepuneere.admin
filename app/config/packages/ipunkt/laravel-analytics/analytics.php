<?php

return [

	/**
	 * current selected provider
	 */
	'provider' => 'GoogleAnalytics',

	/**
	 * configurations for all possible providers
	 */
	'configurations' => [
		'GoogleAnalytics' => [

			/**
			 * Tracking ID
			 */
			'tracking_id' => 'UA-XXXXXXXX-1',

			/**
			 * Tracking Domain
			 */
			'tracking_domain' => 'auto',

			/**
			 * enabling the display feature plugin
			 */
			'display_features' => false,

			/**
			 * Use ip anonymized
			 */
			'anonymize_ip' => true,

			/**
			 * Auto tracking pageview: ga('send', 'pageview');
			 * If false, you have to do it manually for each request
			 * Or you can use Analytics::disableAutoTracking(), Analytics::enableAutoTracking()
			 */
			'auto_track' => true,

			/**
			 * Enable the debugging version of the
			 */
			'debug' => false,
		]

	],

];