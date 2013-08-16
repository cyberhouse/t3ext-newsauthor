<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/***************
 * Add fields to news item
 */
$tempColumns = array(
	'fe_author' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:newsauthor/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.fe_author',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'fe_users',
			'foreign_table' => 'fe_users',
			'foreign_table_where' => '',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
);

t3lib_extMgm::addTCAcolumns('tx_news_domain_model_news', $tempColumns, TRUE);
t3lib_extMgm::addToAllTCAtypes('tx_news_domain_model_news', 'fe_author');

?>