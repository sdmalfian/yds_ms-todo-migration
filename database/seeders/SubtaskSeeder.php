<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtasks')->insert([
            [
                "task_id" => 2,
                "name" => "Membuat coklat panas",
                "is_completed" => false,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ],
        ]);
    }
}