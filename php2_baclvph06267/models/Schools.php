<?php
require_once './models/BaseModel.php';
class Schools extends BaseModel
{
    public $table = 'schools';
    public $cols = ['name','logo','slogan','address', 
                    'cveated_year'];

    public function getCate(){
        $cate = Schools::where('id', '=', $this->cate_id)->get();
        return $cate[0];
    }
}


?>
