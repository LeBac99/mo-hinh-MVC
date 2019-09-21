<?php
require_once './models/BaseModel.php';
class Students extends BaseModel
{
    public $table = 'students';
    public $cols = ['full_name','avatar', 'birth_date', 
                    'school_id','address','class_name','status'];

    public function getCate(){
        $cate = Students::where('id', '=', $this->cate_id)->get();
        return $cate[0];
    }
}


?>
