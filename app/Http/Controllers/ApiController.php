<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
	{
		$resep = Resep::all();
		//$data=[
		//	'resep'=>$resep
		//];
		return response()->json($resep);
	}
	
	public function show($id)
	{
		//$resep = DB::select('select resep.id_resep, title, ingredients, steps, loves
		//from resep, model where resep.id_resep = model.id_resep limit 1');
		$resep = Resep::find($id);

		return response()->json($resep);
	}
	
	public function store(Request $request)
    {
		$resep = new Resep;
		$resep->id = $request->id;
		$resep->title = $request->title;
		$resep->ingredients = $request->ingredients;
		$resep->steps = $request->steps;
		$resep->loves = $request->loves;
		$resep->url = $request->url;
		
        $post = $resep->save();

        return response()->json(['status => sukses memasukkan data']);
    }
	
	public function update(Request $request, $id)
    {
        $resep = Resep::find($id);
		//$resep->id = $request->id;
		$resep->title = $request->title;
		$resep->ingredients = $request->ingredients;
		$resep->steps = $request->steps;
		$resep->loves = $request->loves;
		$resep->url = $request->url;
		
        $post = $resep->save();

        return response()->json(['status => sukses update data']);
    }
	
	public function delete(Resep $resep)
    {
        $resep->delete();

        return response()->json(['status => sukses hapus data']);
    }
}
