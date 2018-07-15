<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Penjualan;

class hapuslaporanbulanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laporan:hapus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hapus Data Laporan Tiap Tanggal 1 Awal Bulan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $penjualan = Penjualan::truncate();
        $this->info('Semua Laporan Penjualan telah dihapus');
    }
}
