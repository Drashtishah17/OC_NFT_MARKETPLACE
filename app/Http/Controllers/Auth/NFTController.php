<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NFT;

class NFTController extends Controller
{
    public function index()
    {
        $nfts = NFT::all();
        // $nfts = DB::table('nft')->get();
        return view('layouts.NFT.index',compact('nfts'));
    }

    public function viewnfts($nft_id)
    {
        $nfts = NFT::where(['nft_id'=>$nft_id])->first();
        // dd($nfts);
        // exit;
        return view('layouts.NFT.view',compact('nfts'));
    }

    public function delete(Request $request, $nft_id)
    {
        $nfts = NFT::where(['nft_id'=>$nft_id])->first();
        // $users->delete();
        $nfts = NFT::where(['nft_id'=>$nft_id])->delete();
        return redirect('/admin/nft')->with('status','Your NFT is Deleted');
    }
}
