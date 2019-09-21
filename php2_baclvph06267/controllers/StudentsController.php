<?php
require_once './models/Students.php';
class StudentsController
{
    public function index(){
        global $baseUrl;
        $students = Students::all();
        // echo "<pre>";

        // var_dump($products);die;
        include_once './views/students.php';
    }


    public function remove(){
        $id = $_GET['id'];

        Students::delete($id);


        header('location: ./students');
    }


   public function addForm(){
        global $baseUrl;
        $model = new Students();
        $cates = Students::all();
        include_once './views/students/addForm.php';
    }
    public function editForm(){
        global $baseUrl;
        $id = $_GET['id'];
        $model = Students::find($id);
        include_once './views/students/editForm.php';
    }
    public function saveAdd(){
        $model = new Students();
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
      }
        //kiem tra price


        //end validate

        $avatar = $_FILES['avatar'];
        // upload ảnh
        if($avatar['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $avatar['name'];
            move_uploaded_file($avatar['tmp_name'], "public/" .$filename);
            $model->avatar = $filename;
        }

        
        
        $colQuery = "";
        $valQuery = "";
        foreach($model->cols as $co){
            $colQuery .= "$co, ";
            $valQuery .= "'". $model->{$co} ."', ";
        }
        $colQuery = rtrim($colQuery, ", ");
        $valQuery = rtrim($valQuery, ", ");
        
        $model->queryBuilder =  "insert into " . $model->table 
                    . " ($colQuery)"
                    . " values "
                    . " ( $valQuery )";
        // var_dump($model->queryBuilder);die;
        $model->exeQuery();
        header('location: ./students');
        
    }
    public function saveEdit(){
      
        $id = $_POST['id'];

        $model = Students::find($_POST['id']);
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
      $avatar = $_FILES['avatar'];
        // upload ảnh
        if($avatar['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $avatar['name'];
            move_uploaded_file($avatar['tmp_name'], "public/" .$filename);
            $model->avatar = $filename;
        }

     
          // neu phat hien loi 
       
        //
        $setQuery = "";
        foreach($model->cols as $co){
            $setQuery .= $co . " = '" . $model->{$co} . "', ";
        }
        $setQuery = rtrim($setQuery, ", ");
        $model->queryBuilder =  "update " . $model->table 
                    . " set $setQuery"
                    . " where id = " . $model->id;
        $model->exeQuery();
        header('location: ./students');
        
        
    }
    
}

?>