<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class News extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'title',
        'user_id',
        'tags',
        'body',
        'image',
    ];

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

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationships to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
