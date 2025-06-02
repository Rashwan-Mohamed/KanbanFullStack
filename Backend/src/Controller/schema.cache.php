<?php return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 3641,
  ),
  'kind' => 'Document',
  'definitions' => 
  array (
    0 => 
    array (
      'loc' => 
      array (
        'start' => 0,
        'end' => 53,
      ),
      'kind' => 'SchemaDefinition',
      'directives' => 
      array (
      ),
      'operationTypes' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 14,
            'end' => 26,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'query',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 21,
              'end' => 26,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 21,
                'end' => 26,
              ),
              'kind' => 'Name',
              'value' => 'Query',
            ),
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 32,
            'end' => 50,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'mutation',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 42,
              'end' => 50,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 42,
                'end' => 50,
              ),
              'kind' => 'Name',
              'value' => 'Mutation',
            ),
          ),
        ),
      ),
    ),
    1 => 
    array (
      'loc' => 
      array (
        'start' => 55,
        'end' => 143,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 60,
          'end' => 65,
        ),
        'kind' => 'Name',
        'value' => 'Query',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 73,
            'end' => 106,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 73,
              'end' => 82,
            ),
            'kind' => 'Name',
            'value' => 'getBoards',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 83,
                'end' => 94,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 83,
                  'end' => 89,
                ),
                'kind' => 'Name',
                'value' => 'userId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 90,
                  'end' => 94,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 90,
                    'end' => 93,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 90,
                      'end' => 93,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 97,
              'end' => 106,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 97,
                'end' => 105,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 98,
                  'end' => 104,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 98,
                    'end' => 103,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 98,
                      'end' => 103,
                    ),
                    'kind' => 'Name',
                    'value' => 'board',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 112,
            'end' => 140,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 112,
              'end' => 126,
            ),
            'kind' => 'Name',
            'value' => 'getCurrentUser',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 127,
              'end' => 140,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 127,
                'end' => 140,
              ),
              'kind' => 'Name',
              'value' => 'loginResponse',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    2 => 
    array (
      'loc' => 
      array (
        'start' => 147,
        'end' => 220,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 152,
          'end' => 157,
        ),
        'kind' => 'Name',
        'value' => 'board',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 165,
            'end' => 173,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 165,
              'end' => 167,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 169,
              'end' => 173,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 169,
                'end' => 172,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 169,
                  'end' => 172,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 179,
            'end' => 192,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 179,
              'end' => 183,
            ),
            'kind' => 'Name',
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 185,
              'end' => 192,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 185,
                'end' => 191,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 185,
                  'end' => 191,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 198,
            'end' => 217,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 198,
              'end' => 205,
            ),
            'kind' => 'Name',
            'value' => 'columns',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 207,
              'end' => 217,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 207,
                'end' => 216,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 208,
                  'end' => 215,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 208,
                    'end' => 214,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 208,
                      'end' => 214,
                    ),
                    'kind' => 'Name',
                    'value' => 'Column',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    3 => 
    array (
      'loc' => 
      array (
        'start' => 222,
        'end' => 292,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 227,
          'end' => 233,
        ),
        'kind' => 'Name',
        'value' => 'Column',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 241,
            'end' => 249,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 241,
              'end' => 243,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 245,
              'end' => 249,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 245,
                'end' => 248,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 245,
                  'end' => 248,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 255,
            'end' => 268,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 255,
              'end' => 259,
            ),
            'kind' => 'Name',
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 261,
              'end' => 268,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 261,
                'end' => 267,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 261,
                  'end' => 267,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 274,
            'end' => 289,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 274,
              'end' => 279,
            ),
            'kind' => 'Name',
            'value' => 'tasks',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 281,
              'end' => 289,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 281,
                'end' => 288,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 282,
                  'end' => 287,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 282,
                    'end' => 286,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 282,
                      'end' => 286,
                    ),
                    'kind' => 'Name',
                    'value' => 'task',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    4 => 
    array (
      'loc' => 
      array (
        'start' => 294,
        'end' => 452,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 299,
          'end' => 303,
        ),
        'kind' => 'Name',
        'value' => 'task',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 311,
            'end' => 319,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 311,
              'end' => 313,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 315,
              'end' => 319,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 315,
                'end' => 318,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 315,
                  'end' => 318,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 325,
            'end' => 339,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 325,
              'end' => 330,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 332,
              'end' => 339,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 332,
                'end' => 338,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 332,
                  'end' => 338,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 345,
            'end' => 365,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 345,
              'end' => 356,
            ),
            'kind' => 'Name',
            'value' => 'description',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 358,
              'end' => 365,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 358,
                'end' => 364,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 358,
                  'end' => 364,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 371,
            'end' => 386,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 371,
              'end' => 377,
            ),
            'kind' => 'Name',
            'value' => 'status',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 379,
              'end' => 386,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 379,
                'end' => 385,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 379,
                  'end' => 385,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 392,
            'end' => 406,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 392,
              'end' => 400,
            ),
            'kind' => 'Name',
            'value' => 'statusId',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 402,
              'end' => 406,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 402,
                'end' => 405,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 402,
                  'end' => 405,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        5 => 
        array (
          'loc' => 
          array (
            'start' => 412,
            'end' => 433,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 412,
              'end' => 420,
            ),
            'kind' => 'Name',
            'value' => 'subtasks',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 422,
              'end' => 433,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 422,
                'end' => 432,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 423,
                  'end' => 431,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 423,
                    'end' => 430,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 423,
                      'end' => 430,
                    ),
                    'kind' => 'Name',
                    'value' => 'SubTask',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        6 => 
        array (
          'loc' => 
          array (
            'start' => 439,
            'end' => 449,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 439,
              'end' => 444,
            ),
            'kind' => 'Name',
            'value' => 'order',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 445,
              'end' => 449,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 445,
                'end' => 448,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 445,
                  'end' => 448,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    5 => 
    array (
      'loc' => 
      array (
        'start' => 454,
        'end' => 532,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 459,
          'end' => 466,
        ),
        'kind' => 'Name',
        'value' => 'SubTask',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 474,
            'end' => 482,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 474,
              'end' => 476,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 478,
              'end' => 482,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 478,
                'end' => 481,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 478,
                  'end' => 481,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 488,
            'end' => 502,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 488,
              'end' => 493,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 495,
              'end' => 502,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 495,
                'end' => 501,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 495,
                  'end' => 501,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 508,
            'end' => 529,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 508,
              'end' => 519,
            ),
            'kind' => 'Name',
            'value' => 'isCompleted',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 521,
              'end' => 529,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 521,
                'end' => 528,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 521,
                  'end' => 528,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    6 => 
    array (
      'loc' => 
      array (
        'start' => 538,
        'end' => 614,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 544,
          'end' => 551,
        ),
        'kind' => 'Name',
        'value' => 'subtask',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 558,
            'end' => 572,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 558,
              'end' => 563,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 565,
              'end' => 572,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 565,
                'end' => 571,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 565,
                  'end' => 571,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 578,
            'end' => 599,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 578,
              'end' => 589,
            ),
            'kind' => 'Name',
            'value' => 'isCompleted',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 591,
              'end' => 599,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 591,
                'end' => 598,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 591,
                  'end' => 598,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 605,
            'end' => 611,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 605,
              'end' => 607,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 608,
              'end' => 611,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 608,
                'end' => 611,
              ),
              'kind' => 'Name',
              'value' => 'Int',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    7 => 
    array (
      'loc' => 
      array (
        'start' => 616,
        'end' => 781,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 622,
          'end' => 631,
        ),
        'kind' => 'Name',
        'value' => 'inputTask',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 638,
            'end' => 652,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 638,
              'end' => 643,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 645,
              'end' => 652,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 645,
                'end' => 651,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 645,
                  'end' => 651,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 658,
            'end' => 678,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 658,
              'end' => 669,
            ),
            'kind' => 'Name',
            'value' => 'description',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 671,
              'end' => 678,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 671,
                'end' => 677,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 671,
                  'end' => 677,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 684,
            'end' => 699,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 684,
              'end' => 690,
            ),
            'kind' => 'Name',
            'value' => 'status',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 692,
              'end' => 699,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 692,
                'end' => 698,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 692,
                  'end' => 698,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 705,
            'end' => 719,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 705,
              'end' => 713,
            ),
            'kind' => 'Name',
            'value' => 'statusId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 715,
              'end' => 719,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 715,
                'end' => 718,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 715,
                  'end' => 718,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 725,
            'end' => 746,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 725,
              'end' => 733,
            ),
            'kind' => 'Name',
            'value' => 'subtasks',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 735,
              'end' => 746,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 735,
                'end' => 745,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 736,
                  'end' => 744,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 736,
                    'end' => 743,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 736,
                      'end' => 743,
                    ),
                    'kind' => 'Name',
                    'value' => 'subtask',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        5 => 
        array (
          'loc' => 
          array (
            'start' => 752,
            'end' => 762,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 752,
              'end' => 758,
            ),
            'kind' => 'Name',
            'value' => 'taskId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 759,
              'end' => 762,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 759,
                'end' => 762,
              ),
              'kind' => 'Name',
              'value' => 'Int',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        6 => 
        array (
          'loc' => 
          array (
            'start' => 768,
            'end' => 778,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 768,
              'end' => 773,
            ),
            'kind' => 'Name',
            'value' => 'order',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 774,
              'end' => 778,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 774,
                'end' => 777,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 774,
                  'end' => 777,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    8 => 
    array (
      'loc' => 
      array (
        'start' => 785,
        'end' => 854,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 790,
          'end' => 806,
        ),
        'kind' => 'Name',
        'value' => 'AddBoardResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 814,
            'end' => 827,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 814,
              'end' => 821,
            ),
            'kind' => 'Name',
            'value' => 'boardId',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 823,
              'end' => 827,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 823,
                'end' => 826,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 823,
                  'end' => 826,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 833,
            'end' => 851,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 833,
              'end' => 842,
            ),
            'kind' => 'Name',
            'value' => 'columnIds',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 844,
              'end' => 851,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 844,
                'end' => 850,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 845,
                  'end' => 849,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 845,
                    'end' => 848,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 845,
                      'end' => 848,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    9 => 
    array (
      'loc' => 
      array (
        'start' => 856,
        'end' => 922,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 861,
          'end' => 876,
        ),
        'kind' => 'Name',
        'value' => 'addTaskResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 883,
            'end' => 894,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 883,
              'end' => 889,
            ),
            'kind' => 'Name',
            'value' => 'taskId',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 890,
              'end' => 894,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 890,
                'end' => 893,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 890,
                  'end' => 893,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 900,
            'end' => 919,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 900,
              'end' => 911,
            ),
            'kind' => 'Name',
            'value' => 'subTasksIds',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 912,
              'end' => 919,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 912,
                'end' => 918,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 913,
                  'end' => 917,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 913,
                    'end' => 916,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 913,
                      'end' => 916,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    10 => 
    array (
      'loc' => 
      array (
        'start' => 924,
        'end' => 971,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 929,
          'end' => 947,
        ),
        'kind' => 'Name',
        'value' => 'editColumnResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 954,
            'end' => 968,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 954,
              'end' => 960,
            ),
            'kind' => 'Name',
            'value' => 'colIds',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 961,
              'end' => 968,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 961,
                'end' => 967,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 962,
                  'end' => 966,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 962,
                    'end' => 965,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 962,
                      'end' => 965,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    11 => 
    array (
      'loc' => 
      array (
        'start' => 973,
        'end' => 1021,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 978,
          'end' => 994,
        ),
        'kind' => 'Name',
        'value' => 'editTaskResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1001,
            'end' => 1018,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1001,
              'end' => 1010,
            ),
            'kind' => 'Name',
            'value' => 'newSubIds',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1011,
              'end' => 1018,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1011,
                'end' => 1017,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1012,
                  'end' => 1016,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1012,
                    'end' => 1015,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1012,
                      'end' => 1015,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    12 => 
    array (
      'loc' => 
      array (
        'start' => 1023,
        'end' => 1141,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1028,
          'end' => 1032,
        ),
        'kind' => 'Name',
        'value' => 'User',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1040,
            'end' => 1048,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1040,
              'end' => 1042,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1044,
              'end' => 1048,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1044,
                'end' => 1047,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1044,
                  'end' => 1047,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1054,
            'end' => 1071,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1054,
              'end' => 1062,
            ),
            'kind' => 'Name',
            'value' => 'username',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1064,
              'end' => 1071,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1064,
                'end' => 1070,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1064,
                  'end' => 1070,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 1077,
            'end' => 1091,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1077,
              'end' => 1082,
            ),
            'kind' => 'Name',
            'value' => 'email',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1084,
              'end' => 1091,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1084,
                'end' => 1090,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1084,
                  'end' => 1090,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 1097,
            'end' => 1112,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1097,
              'end' => 1104,
            ),
            'kind' => 'Name',
            'value' => 'isGuest',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1105,
              'end' => 1112,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1105,
                'end' => 1112,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 1118,
            'end' => 1138,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1118,
              'end' => 1130,
            ),
            'kind' => 'Name',
            'value' => 'last_updated',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1131,
              'end' => 1138,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1131,
                'end' => 1137,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1131,
                  'end' => 1137,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    13 => 
    array (
      'loc' => 
      array (
        'start' => 1145,
        'end' => 1214,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1151,
          'end' => 1166,
        ),
        'kind' => 'Name',
        'value' => 'userCredentials',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1173,
            'end' => 1189,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1173,
              'end' => 1181,
            ),
            'kind' => 'Name',
            'value' => 'username',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1182,
              'end' => 1189,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1182,
                'end' => 1188,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1182,
                  'end' => 1188,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1195,
            'end' => 1211,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1195,
              'end' => 1203,
            ),
            'kind' => 'Name',
            'value' => 'password',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1204,
              'end' => 1211,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1204,
                'end' => 1210,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1204,
                  'end' => 1210,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    14 => 
    array (
      'loc' => 
      array (
        'start' => 1216,
        'end' => 1275,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1221,
          'end' => 1234,
        ),
        'kind' => 'Name',
        'value' => 'loginResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1242,
            'end' => 1257,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1242,
              'end' => 1249,
            ),
            'kind' => 'Name',
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1250,
              'end' => 1257,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1250,
                'end' => 1256,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1250,
                  'end' => 1256,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1263,
            'end' => 1272,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1263,
              'end' => 1267,
            ),
            'kind' => 'Name',
            'value' => 'user',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1268,
              'end' => 1272,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1268,
                'end' => 1272,
              ),
              'kind' => 'Name',
              'value' => 'User',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    15 => 
    array (
      'loc' => 
      array (
        'start' => 1277,
        'end' => 1397,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1282,
          'end' => 1298,
        ),
        'kind' => 'Name',
        'value' => 'registerResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1306,
            'end' => 1325,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1306,
              'end' => 1316,
            ),
            'kind' => 'Name',
            'value' => 'successful',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1317,
              'end' => 1325,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1317,
                'end' => 1324,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1317,
                  'end' => 1324,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1331,
            'end' => 1341,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1331,
              'end' => 1337,
            ),
            'kind' => 'Name',
            'value' => 'userId',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1338,
              'end' => 1341,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1338,
                'end' => 1341,
              ),
              'kind' => 'Name',
              'value' => 'Int',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 1347,
            'end' => 1367,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1347,
              'end' => 1359,
            ),
            'kind' => 'Name',
            'value' => 'existingUser',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1360,
              'end' => 1367,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1360,
                'end' => 1367,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 1373,
            'end' => 1394,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1373,
              'end' => 1386,
            ),
            'kind' => 'Name',
            'value' => 'existingEmail',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1387,
              'end' => 1394,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1387,
                'end' => 1394,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    16 => 
    array (
      'loc' => 
      array (
        'start' => 1399,
        'end' => 1476,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1404,
          'end' => 1425,
        ),
        'kind' => 'Name',
        'value' => 'changeProfileResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1433,
            'end' => 1448,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1433,
              'end' => 1440,
            ),
            'kind' => 'Name',
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1441,
              'end' => 1448,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1441,
                'end' => 1447,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1441,
                  'end' => 1447,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1454,
            'end' => 1473,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1454,
              'end' => 1464,
            ),
            'kind' => 'Name',
            'value' => 'successful',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1465,
              'end' => 1473,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1465,
                'end' => 1472,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1465,
                  'end' => 1472,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    17 => 
    array (
      'loc' => 
      array (
        'start' => 1478,
        'end' => 3639,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1483,
          'end' => 1491,
        ),
        'kind' => 'Name',
        'value' => 'Mutation',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1501,
            'end' => 1582,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1501,
              'end' => 1509,
            ),
            'kind' => 'Name',
            'value' => 'register',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 1510,
                'end' => 1527,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1510,
                  'end' => 1518,
                ),
                'kind' => 'Name',
                'value' => 'username',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1520,
                  'end' => 1527,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1520,
                    'end' => 1526,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1520,
                      'end' => 1526,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 1529,
                'end' => 1543,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1529,
                  'end' => 1534,
                ),
                'kind' => 'Name',
                'value' => 'email',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1536,
                  'end' => 1543,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1536,
                    'end' => 1542,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1536,
                      'end' => 1542,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'loc' => 
              array (
                'start' => 1545,
                'end' => 1562,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1545,
                  'end' => 1553,
                ),
                'kind' => 'Name',
                'value' => 'password',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1555,
                  'end' => 1562,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1555,
                    'end' => 1561,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1555,
                      'end' => 1561,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1565,
              'end' => 1582,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1565,
                'end' => 1581,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1565,
                  'end' => 1581,
                ),
                'kind' => 'Name',
                'value' => 'registerResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1588,
            'end' => 1643,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1588,
              'end' => 1593,
            ),
            'kind' => 'Name',
            'value' => 'login',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 1594,
                'end' => 1626,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1594,
                  'end' => 1609,
                ),
                'kind' => 'Name',
                'value' => 'userCredentials',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1610,
                  'end' => 1626,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1610,
                    'end' => 1625,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1610,
                      'end' => 1625,
                    ),
                    'kind' => 'Name',
                    'value' => 'userCredentials',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1629,
              'end' => 1643,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1629,
                'end' => 1642,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1629,
                  'end' => 1642,
                ),
                'kind' => 'Name',
                'value' => 'loginResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 1649,
            'end' => 1665,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1649,
              'end' => 1655,
            ),
            'kind' => 'Name',
            'value' => 'logout',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1657,
              'end' => 1665,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1657,
                'end' => 1664,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1657,
                  'end' => 1664,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 1671,
            'end' => 1686,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1671,
              'end' => 1681,
            ),
            'kind' => 'Name',
            'value' => 'loginGuest',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1682,
              'end' => 1686,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1682,
                'end' => 1685,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1682,
                  'end' => 1685,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 1692,
            'end' => 1712,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1692,
              'end' => 1703,
            ),
            'kind' => 'Name',
            'value' => 'logOutGuest',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1704,
              'end' => 1712,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1704,
                'end' => 1711,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1704,
                  'end' => 1711,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        5 => 
        array (
          'loc' => 
          array (
            'start' => 1718,
            'end' => 1826,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1718,
              'end' => 1731,
            ),
            'kind' => 'Name',
            'value' => 'changeProfile',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 1732,
                'end' => 1747,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1732,
                  'end' => 1739,
                ),
                'kind' => 'Name',
                'value' => 'newName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1740,
                  'end' => 1747,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1740,
                    'end' => 1746,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1740,
                      'end' => 1746,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 1748,
                'end' => 1764,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1748,
                  'end' => 1756,
                ),
                'kind' => 'Name',
                'value' => 'newEmail',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1757,
                  'end' => 1764,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1757,
                    'end' => 1763,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1757,
                      'end' => 1763,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'loc' => 
              array (
                'start' => 1765,
                'end' => 1783,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1765,
                  'end' => 1776,
                ),
                'kind' => 'Name',
                'value' => 'newPassword',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1777,
                  'end' => 1783,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1777,
                    'end' => 1783,
                  ),
                  'kind' => 'Name',
                  'value' => 'String',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            3 => 
            array (
              'loc' => 
              array (
                'start' => 1784,
                'end' => 1802,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1784,
                  'end' => 1795,
                ),
                'kind' => 'Name',
                'value' => 'oldPassword',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1796,
                  'end' => 1802,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1796,
                    'end' => 1802,
                  ),
                  'kind' => 'Name',
                  'value' => 'String',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1804,
              'end' => 1826,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1804,
                'end' => 1825,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1804,
                  'end' => 1825,
                ),
                'kind' => 'Name',
                'value' => 'changeProfileResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        6 => 
        array (
          'loc' => 
          array (
            'start' => 1887,
            'end' => 1941,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1887,
              'end' => 1898,
            ),
            'kind' => 'Name',
            'value' => 'editSubTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 1909,
                'end' => 1924,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1909,
                  'end' => 1916,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1917,
                  'end' => 1924,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1917,
                    'end' => 1924,
                  ),
                  'kind' => 'Name',
                  'value' => 'subtask',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1933,
              'end' => 1941,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1933,
                'end' => 1940,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1933,
                  'end' => 1940,
                ),
                'kind' => 'Name',
                'value' => 'SubTask',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        7 => 
        array (
          'loc' => 
          array (
            'start' => 2000,
            'end' => 2037,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2000,
              'end' => 2010,
            ),
            'kind' => 'Name',
            'value' => 'addSubTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2011,
                'end' => 2026,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2011,
                  'end' => 2018,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2019,
                  'end' => 2026,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2019,
                    'end' => 2026,
                  ),
                  'kind' => 'Name',
                  'value' => 'subtask',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2029,
              'end' => 2037,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2029,
                'end' => 2036,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2029,
                  'end' => 2036,
                ),
                'kind' => 'Name',
                'value' => 'SubTask',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        8 => 
        array (
          'loc' => 
          array (
            'start' => 2069,
            'end' => 2109,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2069,
              'end' => 2082,
            ),
            'kind' => 'Name',
            'value' => 'deleteSubTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2083,
                'end' => 2098,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2083,
                  'end' => 2092,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2094,
                  'end' => 2098,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2094,
                    'end' => 2097,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2094,
                      'end' => 2097,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2101,
              'end' => 2109,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2101,
                'end' => 2108,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2101,
                  'end' => 2108,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        9 => 
        array (
          'loc' => 
          array (
            'start' => 2159,
            'end' => 2198,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2159,
              'end' => 2172,
            ),
            'kind' => 'Name',
            'value' => 'changeSubTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2173,
                'end' => 2188,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2173,
                  'end' => 2182,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2184,
                  'end' => 2188,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2184,
                    'end' => 2187,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2184,
                      'end' => 2187,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2190,
              'end' => 2198,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2190,
                'end' => 2197,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2190,
                  'end' => 2197,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        10 => 
        array (
          'loc' => 
          array (
            'start' => 2269,
            'end' => 2318,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2269,
              'end' => 2277,
            ),
            'kind' => 'Name',
            'value' => 'editTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2278,
                'end' => 2298,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2278,
                  'end' => 2287,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2288,
                  'end' => 2298,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2288,
                    'end' => 2297,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2288,
                      'end' => 2297,
                    ),
                    'kind' => 'Name',
                    'value' => 'inputTask',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2301,
              'end' => 2318,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2301,
                'end' => 2317,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2301,
                  'end' => 2317,
                ),
                'kind' => 'Name',
                'value' => 'editTaskResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        11 => 
        array (
          'loc' => 
          array (
            'start' => 2352,
            'end' => 2414,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2352,
              'end' => 2366,
            ),
            'kind' => 'Name',
            'value' => 'editTaskStatus',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2367,
                'end' => 2378,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2367,
                  'end' => 2373,
                ),
                'kind' => 'Name',
                'value' => 'taskId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2374,
                  'end' => 2378,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2374,
                    'end' => 2377,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2374,
                      'end' => 2377,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 2379,
                'end' => 2392,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2379,
                  'end' => 2387,
                ),
                'kind' => 'Name',
                'value' => 'statusID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2388,
                  'end' => 2392,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2388,
                    'end' => 2391,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2388,
                      'end' => 2391,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'loc' => 
              array (
                'start' => 2393,
                'end' => 2403,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2393,
                  'end' => 2398,
                ),
                'kind' => 'Name',
                'value' => 'order',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2399,
                  'end' => 2403,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2399,
                    'end' => 2402,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2399,
                      'end' => 2402,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2406,
              'end' => 2414,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2406,
                'end' => 2413,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2406,
                  'end' => 2413,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        12 => 
        array (
          'loc' => 
          array (
            'start' => 2465,
            'end' => 2512,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2465,
              'end' => 2472,
            ),
            'kind' => 'Name',
            'value' => 'addTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2473,
                'end' => 2493,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2473,
                  'end' => 2482,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2483,
                  'end' => 2493,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2483,
                    'end' => 2492,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2483,
                      'end' => 2492,
                    ),
                    'kind' => 'Name',
                    'value' => 'inputTask',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2496,
              'end' => 2512,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2496,
                'end' => 2511,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2496,
                  'end' => 2511,
                ),
                'kind' => 'Name',
                'value' => 'addTaskResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        13 => 
        array (
          'loc' => 
          array (
            'start' => 2544,
            'end' => 2596,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2544,
              'end' => 2555,
            ),
            'kind' => 'Name',
            'value' => 'changeOrder',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2556,
                'end' => 2571,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2556,
                  'end' => 2563,
                ),
                'kind' => 'Name',
                'value' => 'tasksId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2564,
                  'end' => 2571,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2564,
                    'end' => 2570,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2565,
                      'end' => 2569,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2565,
                        'end' => 2568,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2565,
                          'end' => 2568,
                        ),
                        'kind' => 'Name',
                        'value' => 'Int',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 2572,
                'end' => 2586,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2572,
                  'end' => 2578,
                ),
                'kind' => 'Name',
                'value' => 'orders',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2579,
                  'end' => 2586,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2579,
                    'end' => 2585,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2580,
                      'end' => 2584,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2580,
                        'end' => 2583,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2580,
                          'end' => 2583,
                        ),
                        'kind' => 'Name',
                        'value' => 'Int',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2588,
              'end' => 2596,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2588,
                'end' => 2595,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2588,
                  'end' => 2595,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        14 => 
        array (
          'loc' => 
          array (
            'start' => 2647,
            'end' => 2681,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2647,
              'end' => 2657,
            ),
            'kind' => 'Name',
            'value' => 'deleteTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2658,
                'end' => 2670,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2658,
                  'end' => 2664,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2666,
                  'end' => 2670,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2666,
                    'end' => 2669,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2666,
                      'end' => 2669,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2673,
              'end' => 2681,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2673,
                'end' => 2680,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2673,
                  'end' => 2680,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        15 => 
        array (
          'loc' => 
          array (
            'start' => 2781,
            'end' => 2831,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2781,
              'end' => 2793,
            ),
            'kind' => 'Name',
            'value' => 'editTask_Sub',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2794,
                'end' => 2806,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2794,
                  'end' => 2800,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2802,
                  'end' => 2806,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2802,
                    'end' => 2805,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2802,
                      'end' => 2805,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 2808,
                'end' => 2823,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2808,
                  'end' => 2817,
                ),
                'kind' => 'Name',
                'value' => 'subTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2819,
                  'end' => 2823,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2819,
                    'end' => 2822,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2819,
                      'end' => 2822,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2826,
              'end' => 2831,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2826,
                'end' => 2830,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2826,
                  'end' => 2830,
                ),
                'kind' => 'Name',
                'value' => 'task',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        16 => 
        array (
          'loc' => 
          array (
            'start' => 2898,
            'end' => 2985,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2898,
              'end' => 2908,
            ),
            'kind' => 'Name',
            'value' => 'editColumn',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2909,
                'end' => 2926,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2909,
                  'end' => 2917,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2919,
                  'end' => 2926,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2919,
                    'end' => 2925,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2920,
                      'end' => 2924,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2920,
                        'end' => 2923,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2920,
                          'end' => 2923,
                        ),
                        'kind' => 'Name',
                        'value' => 'Int',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 2928,
                'end' => 2950,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2928,
                  'end' => 2938,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2940,
                  'end' => 2950,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2940,
                    'end' => 2949,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2941,
                      'end' => 2948,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2941,
                        'end' => 2947,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2941,
                          'end' => 2947,
                        ),
                        'kind' => 'Name',
                        'value' => 'String',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'loc' => 
              array (
                'start' => 2951,
                'end' => 2963,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2951,
                  'end' => 2958,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2959,
                  'end' => 2963,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2959,
                    'end' => 2962,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2959,
                      'end' => 2962,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2966,
              'end' => 2985,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2966,
                'end' => 2984,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2966,
                  'end' => 2984,
                ),
                'kind' => 'Name',
                'value' => 'editColumnResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        17 => 
        array (
          'loc' => 
          array (
            'start' => 3032,
            'end' => 3086,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3032,
              'end' => 3041,
            ),
            'kind' => 'Name',
            'value' => 'addColumn',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3042,
                'end' => 3064,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3042,
                  'end' => 3052,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3054,
                  'end' => 3064,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3054,
                    'end' => 3063,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3055,
                      'end' => 3062,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3055,
                        'end' => 3061,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3055,
                          'end' => 3061,
                        ),
                        'kind' => 'Name',
                        'value' => 'String',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 3065,
                'end' => 3077,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3065,
                  'end' => 3072,
                ),
                'kind' => 'Name',
                'value' => 'boardId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3073,
                  'end' => 3077,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3073,
                    'end' => 3076,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3073,
                      'end' => 3076,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3080,
              'end' => 3086,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3080,
                'end' => 3085,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3081,
                  'end' => 3084,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3081,
                    'end' => 3084,
                  ),
                  'kind' => 'Name',
                  'value' => 'Int',
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        18 => 
        array (
          'loc' => 
          array (
            'start' => 3113,
            'end' => 3154,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3113,
              'end' => 3125,
            ),
            'kind' => 'Name',
            'value' => 'deleteColumn',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3126,
                'end' => 3143,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3126,
                  'end' => 3134,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3136,
                  'end' => 3143,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3136,
                    'end' => 3142,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3137,
                      'end' => 3141,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3137,
                        'end' => 3140,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3137,
                          'end' => 3140,
                        ),
                        'kind' => 'Name',
                        'value' => 'Int',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3146,
              'end' => 3154,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3146,
                'end' => 3153,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3146,
                  'end' => 3153,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        19 => 
        array (
          'loc' => 
          array (
            'start' => 3217,
            'end' => 3270,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3217,
              'end' => 3226,
            ),
            'kind' => 'Name',
            'value' => 'editBoard',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3227,
                'end' => 3240,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3227,
                  'end' => 3234,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3236,
                  'end' => 3240,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3236,
                    'end' => 3239,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3236,
                      'end' => 3239,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 3242,
                'end' => 3260,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3242,
                  'end' => 3251,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3253,
                  'end' => 3260,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3253,
                    'end' => 3259,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3253,
                      'end' => 3259,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3263,
              'end' => 3270,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 3263,
                'end' => 3270,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        20 => 
        array (
          'loc' => 
          array (
            'start' => 3296,
            'end' => 3332,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3296,
              'end' => 3307,
            ),
            'kind' => 'Name',
            'value' => 'deleteBoard',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3308,
                'end' => 3321,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3308,
                  'end' => 3315,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3317,
                  'end' => 3321,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3317,
                    'end' => 3320,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3317,
                      'end' => 3320,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3324,
              'end' => 3332,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3324,
                'end' => 3331,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3324,
                  'end' => 3331,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        21 => 
        array (
          'loc' => 
          array (
            'start' => 3377,
            'end' => 3451,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3377,
              'end' => 3385,
            ),
            'kind' => 'Name',
            'value' => 'addBoard',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3386,
                'end' => 3404,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3386,
                  'end' => 3395,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3397,
                  'end' => 3404,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3397,
                    'end' => 3403,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3397,
                      'end' => 3403,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 3406,
                'end' => 3432,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3406,
                  'end' => 3420,
                ),
                'kind' => 'Name',
                'value' => 'boardColumnsId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3422,
                  'end' => 3432,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3422,
                    'end' => 3431,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3423,
                      'end' => 3430,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3423,
                        'end' => 3429,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3423,
                          'end' => 3429,
                        ),
                        'kind' => 'Name',
                        'value' => 'String',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3434,
              'end' => 3451,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3434,
                'end' => 3450,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3434,
                  'end' => 3450,
                ),
                'kind' => 'Name',
                'value' => 'AddBoardResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        22 => 
        array (
          'loc' => 
          array (
            'start' => 3521,
            'end' => 3575,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3521,
              'end' => 3536,
            ),
            'kind' => 'Name',
            'value' => 'editColumnBoard',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3537,
                'end' => 3550,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3537,
                  'end' => 3544,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3546,
                  'end' => 3550,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3546,
                    'end' => 3549,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3546,
                      'end' => 3549,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 3552,
                'end' => 3566,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3552,
                  'end' => 3560,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3562,
                  'end' => 3566,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3562,
                    'end' => 3565,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3562,
                      'end' => 3565,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3569,
              'end' => 3575,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3569,
                'end' => 3574,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3569,
                  'end' => 3574,
                ),
                'kind' => 'Name',
                'value' => 'board',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        23 => 
        array (
          'loc' => 
          array (
            'start' => 3583,
            'end' => 3636,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3583,
              'end' => 3597,
            ),
            'kind' => 'Name',
            'value' => 'editColumnTask',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 3598,
                'end' => 3612,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3598,
                  'end' => 3606,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3608,
                  'end' => 3612,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3608,
                    'end' => 3611,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3608,
                      'end' => 3611,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 3614,
                'end' => 3626,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3614,
                  'end' => 3620,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3622,
                  'end' => 3626,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3622,
                    'end' => 3625,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3622,
                      'end' => 3625,
                    ),
                    'kind' => 'Name',
                    'value' => 'Int',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 3629,
              'end' => 3636,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3629,
                'end' => 3635,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3629,
                  'end' => 3635,
                ),
                'kind' => 'Name',
                'value' => 'Column',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
  ),
);