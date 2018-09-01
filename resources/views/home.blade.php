@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">الاحصاءات</div>

                <div class="panel-body">
                    @if(Auth::user()->role_id == 1)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$employees}}</h3>

                                        <p>{{trans('dashboard.total_employees')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="{{ url('/employees') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$customers}}</h3>

                                        <p>{{trans('dashboard.total_customers')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{ url('/customers') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$suppliers}}</h3>

                                        <p>{{trans('dashboard.total_suppliers')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ url('/suppliers') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$items}}</h3>

                                        <p>{{trans('dashboard.total_items')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ url('/items') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$sections}}</h3>

                                        <p>{{trans('dashboard.total_item_kits')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ url('/section') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$receivings}}</h3>

                                        <p>{{trans('dashboard.total_receivings')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ url('/reports/receivings') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="small-box bg-navy">
                                    <div class="inner">
                                        <h3>{{$sales}}</h3>

                                        <p>{{trans('dashboard.total_sales')}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ url('/reports/sales') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="row" >
                            <div class="col-md-3">
                                <label>{{trans('sale.search_item')}} <input type="text" id="searchbox" class="form-control"></label>

                                <table class="table table-hover">
                                    <tr >


                                        <td><button class="btn btn-success btn-xs" type="button">عرض</button></td>

                                    </tr>
                                </table>

                            </div>
                        </div>



                        <table class="table table-bordered " >
                            <tr><th>{{trans('sale.item_id')}}</th>
                                <th>{{trans('sale.item_name')}}</th>
                                <th>{{trans('sale.price')}}</th>
                                <th>{{trans('sale.quantity')}}</th>
                                <th>{{trans('sale.total')}}</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr id="resultsearch">

                               <button class="btn btn-danger btn-xs" type="button" >ازالة</button>

                            </tr>
                        </table>



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
