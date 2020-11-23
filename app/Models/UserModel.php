<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email'];

    public function getUsers($id = false) {
      if($id === false) {
        return $this->findAll();
      } else {
          return $this->getWhere(['id' => $id]);
      }
    }

    public function insert_data($data) {
      if($this->db->table($this->table)->insert($data))
             {
                 return $this->db->insertID();
             }
             else
             {
                 return false;
             }
         }
     

    

}
?>