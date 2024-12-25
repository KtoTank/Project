@extends('layouts.app')

@section('content')
<form action="{{ route('creatzaz') }}" method="post">
    @csrf
    <div class="form-group">
        <label >Номер авто</label>
        <input type="text" class="form-control" id="nomer" name="nomer" required>
        <label >Текст заявления</label>
        <input type="text" class="form-control" id="texts" name="texts" required>
    </div>
    <button type="submit" class="btn btn-primary">Отправить заявку</button>
</form>
@endsection