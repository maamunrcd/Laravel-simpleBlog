<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $professions = [
                [
                'title' => 'Student',
                'content' => 'Lorem ipsum hello wold' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'compleat' => false,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'title' => 'Teacher',
                'compleat' => false,
                'content' => 'Lorem ipsum hello wold' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'title' => 'Programmer',
                'content' => 'Lorem ipsum hello wold' . str_random(5),
                'compleat' => false,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'title' => 'Doctor',
                'content' => 'Lorem ipsum hello wold' . str_random(5),
                'compleat' => false,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'title' => 'Engineer',
                'content' => 'Lorem ipsum hello wold' . str_random(5),
                'compleat' => false,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        DB::table('tasks')->insert($professions);
    }

}
