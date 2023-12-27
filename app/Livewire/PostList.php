<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class PostList extends Component
{

    use WithPagination;

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search){
        $this->search = $search;
        $this->resetPage();
    }

    #[Computed()]
    public function posts(){
        return Post::published()->with('author')->orderBy('published_at', 'desc')->simplePaginate(9);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
