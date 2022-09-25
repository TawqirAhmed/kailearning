<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";

    public function category(){

        return $this->belongsTo(Category::class, 'category_id');

    }

    public function vendor(){

        return $this->belongsTo(Vendor::class, 'vendor_id');

    }

    public function mentor(){

        return $this->belongsTo(Mentor::class, 'mentor_id');

    }
}
