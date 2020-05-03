
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
      <h3 class="display-6">HASIL PENCARIAN DETAIL</h3>
      <!-- <p class="lead">Dari tabel hasil pencarian ini, Anda bisa meng "click" langsung untuk melihat detail transaski belanja, pengiriman, dan lain-lain.</p> -->
    </div>
	 
	 <div class="container-fluid">    


	 
     <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detail Pembayaran</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Detail Transaksi</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Detail Pengiriman</a>
                            </div>
                        </nav>
                        <div class="tab-content table-responsive" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th class="th-lg">Trans ID</th>
                                        <th class="th-lg">Trans Number</th>
                                        <th class="th-lg">Costumer ID</th>
                                        <th class="th-lg">Costumer Name</th>
                                        <th class="th-lg">Payment Trans Code</th>
                                        <th class="th-lg">Payment Code</th>
                                        <th class="th-lg">Total</th>
                                        <th class="th-lg">Admin Fee</th>
                                        <th class="th-lg">Status</th>
                                        <th class="th-lg">Transaction Date</th>
                                        <th class="th-lg">Payment Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                                $this->load->library('session');
                                                //echo json_encode($data);
                                                $pengenal=$this->session->userdata('ida');
                                                //echo $pengenal."<br>";



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
                                                
                                               // print_r($datas);
                                                

                                                // $this->dblib_shop->db_close(); // menutup koneksi database
                                                //return $datas;
                                                //$this->load->view('tabulasi1', $data2);


                                                ?>

                                                    <?php
                                                     // if(! empty($datas)) {
                                                            // foreach($datas as $i )
                                                            // {
                                                                
                                                            $Trans_Id=$datas['Trans_Id'];
                                                            $Trans_Number=$datas['Trans_Number'];
                                                            $Customer_ID=$datas['Customer_ID'];
                                                            $Customer_Name=$datas['Customer_Name'];
                                                            $Payment_Trans_Code=$datas['Payment_Trans_Code'];
                                                            $Payment_Code=$datas['Payment_Code'];
                                                            $Total=$datas['Total'];
                                                            $Admin_Fee=$datas['Admin_Fee'];
                                                            $Status=$datas['Status'];
                                                            $Transaction_Date=$datas['Transaction_Date'];
                                                            $Payment_Date=$datas['Payment_Date'];
                                                    ?>

                                         <tr>                       
                                        <td style="font-size:12px;"><?php echo $Trans_Id;?> </td>
                                        <td style="font-size:12px;"><?php echo $Trans_Number;?> </td>
                                        <td style="font-size:12px;"><?php echo $Customer_ID;?> </td>
                                        <td style="font-size:12px;"><?php echo $Customer_Name;?> </td>
                                        <td style="font-size:12px;"><?php echo $Payment_Trans_Code;?> </td>
                                        <td style="font-size:12px;"><?php echo $Payment_Code;?> </td>
                                        <td style="font-size:12px;"><?php echo $Total;?> </td>
                                        <td style="font-size:12px;"><?php echo $Admin_Fee;?> </td>
                                        <td style="font-size:12px;"><?php echo $Status;?> </td>
                                        <td style="font-size:12px;"><?php echo $Transaction_Date;?> </td>
                                        <td style="font-size:12px;"><?php echo $Payment_Date;?> </td>

                                        </tr>
                                        <?php 
 
                                            // }else{ // Jika data tidak ada
                                            // echo "<tr><td colspan='4'>Data tidak ada</td></tr>";


                                           // }

                                            $rs6->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
                                            
                                            }
                                            $this->dblib_shop->db_close();

                                            ?> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th class="th-lg">Trans ID</th>
                                        <th class="th-lg">Trans Number</th>
                                        <th class="th-lg">Costumer ID</th>
                                        <th class="th-lg">Product_Code</th>
                                        <th class="th-lg">Product_Price</th>
                                        <th class="th-lg">Product_BV</th>
                                        <th class="th-lg">Product_BP</th>
                                        <th class="th-lg">Product_Weight</th>
                                        <th class="th-lg">Product_Quantity</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                                $this->load->library('session');
                                                //echo json_encode($data);
                                                $pengenal=$this->session->userdata('ida');
                                                //echo $pengenal."<br>";



                                                $datas = array();

                                                $this->dblib_shop->db_open(); // membuka koneksi database

                                                // $w6 = "select * from Trans_Header where Trans_Id ='$pengenal' ";  // query string
                                                // $w6 = "SELECT * FROM Trans_Header INNER JOIN Trans_Delivery ON Trans_Header.Trans_Id=Trans_Delivery.Trans_Id 
                                                // WHERE Trans_Header.Trans_Id='$pengenal'";
                                                $w6 = "SELECT * FROM Trans_Header INNER JOIN Trans_Detail ON Trans_Header.Trans_Id=Trans_Detail.Trans_Detail_Id 
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
                                                
                                               // print_r($datas);
                                                

                                                // $this->dblib_shop->db_close(); // menutup koneksi database
                                                //return $datas;
                                                //$this->load->view('tabulasi1', $data2);


                                                ?>

                                                    <?php
                                                     // if(! empty($datas)) {
                                                            // foreach($datas as $i )
                                                            // {
                                                                
                                                            $Trans_Id=$datas['Trans_Id'];
                                                            $Trans_Number=$datas['Trans_Number'];
                                                            $Customer_ID=$datas['Customer_ID'];
                                                            $Product_Code=$datas['Product_Code'];
                                                            $Product_Price=$datas['Product_Price'];
                                                            $Product_BV=$datas['Product_BV'];
                                                            $Product_BP=$datas['Product_BP'];
                                                            $Product_Weight=$datas['Product_Weight'];
                                                            $Product_Quantity=$datas['Product_Quantity'];
                                                            
                                                    ?>

                                         <tr>                       
                                        <td style="font-size:12px;"><?php echo $Trans_Id;?> </td>
                                        <td style="font-size:12px;"><?php echo $Trans_Number;?> </td>
                                        <td style="font-size:12px;"><?php echo $Customer_ID;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_Code;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_Price;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_BV;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_BP;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_Weight;?> </td>
                                        <td style="font-size:12px;"><?php echo $Product_Quantity;?> </td>
                                       

                                        </tr>
                                        <?php 
 
                                            // }else{ // Jika data tidak ada
                                            // echo "<tr><td colspan='4'>Data tidak ada</td></tr>";


                                           // }

                                            $rs6->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
                                            
                                            }
                                            $this->dblib_shop->db_close();

                                            ?> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Contest Name</th>
                                            <th>Date</th>
                                            <th>Award Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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





