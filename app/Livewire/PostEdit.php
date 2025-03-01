<?php

namespace App\Livewire;

use App\Attributes\Locked;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
  use WithFileUploads;

  public $forbidden = false;

  #[Locked]
  public $id;

  public Post $post;
  #[Rule('required')]
  public $title;
  #[Rule('required|min:20')]
  public $content;
  #[Rule('nullable|image|max:1024', as: 'photo')]
  public $photo;

  public function mount()
  {
    $this->title = $this->post->title;
    $this->content = $this->post->content;
  }

  public function updatedPhoto()
  {
    if (!in_array($this->photo->extension(), ['png', 'jpeg', 'jpg', 'svg'])) {
      $this->photo = null;
    }
  }

  public function update()
  {
    $this->validate();

    Post::where('id', $this->post->id)->update([
      'title' => $this->title,
      'slug' => Str::slug($this->title),
      'content' => $this->content,
      'photo' => $this->photo ? $this->photo->store('photos', 'public') : $this->post->photo,
    ]);

    $this->js(<<<JS
            swal.fire('Post updated successfully', '', 'success');
        JS);
  }


  public function render()
  {
    return view('livewire.post-edit');
  }
}
