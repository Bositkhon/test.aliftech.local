<?php

namespace App;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Box extends Model
{
    use SoftDeletes, Searchable;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $keyType = 'string';

    public $increments = false;

    /**
     * Relations
     */

    public function cells()
    {
        return $this->hasMany(Cell::class, 'box_id', 'id');
    }

    public function folders()
    {
        return $this->hasManyThrough(
            Folder::class,
            Cell::class,
            'box_id',
            'cell_id',
            'id',
            'id'
        );
    }
}
