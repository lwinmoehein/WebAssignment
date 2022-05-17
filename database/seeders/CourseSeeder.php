<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['name'=>'Myanmar','created_at'=>now()],
            ['name'=>'English','created_at'=>now()],
            ['name'=>'Math','created_at'=>now()],
            ['name'=>'Physics','created_at'=>now()],
            ['name'=>'Chemistry','created_at'=>now()],
            ['name'=>'Bio','created_at'=>now()],
            ['name'=>'Eco','created_at'=>now()]
        ]);
    }
}
