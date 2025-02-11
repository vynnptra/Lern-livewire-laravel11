<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class PostForm extends Form
{
    
    #[Rule(['required'])]
    public string $title = "";
    
    #[Rule(['required'])]
    public string $body = "";

    public function store(){
      $user = User::find(1);
      $validate =  $this->validate();

      $user->posts()->create($validate);

      flash('Post created successfully', 'success');

      

      $this->reset();
    }

}
