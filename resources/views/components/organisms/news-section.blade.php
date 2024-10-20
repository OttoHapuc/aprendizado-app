<section class="w-2/3 p-4">
    <h2 class="text-xl font-bold mb-4">Diário da cidade</h2>
    @foreach ($newsList as $news)
    <article class="mb-4 p-6 bg-white rounded-2xl flex flex-col gap-3">
          @include('components.atoms.igm-artcle', ['img' => $news['img'], 'position' => 'top', 'title' => $news['title']])
        <h3 class="text-lg font-semibold">{{ $news['sub_title'] }}</h3>
        <p>{{ $news['content'] }}</p>
      </article>
    @endforeach
  </section>
