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
        <form action="<?=$baseUrl. "schools-save-add" ?>" method="post" enctype="multipart/form-data" id="formDemo" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                        <?php if(isset($_GET['nameerr'])):?>
                            <span class="text-danger"><?= $_GET['nameerr'] ?></span>
                        <?php endif?>

                    </div>
                    <div class="form-group">
                        <label for="">slogan</label>
                       <input type="number" name="slogan" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" name="address" id="" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="">cveated_year</label>
                        <input type="date" name="cveated_year" id="" class="form-control">
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img-preview">
                        <img id="imageTarget" src="http://localhost/php2_baclvph06267/public/images/default-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sp</label>
                        <input type="file" id="product_image" name="logo" id=""  class="form-control">
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
                name: "required",
                cveated_year: "required",            
                logo:
                {
                    required:true,
                     accept: "image/*"

            },
                slogan:{
                    required:true,
                    max:30
                    },
                address:"required",
                required:"required",
               
            },
          

            messages: {
            name: "Vui lòng nhập tên!",
            slogan:{
                required:"Vui lòng nhập thông tin!",
                max:"Không được vượt quá 30!"
               },
            address:"Vui lòng nhập thông tin!",
            cveated_year:"Vui lòng nhập thông tin!",
           
           
            logo:{
            required:"Vui lòng nhập ảnh!",
            accept:"Vui lòng chọn định dạng là ảnh!"
            }
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


    