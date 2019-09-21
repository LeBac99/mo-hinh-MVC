<?php 
 $baseUrl="http://localhost/php2_baclvph06267/";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="http://localhost/php2_baclvph06267/public/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/php2_baclvph06267/public/css/main.css">
</head>
<body>
    <div class="container">
        <form action="<?= $baseUrl . "students-save-edit"?>" method="post" enctype="multipart/form-data" 
            id="formDemo">
            <input type="hidden" name="id" value="<?= $model->id ?>">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">full_name</label>
                        <input type="text" name="full_name" id=""
                         value="<?= $model->full_name ?>" class="form-control" >
                         
                    </div>
                
                    <div class="form-group">
                        <label for="">birth_date</label>
                        <input type="date" name="birth_date" id=""
                            value="<?= $model->birth_date ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">school_id</label>
                        <input type="text" name="start_date" 
                            value="<?= $model->school_id ?>" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" name="end_date" 
                            value="<?= $model->address ?>" id="" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="">class_name</label>
                        <input type="date" name="end_date" 
                            value="<?= $model->class_name ?>" id="" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="">status</label>
                        <input type="text" name="end_date" 
                            value="<?= $model->status ?>" id="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img-preview">
                          <img src="<?= "public/" . $model->avatar ?>" class="img-fluid" id="imageTarget"">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sp</label>
                        <input type="file" id="product_image" name="avatar" id=""class="form-control">
                    </div>
                </div>
                <div class="col-12">
                
                </div>
                <div class="justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    <a href="http://localhost/php2_thithu" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    <script src="http://localhost/php2_baclvph06267/public/plugins/jquery/jquery.min.js"></script>
    <script src="http://localhost/php2_baclvph06267/public/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/php2_baclvph06267/public/plugins/jquery-validate/jquery.validate.min.js"></script>
    <script src="http://localhost/php2_baclvph06267/public/plugins/jquery-validate/additional-methods.min.js"></script>
    <style type="text/css">
         label.error{
            color: red;
        }
    </style>


       <script type="text/javascript">
    $(document).ready(function() {
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formDemo").validate({
            rules: {
                name: "required",            
                slogan:{
                    required:true,
                    min:5
                    },
                start_date:"required",
                end_date:"required",
               
            },
          

            messages: {
            name: "Vui lòng nhập tên sản phẩm!",
            slogan:{
                required:"Vui lòng nhập giá!",
                min:"Giá không được nhỏ hơn 5!"
               },
            start_date:"Vui lòng nhập thông tin!",
            end_date:"Vui lòng nhập thông tin!",
           
           
          
              }
        });
    });
      
      </script>
<script type="text/javascript">
   $("#formDemo").validate({
            rules: {
                full_name:{
                 required:true,
                  
            },            
                avatar:
                {
                    required:true,
                     accept: "image/*"

            },
                birth_date:{
                    required:true,
                    
                    },
            school_id:{required:true},
            address:"required",
            class_name:"required",
            status:"required",
            },
          

            messages: {
            full_name:{required: "Vui lòng nhập tên !",
                        max:"Tên không được quá 30 kí tự",
                        min:"Không được thấp hơn 5 kí tự "},
            birth_date:{
                required:"Vui lòng nhập date!",
                
               },
            school_id:"Vui lòng nhập thông tin!",
            address:"Vui lòng nhập thông tin!",
           
           
            avatar:{
            required:"Vui lòng nhập ảnh!",
            accept:"Vui lòng chọn định dạng là ảnh!"
            },
            class_name:"Vui lòng nhập thông tin!",
            status:"Vui lòng điền thông tin!"
              }

        });
    });
</script>
</body>
</html>