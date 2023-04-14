<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $rical = new User;
        $rical -> name = "Rick";
        $rical->email = "ricalberto10@gmail.com";
        $rical ->password = HASH::make("123");//123
        $rical ->save();*/

        $spiderman = new User;
        $spiderman -> name = "SpiderMan";
        $spiderman->email = "SpiderMan@gmail.com";
        $spiderman -> real_name = "Peter";
        $spiderman->gender = "Male";
        $spiderman-> universe_id= "4";
        $spiderman ->password = HASH::make("123");//123
        $spiderman ->save(); 
    

        $hulk = new User;
        $hulk -> name = "hulk";
        $hulk->email = "hulk@gmail.com";
        $hulk -> real_name = "Robert Bruce Banner";
        $hulk->gender = "Male";
        $hulk-> universe_id= "4";
        $hulk ->password = HASH::make("123");//123
        $hulk ->save(); 
    

        $Captain = new User;
        $Captain -> name = "Captain";
        $Captain->email = "Captain@gmail.com";
        $Captain -> real_name = "Steven Rogers";
        $Captain->gender = "Male";
        $Captain-> universe_id= "4";
        $Captain ->password = HASH::make("123");//123
        $Captain ->save(); 

        $Superman = new User;
        $Superman -> name = "Superman";
        $Superman->email = "Superman@gmail.com";
        $Superman -> real_name = "Clark Kent";
        $Superman->gender = "Male";
        $Superman-> universe_id= "2";
        $Superman ->password = HASH::make("123");//123
        $Superman ->save(); 

        $Batman = new User;
        $Batman -> name = "Batman";
        $Batman->email = "Batman@gmail.com";
        $Batman -> real_name = "Bruce Wayne";
        $Batman->gender = "Male";
        $Batman-> universe_id= "1";
        $Batman ->password = HASH::make("123");//123
        $Batman ->save(); 

        $Scarlert_Spiderman = new User;
        $Scarlert_Spiderman -> name = "Scarlert_Spiderman";
        $Scarlert_Spiderman->email = "Scarlert_Spiderman@gmail.com";
        $Scarlert_Spiderman -> real_name = "Ben Reilly";
        $Scarlert_Spiderman->gender = "Male";
        $Scarlert_Spiderman-> universe_id= "5";
        $Scarlert_Spiderman ->password = HASH::make("123");//123
        $Scarlert_Spiderman ->save(); 
    
        $Wonder_Woman = new User;
        $Wonder_Woman -> name = "Wonder_Woman";
        $Wonder_Woman->email = "Wonder_Woman@gmail.com";
        $Wonder_Woman -> real_name = "Ben Reilly";
        $Wonder_Woman->gender = "Female";
        $Wonder_Woman-> universe_id= "1";
        $Wonder_Woman ->password = HASH::make("123");//123
        $Wonder_Woman ->save(); 

        $Doomsday = new User;
        $Doomsday -> name = "Doomsday";
        $Doomsday->email = "Doomsday@gmail.com";
        $Doomsday -> real_name = "Ben Reilly";
        $Doomsday->gender = "male";
        $Doomsday-> universe_id= "3";
        $Doomsday ->password = HASH::make("123");//123
        $Doomsday ->save(); 

        $Scarlet_Witch = new User;
        $Scarlet_Witch -> name = "Scarlet_Witch";
        $Scarlet_Witch->email = "Scarlet_Witch@gmail.com";
        $Scarlet_Witch -> real_name = "Ben Reilly";
        $Scarlet_Witch->gender = "Female";
        $Scarlet_Witch-> universe_id= "5";
        $Scarlet_Witch ->password = HASH::make("123");//123
        $Scarlet_Witch ->save(); 

        $Night_Wing = new User;
        $Night_Wing -> name = "Night_Wing";
        $Night_Wing->email = "Night_Wing@gmail.com";
        $Night_Wing -> real_name = "Ben Reilly";
        $Night_Wing->gender = "male";
        $Night_Wing-> universe_id= "3";
        $Night_Wing ->password = HASH::make("123");//123
        $Night_Wing ->save(); 
    }
}
