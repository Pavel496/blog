@extends('layout')


@section('content')
<article class="post container">

  @if ($post->photos->count() === 1)
    <figure><img src="{{ url($post->photos->first()->url) }}" alt="" class="img-responsive"></figure>

  @elseif ($post->photos->count() > 1)

    @include('posts.carousel')

  @elseif ($post->iframe)
    <div class="video">
      {!! $post->iframe !!}
    </div>

    {{-- <div class="gallery-photos masonry">
      @foreach ($post->photos->take(4) as $photo)
        <figure class="gallery-image">
          @if ($loop->iteration === 4)
            <div class="overlay">{{ $post->photos->count() }} Fotos</div>
          @endif
          <img src="{{ url($photo->url) }}" alt="">
        </figure>
      @endforeach
    </div> --}}

  @endif
    {{-- @if ($post->photos->count() === 1)
      <figure><img src="{{ $post->photos->first()->url }}" alt="" class="img-responsive"></figure>
    @endif --}}
    <div class="content-post">
      <header class="container-flex space-between">
        <div class="date">
          <span class="c-gris">{{ $post->published_at->format('M d') }}</span>
        </div>
        <div class="post-category">
          <span class="category">{{ $post->category->name }}</span>
        </div>
      </header>
      <h1>{{ $post->title }}</h1>
        <div class="divider"></div>
        <div class="image-w-text">
          {!! $post->body !!}
        </div>

        <footer class="container-flex space-between">
            @include('partials.social-links', ['description'=>$post->title])
          <div class="tags container-flex">
            @foreach($post->tags as $tag)
              <span class="tag c-gray-1 text-capitalize">#{{ $tag->name }}</span>
            @endforeach
          </div>
      </footer>
      <div class="comments">
      <div class="divider"></div>
        <div id="disqus_thread"></div>

          @include('partials.disqus-script')

      </div><!-- .comments -->
    </div>
</article>
@stop

@push('styles')
  <link rel="stylesheet" type="text/css" href="/css/twitter-bootstrap.css">
@endpush

@push('scripts')
  <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="/js/twitter-bootstrap.js" async></script>
@endpush
