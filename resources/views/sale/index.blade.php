@extends('app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> {{trans('sale.sales_register')}}</div>

                    <div class="panel-body">

                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        {!! Html::ul($errors->all()) !!}

                        <div class="row" ng-controller="SearchItemCtrl">

                            <div class="col-md-3">
                                <label>{{trans('sale.search_item')}} <input ng-model="searchKeyword" class="form-control"></label>

                                <table class="table table-hover">
                                    <tr ng-repeat="item in items  | filter: searchKeyword | limitTo:10">

                                        <td>@{{item.item_name}}</td>
                                        <td><button class="btn btn-success btn-xs" type="button" ng-click="addSaleTemp(item, newsaletemp)">اضافة</button></td>

                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-9">

                                <div class="row">

                                    {!! Form::open(array('url' => 'sales', 'class' => 'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="invoice" class="col-sm-3 control-label">{{trans('sale.invoice')}}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="invoice" value="@if ($sale) {{$sale->id + 1}} @else 1 @endif" readonly/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="employee" class="col-sm-3 control-label">{{trans('sale.employee')}}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="employee" value="{{ Auth::user()->name }}" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="customer_id" class="col-sm-4 control-label">{{trans('sale.customer')}}</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="c_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="payment_type" class="col-sm-4 control-label">{{trans('sale.payment_type')}}</label>
                                            <div class="col-sm-8">
                                                {!! Form::select('payment_type', array('Cash' => 'Cash', 'Check' => 'Check', 'Debit Card' => 'Debit Card', 'Credit Card' => 'Credit Card'), Input::old('payment_type'), array('class' => 'form-control')) !!}
                                            </div>
                                        </div>
                                    </div>



                                    <table class="table table-bordered " >
                                        <tr>
                                            <th>{{trans('sale.item_id')}}</th>
                                            <th>{{trans('sale.item_name')}}</th>
                                            <th>{{trans('sale.price')}}</th>
                                            <th>{{trans('sale.quantity')}}</th>
                                            <th>{{trans('sale.total')}}</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        <tr ng-repeat="newsaletemp in saletemp">

                                            <td>@{{newsaletemp.item_id}}</td>
                                            <td>@{{newsaletemp.item.item_name}}</td>
                                            <td>@{{newsaletemp.item.selling_price | currency:"EGP"}}</td>
                                            <td><input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2"></td>
                                            <td>@{{newsaletemp.item.selling_price * newsaletemp.quantity | currency:"EGP"}}</td>
                                            <td><button class="btn btn-danger btn-xs" type="button" ng-click="removeSaleTemp(newsaletemp.id)">ازالة</button></td>

                                        </tr>
                                    </table></div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total" class="col-sm-4 control-label">{{trans('sale.add_payment')}}</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">جنية</div>
                                                    <input type="text" class="form-control" id="add_payment" ng-model="add_payment"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="form-group">
                                            <label for="employee" class="col-sm-4 control-label">{{trans('sale.comments')}}</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="comments" id="comments" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="supplier_id" class="col-sm-4 control-label">{{trans('sale.grand_total')}}</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><b>@{{sum(saletemp) | currency:"EGP"}}</b></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="amount_due" class="col-sm-4 control-label">{{trans('sale.amount_due')}}</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">@{{add_payment - sum(saletemp) | currency:"EGP"}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success btn-block">{{trans('sale.submit')}}</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {!! Form::close() !!}



                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection