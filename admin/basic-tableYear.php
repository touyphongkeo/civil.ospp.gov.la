<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>






<script>
		$(function(){

   //   alert(start);
			$("#search").click(function(){
				var start=$("#start").val();
      //  alert(start);
				$.post("search_tableYear.php",{
					start:start
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
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
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
    
        

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5><B>ສະຖິຕິຂອງກົມກວດກາຄະດີແພ່ງ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ສະຖິຕິຂອງກົມກວດກາຄະດີແພ່ງ</B></li>
            
            </ol>
          </div>

          

          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0">
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຕາມປີ</lable>
    
                  <input type="text" class="form-control" id="start"   name="start"   value="<?php  echo date('Y');?>" >
                </div>
                <div class="col-lg-3"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                </div>
                </div>
                </div><br>

                </div>
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 150%">

                
          
                    <thead>
                      <tr>

                        <th>ປີ</th>
                        <th>ເລກນັບ</th>
                        <th>ລາຍງານຂໍ້ມູນ</th>
                        <th>ເດືອນ1</th>
                        <th>ເດືອນ2</th>
                        <th>ເດືອນ3</th>
                        <th>ເດືອນ4</th>
                        <th>ເດືອນ5</th>
                        <th>ເດືອນ6</th>
                        <th>ເດືອນ7</th>
                        <th>ເດືອນ8</th>
                        <th>ເດືອນ9</th>
                        <th>ເດືອນ10</th>
                        <th>ເດືອນ11</th>
                        <th>ເດືອນ12</th>

              
                       
                      </tr>
                    </thead>
                    <?php   
                      include 'server/connect.php';                                       
                      $d = date("Y"); 
                      $sql = "SELECT * FROM Civ_RptData WHERE Year_Data='$d'";
                      $query = sqlsrv_query( $conn, $sql);  
                      while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                      {
              
                    ?>
                   
                    <tbody id="users">
                      <tr>
                     
                       
                        <td align='center'><?PHP echo $result["Year_Data"]; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <td align='center'><?PHP echo $result["Rpt_ID"]; ?></td>
                        <td><?PHP echo $result["Description"]; ?></td>
                        <td align='center'><?PHP echo $result["M1"]; ?></td>
                        <td align='center'><?PHP echo $result["M2"]; ?></td>
                        <td align='center'><?PHP echo $result["M3"]; ?></td>
                        <td align='center'><?PHP echo $result["M4"]; ?></td>
                        <td align='center'><?PHP echo $result["M5"]; ?></td>
                        <td align='center'><?PHP echo $result["M6"]; ?></td>
                        <td align='center'><?PHP echo $result["M7"]; ?></td>
                        <td align='center'><?PHP echo $result["M8"]; ?></td>
                        <td align='center'><?PHP echo $result["M9"]; ?></td>
                        <td align='center'><?PHP echo $result["M10"]; ?></td>
                        <td align='center'><?PHP echo $result["M11"]; ?></td>
                        <td align='center'><?PHP echo $result["M12"]; ?></td>

                       
                      
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

<?php
include 'head.php';
?>

</body>
</html>