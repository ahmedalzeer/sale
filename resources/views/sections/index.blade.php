@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">قائمة الاقسام</div>

                    <div class="panel-body">
                        <a class="btn btn-small btn-success" href="{{ URL::to('section/create') }}">اضافة قسم</a>
                        <hr />
                        @if (Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>م القسم</td>
                                <td>اسم الفسم</td>
                                <td>وصف القسم</td>
                                <td>&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($section as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->about }}</td>
                                    <td>

                                        <a class="btn btn-small btn-info" href="{{ URL::to('section/' . $value->id . '/edit') }}">تعديل</a>
                                        {!! Form::open(array('url' => 'section/' . $value->id, 'class' => 'pull-right')) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit(trans('employee.delete'), array('class' => 'btn btn-warning')) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection