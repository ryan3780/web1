<?php
header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 게임즈IDC.xls" ); 
header( "Content-Description: 게임즈IDC" );
?>
 
 
<?php

include 'db_config.php';

$sql = "SELECT * from record_work order by idx desc";
$result = mysqli_query($conn,$sql); // sql에 가져온 정보를 result에 담는다.
// 테이블 상단 만들기
$EXCEL_STR = "
<table border='1'>
<tr>

   <td>날짜</td>
   <td>요청 유형</td>
   <td>유형 선택</td>
   <td>작업 수량</td>
   <td>소요 시간</td>
   <td>요청자</td>
   <td>작업자 명</td>
   <td>작업자 수</td>
   <td>비  고</td>

</tr>";
//위에 talbe은 자신이 가져올 값들의 컬럼 명이 되겠다.
while($row = mysqli_fetch_array($result)) {
   $EXCEL_STR .= "
<tr>

   <td>".$row['date']."</td>
   <td>".$row['tw']."</td>
   <td>".$row['kind']."</td>
   <td>".$row['wm']."</td>
   <td>".$row['wt']."</td>
   <td>".$row['rn']."</td>
   <td>".$row['wn']."</td>
   <td>".$row['wnum']."</td>
   <td>".$row['etc']."</td>
    
</tr>
   ";
}
$EXCEL_STR .= "</table>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'> ";
echo $EXCEL_STR;
?>
