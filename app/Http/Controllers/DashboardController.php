<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $data['page_title'] = 'Dashboard';
    $data['active_menu'] = 'dashboard';
    $data['current_page'] = 'dashboard';

    return view('dashboard')->with('data',$data);
  }
}
