<div>


<div class="row">
  <!--Grid column-->
  <div class="col-md-8 mb-4 mt-4">
    <!--Section: Post data-mdb-->
    <section class="border-bottom mb-4">
      <div class="row align-items-center mb-4">
        <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
          <img src="{{$post->user->photo}}" class="rounded-5 shadow-1-strong me-2" height="35" alt="" loading="lazy" />
          <span> Published <u>{{$post->created_at->diffForHumans()}}</u> by</span>
          <a href="" class="text-dark">{{$post->user->firstName}} {{$post->user->lastName}}</a>
        </div>
      </div>
    </section>
    <!--Section: Post data-mdb-->

    <!--Section: Text-->
    <section>
      <p>{{$post->content}}</p>
    </section>
    <!--Section: Text-->

    <hr>

    <!--Section: Author-->
    <section class="border-bottom mb-4 pb-4">
      <div class="row">
        <div class="col-3">
          <img src="{{$post->user->photo}}" class="img-thumbnail" alt="" />
        </div>

        <div class="col-9">
          <p class="mb-2"><strong>{{$post->user->firstName}} {{$post->user->lastName}}</strong></p>
          <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
          <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
          <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ut aspernatur consectetur quidem quis voluptate sint, facilis ipsa accusantium, ad atque itaque quo aperiam quos velit excepturi ducimus illum non.
          </p>
        </div>
      </div>
  </div>
</div>
</section>
<!--Section: Author-->

@if (auth()->guest())
  <div class="alert alert-danger text text-center">You need to be logged in to comment here</div>
@else
{{-- @livewire('teste') --}}
@livewire('comments-section', ['post' => $post])
@endif

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection

</div>
