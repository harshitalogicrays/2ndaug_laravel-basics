<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  Faker\Factory as Faker;
class customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $customer = new Customer;
        // $customer->name = "BBB";
        // $customer->email="ccc2@gmail.com";
        // $customer->mobile=9090909909;
        // $customer->dob="2002-01-01";
        // $customer->password="bbb123";
        // $customer->gender="F";
        // $customer->address="address";
        // $customer->save();

        $faker = Faker::create();
        for($i=1;$i<=50;$i++){
            $customer = new Customer;
            $customer->name = $faker->name;
            $customer->email=$faker->email;
            $customer->mobile=99999999999;
            $customer->dob="2002-01-01";
            $customer->password=$faker->password;
            $customer->gender="M";
            $customer->address=$faker->address;
            $customer->save();
        }
    }
}
