<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",
        "start_date",
        "end_date",
        "status",
        "is_group_project",
        "image",
        "image_name",
    ] ;
}
