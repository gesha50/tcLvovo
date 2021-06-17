<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(Services::class, 'company_id');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'company_id');
    }
}
