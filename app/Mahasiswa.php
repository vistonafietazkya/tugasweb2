<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table	='mahasiswa';
    protected $fillable =['user_id', 'tgl_lahir', 'telepon', 'alamat', 'gender', 'foto'];
    public $timestamp	= false;

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
