@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit TypeFood</div>

                <div class = "panel-body">
                @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    {!! Form::model($typefood, array('url' => 'typefood/'.$typefood->id, 'method' => 'PUT')) !!}
                       {{csrf_field()}}
                        <div class = "form-group">
                            <div class = "col-xs-4">
                                {{ Form::label('name', 'ประเภทอาหาร') }}
                                {{ Form::text('name', null, ["class" => "form-control"]) }}
                            </div>
                        </div>
                        
                        <div class = "form-group">
                            <div class = "col-sm-10">
                                {{ form::submit('บันทึก', ["class" => 'btn btn-primary'])  }} 
                                <a href = "{{url('typefood')}}" class="btn btn-primary">back</a>
                            </div>
                        </div>
                    {!! Form::close() !!}

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
