<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post;
use Livewire\Attributes\Reactive;

class LikeButton extends Component
{

    #[Reactive]
    public Post $post;

    public function changeLike(){
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }
        $user = auth()->user();

        if ($user->liked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }

        $user->likes()->attach($this->post);

    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
