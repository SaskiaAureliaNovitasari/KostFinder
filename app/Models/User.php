<?php

namespace App\Models;

// Gunakan Authenticatable standar Laravel untuk MySQL
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Hapus baris $connection = 'mongodb' dan $collection = 'users'
    // Karena MySQL secara otomatis menggunakan tabel bernama 'users'
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profile_picture',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relasi ke review (Standar Eloquent MySQL)
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Relasi ke favorite (Standar Eloquent MySQL)
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}