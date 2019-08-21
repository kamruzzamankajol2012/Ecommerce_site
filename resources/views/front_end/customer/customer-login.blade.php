@extends('front_end.master.master')
@section('title')
    New Customer|| Ecommerce
@endsection
@section('body')
    <div class="section-top-border">
        <div class="row">
            <div class="offset-1 col-lg-7s col-md-5">
                <h3 class="mb-30 title_color">If you are a new user <strong>Register Here</strong></h3>
                {{Form::open(['route'=>'new-customer-reg','method'=>'POST'])}}
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'"
                           required class="single-input form-control">
                </div>
               
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input form-control">
                </div>
               
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input form-control">
                </div>
              
                <div class="form-group">
                    <input type="submit" name="btn" value="Register" class="btn btn-primary ">
                </div>
                {{Form::close()}}
            </div>
            <div class="col-lg-5s col-md-5">
                <h3 class="mb-30 title_color">If you are an existing user <strong>Login Here</strong></h3>
                <h4 class="text-danger">{{Session::get('message')}}</h4>

                {{Form::open(['route'=>'new-customer-login-form','method'=>'POST'])}}

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           class="single-input form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-primary">
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection