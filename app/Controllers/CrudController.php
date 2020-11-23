<?php 

namespace App\Controllers; 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class CrudController extends BaseController {
 
    public function index(){
        
		$data['name'] = 'John Doe';
        $data['content'] = 'crud/index_crud';
        echo view('templates/header', $data);
        echo view('templates/main');
        echo view('templates/footer');
    }

    public function user_table(){
        $model = new UserModel();
		$data['users'] = $model->getUsers();
        echo view('crud/user_table', $data);
    }

    public function add()
    {  
        helper(['form', 'url']);
         
        $model = new UserModel();
 
        $data = [
            'name' => $this->request->getVar('txtName'),
            'email'  => $this->request->getVar('txtEmail'),
            ];
        $save = $model->insert_data($data);
        if($save != false)
        {
        $data = $model->where('id', $save)->first();
        echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
        echo json_encode(array("status" => false , 'data' => $data));
        }
    }

    public function edit($id = null)
    {
      
     $model = new UserModel();
 
     $data = $model->where('id', $id)->first();
 
    if($data){
        echo json_encode(array("status" => true , 'data' => $data));
        }else{
        echo json_encode(array("status" => false));
        }
    }
    
    public function update()
    {  
 
        helper(['form', 'url']);
        
        $model = new UserModel();
        
        $id = $this->request->getVar('hdnUserId');
        
        $data = [
            'name' => $this->request->getVar('txtUpdateName'),
            'email'  => $this->request->getVar('txtUpdateEmail'),
        ];
        
        $update = $model->update($id,$data);
        if($update != false)
        {
        $data = $model->where('id', $id)->first();
        echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
        echo json_encode(array("status" => false , 'data' => $data));
        }
            }
            

    public function delete($id = null){
        $model = new UserModel();
        $delete = $model->where('id', $id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
           }

}
?>