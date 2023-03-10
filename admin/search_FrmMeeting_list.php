<html>
<head>
<?php
include 'head.php';
?>
</head>



<script>
    $(document).ready(function(){
        $('table tbody tr').click(function(){
          
     //   alert(start);
          alert($(this).text());
        })
    });
  </script>



    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 125%">
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
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
          
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and Cri_Meeting.Item_Date between '$start' and '$end'";}

                $i=1;
                $sql = "select *from Cri_Meeting where 1=1 $btw";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>
                    <tbody >
                    <tr id = 'data_table'>
                    <td><?PHP echo $result["item_Cnt"]; ?></td>
                    <td align='center' id = 'Item_ID'><?PHP echo $result["Item_ID"]; ?></td>
                    <?php
                    $date=$result["Item_Date"];
                    ?>
                    <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                    <td align='center'><?PHP echo $result["Person_Cnt"]; ?></td>
                    <td align='center'><?PHP echo $result["Case_Cnt"]; ?></td>
                    <td align='center'><?PHP echo $result["Cnt"]; ?></td>
                </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
