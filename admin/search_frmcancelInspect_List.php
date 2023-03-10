<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 440%">
                    <thead>
                    <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາອອກ</th>
                        <th>ວັນເດືອນປີອອກ</th>
                        <th>ເລກທີລົງສຳນວນ</th>
                        <th>ວັນເດືອນປີລົງສຳນວນ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ລັກສະນະຄຳຖະແຫຼງຂຶ້ນສານ</th>
                        <th>ໂຈດ</th>
                        <th>ຈຳເລີຍ</th>
                        <th>ບຸກຄົນທີ່3 </th>
                        <th>ກ່ຽວເລື່ອງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ </th>
                        <th>ພະນັກງານຮັບຜິດຊອບ </th>
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_No=$_POST['Item_No'];
                $Item_ID=$_POST['Item_ID'];
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and Civ_CancelInspect.Item_Date between '$start' and '$end'";}


              

                if($Item_No==""){$b="";}
                else{ $b="and (Civ_CancelInspect.Item_No like N'%$Item_No%' or Civ_CancelInspect.Item_No like N'$Item_No%')";}

                if($Item_ID==""){$d="";}
                else{ $d="and (Civ_CancelInspect.Item_ID like N'%$Item_ID%' or Civ_CancelInspect.Item_ID like N'$Item_ID%')";}

              
                $i=1;
                $sql = "select *from Civ_CancelInspect where 1=1 $btw $b $d order by Civ_CancelInspect.item_Cnt asc";
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
                        <td align='center'><?PHP echo $result["Item_sam"]; ?></td>
                        <?php
                        $dates=$result["Item_Datesam"];
                        ?>
                        <td align='center'><?PHP echo date_format($dates,'d/m/Y');?></td>
                        <td><?PHP echo $result["In_No"]; ?></td>
                        <td><?PHP echo $result["Solv_Name"]; ?></td>
                        <td><?PHP echo $result["Request_Civil"]; ?></td>
                        <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                        <td><?PHP echo $result["Respond_Civil"]; ?></td>
                        <td><?PHP echo $result["Problem"]; ?></td>
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
