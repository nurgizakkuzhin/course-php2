<?php


namespace App\Models;


use App\Model;

class Article extends Model
{
    public $title;
    public $content;

    const TABLE = 'news';
}