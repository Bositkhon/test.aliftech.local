@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="{{ __('messages.latest', ['records' => 'Документы']) }}"></x-page-title>
  <x-search-form></x-search-form>
  <x-documents-table :documents="$documents"></x-documents-table>
  <x-pagination :pagination="$documents"></x-pagination>
</div>
@endsection
