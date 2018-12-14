<?php
defined('TYPO3_MODE') || die();

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	[
		'Code-Block',
		'ar_codeelem',
		'extensions-codeelement-codeelement'
	],
	'CType',
	'codeelement'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ar_codeelem'] = 'extensions-codeelement-codeelement';


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['ar_codeelem']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['html']['showitem'];


$GLOBALS['TCA']['tt_content']['types']['ar_codeelem']['columnsOverrides'] = $GLOBALS['TCA']['tt_content']['types']['html']['columnsOverrides'];


//  add code language select
$temporaryColumns = [
	'codelang' => [
		'exclude' => 0,
		'label' => 'Code Language',
		'config' => [
			'type' => 'select',
			'items' => [
				['HTML', 'markup'],
				['CSS', 'css'],
				['JS', 'js'],
				['SASS', 'scss'],
				['SQL', 'sql'],
				['PHP', 'php'],
				['Typoscript', 'typoscript'],
				['Bash', 'bash']
			],
			'size' => 1,
			'maxitems' => 1,
		]
	]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
	'tt_content',
	$temporaryColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tt_content',
	'codelang',
	'ar_codeelem',
	'before:bodytext'
);
