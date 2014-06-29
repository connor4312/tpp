<?php

return array(
    'title' => 'Categories',
    'single' => 'Category',
    'model' => 'Category',
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text'
        ),
        'order' => array(
            'title' => 'Ordering',
            'type' => 'number'
        )
    ),
    'columns' => array(
        'name' => array(
            'title' => 'Name',
        ),
        'order' => array(
            'title' => 'Ordering'
        )
    )
);