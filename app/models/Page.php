<?php

class Page extends Eloquent
{
    public function cover()
    {
        return $this->belongsTo('FileModel', 'cover_id');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }
} 