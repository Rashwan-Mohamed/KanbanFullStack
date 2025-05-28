<?php return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 2947,
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
        'end' => 96,
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
            'end' => 93,
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
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 84,
              'end' => 93,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 84,
                'end' => 92,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 85,
                  'end' => 91,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 85,
                    'end' => 90,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 85,
                      'end' => 90,
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
      ),
    ),
    2 => 
    array (
      'loc' => 
      array (
        'start' => 100,
        'end' => 173,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 105,
          'end' => 110,
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
            'start' => 118,
            'end' => 126,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 118,
              'end' => 120,
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
              'start' => 122,
              'end' => 126,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 122,
                'end' => 125,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 122,
                  'end' => 125,
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
            'start' => 132,
            'end' => 145,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 132,
              'end' => 136,
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
              'start' => 138,
              'end' => 145,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 138,
                'end' => 144,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 138,
                  'end' => 144,
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
            'start' => 151,
            'end' => 170,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 151,
              'end' => 158,
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
              'start' => 160,
              'end' => 170,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 160,
                'end' => 169,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 161,
                  'end' => 168,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 161,
                    'end' => 167,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 161,
                      'end' => 167,
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
        'start' => 175,
        'end' => 245,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 180,
          'end' => 186,
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
            'start' => 194,
            'end' => 202,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 194,
              'end' => 196,
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
              'start' => 198,
              'end' => 202,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 198,
                'end' => 201,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 198,
                  'end' => 201,
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
            'start' => 208,
            'end' => 221,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 208,
              'end' => 212,
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
              'start' => 214,
              'end' => 221,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 214,
                'end' => 220,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 214,
                  'end' => 220,
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
            'start' => 227,
            'end' => 242,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 227,
              'end' => 232,
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
              'start' => 234,
              'end' => 242,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 234,
                'end' => 241,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 235,
                  'end' => 240,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 235,
                    'end' => 239,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 235,
                      'end' => 239,
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
        'start' => 247,
        'end' => 405,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 252,
          'end' => 256,
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
            'start' => 264,
            'end' => 272,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 264,
              'end' => 266,
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
              'start' => 268,
              'end' => 272,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 268,
                'end' => 271,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 268,
                  'end' => 271,
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
            'start' => 278,
            'end' => 292,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 278,
              'end' => 283,
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
              'start' => 285,
              'end' => 292,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 285,
                'end' => 291,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 285,
                  'end' => 291,
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
            'start' => 298,
            'end' => 318,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 298,
              'end' => 309,
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
              'start' => 311,
              'end' => 318,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 311,
                'end' => 317,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 311,
                  'end' => 317,
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
            'start' => 324,
            'end' => 339,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 324,
              'end' => 330,
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
        4 => 
        array (
          'loc' => 
          array (
            'start' => 345,
            'end' => 359,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 345,
              'end' => 353,
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
              'start' => 355,
              'end' => 359,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 355,
                'end' => 358,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 355,
                  'end' => 358,
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
            'start' => 365,
            'end' => 386,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 365,
              'end' => 373,
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
              'start' => 375,
              'end' => 386,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 375,
                'end' => 385,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 376,
                  'end' => 384,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 376,
                    'end' => 383,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 376,
                      'end' => 383,
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
            'start' => 392,
            'end' => 402,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 392,
              'end' => 397,
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
              'start' => 398,
              'end' => 402,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 398,
                'end' => 401,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 398,
                  'end' => 401,
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
        'start' => 407,
        'end' => 485,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 412,
          'end' => 419,
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
            'start' => 427,
            'end' => 435,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 427,
              'end' => 429,
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
              'start' => 431,
              'end' => 435,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 431,
                'end' => 434,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 431,
                  'end' => 434,
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
            'start' => 441,
            'end' => 455,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 441,
              'end' => 446,
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
              'start' => 448,
              'end' => 455,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 448,
                'end' => 454,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 448,
                  'end' => 454,
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
            'start' => 461,
            'end' => 482,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 461,
              'end' => 472,
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
              'start' => 474,
              'end' => 482,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 474,
                'end' => 481,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 474,
                  'end' => 481,
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
        'start' => 491,
        'end' => 567,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 497,
          'end' => 504,
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
            'start' => 511,
            'end' => 525,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 511,
              'end' => 516,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 518,
              'end' => 525,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 518,
                'end' => 524,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 518,
                  'end' => 524,
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
            'start' => 531,
            'end' => 552,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 531,
              'end' => 542,
            ),
            'kind' => 'Name',
            'value' => 'isCompleted',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 544,
              'end' => 552,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 544,
                'end' => 551,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 544,
                  'end' => 551,
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
            'start' => 558,
            'end' => 564,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 558,
              'end' => 560,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 561,
              'end' => 564,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 561,
                'end' => 564,
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
        'start' => 569,
        'end' => 734,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 575,
          'end' => 584,
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
            'start' => 591,
            'end' => 605,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 591,
              'end' => 596,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 598,
              'end' => 605,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 598,
                'end' => 604,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 598,
                  'end' => 604,
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
            'start' => 611,
            'end' => 631,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 611,
              'end' => 622,
            ),
            'kind' => 'Name',
            'value' => 'description',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 624,
              'end' => 631,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 624,
                'end' => 630,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 624,
                  'end' => 630,
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
            'start' => 637,
            'end' => 652,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 637,
              'end' => 643,
            ),
            'kind' => 'Name',
            'value' => 'status',
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
        3 => 
        array (
          'loc' => 
          array (
            'start' => 658,
            'end' => 672,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 658,
              'end' => 666,
            ),
            'kind' => 'Name',
            'value' => 'statusId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 668,
              'end' => 672,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 668,
                'end' => 671,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 668,
                  'end' => 671,
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
            'start' => 678,
            'end' => 699,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 678,
              'end' => 686,
            ),
            'kind' => 'Name',
            'value' => 'subtasks',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 688,
              'end' => 699,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 688,
                'end' => 698,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 689,
                  'end' => 697,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 689,
                    'end' => 696,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 689,
                      'end' => 696,
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
            'start' => 705,
            'end' => 715,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 705,
              'end' => 711,
            ),
            'kind' => 'Name',
            'value' => 'taskId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 712,
              'end' => 715,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 712,
                'end' => 715,
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
            'start' => 721,
            'end' => 731,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 721,
              'end' => 726,
            ),
            'kind' => 'Name',
            'value' => 'order',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 727,
              'end' => 731,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 727,
                'end' => 730,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 727,
                  'end' => 730,
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
        'start' => 738,
        'end' => 807,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 743,
          'end' => 759,
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
            'start' => 767,
            'end' => 780,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 767,
              'end' => 774,
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
              'start' => 776,
              'end' => 780,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 776,
                'end' => 779,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 776,
                  'end' => 779,
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
            'start' => 786,
            'end' => 804,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 786,
              'end' => 795,
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
              'start' => 797,
              'end' => 804,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 797,
                'end' => 803,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 798,
                  'end' => 802,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 798,
                    'end' => 801,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 798,
                      'end' => 801,
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
        'start' => 809,
        'end' => 875,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 814,
          'end' => 829,
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
            'start' => 836,
            'end' => 847,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 836,
              'end' => 842,
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
              'start' => 843,
              'end' => 847,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 843,
                'end' => 846,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 843,
                  'end' => 846,
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
            'start' => 853,
            'end' => 872,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 853,
              'end' => 864,
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
              'start' => 865,
              'end' => 872,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 865,
                'end' => 871,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 866,
                  'end' => 870,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 866,
                    'end' => 869,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 866,
                      'end' => 869,
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
        'start' => 877,
        'end' => 924,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 882,
          'end' => 900,
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
            'start' => 907,
            'end' => 921,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 907,
              'end' => 913,
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
              'start' => 914,
              'end' => 921,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 914,
                'end' => 920,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 915,
                  'end' => 919,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 915,
                    'end' => 918,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 915,
                      'end' => 918,
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
        'start' => 926,
        'end' => 974,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 931,
          'end' => 947,
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
            'start' => 954,
            'end' => 971,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 954,
              'end' => 963,
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
              'start' => 964,
              'end' => 971,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 964,
                'end' => 970,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 965,
                  'end' => 969,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 965,
                    'end' => 968,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 965,
                      'end' => 968,
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
        'start' => 976,
        'end' => 1047,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 981,
          'end' => 985,
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
            'start' => 993,
            'end' => 1001,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 993,
              'end' => 995,
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
              'start' => 997,
              'end' => 1001,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 997,
                'end' => 1000,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 997,
                  'end' => 1000,
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
            'start' => 1007,
            'end' => 1024,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1007,
              'end' => 1015,
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
              'start' => 1017,
              'end' => 1024,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1017,
                'end' => 1023,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1017,
                  'end' => 1023,
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
            'start' => 1030,
            'end' => 1044,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1030,
              'end' => 1035,
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
              'start' => 1037,
              'end' => 1044,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1037,
                'end' => 1043,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1037,
                  'end' => 1043,
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
        'start' => 1049,
        'end' => 2945,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1054,
          'end' => 1062,
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
            'start' => 1072,
            'end' => 1143,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1072,
              'end' => 1080,
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
                'start' => 1081,
                'end' => 1098,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1081,
                  'end' => 1089,
                ),
                'kind' => 'Name',
                'value' => 'username',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1091,
                  'end' => 1098,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1091,
                    'end' => 1097,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1091,
                      'end' => 1097,
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
                'start' => 1100,
                'end' => 1114,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1100,
                  'end' => 1105,
                ),
                'kind' => 'Name',
                'value' => 'email',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1107,
                  'end' => 1114,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1107,
                    'end' => 1113,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1107,
                      'end' => 1113,
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
                'start' => 1116,
                'end' => 1133,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1116,
                  'end' => 1124,
                ),
                'kind' => 'Name',
                'value' => 'password',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1126,
                  'end' => 1133,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1126,
                    'end' => 1132,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1126,
                      'end' => 1132,
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
              'start' => 1136,
              'end' => 1143,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1136,
                'end' => 1142,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1136,
                  'end' => 1142,
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
            'start' => 1149,
            'end' => 1196,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1149,
              'end' => 1154,
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
                'start' => 1155,
                'end' => 1169,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1155,
                  'end' => 1160,
                ),
                'kind' => 'Name',
                'value' => 'email',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1162,
                  'end' => 1169,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1162,
                    'end' => 1168,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1162,
                      'end' => 1168,
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
                'start' => 1171,
                'end' => 1188,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1171,
                  'end' => 1179,
                ),
                'kind' => 'Name',
                'value' => 'password',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1181,
                  'end' => 1188,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1181,
                    'end' => 1187,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1181,
                      'end' => 1187,
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
              'start' => 1191,
              'end' => 1196,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1191,
                'end' => 1195,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1191,
                  'end' => 1195,
                ),
                'kind' => 'Name',
                'value' => 'User',
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
            'start' => 1202,
            'end' => 1217,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1202,
              'end' => 1208,
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
              'start' => 1210,
              'end' => 1217,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1210,
                'end' => 1216,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1210,
                  'end' => 1216,
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
            'start' => 1280,
            'end' => 1334,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1280,
              'end' => 1291,
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
                'start' => 1302,
                'end' => 1317,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1302,
                  'end' => 1309,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1310,
                  'end' => 1317,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1310,
                    'end' => 1317,
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
              'start' => 1326,
              'end' => 1334,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1326,
                'end' => 1333,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1326,
                  'end' => 1333,
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
        4 => 
        array (
          'loc' => 
          array (
            'start' => 1393,
            'end' => 1430,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1393,
              'end' => 1403,
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
                'start' => 1404,
                'end' => 1419,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1404,
                  'end' => 1411,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1412,
                  'end' => 1419,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1412,
                    'end' => 1419,
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
              'start' => 1422,
              'end' => 1430,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1422,
                'end' => 1429,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1422,
                  'end' => 1429,
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
        5 => 
        array (
          'loc' => 
          array (
            'start' => 1462,
            'end' => 1502,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1462,
              'end' => 1475,
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
                'start' => 1476,
                'end' => 1491,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1476,
                  'end' => 1485,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1487,
                  'end' => 1491,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1487,
                    'end' => 1490,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1487,
                      'end' => 1490,
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
              'start' => 1494,
              'end' => 1502,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1494,
                'end' => 1501,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1494,
                  'end' => 1501,
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
        6 => 
        array (
          'loc' => 
          array (
            'start' => 1552,
            'end' => 1591,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1552,
              'end' => 1565,
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
                'start' => 1566,
                'end' => 1581,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1566,
                  'end' => 1575,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1577,
                  'end' => 1581,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1577,
                    'end' => 1580,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1577,
                      'end' => 1580,
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
              'start' => 1583,
              'end' => 1591,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1583,
                'end' => 1590,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1583,
                  'end' => 1590,
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
        7 => 
        array (
          'loc' => 
          array (
            'start' => 1662,
            'end' => 1711,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1662,
              'end' => 1670,
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
                'start' => 1671,
                'end' => 1691,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1671,
                  'end' => 1680,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1681,
                  'end' => 1691,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1681,
                    'end' => 1690,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1681,
                      'end' => 1690,
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
              'start' => 1694,
              'end' => 1711,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1694,
                'end' => 1710,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1694,
                  'end' => 1710,
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
        8 => 
        array (
          'loc' => 
          array (
            'start' => 1745,
            'end' => 1803,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1745,
              'end' => 1759,
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
                'start' => 1760,
                'end' => 1771,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1760,
                  'end' => 1766,
                ),
                'kind' => 'Name',
                'value' => 'taskId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1767,
                  'end' => 1771,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1767,
                    'end' => 1770,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1767,
                      'end' => 1770,
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
                'start' => 1772,
                'end' => 1785,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1772,
                  'end' => 1780,
                ),
                'kind' => 'Name',
                'value' => 'statusID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1781,
                  'end' => 1785,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1781,
                    'end' => 1784,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1781,
                      'end' => 1784,
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
                'start' => 1786,
                'end' => 1796,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1786,
                  'end' => 1791,
                ),
                'kind' => 'Name',
                'value' => 'order',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1792,
                  'end' => 1796,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1792,
                    'end' => 1795,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1792,
                      'end' => 1795,
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
              'start' => 1799,
              'end' => 1803,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1799,
                'end' => 1802,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1799,
                  'end' => 1802,
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
        9 => 
        array (
          'loc' => 
          array (
            'start' => 1854,
            'end' => 1901,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1854,
              'end' => 1861,
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
                'start' => 1862,
                'end' => 1882,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1862,
                  'end' => 1871,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1872,
                  'end' => 1882,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1872,
                    'end' => 1881,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1872,
                      'end' => 1881,
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
              'start' => 1885,
              'end' => 1901,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1885,
                'end' => 1900,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1885,
                  'end' => 1900,
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
        10 => 
        array (
          'loc' => 
          array (
            'start' => 1954,
            'end' => 1988,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1954,
              'end' => 1964,
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
                'start' => 1965,
                'end' => 1977,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1965,
                  'end' => 1971,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1973,
                  'end' => 1977,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1973,
                    'end' => 1976,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1973,
                      'end' => 1976,
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
              'start' => 1980,
              'end' => 1988,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1980,
                'end' => 1987,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1980,
                  'end' => 1987,
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
            'start' => 2088,
            'end' => 2138,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2088,
              'end' => 2100,
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
                'start' => 2101,
                'end' => 2113,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2101,
                  'end' => 2107,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2109,
                  'end' => 2113,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2109,
                    'end' => 2112,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2109,
                      'end' => 2112,
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
                'start' => 2115,
                'end' => 2130,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2115,
                  'end' => 2124,
                ),
                'kind' => 'Name',
                'value' => 'subTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2126,
                  'end' => 2130,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2126,
                    'end' => 2129,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2126,
                      'end' => 2129,
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
              'start' => 2133,
              'end' => 2138,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2133,
                'end' => 2137,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2133,
                  'end' => 2137,
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
        12 => 
        array (
          'loc' => 
          array (
            'start' => 2205,
            'end' => 2292,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2205,
              'end' => 2215,
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
                'start' => 2216,
                'end' => 2233,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2216,
                  'end' => 2224,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2226,
                  'end' => 2233,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2226,
                    'end' => 2232,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2227,
                      'end' => 2231,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2227,
                        'end' => 2230,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2227,
                          'end' => 2230,
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
                'start' => 2235,
                'end' => 2257,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2235,
                  'end' => 2245,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2247,
                  'end' => 2257,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2247,
                    'end' => 2256,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2248,
                      'end' => 2255,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2248,
                        'end' => 2254,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2248,
                          'end' => 2254,
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
                'start' => 2258,
                'end' => 2270,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2258,
                  'end' => 2265,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2266,
                  'end' => 2270,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2266,
                    'end' => 2269,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2266,
                      'end' => 2269,
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
              'start' => 2273,
              'end' => 2292,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2273,
                'end' => 2291,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2273,
                  'end' => 2291,
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
        13 => 
        array (
          'loc' => 
          array (
            'start' => 2339,
            'end' => 2393,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2339,
              'end' => 2348,
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
                'start' => 2349,
                'end' => 2371,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2349,
                  'end' => 2359,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2361,
                  'end' => 2371,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2361,
                    'end' => 2370,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2362,
                      'end' => 2369,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2362,
                        'end' => 2368,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2362,
                          'end' => 2368,
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
                'start' => 2372,
                'end' => 2384,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2372,
                  'end' => 2379,
                ),
                'kind' => 'Name',
                'value' => 'boardId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2380,
                  'end' => 2384,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2380,
                    'end' => 2383,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2380,
                      'end' => 2383,
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
              'start' => 2387,
              'end' => 2393,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2387,
                'end' => 2392,
              ),
              'kind' => 'ListType',
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
          ),
          'directives' => 
          array (
          ),
        ),
        14 => 
        array (
          'loc' => 
          array (
            'start' => 2420,
            'end' => 2461,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2420,
              'end' => 2432,
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
                'start' => 2433,
                'end' => 2450,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2433,
                  'end' => 2441,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2443,
                  'end' => 2450,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2443,
                    'end' => 2449,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2444,
                      'end' => 2448,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2444,
                        'end' => 2447,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2444,
                          'end' => 2447,
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
              'start' => 2453,
              'end' => 2461,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2453,
                'end' => 2460,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2453,
                  'end' => 2460,
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
            'start' => 2524,
            'end' => 2576,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2524,
              'end' => 2533,
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
                'start' => 2534,
                'end' => 2547,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2534,
                  'end' => 2541,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2543,
                  'end' => 2547,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2543,
                    'end' => 2546,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2543,
                      'end' => 2546,
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
                'start' => 2549,
                'end' => 2567,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2549,
                  'end' => 2558,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2560,
                  'end' => 2567,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2560,
                    'end' => 2566,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2560,
                      'end' => 2566,
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
              'start' => 2570,
              'end' => 2576,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2570,
                'end' => 2575,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2570,
                  'end' => 2575,
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
        16 => 
        array (
          'loc' => 
          array (
            'start' => 2602,
            'end' => 2638,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2602,
              'end' => 2613,
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
                'start' => 2614,
                'end' => 2627,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2614,
                  'end' => 2621,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2623,
                  'end' => 2627,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2623,
                    'end' => 2626,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2623,
                      'end' => 2626,
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
              'start' => 2630,
              'end' => 2638,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2630,
                'end' => 2637,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2630,
                  'end' => 2637,
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
        17 => 
        array (
          'loc' => 
          array (
            'start' => 2683,
            'end' => 2757,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2683,
              'end' => 2691,
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
                'start' => 2692,
                'end' => 2710,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2692,
                  'end' => 2701,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2703,
                  'end' => 2710,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2703,
                    'end' => 2709,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2703,
                      'end' => 2709,
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
                'start' => 2712,
                'end' => 2738,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2712,
                  'end' => 2726,
                ),
                'kind' => 'Name',
                'value' => 'boardColumnsId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2728,
                  'end' => 2738,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2728,
                    'end' => 2737,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2729,
                      'end' => 2736,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2729,
                        'end' => 2735,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2729,
                          'end' => 2735,
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
              'start' => 2740,
              'end' => 2757,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2740,
                'end' => 2756,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2740,
                  'end' => 2756,
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
        18 => 
        array (
          'loc' => 
          array (
            'start' => 2827,
            'end' => 2881,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2827,
              'end' => 2842,
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
                'start' => 2843,
                'end' => 2856,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2843,
                  'end' => 2850,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2852,
                  'end' => 2856,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2852,
                    'end' => 2855,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2852,
                      'end' => 2855,
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
                'start' => 2858,
                'end' => 2872,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2858,
                  'end' => 2866,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2868,
                  'end' => 2872,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2868,
                    'end' => 2871,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2868,
                      'end' => 2871,
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
              'start' => 2875,
              'end' => 2881,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2875,
                'end' => 2880,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2875,
                  'end' => 2880,
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
        19 => 
        array (
          'loc' => 
          array (
            'start' => 2889,
            'end' => 2942,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2889,
              'end' => 2903,
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
                'start' => 2904,
                'end' => 2918,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2904,
                  'end' => 2912,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2914,
                  'end' => 2918,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2914,
                    'end' => 2917,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2914,
                      'end' => 2917,
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
                'start' => 2920,
                'end' => 2932,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2920,
                  'end' => 2926,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2928,
                  'end' => 2932,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2928,
                    'end' => 2931,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2928,
                      'end' => 2931,
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
              'start' => 2935,
              'end' => 2942,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2935,
                'end' => 2941,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2935,
                  'end' => 2941,
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