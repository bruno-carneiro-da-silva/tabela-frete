<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoCategory extends Model
{
    use HasFactory;

    // Definindo a tabela associada ao model
    protected $table = 'cargo_categories';

    // Definindo os atributos que podem ser atribuídos em massa
    protected $fillable = ['name'];
}
