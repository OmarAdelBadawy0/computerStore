<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static function getData(){
        return [
            ['id' => 1, 'name' => 'LG', 'origin' => 'Koria', 'price' => 1000],
            ['id' => 2, 'name' => 'HP', 'origin' => 'USA', 'price' => 2000],
            ['id' => 3, 'name' => 'Dell', 'origin' => 'China', 'price' => 3000],
            ['id' => 4, 'name' => 'Asus', 'origin' => 'Taiwan', 'price' => 4000],
            ['id' => 5, 'name' => 'Acer', 'origin' => 'Taiwan', 'price' => 5000],
        ];
    }

    public function index()
    {
        return view('computers/index', ['computers' => computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = new Computer();

        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect() -> route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
        $index = computer::findOrFail($computer);
        
            return view('computers/show', ['computer' => $index]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {
        return view('computers/edit', ['computer' => computer::findOrFail($computer)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $updated = computer::findOrFail($computer);

        $updated->name = strip_tags($request->input('computer-name'));
        $updated->origin = strip_tags($request->input('computer-origin'));
        $updated->price = strip_tags($request->input('computer-price'));

        $updated->save();

        return redirect() -> route('computers.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
        $deleted = computer::findOrFail($computer);

        $deleted->delete();

        return redirect() -> route('computers.index');
    }
}
