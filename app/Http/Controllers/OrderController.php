<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Orderdetail;
use App\Payment;
use App\Order;
use App\Shipping;
use PDF;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
     public function manageOrder(){
     	$orders = DB::table('orders')
                    ->join('customers','orders.customer_id','=','customers.id')
                    ->join('payments','orders.id','=','payments.order_id')
                    ->select('orders.*','customers.name','payments.payment_type','payments.payment_status')
                    ->get();
        return view('admin.order.manage-order',['orders'=>$orders]);
    }

    public function viewOrderDetails($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderdetails = Orderdetail::where('order_id',$order->id)->get();
        return view('admin.order.view-order',[
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'orderdetails' => $orderdetails
        ]);
    }

    public function viewOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderdetails = Orderdetail::where('order_id',$order->id)->get();
        return view('admin.order.order-invoice',[
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'orderdetails' => $orderdetails
        ]);
    }

    public function downloadOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderdetails = Orderdetail::where('order_id',$order->id)->get();
        $pdf = PDF::loadView('admin.order.download-ivoice',[
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'orderdetails' => $orderdetails
        ]);
        return $pdf->stream('invoice.pdf');
    }
}
