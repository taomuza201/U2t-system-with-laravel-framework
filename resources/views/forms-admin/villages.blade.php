<select class="form-control{{ $errors->has('villages') ? ' is-invalid' : '' }}"
    name="villages" id="villages" required>
    <option value="" data-districts_id="all">ทั้งหมด</option>
    @foreach ($villages as $row)
    <option value="{{$row->villages_name }}">
        {{$row->villages_name }}</option>
    @endforeach
</select>