<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Orchid\Platform\Models\Role;
use App\Providers\TelescopeServiceProvider;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'slug' => 'admin'
        ], [
            'name' => 'Admin',
            'permissions' => [
                'platform.index' => '1',
                'platform.systems.index' => '1',
                'platform.systems.roles' => '1',
                'platform.systems.users' => '1',
                'platform.systems.attachment' => '1',
                TelescopeServiceProvider::PERMISSION => '1',
                'platform.docs' => '1'
            ]
        ]);
    }
}
