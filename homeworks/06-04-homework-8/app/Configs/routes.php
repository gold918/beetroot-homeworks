<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.08.2018
 * Time: 11:31
 */
//news/sport/juventus-jenoa-anons-matcha
return [
    'news/([a-zA-Z-]+)/([a-zA-Z-]+)' => 'news/detail/$2',
    'news/([a-zA-Z-]+)' => 'news/index/$1',
    'news' => 'news/index',
    'comment' => 'comments/store',
    'admin/upload/([a-zA-Z-]+)' => 'admin/uploadCategory/$1',
    'admin/delete/([a-zA-Z-]+)' => 'admin/deleteCategory/$1',
    'admin/create' => 'admin/createCategory',
    'admin/message' => 'admin/messageCreateCategory',
    'admin' => 'admin/allCategory',
    '^\s*$' => 'index/index',
];

?>