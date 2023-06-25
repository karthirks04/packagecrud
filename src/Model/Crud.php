<?php

namespace laravelmoduelscrud\LaravelPermissionEditor\Model;
use Illuminate\Database\Eloquent\Model;
use DB;

class Crud extends Model
{
    protected $table = 'crud';
    protected $fillable = ['name', 'designation', 'profile_image'];
}