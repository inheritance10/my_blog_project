<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['blog_title','blog_content','blog_must','blog_slug'
    ,'blog_file','blog_status'
    ];
}
