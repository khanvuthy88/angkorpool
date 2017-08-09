<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::truncate();

        factory(AdminUser::class)->create([ 'username' => 'admin' ]);
    }
}
