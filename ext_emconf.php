<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Styled Content',
    'description' => 'A set of common content elements based on Bootstrap for Frontend output.',
    'category' => 'fe',
    'author' => 'Bill.Dagou',
    'author_email' => 'billdagou@gmail.com',
    'state' => 'stable',
    'version' => '5.3.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
            'css_styled_content' => '',
            'fluid_styled_content' => '',
        ],
    ],
];