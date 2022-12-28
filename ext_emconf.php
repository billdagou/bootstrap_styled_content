<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Styled Content',
    'description' => 'A set of common content elements based on Bootstrap for Frontend output.',
    'version' => '5.2.2',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
            'css_styled_content' => '',
            'fluid_styled_content' => '',
        ],
    ],
    'state' => 'stable',
    'author' => 'Bill.Dagou',
    'author_email' => 'billdagou@gmail.com',
];