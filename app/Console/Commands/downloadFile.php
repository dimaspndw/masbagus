<?php

namespace App\Console\Commands;

use App\Models\Pengunjung;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use PDF;

class downloadFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sg:download-file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now()->format('Y-m-d');
        $indonesianformat = Carbon::now()->format('d-m-Y');
        $pengunjung = Pengunjung::where('created_at', 'LIKE', "%{$now}%")->get();
        $pdf = PDF::loadview('pengunjung', compact('pengunjung', 'indonesianformat'));
        $name = 'laporan-data-pengunjung' . $now . '.pdf';
        Storage::put('/public/data/' . $name, $pdf->output());
    }
}
