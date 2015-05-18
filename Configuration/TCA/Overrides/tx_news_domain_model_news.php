<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'fe_author' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:newsauthor/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.fe_author',
		'config' => array(
			'type' => 'select',
			'internal_type' => 'db',
			'allowed' => 'fe_users',
			'foreign_table' => 'fe_users',
			'foreign_table_where' => '',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'items' => array(
				array('', 0),
			),
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'fe_author');