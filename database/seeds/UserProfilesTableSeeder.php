<?php

use Illuminate\Database\Seeder;

use MetodikaTI\UserProfile;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demon = array(
            'name' => 'Demon',
            'permits' => '{"1":15,"2":15,"3":15,"4":15,"5":15,"6":15,"7":15,"8":15,"9":15, "10":15, "11":15 }',
        );

        UserProfile::create($demon);
        $demon['name'] = "Invitado";
        UserProfile::create($demon);
    }
}
