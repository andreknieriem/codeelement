<?php

if (TYPO3_MODE == 'BE') {
	$svgProvider = \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class;
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	// register plugin icon
	$iconRegistry->registerIcon('extensions-codeelement-codeelement', $svgProvider,
			['source' => 'EXT:codeelement/Resources/Public/Img/Icons/CodeElement.svg']);
}
