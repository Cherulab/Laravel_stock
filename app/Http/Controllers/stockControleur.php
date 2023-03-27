<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\StockProduit;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class stockControleur extends Controller
{
    public function stock_vendeur()
    {
        return view('stock', []);
    }
    public function stock_patissier(Request $request)
    {
        return view('stock_patissier', ['data' => StockProduit::all()]);
    }
    public function profil(Request $request){
        return view('profil', ['user' => User::all()]);
    }
    public function addcommande(Request $request)
    {
        $addcommande = new commande;
        $addcommande->client_name = $request->client_name;
        $addcommande->client_phone = $request->client_phone;
        $addcommande->reservation_date = $request->reservation_date;
        $addcommande->reservation_time = $request->reservation_time;
        $addcommande->note = $request->note;
        $addcommande->save();
        return redirect()->back()->with('succes');
    }
    public function viewfiche(Request $request)
    {
        return view('fiche_commande', ['fiche' => commande::orderBy('created_at', 'desc')->get()]);
    }
    // Delete product
    public function deletedproduct(Request $request, $id)
    {
        $data = StockProduit::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('succes deleted');
    }
    // Ajout product
    public function addproduct(Request $request)
    {
        $addproduct = new StockProduit;
        $addproduct->num_produit = $request->num_produit;
        $addproduct->img = $request->img;
        $addproduct->nom_produit = $request->nom_produit;
        $addproduct->qts = $request->qts;
        $addproduct->save();
        return redirect()->back()->with('succes');
    }
    // Detail product
    public function viewproduct($id)
    {
        $product = StockProduit::findOrFail($id);
        return view('view_product', compact('product'));  
    }
    // UPDATE PRODUCT
    public function updateproduct(Request $request, $id)
    {
        $data = StockProduit::findOrfail($id);
        $data->num_produit = $request->num_produit;
        $data->img = $request->img;
        $data->nom_produit = $request->nom_produit;
        $data->qts = $request->qts;
        $data->save();
        return redirect('/stock_patissier');
    }
    // ALL Product page home
    public function product(Request $request)
    {
        return view('welcome', ['data' => StockProduit::all()]);
    }
}

