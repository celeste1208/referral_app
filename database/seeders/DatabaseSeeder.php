<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Campaign;
use App\Models\Referral;
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
        Account::factory()->count(2)->create();
        Campaign::factory()
            ->state(['account_id' => 1])
            ->create();
        Campaign::factory()
            ->state(['account_id' => 2])
            ->create();
        User::factory()
            ->state([
                'account_id' => 1,
                'email' => 'test@email.com',
            ])
            ->create();
        User::factory()
            ->state([
                'account_id' => 2,
                'email' => 'test2@email.com',
            ])
            ->create();
        Referer::factory()
            ->has(Referral::factory()->count(2))
            ->state(['campaign_id' => 1])
            ->count(5)
            ->create();
        Referer::factory()
            ->has(Referral::factory()->count(2))
            ->state(['campaign_id' => 2])
            ->count(3)
            ->create();
    }
}
