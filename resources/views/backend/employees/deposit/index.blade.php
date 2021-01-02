@extends('layouts.admin.main') @section('content')
    <div style="padding-left:30px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deposits
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">|Deposits</a></li>
                <li class="active">|Display all Deposits</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div style="width:100%" class="">
                        <div class="box-header clearfix">
                            <div style="margin-bottom:20px ;display:block" class="float-left">
                                <a class="btn btn-block btn-success btn-sm" href="{{route('customers.depositCreate',$id)}}">Add New Deposit</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class=" ">

                            @if(session('status'))
                                <div class="alert alert-success d-block">
                                    <h3 style="" class="text-uppercase font-weight-bold text-center">{{session('status')}}</h3>
                                </div>

                            @elseif(session('trash'))
                                <div class="alert alert-success d-block">
                                    {!!Form::open(['method'=>'PUT', 'route' =>['customer.restore',$id], ])!!}
                                    <h3 style="" class="text-uppercase font-weight-bold text-center">{{session('trash')}}

                                        <button type="submit" class="btn btn-lg btn-warning">Undo</button>
                                    {!!Form::close()!!}

                                </div>
                            @endif
                            @if($deposits->count()==0)
                                <div class="alert alert-danger">
                                    <h3 style="" class="text-uppercase font-weight-bold">No record found !</h3>
                                </div>
                            @else
                               <table style="width:100%" class="table table-dark table-bordered">
                                <thead>
                                <tr>
                                    <td>Action</td>
                                    <td>SR NO</td>
                                    <td>Debt</td>
                                    <td>Deposit</td>
                                    <td>Interest</td>
                                    <td>Rest</td>
                                    <td>DPS</td>
                                    <td>Created At</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($deposits as $deposit)
                                <?php $i++;?>
                                    <tr>
                                        <td>

                                        <a href="{{route('customers.depositEdit',[$deposit->id,$customer_id])}}" class=" btn btn-xs btn-default"><i class="fa fa-edit"></i></a>

                                        {!!Form::close()!!}
                                    </td>
                                        <td>{{"#".$i}}</td>
                                        <td>{{$deposit->debt}}</td>
                                        <td>{{$deposit->deposit}}</td>
                                        <td>{{$deposit->interest}}</td>
                                        <td>{{$deposit->customer->rest}}</td>
                                        <td>{{$deposit->debt+$deposit->deposit+$deposit->interest}}</td>
                                        <td>{{$deposit->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection
