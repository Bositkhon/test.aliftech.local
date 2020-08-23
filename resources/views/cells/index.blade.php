@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="{{ __('models.cells') }}"></x-page-title>
  <x-search-form action="{{ route('cells.index') }}"></x-search-form>
  <x-cells-table :cells="$cells"></x-cells-table>
  <x-pagination :pagination="$cells"></x-pagination>
</div>
@endsection
