@extends('layout')

@section('content')

    <h1> Edit artikel</h1>

    <div class="wrapper">
        <form method="POST" action="/article/{{ $article->id }}">
            @csrf
            @method('PUT')
            <div class="form-item">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title" value="{{ $article->title }}">
            </div>


            <div class="form-item">
                <label for="title">Short body:</label>
                <textarea type="text" name="short_body" id="short_body">{{ $article->short_body }}</textarea>
            </div>


            <div class="form-item">
                <label for="title">Body:</label>
                <textarea type="text" name="body" id="body">{{ $article->body }}</textarea>
            </div>

            <button type="submit"> Posten </button>




        </form>
    </div>

@endsection
