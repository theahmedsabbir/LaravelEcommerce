@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Manage Districts</h4>
			<p class="mg-b-0">Manage All Districts From Here</p>
		</div>
	</div>

	<div class="br-pagebody">
        <div class="br-section-wrapper">
        	@include('backend.include.notification')

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">

				<!-- District Table Start -->
              	<table class="table" id="dataTable">
              		<thead class="thead-dark">
              			<tr>
              				<th scope="col">#Sl</th>
              				<th scope="col">Name</th>
              				<th scope="col">Division</th>
              				<th scope="col">Action</th>
              			</tr>
              		</thead>
              		<tbody>

              			@foreach( $districts as $district )

	              			<tr>
	              				<th scope="row">{{$loop->index+1}}</th>
	              				<td>{{ $district->name}}</td>
	              				<td>{{ $district->division->name }}</td>
	              				<td>
	              					<div class="btn-group">
	              						<a href="{{ route('editDistrict', $district->id ) }}" class="btn btn-success btn-sm">Update</a>
	              						<button type="button" data-toggle="modal" data-target="#del{{$district->id}}" class="btn btn-danger btn-sm">Delete</button>
	              					</div>


									<!-- Delete modal starts -->
									<div class="modal fade" id="del{{$district->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        Are you sure you want to delete this district? 
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
									        <form action="{{ route('deleteDistrict', $district->id) }}" method="POST" class="form-inline">
									        	@csrf

									        	<input type="submit" class="btn btn-danger" value="Yes">
									        </form>
									      </div>
									    </div>
									  </div>
									</div>
									<!-- Delete modal ends -->


	              				</td>
	              			</tr>
						
              			@endforeach

              		</tbody>
              	</table>
              	<!-- District Table end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection