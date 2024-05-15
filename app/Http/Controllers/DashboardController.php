<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Display the user's dashboard.
   */
  public function create(Request $request): View
  {
    // validar tipo de usaurio para darle dashboards distintos

    if ($request->has('location'))
      $location = '%'. $request->input('location') .'%';
    else
      $location = '%%';

    return view('dashboard-client', [
      'contacts' => Contact::where('address', 'like', $location)->get()
    ]);
  }
}
