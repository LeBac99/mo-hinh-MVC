
<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';


require_once "./controllers/SchoolsController.php";
require_once "./controllers/StudentsController.php";
 
switch($url){
    
    case '/':
        $ctr = new SchoolsController();
        echo $ctr->index();
        break;
    
    case 'schools-remove':
        $ctr = new SchoolsController();
        echo $ctr->remove();
        break;
    case 'schools-add':
        $ctr = new SchoolsController();
        echo $ctr->addForm();
        break;
     
    
    case 'schools-save-add':
        $ctr = new SchoolsController();
        echo $ctr->saveAdd();
        break;
    case 'schools-edit':
        $ctr = new SchoolsController();
        echo $ctr->editForm();              
        break;
      case 'schools-save-edit':
        $ctr = new SchoolsController();
        echo $ctr->saveEdit();
        break;
    
    //
     case 'students':
        $ctr = new StudentsController();
        echo $ctr->index();
        break;
    
    case 'students-remove':
        $ctr = new StudentsController();
        echo $ctr->remove();
        break;
     case 'students-add':
        $ctr = new StudentsController();
        echo $ctr->addForm();
        break;
    case 'students-save-add':
        $ctr = new StudentsController();
        echo $ctr->saveAdd();
        break;

     case 'students-edit':
        $ctr = new StudentsController();
        echo $ctr->editForm();              
        break;
      case 'students-save-edit':
        $ctr = new StudentsController();
        echo $ctr->saveEdit();
        break;

         default:
        echo "404 notfound!";
        break;

}

?>