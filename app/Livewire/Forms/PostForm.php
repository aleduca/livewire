<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required', as:'titulo')]
    public string $title;
    #[Rule('required|min:10', as:'conteudo')]
    public string $content;

    // protected array $rules = [
    //     'title' => 'required',
    //     'content' => 'required|min:5',
    // ];


    // public function messages()
    // {
    //     return [
    //         'title' => [
    //             'required' => 'O campo título é obrigatório.',
    //         ],
    //         'content' => [
    //             'required' => 'O campo conteúdo é obrigatório.',
    //             'min' => 'O campo conteúdo deve ter no mínimo :min caracteres.',
    //         ],
    //     ];
    // }
}
