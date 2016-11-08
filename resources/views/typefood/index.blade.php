@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$title}}</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>รหัส</th>
                            <th>ประเภท</th>
                        </tr>
                        @foreach ($typefoods as $typefood)
                            <tr>
                                <td>{{$typefood -> id}}</td>
                                <td>{{$typefood -> name}}</td>
                                <td>
                                    <a href = "{{ url('typefood/show/'.$typefood -> id) }}">ดูรายละเอียด</a>
                                    <a href = "{{ url('typefood/'.$typefood -> id.'/edit') }}">เเก้ไข</a>
                                    <a href = "{{ url('typefood/'.$typefood -> id.'/destroy') }}">ลบ</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href = "{{url('typefood/create')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
                    {!! $typefoods -> render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
