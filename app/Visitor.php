<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  protected $fillable = [
      'nama', 'no_ktp', 'alamat', 'no_telp', 'room', 'checkin', 'checkout'
  ];
}
