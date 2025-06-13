<?php return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 3596,
  ),
  'kind' => 'Document',
  'definitions' => 
  array (
    0 => 
    array (
      'loc' => 
      array (
        'start' => 0,
        'end' => 50,
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
            'start' => 13,
            'end' => 25,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'query',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 20,
              'end' => 25,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 20,
                'end' => 25,
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
            'start' => 30,
            'end' => 48,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'mutation',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 40,
              'end' => 48,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 40,
                'end' => 48,
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
        'start' => 51,
        'end' => 136,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 56,
          'end' => 61,
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
            'start' => 68,
            'end' => 101,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 68,
              'end' => 77,
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
                'start' => 78,
                'end' => 89,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 78,
                  'end' => 84,
                ),
                'kind' => 'Name',
                'value' => 'userId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 85,
                  'end' => 89,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 85,
                    'end' => 88,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 85,
                      'end' => 88,
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
              'start' => 92,
              'end' => 101,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 92,
                'end' => 100,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 93,
                  'end' => 99,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 93,
                    'end' => 98,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 93,
                      'end' => 98,
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
            'start' => 106,
            'end' => 134,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 106,
              'end' => 120,
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
              'start' => 121,
              'end' => 134,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 121,
                'end' => 134,
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
        'start' => 138,
        'end' => 207,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 143,
          'end' => 148,
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
            'start' => 155,
            'end' => 163,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 155,
              'end' => 157,
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
              'start' => 159,
              'end' => 163,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 159,
                'end' => 162,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 159,
                  'end' => 162,
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
            'start' => 168,
            'end' => 181,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 168,
              'end' => 172,
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
              'start' => 174,
              'end' => 181,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 174,
                'end' => 180,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 174,
                  'end' => 180,
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
            'start' => 186,
            'end' => 205,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 186,
              'end' => 193,
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
              'start' => 195,
              'end' => 205,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 195,
                'end' => 204,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 196,
                  'end' => 203,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 196,
                    'end' => 202,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 196,
                      'end' => 202,
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
        'start' => 208,
        'end' => 274,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 213,
          'end' => 219,
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
            'start' => 226,
            'end' => 234,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 226,
              'end' => 228,
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
              'start' => 230,
              'end' => 234,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 230,
                'end' => 233,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 230,
                  'end' => 233,
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
            'start' => 239,
            'end' => 252,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 239,
              'end' => 243,
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
              'start' => 245,
              'end' => 252,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 245,
                'end' => 251,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 245,
                  'end' => 251,
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
            'start' => 257,
            'end' => 272,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 257,
              'end' => 262,
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
              'start' => 264,
              'end' => 272,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 264,
                'end' => 271,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 265,
                  'end' => 270,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 265,
                    'end' => 269,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 265,
                      'end' => 269,
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
        'start' => 275,
        'end' => 425,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 280,
          'end' => 284,
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
            'start' => 291,
            'end' => 299,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 291,
              'end' => 293,
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
              'start' => 295,
              'end' => 299,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 295,
                'end' => 298,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 295,
                  'end' => 298,
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
            'start' => 304,
            'end' => 318,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 304,
              'end' => 309,
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
        2 => 
        array (
          'loc' => 
          array (
            'start' => 323,
            'end' => 343,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 323,
              'end' => 334,
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
              'start' => 336,
              'end' => 343,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 336,
                'end' => 342,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 336,
                  'end' => 342,
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
            'start' => 348,
            'end' => 363,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 348,
              'end' => 354,
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
              'start' => 356,
              'end' => 363,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 356,
                'end' => 362,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 356,
                  'end' => 362,
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
            'start' => 368,
            'end' => 382,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 368,
              'end' => 376,
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
              'start' => 378,
              'end' => 382,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 378,
                'end' => 381,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 378,
                  'end' => 381,
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
            'start' => 387,
            'end' => 408,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 387,
              'end' => 395,
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
              'start' => 397,
              'end' => 408,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 397,
                'end' => 407,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 398,
                  'end' => 406,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 398,
                    'end' => 405,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 398,
                      'end' => 405,
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
            'start' => 413,
            'end' => 423,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 413,
              'end' => 418,
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
              'start' => 419,
              'end' => 423,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 419,
                'end' => 422,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 419,
                  'end' => 422,
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
        'start' => 426,
        'end' => 500,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 431,
          'end' => 438,
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
            'start' => 445,
            'end' => 453,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 445,
              'end' => 447,
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
              'start' => 449,
              'end' => 453,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 449,
                'end' => 452,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 449,
                  'end' => 452,
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
            'start' => 458,
            'end' => 472,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 458,
              'end' => 463,
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
              'start' => 465,
              'end' => 472,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 465,
                'end' => 471,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 465,
                  'end' => 471,
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
            'start' => 477,
            'end' => 498,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 477,
              'end' => 488,
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
              'start' => 490,
              'end' => 498,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 490,
                'end' => 497,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 490,
                  'end' => 497,
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
        'start' => 503,
        'end' => 575,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 509,
          'end' => 516,
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
            'start' => 522,
            'end' => 536,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 522,
              'end' => 527,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 529,
              'end' => 536,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 529,
                'end' => 535,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 529,
                  'end' => 535,
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
            'start' => 541,
            'end' => 562,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 541,
              'end' => 552,
            ),
            'kind' => 'Name',
            'value' => 'isCompleted',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 554,
              'end' => 562,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 554,
                'end' => 561,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 554,
                  'end' => 561,
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
            'start' => 567,
            'end' => 573,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 567,
              'end' => 569,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 570,
              'end' => 573,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 570,
                'end' => 573,
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
        'start' => 576,
        'end' => 733,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 582,
          'end' => 591,
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
            'start' => 597,
            'end' => 611,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 597,
              'end' => 602,
            ),
            'kind' => 'Name',
            'value' => 'title',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 604,
              'end' => 611,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 604,
                'end' => 610,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 604,
                  'end' => 610,
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
            'start' => 616,
            'end' => 636,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 616,
              'end' => 627,
            ),
            'kind' => 'Name',
            'value' => 'description',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 629,
              'end' => 636,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 629,
                'end' => 635,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 629,
                  'end' => 635,
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
            'start' => 641,
            'end' => 656,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 641,
              'end' => 647,
            ),
            'kind' => 'Name',
            'value' => 'status',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 649,
              'end' => 656,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 649,
                'end' => 655,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 649,
                  'end' => 655,
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
            'start' => 661,
            'end' => 675,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 661,
              'end' => 669,
            ),
            'kind' => 'Name',
            'value' => 'statusId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 671,
              'end' => 675,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 671,
                'end' => 674,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 671,
                  'end' => 674,
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
            'start' => 680,
            'end' => 701,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 680,
              'end' => 688,
            ),
            'kind' => 'Name',
            'value' => 'subtasks',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 690,
              'end' => 701,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 690,
                'end' => 700,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 691,
                  'end' => 699,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 691,
                    'end' => 698,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 691,
                      'end' => 698,
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
            'start' => 706,
            'end' => 716,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 706,
              'end' => 712,
            ),
            'kind' => 'Name',
            'value' => 'taskId',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 713,
              'end' => 716,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 713,
                'end' => 716,
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
        'start' => 735,
        'end' => 801,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 740,
          'end' => 756,
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
            'start' => 763,
            'end' => 776,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 763,
              'end' => 770,
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
              'start' => 772,
              'end' => 776,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 772,
                'end' => 775,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 772,
                  'end' => 775,
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
            'start' => 781,
            'end' => 799,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 781,
              'end' => 790,
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
              'start' => 792,
              'end' => 799,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 792,
                'end' => 798,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 793,
                  'end' => 797,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 793,
                    'end' => 796,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 793,
                      'end' => 796,
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
        'start' => 802,
        'end' => 865,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 807,
          'end' => 822,
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
            'start' => 828,
            'end' => 839,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 828,
              'end' => 834,
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
              'start' => 835,
              'end' => 839,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 835,
                'end' => 838,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 835,
                  'end' => 838,
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
            'start' => 844,
            'end' => 863,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 844,
              'end' => 855,
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
              'start' => 856,
              'end' => 863,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 856,
                'end' => 862,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 857,
                  'end' => 861,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 857,
                    'end' => 860,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 857,
                      'end' => 860,
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
        'start' => 866,
        'end' => 911,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 871,
          'end' => 889,
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
            'start' => 895,
            'end' => 909,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 895,
              'end' => 901,
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
              'start' => 902,
              'end' => 909,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 902,
                'end' => 908,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 903,
                  'end' => 907,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 903,
                    'end' => 906,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 903,
                      'end' => 906,
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
        'start' => 912,
        'end' => 958,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 917,
          'end' => 933,
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
            'start' => 939,
            'end' => 956,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 939,
              'end' => 948,
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
              'start' => 949,
              'end' => 956,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 949,
                'end' => 955,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 950,
                  'end' => 954,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 950,
                    'end' => 953,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 950,
                      'end' => 953,
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
        'start' => 959,
        'end' => 1117,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 964,
          'end' => 968,
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
            'start' => 975,
            'end' => 983,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 975,
              'end' => 977,
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
              'start' => 979,
              'end' => 983,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 979,
                'end' => 982,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 979,
                  'end' => 982,
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
            'start' => 988,
            'end' => 1005,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 988,
              'end' => 996,
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
              'start' => 998,
              'end' => 1005,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 998,
                'end' => 1004,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 998,
                  'end' => 1004,
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
            'start' => 1010,
            'end' => 1024,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1010,
              'end' => 1015,
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
        3 => 
        array (
          'loc' => 
          array (
            'start' => 1029,
            'end' => 1044,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1029,
              'end' => 1036,
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
              'start' => 1037,
              'end' => 1044,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1037,
                'end' => 1044,
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
            'start' => 1049,
            'end' => 1069,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1049,
              'end' => 1061,
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
              'start' => 1062,
              'end' => 1069,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1062,
                'end' => 1068,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1062,
                  'end' => 1068,
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
        5 => 
        array (
          'loc' => 
          array (
            'start' => 1074,
            'end' => 1092,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1074,
              'end' => 1084,
            ),
            'kind' => 'Name',
            'value' => 'created_at',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1085,
              'end' => 1092,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1085,
                'end' => 1091,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1085,
                  'end' => 1091,
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
        6 => 
        array (
          'loc' => 
          array (
            'start' => 1097,
            'end' => 1115,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1097,
              'end' => 1106,
            ),
            'kind' => 'Name',
            'value' => 'takenTour',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1107,
              'end' => 1115,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1107,
                'end' => 1114,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1107,
                  'end' => 1114,
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
    13 => 
    array (
      'loc' => 
      array (
        'start' => 1119,
        'end' => 1185,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1125,
          'end' => 1140,
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
            'start' => 1146,
            'end' => 1162,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1146,
              'end' => 1154,
            ),
            'kind' => 'Name',
            'value' => 'username',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1155,
              'end' => 1162,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1155,
                'end' => 1161,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1155,
                  'end' => 1161,
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
            'start' => 1167,
            'end' => 1183,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1167,
              'end' => 1175,
            ),
            'kind' => 'Name',
            'value' => 'password',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1176,
              'end' => 1183,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1176,
                'end' => 1182,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1176,
                  'end' => 1182,
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
        'start' => 1186,
        'end' => 1242,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1191,
          'end' => 1204,
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
            'start' => 1211,
            'end' => 1226,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1211,
              'end' => 1218,
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
              'start' => 1219,
              'end' => 1226,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1219,
                'end' => 1225,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1219,
                  'end' => 1225,
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
            'start' => 1231,
            'end' => 1240,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1231,
              'end' => 1235,
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
              'start' => 1236,
              'end' => 1240,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1236,
                'end' => 1240,
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
        'start' => 1243,
        'end' => 1358,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1248,
          'end' => 1264,
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
            'start' => 1271,
            'end' => 1290,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1271,
              'end' => 1281,
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
              'start' => 1282,
              'end' => 1290,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1282,
                'end' => 1289,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1282,
                  'end' => 1289,
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
            'start' => 1295,
            'end' => 1305,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1295,
              'end' => 1301,
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
              'start' => 1302,
              'end' => 1305,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1302,
                'end' => 1305,
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
            'start' => 1310,
            'end' => 1330,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1310,
              'end' => 1322,
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
              'start' => 1323,
              'end' => 1330,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1323,
                'end' => 1330,
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
            'start' => 1335,
            'end' => 1356,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1335,
              'end' => 1348,
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
              'start' => 1349,
              'end' => 1356,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1349,
                'end' => 1356,
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
        'start' => 1359,
        'end' => 1433,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1364,
          'end' => 1385,
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
            'start' => 1392,
            'end' => 1407,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1392,
              'end' => 1399,
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
              'start' => 1400,
              'end' => 1407,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1400,
                'end' => 1406,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1400,
                  'end' => 1406,
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
            'start' => 1412,
            'end' => 1431,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1412,
              'end' => 1422,
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
              'start' => 1423,
              'end' => 1431,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1423,
                'end' => 1430,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1423,
                  'end' => 1430,
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
        'start' => 1434,
        'end' => 3595,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1439,
          'end' => 1447,
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
            'start' => 1455,
            'end' => 1536,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1455,
              'end' => 1463,
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
                'start' => 1464,
                'end' => 1481,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1464,
                  'end' => 1472,
                ),
                'kind' => 'Name',
                'value' => 'username',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1474,
                  'end' => 1481,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1474,
                    'end' => 1480,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1474,
                      'end' => 1480,
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
                'start' => 1483,
                'end' => 1497,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1483,
                  'end' => 1488,
                ),
                'kind' => 'Name',
                'value' => 'email',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1490,
                  'end' => 1497,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1490,
                    'end' => 1496,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1490,
                      'end' => 1496,
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
                'start' => 1499,
                'end' => 1516,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1499,
                  'end' => 1507,
                ),
                'kind' => 'Name',
                'value' => 'password',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1509,
                  'end' => 1516,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1509,
                    'end' => 1515,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1509,
                      'end' => 1515,
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
              'start' => 1519,
              'end' => 1536,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1519,
                'end' => 1535,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1519,
                  'end' => 1535,
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
            'start' => 1541,
            'end' => 1596,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1541,
              'end' => 1546,
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
                'start' => 1547,
                'end' => 1579,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1547,
                  'end' => 1562,
                ),
                'kind' => 'Name',
                'value' => 'userCredentials',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1563,
                  'end' => 1579,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1563,
                    'end' => 1578,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1563,
                      'end' => 1578,
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
              'start' => 1582,
              'end' => 1596,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1582,
                'end' => 1595,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1582,
                  'end' => 1595,
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
            'start' => 1601,
            'end' => 1617,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1601,
              'end' => 1607,
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
              'start' => 1609,
              'end' => 1617,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1609,
                'end' => 1616,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1609,
                  'end' => 1616,
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
            'start' => 1622,
            'end' => 1637,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1622,
              'end' => 1632,
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
              'start' => 1633,
              'end' => 1637,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1633,
                'end' => 1636,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1633,
                  'end' => 1636,
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
            'start' => 1642,
            'end' => 1662,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1642,
              'end' => 1653,
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
              'start' => 1654,
              'end' => 1662,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1654,
                'end' => 1661,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1654,
                  'end' => 1661,
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
            'start' => 1667,
            'end' => 1775,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1667,
              'end' => 1680,
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
                'start' => 1681,
                'end' => 1696,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1681,
                  'end' => 1688,
                ),
                'kind' => 'Name',
                'value' => 'newName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1689,
                  'end' => 1696,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1689,
                    'end' => 1695,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1689,
                      'end' => 1695,
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
                'start' => 1697,
                'end' => 1713,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1697,
                  'end' => 1705,
                ),
                'kind' => 'Name',
                'value' => 'newEmail',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1706,
                  'end' => 1713,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1706,
                    'end' => 1712,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1706,
                      'end' => 1712,
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
                'start' => 1714,
                'end' => 1732,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1714,
                  'end' => 1725,
                ),
                'kind' => 'Name',
                'value' => 'newPassword',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1726,
                  'end' => 1732,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1726,
                    'end' => 1732,
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
                'start' => 1733,
                'end' => 1751,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1733,
                  'end' => 1744,
                ),
                'kind' => 'Name',
                'value' => 'oldPassword',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1745,
                  'end' => 1751,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1745,
                    'end' => 1751,
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
              'start' => 1753,
              'end' => 1775,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1753,
                'end' => 1774,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1753,
                  'end' => 1774,
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
            'start' => 1780,
            'end' => 1814,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1780,
              'end' => 1793,
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
                'start' => 1794,
                'end' => 1805,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1794,
                  'end' => 1800,
                ),
                'kind' => 'Name',
                'value' => 'userId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1801,
                  'end' => 1805,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1801,
                    'end' => 1804,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1801,
                      'end' => 1804,
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
              'start' => 1807,
              'end' => 1814,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1807,
                'end' => 1814,
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
            'start' => 1819,
            'end' => 1841,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1819,
              'end' => 1832,
            ),
            'kind' => 'Name',
            'value' => 'markTourTaken',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1833,
              'end' => 1841,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1833,
                'end' => 1840,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1833,
                  'end' => 1840,
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
        8 => 
        array (
          'loc' => 
          array (
            'start' => 1900,
            'end' => 1952,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1900,
              'end' => 1911,
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
                'start' => 1921,
                'end' => 1936,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1921,
                  'end' => 1928,
                ),
                'kind' => 'Name',
                'value' => 'subtask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1929,
                  'end' => 1936,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1929,
                    'end' => 1936,
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
              'start' => 1944,
              'end' => 1952,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1944,
                'end' => 1951,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1944,
                  'end' => 1951,
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
            'start' => 2008,
            'end' => 2045,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2008,
              'end' => 2018,
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
                'start' => 2019,
                'end' => 2034,
              ),
              'kind' => 'InputValueDefinition',
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
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2027,
                  'end' => 2034,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2027,
                    'end' => 2034,
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
              'start' => 2037,
              'end' => 2045,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2037,
                'end' => 2044,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2037,
                  'end' => 2044,
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
        10 => 
        array (
          'loc' => 
          array (
            'start' => 2074,
            'end' => 2114,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2074,
              'end' => 2087,
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
                'start' => 2088,
                'end' => 2103,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2088,
                  'end' => 2097,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2099,
                  'end' => 2103,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2099,
                    'end' => 2102,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2099,
                      'end' => 2102,
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
              'start' => 2106,
              'end' => 2114,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2106,
                'end' => 2113,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2106,
                  'end' => 2113,
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
            'start' => 2161,
            'end' => 2200,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2161,
              'end' => 2174,
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
                'start' => 2175,
                'end' => 2190,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2175,
                  'end' => 2184,
                ),
                'kind' => 'Name',
                'value' => 'SubTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2186,
                  'end' => 2190,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2186,
                    'end' => 2189,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2186,
                      'end' => 2189,
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
              'start' => 2192,
              'end' => 2200,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2192,
                'end' => 2199,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2192,
                  'end' => 2199,
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
            'start' => 2266,
            'end' => 2315,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2266,
              'end' => 2274,
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
                'start' => 2275,
                'end' => 2295,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2275,
                  'end' => 2284,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2285,
                  'end' => 2295,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2285,
                    'end' => 2294,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2285,
                      'end' => 2294,
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
              'start' => 2298,
              'end' => 2315,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2298,
                'end' => 2314,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2298,
                  'end' => 2314,
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
        13 => 
        array (
          'loc' => 
          array (
            'start' => 2347,
            'end' => 2409,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2347,
              'end' => 2361,
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
                'start' => 2362,
                'end' => 2373,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2362,
                  'end' => 2368,
                ),
                'kind' => 'Name',
                'value' => 'taskId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2369,
                  'end' => 2373,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2369,
                    'end' => 2372,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2369,
                      'end' => 2372,
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
                'start' => 2374,
                'end' => 2387,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2374,
                  'end' => 2382,
                ),
                'kind' => 'Name',
                'value' => 'statusID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2383,
                  'end' => 2387,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2383,
                    'end' => 2386,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2383,
                      'end' => 2386,
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
                'start' => 2388,
                'end' => 2398,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2388,
                  'end' => 2393,
                ),
                'kind' => 'Name',
                'value' => 'order',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2394,
                  'end' => 2398,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2394,
                    'end' => 2397,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2394,
                      'end' => 2397,
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
              'start' => 2401,
              'end' => 2409,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2401,
                'end' => 2408,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2401,
                  'end' => 2408,
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
            'start' => 2458,
            'end' => 2505,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2458,
              'end' => 2465,
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
                'start' => 2466,
                'end' => 2486,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2466,
                  'end' => 2475,
                ),
                'kind' => 'Name',
                'value' => 'inputTask',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2476,
                  'end' => 2486,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2476,
                    'end' => 2485,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2476,
                      'end' => 2485,
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
              'start' => 2489,
              'end' => 2505,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2489,
                'end' => 2504,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2489,
                  'end' => 2504,
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
        15 => 
        array (
          'loc' => 
          array (
            'start' => 2535,
            'end' => 2587,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2535,
              'end' => 2546,
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
                'start' => 2547,
                'end' => 2562,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2547,
                  'end' => 2554,
                ),
                'kind' => 'Name',
                'value' => 'tasksId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2555,
                  'end' => 2562,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2555,
                    'end' => 2561,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2556,
                      'end' => 2560,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2556,
                        'end' => 2559,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2556,
                          'end' => 2559,
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
                'start' => 2563,
                'end' => 2577,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2563,
                  'end' => 2569,
                ),
                'kind' => 'Name',
                'value' => 'orders',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2570,
                  'end' => 2577,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2570,
                    'end' => 2576,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2571,
                      'end' => 2575,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2571,
                        'end' => 2574,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2571,
                          'end' => 2574,
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
              'start' => 2579,
              'end' => 2587,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2579,
                'end' => 2586,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2579,
                  'end' => 2586,
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
            'start' => 2636,
            'end' => 2670,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2636,
              'end' => 2646,
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
                'start' => 2647,
                'end' => 2659,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2647,
                  'end' => 2653,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2655,
                  'end' => 2659,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2655,
                    'end' => 2658,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2655,
                      'end' => 2658,
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
              'start' => 2662,
              'end' => 2670,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2662,
                'end' => 2669,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2662,
                  'end' => 2669,
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
            'start' => 2765,
            'end' => 2815,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2765,
              'end' => 2777,
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
                'start' => 2778,
                'end' => 2790,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2778,
                  'end' => 2784,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2786,
                  'end' => 2790,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2786,
                    'end' => 2789,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2786,
                      'end' => 2789,
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
                'start' => 2792,
                'end' => 2807,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2792,
                  'end' => 2801,
                ),
                'kind' => 'Name',
                'value' => 'subTaskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2803,
                  'end' => 2807,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2803,
                    'end' => 2806,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2803,
                      'end' => 2806,
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
              'start' => 2810,
              'end' => 2815,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2810,
                'end' => 2814,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2810,
                  'end' => 2814,
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
        18 => 
        array (
          'loc' => 
          array (
            'start' => 2876,
            'end' => 2963,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2876,
              'end' => 2886,
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
                'start' => 2887,
                'end' => 2904,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2887,
                  'end' => 2895,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2897,
                  'end' => 2904,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2897,
                    'end' => 2903,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2898,
                      'end' => 2902,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2898,
                        'end' => 2901,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2898,
                          'end' => 2901,
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
                'start' => 2906,
                'end' => 2928,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2906,
                  'end' => 2916,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2918,
                  'end' => 2928,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2918,
                    'end' => 2927,
                  ),
                  'kind' => 'ListType',
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
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2919,
                          'end' => 2925,
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
                'start' => 2929,
                'end' => 2941,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2929,
                  'end' => 2936,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2937,
                  'end' => 2941,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2937,
                    'end' => 2940,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2937,
                      'end' => 2940,
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
              'start' => 2944,
              'end' => 2963,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2944,
                'end' => 2962,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2944,
                  'end' => 2962,
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
        19 => 
        array (
          'loc' => 
          array (
            'start' => 3008,
            'end' => 3062,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3008,
              'end' => 3017,
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
                'start' => 3018,
                'end' => 3040,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3018,
                  'end' => 3028,
                ),
                'kind' => 'Name',
                'value' => 'columnName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3030,
                  'end' => 3040,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3030,
                    'end' => 3039,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3031,
                      'end' => 3038,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3031,
                        'end' => 3037,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3031,
                          'end' => 3037,
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
                'start' => 3041,
                'end' => 3053,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3041,
                  'end' => 3048,
                ),
                'kind' => 'Name',
                'value' => 'boardId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3049,
                  'end' => 3053,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3049,
                    'end' => 3052,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3049,
                      'end' => 3052,
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
              'start' => 3056,
              'end' => 3062,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3056,
                'end' => 3061,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3057,
                  'end' => 3060,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3057,
                    'end' => 3060,
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
        20 => 
        array (
          'loc' => 
          array (
            'start' => 3087,
            'end' => 3128,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3087,
              'end' => 3099,
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
                'start' => 3100,
                'end' => 3117,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3100,
                  'end' => 3108,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3110,
                  'end' => 3117,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3110,
                    'end' => 3116,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3111,
                      'end' => 3115,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3111,
                        'end' => 3114,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3111,
                          'end' => 3114,
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
              'start' => 3120,
              'end' => 3128,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3120,
                'end' => 3127,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3120,
                  'end' => 3127,
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
            'start' => 3185,
            'end' => 3238,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3185,
              'end' => 3194,
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
                'start' => 3195,
                'end' => 3208,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3195,
                  'end' => 3202,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3204,
                  'end' => 3208,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3204,
                    'end' => 3207,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3204,
                      'end' => 3207,
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
                'start' => 3210,
                'end' => 3228,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3210,
                  'end' => 3219,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3221,
                  'end' => 3228,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3221,
                    'end' => 3227,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3221,
                      'end' => 3227,
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
              'start' => 3231,
              'end' => 3238,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 3231,
                'end' => 3238,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
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
            'start' => 3262,
            'end' => 3298,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3262,
              'end' => 3273,
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
                'start' => 3274,
                'end' => 3287,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3274,
                  'end' => 3281,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3283,
                  'end' => 3287,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3283,
                    'end' => 3286,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3283,
                      'end' => 3286,
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
              'start' => 3290,
              'end' => 3298,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3290,
                'end' => 3297,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3290,
                  'end' => 3297,
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
        23 => 
        array (
          'loc' => 
          array (
            'start' => 3341,
            'end' => 3415,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3341,
              'end' => 3349,
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
                'start' => 3350,
                'end' => 3368,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3350,
                  'end' => 3359,
                ),
                'kind' => 'Name',
                'value' => 'boardName',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3361,
                  'end' => 3368,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3361,
                    'end' => 3367,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3361,
                      'end' => 3367,
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
                'start' => 3370,
                'end' => 3396,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3370,
                  'end' => 3384,
                ),
                'kind' => 'Name',
                'value' => 'boardColumnsId',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3386,
                  'end' => 3396,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3386,
                    'end' => 3395,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3387,
                      'end' => 3394,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 3387,
                        'end' => 3393,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 3387,
                          'end' => 3393,
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
              'start' => 3398,
              'end' => 3415,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3398,
                'end' => 3414,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3398,
                  'end' => 3414,
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
        24 => 
        array (
          'loc' => 
          array (
            'start' => 3480,
            'end' => 3534,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3480,
              'end' => 3495,
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
                'start' => 3496,
                'end' => 3509,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3496,
                  'end' => 3503,
                ),
                'kind' => 'Name',
                'value' => 'boardID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3505,
                  'end' => 3509,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3505,
                    'end' => 3508,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3505,
                      'end' => 3508,
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
                'start' => 3511,
                'end' => 3525,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3511,
                  'end' => 3519,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3521,
                  'end' => 3525,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3521,
                    'end' => 3524,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3521,
                      'end' => 3524,
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
              'start' => 3528,
              'end' => 3534,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3528,
                'end' => 3533,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3528,
                  'end' => 3533,
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
        25 => 
        array (
          'loc' => 
          array (
            'start' => 3540,
            'end' => 3593,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 3540,
              'end' => 3554,
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
                'start' => 3555,
                'end' => 3569,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3555,
                  'end' => 3563,
                ),
                'kind' => 'Name',
                'value' => 'columnID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3565,
                  'end' => 3569,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3565,
                    'end' => 3568,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3565,
                      'end' => 3568,
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
                'start' => 3571,
                'end' => 3583,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3571,
                  'end' => 3577,
                ),
                'kind' => 'Name',
                'value' => 'taskID',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 3579,
                  'end' => 3583,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 3579,
                    'end' => 3582,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 3579,
                      'end' => 3582,
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
              'start' => 3586,
              'end' => 3593,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 3586,
                'end' => 3592,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 3586,
                  'end' => 3592,
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