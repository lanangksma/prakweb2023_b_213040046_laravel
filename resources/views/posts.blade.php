@extends('layouts.main')

@section('container')

    <h1 class="my-3">{{ $title }}</h1>
    @foreach ($posts as $post )
        <article class="mb-5 border-bottom pb-2">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

                <a href="/authors/{{ $post->author->username }}"
                   class="text-decoration-none">{{ $post->author->name }}
                </a> in
                <a href="/categories/{{ $post->category->slug }}"
                   class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
            </p>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>

    @endforeach

@endsection
