<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role :: where('role','Administrador')->first();

        $user = new User();
        $user->name = 'Administrador';
        $user->lastName = '.';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach($role_admin);

        $role_doctor = Role :: where('role','Doctor')->first();

        $user = new User();
        $user->name = 'Cesar';
        $user->lastName = 'Guzman';
        $user->email = 'cesar@mail.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach($role_doctor);

        $role_secretary = Role :: where('role','Secretaria')->first();

        $user = new User();
        $user->name = 'Maria';
        $user->lastName = 'Perez';
        $user->email = 'maria@mail.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach($role_secretary);
    }
}
