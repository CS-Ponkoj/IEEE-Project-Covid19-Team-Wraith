@extends('layouts.admin.main')
@section('title','MyBlog | All Posts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Blog
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('blogs.index')}}">Blog</a></li>
        <li class="active">Edit blog</li>
      </ol>
	</section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body ">
                        {!!Form::model($blog, [
                            'method'=>'PUT',
                            'route' =>['blogs.update',$blog->id],
                          'files' =>true
                        ])!!}
                        <div class="form-group {{$errors->has('title')?'has-error':''}}">
                            {!!Form::label('Title');!!}
                            {!!Form::text('title',null,['class'=>"form-control","placeholder"=>"Name"]);!!}
                            @if($errors->has('title'))
                                <span class="help-block">{{$errors->first('title')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('body')?'has-error':''}}">
                            {!!Form::label('body');!!}
                            {!!Form::textarea('body',null,['class'=>"form-control","placeholder"=>"Content"]);!!}
                            @if($errors->has('body'))
                                <span class="help-block">{{$errors->first('body')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('category_id')?'has-error':''}}">
                            {!!Form::label('Category');!!}
                            {!!Form::select('category_id',App\Category::pluck('title','id'),null,['class'=>"form-control","placeholder"=>"Choose Category"]);!!}
                            @if($errors->has('category_id'))
                                <span class="help-block">{{$errors->first('category_id')}}</span>
                            @endif
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="box">

                    </div>
                </div>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Image</span>
                    </div>
                    <div class="custom-file {{$errors->has('image')?'has-error':''}}">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                    </div>
                    @if($errors->has('image'))
                        <span class="help-block">{{$errors->first('image')}}
                            </span>
                    @endif
                </div>
                <div class="box">
                    <div class="box-header">
                    </div>

                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                {!!Form::submit('Submit',["class"=>"btn btn-md btn-primary form-control",'name' => 'submitbutton']);!!}
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                {!!Form::submit('Draft',["class"=>"btn btn-md btn-warning form-control",'name' => 'submitdraftbutton']);!!}
                            </div>
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
