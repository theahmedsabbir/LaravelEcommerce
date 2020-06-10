@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Edit Product</h4>
			<p class="mg-b-0">Edit Product From Here</p>
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
				<form action="{{ route('updateProduct' , $product->id ) }}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<label for="name">Product Title</label>
						<input type="text" name="title" class="form-control" value="{{ $product->title }}">
					</div>
					
					<div class="form-group">
						<label for="description">Product Description</label>
						<textarea name="description" rows="4" class="form-control">{{ $product->description }}</textarea>
					</div>

					<div class="form-group">
						<label for="regular_price">Regular Price</label>
						<input type="text" name="regular_price" class="form-control" value="{{ $product->regular_price }}">
					</div>

					<div class="form-group">
						<label for="offer_price">Offer Price</label>
						<input type="text" name="offer_price" class="form-control" value="{{ $product->offer_price }}">
					</div>

					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
					</div>

					<div class="form-group">
						<label for="status">Product Status</label>
						<select name="status" class="form-control">
							<option>Please Select Product Status</option>
							<option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
							<option value="0" {{ $product->status == 0 ? 'selected' : '' }}>In-active</option>
						</select>
					</div>

					<!-- is_featured start-->
					<div class="form-group">
						<label for="status">Featured Product</label>
						<select name="is_featured" class="form-control">
							<option>Please Select If Product Is Featured</option>
							<option value="1" {{ $product->is_featured == 1 ? 'selected' : '' }}>Yes</option>
							<option value="0" {{ $product->is_featured == 0 ? 'selected' : '' }}>No</option>
						</select>
					</div>
					<!-- is_featured end-->

					<!-- brand start-->
					<div class="form-group">
						<label for="brand_id">Select Brand</label>
						<select name="brand_id" class="form-control">
							<option>Please Select Product Brand</option>

							@foreach ( App\Models\Backend\Brand::orderBy('name', 'asc')->get() as $brand)
								<option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>		
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

								<option value="{{ $parent->id }}" {{ $product->category_id == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>	

								@foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('parent_id', $parent->id )->get() as $child)
										
									<option value="{{ $child->id }}" {{ $product->category_id == $child->id ? 'selected' : '' }}> - {{ $child->name }}</option>	

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
						<input type="submit" name="saveProduct" value="Save Changes" class="btn btn-primary">
					</div>

				</form>
				<!-- create new Product end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection