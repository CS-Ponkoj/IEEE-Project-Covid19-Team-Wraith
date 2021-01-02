<table style="width:100%" class="table table-dark table-bordered">
    <thead>
    <tr>
        <td width="">Action</td>
        <td width="">Name</td>
        <td width="">Father Name</td>
        <td>Email Address</td>
        <td>Contact Number</td>
        <td>Customers</td>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>
                {!!Form::model($employees, [ 'method'=>'DELETE', 'route' =>['employees.destroy',$employee->id], ])!!}

                <a href="{{route('employees.edit',$employee->id)}}" class=" btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                <button type="submit" class=" btn btn-xs btn-danger"><i class="fa fa-times"></i></button>

                {!!Form::close()!!}
            </td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->father_name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->contact_number}}</td>
            <td><a href="{{route('employeecustomer.index',$employee->id)}}">Customers</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

