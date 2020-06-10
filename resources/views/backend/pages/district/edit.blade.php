@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Edit District</h4>
			<p class="mg-b-0">Edit District From Here</p>
		</div>
	</div>

	<div class="br-pagebody">
        <div class="br-section-wrapper">
        	@include('backend.include.notification')

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
				
				<!-- create new District start -->
				<form action="{{route('updateDistrict' , $district->id )}}" method="POST">
					@csrf
					
					<div class="form-group">
						<label for="name">District Name</label>
						<input type="text" name="name" class="form-control" value="{{ $district->name }}">
					</div>
					
					<div class="form-group">
						<label for="division_id">Select Division</label>						
						<select name="division_id" class="form-control">
							<option>Please Select A Division</option>
							@foreach ($divisions as $division)
								<option value="{{ $division->id }}" {{ $district->division_id == $division->id ? 'selected' : '' }}>{{ $division->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<input type="submit" name="EditDistrict" value="Save Changes" class="btn btn-primary">
					</div>

				</form>
				<!-- create new District end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection