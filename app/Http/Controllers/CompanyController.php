<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Game;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $game = Game::all();
        return view('companies.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'genre'=>'required'
        ]);

        $company = new Company([
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'genre' => $request->get('genre'),
           'city' => $request->get('city'),
           'country' => $request->get('country')
        ]);
        $company->save();
        return redirect('/companies')->with('success', 'Company saved!');
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
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'genre'=>'required'
        ]);

        $company = Company::find($id);
        $company->name =  $request->get('name');
        $company->email = $request->get('email');
        $company->genre = $request->get('genre');
        $company->city = $request->get('city');
        $company->country = $request->get('country');
        $company->save();

        return redirect('/companies')->with('success', 'Company updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/companies')->with('success', 'company deleted!');
    
    }
}
