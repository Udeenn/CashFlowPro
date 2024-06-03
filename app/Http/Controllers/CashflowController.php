<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Cashflow;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class CashflowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = M_Cashflow::all();
        return view('data', ['data' => $data]);
    }

    public function json(){
        return Datatables::of(M_Cashflow::limit(10))->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tipe' => 'required|string',
            'nominal' => 'required|numeric',
            'keterangan' => 'nullable|string'
        ]);

        // Membuat record baru di database
        $cashflow = new M_Cashflow($validatedData);
        $cashflow->save();

        // Redirect atau response
        return redirect('/data')->with('success', 'Data berhasil disimpan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $data = M_Cashflow::find($id);
        return response()->json(['data' => $data]);
    }

    public function edit($id){
        $data = M_Cashflow::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $data = M_Cashflow::find($id);
        $data->tanggal = $request->tanggal;
        $data->tipe = $request->tipe;
        $data->nominal = $request->nominal;
        $data->keterangan = $request->keterangan;
        $data->save();
        return response()->json(['success' => 'Data updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = M_Cashflow::where('id', $id)->first();
        $data->delete();
        return redirect('/data')->with('success', 'Data berhasil dihapus.');
    }

    public function downloadpdf(){
        $data = M_Cashflow::limit(10)->get();
        $pdf = PDF::loadView('cash-pdf', ['data' => $data]);
        $pdf->setPaper('A4', 'potrait');
        return $pdf->download('cashflowPDF.pdf');
    }

    public function filter(Request $request){
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $data = M_Cashflow::whereBetween('tanggal', [$start_date, $end_date])->get();
        return view('data', ['data' => $data]);
    }
}
