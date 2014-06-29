<?php

return array(
    'title' => 'Files',
    'single' => 'File',
    'model' => 'FileModel',
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'location' => array(
            'title' => 'File',
            'type' => 'file',
            'location' => public_path('/uploads'),
            'naming' => 'random',
            'length' => 32
        )
    ),
    'columns' => array(
        'name' => array(
            'title' => 'Name',
        )
    )
);