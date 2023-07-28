<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;

class Cookie extends Component
{
    private array $messages = [
        'Time may fly by. But Memories don\'t.',
        'Nothing in the world is accomplished without passion.',
        'The project on your mind will soon gain momentum.',
        'A dream you have will come true.',
        'A journey of a thousand miles begins with a single step.',
    ];

    // Message to display to the visitor
    public string $message;

    public function rotate()
    {
        $this->message = Arr::random($this->messages);
    }

    public function mount()
    {
        $this->rotate();
    }

    public function render()
    {
        return view('livewire.cookie');
    }
}
