<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class PengunjungController extends Controller
{
    public function add(Request $request)
    {
        $pengunjung = new Pengunjung();
        $pengunjung->gender = $request->gender;
        $pengunjung->usia = $request->usia;
        $pengunjung->disabilitas = $request->disabilitas;
        $pengunjung->pesan = $request->pesan;
        $pengunjung->status_vaksin = $request->status_vaksin;
        $pengunjung->save();
        return redirect()->back()->with('flash', 'Terima kasih');
    }

    public function cetakPDF()
    {
    }

    public function refresh()
    {
        $now = Carbon::now()->format('Y-m-d');
        $indonesianformat = Carbon::now()->format('d-m-Y');
        $pengunjung = Pengunjung::where('created_at', 'LIKE', "%{$now}%")->get();
        $pdf = PDF::loadview('pengunjung', compact('pengunjung', 'indonesianformat'));
        $name = 'laporan-data-pengunjung' . $now . '.pdf';
        Storage::put('/public/data/' . $name, $pdf->output());
    }
}
