@extends('front_end.master.master')

@section('title')
    Shipping || Ecommerce
@endsection

@section('body')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="text-center text-success">{{Session::get('message')}}</h3>
					<h4 class="text-center text-dark">Give Detalis Information</h4>
				</div>
				<div class="card-body">
					<form action="{{route('new-shipping')}}" method="post" class="row login_form" id="register_form"   >
							@csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="{{$customer->name}}">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="{{$customer->email}}">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" value="" >
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" value="" >
              </div>
             
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-register w-100">Confirm</button>
							</div>
						</form>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>
@endsection