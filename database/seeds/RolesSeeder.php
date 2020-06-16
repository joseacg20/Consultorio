<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role = "Administrador";
        $role->description = "Tiene acceso a todo el sistema";
        $role->save();

        $role = new Role();
        $role->role = "Doctor";
        $role->description = "Tiene acceso a ciertas partes";
        $role->save();

        $role = new Role();
        $role->role = "Secretaria";
        $role->description = "Tiene acceso a notas";
        $role->save();
    }
}
