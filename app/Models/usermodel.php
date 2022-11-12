<?php 
 namespace App\models;
 use Digitalrestaurant\Model;
 class UsuariosModel extends Model
 {
 protected $table      = 'usuarios';
 protected $primaryKey = 'id';
 protected $useAutoIncrement = true;
 protected $returnType     = 'array';
 protected $useSoftDeletes = false;
 protected $allowedFields = ['id', 'nombre','apellido','cedula'];
 protected $useTimestamps = false;
 protected $createdField  = 'created_at';
 protected $updatedField  = 'updated_at';
 protected $deletedField  = 'deleted_at';
 protected $validationRules    = [];
 protected $validationMessages = [];
 protected $skipValidation     = false;
 }