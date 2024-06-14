<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

use App\Http\Requests\Client\StoreClient;
use App\Http\Requests\Client\UpdateClient;

class ClientController extends Controller
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

    public function index()
    {
        $clientes = Client::all();
        return view('clientes.index', compact('clientes'));
    }

    public function single($id)
    {
        $cliente = Client::where('id',$id)->first();   
        return view('clientes.detalhes', compact('cliente'));
    }


    public function get($id)
    {
        if(is_null(Client::where('id',$id)->first())){
            return response()->json([
                'message' => 'Client not found!',
            ], 404);
        }
    
        $Client = Client::where('id',$id)->get();
        return response()->json($client);
    }

    public function list()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    
    public function addClient(StoreClient $request)
    {   
        $validatedData = $request;

        $post = new Client;
        $post->name = $validatedData['name'];
        $post->cnpj = $validatedData['cnpj'];
        $post->address = $validatedData['address'];
        $post->form_of_payment = $validatedData['form_of_payment'];
        $post->box = $validatedData['box'];
        $post->save();
        
        return redirect('clientes');
    }

    public function editClient(UpdateClient $request, $id){
        $all = $request->all();
        $client = Client::findOrFail($id);
        $client->fill($all)->save();
        return redirect('clientes');
    }

}
