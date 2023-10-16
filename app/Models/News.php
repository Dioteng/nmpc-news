<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public static function find($id) {
        $news = self::all();

        foreach($news as $newsItem) {
            if($newsItem['id'] == $id) {
                return $newsItem;
            }
        }
    }

    public function getPreview($length = 150) {
        // Replace 150 with the desired length for the preview
        return substr($this->body, 0, $length) . (strlen($this->body) > $length ? '...' : '');
    }
}
