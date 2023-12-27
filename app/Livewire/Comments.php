<?php

namespace App\Livewire;
use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{

    use WithPagination;
    public Post $post;

    #[Rule('required|min:3|max:200')]
    public string $comment;

    public function postComment()
    {
        if (auth()->guest()) {
            return;
        }

        $this->validateOnly('comment');

        $this->post->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->id()
        ]);

        $this->reset('comment');
    }

    #[Computed()]
    public function comments()
    {
        return $this?->post?->comments()->with('user')->latest()->paginate(5);
    }


}
