<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create( [
            'title' => 'Bantu Anak Yatim Piatu',
            'description' => 'Mari kita bantu anak-anak yatim piatu yang membutuhkan bantuan kita. Setiap sumbangan akan sangat berarti bagi mereka.',
            'target_donation' => 1000000,
            'collected_donation' => 500000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create( [
            'title' => 'Bantu Korban Bencana Alam',
            'description' => 'Bencana alam telah melanda beberapa daerah, mari kita bantu mereka yang terdampak dengan memberikan sumbangan untuk kebutuhan mendesak.',
            'target_donation' => 5000000,
            'collected_donation' => 10000000,
            'deadline' => '2026-11-30',
        ]);
    }
}
