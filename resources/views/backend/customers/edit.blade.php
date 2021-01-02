@extends('layouts.admin.main')
@section('title','Customers | All Customers')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customers
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('customers.index')}}">Customers</a></li>
                <li class="active">Edit Customers Informations</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">

                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($customer, [
                                'method'=>'PUT',
                                'route' =>['customers.update',$customer->id],
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
                                {!!Form::select('employee_id',App\User::pluck('name','id'),null,['class'=>"form-control","placeholder"=>"Choose role"]);!!}
                                @if($errors->has('employee_id'))
                                    <span class="help-block">{{$errors->first('employee_id')}}</span>
                                @endif
                            </div>
                        <!-- /.box -->
                    </div>
                    <div class="box">
                        

                        <div class="box-footer clearfix">
                            <div class="">
                                {!!Form::submit('Update',["class"=>"btn btn-lg btn-primary",'name' => 'submitbutton']);!!}
                            </div>
                        </div>
                    </div>
                </div>
               
                    

            {!!Form::close()!!}
        </section>
    </div>
@endsection
