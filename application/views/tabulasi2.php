 
 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table Data Hasil Pencarian</h2>
  <p>........</p>                                                                                      
  
  <div class="table-responsive ">
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
        <!-- <th>#</th> -->
        <th>Trans ID</th>
        <th>Trans Number</th>
        <th>Trans Number Origin</th>
        <th>Cust Country Code</th>
        <th>Customer Id</th>
        <th>Dist Country</th>
        <th>Dist Id</th>
        <th>Dist Name</th>
        <th>Csd Id</th>
        <th>Delivery Id</th>
        <th>Own Delivery Id</th>
        <th>Receiver Name</th>
        <th>Address</th>
        <th>Mobile Number</th>
        <th>Prov Id</th>
        <th>City Id</th>
        <th>District Id</th>
        <th>Postal Code</th>
        <th>Lat Lng </th>
        <th>Map Address</th>
        <th>AWB Number</th>
        <th>Total Price</th>
        <th>Total BV</th>
        <th>Total BP</th>
        <th>Delivery Cost</th>
        <th>Discount Price</th>
        <th>Discount BV</th>
        <th>Final Price</th>
        <th>Final BV</th>
        <th>Final BP</th>
        <th>Payment Code</th>
        <th>isPaid</th>
        <th>Total Payment</th>
        <th>Total BV</th>
        <th>Trans Date</th>
        <th>Payment Date</th>
        

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

<tr>

<td><?php echo $Trans_Id;?> </td>
<td><?php echo $Trans_Number;?> </td>
<td><?php echo $Trans_Number_Origin;?> </td>
<td><?php echo $Customer_Country_Code;?> </td>
<td><?php echo $Customer_ID;?> </td> 
<td><?php echo $Dist_Country_Code;?> </td>
<td><?php echo $Dist_Id;?> </td>
<td><?php echo $Dist_Name;?> </td>
<td><?php echo $Csd_Id;?> </td>
<td><?php echo $Delivery_Id;?> </td>
<td><?php echo $Own_Delivery_Id;?> </td>
<td><?php echo $Receiver_Name;?> </td>
<td><?php echo $Address;?> </td>
<td><?php echo $Mobile_Number;?> </td>
<td><?php echo $Province_Id;?> </td>
<td><?php echo $City_Id;?> </td>
<td><?php echo $District_Id;?> </td>
<td><?php echo $Postal_Code;?> </td>
<td><?php echo $Lat_Lng;?> </td>
<td><?php echo $Map_Address;?> </td>
<td><?php echo $AWB_Number;?> </td>
<td><?php echo $Total_Price;?> </td>
<td><?php echo $Total_BV;?> </td>
<td><?php echo $Total_BP;?> </td>
<td><?php echo $Delivery_Cost;?> </td>
<td><?php echo $Discount_Price;?> </td>
<td><?php echo $Discount_BV;?> </td>
<td><?php echo $Final_Price;?> </td>
<td><?php echo $Final_BV;?> </td>
<td><?php echo $Final_BP;?> </td>
<td><?php echo $Payment_Code;?> </td>
<td><?php echo $isPaid;?> </td>
<td><?php echo $Total_Payment;?> </td>
<td><?php echo $Total_BV;?> </td>
<td><?php echo $Trans_Date;?> </td>
<td><?php echo $Payment_Date;?> </td>


</tr>

<?php 

}else{ // Jika data tidak ada
echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}


?> 
      </tbody>
    </table>
  </div>
</div>

</body>
</html>



<!-- 















 
 <div class="row">
				<table id="example" class="table table-striped table-bordered table-responsive-lg" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Trans ID</th>
							<th>Trans Number</th>
							<th>Cust Country Code</th>
							<th>Customer Id</th>
							<th>Dist Country</th>
							<th>Dist Id</th>
							<th>Dist Name</th>
							<th>Csd Id</th>
							<th>Delivery Id</th>
							<th>Own Delivery Id</th>
							<th>Receiver Name</th>
							<th>Address</th>
							<th>Mobile Number</th>
							<th>Prov Id</th>
							<th>City Id</th>
							<th>District Id</th>
							<th>Postal Code</th>
							<th>Lat Lng </th>
							<th>Map Address</th>
							<th>AWB Number</th>
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
    }
?>

<tr>

<td><?php echo $Trans_Id;?> </td>
<td><?php echo $Trans_Number;?> </td>
<td><?php echo $Trans_Number_Origin;?> </td>
<td><?php echo $Customer_Country_Code;?> </td>
<td><?php echo $Customer_ID;?> </td> 

</tr>

<?php 

}else{ // Jika data tidak ada
echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}


?> 

</tbody>

</table>
</tbody>
</table> -->
