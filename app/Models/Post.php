<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'user_id', 'title', 'body', 'image','published_at',];

    public $search = '';

    #[On('search')]
    public function updatedSearch($search){
        $this->search = $search;

    }

    protected $cast = [
        'published_at' => 'datetime',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function postSelection(){
        return Str::limit(strip_tags($this->body), 100);
    }


}
