<?php

use Illuminate\Database\Seeder;
use App\Logistic;

class CreateLogisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logistic = [
            [
                'logistic_name'=>'logistic 1',
                'address'=>'ampang',
                'office_phone'=>'11111',
                'email'=>'admin@gmail.com',
            ],
            [
                'logistic_name'=>'logistic 2',
                'address'=>'kuala lumpur',
                'office_phone'=>'22222',
                'email'=>'user@gmail.com',
            ],
        ];
  
        foreach ($logistic as $key => $value) {
            Logistic::create($value);
        }
    }
}
