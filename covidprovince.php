<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#4F80C0'><b>ลำดับ</b></td>
        <td bgcolor='#EAABBC'><b>จังหวัด</b></td>
        <td bgcolor='#96BDC4'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#DCCBED'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFD700'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#FF4500'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#A52A2A'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#9C4B28'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#AFD7F6'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#FDD4C1'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#C2DBDF'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#EADFF2'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#FDFFBC'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFD1BB'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFB4B4'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#E9967A'>";
    echo $val->total_death;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>
