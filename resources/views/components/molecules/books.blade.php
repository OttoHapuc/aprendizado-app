<div class="rounded-2xl bg-white w-72 p-4 mx-auto">
    @include('components.atoms.image', ['text' => $text, 'img' => $img])
    <span>{{$content}}</span>
    <div class="text-center mb-2 mt-6">
        <button class=" bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-10 rounded">
            Ver
        </button>
    </div>
</div>