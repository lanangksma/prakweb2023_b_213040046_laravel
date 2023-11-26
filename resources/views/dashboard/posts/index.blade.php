@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap
            align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">MY POSTS</h1>
    </div>

    <div class="table-responsive small col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">
            <i data-feather="plus"></i>
            Create new post
        </a>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped table-sm">
            <caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                                <i data-feather="eye"></i>
                            </a>
                            <a href="" class="badge bg-warning">
                                <i data-feather="edit"></i>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="posts" class="d-inline">
                                @method('delete')
                                @csrf
                                <a href="" class="badge bg-danger">
                                    <i data-feather="x-circle"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </caption>
        </table>
    </div>
@endsection
