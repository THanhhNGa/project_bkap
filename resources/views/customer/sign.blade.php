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
		<!--=        Login         =-->
		<!--=========================-->



		<!--Login  area
	============================================= -->

		<section class="contact-area">
			<div class="container-fluid custom-container">
				<div class="section-heading pb-30">
					<h3>Vui lòng đăng nhập trước khi mua hàng</h3>
					<h3>Login <span>Account</span></h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
						<div class="contact-form login-form">
							<form action="{{route('login_cus')}}" method="POST">
								@csrf
								@if ($errors->any())
    								<div class="alert alert-danger">
        								<ul>
            								@foreach ($errors->all() as $error)
                								<li>{{ $error }}</li>
            								@endforeach
        								</ul>
    								</div>
								@endif
								<div class="row">
									<div class="col-xl-12">
										<input type="email" placeholder="Name or email" name="email" id="email">
									</div>
									<div class="col-xl-12">
										<input type="password" placeholder="Password*" name="password" id="password">
									</div>
									<div class="col-xl-12">
										<input type="submit" value="LOG IN">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.row end -->
			</div>
			<!-- /.container-fluid end -->
		</section>
		<!-- /.contact-area end -->

		<section class="login-now">
			<div class="container-fluid custom-container">
				<div class="col-12">
					<span>Dont have account</span>
					<a href="{{route('register')}}" class="btn-two">Create Account</a>
				</div>
				<!-- /.col-12 -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.login-now -->

@stop()