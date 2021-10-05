<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use DateTime;

class AdminVoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.voyages', ['voyages' => Voyage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.addVoyage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Voyage::create([
          'title' => $request->title,
          'country' => $request->country,
          'city' => $request->city,
          'description' => $request->description,
          'topPlace' => $request->topPlace,
          'picture' => $request->picture,
          'active' => $request->active,
          'note' => 0,
          'views' => 0,
        ]);
      return redirect('admin/voyages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
      return view('trip', ['voyage' => Voyage::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
      return view('admin.editVoyage', ['voyage' => Voyage::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $voyage = voyage::find($id);

        $voyage->updated_at = new DateTime("now");
        $voyage->title = $request->title;
        $voyage->country = $request->country;
        $voyage->city = $request->city;
        $voyage->description = $request->description;
        $voyage->picture = $request->picture;
        $voyage->active = $request->active;

        $voyage->save();

      return redirect('admin/voyages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
      Voyage::destroy($id);
      return redirect('admin/voyages');
    }
}
