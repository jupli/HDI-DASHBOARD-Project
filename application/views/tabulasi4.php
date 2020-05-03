 
 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function($) {
    $(".table-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<style type="text/css">
.table-row{
cursor:pointer;
}

</style>
</head>
<body>

<div class="container">
  <h2>Table Data Hasil Pencarian Details</h2>
  <p>........</p>                                                                                      
  
  <div class="table-responsive ">
    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
        <!-- <th class="th-lg">Sr No</th> -->
        <th class="th-lg">Trans ID</th>
        <th class="th-lg">Trans Number</th>
        <th class="th-lg">Trans Number Origin</th>
        <th class="th-lg">Cust Country Code</th>
        <th class="th-lg">Customer Id</th>
        <th class="th-lg">Dist Country</th>
        <th class="th-lg">Dist Id</th>
        <th class="th-lg">Dist Name</th>
        <th class="th-lg">Csd Id</th>
        <th class="th-lg">Delivery Id</th>
        <th class="th-lg">Own Delivery Id</th>
        <th class="th-lg">Receiver Name</th>
        <th class="th-lg" rowspan="4">Address</th>
        <th class="th-lg"></th>
        <th class="th-lg"></th>
        <th class="th-lg"></th>
        <th class="th-lg">Mobile Number</th>
        <th class="th-lg">Prov Id</th>
        <th class="th-lg">City Id</th>
        <th class="th-lg">District Id</th>
        <th class="th-lg">Postal Code</th>
        <th class="th-lg">Lat Lng </th>
        <th class="th-lg">Map Address</th>
        <th class="th-lg">AWB Number</th>
        <th class="th-lg">Total Price</th>
        <th class="th-lg">Total BV</th>
        <th class="th-lg">Total BP</th>
        <th class="th-lg">Delivery Cost</th>
        <th class="th-lg">Discount Price</th>
        <th class="th-lg">Discount BV</th>
        <th class="th-lg">Final Price</th>
        <th class="th-lg">Final BV</th>
        <th class="th-lg">Final BP</th>
        <th class="th-lg">Payment Code</th>
        <th class="th-lg">isPaid</th>
        <th class="th-lg">Total Payment</th>
        <th class="th-lg">Total BV</th>
        <th class="th-lg">Trans Date</th>
        <th class="th-lg">Payment Date</th>
        

        </tr>
      </thead>
      <tbody>

<?php
$this->load->library('session');
//echo json_encode($data);
$pengenal=$this->session->userdata('ida');
echo $pengenal."<br>";



  $datas = array();

$this->dblib_shop->db_open(); // membuka koneksi database

// $w6 = "select * from Trans_Header where Trans_Id ='$pengenal' ";  // query string
// $w6 = "SELECT * FROM Trans_Header INNER JOIN Trans_Delivery ON Trans_Header.Trans_Id=Trans_Delivery.Trans_Id 
// WHERE Trans_Header.Trans_Id='$pengenal'";
$w6 = "SELECT * FROM Trans_Header INNER JOIN Trans_Payment ON Trans_Header.Trans_Id=Trans_Payment.Payment_Id 
WHERE Trans_Header.Trans_Id='$pengenal'";
$rs6 = $this->dblib_shop->query($w6); // syntax untuk menjalankan query
    
  // if ($rs !=''){
// 	echo $nokim;
// 	echo $penerima;
// 	echo "DATA ADA";
    //     return true;
    // }
    // else{
    //     return false;
    // }

while (!$rs6->EOF){  // syntax untuk fetch result query
  
  // --------- parsing result ke array ------- //
  $datas = array();
  foreach ($rs6->Fields as $v) {
    $datas[$v->Name] = trim($v->value);
  }
  // ------------------------------------------//
  
  print_r($datas);
  

// $this->dblib_shop->db_close(); // menutup koneksi database
//return $datas;
//$this->load->view('tabulasi1', $data2);




?>

      <?php



    //if(! empty($datas)) {
        
         
    // foreach($datas as $i )
    // {
        
//      $Trans_Id=$datas['Trans_Id'];
//     $Trans_Number=$datas['Trans_Number'];
//     $Trans_Number_Origin=$datas['Trans_Number_Origin'];
//     $Customer_Country_Code=$datas['Customer_Country_Code'];
//     $Customer_ID=$datas['Customer_ID'];
//     $Dist_Country_Code=$datas['Dist_Country_Code'];
//     $Dist_Id=$datas['Dist_Id'];
//     $Dist_Name=$datas['Dist_Name'];
//     $Csd_Id=$datas['Csd_Id'];
//     $Delivery_Id=$datas['Delivery_Id'];
//     $Own_Delivery_Id=$datas['Own_Delivery_Id'];
//     $Receiver_Name=$datas['Receiver_Name'];
//     $Address=$datas['Address'];
//     $Mobile_Number=$datas['Mobile_Number'];
//     $Province_Id=$datas['Province_Id'];
//     $City_Id=$datas['City_Id'];
//     $District_Id=$datas['District_Id'];
//     $Postal_Code=$datas['Postal_Code'];
//     $Lat_Lng=$datas['Lat_Lng'];
//     $Map_Address=$datas['Map_Address'];
//     $AWB_Number=$datas['AWB_Number'];
//     $Total_Price=$datas['Total_Price'];
//     $Total_BV=$datas['Total_BV'];
//     $Total_BP=$datas['Total_BP'];
//     $Delivery_Cost=$datas['Delivery_Cost'];
//     $Discount_Price=$datas['Discount_Price'];
//     $Discount_BV=$datas['Discount_BV'];
//     $Final_Price=$datas['Final_Price'];
//     $Final_BV=$datas['Final_BV'];
//     $Final_BP=$datas['Final_BP'];
//     $Payment_Code=$datas['Payment_Code'];
//     $isPaid=$datas['isPaid'];
//     $Total_Payment=$datas['Total_Payment'];
//     $Total_BV=$datas['Total_BV'];
//     $Trans_Date=$datas['Trans_Date'];
//     $Payment_Date=$datas['Payment_Date'];
    
    
// ?>

// <tr class="table-row" data-href="<?php echo base_url('index.php/login/ViewTransactionDetail')?><?php echo '/?id='.$Trans_Id ;?>">

// <td style="font-size:12px;"><?php echo $Trans_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Trans_Number;?> </td>
// <td style="font-size:12px;"><?php echo $Trans_Number_Origin;?> </td>
// <td style="font-size:12px;"><?php echo $Customer_Country_Code;?> </td>
// <td style="font-size:12px;"><?php echo $Customer_ID;?> </td> 
// <td style="font-size:12px;"><?php echo $Dist_Country_Code;?> </td>
// <td style="font-size:12px;"><?php echo $Dist_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Dist_Name;?> </td>
// <td style="font-size:12px;"><?php echo $Csd_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Delivery_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Own_Delivery_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Receiver_Name;?> </td>
// <td colspan="4" style="font-size:12px;"><?php echo $Address;?> </td>
// <td style="font-size:12px;"><?php echo $Mobile_Number;?> </td>
// <td style="font-size:12px;"><?php echo $Province_Id;?> </td>
// <td style="font-size:12px;"><?php echo $City_Id;?> </td>
// <td style="font-size:12px;"><?php echo $District_Id;?> </td>
// <td style="font-size:12px;"><?php echo $Postal_Code;?> </td>
// <td style="font-size:12px;"><?php echo $Lat_Lng;?> </td>
// <td style="font-size:12px;"><?php echo $Map_Address;?> </td>
// <td style="font-size:12px;"><?php echo $AWB_Number;?> </td>
// <td style="font-size:12px;"><?php echo $Total_Price;?> </td>
// <td style="font-size:12px;"><?php echo $Total_BV;?> </td>
// <td style="font-size:12px;"><?php echo $Total_BP;?> </td>
// <td style="font-size:12px;"><?php echo $Delivery_Cost;?> </td>
// <td style="font-size:12px;"><?php echo $Discount_Price;?> </td>
// <td style="font-size:12px;"><?php echo $Discount_BV;?> </td>
// <td style="font-size:12px;"><?php echo $Final_Price;?> </td>
// <td style="font-size:12px;"><?php echo $Final_BV;?> </td>
// <td style="font-size:12px;"><?php echo $Final_BP;?> </td>
// <td style="font-size:12px;"><?php echo $Payment_Code;?> </td>
// <td style="font-size:12px;"><?php echo $isPaid;?> </td>
// <td style="font-size:12px;"><?php echo $Total_Payment;?> </td>
// <td style="font-size:12px;"><?php echo $Total_BV;?> </td>
// <td style="font-size:12px;"><?php echo $Trans_Date;?> </td>
// <td style="font-size:12px;"><?php echo $Payment_Date;?> </td>


// </tr>

// <?php 
 
// }else{ // Jika data tidak ada
// echo "<tr><td colspan='4'>Data tidak ada</td></tr>";


 //}

 $rs6->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
  
}
$this->dblib_shop->db_close();

?> 
      </tbody>
    </table>
  </div>
</div>

</body>
</html>

