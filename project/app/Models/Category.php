<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed c_description_seo
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'label-danger'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'label-default'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status,$this->c_active,'[N\A]' );
    }
}
