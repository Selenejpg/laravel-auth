@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo del post" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="url" class="form-control" id="image" placeholder="url immagine" name="image">
            <button class="btn btn-success" type="submit">Crea</button>
        </div>
    </form>
</div>

@endsection