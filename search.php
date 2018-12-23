<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="127.0.0.1:8080/favicon.ico">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="jq.js"></script>
    </head>

<script type="text/javascript">
  
$(document).ready(function() {
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;       
    $("#theDate").attr("value", today);
});

</script>

<body>
          

<form action="insert.php" method="post" ENCTYPE="multipart/form-data" name="insert">
     <div class="row"> <!-- 입력폼 -->
  <div class="col-md-12">
        <div class="panel panel-primary">
             <div class="panel-heading" align="center" style="font-size: 36px">
   <strong><a href = "index.html" style="text-decoration:none; color: #ffffff;" >게임즈IDC 업무일지</a></strong>
             </div>
         <div class="panel-body">
             <div class="col-md-2">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                      <strong>날짜</strong>
                    </div>
                       <div class="panel-body">
                          <input class="form-control" name="date" id="theDate" type="date">
                         
                    </div>
                </div>
            </div>

             <div class="col-md-3">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>요청 유형</strong>
                       </div>
                       <div class="panel-body">
                          <select class="form-control" id="first_tag" name="first_tag">
                                <option value="">요청 선택</option>
                                <option value="서버작업">서버 작업</option>
                                <option value="파트작업">파트 작업</option>
                                <option value="일반업무">일반 업무</option>
                                <option value="장애업무">장애 업무</option>
                                
                          </select>
                       </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>유형 선택</strong>
                       </div>
                       <div class="panel-body">
                          <select class="form-control" name="second_tag" id="second_tag">
                                <option value="">유형 선택</option>
                          </select>
                       </div>
                 </div>
             </div>
             
             <div class="col-md-2">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>작업수량</strong>
                       </div>
                       <div class="panel-body">

      <input class="form-control" name="work_num" type="text"  placeholder="휴일 작성 제외" autocomplete="off">
                       </div>
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>소요시간</strong>
                       </div>
                       <div class="panel-body">
      <input class="form-control" name="work_time" type="text"  placeholder="휴일 작성 제외(10분 단위로 기입)" autocomplete="off">
                       </div>
                 </div>

             </div>
             <div class="col-md-2">
                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>요청자</strong>
                       </div>
                       <div class="panel-body">
      <input class="form-control" name="req_user" type="text"  placeholder="요청자 영문명 (ex)jake" autocomplete="off">
                       </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="panel panel-primary">

                       <div class="panel-heading" align="center">
                            <strong>작업자 명</strong>
                       </div>
                       <div class="panel-body">
      <input class="form-control" name="work_user" type="text"  placeholder="작업자 영문명 (ex)fatdoo" autocomplete="off">
                       </div>
                 </div>
             </div>
             <div class="col-md-2">

                 <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>작업자 수</strong>
                       </div>
                       <div class="panel-body">
                          <select class="form-control" name="user_num">
                                <option value="1">작성자포함</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>     
                          </select>
                        </div>
                     </div>           
                  </div>

                <div class="col-md-5">
                    <div class="panel panel-primary">
                       <div class="panel-heading" align="center">
                            <strong>비고</strong>
                          </div>
                       <div class="panel-body">
                    <input class="form-control" name="etc" type="text" placeholder="상세내역" autocomplete="off">
                </div>
             </div>
           </div>
        </div>
     </div>


         <div class="row">
                <div class="container-fluid">
      <div class="form-actions col-md-11" align="right">
       <button type="submit" class="btn btn-primary" name="save" id="saveBtn" >저  장 <span class="glyphicon glyphicon-saved"></span></button>
       <button type="reset" class="btn btn-warning" name="reset" id="resetBtn" >초기화 <span class="glyphicon glyphicon-refresh"  ></span></button>
                        
            </div>
       </div>
</form>

<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
  <div class="row">
 <div class="container">
<table id="gsTable" class="table table-striped table-hover" style="width:100%">
        <thead>
          <tr>
            <th>날짜</th>
            <th>요청유형</th>
            <th>유형</th>
            <th>작업수량</th>
            <th>소요시간</th>
            <th>요청자</th>
            <th>작업자 명</th>
            <th>작업자 수</th>
            <th>수정</th>
            <th>삭제</th>
          </tr>
        </thead>
        <tbody>

<?php
 include 'db_config.php';

 $result = mysqli_query($conn,"SELECT * FROM record_work WHERE DATE(date) BETWEEN '".$_REQUEST['stime']."' AND '".$_REQUEST['etime']."' ORDER BY DATE ASC");

while($row = mysqli_fetch_array($result)){

    echo "<tr>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['tw'] . "</td>";
    echo "<td>" . $row['kind'] . "</td>";
    echo "<td>" . $row['wm'] . "</td>";
    echo "<td>" . $row['wt'] . "</td>";
    echo "<td>" . $row['rn'] . "</td>";
    echo "<td>" . $row['wn'] . "</td>";
    echo "<td>" . $row['wnum'] . "</td>";
    echo '<td> <a class="btn btn-success" href="edit.php?edit='.$row['idx'].'">Update</a> </td>';
    echo '<td> <a class="btn btn-danger" href="search_del.php?del='.$row['idx'].'">Delete</a> </td>';
    echo "</tr>";



}

$result -> free();

$conn->close();  


?>

</tbody>
      </table>

<div class="row">
<form class="navbar-form navbar-right" name="search" method="post" action="search.php">
                            <div class="input-group">
                                    <span class="input-group-addon">기간</span>
                                    <input type="date" class="form-control" name="stime">
                                    <span class="input-group-addon">~</span>
                                    <input type="date" class="form-control" name="etime">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>검색</button>
<button type="submit" class="btn btn-primary" method="post" formaction="xml.php"><span>Excel Download  <i class="glyphicon glyphicon-save"></i></span></button>
</form>
</div>
 
 <?php

include 'db_config.php';

$result = mysqli_query($conn,"SELECT sum(wt) wt, wn FROM record_work WHERE DATE(date) BETWEEN '".$_REQUEST['stime']."' AND '".$_REQUEST['etime']."' GROUP BY wn ");

while($row = mysqli_fetch_array($result)){

  if($row['wn'] === "jenny, dana"){

    echo "작업시간 : ";
    echo $row['wn'];
    echo " =";
    echo '&nbsp';
    echo '&nbsp';
    echo $row['wt'] * 2;
    echo '('.$row['wt'].')';
    echo "<br></br>";

  } else{

    echo "작업시간 : ";
    echo $row['wn'];
    echo " =";
    echo '&nbsp';
    echo '&nbsp';
    echo $row['wt'];
    echo "<br></br>";
    }
  
  }

$result -> free();

$conn->close();

?>

<br>
</body>
</html>

<script type='text/javascript'>

 if (self.name != 'reload') {
         self.name = 'reload';
         self.location.reload(true);
     }
     else self.name = ''; 

</script>










