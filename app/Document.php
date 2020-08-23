<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'folder_id',
        'file_name',
        'extension',
        'file_path',
    ];

    public function scopeSearch($query, $searchText)
    {
        $searchText = '%' . $searchText . '%';

        return $query->where('file_name', 'like', $searchText);
    }

    /**
     * Relations
     */

    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id', 'id');
    }
}
