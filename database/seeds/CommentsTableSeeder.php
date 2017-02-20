<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $comments = [
                [
                'post_id' =>2,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>3,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>3,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>2,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>2,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>3,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>2,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
                [
                'post_id' =>3,
                'body' =>'Or randomisedo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition' . str_random(5),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        DB::table('comments')->insert($comments);
    }

}
