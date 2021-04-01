<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'username', 'email'];
    
    public function getUsers()
    {
      return $this->select('id, username, email, active ') 
      ->get()->getResult();
    }
    
}