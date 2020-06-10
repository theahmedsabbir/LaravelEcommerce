@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Upload New Product</h4>
			<p class="mg-b-0">Create A New Product From Here</p>
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
				
				<!-- create new Product start -->
				<form action="{{route('storeProduct')}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<label for="name">Product Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="description">Product Description</label>
						<textarea name="description" rows="4" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="regular_price">Regular Price</label>
						<input type="text" name="regular_price" class="form-control">
					</div>

					<div class="form-group">
						<label for="offer_price">Offer Price</label>
						<input type="text" name="offer_price" class="form-control">
					</div>

					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" name="quantity" class="form-control">
					</div>

					<div class="form-group">
						<label for="status">Product Status</label>
						<select name="status" class="form-control">
							<option>Please Select Product Status</option>
							<option value="1">Active</option>
							<option value="0">In-active</option>
						</select>
					</div>

					<!-- is_featured start-->
					<div class="form-group">
						<label for="status">Featured Product</label>
						<select name="is_featured" class="form-control">
							<option>Please Select If Product Is Featured</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>
					</div>
					<!-- is_featured start-->

					<!-- brand start-->
					<div class="form-group">
						<label for="brand_id">Select Brand</label>
						<select name="brand_id" class="form-control">
							<option>Please Select Product Brand</option>

							@foreach ( App\Models\Backend\Brand::orderBy('name', 'asc')->get() as $brand)
								<option value="{{ $brand->id }}">{{ $brand->name }}</option>		
							@endforeach

						</select>
					</div>
					<!-- brand end-->
					
					<!-- category start-->
					<div class="form-group">
						<label for="category_id">Select Category</label>
						<select name="category_id" class="form-control">
							<option>Please Select Product Category</option>

							@foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('parent_id', 0)->get() as $parent)

								<option value="{{ $parent->id }}">{{ $parent->name }}</option>	

								@foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('parent_id', $parent->id )->get() as $child)
										
									<option value="{{ $child->id }}"> - {{ $child->name }}</option>	

								@endforeach	
							@endforeach

						</select>
					</div>
					<!-- category end-->
					
					<div class="form-group">
						<label for="image">Product Main Thumbnail</label>
						<input type="file" name="images[]" class="form-control-file">
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Thumbnail 1</label>
								<input type="file" name="images[]" class="form-control-file">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Thumbnail 2</label>
								<input type="file" name="images[]" class="form-control-file">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Thumbnail 3</label>
								<input type="file" name="images[]" class="form-control-file">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Thumbnail 4</label>
								<input type="file" name="images[]" class="form-control-file">
							</div>
						</div>
					</div>

					<div class="form-group mt-4">
						<input type="submit" name="addProduct" value="Add Product" class="btn btn-primary">
					</div>

				</form>
				<!-- create new Product end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection