<div class="group bg-white flex items-center py-2 px-3 rounded-full">
    <select
      class="border bg-white rounded transition-all duration-300 group-hover:w-48 focus:w-48 group-hover:mr-2 focus:mr-2 w-0">
        <option value="">Selecione uma unidade</option>
        @foreach ($units as $unit)
            <option value="{{ $unit['id'] }}">{{ $unit['name'] }}</option>
        @endforeach
    </select>
    <i class="fa-solid fa-building"></i>
</div>
