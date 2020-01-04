@extends('layout')


@section('content')

    <h1> Nieuw artikel</h1>

    <div class="wrapper">
        <form method="post" action="/article">
            @csrf


            <div class="form-item">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title"
                value="{{ old('title') }}"
                >
            </div>
            @error('title')
            <p style="color: red;"> {{ $errors->first('title') }}</p>
            @enderror

            <div class="form-item">
                <label for="title">Short body:</label>
                <textarea type="text" name="short_body" id="short_body">
                    {{ old('short_body') }}
                </textarea>
            </div>
            @error('short_body')
            <p style="color: red;"> {{ $errors->first('short_body') }}</p>
            @enderror

            <div class="form-item">
                <label for="title">Body:</label>
                <textarea type="text" name="body" id="body">
                    {{ old('body') }}
                </textarea>
            </div>
            @error('body')
            <p style="color: red;"> {{ $errors->first('body') }}</p>
            @enderror

            <button type="submit"> Posten </button>




        </form>
    </div>

 @endsection
