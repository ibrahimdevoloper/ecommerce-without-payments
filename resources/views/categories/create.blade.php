@extends('adminlte::page')
@section('content_header')
    <h3>Add New Category</h3>
@endsection
@section('content')
    <form action="/dashboard/categories" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="row">
            <x-adminlte-input name="name" label="Name" placeholder="Toys" fgroup-class="col-md-6" disable-feedback
            value="{{ old( 'name' ) }}"/>
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
            <x-adminlte-input name="description" label="Description"
            value="{{ old( 'description' ) }}"
                placeholder="Description for this category, Limit 191 character"
                fgroup-class="col-md-6"
                disable-feedback />
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
            <x-adminlte-input-file name="image" label="Upload image" placeholder="Choose an image..." disable-feedback
                fgroup-class="col-md-6" />
        </div>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <x-adminlte-button class="btn-sm" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
    </form>
@endsection
