<section class="w-1/3 space-y-4">
    @foreach ($books as $element)
            @include('components.molecules.books',['text'=> $element ['text'], 'content'=> $element['content'], 'img'=> $element['img']])
        @endforeach
    </section>