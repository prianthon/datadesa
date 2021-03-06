<?php

use Illuminate\Database\Seeder;

class StatusKependudukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('status_kependudukans')->delete();
      // buat data berupa array untuk diinput ke database
      $status_kependudukans = array(
        array('id'=>1, 'status_kependudukan'=>'Penduduk Asli/Tetap'),
        array('id'=>2, 'status_kependudukan'=>'Pendatang'),
        array('id'=>3, 'status_kependudukan'=>'Pindah'),
        array('id'=>4, 'status_kependudukan'=>'Meninggal'),
      );
      // masukkan data ke database
      DB::table('status_kependudukans')->insert($status_kependudukans);
    }
}
