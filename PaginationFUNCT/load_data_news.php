<?php
include_once("./connectdb.php");
$perPage = 6;
$page = 0;
if (isset($_POST['page'])) { 
	$page  = $_POST['page']; 
} else { 
	$page=1; 
};  
$startFrom = ($page-1) * $perPage;  
$sqlQuery = "SELECT * FROM `dataeditor` LIMIT $startFrom, $perPage";  
	//echo $sqlQuery;
$result = mysqli_query($con, $sqlQuery); 
$paginationHtml = '';
while ($row = mysqli_fetch_assoc($result)) {  
	$paginationHtml.=' <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
   
            <h3>Tên chủ đề:"' .$row['tittle-Post']. '"</h3>
            <p>Chủ đề :"' .$row['topic-Post']. '"</p>
            <p>Người tạo :"' .$row['author-Post']. '"</p>
            <p><a href="#" class="btn btn-primary" role="button">Điều chỉnh</a> <a href="#" class="btn btn-default" role="button">Xem thử</a></p>
           
        </div>
    </div>
</div>
    
    
    
    ';  
} 
$jsonData = array(
	"html"	=> $paginationHtml,	
);
echo json_encode($jsonData); 
?>

