<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Farmer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

use App\Http\Requests\Offer\StoreOffer;
use App\Http\Requests\Offer\UpdateOffer;

class OfferController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index(){
        return view('produtos.index');
    }

    public function offerSingle($id)
    {
        
        $offer = Offer::where('id',$id)->firstOrFail();
        $farmer = Farmer::where('id',$offer->farmer_id)->first();
        return view('produtos.detalhe', compact('offer', 'farmer'));
    }

    public function stock()
    {
        $offers = Offer::where('stock',true)->get();
        return view('produtos.estoque', compact('offers'));
    }
    
    public function offerAdd($id)
    {
        $farmer = Farmer::where('id',$id)->firstOrFail();
        return view('produtos.item', compact('farmer'));
    }
    
    public function offerEdit($id)
    {
        
        $offer = Offer::where('id',$id)->firstOrFail();
        $farmer = Farmer::where('id',$offer->farmer_id)->first();
        $farmerAll = Farmer::get();
        return view('produtos.editar', compact('offer', 'farmer', 'farmerAll'));
    }
    
    public function list()
    {
        $offers = Offer::where('quantity', '>', 0)->get();
        return view('alimentos.index', compact('offers'));
    }

    public function addOffer(StoreOffer $request)
    {   
        $validatedData = $request;
        
        $post = new Offer;
        $post->name = $validatedData['name'];
        $post->unit_of_measurement = $validatedData['unit_of_measurement'];
        $post->quantity = $validatedData['quantity'];
        $post->value = $validatedData['value'] ? (float)str_replace(',', '.', str_replace('R$ ', '', $validatedData['value'])) : 0;
        $post->cost = $validatedData['cost'] ? (float)str_replace(',', '.', str_replace('R$ ', '',  $validatedData['cost'])) : 0;
        $post->type = $validatedData['type'];
        $post->farmer_id = $validatedData['farmer_id'];
        $post->save();
        
        return redirect('/produtos/estoque');
    }

    public function editOffer(UpdateOffer $request, $id){
        $all = $request->all();
        $all['value'] = (float)str_replace(',', '.', str_replace('R$ ', '', $all['value']));
        $all['cost'] =  (float)str_replace(',', '.', str_replace('R$ ', '',  $all['cost']));
        $offer = Offer::findOrFail($id);
        $offer->fill($all)->save();
        return redirect('/produtos/alimento/detalhes/'.$id);
    }

    public function update(UpdateOffer $request, $id)
    {
        $all = $request->all();
        
        try {
            $offer = Offer::find($id);
            $offer->fill($request->validated())->save();
            return $offer;

        } catch(\Exception $exception) {
           throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }
}
