<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE=='BE') {
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'txicsawstatsM1',
    '',
    '',
    [
      'routeTarget' => \tx_icsawstats_module1::class . '::mainAction',
      'access' => 'admin',
      'name' => 'tools_txicsawstatsM1',
      'icon' => 'EXT:ics_awstats/mod1/moduleicon.gif',
      'navigationComponentId' => '',
      'labels' => 'LLL:EXT:ics_awstats/mod1/locallang_mod.xml'
    ]
  );
}
