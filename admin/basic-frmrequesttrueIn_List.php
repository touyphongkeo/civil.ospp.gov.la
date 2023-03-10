<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>





<script>
		$(function(){

     // alert(start);
			$("#search").click(function(){

				var start=$("#start").val();
				var end=$("#end").val();
        var Item_ID=$("#Item_ID").val();
        var Item_No=$("#Item_No").val();
     //   alert(start);
				$.post("search_frmrequesttrueIn_List.php",{
					start:start,
					end:end,
          Item_ID:Item_ID,
          Item_No:Item_No
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
            <h5><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></li>
            
            </ol>
          </div>

          
 

          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0">
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                

                <div class="input-group">
                  <div class="col-lg-3">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>

                    <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                    <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable>

                   <?php
                     @$end=$_POST['end'];
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div>

                  <div class="col-lg-2">
                   <lable>ລະຫັດເອກະສານ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID">	
                  </div>

                   <div class="col-lg-2">
                   <lable>ເລກທີຂາເຂົ້າ</lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No" >	
                  </div>

                  


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>


               
                </div><br>

                </div>
                <div id='show' class="table-responsive p-10">
                  <table class='table table-bordered' style="width: 180%">
                    <thead>
                      <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດເອກະສານ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ຄຳຮ້ອງກ່ຽວກັບບັນຫາໃດ</th>
                        <th>ໂຈດ</th>
                        <th>ຈໍາເລີຍ</th>
                        <th>ບຸກຄົນທີ່ສາມ</th>
                        <th>ມາຈາກພາກສ່ວນ</th>
                        <th>ກ່ຽວເລື່ອງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                      </tr>
                    </thead>
                   

                <?php
                include 'server/connect.php';
                $i=0;        
                
                @$start=$_POST['start'];
              
                $sql = "SELECT * FROM Civ_ReQuestTrueIn WHERE Item_Date = '$start'  order by item_Cnt";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                        <tr>
                        <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td><?PHP echo $result["Request_Type"]; ?></td>
                        <td><?PHP echo $result["Civil"]; ?></td>
                        <td><?PHP echo $result["Request_Pers"]; ?></td>
                        <td><?PHP echo $result["CivilPers"]; ?></td>
                        <td><?PHP echo $result["FrmSection"]; ?></td>
                        <td><?PHP echo $result["About"]; ?></td>
                        <td><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td><?PHP echo $result["Staff_Respond"]; ?></td>
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
        
         <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>ພັດທະນາໂດຍ:ບໍລິສັດ ເອພີໄອເອັສ ຈຳກັດ &copy; <script> document.write(new Date().getFullYear()); </script>
           
            </span>
          </div>
        </div>
      </footer>




      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <?php
  include 'head.php';
  ?>
 

</body>

</html>