<?php

namespace App;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cell extends Model
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

    public function box()
    {
        return $this->belongsTo(Box::class, 'box_id', 'id');
    }

    public function folders()
    {
        return $this->hasMany(Folder::class, 'cell_id', 'id');
    }
}
