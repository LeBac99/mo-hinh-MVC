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
            
            <th>slogan</th>
            <th>logo</th>
            <th>address</th>
             <th>cveated_year</th>
            <th>
                <a href="<?="http://localhost/php2_baclvph06267/schools-add" ?>">
                    Thêm mới
                </a>
            </th>
        </tr>
        <?php foreach($schools as $item) :?>
            <tr>
                <td><?= $item->id ?></td>
                <td width="300px"><?= $item->name ?></td>
                
                <td width="300px"><?= $item->slogan ?></td>
                <td>
                    <img src="<?= "public/" . $item->logo ?>" width="150">
                </td>
                 <td>
                    <?= $item->address  ?>
                </td>
                 <td>
                    <?= $item->cveated_year  ?>
                </td>
                 <td>
                    <a href="<?= $baseUrl . "schools-edit?id=" . $item->id?>">
                        Sửa
                    </a>
                </td>
                <td width="100px">

                    <a href="javascript:;"
                    linkurl="<?= $baseUrl ."schools-remove?id=" . $item->id?>" class="btn-remove" >
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