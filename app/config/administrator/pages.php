<?php

return array(
    'title' => 'Pages',
    'single' => 'Page',
    'model' => 'Page',
    'edit_fields' => array(
        'title' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text'
        ),
        'is_home' => array(
            'title' => 'Is the Homepage',
            'type' => 'bool'
        ),
        'content' => array(
            'title' => 'Content',
            'type' => 'wysiwyg'
        ),
        'category' => array(
            'type' => 'relationship',
            'title' => 'Category',
            'name_field' => 'name'
        ),
        'cover' => array(
            'type' => 'relationship',
            'title' => 'Cover',
            'name_field' => 'name'
        )
    ),
    'columns' => array(
        'title' => array(
            'title' => 'Name',
        ),
        'is_home' => array(
            'title' => 'Homepage'
        )
    ),
    'form_width' => 600,
);