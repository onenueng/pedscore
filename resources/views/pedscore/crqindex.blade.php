@extends('layouts.app')

@section('title', 'crqindex')

@section('content')

<table class="table">
<h1 class="text-center">CRQ</h1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CRQ Description</th>
      <th scope="col">ชั้นปี</th>
      <th scope="col">สถานะ</th>
    </tr>
  </thead>
  @foreach($crqs as $crq)
    <tr>
      <td>{{ $crq->id}}</td>
      <td>{{ $crq->crq_desc}}</td>
      <td>{{ $crq->ayear}}</td>
    </tr>
  @endforeach
</table>
    
@endsection
