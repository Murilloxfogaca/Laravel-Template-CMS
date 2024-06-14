<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Offer;
use App\Models\Client;


use App\Http\Requests\Order\StoreOrder;
use App\Http\Requests\Order\UpdateOrder;

class OrderController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::with(['client', 'offer'])->get();
        $offer = Offer::get();
        $clients = Client::get();
        return view('venda.index', compact('orders', 'offer', 'clients'));
    }

    public function addOrder(StoreOrder $request)
    {   
        $validatedData = $request;
        
        $post = new Order;
        $post->qtd = $validatedData['qtd'];
        $post->client_id  = $validatedData['cliente'];
        $post->offer_id  = $validatedData['produto'];
        $post->status = "PREPARO";
        $post->finished = false;

        $post->save();
        
        return redirect('/vendas');
    }

    public function UpdateOrderId(UpdateOrder $request, $id)
    {   
        if($request->status === "ENVIADO") {
            $offer = Offer::findOrFail($request->id_offer);
            $offer->quantity = $offer->quantity - intVal($request->quantity_old);
            $offer->save();
        }

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
        
        return redirect('/vendas');
    }
}
