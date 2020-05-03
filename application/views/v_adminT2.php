
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("tampilan1/head.php") ?>
	<link href="<?php echo base_url('gudang/dist/css/styles.css') ?>" rel="stylesheet">
	<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.7.2.js"
  integrity="sha256-FxfqH96M63WENBok78hchTCDxmChGFlo+/lFIPcZPeI="
  crossorigin="anonymous"></script>
</head>
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
<body id="page-top">

<?php $this->load->view("tampilan1/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("tampilan1/sidebar.php") ?>

<!-- 
		<h1>Login berhasil !</h1>
	<h2>Nomor Transaksi Pengiriman :, <?php echo $this->session->userdata("nama"); ?></h2>
	<h2>Hai, <?php echo $this->session->userdata("penerima"); ?></h2>
	<h2>Nama Penerima :<?php echo $this->session->userdata("namapen"); ?></h2>
	 -->

     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3 class="display-6">HASIL PENCARIAN DATA</h3>
      <p class="lead">Dari tabel hasil pencarian ini, Anda bisa meng "click" langsung untuk melihat detail transaski belanja, pengiriman, dan lain-lain.</p>
    </div>
	 
	 <div class="container-fluid">    


	 
    <div class="row">
				<div class="col-md-12" id="view">
 
  <div class="table-responsive ">
    <table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
        <!-- <th>#</th> -->
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

if(isset($data3)){

    //if(! empty($data3)) {
        
    foreach($data3 as $i )
    {
        
    $Trans_Id=$data3['Trans_Id'];
    $Trans_Number=$data3['Trans_Number'];
    $Trans_Number_Origin=$data3['Trans_Number_Origin'];
    $Customer_Country_Code=$data3['Customer_Country_Code'];
    $Customer_ID=$data3['Customer_ID'];
    $Dist_Country_Code=$data3['Dist_Country_Code'];
    $Dist_Id=$data3['Dist_Id'];
    $Dist_Name=$data3['Dist_Name'];
    $Csd_Id=$data3['Csd_Id'];
    $Delivery_Id=$data3['Delivery_Id'];
    $Own_Delivery_Id=$data3['Own_Delivery_Id'];
    $Receiver_Name=$data3['Receiver_Name'];
    $Address=$data3['Address'];
    $Mobile_Number=$data3['Mobile_Number'];
    $Province_Id=$data3['Province_Id'];
    $City_Id=$data3['City_Id'];
    $District_Id=$data3['District_Id'];
    $Postal_Code=$data3['Postal_Code'];
    $Lat_Lng=$data3['Lat_Lng'];
    $Map_Address=$data3['Map_Address'];
    $AWB_Number=$data3['AWB_Number'];
    $Total_Price=$data3['Total_Price'];
    $Total_BV=$data3['Total_BV'];
    $Total_BP=$data3['Total_BP'];
    $Delivery_Cost=$data3['Delivery_Cost'];
    $Discount_Price=$data3['Discount_Price'];
    $Discount_BV=$data3['Discount_BV'];
    $Final_Price=$data3['Final_Price'];
    $Final_BV=$data3['Final_BV'];
    $Final_BP=$data3['Final_BP'];
    $Payment_Code=$data3['Payment_Code'];
    $isPaid=$data3['isPaid'];
    $Total_Payment=$data3['Total_Payment'];
    $Total_BV=$data3['Total_BV'];
    $Trans_Date=$data3['Trans_Date'];
    $Payment_Date=$data3['Payment_Date'];
    
    }
?>

<tr class="table-row" data-href="<?php echo base_url('index.php/login/ViewTransactionDetail')?><?php echo '/?id='.$Trans_Id ;?>">

<td style="font-size:12px;"><?php echo $Trans_Id;?> </td>
<td style="font-size:12px;"><?php echo $Trans_Number;?> </td>
<td style="font-size:12px;"><?php echo $Trans_Number_Origin;?> </td>
<td style="font-size:12px;"><?php echo $Customer_Country_Code;?> </td>
<td style="font-size:12px;"><?php echo $Customer_ID;?> </td> 
<td style="font-size:12px;"><?php echo $Dist_Country_Code;?> </td>
<td style="font-size:12px;"><?php echo $Dist_Id;?> </td>
<td style="font-size:12px;"><?php echo $Dist_Name;?> </td>
<td style="font-size:12px;"><?php echo $Csd_Id;?> </td>
<td style="font-size:12px;"><?php echo $Delivery_Id;?> </td>
<td style="font-size:12px;"><?php echo $Own_Delivery_Id;?> </td>
<td style="font-size:12px;"><?php echo $Receiver_Name;?> </td>
<td colspan="4" style="font-size:12px;"><?php echo $Address;?> </td>
<td style="font-size:12px;"><?php echo $Mobile_Number;?> </td>
<td style="font-size:12px;"><?php echo $Province_Id;?> </td>
<td style="font-size:12px;"><?php echo $City_Id;?> </td>
<td style="font-size:12px;"><?php echo $District_Id;?> </td>
<td style="font-size:12px;"><?php echo $Postal_Code;?> </td>
<td style="font-size:12px;"><?php echo $Lat_Lng;?> </td>
<td style="font-size:12px;"><?php echo $Map_Address;?> </td>
<td style="font-size:12px;"><?php echo $AWB_Number;?> </td>
<td style="font-size:12px;"><?php echo $Total_Price;?> </td>
<td style="font-size:12px;"><?php echo $Total_BV;?> </td>
<td style="font-size:12px;"><?php echo $Total_BP;?> </td>
<td style="font-size:12px;"><?php echo $Delivery_Cost;?> </td>
<td style="font-size:12px;"><?php echo $Discount_Price;?> </td>
<td style="font-size:12px;"><?php echo $Discount_BV;?> </td>
<td style="font-size:12px;"><?php echo $Final_Price;?> </td>
<td style="font-size:12px;"><?php echo $Final_BV;?> </td>
<td style="font-size:12px;"><?php echo $Final_BP;?> </td>
<td style="font-size:12px;"><?php echo $Payment_Code;?> </td>
<td style="font-size:12px;"><?php echo $isPaid;?> </td>
<td style="font-size:12px;"><?php echo $Total_Payment;?> </td>
<td style="font-size:12px;"><?php echo $Total_BV;?> </td>
<td style="font-size:12px;"><?php echo $Trans_Date;?> </td>
<td style="font-size:12px;"><?php echo $Payment_Date;?> </td>


</tr>

<?php 

}else{ // Jika data tidak ada
echo "<tr><td colspan='16'>Data tidak ada</td></tr>";
}


?> 
      </tbody>
    </table>



<?php


  ?>
</div>

<!-- <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a> -->
	    
				</div>
</div>	




		<!-- Sticky Footer
		<?php $this->load->view("tampilan1/footer.php") ?>

	
</div>
</div>
<!-- /#wrapper -->

<?php $this->load->view("tampilan1/scrolltop.php") ?>
<?php $this->load->view("tampilan1/modal.php") ?>
<?php $this->load->view("tampilan1/js.php") ?>
    

</body>
</html>





