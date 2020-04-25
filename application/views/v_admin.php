
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("tampilan1/head.php") ?>
	<link href="<?php echo base_url('gudang/dist/css/styles.css') ?>" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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
    <form method="post" action="#" id="myForm">
        
        
        <div class="container">
            <div class="row centered-form">
                <div class="col">
                    <div class="card">
    
                        <div class="card-header text-center">
                       
                            <h4 class="card-title">FILTER PENCARIAN DATA</h4>
                        </div>
						
						<hr>
						
    
                        <div class="card-body" style="background:#80808036;">
                            <form role="form" method="post" action="">
                                
                                <div class="list_wrapper">  
                                    <div class="row">
    
                                        <div class="w-auto p-3">
    
                                            <div class="form-group">  
        
        
        <div class="clonedInput" style="margin-bottom:4px; margin-left:90px;" id="input1">
            PILIH KRITERIA :
           
          
            
            <select class="hidden-itemname" name="X1itemname" style="height:32px;width:290px">
                <option value="Pilih Kriteria Pencarian" disabled="disabled">Please Select</option>
                <option value="Trans_Delivery_Header_Id">Nomor Trans Delivery Header ID</option>
                <option value="Trans_Delivery_Number">Nomor Trans Delivery Number</option>
				<option value="Dist_Id">Distributor ID</option>
				<option value="Dist_Name">Nama Distributor</option>
			    <option value="Csd_Id">Nomor ID Csd</option>
				<option value="Delivery_Id">Nomor ID Pengiriman</option>
				<option value="Receiver_Name">Nama Penerima</option>
				<option value="Payment_Code">Kode Pembayaran</option>
				<option value="Trans_Date">Tanggal Transfer</option>
				<option value="Payment_Date">Tanggal Pembayaran</option>
				
              
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
            <input type="submit" value="submit" id="submit_button" class="button" disabled="disabled">
        
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
				<table id="example" class="table table-striped table-bordered table-responsive-lg" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td>2011/07/25</td>
							<td>$170,750</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td>2009/01/12</td>
							<td>$86,000</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2012/03/29</td>
							<td>$433,060</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td>2008/11/28</td>
							<td>$162,700</td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>New York</td>
							<td>61</td>
							<td>2012/12/02</td>
							<td>$372,000</td>
						</tr>
						<tr>
							<td>Herrod Chandler</td>
							<td>Sales Assistant</td>
							<td>San Francisco</td>
							<td>59</td>
							<td>2012/08/06</td>
							<td>$137,500</td>
						</tr>
						<tr>
							<td>Rhona Davidson</td>
							<td>Integration Specialist</td>
							<td>Tokyo</td>
							<td>55</td>
							<td>2010/10/14</td>
							<td>$327,900</td>
						</tr>
						<tr>
							<td>Colleen Hurst</td>
							<td>Javascript Developer</td>
							<td>San Francisco</td>
							<td>39</td>
							<td>2009/09/15</td>
							<td>$205,500</td>
						</tr>
						<tr>
							<td>Sonya Frost</td>
							<td>Software Engineer</td>
							<td>Edinburgh</td>
							<td>23</td>
							<td>2008/12/13</td>
							<td>$103,600</td>
						</tr>
						<tr>
							<td>Jena Gaines</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>30</td>
							<td>2008/12/19</td>
							<td>$90,560</td>
						</tr>
						<tr>
							<td>Quinn Flynn</td>
							<td>Support Lead</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2013/03/03</td>
							<td>$342,000</td>
						</tr>
						<tr>
							<td>Charde Marshall</td>
							<td>Regional Director</td>
							<td>San Francisco</td>
							<td>36</td>
							<td>2008/10/16</td>
							<td>$470,600</td>
						</tr>
						<tr>
							<td>Haley Kennedy</td>
							<td>Senior Marketing Designer</td>
							<td>London</td>
							<td>43</td>
							<td>2012/12/18</td>
							<td>$313,500</td>
						</tr>
						<tr>
							<td>Tatyana Fitzpatrick</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>19</td>
							<td>2010/03/17</td>
							<td>$385,750</td>
						</tr>
						<tr>
							<td>Michael Silva</td>
							<td>Marketing Designer</td>
							<td>London</td>
							<td>66</td>
							<td>2012/11/27</td>
							<td>$198,500</td>
						</tr>
						<tr>
							<td>Paul Byrd</td>
							<td>Chief Financial Officer (CFO)</td>
							<td>New York</td>
							<td>64</td>
							<td>2010/06/09</td>
							<td>$725,000</td>
						</tr>
						<tr>
							<td>Gloria Little</td>
							<td>Systems Administrator</td>
							<td>New York</td>
							<td>59</td>
							<td>2009/04/10</td>
							<td>$237,500</td>
						</tr>
						<tr>
							<td>Bradley Greer</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>41</td>
							<td>2012/10/13</td>
							<td>$132,000</td>
						</tr>
						<tr>
							<td>Dai Rios</td>
							<td>Personnel Lead</td>
							<td>Edinburgh</td>
							<td>35</td>
							<td>2012/09/26</td>
							<td>$217,500</td>
						</tr>
						<tr>
							<td>Jenette Caldwell</td>
							<td>Development Lead</td>
							<td>New York</td>
							<td>30</td>
							<td>2011/09/03</td>
							<td>$345,000</td>
						</tr>
						<tr>
							<td>Yuri Berry</td>
							<td>Chief Marketing Officer (CMO)</td>
							<td>New York</td>
							<td>40</td>
							<td>2009/06/25</td>
							<td>$675,000</td>
						</tr>
						<tr>
							<td>Caesar Vance</td>
							<td>Pre-Sales Support</td>
							<td>New York</td>
							<td>21</td>
							<td>2011/12/12</td>
							<td>$106,450</td>
						</tr>
						<tr>
							<td>Doris Wilder</td>
							<td>Sales Assistant</td>
							<td>Sidney</td>
							<td>23</td>
							<td>2010/09/20</td>
							<td>$85,600</td>
						</tr>
						<tr>
							<td>Angelica Ramos</td>
							<td>Chief Executive Officer (CEO)</td>
							<td>London</td>
							<td>47</td>
							<td>2009/10/09</td>
							<td>$1,200,000</td>
						</tr>
						<tr>
							<td>Gavin Joyce</td>
							<td>Developer</td>
							<td>Edinburgh</td>
							<td>42</td>
							<td>2010/12/22</td>
							<td>$92,575</td>
						</tr>
						<tr>
							<td>Jennifer Chang</td>
							<td>Regional Director</td>
							<td>Singapore</td>
							<td>28</td>
							<td>2010/11/14</td>
							<td>$357,650</td>
						</tr>
						<tr>
							<td>Brenden Wagner</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>28</td>
							<td>2011/06/07</td>
							<td>$206,850</td>
						</tr>
						<tr>
							<td>Fiona Green</td>
							<td>Chief Operating Officer (COO)</td>
							<td>San Francisco</td>
							<td>48</td>
							<td>2010/03/11</td>
							<td>$850,000</td>
						</tr>
						<tr>
							<td>Shou Itou</td>
							<td>Regional Marketing</td>
							<td>Tokyo</td>
							<td>20</td>
							<td>2011/08/14</td>
							<td>$163,000</td>
						</tr>
						<tr>
							<td>Michelle House</td>
							<td>Integration Specialist</td>
							<td>Sidney</td>
							<td>37</td>
							<td>2011/06/02</td>
							<td>$95,400</td>
						</tr>
						<tr>
							<td>Suki Burks</td>
							<td>Developer</td>
							<td>London</td>
							<td>53</td>
							<td>2009/10/22</td>
							<td>$114,500</td>
						</tr>
						<tr>
							<td>Prescott Bartlett</td>
							<td>Technical Author</td>
							<td>London</td>
							<td>27</td>
							<td>2011/05/07</td>
							<td>$145,000</td>
						</tr>
						<tr>
							<td>Gavin Cortez</td>
							<td>Team Leader</td>
							<td>San Francisco</td>
							<td>22</td>
							<td>2008/10/26</td>
							<td>$235,500</td>
						</tr>
						<tr>
							<td>Martena Mccray</td>
							<td>Post-Sales support</td>
							<td>Edinburgh</td>
							<td>46</td>
							<td>2011/03/09</td>
							<td>$324,050</td>
						</tr>
						<tr>
							<td>Unity Butler</td>
							<td>Marketing Designer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/12/09</td>
							<td>$85,675</td>
						</tr>
						<tr>
							<td>Howard Hatfield</td>
							<td>Office Manager</td>
							<td>San Francisco</td>
							<td>51</td>
							<td>2008/12/16</td>
							<td>$164,500</td>
						</tr>
						<tr>
							<td>Hope Fuentes</td>
							<td>Secretary</td>
							<td>San Francisco</td>
							<td>41</td>
							<td>2010/02/12</td>
							<td>$109,850</td>
						</tr>
						<tr>
							<td>Vivian Harrell</td>
							<td>Financial Controller</td>
							<td>San Francisco</td>
							<td>62</td>
							<td>2009/02/14</td>
							<td>$452,500</td>
						</tr>
						<tr>
							<td>Timothy Mooney</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>37</td>
							<td>2008/12/11</td>
							<td>$136,200</td>
						</tr>
						<tr>
							<td>Jackson Bradshaw</td>
							<td>Director</td>
							<td>New York</td>
							<td>65</td>
							<td>2008/09/26</td>
							<td>$645,750</td>
						</tr>
						<tr>
							<td>Olivia Liang</td>
							<td>Support Engineer</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2011/02/03</td>
							<td>$234,500</td>
						</tr>
						<tr>
							<td>Bruno Nash</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>38</td>
							<td>2011/05/03</td>
							<td>$163,500</td>
						</tr>
						<tr>
							<td>Sakura Yamamoto</td>
							<td>Support Engineer</td>
							<td>Tokyo</td>
							<td>37</td>
							<td>2009/08/19</td>
							<td>$139,575</td>
						</tr>
						<tr>
							<td>Thor Walton</td>
							<td>Developer</td>
							<td>New York</td>
							<td>61</td>
							<td>2013/08/11</td>
							<td>$98,540</td>
						</tr>
						<tr>
							<td>Finn Camacho</td>
							<td>Support Engineer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/07/07</td>
							<td>$87,500</td>
						</tr>
						<tr>
							<td>Serge Baldwin</td>
							<td>Data Coordinator</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2012/04/09</td>
							<td>$138,575</td>
						</tr>
						<tr>
							<td>Zenaida Frank</td>
							<td>Software Engineer</td>
							<td>New York</td>
							<td>63</td>
							<td>2010/01/04</td>
							<td>$125,250</td>
						</tr>
						<tr>
							<td>Zorita Serrano</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>56</td>
							<td>2012/06/01</td>
							<td>$115,000</td>
						</tr>
						<tr>
							<td>Jennifer Acosta</td>
							<td>Junior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>43</td>
							<td>2013/02/01</td>
							<td>$75,650</td>
						</tr>
						<tr>
							<td>Cara Stevens</td>
							<td>Sales Assistant</td>
							<td>New York</td>
							<td>46</td>
							<td>2011/12/06</td>
							<td>$145,600</td>
						</tr>
						<tr>
							<td>Hermione Butler</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>47</td>
							<td>2011/03/21</td>
							<td>$356,250</td>
						</tr>
						<tr>
							<td>Lael Greer</td>
							<td>Systems Administrator</td>
							<td>London</td>
							<td>21</td>
							<td>2009/02/27</td>
							<td>$103,500</td>
						</tr>
						<tr>
							<td>Jonas Alexander</td>
							<td>Developer</td>
							<td>San Francisco</td>
							<td>30</td>
							<td>2010/07/14</td>
							<td>$86,500</td>
						</tr>
						<tr>
							<td>Shad Decker</td>
							<td>Regional Director</td>
							<td>Edinburgh</td>
							<td>51</td>
							<td>2008/11/13</td>
							<td>$183,000</td>
						</tr>
						<tr>
							<td>Michael Bruce</td>
							<td>Javascript Developer</td>
							<td>Singapore</td>
							<td>29</td>
							<td>2011/06/27</td>
							<td>$183,000</td>
						</tr>
						<tr>
							<td>Donna Snider</td>
							<td>Customer Support</td>
							<td>New York</td>
							<td>27</td>
							<td>2011/01/25</td>
							<td>$112,000</td>
						</tr>
					</tbody>
				</table>
				
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	    
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
                                
                                if (newNum == 9) { jQuery("#add").attr('disabled', 'disabled'); } //                  
                                if (newNum >= 1) { jQuery("#submit_button").removeAttr('disabled', 'disabled'); } // 
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





