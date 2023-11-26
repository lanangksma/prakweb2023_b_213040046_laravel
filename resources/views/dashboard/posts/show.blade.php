@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row  my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts/" class="badge bg-info mb-3">
                    <i data-feather="arrow-left"></i>
                    Back to my posts
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
                    <i data-feather="edit"></i>
                    Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="posts" class="d-inline">
                    @method('delete')
                    @csrf
                    <a href="" class="badge bg-danger">
                        <i data-feather="x-circle"></i>
                        Delete
                    </a>
                </form>

                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" class="img-fluid"
                    alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
