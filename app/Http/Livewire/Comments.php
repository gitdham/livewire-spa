<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component {
  public $comments;
  public $newComment;

  // initial element
  public function mount() {
    $initialComments = Comment::all();
    $this->comments = $initialComments;
  }

  public function store() {
    if ($this->newComment == '') return;

    $newPost = [
      'body' => $this->newComment,
      'created_at' => '0 min ago',
      'creator' => 'Idham Adzani',
    ];

    array_unshift($this->comments, $newPost);
    $this->newComment = '';
  }

  public function render() {
    return view('livewire.comments');
  }
}
