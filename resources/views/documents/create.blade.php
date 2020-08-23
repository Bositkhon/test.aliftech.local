@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="Добавление документа"></x-page-title>
  <div class="row">
    <div class="col-md-12 col-sm-6">
      <form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <select class="form-control" name="folder_id">
            @foreach($folders as $folder)
            <option value="">Выберите папку</option>
            <option {{ request('folder_id') == $folder->id ? 'selected' : '' }} value="{{ $folder->id }}">Папка({{ $folder->id }}) Ячейка({{ $folder->cell->id }}) Шкаф({{ $folder->cell->box->id }})</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="file">Оцифрованные файлы</label>
          <input type="file" name="files[]" class="form-control-file" id="file" multiple>
        </div>
        <button class="btn btn-success" type="submit">Добавить</button>
        <button class="btn btn-info" type="reset">Очистить</button>
        <a class="btn btn-primary" href="{{ url()->previous() }}">Назад</a>
      </form>
    </div>
  </div>
</div>
@endsection
