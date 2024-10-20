<aside class="w-1/3 p-4 overflow-y-auto">
    <h2 class="text-xl font-bold mb-4">Livros Mais Vistos</h2>
    <ul class="flex flex-col gap-4 px-16 ">
      @foreach ($books as $book)
      @include('components.molecules.card-book', ['book' => $book])
      @endforeach
    </ul>
  </aside>
