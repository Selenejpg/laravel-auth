@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <th>{{$post->title}}</th>
                        <td><p>{{$post->content}}</p></td>        
                        <td><img src="{{$post->image}}" alt="{{$post->image}}" width="50"></td>
                        <td>{{$post->slug}}</td>
                        <td><a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">View</a></td>
                    </tr>
                @empty
                    <h2>Non ci sono post.</h2>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection