<?php

use Illuminate\Database\Seeder;

class DeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*single Dimontional Array*/
        /*DB::table('dept')->insert
        (
            [
                'deptno' => 10,
                'dname' => 'ACCOUNTING',
                'loc' => 'NEW YORK'
            ]
        );*/

        //delete and again seeds
        $delete = DB::delete('delete from dept');

        //Multy diamonstional Array
        $departments =
            [
                ['deptno'=>10,'dname' => 'ACCOUNTING','loc' => 'NEW YORK'],
                ['deptno'=>20,'dname' => 'RESEARCH','loc' => 'DALLAS'],
                ['deptno'=>30,'dname' => 'SALES','loc' => 'CHICAGO'],
                ['deptno'=>40,'dname' => 'OPERATIONS','loc' => 'BOSTON'],
                ['deptno'=>50,'dname' => 'MARKETING','loc' => 'COLOMBO']
            ];

        foreach ($departments as $department) {
            DB::table('dept')->insert($department);
        }

        print('Susccefully dept table seeds');

    }
}
