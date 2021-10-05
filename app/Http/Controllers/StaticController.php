<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;

class StaticController extends Controller
{

  public function home() {
    $bestViewVoyages = Voyage::where('active', 1)->orderBy('topPlace', 'asc')->limit(4)->get();
    return view('home', ['bestViewVoyages' => $bestViewVoyages]);
  }

  public function trips() {
    return view('voyages', ['voyages' => Voyage::all()]);
  }

  public function trip($id) {

    return view('editVoyage', ['voyage' => Voyage::find($id)]);
  }

}
