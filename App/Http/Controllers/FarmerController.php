<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;
use App\Models\Offer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

use App\Http\Requests\Farmer\StoreFarmer;
use App\Http\Requests\Farmer\UpdateFarmer;

class FarmerController extends Controller
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
        $farmers = Farmer::all();
        return view('agricultores.index', compact('farmers'));
    }

    public function show($id)
    {
        $farmer = Farmer::where('id',$id)->first();
        $offers = Offer::where('farmer_id',$id)->get();
        
        return view('agricultores.detalhes', compact('farmer', 'offers'));
    }

    public function get($id)
    {
        if(is_null(Farmer::where('id',$id)->first())){
            return response()->json([
                'message' => 'Farmer not found!',
            ], 404);
        }
    
        $farmer = Farmer::where('id',$id)->get();
        return response()->json($farmer);
    }

    public function list()
    {
        $farmers = Farmer::all();
        return response()->json($farmers);
    }

    public function store(StoreFarmer $request){

    $validatedData = $request->validate([
        'name' => 'required|string|between:2,100',
        'surname' => 'required|string|between:2,100',
        'address' => 'required|string',
        'razao_social' => 'required|string',
        'document' => 'required|string',
    ]);

    $post = new Farmer;
    $post->name = $validatedData['name'];
    $post->surname = $validatedData['surname'];
    $post->address = $validatedData['address'];
    $post->razao_social = $validatedData['razao_social'];
    $post->document = $validatedData['document'];
    $post->save();

    return redirect('/agricultores/');
}


    public function update(UpdateFarmer $request, $id)
    {
        $all = $request->all();
        $farmer = Farmer::findOrFail($id);
        $farmer->fill($request->validated())->save();
        return redirect('/agricultores/');
    }
}
