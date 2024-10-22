<div {{ $attributes->merge(['class' => '']) }}>
    @if ($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input
        id="{{ $id ?? $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        @if ($required) required @endif
        @if ($disabled) disabled @endif
        class="{{ $inputClass }}"
        >
    {{ $slot }}
</div>
