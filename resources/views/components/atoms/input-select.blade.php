<div {{ $attributes->merge(['class' => '']) }}>
    @if ($label)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif

    <select
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        @if ($required) required @endif
        @if ($disabled) disabled @endif
        class="{{ $selectClass }}"
    >
        @if ($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif

        @foreach ($options as $option)
            <option value="{{ $option['id'] }}" @if ($value == $option['id']) selected @endif>{{ $option['value'] }}</option>
        @endforeach
    </select>
    {{ $slot }}
</div>
