<?php

namespace Database\Seeders;

use App\Models\Newsletter;
use App\Models\NewsletterLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsletterLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsletterLog::factory(10)->create();
    }
}