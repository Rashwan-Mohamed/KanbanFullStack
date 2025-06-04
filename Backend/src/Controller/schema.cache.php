<?php return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 3681,
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
        'end' => 3679,
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
            'start' => 1832,
            'end' => 1866,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1832,
              'end' => 1845,
            ),
            'kind' => 'Name',
            'value' => 'deleteProfile',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 1846,
                'end' => 1857,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1846,
                  'end' => 1852,
                ),
                'kind' => 'Name',
                'value' => 'userId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1853,
                  'end' => 1857,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1853,
                    'end' => 1856,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1853,
                      'end' => 1856,
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
              'start' => 1859,
              'end' => 1866,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1859,
                'end' => 1866,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
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
            'start' => 1927,
            'end' => 1981,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1927,
              'end' => 1938,
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
                'start' => 1949,
                'end' => 1964,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1949,
                  'end' => 1956,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1957,
                  'end' => 1964,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1957,
                    'end' => 1964,
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
              'start' => 1973,
              'end' => 1981,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1973,
                'end' => 1980,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1973,
                  'end' => 1980,
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
            'start' => 2040,
            'end' => 2077,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2040,
              'end' => 2050,
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
                'start' => 2051,
                'end' => 2066,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2051,
                  'end' => 2058,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2059,
                  'end' => 2066,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2059,
                    'end' => 2066,
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
              'start' => 2069,
              'end' => 2077,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2069,
                'end' => 2076,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2069,
                  'end' => 2076,
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
        9 => 
        array (
          'loc' => 
          array (
            'start' => 2109,
            'end' => 2149,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2109,
              'end' => 2122,
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
                'start' => 2123,
                'end' => 2138,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2123,
                  'end' => 2132,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2134,
                  'end' => 2138,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2134,
                    'end' => 2137,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2134,
                      'end' => 2137,
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
              'start' => 2141,
              'end' => 2149,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2141,
                'end' => 2148,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2141,
                  'end' => 2148,
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
            'start' => 2199,
            'end' => 2238,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2199,
              'end' => 2212,
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
                'start' => 2213,
                'end' => 2228,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2213,
                  'end' => 2222,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2224,
                  'end' => 2228,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2224,
                    'end' => 2227,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2224,
                      'end' => 2227,
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
              'start' => 2230,
              'end' => 2238,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2230,
                'end' => 2237,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2230,
                  'end' => 2237,
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
        11 => 
        array (
          'loc' => 
          array (
            'start' => 2309,
            'end' => 2358,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2309,
              'end' => 2317,
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
                'start' => 2318,
                'end' => 2338,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2318,
                  'end' => 2327,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2328,
                  'end' => 2338,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2328,
                    'end' => 2337,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2328,
                      'end' => 2337,
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
              'start' => 2341,
              'end' => 2358,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2341,
                'end' => 2357,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2341,
                  'end' => 2357,
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
        12 => 
        array (
          'loc' => 
          array (
            'start' => 2392,
            'end' => 2454,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2392,
              'end' => 2406,
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
                'start' => 2407,
                'end' => 2418,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2407,
                  'end' => 2413,
                ),
                'kind' => 'Name',
                'value' => 'taskId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2414,
                  'end' => 2418,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2414,
                    'end' => 2417,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2414,
                      'end' => 2417,
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
                'start' => 2419,
                'end' => 2432,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2419,
                  'end' => 2427,
                ),
                'kind' => 'Name',
                'value' => 'statusID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2428,
                  'end' => 2432,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2428,
                    'end' => 2431,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2428,
                      'end' => 2431,
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
                'start' => 2433,
                'end' => 2443,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2433,
                  'end' => 2438,
                ),
                'kind' => 'Name',
                'value' => 'order',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2439,
                  'end' => 2443,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2439,
                    'end' => 2442,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2439,
                      'end' => 2442,
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
              'start' => 2446,
              'end' => 2454,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2446,
                'end' => 2453,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2446,
                  'end' => 2453,
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
        13 => 
        array (
          'loc' => 
          array (
            'start' => 2505,
            'end' => 2552,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2505,
              'end' => 2512,
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
                'start' => 2513,
                'end' => 2533,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2513,
                  'end' => 2522,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2523,
                  'end' => 2533,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2523,
                    'end' => 2532,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2523,
                      'end' => 2532,
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
              'start' => 2536,
              'end' => 2552,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2536,
                'end' => 2551,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2536,
                  'end' => 2551,
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
        14 => 
        array (
          'loc' => 
          array (
            'start' => 2584,
            'end' => 2636,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2584,
              'end' => 2595,
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
                'start' => 2596,
                'end' => 2611,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2596,
                  'end' => 2603,
                ),
                'kind' => 'Name',
                'value' => 'tasksId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2604,
                  'end' => 2611,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2604,
                    'end' => 2610,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2605,
                      'end' => 2609,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2605,
                        'end' => 2608,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2605,
                          'end' => 2608,
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
                'start' => 2612,
                'end' => 2626,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2612,
                  'end' => 2618,
                ),
                'kind' => 'Name',
                'value' => 'orders',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2619,
                  'end' => 2626,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2619,
                    'end' => 2625,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2620,
                      'end' => 2624,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2620,
                        'end' => 2623,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2620,
                          'end' => 2623,
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
              'start' => 2628,
              'end' => 2636,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2628,
                'end' => 2635,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2628,
                  'end' => 2635,
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
            'start' => 2687,
            'end' => 2721,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2687,
              'end' => 2697,
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
                'start' => 2698,
                'end' => 2710,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2698,
                  'end' => 2704,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2706,
                  'end' => 2710,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2706,
                    'end' => 2709,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2706,
                      'end' => 2709,
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
              'start' => 2713,
              'end' => 2721,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2713,
                'end' => 2720,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2713,
                  'end' => 2720,
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
        16 => 
        array (
          'loc' => 
          array (
            'start' => 2821,
            'end' => 2871,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2821,
              'end' => 2833,
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
                'start' => 2834,
                'end' => 2846,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2834,
                  'end' => 2840,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2842,
                  'end' => 2846,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2842,
                    'end' => 2845,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2842,
                      'end' => 2845,
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
                'start' => 2848,
                'end' => 2863,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2848,
                  'end' => 2857,
                ),
                'kind' => 'Name',
                'value' => 'subTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2859,
                  'end' => 2863,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2859,
                    'end' => 2862,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2859,
                      'end' => 2862,
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
              'start' => 2866,
              'end' => 2871,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2866,
                'end' => 2870,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2866,
                  'end' => 2870,
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
        17 => 
        array (
          'loc' => 
          array (
            'start' => 2938,
            'end' => 3025,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2938,
              'end' => 2948,
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
                'start' => 2949,
                'end' => 2966,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2949,
                  'end' => 2957,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2959,
                  'end' => 2966,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2959,
                    'end' => 2965,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2960,
                      'end' => 2964,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2960,
                        'end' => 2963,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2960,
                          'end' => 2963,
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
                'start' => 2968,
                'end' => 2990,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2968,
                  'end' => 2978,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2980,
                  'end' => 2990,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2980,
                    'end' => 2989,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2981,
                      'end' => 2988,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2981,
                        'end' => 2987,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2981,
                          'end' => 2987,
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
                'start' => 2991,
                'end' => 3003,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2991,
                  'end' => 2998,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2999,
                  'end' => 3003,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2999,
                    'end' => 3002,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2999,
                      'end' => 3002,
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
              'start' => 3006,
              'end' => 3025,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3006,
                'end' => 3024,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3006,
                  'end' => 3024,
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
        18 => 
        array (
          'loc' => 
          array (
            'start' => 3072,
            'end' => 3126,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3072,
              'end' => 3081,
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
                'start' => 3082,
                'end' => 3104,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3082,
                  'end' => 3092,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3094,
                  'end' => 3104,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3094,
                    'end' => 3103,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3095,
                      'end' => 3102,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3095,
                        'end' => 3101,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3095,
                          'end' => 3101,
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
                'start' => 3105,
                'end' => 3117,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3105,
                  'end' => 3112,
                ),
                'kind' => 'Name',
                'value' => 'boardId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3113,
                  'end' => 3117,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3113,
                    'end' => 3116,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3113,
                      'end' => 3116,
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
              'start' => 3120,
              'end' => 3126,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3120,
                'end' => 3125,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3121,
                  'end' => 3124,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3121,
                    'end' => 3124,
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
        19 => 
        array (
          'loc' => 
          array (
            'start' => 3153,
            'end' => 3194,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3153,
              'end' => 3165,
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
                'start' => 3166,
                'end' => 3183,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3166,
                  'end' => 3174,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3176,
                  'end' => 3183,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3176,
                    'end' => 3182,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3177,
                      'end' => 3181,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3177,
                        'end' => 3180,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3177,
                          'end' => 3180,
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
              'start' => 3186,
              'end' => 3194,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3186,
                'end' => 3193,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3186,
                  'end' => 3193,
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
        20 => 
        array (
          'loc' => 
          array (
            'start' => 3257,
            'end' => 3310,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3257,
              'end' => 3266,
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
                'start' => 3267,
                'end' => 3280,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3267,
                  'end' => 3274,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3276,
                  'end' => 3280,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3276,
                    'end' => 3279,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3276,
                      'end' => 3279,
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
                'start' => 3282,
                'end' => 3300,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3282,
                  'end' => 3291,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3293,
                  'end' => 3300,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3293,
                    'end' => 3299,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3293,
                      'end' => 3299,
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
              'start' => 3303,
              'end' => 3310,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 3303,
                'end' => 3310,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
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
            'start' => 3336,
            'end' => 3372,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3336,
              'end' => 3347,
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
                'start' => 3348,
                'end' => 3361,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3348,
                  'end' => 3355,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3357,
                  'end' => 3361,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3357,
                    'end' => 3360,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3357,
                      'end' => 3360,
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
              'start' => 3364,
              'end' => 3372,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3364,
                'end' => 3371,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3364,
                  'end' => 3371,
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
        22 => 
        array (
          'loc' => 
          array (
            'start' => 3417,
            'end' => 3491,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3417,
              'end' => 3425,
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
                'start' => 3426,
                'end' => 3444,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3426,
                  'end' => 3435,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3437,
                  'end' => 3444,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3437,
                    'end' => 3443,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3437,
                      'end' => 3443,
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
                'start' => 3446,
                'end' => 3472,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3446,
                  'end' => 3460,
                ),
                'kind' => 'Name',
                'value' => 'boardColumnsId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3462,
                  'end' => 3472,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3462,
                    'end' => 3471,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3463,
                      'end' => 3470,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3463,
                        'end' => 3469,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3463,
                          'end' => 3469,
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
              'start' => 3474,
              'end' => 3491,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3474,
                'end' => 3490,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3474,
                  'end' => 3490,
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
        23 => 
        array (
          'loc' => 
          array (
            'start' => 3561,
            'end' => 3615,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3561,
              'end' => 3576,
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
                'start' => 3577,
                'end' => 3590,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3577,
                  'end' => 3584,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3586,
                  'end' => 3590,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3586,
                    'end' => 3589,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3586,
                      'end' => 3589,
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
                'start' => 3592,
                'end' => 3606,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3592,
                  'end' => 3600,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3602,
                  'end' => 3606,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3602,
                    'end' => 3605,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3602,
                      'end' => 3605,
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
              'start' => 3609,
              'end' => 3615,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3609,
                'end' => 3614,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3609,
                  'end' => 3614,
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
        24 => 
        array (
          'loc' => 
          array (
            'start' => 3623,
            'end' => 3676,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3623,
              'end' => 3637,
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
                'start' => 3638,
                'end' => 3652,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3638,
                  'end' => 3646,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3648,
                  'end' => 3652,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3648,
                    'end' => 3651,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3648,
                      'end' => 3651,
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
                'start' => 3654,
                'end' => 3666,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3654,
                  'end' => 3660,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3662,
                  'end' => 3666,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3662,
                    'end' => 3665,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3662,
                      'end' => 3665,
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
              'start' => 3669,
              'end' => 3676,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3669,
                'end' => 3675,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3669,
                  'end' => 3675,
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