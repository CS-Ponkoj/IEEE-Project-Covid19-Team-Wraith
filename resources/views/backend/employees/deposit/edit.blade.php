@extends('layouts.admin.main')
@section('title','Deposits | All Deposits')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deposits
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">Deposits</a></li>
                <li class="active">Edit Deposit Informations</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($deposit, [
                                'method'=>'PUT',
                                'route' =>['deposits.update',$deposit->id],
                            ])!!}
                            <div class="form-group {{$errors->has('debt')?'has-error':''}}">
                                {!!Form::label('Debt');!!}
                                {!!Form::number('debt',null,['class'=>"form-control","placeholder"=>"Debt"]);!!}
                                @if($errors->has('debt'))
                                    <span class="help-block">{{$errors->first('debt')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('deposit')?'has-error':''}}">
                                {!!Form::label('Deposit');!!}
                                {!!Form::number('deposit',null,['class'=>"form-control","placeholder"=>"Deposit"]);!!}
                                @if($errors->has('deposit'))
                                    <span class="help-block">{{$errors->first('deposit')}}</span>
                                @endif
                            </div>
                           <div class="form-group {{$errors->has('interest')?'has-error':''}}">
                                {!!Form::label('Interest');!!}
                                {!!Form::number('interest',null,['class'=>"form-control","placeholder"=>"Interest"]);!!}
                                @if($errors->has('interest'))
                                    <span class="help-block">{{$errors->first('interest')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('dps')?'has-error':''}}">
                                {!!Form::label('DPS');!!}
                                {!!Form::number('dps',null,['class'=>"form-control","placeholder"=>"DPS"]);!!}
                                @if($errors->has('dps'))
                                    <span class="help-block">{{$errors->first('dps')}}</span>
                                @endif
                            </div>
                            <input type="number" name="customer_id" value="{{$customer_id}}" hidden>
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
