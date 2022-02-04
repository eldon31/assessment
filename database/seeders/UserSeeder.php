<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;

    class UserSeeder extends Seeder
    {
        /**
        * Run the database seeds.
        *
        * @return void
        */
        public function run()
        {
            $first_admin = User::create([
                'name' => 'MayAdmin',
                'email' => 'adminMay@gmail.com',
                'password' => Hash::make('password'),
            ]);

            $second_admin = User::create([
                'name' => 'AprilAdmin',
                'email' => 'adminApril@gmail.com',
                'password' => Hash::make('password'),
            ]);

            $first_admin->assignRole('Admin');
            $second_admin->assignRole('Admin');
        }
    }
