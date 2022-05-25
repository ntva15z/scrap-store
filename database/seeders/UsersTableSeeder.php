<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=UsersTableSeeder
     * @return void
     */
    public function run()
    {
        // users table
        $users = [
            // Admin
            [
                'id'       => 1,
                'username' => 'admin',
                'first_name' => 'Admin',
                'last_name' => '1',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('12345678'),
                'role'              => 1, // 1: admin - 2:  staff - 3:  user
                'address'           => 'Km 88 thôn Lương Quán, Xã Nam Sơn, Huyện An Dương',
                'status'        => 1,

                'created_by'     => 1,
                'updated_by'     => 1,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ],

            [
                'id'        => 2,
                'username' => 'staff1',
                'first_name' => 'Staff',
                'last_name' => '1',
                'email'             => 'staff_1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('12345678'),
                'role'              => 2, // 1: admin - 2:  staff - 3:  user
                'address'           => 'Km 88 thôn Lương Quán, Xã Nam Sơn, Huyện An Dương',
                'status'        => 1,
                'created_by'     => 1,
                'updated_by'     => 1,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ],

        ];
        DB::table('users')->insert($users);
    }
}
