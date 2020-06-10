@if ( Session::has('Success') )
	<div class="alert hideIt alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	<strong>Success!</strong> {{ Session::get('Success')}}.
	</div>
@endif

@if ( Session::has('Error') )
	<div class="alert hideIt alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	<strong>Error!</strong> {{ Session::get('Error')}}.
	</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        
        @foreach ($errors->all() as $error)
            <p><strong>Error!</strong> {{ $error }}</p>
        @endforeach
        
    </div>
@endif

