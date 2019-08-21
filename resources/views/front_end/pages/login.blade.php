@extends('front_end.master.master')

@section('title')
    Login || Ecommerce
@endsection

@section('body')
 <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Login / Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="{{route('user_register')}}">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						 <h4 class="text-danger">{{Session::get('message')}}</h4>
						<h3>Log in to enter</h3>
						{{Form::open(['route'=>'customer-login','method'=>'POST','class'=>'row login_form'])}}

                    <div class="col-md-12 form-group">
                        <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                               required class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                               class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="submit" name="btn" value="Login" class="button button-register w-100">
                    </div>
                {{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection