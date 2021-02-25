<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LessonTag::factory(500)->create();
    }
}
