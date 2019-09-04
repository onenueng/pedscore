@extends('layouts.app')

@section('title', 'crqindex')

@section('content')

<h1 class="text-center">คะแนน CRQ</h1>
@include('pedscore._formcrq')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CRQ Description</th>
      <th scope="col">ชั้นปี</th>
      <th scope="col">แก้ไข</th>
    </tr>
  </thead>
  @foreach($crqs as $crq)
    <tr>
      <td>{{ $crq->id}}</td>
      <td>{{ $crq->crq_desc}}</td>
      <td>{{ $crq->ayear}}</td>
      <td><a class="btn btn-sm btn-success" role ="button" href="{{ url('pedscore',$crq->id)}}">Edit</a></td>
    </tr>
  @endforeach
</table>
    
@endsection
