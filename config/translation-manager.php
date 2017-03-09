<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */
    'route' => [
        'prefix' => 'admin/traduzioni',
        'middleware' => [
            'web',
            'auth',
        ],
    ],

	/**
	 * Enable deletion of translations
	 *
	 * @type boolean
	 */
	'delete_enabled' => true,
    
    /**
	 * Enable adding translations
	 */
	'add_enabled' => true,

	/**
	 * Exclude specific groups from Laravel Translation Manager. 
	 * This is useful if, for example, you want to avoid editing the official Laravel language files.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'pagination',
	 *		'reminders',
	 *		'validation',
     *      'package::main'
	 *	)
	 */
	'exclude_groups' => array(),
	
    /**
	 * Exclude specific language.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'vendor',
	 *	)
	 */
	'exclude_languages' => array(
	    'vendor'
	),
    
	/**
	 * Export translations with keys output alphabetically.
	 */
	'sort_keys ' => false,

);
