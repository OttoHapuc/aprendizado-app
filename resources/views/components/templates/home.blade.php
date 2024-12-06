
@extends('layout.app')

@section('home-page')
@include('components.molecules.header')
<main class="flex justify-center gap-4 pt-6 px-28">
    @include('components.organisms.publish-article', [
    'article' => $article
])
    @include('components.organisms.publish-books', ['books' => $books])
</main>
@endsection