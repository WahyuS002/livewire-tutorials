<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $newComment;

    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis repellat cum reiciendis voluptatem aliquam consectetur assumenda eaque vero, quos nisi.',
            'created_at' => '3 min ago',
            'user' => 'Wahyu'
        ]
    ];

    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'user' => 'Testing'
        ]);

        $this->newComment = '';
    }

    public function render()
    {
        $comments = $this->comments;
        return view('livewire.comments', compact('comments'));
    }
}
