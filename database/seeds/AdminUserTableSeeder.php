<?php

use Illuminate\Database\Seeder;
use App\AdminUser;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        AdminUser::truncate();

        // create permissions
        Permission::create(['name' => 'create users', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit users', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete users', 'guard_name' => 'admin']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'boss', 'guard_name' => 'admin']);
        $role->givePermissionTo('create users');
        $role->givePermissionTo('edit users');
        $role->givePermissionTo('delete users');

        $role = Role::create(['name' => 'editor', 'guard_name' => 'admin']);
        $role->givePermissionTo('edit users');

        // User
        factory(AdminUser::class)->create([ 'username' => 'boss' ]);
        factory(AdminUser::class)->create([ 'username' => 'staff' ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
