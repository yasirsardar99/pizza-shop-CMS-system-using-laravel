<?php

namespace App\Http\Controllers;
use App\Models\Pizzashop;
use Illuminate\Http\Request;
use App\Http\Requests\pizzaStoreRequest;
use App\Http\Requests\pizzaUpadteRequest;

class pizzecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_pizza = Pizzashop::paginate(4);
        return view('pizza.index', compact('all_pizza'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(pizzaStoreRequest $request)
    {
        $path= $request->image->store('public/pizza');


        Pizzashop::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "price"=>$request->price,
            "image"=> $path
        ]);

        return redirect()->route('pizza.index')->with('message','Pizza created successfully');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pizzaCol = Pizzashop::find($id);
        return view('pizza.edit', compact('pizzaCol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(pizzaUpadteRequest $request, string $id)
    {

        $pizza = pizzashop::find($id);

        if($request->has('image')){
            $path = $request->image->store('public/pizza');
        }
        else{
            $path = $pizza->image;
        }

         
            // $pizza->fill($request->input());
            $pizza->fill($request->input());
            $pizza->name = $request->name;
            $pizza->description = $request->description;
            $pizza->price = $request->price;
            $pizza->image = $path;
            $pizza->save();

            return redirect()->route('pizza.index')->with('message','Pizza updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pizza = pizzashop::findOrFail($id);

        if ($pizza) {
            $pizza->delete();
            return redirect()->route('pizza.index')->with('message', 'Entity deleted successfully');
        }

        return redirect()->route('pizza.index')->with('error', 'Pizza not found');
    }
}
