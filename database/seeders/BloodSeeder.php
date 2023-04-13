<?php

namespace Database\Seeders;

// use Faker\Core\Blood;
use Faker\Core\Blood;
use App\Models\BloodModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        // Schema::create('blood', function (Blueprint $table) {
        //     $table->id()->primary;
        //     $table->string('jenis_darah');
        //     $table->integer('a');
        //     $table->integer('b');
        //     $table->integer('ab');
        //     $table->integer('o');
        //     $table->timestamps();
        // });
        $blood = BloodModel::create([
            'id' => 1,
            'jenis_darah' => 'WHOLE BLOOD',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 11,
        ]);

        $blood = BloodModel::create([
            'id' => 2,
            'jenis_darah' => 'PACKAGE RED CELL',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 11,
        ]);

        $blood = BloodModel::create([
            'id' => 3,
            'jenis_darah' => 'TROMBOCYTE',
            'a' => 11,
            'b' => 1,
            'ab' => 10,
            'o' => 11,
        ]);

        $blood = BloodModel::create([
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
