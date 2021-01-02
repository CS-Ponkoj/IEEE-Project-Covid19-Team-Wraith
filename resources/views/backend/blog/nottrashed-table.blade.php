<table class="table table-bordered">
    <thead>
    <tr>
        <td width="80">Action</td>
        <td width="300">Title</td>
        <td>Catagory</td>
        <td>Date </td>
        <td>Status </td>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>
                {!!Form::model($post, [
                  'method'=>'DELETE',
                  'route' =>['blogs.destroy',$post->id],

                ])!!}
                    <a href="{{route('blogs.edit',$post->id)}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                {!!Form::close()!!}
            </td>
            <td>{{$post->title}}</td>
            <td>{{$post->category->title}}</td>
            <td>{{$post->created_at}}</td>
            @if($post->published_at==0)
                <td><span class="badge badge-warning">Draft</span></td>
            @endif
            @if($post->published_at==1)
                <td><span class="badge badge-success">Published</span></td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
