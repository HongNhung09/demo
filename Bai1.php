
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>

    <div class="container">
        <h3 class="text-uppercase text-center my-5">Bài 1 : Tính khoảng cách giữa 2 ngày bất kì</h3>
        <form action="" method="POST">

            Start Date : <input type="date" name="date1" class="form-control"> 
           
            End Date : <input type="date" name=" date2" class="form-control">
            <br />
        <input type="submit" name= "submit" class="btn btn-block btn-info"> 
            <!-- <button type="submit" name="submit"> Calculate difference now</button> -->

        </form>
    </div>
</body>

<!--  -->

</html>
<?php

if (isset($_POST['submit'])) {

    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    
 
    $diffData = abs(strtotime($date2) - strtotime($date1));
   
    $yearsDiff = floor($diffData / (365*60*60*24));
    print_r("Years:".$yearsDiff);
       
    $monthsDiff = floor(($diffData - $yearsDiff * 365*60*60*24) / (30*60*60*24));
    print_r(" Months:".$monthsDiff);
       
    $daysDiff = floor(($diffData - $yearsDiff * 365*60*60*24 - $monthsDiff*30*60*60*24)/ (60*60*24));
    print_r(" Days:".$daysDiff);
    // $dat1 = strtotime($date1);
    // $dat2 = strtotime($date2);

    // $diff = ($dat2 - $dat1) / 60 / 60 / 24;
//     định dạng ngày thang năm
//    echo "Ngày bắt đầu : " .date("d/m/Y",$dat1)."<br>";
//    echo "Ngày kết thúc : " .date("d/m/Y",$dat2)."<br>";
 
//    echo "Ngày bắt đầu : " .$date1;
//    echo "<br/>  Ngày kết thúc : " .$date2;
//    echo "<br/>Khoảng cách giữa 2 ngày  là :";
  
//     echo  $diff . ' days';
 
    
}
?>