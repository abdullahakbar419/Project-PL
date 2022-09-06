<?php

namespace Database\Seeders;

use App\Models\FirstParty;
use App\Models\Newsletter;
use App\Models\SecondParty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::factory(1000)->create();
    }
}