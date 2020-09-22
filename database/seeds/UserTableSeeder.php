<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

        $superuser    = Role::where('name', 'SUPERUSER')->first();
        $admin        = Role::where('name', 'ADMIN')->first();
        $theme_admin  = Role::where('name', 'Theme Admins')->first();
        $theme_editors  = Role::where('name', 'Theme Editor')->first();
        $site_admin  = Role::where('name', 'Site Admins')->first();
        $site_editor  = Role::where('name', 'Site Editor')->first();

        $employee = new User();
        $employee->name = 'Tom Brown';
        $employee->email = 'tom@elevated.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($superuser);

        $manager = new User();
        $manager->name = 'ADMIN';
        $manager->email = 'john@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($admin);

        $manager = new User();
        $manager->name = 'Theme Admins';
        $manager->email = 'themeadmin@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($theme_admin);

        $manager = new User();
        $manager->name = 'Theme Editor';
        $manager->email = 'themeeditor@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($theme_editors);

        $manager = new User();
        $manager->name = 'Site Admins';
        $manager->email = 'siteadmin@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($site_admin);

        $manager = new User();
        $manager->name = 'Site Editor';
        $manager->email = 'siteeditor@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($site_editor);


      }

}
