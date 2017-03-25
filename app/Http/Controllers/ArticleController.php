<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use View;


class ArticleController extends Controller
{
    

    public function show (){
 $articles = Article::all();
   return view('article',['article'=>$articles]);
   
}

public function ajouter(Request $request){
		$articles= new Article;
		$articles->title = $request->title;
		$articles->text = $request->text;
		// $articles->stock = $request->stock;
  //         return $produit;
		$articles->save();
		return back();
	}

	public function formEdit($id){

		$articles=Article::find($id);
		return view('formModifArticle',['articles'=>$articles]);

	}

		public function editer($id,Request $request){
		$articles= Article::find($id);
		$articles->title = $request->title;
		$articles->text= $request->text;
		$articles->save();
		return redirect('/show');

	}

	public function Supprimer($id){
		$articles = Article::find($id);
		


		$articles->delete();
		

		return back();
		
	

	}



 	
 
   

}

