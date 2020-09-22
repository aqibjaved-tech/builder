<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $role_employee = new Role();
       $role_employee->name = 'SUPERUSER';
       $role_employee->description = 'Full access with user add/edit/delete capabilities';
       $role_employee->save();

       $role_employee = new Role();
       $role_employee->name = 'ADMIN';
       $role_employee->description = 'Full Access';
       $role_employee->save();

       $role_manager = new Role();
       $role_manager->name = 'Theme Admins';
       $role_manager->description = 'Fully manage all theme details';
       $role_manager->save();

       $role_manager = new Role();
       $role_manager->name = 'Theme Editor';
       $role_manager->description = 'Manage a select list of themes';
       $role_manager->save();

       $role_manager = new Role();
       $role_manager->name = 'Site Admins';
       $role_manager->description = 'Fully manage all site details';
       $role_manager->save();

       $role_manager = new Role();
       $role_manager->name = 'Site Editor';
       $role_manager->description = 'Fully manage 1 or multiple selected sites';
       $role_manager->save();


   }
}
