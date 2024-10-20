<div class="flex flex-col gap-8">
    @if ($position === 'top')
    <h1 class="text-5xl p-2 border-solid border-b-2 border-slate-300">{{ $title }}</h1>
    @endif
    <img src="{{ $img }}" alt="Article {{$title}}" class="w-auto h-auto mx-auto">
    @if ($position === 'botton')
    <h3 class="text-5xl p-2 border-solid border-t-2 border-slate-300">{{ $title }}</h3>
    @endif
</div>
