
@extends('layouts.admin.main')
@section('title','MyBlog | All Categories')
@section('content')
    <div style="padding-left:10px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard|</a></li>
                <li><a href="{{route('categories.index')}}">Categories</a></li>
                <li class="active">Create New Category</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            {!!Form::model($category, [
                                'method'=>'PUT',
                                'route' =>['categories.update',$category->id],
                            ])!!}
                            <div class="form-group {{$errors->has('title')?'has-error':''}}">
                                {!!Form::label('Title');!!}
                                {!!Form::text('title',null,['class'=>"form-control","placeholder"=>"Name"]);!!}
                                @if($errors->has('title'))
                                    <span class="help-block">{{$errors->first('title')}}</span>
                                @endif
                            </div>


                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="row">
                            {!!Form::submit('Update',["class"=>"btn btn-md btn-default form-control",'name' => 'submitbutton']);!!}
                        </div>

                    </div>

                    {!!Form::close()!!}
                </div>

            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection
