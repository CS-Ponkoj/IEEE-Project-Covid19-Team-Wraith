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
                'style'=>'display:inline-block',
                'method'=>'PUT',
                'route' =>['blog.restore',$post->id],

                ])!!}

                <button title="Restore" type="submit" class="btn btn-xs btn-default"><i class="fas fa-trash-restore"></i></button>
                {!!Form::close()!!}
                {!!Form::model($post, [
                'style'=>'display:inline-block',
                  'method'=>'DELETE',
                  'route' =>['blog.force-destroy',$post->id],

                ])!!}
                <button title="Destroy Permanantly" class="btn btn-xs btn-danger" onclick="return confirm('you are about to delete the post premanantly. Are you sure?')"><i class="fa fa-trash"></i></button>

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

