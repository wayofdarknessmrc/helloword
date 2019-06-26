<?php
use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::where('slug', 'author')->first();
        $editor = Role::where('slug', 'editor')->first();

        $user1 = User::create([
            'name' => 'Phóng viên 1', 
            'email' => 'pv1@allaravel.dev',
            'phone' => '',
            'address' => '',
            'age' => 0,
            'password' => bcrypt('123456')
        ]);
        $user1->roles()->attach($author);

        $user2 = User::create([
            'name' => 'Phóng viên 2', 
            'email' => 'pv2@allaravel.dev',
            'phone' => '',
            'address' => '',
            'age' => 0,
            'password' => bcrypt('123456')
        ]);
        $user2->roles()->attach($author);

        $user3 = User::create([
            'name' => 'Biên tập viên 1', 
            'email' => 'btv1@allaravel.dev',
            'phone' => '',
            'address' => '',
            'age' => 0,
            'password' => bcrypt('123456')
        ]);
        $user2->roles()->attach($editor);
    }
}
