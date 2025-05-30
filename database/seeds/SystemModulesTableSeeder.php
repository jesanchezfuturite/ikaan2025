<?php

use Illuminate\Database\Seeder;

use MetodikaTI\SystemModule as SM;

class SystemModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system = array(
            'name'=>'Sistema',
            'url' => 'system',
            'icon' => 'ti-settings',
            'parent' => 0,
            'order' => 1,
        );
        SM::create($system);
        $users = array(
            'name'=>'Usuarios',
            'url' => 'system/user',
            'icon' => 'ti-angle-right',
            'parent' => 1,
            'order' => 1,
            'parent_as_child' => 0,
        );
        SM::create($users);
        $profiles = array(
            'name'=>'Perfiles',
            'url' => 'system/profile',
            'icon' => 'ti-angle-right',
            'parent' => 1,
            'order' => 2,
        );
        SM::create($profiles);
    }
}
