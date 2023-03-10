<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 200%">
                    <thead>

                    <tr align='center'>
                    <th>ລຳດັບ</th>
                    <th>ລະຫັດຄະດີ</th>
                    <th>ເລກທີຂາອອກ</th>
                    <th>ວັນເດືອນປີອອກ</th>
                    <th>ເລກທີຂາເຂົ້າ</th>
                    <th>ປະເພດຄຳຮ້ອງ</th>
                    <th>ລັກສະນະການແກ້ໄຂ</th>
                    <th>ໜ່ວຍງານຮັບຜິດຊອຍ</th>
                    <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Item_No=$_POST['Item_No'];
              
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and Civ_ReportDetail.Item_Date between '$start' and '$end'";}

                if($Item_ID==""){$b="";}
                else{ $b="and (Civ_ReportDetail.Item_ID like N'%$Item_ID%' or Civ_ReportDetail.Item_ID like N'$Item_ID%')";}

                if($Item_No==""){$c="";}
                else{ $c="and (Civ_ReportDetail.Item_No like N'%$Item_No%' or Civ_ReportDetail.Item_No like N'$Item_No%')";}

                $i=1;
                $sql = "select *from Civ_ReportDetail where 1=1 $btw $b $c";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody>

                <tr>

                <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                <td><?PHP echo $result["In_No"]; ?></td>
                <td><?PHP echo $result["Problem"]; ?></td>
                <td><?PHP echo $result["Solv_Name"]; ?></td>
                <td><?PHP echo $result["Dept_Respond"]; ?></td>
                <td><?PHP echo $result["Staff_Respond"]; ?></td>
               
              </tr>
              </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
