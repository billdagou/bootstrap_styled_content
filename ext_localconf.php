<?php
defined('TYPO3') || die();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:bootstrap_styled_content/Configuration/RTE/Bootstrap.yaml';

$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrapstyledcontent/Configuration/TypoScript/';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['bsc'] = [
    'Dagou\\BootstratpStyledContent\\ViewHelpers',
];