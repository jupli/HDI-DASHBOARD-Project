<!-- Sidebar -->
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link <?php if($this->uri->uri_string() == 'admin') { echo 'active'; } ?>" href="<?php echo base_url('index.php/admin','refresh'); ?>"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                           
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link <?php if($this->uri->uri_string() == 'admin1') { echo 'active'; } ?>" href="<?php echo base_url('index.php/admin1','refresh'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                SEARCH DATA</a>
                                <a class="nav-link " href="#"><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                MENU KEDUA</a>
                                <a class="nav-link " href="#"><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                MENU KETIGA</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata("penerima"); ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                            
	
	<h42>Selamat Datang, <?php echo $this->session->userdata("penerima"); ?></h4>
	

                        </ol>
                       
                       
                    </div>
                </main>
                