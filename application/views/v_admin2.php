
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("tampilan1/head.php") ?>
	<link href="<?php echo base_url('gudang/dist/css/styles.css') ?>" rel="stylesheet">
	<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.7.2.js"
  integrity="sha256-FxfqH96M63WENBok78hchTCDxmChGFlo+/lFIPcZPeI="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <table class="table table-bordered table-hover">
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
$namas=$this->session->userdata('namas');
$penerimas=$this->session->userdata('penerimas');
echo $namas."<br>";
echo $penerimas."<br>";
$namas2=$namas;
$penerimas2=$penerimas;


  $data5 = array();

$this->dblib_shop->db_open(); // membuka koneksi database

$w5 = "select * from Trans_Header where $namas2 ='$penerimas2' ";  // query string
$rs5 = $this->dblib_shop->query($w5); // syntax untuk menjalankan query
    
  // if ($rs !=''){
// 	echo $nokim;
// 	echo $penerima;
// 	echo "DATA ADA";
    //     return true;
    // }
    // else{
    //     return false;
    // }

while (!$rs5->EOF){  // syntax untuk fetch result query
  
  // --------- parsing result ke array ------- //
  $data5 = array();
  foreach ($rs5->Fields as $v) {
    $data5[$v->Name] = trim($v->value);
  }
  // ------------------------------------------//
  
  //print_r($data5);
  

// $this->dblib_shop->db_close(); // menutup koneksi database
//return $data5;
//$this->load->view('tabulasi1', $data2);




?>

      <?php



    //if(! empty($data5)) {
        
         
    // foreach($data5 as $i )
    // {
        
     $Trans_Id=$data5['Trans_Id'];
    $Trans_Number=$data5['Trans_Number'];
    $Trans_Number_Origin=$data5['Trans_Number_Origin'];
    $Customer_Country_Code=$data5['Customer_Country_Code'];
    $Customer_ID=$data5['Customer_ID'];
    $Dist_Country_Code=$data5['Dist_Country_Code'];
    $Dist_Id=$data5['Dist_Id'];
    $Dist_Name=$data5['Dist_Name'];
    $Csd_Id=$data5['Csd_Id'];
    $Delivery_Id=$data5['Delivery_Id'];
    $Own_Delivery_Id=$data5['Own_Delivery_Id'];
    $Receiver_Name=$data5['Receiver_Name'];
    $Address=$data5['Address'];
    $Mobile_Number=$data5['Mobile_Number'];
    $Province_Id=$data5['Province_Id'];
    $City_Id=$data5['City_Id'];
    $District_Id=$data5['District_Id'];
    $Postal_Code=$data5['Postal_Code'];
    $Lat_Lng=$data5['Lat_Lng'];
    $Map_Address=$data5['Map_Address'];
    $AWB_Number=$data5['AWB_Number'];
    $Total_Price=$data5['Total_Price'];
    $Total_BV=$data5['Total_BV'];
    $Total_BP=$data5['Total_BP'];
    $Delivery_Cost=$data5['Delivery_Cost'];
    $Discount_Price=$data5['Discount_Price'];
    $Discount_BV=$data5['Discount_BV'];
    $Final_Price=$data5['Final_Price'];
    $Final_BV=$data5['Final_BV'];
    $Final_BP=$data5['Final_BP'];
    $Payment_Code=$data5['Payment_Code'];
    $isPaid=$data5['isPaid'];
    $Total_Payment=$data5['Total_Payment'];
    $Total_BV=$data5['Total_BV'];
    $Trans_Date=$data5['Trans_Date'];
    $Payment_Date=$data5['Payment_Date'];
    
    
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
 
// }else{ // Jika data tidak ada
// echo "<tr><td colspan='4'>Data tidak ada</td></tr>";


 //}

 $rs5->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
  
}
$this->dblib_shop->db_close();

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





