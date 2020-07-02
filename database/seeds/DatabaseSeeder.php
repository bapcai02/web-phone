<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('info')->insert([
            'product_id' => '1',
            'weight' => '194',
            'size' => '150.9mm - 75.7mm - 8.3mm',
            'sim' => 'Nano-SIM + eSIM',
            'screen' => 'IPS LCD 6.1 inches',
            'chip_cpu' => 'IOS A13 Bionic',
            'pin' => '3110 mAh',
            'camera_before' => '12 MP, ƒ/2.2 aperture',
            'camera_after' => '	Camera kép 12MP:
                                - Camera góc rộng: ƒ/1.8 aperture
                                - Camera siêu rộng: ƒ/2.4 aperture',
            'video' => 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            
        ]);
        DB::table('info')->insert([
            'product_id' => '2',
            'weight' => '194',
            'size' => '150.9mm - 75.7mm - 8.3mm',
            'sim' => 'Nano-SIM + eSIM',
            'screen' => 'IPS LCD 6.1 inches',
            'chip_cpu' => 'IOS A13 Bionic',
            'pin' => '3110 mAh',
            'camera_before' => '12 MP, ƒ/2.2 aperture',
            'camera_after' => '	Camera kép 12MP:
                                - Camera góc rộng: ƒ/1.8 aperture
                                - Camera siêu rộng: ƒ/2.4 aperture',
            'video' => 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('info')->insert([
            'product_id' => '3',
            'weight' => '194',
            'size' => '150.9mm - 75.7mm - 8.3mm',
            'sim' => 'Nano-SIM + eSIM',
            'screen' => 'IPS LCD 6.1 inches',
            'chip_cpu' => 'IOS A13 Bionic',
            'pin' => '3110 mAh',
            'camera_before' => '12 MP, ƒ/2.2 aperture',
            'camera_after' => '	Camera kép 12MP:
                                - Camera góc rộng: ƒ/1.8 aperture
                                - Camera siêu rộng: ƒ/2.4 aperture',
            'video' => 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('info')->insert([
            'product_id' => '4',
            'weight' => '194',
            'size' => '150.9mm - 75.7mm - 8.3mm',
            'sim' => 'Nano-SIM + eSIM',
            'screen' => 'IPS LCD 6.1 inches',
            'chip_cpu' => 'IOS A13 Bionic',
            'pin' => '3110 mAh',
            'camera_before' => '12 MP, ƒ/2.2 aperture',
            'camera_after' => '	Camera kép 12MP:
                                - Camera góc rộng: ƒ/1.8 aperture
                                - Camera siêu rộng: ƒ/2.4 aperture',
            'video' => 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
