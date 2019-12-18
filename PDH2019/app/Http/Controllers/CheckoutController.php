<?php

namespace App\Http\Controllers;
use App\Cart;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ordenes = Cart::where("user_id", Auth::user()->id)->where("status", 1)->get()->groupBy('order_number');
        // dd(compact('ordenes'));
        return view('compras', compact('ordenes'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {

     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
       $orderNumber = rand(10000,90000);
       $carrito = Cart::where("user_id", Auth::user()->id)->where("status", 0)->update(['status'=>1, 'order_number' => $orderNumber, 'total' => $req->total]);

      //  // dd($orderNumber);
      //  foreach ($carrito as $key => $value) {
      //    $value->status = 1;
      //    $value->order_number = $orderNumber;
      //
      //  }
      // $carrito ->save();

       return redirect('compras');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
