@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">انشاء قسم</div>
                    <div class="panel-body">
                        {!! Html::ul($errors->all()) !!}

                        {!! Form::open(array('url' => 'section')) !!}

                        <div class="form-group">
                            <label for="name">اسم القسم</label>
                            <input type="text" class="form-control" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="about">وصف القسم</label>
                            <input type="text" class="form-control" name="about" >
                        </div>

                        <input type="submit" class="btn btn-primary" value="حفظ">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection