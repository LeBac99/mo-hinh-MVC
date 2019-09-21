<?php
require_once './models/Schools.php';
class SchoolsController
{
    public function index(){
        global $baseUrl;
        $schools = Schools::all();
        // echo "<pre>";

        // var_dump($products);die;
        include_once './views/schools.php';
    }


    public function remove(){
        $id = $_GET['id'];

        Schools::delete($id);


        header('location: ./');
    }


   public function addForm(){
        global $baseUrl;
        $model = new Schools();
        $cates = Schools::all();
        include_once './views/schools/addForm.php';


    }
    public function editForm(){
        global $baseUrl;
        $id = $_GET['id'];
        $model = Schools::find($id);
        include_once './views/schools/editForm.php';
    }
    public function saveAdd(){
        $model = new schools();
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
        $err = false;
        $nameerr="";
       
        if(strlen($model->name)== 0){
            $err= true;
            $nameerr= "Nhập tên sản phẩm";

        }else if (strlen($model->name) > 191) {
            $err= true;
            $nameerr= "Tên  không được vượt quá 191 ký tự!";
        }
        //checktrungten
         $schools = Schools::where('id', '!=',$id)->get();
      foreach ($schools as $row) {
          if($_POST['name']== trim ($row->name)){
            $err=true;
            $nameerr="Tên sản phẩm đã tồn tại!";
          }
      }

        //kiem tra price
   
      
        
      
        //sdasda
        
        // neu phat hien loi 
        if($err){
            header("location: ./schools-add?nameerr=$nameerr");
            die;
        }
       

        //end validate

        $logo = $_FILES['logo'];
        // upload ảnh
        if($logo['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $image['name'];
            move_uploaded_file($logo['tmp_name'], "public/" .$filename);
            $model->logo = $filename;
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
        header('location: ./');
        
    }
    public function saveEdit(){
      
        $id = $_POST['id'];

        $model = Schools::find($_POST['id']);
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
        $err = false;
        $namebac="";

    $schools = Schools::where('id', '!=',$id)->get();
      foreach ($schools as $row) {
          if($_POST['name']== rtrim ($row->name)){
            $err=true;
            $nameerr="Tên sản phẩm đã tồn tại!";
          }
      }

         if($err){
            header("location: ./schools-edit?id=$id&&nameerr=$nameerr");
            die;
        }

       
        $logo = $_FILES['logo'];
        // upload ảnh
        if($logo['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $image['name'];
            move_uploaded_file($logo['tmp_name'], "public/" .$filename);
            $model->logo = $filename;
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
        header('location: ./');
        
        
    }
    
}

?>