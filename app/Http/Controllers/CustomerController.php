<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Orderdetail;
use App\Payment;
use App\Shipping;
use Cart;
use Mail;
use Session;

class CustomerController extends Controller
{
    public function showloginpage(){

    	return view('front_end.pages.login');
    }

    public function showregisterpage(){

    	return view('front_end.pages.register');
    }
    

     public function customerSignUp(Request $request){

     	 $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);

        

        return redirect('/checkout/shipping')->with('message','Registered succesfully');

     }

     public function shippingForm(){
       
    	
        $customer = Customer::find(Session::get('customerId'));

    	return view('front_end.shipping.checkout-shipping',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;

        $shipping->save();

        Session::put('shippingId',$shipping->id);
        return redirect('/checkout/payment');
    }

    public function paymentForm(){
        return view('front_end.payment.payment');
    }

    public function newOrder(Request $request){

    	$paymentType = $request->payment_type;
        if($paymentType == 'Cash'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();
            
             $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderdetails = new Orderdetail();
                $orderdetails->order_id = $order->id;
                $orderdetails->product_id = $cartProduct->id;
                $orderdetails->product_name = $cartProduct->name;
                $orderdetails->product_price = $cartProduct->price;
                $orderdetails->product_quantity = $cartProduct->qty;
                $orderdetails->save();
            }
             Cart::destroy();

           return redirect('/confermation');
        }
        if($paymentType == 'Bkash'){

        }

        
    }

    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
           

            return redirect('/checkout/shipping');
        } else {
            return redirect('/userlogin')->with('message','Incorrect Password');
        }
    }


    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');
    }


    //new customer

     public function newCustomerLogin(){
        return view('front_end.customer.customer-login');
    }

    public function newcustomerSignUp(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
       

        return redirect('/');
    }

    public function newCustomerLoginCheck(Request $request){
        $customer = Customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
           

            return redirect('/');
        } else {
            return redirect('/newcustomer/log-in')->with('message','Incorrect Password');
        }
    }

   
}
