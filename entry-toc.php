<?php

return [
    'pluginName' => 'Entry TOC',

    'fieldsToIndex' => [
        [
            'fieldHandle' => 'exampleNeoField', 
            'fieldTitles' => ['exampleHeading'],
            'numbering' => false
        ],
        [
            'fieldHandle' => 'exampleMatrixField',
            'fieldTitles' => ['exampleHeader', 'exampleOtherHeader']
        ]
    ]
];