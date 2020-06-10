
<div class="departments departments--opened departments--fixed" data-departments-fixed-by=".block-slideshow">
	<div class="departments__body">
		<div class="departments__links-wrapper">
			<ul class="departments__links">
				@foreach (App\Models\Backend\Category::where('parent_id', 0)->get() as $parent)					
						
						<li class="departments__item departments__item--menu">
							<a href="#">
								{{ $parent->name }} <svg class="departments__link-arrow" width="6px" height="9px"><use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use></svg>
							</a>
							@php
								$childs = App\Models\Backend\Category::where('parent_id', $parent->id )->get();
							@endphp
							@if ( isset( $childs) && $childs->count() > 0 )
								
								<div class="departments__menu">
									<!-- .menu -->
									<ul class="menu menu--layout--classic">
										@foreach ($childs as $child)
											<li><a href="#">{{ $child->name }}</a></li>
										@endforeach
										
									</ul>
									<!-- .menu / end -->
								</div>
							@endif
						</li>

				@endforeach
				
			</ul>
		</div>
	</div>
	<button class="departments__button">
		<svg class="departments__button-icon" width="18px" height="14px"><use xlink:href="images/sprite.svg#menu-18x14"></use></svg> Shop By Category
		<svg class="departments__button-arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
	</button>
</div>