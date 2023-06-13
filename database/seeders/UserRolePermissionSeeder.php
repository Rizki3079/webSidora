<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        try {
            DB::beginTransaction();

            $roles = ['userPendonor', 'adminPmi', 'adminRs'];

            foreach ($roles as $data) {
                $role = Role::Create([
                    'name'  => $data,
                    // 'guard_name' => 'web'
                ]);
            }

            $permissions = ['userPendonor', 'adminPmi'];

            foreach ($permissions as $data) {
                Permission::updateOrCreate([
                    'name'  => $data,
                    // 'guard_name' => 'web'
                ]);
            }
            
            $user = User::create([
                'name' => 'userPendonor',
                'email' => 'userPendonor@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'remember_token' => Str::random(10),
            ])->assignRole('userPendonor');

            $admin = User::create([
                'name' => 'adminPmi',
                'email' => 'adminPmi@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'remember_token' => Str::random(10),
            ])->assignRole('adminPmi');

            $adminrs = User::create([
                'name' => 'adminRs',
                'email' => 'adminRs@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'remember_token' => Str::random(10),
            ])->assignRole('adminRs');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}