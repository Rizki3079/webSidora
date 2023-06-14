<?php

namespace Database\Seeders;

use Faker\Core\Bloodrs;
use App\Models\BloodrsModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BloodrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    DB::beginTransaction();

        $bloodrs = BloodrsModel::create([
            'id' => 1,
            'jenis_darah' => 'WHOLE BLOOD',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 14,
        ]);

        $bloodrs = BloodrsModel::create([
            'id' => 2,
            'jenis_darah' => 'PACKAGE RED CELL',
            'a' => 0,
            'b' => 1,
            'ab' => 1,
            'o' => 11,
        ]);

        $bloodrs = BloodrsModel::create([
            'id' => 3,
            'jenis_darah' => 'TROMBOCYTE',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 11,
        ]);

        $bloodrs = BloodrsModel::create([
            'id' => 4,
            'jenis_darah' => 'FRESH FROZEN PLASMA',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 11,
        ]);
        DB::commit();
    }
}