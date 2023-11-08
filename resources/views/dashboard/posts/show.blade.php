@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row  my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success mb-3">
                    <i data-feather="arrow-left"></i>
                    Back to my posts
                </a>
                <a href="" class="btn btn-warning mb-3">
                    <i data-feather="edit"></i>
                    Edit
                </a>
                <a href="" class="btn btn-danger mb-3">
                    <i data-feather="x-circle"></i>
                    Delete
                </a>

                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}"
                     class="img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
