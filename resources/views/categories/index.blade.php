@extends('adminlte::page')
@section('content_header')
<h2>Categories</h2>
@endsection
@section('content')
{{-- Setup data for datatables --}}
@php
$heads = [
    'image',
    'Name',
    'description',
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
// dd($users);
$data =[];
foreach ($categories as $category ) {
    $image=asset($category->image);
    $data[]=[
        '<img src='.$image.' width="75" height="75">',
        $category->name,
        $category->description,
        '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>',
    ];
}
$config = [
    'data' =>$data,
    // 'data' =>[
    //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    // ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => true]],
];

@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="user_table" :heads="$heads" head-theme="dark" :config="$config"
    hoverable bordered compressed beautify >
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>
{{$categories->links()}}
@endsection
