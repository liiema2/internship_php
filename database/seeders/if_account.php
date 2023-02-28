<?php

namespace Database\Seeders;
use App\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class if_account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Account::create([
            'name' => 'Lê Quỳnh Ái Vân',
            'username' => 'lequinhaivan01',
            'phone_number' => '0123456789',
            'email' => 'van@example.com',
            'password' => bcrypt('123456'),
            'role' => 'Kế toán'
        ]);
    }
}
