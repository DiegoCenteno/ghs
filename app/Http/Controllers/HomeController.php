<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tablea;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('home');
    }
    public function geadmin()
    {
        $data['table'] = Tablea::where('status', 1)->get();
        //return response()->json($data['table']);
        return view('geadmin', $data);
    }
    public function postinfo(Request $request)
    {
        $aa = new Tablea;
        $aa->title = $request->title;
        $aa->description = $request->descripcion;
        $aa->status = 1;
        $aa->save();
        return redirect()->back()->with('message', 'ERROR EN LA ACTUALIZACIÓN');
    }
    public function delete($id)
    {
        $aa = Tablea::find($id);
        if (!empty($aa)){
            $aa->status = 0;
            $aa->save();
        }
        return redirect()->back()->with('message', 'ERROR EN LA ACTUALIZACIÓN');
    }
}
