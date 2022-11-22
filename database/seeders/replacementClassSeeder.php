<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\replacmentClass;
use Faker\Factory as Faker;

class replacementClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');    
 
        for($i=1;$i<=50;$i++){
        $rpc = new replacment_classes();
        $rpc->created_at = $faker->timestamp;
        $rpc->updated_at = $faker->timestamp;
        $rpc->nama_lengkap = $faker->name;
        $rpc->nama_mata_kuliah = 'Pemograman Aplikasi Bisnis';
        $rpc->kelas = '19IS2';
        $rpc->jadwal_tanggal_yang_akan_di_replace = $faker->date;
        $rpc->jadwal_jam_kuliah = $faker->datetime;
        $rpc->tanggal_replacement = $faker->date;
        $rpc->jam_replacement = $faker->datetime;
        $rpc->alasan_melakukan_replacement_class = 'Ada Acara Keluarga';
        $rpc->save();
        }
    }
}