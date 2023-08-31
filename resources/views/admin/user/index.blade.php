@extends('admin.layout.app')
@section('content')
                                    
        <div class="card-body">
            <!--begin: Datatable-->
			<table class="table table-bordered table-checkable" id="kt_datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                @foreach($users as $item) 
                    <tr>
                        <td> </td>
                        <td>{{$item -> name}} </td>
                        <td>{{$item -> email}} </td>
                        <td>{{$item -> Utype}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                                                    


@endsection