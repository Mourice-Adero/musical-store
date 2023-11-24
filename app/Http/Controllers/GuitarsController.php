<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

class GuitarsController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'Stratocaster', 'brand' => 'Fender'],
            ['id' => 2, 'name' => 'Les Paul', 'brand' => 'Gibson'],
            ['id' => 3, 'name' => 'Telecaster', 'brand' => 'Fender'],
            ['id' => 4, 'name' => 'SG', 'brand' => 'Gibson'],
            ['id' => 5, 'name' => 'Explorer', 'brand' => 'Gibson'],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guitars.index', [
            'guitars' => Guitar::all(),
            'userInput' => "<script>alert('Hello World')</script>"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuitarFormRequest $request)
    {
        $data = $request->validated();

        //POST
        Guitar::create($data);
        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guitar $guitar)
    {
        //GET
        return view('guitars.show', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar)
    {
        //GET
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        //POST
        $data = $request->validated();
        $guitar = update($data);
        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
