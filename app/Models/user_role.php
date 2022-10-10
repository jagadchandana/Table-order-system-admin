<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class user_role extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public static function boot()
    {
        parent::boot();
        // registering a callback to be executed upon the creation of an activity AR
        static::creating(function ($user_role) {
            // produce a slug based on the activity title
            $slug = Str::slug($user_role->role);
            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            // if other slugs exist that are the same, append the count to the slug
            $user_role->slug = $count ? "{$slug}-{$count}" : $slug;
        });
         // registering a callback to be executed upon the creation of an activity AR
         static::updating(function ($user_role) {
            // produce a slug based on the activity title
            $slug = Str::slug($user_role->role);
            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            // if other slugs exist that are the same, append the count to the slug
            $user_role->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
    public function getRoles()
    {
        return $this->where('slug', '!=', 'super-admin')->get();
    }
}
