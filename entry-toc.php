<?php

return [
    'pluginName' => 'Entry TOC',

    'fieldsToIndex' => [
        [
            'fieldHandle' => 'exampleNeoField', 
            'fieldTitles' => ['exampleHeading'],
            'numbering' => false,
            'blockTitleFields' => ['exampleBlockField', 'exampleBlockField']
        ],
        [
            'fieldHandle' => 'exampleMatrixField',
            'fieldTitles' => ['exampleHeader', 'exampleOtherHeader']
        ]
    ]
];