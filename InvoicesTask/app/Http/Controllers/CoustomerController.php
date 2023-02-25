<?php

namespace App\Http\Controllers;

use App\Models\coustomer;
use Illuminate\Http\Request;

class CoustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coustomers = coustomer::all();
        return view('coustomers.coustomers',compact('coustomers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coustomers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $coustomer = New coustomer();
        $coustomer->name = $request->name;
        $coustomer->title = $request->title;
        $coustomer->email = $request->email;
        $coustomer->save();
        return ('hello');
        */
        coustomer::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'email'=>$request->email,
        ]);
        
        return redirect()->route('coustomers.create')->with('success', 'User Add successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(coustomer $coustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $coustomer = coustomer::findorFail($id);
       return view('coustomers.edit',compact('coustomer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $coustomer = coustomer::findorFail($id);
        $coustomer->name = $request->name;
        $coustomer->title = $request->title;
        $coustomer->email = $request->email;
        $coustomer->save();
        return redirect()->route('coustomers.edit',$coustomer->id)->with('success', 'User Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        coustomer::findorFail($id)->delete();
        return redirect()->route('coustomers.index')->with('error', 'User Delete successfully.');
        
    }
}
