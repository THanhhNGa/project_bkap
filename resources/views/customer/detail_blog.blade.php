@extends('customer.master')
@section('main')
	<section class="breadcrumb-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bc-inner">
							<p><a href="#">Home  |</a> Shop</p>
						</div>
					</div>
					<!-- /.col-xl-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>

		<!--=========================-->
		<!--=        Product Filter          =-->
		<!--=========================-->


		<section class="main-product pad-45">
			<div class="container">
				<div class="row">
					<!-- single product -->
					<div class="col-lg-8 col-xl-8">
						<article class="sin-blog single-page">
							<figure class="blog-img">
								<img src="{{$qr->image}}" alt="" width="100%">
							</figure>
							<div class="blog-content">
								<div class="blog-meta">
									<a href="#">15 May</a>
								</div>
								<h5>{{$qr->name}}</h5>
								<div class="blog-details">
									{{$qr->content}}

									<p>by <a href="#">Mike Jimi</a></p>

									<div class="social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</article>

					</div>

					<div class="col-lg-4 col-xl-4">
						<div class="blog-sidebar">

							<div class="blog-widget">
								<h4 class="widget-title">Bài viết mới nhất</h4>
								@foreach($blog as $value)
								<div class="widget-post">
									<div class="widget-post-img">
										<a href="#"><img src="{{$value->image}}" width="150px" alt=""></a>
									</div>
									<div class="widget-post-content" style="width: 200px">
										<h6 class="wid-post-title">
											<a href="{{route('detail_blog',['slug'=>$value->slug])}}">{{$value->name}}</a></h6>
										<p>{{$value->updated_at}}</p>
									</div>
								</div>
								@endforeach
								
							</div>
							<!-- /.blog-widget-->

							<!-- <div class="blog-widget">
								<h4 class="widget-title">Categories</h4>
								<ul class="wid-category">
									<li><a href="#">animals</a></li>
									<li><a href="#">landscape</a></li>
									<li><a href="#">fashion</a></li>
									<li><a href="#">men dress</a></li>
									<li><a href="#">shoes</a></li>
								</ul>
							</div> -->
							<!-- /.blog-widget-->

							
						</div>
					</div>
					<!-- /.col-xl-3 -->

				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
@stop()