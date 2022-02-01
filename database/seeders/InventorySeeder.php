<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 50 ; $i++) {
            # code...
            DB::table('inventories')->insert([
                // 'idInventory' => $faker->randomDigit,
                'namaInventory' => "Inventory ".$i,
                'deskripsiInventory' => "Deskripsi Inventory ".$i,
                'partnumberInventory' => $faker->swiftBicNumber,
                'jenisInventory' => 'Jenis Inventory'.$i,
                'satuanInventory' => 'Satuan Inventory'.$i,
                'hargaInventory' => $faker->numberBetween($min = 1000, $max = 9000),
                'stokawalInventory' => $faker->randomDigit,
            ]);
        }
    }
}
