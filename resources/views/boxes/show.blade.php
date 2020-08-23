@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="{{ __('messages.box_cells', ['id' => $box->id]) }}"></x-page-title>
  <x-search-form action="{{ route('boxes.show', $box->id) }}"></x-search-form>
  <x-cells-table :cells="$box->cells"></x-cells-table>
</div>
@endsection
