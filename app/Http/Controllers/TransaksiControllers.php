<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Transaksi;



class TransaksiControllers extends Controller
{
    public function Pilihpaket(){
        $paket = paket::all();
        return view('Paket.index', compact('Paket'));
    }

    public function Storepaket(Request $request){
        $request->validate(['Paket_Id' => 'required|exists:Paket,Paket_Id']);
        $request->session()->put('Transaksi.Paket_Id', $request->Paket_Id);
        return redirect()->route('Payment');
    }

    public function Pilihpayment(){
        $Bank = Bank::all();
        return view('Payment.index', compact('Payment'));
    }

    public function Storepayment(Request $request){
        $request->validate(['Id_Bank' => 'required|exist:Bank,Id_Bank']);
        $request->session()->put('Transaksi.Id_Bank', $request->Id_Bank);
        return redirect()->route('Kategori');
    }

    public function Pilihkategori(){
        $Kategory = Kategori::all();
        return view('Kategori.index', compact('Kategori'));
    }

    public function Storekategori(Request $request){
        $request->validate(['Kategori_Id' => 'required|exist:Kategori,Kategori_Id']);
        $request->session()->put('Transaksi.Kategori_Id', $request->Kategori_Id);
        return redirect()->route('Detail-invite');
    }

    public function Storedetail(Request $request){
        $validatedData = $request->validate([
            'Nama_Acara' =>'required|string|max:33',
            'Alamat' =>'required|string|max:64',
            'Url' =>'required|string|max:64',
            'Tanggal_Resepsi' =>'required|Date',
            'Lokasi' =>'required|string|max:64',
            'Jumlah_Tamu' =>'required|integer|min:1',
        ]);

        $request->session()->put('Transaksi.Detail', $validatedData);
        return redirect('template');
    }

    public function pilihtemplate(){
        $Subkategori = SubKategori::all();
        return view('Template.index', compact(Template));
    }

    public function Storetemplate(Request $request){
        $request->validate(['Subkategori_Id' => 'required|exist:Subkategori,Subkategori_Id']);
        $request->session()->put('Transaksi.Subkategori_Id', $request->Subkategori_Id);
        
        return Redirect(Upload);

    }

    public function Store(){
        $request->validate([
            'Gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $request->session()->put('Transaksi.Gambar', $request->Gambar);
    }


    public function complete(Request $request)
    {
        $transactionData = $request->session()->get('transaction');
        
        // Create transaction record
        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'package_id' => $transactionData['package_id'],
            'payment_method_id' => $transactionData['payment_method_id'],
            'template_id' => $transactionData['template_id'],
            'event_type' => $transactionData['event']['event_type'],
            'event_details' => $transactionData['event']['event_details'],
            'images' => json_encode($transactionData['images']),
            // Add other necessary fields
        ]);

        // Clear session data
        $request->session()->forget('transaction');

        return redirect()->route('transaction.success')->with('transaction_id', $transaction->id);
    }



}
