<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Referer;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Account::factory()->create();
        Campaign::factory()->state(['account_id' => 1])->create();
        User::factory()->create();
        Referer::factory()->state(['campaign_id' => 1])->count(10)->create();
    }
}
