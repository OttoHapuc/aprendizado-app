<div {{ $attributes->merge(['class' => '']) }}>
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-auto h-auto mx-auto">
    {{ $slot }}
</div>
