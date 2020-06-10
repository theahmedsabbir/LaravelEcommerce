@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Manage Products</h4>
			<p class="mg-b-0">Edit All Product's Informations From Here</p>
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

				<!-- Product Table Start -->
              	<table class="table" id="dataTable">
              		<thead class="thead-dark">
              			<tr>
              				<th scope="col">#Sl</th>
              				<th scope="col">Images</th>
              				<th scope="col">Brand</th>
              				<th scope="col">Category</th>
              				<th scope="col">Title</th>
              				<th scope="col">Slug</th>
              				<th scope="col">Regular Price</th>
              				<th scope="col">Offer Price</th>
              				<th scope="col">Quantity</th>
              				<th scope="col">Status</th>
              				<th scope="col">Action</th>
              			</tr>
              		</thead>
              		<tbody>

              			@foreach( $products as $product )

	              			<tr>
	              				<th scope="row">{{ $loop->index+1 }}</th>	
	              				<td>
	              					@php $i = 1; @endphp

									@foreach ($product->images->sortBy('id') as $image)

										@if ($i>0)
											<img src="{{ asset('images/products/'. $image->image ) }}" alt="{{ $product->title }}" width="40">
										@endif
										@php $i--; @endphp

									@endforeach
	              				</td>
	              				<td>{{ $product->brand->name }}</td>
	              				<td>{{ $product->category->name }}</td>
	              				<td>{{ $product->title }}</td>
	              				<td>{{ $product->slug }}</td>
	              				<td>{{ $product->regular_price }}</td>
	              				<td>{{ $product->offer_price }}</td>
	              				<td>{{ $product->quantity }}</td>
	              				<td>{{ $product->status }}</td>
	              				<td>
	              					<div class="btn-group">
	              						<a href="{{ route('editProduct', $product->id ) }}" class="btn btn-success btn-sm">Update</a>
	              						<button type="button" data-toggle="modal" data-target="#del{{$product->id}}" class="btn btn-danger btn-sm">Delete</button>
	              					</div>


									<!-- Delete modal starts -->
									<div class="modal fade" id="del{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        Are you sure you want to delete this product? 
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
									        <form action="{{ route('deleteProduct', $product->id) }}" method="POST" class="form-inline">
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
              	<!-- Product Table end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection