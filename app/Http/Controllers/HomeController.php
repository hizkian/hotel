<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Visitor;
use PDF;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::where('terisi', 0)->get();
        return view('pages/registrasi',['rooms'=>$rooms]);
    }

    public function regis(Request $req)
    {
      $this->validate($req, [
        'nama'   => 'required|max:50',
        'no_ktp'   => 'required|min:16|max:16|regex:/[0-9]*/',
        'alamat' => 'required',
        'no_telp'  => 'required|min:9|max:14|regex:/[0-9]*/',
        'room' => 'required',
        'checkin' => 'required',
        'checkout' => 'required',
      ]);

      for ($i=1; $i <= $req->count ; $i++) {

        $room = $req->room[$i];
        $checkin = $req->checkin[$i];
        $checkout = $req->checkout[$i];

        $visitor = new Visitor;
        $visitor->name = $req->nama;
        $visitor->no_ktp = $req->no_ktp;
        $visitor->no_telp = $req->no_telp;
        $visitor->alamat = $req->alamat;
        $visitor->room = $room;
        $visitor->checkin = $checkin;
        $visitor->checkout = $checkout;
        $visitor->save();

        Room::where('kamar', $room)->update(['terisi' => 1]);
      }

      return view('invoice', compact('req'));

      // dd($req);
    }

    public function checkOut(){
        $rooms = Room::where('terisi', 1)->get();
        return view('pages/checkout',['rooms' => $rooms]);
    }

    public function out(Request $req){
      Room::where('kamar', $req->button)->update(['terisi' => 0]);
      return redirect()->back()->with('message', "sukses cekout!");
    }

    public function pdf(){
        $pdf = PDF::loadView('pdf');
        return $pdf->download('test.pdf');
    }
}
