@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">تعديل بيانات القسم</div>
                    <div class="panel-body">
                        {!! Html::ul($errors->all()) !!}

                        {!! Form::open(array('url' => 'section')) !!}

                        <div class="form-group">
                            <label for="name">اسم القسم</label>
                            <input type="text" class="form-control" name="name" value="{{$section->name}}">
                        </div>

                        <div class="form-group">
                            <label for="about">وصف القسم</label>
                            <input type="text" class="form-control" name="about" value="{{$section->about}}">
                        </div>

                        {!! Form::submit(trans('employee.submit'), array('class' => 'btn btn-primary')) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection