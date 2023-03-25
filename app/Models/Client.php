<?php 
namespace App\Models;

use CodeIgniter\Model;

class Client extends Model{
    protected $table      = 'clients';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['name', 'lastname', 'phone', 'email'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'name'      => 'required|min_length[3]',
        'lastname'  => 'required|min_length[3]',
        'phone'     => 'required',
        'email'     => 'required|valid_email',
    ];
    protected $validationMessages = [];

    protected $skipValidation = false;
}