@extends('layouts.admin.main')
@section('content')
    <div style="padding-left:20px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deposit
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">|Deposit</a></li>
                <li class="active">|Create New Deposit</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <p>Profit:0.0025%</p>
                        <p>Perday:{{$customer_perday}}</p>
                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($deposit, [
                                'method'=>'POST',
                                'route' =>'deposits.store',
                            ])!!}

                            <div class="form-group {{$errors->has('debt')?'has-error':''}}">
                                {!!Form::label('Debt');!!}
                                {!!Form::number('debt',null,['class'=>"form-control debt","placeholder"=>"Debt"]);!!}
                                @if($errors->has('debt'))
                                    <span class="help-block">{{$errors->first('debt')}}</span>
                                @endif
                            </div>
                            <?php $value_d=0;?>
                            <div class="form-group {{$errors->has('deposit')?'has-error':''}}">
                                {!!Form::label('Deposit');!!}
                                {!!Form::number('deposit',null,['class'=>"form-control deposit","placeholder"=>"Deposit",]);!!}
                                @if($errors->has('deposit'))
                                    <span class="help-block">{{$errors->first('deposit')}}</span>
                                @endif
                            </div>
                           <div class="form-group {{$errors->has('interest')?'has-error':''}}">
                                {!!Form::label('Interest');!!}
                                {!!Form::number('interest',null,['class'=>"form-control interest","placeholder"=>"Interest"]);!!}
                                @if($errors->has('interest'))
                                    <span class="help-block">{{$errors->first('interest')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('dps')?'has-error':''}}">
                                {!!Form::label('DPS');!!}
                                {!!Form::number('dps',$value_d,['class'=>"form-control","placeholder"=>"DPS"]);!!}
                                @if($errors->has('dps'))
                                    <span class="help-block">{{$errors->first('dps')}}</span>
                                @endif
                            </div>
                            <input type="number" name="customer_id" value="{{$id}}" hidden>
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
