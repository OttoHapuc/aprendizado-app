<div class="flex gap-2 items-center">
    <img src="{{ $city['igm'] }}" alt="City Logo" class="w-12 h-auto">
    @if ($city['name'])
    <span class="text-xl">{{ $city['name'] }}</span>
    @endif
</div>
