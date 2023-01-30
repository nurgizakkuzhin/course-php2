<?php


namespace App\Models;


use App\MagicalTrait;
use App\Model;

/**
 * Class Article
 * @package App\Models
 *
 * @property $title
 * @property $content
 * @property $author_id
 * @property object $author
 */
class Article extends Model
{

    public $title;
    public $content;
    public $author_id;

    const TABLE = 'news';

    public function __get($name)
    {
        if ('author' === $name && !empty($this->author_id)) {
            return $this->author = Author::findById($this->author_id);
        }
        return null;
    }

    public function __isset($name)
    {
        if ('author' === $name) {
            return !empty($this->author_id);
        }
        return null;
    }

}