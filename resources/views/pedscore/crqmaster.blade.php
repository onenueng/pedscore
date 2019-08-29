@extends('layouts.app')

@section('title','crqmaster')

@section('content')

<div class="container">
    <div class ="row">
        <div class="col-sm-12">
        <form action="{{ url('pedscore/crq') }}" method="post">
            <input type="hidden" name = "_token" value="{{ csrf_token() }}">
                <h2> คะแนน CRQ </h2>
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">CRQ:  </label>
                            <input type="text" class="form-control" id="crq_desc" name ="crq_desc">
                   </div>
                </div>

                <div class="form-group">
                    <label class="text-inline">ชั้นปีที่:  </label>
                        @foreach($ayears as $ayear)
                            <label class="radio-inline">
                                <input type="radio" name="ayear" value = "{{ $ayear['id'] }}">{{ $ayear['name']}}
                            </label>
                        @endforeach
                </div>
                
                <div class ="text-center">
                    <button type="submit" class ="btn btn-success">Submit</button>
                </div>
        </form>
        </div>
    </div>
</div> 
@endsection

