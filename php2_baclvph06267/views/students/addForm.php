    <?php 
$bacUrl="http://localhost/php2_baclvph06267/";
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
        <form action="<?=$baseUrl. "students-save-add" ?>" method="post" enctype="multipart/form-data" id="formDemo" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">full_name</label>
                        <input type="text" name="full_name" id="" class="form-control">
                      

                    </div>
                    <div class="form-group">
                        <label for="">birth_date</label>
                       <input type="date" name="birth_date" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">school_id</label>
                        <input type="number" name="school_id" id="" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" name="address" id="" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="">class_name</label>
                        <input type="text" name="class_name" id="" class="form-control">
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img-preview">
                        <img id="imageTarget" src="http://localhost/php2_baclvph06267/public/images/default-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sp</label>
                        <input type="file" id="product_image" name="avatar" id=""  class="form-control">
                    </div>
                </div>
                </div>
               
                <div class="col-12"> 
                <div class="justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary" id="">Lưu</button>
                    <a href="<?= $baseUrl ?>" class="btn btn-sm btn-danger">Hủy</a>
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
                    },
                      
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
<script type="text/javascript">
    $(document).ready(function(){
            $('#editor').wysihtml5();
          });
          function getBase64(file, selector) {
             var reader = new FileReader();
             reader.readAsDataURL(file);
             reader.onload = function () {
              $(selector).attr('src', reader.result);
             };
             reader.onerror = function (error) {
               console.log('Error: ', error);
             };
          }
          var img = document.querySelector('#product_image');
          img.onchange = function(){
            var file = this.files[0];
            if(file == undefined){
              $('#imageTarget').attr('src', "http://localhost/php2/lesson03/public/images/default-img.png");
            }else{
              getBase64(file, '#imageTarget');
            }
          }
</script>

</body>
</html>


    