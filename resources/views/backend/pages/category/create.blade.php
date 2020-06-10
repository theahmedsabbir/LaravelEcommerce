@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline"></i>
		<div>
			<h4>Create Category</h4>
			<p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
		</div>
	</div>

	<div class="br-pagebody">
        <div class="br-section-wrapper">
        	@include('backend.include.notification')

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
				
				<!-- create new Category start -->
				<form action="{{route('storeCategory')}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<label for="name">Category Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" rows="3" class="form-control"></textarea>
					</div>
					
					<div class="form-group">
						<label for="image">Category Thumbnail</label>
						<input type="file" name="image" class="form-control-file">
					</div>
					
					<div class="form-group">
						<label for="parent_id">Parent Category</label>
						<select name="parent_id" id="" class="form-control">
							<option value="0">Select A Primary Category (optional)</option>
							
							@foreach($parent_categories as $parent_category)
								<option value="{{$parent_category->id}}">{{$parent_category->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<input type="submit" name="addCategory" value="Add Category" class="btn btn-primary">
					</div>

				</form>
				<!-- create new Category end -->

              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
    </div>

@endsection