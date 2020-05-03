
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


	 
	 <div class="container-fluid">    


	 <div style="position:relative;" class="bundle-form-wrapper">
    <form  action="<?php echo base_url('index.php/login/datacustomer'); ?>" method="POST">
        
        
        <div class="container">
            <div class="row centered-form">
                <div class="col">
                    <div class="card">
    
                        <div class="card-header text-center">
                       
                            <h4 class="card-title">FILTER PENCARIAN DATA</h4>
                        </div>
						
						<hr>
						
    
                        <div class="card-body" style="background:#80808036;">
                         
                                
                                <div class="list_wrapper">  
                                    <div class="row">
    
                                        <div class="w-auto p-3">
    
                                            <div class="form-group">  
        
        
        <div class="clonedInput" style="margin-bottom:4px; margin-left:90px;" id="input1">
            PILIH KRITERIA :
           
          
            
            <select class="hidden-itemname" name="X1itemname" style="height:32px;width:290px">
                <option value="Pilih Kriteria Pencarian" disabled="disabled">Please Select</option>
                <option value="Trans_Id">Nomor Trans Delivery Header ID</option>
                <option value="Trans_Number">Nomor Trans Delivery Number</option>
				<option value="Dist_Id">Distributor ID</option>
				<option value="Dist_Name">Nama Distributor</option>
			    <option value="Csd_Id">Nomor ID Csd</option>
				<option value="Delivery_Id">Nomor ID Pengiriman</option>
				<option value="Receiver_Name">Nama Penerima</option>
				<option value="Payment_Code">Kode Pembayaran</option>
				<option value="Trans_Date">Tanggal Transfer</option>
				<option value="Payment_Date">Tanggal Pembayaran</option>
                <option value="ALL">ALL</option>
                <option value="ALL2">ALL2</option>
				
              
                </select>

                <input type="text" class="hidden-quantity" value="" name="X1quantity" placeholder="Masukan variabel nilai dikolom ini" style="width:250px">
        </div>
    </div>
</div>
</div>
</div>
		<div class="w-100">
        <div style="position:relative;">
            <button class="btn btn-primary list_add_button" type="button" value="Add another course" id="add">+</button>
            <!-- <input type="button" value="Add another course" id="add"> -->
            <button class="btn btn-danger list_add_button" type="button" value="Remove course" id="remove" disabled="disabled">-</button>
            <!-- <input type="button" value="Remove course" id="remove" disabled="disabled"> -->
            <input type="submit" value="login" id="submit_button" class="button" disabled="disabled">
        
        </div>
		</div>
        
      
    </div>

</div>
</div>
</div>


    </form>
</div>
<br>


	 <!-- <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-5">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Filter 1</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select> 
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 p-5">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Filter 2</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-5">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Filter 3</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-5">
                            <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> -->

    <div class="row">
				<div class="col-md-12" id="view">
 
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

if(isset($data)){

    //if(! empty($data)) {
        
    foreach($data as $i )
    {
        
    $Trans_Id=$data['Trans_Id'];
    $Trans_Number=$data['Trans_Number'];
    $Trans_Number_Origin=$data['Trans_Number_Origin'];
    $Customer_Country_Code=$data['Customer_Country_Code'];
    $Customer_ID=$data['Customer_ID'];
    $Dist_Country_Code=$data['Dist_Country_Code'];
    $Dist_Id=$data['Dist_Id'];
    $Dist_Name=$data['Dist_Name'];
    $Csd_Id=$data['Csd_Id'];
    $Delivery_Id=$data['Delivery_Id'];
    $Own_Delivery_Id=$data['Own_Delivery_Id'];
    $Receiver_Name=$data['Receiver_Name'];
    $Address=$data['Address'];
    $Mobile_Number=$data['Mobile_Number'];
    $Province_Id=$data['Province_Id'];
    $City_Id=$data['City_Id'];
    $District_Id=$data['District_Id'];
    $Postal_Code=$data['Postal_Code'];
    $Lat_Lng=$data['Lat_Lng'];
    $Map_Address=$data['Map_Address'];
    $AWB_Number=$data['AWB_Number'];
    $Total_Price=$data['Total_Price'];
    $Total_BV=$data['Total_BV'];
    $Total_BP=$data['Total_BP'];
    $Delivery_Cost=$data['Delivery_Cost'];
    $Discount_Price=$data['Discount_Price'];
    $Discount_BV=$data['Discount_BV'];
    $Final_Price=$data['Final_Price'];
    $Final_BV=$data['Final_BV'];
    $Final_BP=$data['Final_BP'];
    $Payment_Code=$data['Payment_Code'];
    $isPaid=$data['isPaid'];
    $Total_Payment=$data['Total_Payment'];
    $Total_BV=$data['Total_BV'];
    $Trans_Date=$data['Trans_Date'];
    $Payment_Date=$data['Payment_Date'];
    
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
</body>



		<!-- Sticky Footer
		<?php $this->load->view("tampilan1/footer.php") ?>

	
</div>
</div>
<!-- /#wrapper -->

<?php $this->load->view("tampilan1/scrolltop.php") ?>
<?php $this->load->view("tampilan1/modal.php") ?>
<?php $this->load->view("tampilan1/js.php") ?>
    
<script>
jQuery("#add").click(function() {
                                var num = jQuery(".clonedInput").length; 
                                var previousDom = jQuery('#input' + num);
                                var newNum = new Number(num + 1); 
                                var newElem = jQuery('#input' + num).clone().attr('id', 'input' + newNum); 
                                                                
                                newElem.children(".hidden-itemname").attr('name', 'X' + newNum + 'itemname'); //
                                newElem.children(".hidden-quantity").attr('name', 'X' + newNum + 'quantity'); //
                                // newElem.children(".hidden-storeid").attr('name', 'X' + newNum + 'storeid'); //
                                // newElem.children(".hidden-include").attr('name', 'X' + newNum + 'include'); //
                                // newElem.children(".hidden-fixedquantity").attr('name', 'X' + newNum + 'fixedquantity'); //
                                
                                newElem.children(".hidden-itemname").children("option[value='"+ previousDom.children(".hidden-itemname").val() +"']").attr('disabled', 'disabled').next().attr('selected','selected');
                                //previousDom.children(".hidden-itemname").attr('disabled', 'disabled');
                                
                                jQuery('#input' + num).after(newElem); // 
                                jQuery("#remove").removeAttr('disabled', 'disabled'); // 
                                
                                if (newNum == 3) { jQuery("#add").attr('disabled', 'disabled'); } //                  
                                if (newNum == 3) { jQuery("#submit_button").removeAttr('disabled', 'disabled'); } // 
                            });
                            
                            jQuery("#remove").click(function() {
                                var num = jQuery(".clonedInput").length; // 
                                var previousDom = jQuery('#input' + (num - 1));
                                                                                                
                                jQuery('#input' + num).remove(); // 
                                jQuery("#add").removeAttr('disabled', 'disabled'); // 
                                jQuery("#submit_button").attr('disabled', 'disabled'); // 
                                
                                if (num - 1 == 1) {
                                    jQuery("#remove").attr('disabled', 'disabled'); // 
                                }
                                
                                //previousDom.children(".hidden-itemname").removeAttr('disabled', 'disabled');
                            });
                            
                            jQuery("#remove").attr('disabled', 'disabled');
                            jQuery("#submit_button").attr('disabled', 'disabled');
</script>


</body>
</html>





