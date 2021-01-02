<table class="table table-bordered">
    <thead>
    <tr>
        <td width="">ID NO</td>
        <td>Name</td>
        <td>Contact Number</td>
    </tr>
    </thead>

    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>

                {!!Form::model($customer, [
                'style'=>'display:inline-block',
                'method'=>'PUT',
                'route' =>['customer.restore',$customer->id],

                ])!!}

                <button title="Restore" type="submit" class="btn btn-xs btn-default"><i class="fas fa-sync"></i></button>
                {!!Form::close()!!}
                {!!Form::model($customer, [
                'style'=>'display:inline-block',
                  'method'=>'DELETE',
                  'route' =>['customer.force-destroy',$customer->id],

                ])!!}
                <button title="Destroy Permanantly" class="btn btn-xs btn-danger" onclick="return confirm('you are about to delete the$event premanantly. Are you sure?')"><i class="fa fa-trash"></i></button>

                {!!Form::close()!!}

            </td>
            <td>{{$customer->id_no}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->contact_number}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
