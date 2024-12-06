<article class="rounded-2xl bg-white p-4 space-y-4">
    <div class="flex gap-2 justify-end w-full">
       <div class="inline-flex bg-gray-50 hover:bg-green-600 rounded-full">
            <button class="w-10 flex items-center justify-center">
                <i class="fa-solid fa-check"></i>
            </button>     
        </div>
        <div class="inline-flex bg-gray-50 hover:bg-red-500 rounded-full">
            <button class="w-10 flex items-center justify-center">
                <i class=" fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

        @include('components.atoms.image', [ 'text' => $text, 'img' => $img])
        <p>{{$content}}</p>
</article>