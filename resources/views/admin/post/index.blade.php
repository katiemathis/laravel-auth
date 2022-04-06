@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{substr($post->content, 0, 30)}}</td>
                        <td>{{$post->slug}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection