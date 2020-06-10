@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Edit Division</h4>
			<p class="mg-b-0">Edit Division From Here</p>
		</div>
	</div>

	<div class="br-pagebody">
        <div class="br-section-wrapper">
        	@include('backend.include.notification')

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
				
				<!-- create new Division start -->
				<form action="{{route('updateDivision' , $division->id )}}" method="POST">
					@csrf
					
					<div class="form-group">
						<label for="name">Division Name</label>
						<input type="text" name="name" class="form-control" value="{{ $division->name }}">
					</div>
					
					<div class="form-group">
						<label for="priority">Priority Number</label>
						<input type="number" name="priority" class="form-control"  value="{{ $division->priority }}">
					</div>

					<div class="form-group">
						<input type="submit" name="EditDivision" value="Save Changes" class="btn btn-primary">
					</div>

				</form>
				<!-- create new Division end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection