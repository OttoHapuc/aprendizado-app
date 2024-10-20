@extends('layouts.app')

@section('content')
  @include('components.molecules.header', ['city' => $city, 'units' => $units])

  <main class="flex px-24">
    @include('components.organisms.news-section', ['newsList' => $newsList])
    @include('components.organisms.books-scroll', ['books' => $books])
  </main>
@endsection
