<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Styled Content',
    'description' => 'A set of common content elements based on Bootstrap for Frontend output.',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [
            'css_styled_content' => '',
            'fluid_styled_content' => '',
        ],
        'suggests' => [
            'flux' => '',
        ],
    ],
    'state' => 'stable',
    'author' => 'Bill.Dagou',
    'author_email' => 'billdagou@gmail.com',
    'version' => '4.1.1',
];