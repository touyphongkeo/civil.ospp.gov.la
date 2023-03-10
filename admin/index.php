<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/bbbb.png" width="100%" height="200%">
          <br>
          
        </div>
       
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><B>Dashboard</B></span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດິຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmCheckIn_List.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນຕິດຕາມກວດກາ</B></a>    
            <a class="collapse-item" href="basic-FrmCancelIn_List.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນລົບລ້າງ</B></a> 
            <a class="collapse-item" href="basic-FrmReturnIn_List.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນຮື້ຟື້ນ</B></a>  
            <a class="collapse-item" href="basic-FormpaymentIn_List.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="basic-FrmInspectIn_List.php"><B>ຄຳຮ້ອງຂໍຕິດຕາມກວດກາ</B></a>
            <a class="collapse-item" href="basic-FrmReQuestin_List.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງ</B></a>
            <a class="collapse-item" href="basic-frmrequesttrueIn_List.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a>

          </div>
        </div>
      </li>
      


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable1" aria-expanded="true"
          aria-controls="collapseTable1">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດີຂາອອກ</B></span>
        </a>
        <div id="collapseTable1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-frmcancelInspect_List.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນຕິດຕາມກວດກາ</B></a>    
            <a class="collapse-item" href="basic-frmcancelqut_List.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນລົບລ້າງ</B></a> 
            <a class="collapse-item" href="basic-frmreturnout_list.php"><B>ຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ ຂັ້ນຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-Formpaymentout_List.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable2">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາອອກ</B></span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-frmrequestout_List.php"><B>ຄຳຮ້ອງຂໍຕິດຕາມກວດກາ</B></a>    
            <a class="collapse-item" href="basic-frmrequestrtout_List.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງ</B></a> 
            <a class="collapse-item" href="basic-frmrequesttrueout_List.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a>
            
         
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3" aria-expanded="true"
          aria-controls="collapseTable3">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຂາເຂົ້າ-ຂາອອກ</B></span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-frmreport_list.php"><B>ຕິດຕາມຂາເຂົ້າຂໍ້ຕົກລົງຂອງສະພາ ແລະ ໜັງສືລັດຖະການ</B></a>    
            <a class="collapse-item" href="basic-FrmNoticeIn_List.php"><B>ຕິດຕາມຂາອອກາຂໍ້ຕົກລົງຂອງສະພາ ແລະ ໜັງສືລັດຖະການ</B></a> 
          
         
          </div>
        </div>
      </li>




    


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable5" aria-expanded="true"
          aria-controls="collapseTable5">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ແບບຟອມຕ່າງໆ</B></span>
        </a>
        <div id="collapseTable5" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmDecision_List.php"><B>ແບບຟອມຄຳຖະແຫຼງຂອງຫົວໜ້າໄອຍະການ</B></a>  
            <a class="collapse-item" href="basic-FrmNoAGaint_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຄັດຄ້ານ</B></a>  
            <a class="collapse-item" href="basic-FrmAGaint_List.php"><B>ແບບຟອມຄຳສະເໜີຄັດຄ້ານ</B></a>    
            <a class="collapse-item" href="basic-FrmNoRevise_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmRevise_List.php"><B>ແບບຟອມຄຳສະເໜີຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmCancelForm_List.php"><B>ແບບຟອມຄຳຕົກລົງ</B></a>
            <a class="collapse-item" href="basic-FrmNoCancelForm_List.php"><B>ແບບຟອມການທວງສຳນວນຄະດີ</B></a>
          
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable6" aria-expanded="true"
          aria-controls="collapseTable6">
          <i class="fas fa-fw fa-table"></i>
          <span>ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມ</span>
        </a>
        <div id="collapseTable6" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
        
            <a class="collapse-item" href="basic-FrmMeeting_List.php">ຕິດຕາມການເຂົ້າຮ່ວມກອງປະຊຸມສານຄະດີແພ່ງ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນພື້ນຖານ</B></span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="basic-tableYear.php"><B>ຂໍ້ມູນປະຈຳເດືອນ</B></a>
           
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage1" aria-expanded="true"
          aria-controls="collapsePage1">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນປະກອບ</B></span>
        </a>
        <div id="collapsePage1" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="javascript: window.open('basic-Data_Relation.php', 'nploojsiab page',  'top=50, left=100, width =1200, height =600');"><B>ສາຍກ່ຽວພັນຂອງລະບົບຂໍ້ມູນ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files.php"><B>ຂໍ້ມູນກ່ຽວກັບກົດໝາຍ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Other.php"><B>ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Labieb.php"><B>ຂໍ້ມູນອື່ນໆ</B></a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage2" aria-expanded="true"
          aria-controls="collapsePage2">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລະບົບລາຍງານ</span>
        </a>
        <div id="collapsePage2" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmRptCrm_Yearly.php">ສະຫຼຸບສະຖິຕິປະຈຳປີ</a>
            <a class="collapse-item" href="#">ສະຫຼຸບສະຖິຕິປະຈຳສົກປີ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage3" aria-expanded="true"
          aria-controls="collapsePage3">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລາຍງານສະຖານະການຂອງຄະດີ</span>
        </a>
        <div id="collapsePage3" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຕາມກົດໝາຍ ແລະ ຂໍ້ຂັດແຍ່ງ</a>
            <a class="collapse-item" href="#">ສັງລວມຜົນການພິພາກສາ</a>
          
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4" aria-expanded="true"
          aria-controls="collapsePage4">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ຕິດຕາມແບບຟອມຕ່າງໆ</span>
        </a>
        <div id="collapsePage4" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຈຳນວນຄະດີຖະແຫຼງຕໍ່ສານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສະເໜີຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສະເໜີຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງ</a>
           
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4d" aria-expanded="true"
          aria-controls="collapsePage4d">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລາຍງານແບບເສັ້ນສະແດງ</span>
        </a>
        <div id="collapsePage4d" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ລາຍງານສະຖິຕິການແກ້ໄຂຄະດີ</a>
            <a class="collapse-item" href="#">ລາຍງານສະຖິຕິການແກ້ໄຂຄຳຮ້ອງ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄະດີແຍກຕາມກົດໝາຍ</a>
          
           
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4dd" aria-expanded="true"
          aria-controls="collapsePage4dd">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ລະບົບ</B></span>
        </a>
        <div id="collapsePage4dd" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmUser.php"><B>ລາຍການຜູ້ໃຊ້ໂປຣແກຣມ</B></a>
            <a class="collapse-item" href="basic-groupLaws.php"><B>ໝວດການກະທໍາຜິດ</B></a>
            <a class="collapse-item" href="basic-LawsInsert.php"><B>ຂໍ້ຂັດແຍ່ງ</B></a>
            <a class="collapse-item" href="../logout.php"><B>ອອກຈາກໂປຣແກຣມ</B></a>
          
          </div>
        </div>
      </li>





      
  
      <hr class="sidebar-divider">
    </ul>
    
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
          <div class="sidebar-brand-text mx-0" style="color:white; font-size: 20px;">ອົງການໄອຍະການປະຊາຊົນສູງສຸດ ແຫ່ງ ສ ປປ ລາວ</div>
        
          <ul class="navbar-nav ml-auto">
           

           
         
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../logout.php">
            
                <span class="ml-2 d-none d-lg-inline text-white small">ອອກຈາກລະບົບ</span>
              </a>
            
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-3">
            <div class="col-xl-12 col-md-12 mb-12">
              <div class="card h-100" style='border: 1px solid #2f79ea; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-12">
                      <div class="text-xs font-weight-bold text-uppercase mb-6">
                      <h1 align='center' style="color:#1a53ff;" > 
                      <B>ຍີນດີຕອນຮັບເຂົ້າສູ່  ໂປຣແກຣມ ກົມກວດກາຄະດີແພ່ງ</B></h1>
                      </div> 
                    </div>
                   
                  </div>
                  
                </div>
               
              </div>
            </div>
            </div>

            </div>

           

               <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-3">
         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #cbb534; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">

                       <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Usr_id)as b from Civ_Users";
                         $query = sqlsrv_query( $conn, $sql );
                         $result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>
                    <div class="text-xs font-weight-bold text-uppercase mb-1">ພະນັກງານ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$result['b'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                     
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmUser.php">
                      <i class="fas fa-users fa-2x text-info"></i></a>
                    </div>    
                  </div> 
                </div>
              </div>

              
            </div>

       


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #cacd4b; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as a from Civ_Law_files";
                         $query = sqlsrv_query( $conn, $sql );
                         $a = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>
                    <div class="text-xs font-weight-bold text-uppercase mb-1">ຂໍ້ມູນກ່ຽວກັບກົດໝາຍ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$a['a'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-file-archive-o"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files.php">
                      <i class="fas fa-file fa-2x text-info"></i></a>
                    </div> 
                  </div>
                </div>
              </div>
            </div>




            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #3afa1f; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">


                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as ab from Civ_Law_files_Labieb";
                         $query = sqlsrv_query( $conn, $sql );
                         $bs = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>


                    <div class="text-xs font-weight-bold text-uppercase mb-1">ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$bs['ab'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files_Labieb.php">
                    <i class="fas fa-file fa-2x text-info"></i></a>
                    </div>  
                  </div>  
                </div>
              </div>
            </div>



           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #ff80c0; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">

                    

                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as bb from Civ_Law_files_Other";
                         $query = sqlsrv_query( $conn, $sql );
                         $bb= sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>


                    <div class="text-xs font-weight-bold text-uppercase mb-1">ຂໍ້ມູນອືນໆ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$bb['bb'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files_Other.php">
                      <i class="fas fa-file fa-2x text-info"></i></a>
                    </div>  
                  </div>  
                </div>
              </div>
            </div>



            </div>
            </div>


       
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>ພັດທະນາໂດຍ:ບໍລິສັດ ເອພີໄອເອັສ ຈຳກັດ &copy; <script> document.write(new Date().getFullYear()); </script>
           
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
<?php
include 'head.php';
?>  

</body>
</html>