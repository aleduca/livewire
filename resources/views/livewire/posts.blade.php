<div>
<h2 class="mt-3">Posts ({{$posts->total()}})</h2>
<ul class="list-group mt-3">
  @foreach($posts as $post)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
      {{ Str::words($post->title,7,'...') }}
      (<i class="bi bi-person-badge-fill"></i> {{$post->user->firstName}} {{$post->user->lastName}})
      (<i class="bi bi-chat-dots-fill"></i> {{$post->comments->count()}})
    </div>
    <div>
      <a wire:navigate href="{{route('post.edit',$post->id)}}"><i class="bi bi-pencil"></i></a>
      <a wire:navigate href="{{route('post.show',$post->id)}}"><i class="bi bi-eye"></i></a>
    </div>
  </li>
  @endforeach
</ul>

<hr>

{{$posts->links('pagination::bootstrap-5')}}
</div>
