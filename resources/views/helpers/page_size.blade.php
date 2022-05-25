<select id="page-size" name="pp">
    @foreach( PAGE_SIZE_LIST as $item)
        <option value="{{ $item }}" @if(isset($pageSize) AND ($pageSize == $item)) selected @endif>{{ $item }}</option>
    @endforeach
</select>
