<table style="width:100%" class="table table-dark table-bordered">
    <thead>
    <tr>
        <td width="">Action</td>
        <td width="">ID No</td>
        <td width="">Name</td>
        <td>Contact Number</td>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>
                {!!Form::model($customers ?? '', [ 'method'=>'DELETE', 'route' =>['customers.destroy',$customer->id], ])!!}

                <a href="{{route('customers.edit',$customer->id)}}" class=" btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                <button type="submit" class=" btn btn-xs btn-danger"><i class="fa fa-times"></i></button>

                {!!Form::close()!!}
            </td>
            <td>{{$customer->id_no}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->contact_number}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

