<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'premium' => 'Premium',		],	],
		'stripe-transactions' => [		'title' => 'Stripe Transactions',		'created_at' => 'Time',		'fields' => [			'transaction-user' => 'Email',			'amount' => 'Amount',		],	],
		'stripe-upgrade' => [		'title' => 'Upgrade to Premium',		'created_at' => 'Time',		'fields' => [		],	],
	'custom_controller_index' => 'Персонализиран контролер.',
	'quickadmin_title' => 'GVCC Stripe',
];