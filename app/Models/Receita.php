<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    protected $fillable=['nome','categoria','descricao','user_id','imagem'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
