<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $employee = new User();
        $employee->name = 'Quốc Việt ';
        $employee->email = 'quocviet@gmail.com';
        $employee->password = bcrypt('12345678');
        $employee->PhanQuyen ='Admin';
        $employee->save();
    }
}
