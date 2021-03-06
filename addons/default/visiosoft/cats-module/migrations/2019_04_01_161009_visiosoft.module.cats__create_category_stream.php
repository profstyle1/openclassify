<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleCatsCreateCategoryStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'category',
        'title_column' => 'name',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => false,
            'required' => true,
        ],
        'parent_category',
        'order',
        'deleted_at',
        'files'
    ];

}
