@extends('employee.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center"><input type="checkbox" name="chk_all" id="chk_all" class="form-check-input"></th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th class="text-center">Actions</th>	
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><input type="checkbox" name="chk[]" id="chk_all" class="form-check-input"></td>
						<td>Vinhs</td>
						<td>vinhs2002@gmail.com</td>
						<td>33 Vĩnh viễn</td>
						<td>0938081668</td>
						<td class="text-center"><a href="#modal_edit" data-bs-toggle="modal"><i class="fa-solid fa-user-pen text-warning"></i></a>&nbsp;<a href=""><a href="#modal_delete_id" data-bs-toggle="modal"><i class="fa-solid fa-trash text-danger"></i></a></td>
						
						<!-- Modal Edit-->
						@include('employee.edit')

						<!-- Modal Delete by id-->
						@include('employee.delete')
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@include('employee.create')
@endsection