<?php

class Category extends Eloquent
{
    public $table = 'categories';

    public function pages()
    {
        return $this->hasMany('Page');
    }
} 