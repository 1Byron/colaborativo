<?php 
namespace App\Models;

use CodeIgniter\Model;

class Region extends Model{
    protected $table      = 'regiones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_region';
    protected $allowedFields=['cod_region','nombre','descripcion'];
}