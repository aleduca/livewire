@extends('app')

@section('content')

@livewire('search-user')

{{-- <ul>
  @foreach($posts as $post)
  <li>{{ $post->title }} - <a href="{{ route('post.edit', $post->id)}}">Editar</a>
| <a href="{{ route('post.show', $post->id)}}">Ver</a>
</li>
@endforeach
</ul> --}}

@endsection
