<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comment extends Component
{

    public $comments  = [
           [
            "body" => "Lorem Ipsum is simply dummy 
            text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard
             dummy text ever since the 1500s, 
            when an unknown printer took a galley of
             type and scrambled it.",
             "creator" => "Israel Akinsola",
             "created_at" => "3 mins ago",
             "status" => "active"
           ]

           
    ];

    public $newComment;


    public function addComment()
    {
         array_unshift($this->comments , [
            "body" => $this->newComment,
             "creator" => "Israel Akinsola",
             "created_at" => Carbon::now(),
             "status" => "active"
         ]);
    }


    public function render()
    {
        return view('livewire.comment');
    }
}
