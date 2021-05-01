<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Show extends Component
{
    public $foo;
    public $text;
    public $sub;

    public function mount()
    {
        $this->text = "Mount Called";
    }

    public function hydrateFoo($value)
    {
        $this->text = "HydrateFoo Called";
    }

    public function dehydrateFoo($value)
    {
        $this->text = "dehydrateFoo Called";
    }

    public function hydrate()
    {
        $this->text = "Hydrate Called";
    }

    public function dehydrate()
    {
        $this->text = "dehydrate Called";
    }

    public function updating($name, $value)
    {
        $this->text = "updating Called";
    }

    public function updated($name, $value)
    {
        $this->text = "updated Called";
    }

    public function updatingFoo($value)
    {
        $this->text = "updating Called";
    }

    public function updatedFoo($value)
    {
        $this->text = "updatedFoo Called";
    }

    public function updatingFooBar($value)
    {
        $this->text = "updating Called";
    }

    public function updatedFooBar($value)
    {
        $this->text = "updatedFooBar Called";
    }

    public function render()
    {
        return view('livewire.post.show');
    }
}
