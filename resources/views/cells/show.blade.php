@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="{{ __('messages.cell_folders', ['id' => $cell->id]) }}"></x-page-title>
  <x-search-form></x-search-form>
  <x-folders-table :folders="$folders"></x-folders-table>
  <x-pagination :pagination="$folders"></x-pagination>
</div>
@endsection
