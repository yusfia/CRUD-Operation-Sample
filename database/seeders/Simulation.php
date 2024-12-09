<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class Simulation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $newUser = User::create([
            'name' => 'yusfia',
            'email' => 'yusfia.hafid@staff.uns.ac.id',
            'password' => Hash::make('1234567')
        ]);
        $newUser->assignRole($admin);

        $address1 = Address::create([
            'city' => 'karanganyar',
            'street' => 'jl. lawu',
            'postal_code' => '57714',
            'user_id' => $newUser->id
        ]);
        $address2 = Address::create([
            'city' => 'karanganyar',
            'street' => 'jl. curug',
            'postal_code' => '57713',
            'user_id' => $newUser->id
        ]);
    }
}
