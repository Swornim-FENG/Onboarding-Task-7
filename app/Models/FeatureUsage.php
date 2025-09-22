<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureUsage extends Model
{
        protected $fillable = ['user_id', 'feature_name', 'action', 'ip_address'];

}
