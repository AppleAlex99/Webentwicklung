<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
        \Config\MyRuleSets::class
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

    public $personLogin = [
        'Email' => 'required',
        'Passwort' => 'required',
        'Checkbox' => 'required'
    ];

    public $personLogin_errors = [
        'Email' => [
            'required' => 'Bitte eine gültige Email Adresse eintragen!'
        ],
        'Passwort' => [
            'required' => 'Bitte geben Sie ein Passwort ein!'
        ],
        'Checkbox' => [
            'required' => 'Die Checkbox muss bestätigt werden!'
        ]
    ];
}
