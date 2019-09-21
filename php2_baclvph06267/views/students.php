<?php 
$baseUrl= "http://localhost/php2_baclvph06267/";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>
      <style type="text/css">
        td{
            font-size: 18px;
        }

    </style>
    <table border="solid" ">
       
        <tr>
            <th>ID</th>
            <th> Name</th>
            
            <th>birth_date</th>
            <th> Image</th>
            <th>school_id</th>
             <th>address</th>
             <th>class_name</th>
             <th>status</th>
            <th>
                <a href="<?="http://localhost/php2_baclvph06267/students-add" ?>">
                    Thêm mới
                </a>
            </th>
        </tr>
        <?php foreach($students as $item) :?>
            <tr>
                <td><?= $item->id ?></td>
                <td width="300px"><?= $item->full_name ?></td>
                
                <td width="300px"><?= $item->birth_date ?></td>
                <td>
                    <img src="<?= "public/" . $item->avatar?>" width="150">
                </td>
                 <td>
                    <?= $item->school_id  ?>
                </td>
                 <td>
                    <?= $item->class_name ?>
                </td>
                 <td>
                    <?= $item->status ?>
                </td>
                 <td>
                    <a href="<?= $baseUrl . "students-edit?id=" . $item->id?>">
                        Sửa
                    </a>
                </td>
                <td width="100px">

                    <a href="javascript:;"
                    linkurl="<?= $baseUrl ."students-remove?id=" . $item->id?>" class="btn-remove" >
                         Xóa

                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
      <br>
   
<script type="text/javascript">

  $('.btn-remove').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá sản phẩm này không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>
</html>