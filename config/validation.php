<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default validation
    |--------------------------------------------------------------------------
    |
    | This option defines the default validation for
    | the next methods of http [GET]
    |
    */
    'default' => [
      'predicates' => 'array|nullable',
      'predicates.*.name' => 'string|required',
      'predicates.*.comparison' => 'string|required',
      'predicates.*.attribute' => 'string|required',
      'predicates.*.value' => 'required',
      'sorts' => 'array|nullable',
      'sorts.*.attribute' => 'string|required',
      'sorts.*.direction' => 'string|required',
      'page' => 'integer|required',
      'per_page' => 'integer|required',
    ],
];
