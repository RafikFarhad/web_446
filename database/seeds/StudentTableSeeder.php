<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=69; $i++)
        {
            try
            {
                $reg = $i<10?'201333100'.$i:'20133310'.$i;
                $t = new \App\Student();
                $t->reg_no = $t->name = $reg;
                $t->session = '2013';
                $t->department = 'CSE';
                $t->save();
            }
            catch(\Exception $e)
            {
                ;
            }
        }
    }
}
