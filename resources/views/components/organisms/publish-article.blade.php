<section class="w-2/3 space-y-4">
    @foreach ($article as $element)
        @include('components.molecules.article',['text'=> $element ['text'], 'content'=> $element['content'], 'img'=> $element['img']])
        @endforeach
</section>