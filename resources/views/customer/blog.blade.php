@extends('customer.master')
@section('main')
<section class="blog-wrapper">
			<div class="container container-two">
				<div class="section-heading" style="margin-top: 10em">
					<h3>Blog<span>Area</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12 ">
						<div class="pro-tab-filter">
							
							<div class="grid row">
								<!-- single product -->
								@foreach($blog as $value)
								<div class=" grid-item two col-sm-6 col-md-6  col-lg-4 col-xl-4">
									<article class="sin-blog">
										<figure class="blog-img">
											<a href="#"><img src="{{$value->image}}" alt=""></a>
										</figure>
										<div class="blog-content">
											<div class="blog-meta">
												<a href="#">{{$value->created_at}}</a>
											</div>
											<h5><a class="title" href="#">{{$value->name}} </a></h5>
											<div class="blog-details">
												<a href="{{route('detail_blog',['slug'=>$value->slug])}}">Read more</a>
											</div>
										</div>
									</article>
								</div>
								@endforeach
								<!-- single product -->
								
							</div>
						</div>
					</div>
				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
@stop()