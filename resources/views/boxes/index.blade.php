@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title title="{{ __('models.boxes') }}"></x-page-title>
  <x-search-form action="{{ route('boxes.index') }}"></x-search-form>
  <x-boxes-table :boxes="$boxes"></x-boxes-table>
  <x-pagination :pagination="$boxes"></x-pagination>
</div>
@endsection
