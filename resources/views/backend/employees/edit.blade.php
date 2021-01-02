@extends('layouts.admin.main')
@section('title','MyProducts | All Products')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Employee
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">Employees</a></li>
                <li class="active">Edit Employee Informations</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">

                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($employee, [
                                'method'=>'PUT',
                                'route' =>['employees.update',$employee->id],
                                'files' =>true
                            ])!!}
                            <div class="form-group {{$errors->has('name')?'has-error':''}}">
                                {!!Form::label('Name');!!}
                                {!!Form::text('name',null,['class'=>"form-control","placeholder"=>"Name"]);!!}
                                @if($errors->has('name'))
                                    <span class="help-block">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('father_name')?'has-error':''}}">
                                {!!Form::label('Fathers Name');!!}
                                {!!Form::text('father_name',null,['class'=>"form-control","placeholder"=>"Father's Name"]);!!}
                                @if($errors->has('father_name'))
                                    <span class="help-block">{{$errors->first('father_name')}}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{$errors->has('email')?'has-error':''}}">
                                {!!Form::label('Employee Email');!!}
                                {!!Form::email('email',null,['class'=>"form-control","placeholder"=>"Employee Email"]);!!}
                                @if($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('contact_number')?'has-error':''}}">
                                {!!Form::label('Phone Number');!!}
                                {!!Form::text('contact_number',null,['class'=>"form-control","placeholder"=>"Phone Number"]);!!}
                                @if($errors->has('contact_number'))
                                    <span class="help-block">{{$errors->first('contact_number')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('contact_number')?'has-error':''}}">
                                {!!Form::label('Role');!!}
                                {!!Form::select('role_id',App\Role::pluck('role_name','id'),null,['class'=>"form-control","placeholder"=>"Choose role"]);!!}
                                @if($errors->has('contact_number'))
                                    <span class="help-block">{{$errors->first('contact_number')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('password')?'has-error':''}}">
                                {!!Form::label('Employee password');!!}
                                {!!Form::password('password',['class'=>"form-control","placeholder"=>"Employee Password"]);!!}
                                @if($errors->has('password'))
                                    <span class="help-block">{{$errors->first('password')}}</span>
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
