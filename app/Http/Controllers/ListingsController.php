<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Termwind\Components\Dd;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Show all listings
    public function index()
    {
        return view('listings.index', ['listings' => Listings::latest('updated_at')->filter(request(['tag', 'search']))->paginate(8)]); //latest() will order by create_at .
        // filter() will let us use scopeFilter in model. we sending tag as one of the element in the array
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Store Listing Data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'title' => 'required|min:6',
            'company' => 'required|min:6',
            'location' => 'required',
            'email' => 'required|unique:listings,email,except,id|email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); // logos is the name of a folder
        }

        $formFields['user_id'] = auth()->id();

        Listings::create($formFields);

        return redirect('/listings')->with('msg', 'You sucessfully updated a job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Show single listing
    public function show($id)
    {
        return view('listings.show', ['list' => Listings::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('listings.edit', ['list' => Listings::findOrFail($id)]);
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
        //make sure login user is owner
        if (Listings::findOrFail($id)->user_id != auth()->id()) {
            abort(403, 'unauthrize action');
        }
        // dd($request->all());
        $formFields = $request->validate([
            'title' => 'required|min:6',
            'company' => 'required|min:6',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); // logos is the name of a folder
        }

        Listings::where('id', $id)->update($formFields);
        // Listings::create($formFields);

        return redirect('/listings')->with('msg', 'You sucessfully posted a job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //make sure login user is owner
        if (Listings::findOrFail($id)->user_id != auth()->id()) {
            abort(403, 'unauthrize action');
        }
        Listings::destroy($id);

        return redirect('/listings')->with('msg', 'You sucessfully deleted a job/post with ID:' . $id);
    }

    public function manage()
    {

        return view('listings.manage', ['listings' => auth()->user()->listings]);
    }
}
