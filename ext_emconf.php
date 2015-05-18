<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FE-User as newsauthor',
	'description' => 'Add a relation to fe_users to select a frontenduser as news author.',
	'category' => 'be',
	'author' => 'Georg Ringer',
	'author_email' => '',
	'author_company' => 'Cyberhouse GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '',
			'fluid' => '',
			'typo3' => '6.2.12-7.9.99',
			'news' => '3.2.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);