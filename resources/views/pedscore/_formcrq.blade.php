<div class="col-8 mx-auto mt-2">
    @if ( $message = Session::get('success'))
    <div calss = "alert alert-success">
        {{ $message }}
    </div>
    @endif


@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class ="row">
        <div class="col-sm-12">
        <form action="{{ url('pedscore/crqmaster') }}" method="post">
            <input type="hidden" name = "_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">CRQ:  </label>
                            <input type="text" class="form-control" id="crq_desc" name ="crq_desc" value="{{ old('crq_desc',isset($crq)$crq->crq_desc)}}">
                   </div>
                </div>

                <div class="form-group">
                    <label class="text-inline">ชั้นปีที่:  </label>
                        @foreach($ayears as $ayear)
                        @if( old('$ayear') == $ayear['id'])
                            <label class="radio-inline">
                                <input type="radio" name="ayear" value = "{{ $ayear['id'] }}" checked>{{ $ayear['name']}}
                            </label>
                        @else
                        <label class="radio-inline">
                                <input type="radio" name="ayear" value = "{{ $ayear['id'] }}">{{ $ayear['name']}}
                            </label>
                        @endif
                        @endforeach
                </div>
                <div class ="text-center">
                    <button type="submit" class ="btn btn-success">Submit</button>
                </div>
        </form>
        </div>
    </div>
</div> 