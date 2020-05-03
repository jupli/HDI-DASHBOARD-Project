
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





