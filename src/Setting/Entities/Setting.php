<?php

namespace LibLaravel\Setting\Entities;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Setting extends Model
{
    protected $table = 'setting_settings';

    protected $guarded = [];

    protected $casts = [
        'value' => 'array',
    ];

    /**
     * Finish processing on a successful save operation.
     *
     * @param  array  $options
     * @return void
     */
    protected function finishSave(array $options)
    {
        parent::finishSave($options);
        Cache::flush();
    }
}
