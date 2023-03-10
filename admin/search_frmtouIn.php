<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 500%">
                    <thead>
                    <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ເລກທີລົງສຳນວນ</th>
                        <th>ວັນເດືອນປີລົງສຳນວນ</th>
                        <th>ໂຈດ</th>
                        <th>ຈຳເລີຍ</th>
                        <th>ບຸກຄົນທີສາມ</th>
                        <th>ກ່ຽວເລື່ອງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
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
                else{ $btw="and Civ_ReturnIn.Item_Date between '$start' and '$end'";}


              

                if($Item_ID==""){$b="";}
                else{ $b="and (Civ_ReturnIn.Item_ID like N'%$Item_ID%' or Civ_ReturnIn.Item_ID like N'$Item_ID%')";}

                if($Item_No==""){$d="";}
                else{ $d="and (Civ_ReturnIn.Item_No like N'%$Item_No%' or Civ_ReturnIn.Item_No like N'$Item_No%')";}

               


                $i=1;
                $sql = "select *from Civ_ReturnIn where 1=1 $btw $b $d ORDER BY Item_Cnt";
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
                        $datse=$result["Item_Datesam"];
                        ?>
                      <td align='center'><?PHP echo date_format($datse,'d/m/Y');?></td>
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
