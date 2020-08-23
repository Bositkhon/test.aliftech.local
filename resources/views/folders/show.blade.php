@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center">
    <x-page-title title="{{ __('messages.folder_documents', ['id' => $folder->id]) }}"></x-page-title>
    <a href="{{ route('documents.create', ['folder_id' => $folder->id]) }}" class="btn btn-success">{{ __('buttons.add') }}</a>
  </div>
  <div class="mt-3 mb-3">
  <x-search-form></x-search-form></div>
  <x-documents-table :documents="$documents"></x-documents-table>
  <x-pagination :pagination="$documents"></x-pagination>
</div>
@endsection
