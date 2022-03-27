<?php
namespace Database\Seeders\gestionTfe;
use App\Models\Field;
use App\Models\Profile;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Field::create([
        'systemName'=>"bbbfb",
        'name'=>"GE",
        'abbreviation'=>"GE",
        'description'=>"desc",
        'offer'=>"ndfbdf", // fichier à discuter
        ]);
        Status::create([
            'name'=>"etudiant",
            'notation'=>10, //integer
            'description'=>"c'est un étudiant",
        ]);
        User::create(['pseudo'=>'ange',
        'email'=>"a@a.com",
        'password'=>Hash::make("00000000"),
        'statusId'=>1]);

        Profile::create(
        [
            'userId'=>1,
            "com_gender"=>"M",
            'com_address'=>'sdss,ns,',
            'com_parentFullname'=>"ksfnklnf", 
            'com_parentGivenName'=>"nfjdf",
            'com_parentPhoneNumber'=>"45454564",
            'app_fieldId'=>1,
            'com_fullname'=>"Ange cyrille",
            'com_givenName'=>"Name",
            'com_registrationNumber'=>"63224514",
            'com_phoneNumber'=>"63224514", 
            'com_birthdate'=>now(), 
            'com_birthPlace'=>"dsjkjns",
            'com_diploma'=>",qndndfnd",
        ]
        );
    }

}
?>