<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>


<script>
		$(function(){
    //  alert('hellow');
			$("#search").click(function(){
				var aa=$("#start").val();
				var bb=$("#end").val();
        var item_Cnt=$("#item_Cnt").val();
				$.post("search_cancel.php",{
					start:aa,
					end:bb,
          item_Cnt:item_Cnt
				},
				function(output){
					$("#show").html(output).slideDown();
				});
			});
		});
	</script>


<style>
thead
{
background-color:#3366ff;
color:white;
}

input[type=date] {
 box-sizing: border-box;
 border: 1px solid #ff8c1a;
 border-radius: 8px;
}

input[type=text] {
 box-sizing: border-box;
 border: 1px solid #2764f1;
 border-radius: 8px;
}
</style>

</head>
<body id="page-top">
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <?php
    include 'index.php';
    ?>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="sidebar-brand-text mx-0" style="color:white; font-size: 20px;"> ອົງການໄອຍະການປະຊາຊົນສູງສຸດ ແຫ່ງ ສ ປປ ລາວ</div>
        
          <ul class="navbar-nav ml-auto">
          

           
         
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../logout.php">
                
                <span class="ml-2 d-none d-lg-inline text-white small"> ອອກຈາກລະບົບ</span>
              </a>
           
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນຮືຟືນ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນຮືຟືນ</li>
            
            </ol>
          </div>


            <?php
             include 'server/connect.php';
            $stmt = "SELECT * FROM Cri_CancelIn Order by Item_Date ASC";
            $query  = sqlsrv_query($conn,$stmt);
            ?>
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-6">
              <div class="card mb-0">
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-5">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-5">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>

                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>

                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລຳດັບ</th>
                <th>ເລກທີກອງປະຊຸມ</th>
                <th>ວັນເດືອນປີ</th>
                <th>ຈຳນວນຜູ້ເຂົ້າຮ່ວມ</th>
                <th>ຈຳນວນຄະດີຖະແຫຼງ</th>
                <th>Cnt</th>
               
                </tr>
                </thead>
                   
                <?php
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>

              </div>
			  
			  
			  
			  
			          <div class="col-lg-6">
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລະຫັດ</th>
                <th>ໝວດທີ</th>
                <th>ມາດຕາການກະທຳຜິດ</th>
                <th>ເນື້ອໃນ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>
              </div>
            </div>
			
			
			
			
			<br><br>
			
	  		 <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
             
            
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລະດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຫາວ່າ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ຜູ້ຮັບຜິດຊອບທາງແພ່ງ</th>
                <th>ຈຳເລີຍ</th>
                <th>ຄຳອະພີພາກສາຂອງສານ</th>
                <th>Cnt</th>
                </tr>
                </thead>
                   
                <?php
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>

              </div>
			  
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			
          </div>
     
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
   </div>
  </div>

  <!-- Scroll to top -->
 <?php
 include 'head.php';
 ?>


</body>

</html>