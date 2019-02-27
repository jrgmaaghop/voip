<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offices;

class DirectoryController extends Controller
{
    //

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
      $data['page_title'] = 'Directory';
      $data['active_menu'] = 'directory';
      $data['current_page'] = 'directory';
      $data['offices'] = $this->getOffices();

      return view('directory/index')->with('data',$data);
    }


    private function getOffices(){
      return Offices::orderBy('id','ASC')->get();
    }

    public function create(){
      $data['page_title'] = 'Create';
      $data['active_menu'] = 'create-directory';
      $data['current_page'] = 'create-directory';


      return view('directory.create')->with('data',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'office' => 'required',
            'desc' => 'required',
            'local' => 'required',
        ]);
        $input = $request->all();

        $d = new Offices;
        $d->timestamps = false;
        $d->office = $request->office;
        $d->desc = $request->desc;
        $d->local = $request->local;
        $d->save();

        return redirect()->route('home')
                        ->with('success','User created successfully');
    }


    public function edit($id){
      $d = Offices::find($id);
      // echo "<pre>";var_dump($d);exit();
      return view('directory.edit')->with('data',$d);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'office' => 'required',
          'desc' => 'required',
          'local' => 'required',
        ]);

        $input = $request->all();

        $user = Offices::find($id);
        $user->update($input);

        return redirect()->route('home')
                        ->with('success','User updated successfully');
    }


    public function destroy($id)
    {
        Offices::find($id)->delete();
        return redirect()->route('home')
                        ->with('success','User deleted successfully');
    }


}
