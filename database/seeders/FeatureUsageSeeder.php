<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FeatureUsage;


class FeatureUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeatureUsage::create([
            'user_id' => 2,
            'feature_name' => 'Export PDF',
            'action' => 'clicked',
            'ip_address' => '127.0.0.1'
        ]);

        FeatureUsage::create([
            'user_id' => 2,
            'feature_name' => 'Login',
            'action' => 'success',
            'ip_address' => '127.0.0.1'
        ]);

        FeatureUsage::create([
            'user_id' => 2,
            'feature_name' => 'Upload File',
            'action' => 'completed',
            'ip_address' => '127.0.0.1'
        ]);
    }
}
