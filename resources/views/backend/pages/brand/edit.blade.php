@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Edit Brand</h4>
			<p class="mg-b-0">Update Brand Information Here</p>
		</div>
	</div>

	<div class="br-pagebody">
        <div class="br-section-wrapper">
        	@include('backend.include.notification')
          {{-- <h6 class="br-section-label">Card Block</h6> --}}
          {{-- <p class="br-section-text">An example some text within a card block.</p> --}}

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
				
				<!-- create new Brand start -->
				<form action="{{ route('updateBrand', $brand->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<label for="name">Brand Name</label>
						<input type="text" name="name" class="form-control" value="{{ $brand->name }}">
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" rows="3" class="form-control">{{ $brand->description }}</textarea>
					</div>
					
					<div class="form-group">
						<label for="image">Brand Thumbnail</label><br>

						@if($brand->image == NULL)
							{{'No Image Uploaded'}} <br><br>
						@else
							<img src="{{ asset('images/brand/'.$brand->image) }}" alt="" width="50"><br><br>
						@endif

						<input type="file" name="image" class="form-control-file">
					</div>

					<div class="form-group">
						<input type="submit" name="saveChanges" value="Save Changes" class="btn btn-primary">
					</div>

				</form>
				<!-- create new Brand end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection