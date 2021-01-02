@extends('layouts.admin.main')
@section('content')
    <div style="padding-left:20px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customer
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">|Customer</a></li>
                <li class="active">|Create New Customer</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($customer, [
                                'method'=>'POST',
                                'route' =>'customers.store',
                            'files' =>true
                            ])!!}
                            <div class="form-group {{$errors->has('name')?'has-error':''}}">
                                {!!Form::label('Name');!!}
                                {!!Form::text('name',null,['class'=>"form-control","placeholder"=>"Name"]);!!}
                                @if($errors->has('name'))
                                    <span class="help-block">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('id_no')?'has-error':''}}">
                                {!!Form::label('Customer ID');!!}
                                {!!Form::number('id_no',null,['class'=>"form-control","placeholder"=>"Customer Id"]);!!}
                                @if($errors->has('id_no'))
                                    <span class="help-block">{{$errors->first('id_no')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('contact_number')?'has-error':''}}">
                                {!!Form::label('Contact Number');!!}
                                {!!Form::text('contact_number',null,['class'=>"form-control","placeholder"=>"Contact Number"]);!!}
                                @if($errors->has('contact_number'))
                                    <span class="help-block">{{$errors->first('contact_number')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('employee_id')?'has-error':''}}">
                                {!!Form::label('Employee');!!}
                                {!!Form::select('employee_id',App\User::pluck('name','id'),null,['class'=>"form-control","placeholder"=>"Choose Employess"]);!!}
                                @if($errors->has('employee_id'))
                                    <span class="help-block">{{$errors->first('employee_id')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('dps')?'has-error':''}}">
                                {!!Form::label('DPS');!!}
                                {!!Form::number('dps',null,['class'=>"form-control","placeholder"=>"Dps"]);!!}
                                @if($errors->has('dps'))
                                    <span class="help-block">{{$errors->first('sps')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('opening_loan')?'has-error':''}}">
                                {!!Form::label('Savings');!!}
                                {!!Form::number('savings',null,['class'=>"form-control","placeholder"=>"Savings"]);!!}
                                @if($errors->has('savings'))
                                    <span class="help-block">{{$errors->first('savings')}}</span>
                                @endif
                            </div>

                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="box">
                        <div class="box-header">
                        </div>

                        <div class="box-footer clearfix">
                            <div class="">
                                {!!Form::submit('Submit',["class"=>"btn btn-md btn-primary form-control",'name' => 'submitbutton']);!!}
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>

            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection
