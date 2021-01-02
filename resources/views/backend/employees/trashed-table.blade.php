<table class="table table-bordered">
    <thead>
    <tr>
        <td width="80">Action</td>
        <td width="150">Name</td>
        <td>Father Name</td>
        <td>Email Address</td>
        <td>Contact Number</td>
    </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>

                {!!Form::model($employee, [
                'style'=>'display:inline-block',
                'method'=>'PUT',
                'route' =>['employee.restore',$employee->id],

                ])!!}

                <button title="Restore" type="submit" class="btn btn-xs btn-default"><i class="fas fa-sync"></i></button>
                {!!Form::close()!!}
                {!!Form::model($employee, [
                'style'=>'display:inline-block',
                  'method'=>'DELETE',
                  'route' =>['employee.force-destroy',$employee->id],

                ])!!}
                <button title="Destroy Permanantly" class="btn btn-xs btn-danger" onclick="return confirm('you are about to delete the$event premanantly. Are you sure?')"><i class="fa fa-trash"></i></button>

                {!!Form::close()!!}

            </td>
            <td>{{substr($employee->name,0,20)}}</td>
            <td>{{$employee->father_name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->contact_number}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
