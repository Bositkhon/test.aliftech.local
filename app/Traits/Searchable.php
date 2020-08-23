<?php

namespace App\Traits;

trait Searchable
{
    public function scopeSearch($query, $searchText)
    {
        $searchText = $searchText . '%';

        return $query
            ->where('id', 'like', $searchText);
    }
}
