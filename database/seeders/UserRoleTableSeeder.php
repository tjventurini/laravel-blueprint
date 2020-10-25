<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Orchid\Platform\Models\Role;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get admin role
        $AdminRole = Role::where('slug', 'admin')->firstOrFail();

        // get admin user
        $AdminUser = User::where('email', 'admin@admin.com')->firstOrFail();

        // add admin role to admin user
        $AdminUser->roles()->syncWithoutDetaching($AdminRole);
    }
}
