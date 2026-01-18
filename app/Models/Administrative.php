<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrative extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }

    public function category()
    {
        return $this->belongsTo(AdministrativeCategory::class, 'category_id');
    }

    public function socialLinks()
    {
        return $this->hasMany(AdministrativeSocialLink::class, 'administrative_id');
    }
}