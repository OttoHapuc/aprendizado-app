<section class="w-2/3 p-4">
    <h2 class="text-xl font-bold mb-4">Diário da cidade</h2>
    @foreach ($newsList as $news)
    <article class="mb-4 p-6 bg-white rounded-2xl flex flex-col gap-3">
        <x-image class="flex flex-col gap-8" :src="$news['img']" :alt="$news['title']">
            <span class="text-xl order-first">{{ $news['title'] }}</span>
        </x-image>
        <h3 class="text-lg font-semibold">{{ $news['sub_title'] }}</h3>
        <p>{{ $news['content'] }}</p>
      </article>
    @endforeach
  </section>
