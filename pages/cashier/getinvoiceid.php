<?php 
include('connect.php');
$table_number=$_GET['table_number'];

    $result = $db->prepare("SELECT * FROM sales_order WHERE table_number = '$table_number'");
    $result->execute();
    if ($result->fetch() > 0){
        $stmt = $db->prepare("SELECT * FROM sales_order WHERE table_number = '$table_number'"); 
        $stmt->execute(); 
        $row = $stmt->fetch();
        $invoiceID = $row['invoice'];
        header("location: sales.php?invoice=$invoiceID&table_number=$table_number");
        die();

    }  else {
        header("location: sales.php?invoice=&table_number=");
                die();
    }

?>
