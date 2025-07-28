<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Resep;

class EasycookController extends Controller
{
    public function index()
	{
		return view('home');//,compact('posts'));
	}
	
	public function search(Request $request)
	{
		$search = $request->search;
		//$data = DB::table('resep')
		//->crossJoinSub(function ($query) {
		//	$query->from('model')
		//	->select('id_resep', ''.$search.'');
		//},'models')
		//->select('resep.id_resep', 'resep.title', 'resep.ingredients', 'resep.loves')
		//->where('resep.id_resep','=',DB::raw('models.id_resep'))
		//->orderBy('models.'.$search.'','desc')
		//->limit(3)->get();
		
		$data = DB::select('SELECT resep.id,resep.title,resep.steps,
		resep.ingredients, resep.loves FROM resep, 
		( SELECT id,'.$search.' FROM model ) AS models 
		WHERE resep.id = models.id AND models.'.$search.' > 0
		ORDER BY `models`.`'.$search.'` DESC limit 10');
		
		//$data = Resep::where('title','like','%'.$search.'%')
		//	->limit(3)->get();
		
		return view('search',compact('data'));
	}
	
	
	
}
