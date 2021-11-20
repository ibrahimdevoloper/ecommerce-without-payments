@extends('adminlte::page')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    @endsection
@endsection
@section('content_header')
<h2>Products</h2>
<a href="products/create"><x-adminlte-button class="btn-md"
    type="submit" label="Add Product" theme="success" icon="fas fa-md fa-save"/></a>
@endsection
@section('content')


{!!$dataTable->table()!!}
@endsection

@push('scripts')
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>

          <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    {!!$dataTable->scripts()!!}
@endpush
