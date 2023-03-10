<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 140%">
                    <thead>
                <tr>
                <th>ປີ</th>
                <th>ເລກນັບ</th>
                <th>ລາຍງານຂໍ້ມູນ</th>
                <th>ເດືອນ 1</th>
                <th>ເດືອນ 2</th>
                <th>ເດືອນ 3</th>
                <th>ເດືອນ 4</th>
                <th>ເດືອນ 5</th>
                <th>ເດືອນ 6</th>
                <th>ເດືອນ 7</th>
                <th>ເດືອນ 8</th>
                <th>ເດືອນ 9</th>
                <th>ເດືອນ 10</th>
                <th>ເດືອນ 11</th>
                <th>ເດືອນ 12</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];

                if($start==""){$btw="";}
                else{ $btw="and Cri_Rpt_Temp.Year_data = '$start'";}
                $i=1;
                $sql = "SELECT * FROM Cri_Rpt_Temp WHERE 1=1 $btw ORDER BY Order_No ASC" ;
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>
                    <tr>  
                    <td><?PHP echo $result["Year_data"]; ?></td>
                    <td><?PHP echo $result["Rpt_ID"]; ?></td>
                    <td><?PHP echo $result["Description"]; ?></td> 
                    <td><?PHP echo $result["M1"]; ?></td> 
                    <td><?PHP echo $result["M2"]; ?></td>           
                    <td><?PHP echo $result["M3"]; ?></td> 
                    <td><?PHP echo $result["M4"]; ?></td> 
                    <td><?PHP echo $result["M5"]; ?></td> 
                    <td><?PHP echo $result["M6"]; ?></td> 
                    <td><?PHP echo $result["M7"]; ?></td> 
                    <td><?PHP echo $result["M8"]; ?></td> 
                    <td><?PHP echo $result["M9"]; ?></td> 
                    <td><?PHP echo $result["M10"]; ?></td> 
                    <td><?PHP echo $result["M11"]; ?></td> 
                    <td><?PHP echo $result["M12"]; ?></td> 

               

                </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
