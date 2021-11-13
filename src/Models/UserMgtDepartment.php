<?php

namespace Elshaden\LivewireUsermgt\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Elshaden\LivewireUsermgt\Models\User;
use Illuminate\Support\Str;

class UserMgtDepartment extends Model
{
    protected $fillable = [
        'title',
        'parent_id',
    ];


    public function getUppercasedName(): string
    {
        return Str::title($this->title);
    }


    public function parent()
    {
        return $this->belongsTo(UserMgtDepartment::class, 'parent_id', 'id');
    }


    public function users() :BelongsToMany
    {
         return $this->belongsToMany(User::class , 'user_usermgt_departments');

    }
}
