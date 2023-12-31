<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Profile;
use App\Models\User;
use App\Models\Gender;
use App\Models\Bank;
use App\Models\Level;
// use App\Models\Order_shop;
// use App\Models\Detail_Order_Shop;
use App\Models\Order_PetCare;
use App\Models\Detail_Order_PetCare;
use Illuminate\Http\Request;
use Auth;
use DB;

class PenggunaProfile extends Controller
{
    
    public function index()
    {
        if(Auth::user())
        {
            // $countCart         = DB::table('carts')->count();

            // $dtOdrShp          = Order_Shop::where('user_id', Auth::id())->get();
            // $siOdrShp          = Detail_Order_PetCare::where('user_id', Auth::id())->get();

            $dtOdrPtcr         = Order_PetCare::where('user_id', Auth::id())->orderBy('kode_resi', 'desc')->get();
            // $siOdrPtcr         = Detail_Order_PetCare::where('order_id')->get();

            // $dtPayStat      = Order_Shop::with('paystat_id');
            // $dtCart         = Cart::where('user_id', Auth::id())->get();
            // $dtCartItem     = Cart::With('product', 'user', 'bank')->get('id');
            // $dtPrdct        = Product::all();
            // $dtBank            = Bank::all();
            // $siUser            = User::findorfail($id);
            $dtUser            = User::where('id', Auth::id())->get();
            // $dtGender       = Gender::all();
            // $dtLevel        = Level::all();

            return view('Pengguna.Profile.Profile', compact('dtUser', 'dtOdrPtcr'));
        }
        else
        {
            return redirect('login');
        }
    }

    //--------------------------------------------------------------------------------------------------------------------------

    // public function indexHistoryDetailOrderShop($id)
    // {
    //     if(Auth::user())
    //     {
    //         $countCart         = DB::table('carts')->count();
    //         $dtUser            = User::all();

    //         // $siHtryOdrShp      = Order_Shop::with('bank','product')->findorfail($id);
    //         $siDtlHtryOdrShp   = Detail_Order_Shop::with('product')->findorfail($id);

    //         return view('Pengguna.Profile.History_Order_Shop', compact('countCart', 'dtUser', 'siHtryOdrShp', 'siDtlHtryOdrShp'));
    //     }
    //     else
    //     {
    //         return redirect('login');
    //     }
    // }

    //--------------------------------------------------------------------------------------------------------------------------

    public function indexHistoryDetailOrderPetCare($id)
    {
        if(Auth::user())
        {
            
            $siDtOdrPtcr        = Order_PetCare::findorfail($id);
            $siDtlHtryOdrPtcr   = Detail_Order_PetCare::findorfail($id);

            return view('Pengguna.Profile.History_Order_PetCare', compact('siDtOdrPtcr', 'siDtlHtryOdrPtcr'));
        }
        else
        {
            return redirect('login');
        }
    }

    //--------------------------------------------------------------------------------------------------------------------------
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
