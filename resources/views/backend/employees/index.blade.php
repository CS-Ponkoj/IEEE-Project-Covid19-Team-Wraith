@extends('layouts.admin.main') @section('content')
    <div style="padding-left:30px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Employees
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('employees.index')}}">|Employees</a></li>
                <li class="active">|Display all Employees</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div style="width:100%" class="">
                        <div class="box-header clearfix">
                            <div style="margin-bottom:20px ;display:block" class="float-left">
                                <a class="btn btn-block btn-success btn-sm" href="{{route('employees.create')}}">Add New Employee</a>
                            </div>
                            <div class="float-right">
                                <a href="?status=all">All ({{$counts['all']}})</a>|
                                <a href="?status=banned"> Banned ({{$counts['banned']}})</a>
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
                                    <?php var_dump(session('trash'));die();?>
                                    {!!Form::open(['method'=>'PUT', 'route' =>['employee.restore',$id], ])!!}
                                    <h3 style="" class="text-uppercase font-weight-bold text-center">{{session('trash')}}

                                        <button type="submit" class="btn btn-lg btn-warning">Undo</button>
                                    {!!Form::close()!!}

                                </div>
                            @endif
                            @if($employees->count()==0)
                                <div class="alert alert-danger">
                                    <h3 style="" class="text-uppercase font-weight-bold">No record found !</h3>
                                </div>
                            @else
                                @if($onlyTrashed==true)
                                    @include('admin.employees.trashed-table')
                                @else
                                    @include('admin.employees.nottrashed-table')
                                @endif
                            @endif
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                <ul class="pagination no-margin">
                                    {{$employees->appends(Request::query())->render()}}
                                </ul>
                            </div>
                            <div class="pull-right">{{$employeeCount}}{{str_plural(' Item',$employeeCount)}}</div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection
