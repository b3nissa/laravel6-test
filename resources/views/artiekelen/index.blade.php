@extends('layout')
@section('content')

    <div class="container">
        <h1 class="text-center"> Nieuwsartikelen</h1>


        @foreach ($articles as $article)
            <div style="border: 1px solid red;">
                <a href="{{ route('article.show') }}">
                    <h2>
                        {{ $article->title }}
                    </h2>
                </a>
                <p>
                    {{ $article->short_body }}
                </p>
            </div>

        @endforeach
    </div>


@endsection
