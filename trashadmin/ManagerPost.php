<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="LoadingPage.css">
    <script type="text/javascript" src="../lib/jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<style>

  .container {
      max-width:100% !important;
  }

  .h34isb > button {
      padding: 0.5rem 1rem !important;
      margin:0.3rem 0 ;
    
  }
</style>
<?php require "view/MenuDashBoard.php" ?>
<body>
    <div class="container" style="height:90vh !important; margin-top:10vh;" >
        <?php
        include './connectdb.php';
        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
            $page_no = $_GET['page_no'];
        } else {
            $page_no = 1;
        }
        $total_records_per_page = 6;
        $offset = ($page_no-1) * $total_records_per_page;
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;
        $adjacents = "2";

        $result_count = mysqli_query(
            $con,
            "SELECT COUNT(*) As total_records FROM `dataeditor`"
            );
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; // total pages minus 1
        $result = mysqli_query(
            $con,
            "SELECT * FROM `dataeditor` LIMIT $offset, $total_records_per_page"
            );
        ?>
        
     
        <div class="container">
        <h1>Quản lý post</h1>
            <div class="row">
            <?php while ($row = mysqli_fetch_array($result)) {?>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail" style="height:auto;position:relative;padding:0.5rem">
                        <div class="caption">
                            <a style="display:flex;height: 69px;">
                                <h3 style="color:RGB(5, 25, 50);margin:auto 0;line-height:100%;font-size:2rem;font-weight:bold"><?=$row['tittle-Post']?></h3>
                            </a>  
                            <p><strong>Chủ đề :</strong><?=$row['topic-Post']?></p>
                            <p><strong>Người tạo :</strong><?=$row['author-Post']?></p>
                            <a style="position:absolute,bottom:0" class="h34isb">                               
                                <button id="fa23av" style="background-color:var(--bs-gray-dark);color:white" value='<?php echo $row['token-Post'] ?>' class="btn btn-default" role="button">Xem thử</button>
                                <button id="lsmei4" value='{"titleDONE":"<?=$row['tittle-Post']?>","topicDONE":"<?=$row['topic-Post']?>","authorDONE":"<?=$row['author-Post']?>","tokenDONE":"<?=$row['token-Post']?>","idSelect":"<?=$row['id']?>"}' class="btn" style="background-color:var(--bs-orange);color:white" role="button">Điều chỉnh</button>
                                <button class="btn " style="background-color:var(--bs-warning);color:white" role="button">Check SEO</button> 
                                <button class="btn " style="background-color:var(--bs-success);color:white" role="button">Up Host!</button> 
                                <button id="ad21xd" value="<?=$row['id']?>" class="btn " style="background-color:var(--bs-danger);color:white" role="button">Xoá!</button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="container">
         <!-- Pagination -->     
   
            <ul class="pagination">
                <?php if($page_no > 1){
                    echo "<li class='page-item'><a class='page-link' href='?page_no=1'>Trang đầu</a></li>";
                    } ?>
                <li class="page-item <?php if($page_no <= 1){ echo "disabled"; } ?>">
                    <a class='page-link' <?php if($page_no > 1){
                    echo "href='?page_no=$previous_page'";
                    } ?>><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
                <?php
                    if ($total_no_of_pages <= 10){  	 
                    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                    if ($counter == $page_no) {
                    echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                            }else{
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                }
                        }
                    }else if ($total_no_of_pages > 10) {
                        if($page_no <= 4) {			
                            for ($counter = 1; $counter < 8; $counter++){		 
                                if ($counter == $page_no) {
                                    echo "<li class='page-item active'><a>$counter</a></li>";	
                                    }else{
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                            }
                            }
                            echo "<li class='active'><a class='page-link'>...</a></li>";
                            echo "<li class='active'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                            echo "<li class='active'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                        } elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                            echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                            echo "<li class='page-item'><a class='page-link'>...</a></li>";
                            for (
                                    $counter = $page_no - $adjacents;
                                    $counter <= $page_no + $adjacents;
                                    $counter++
                                    ) {		
                                    if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                }else{
                                    echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                        }                  
                                    }
                            echo "<li class='page-item'><a class='page-link'>...</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                            echo "<li class='page-item'><a class='page-link'>...</a></li>";
                            for (
                                    $counter = $total_no_of_pages - 6;
                                    $counter <= $total_no_of_pages;
                                    $counter++
                                    ) {
                                    if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                }else{
                                    echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                }                   
                                    }
                        }
                    }
                    ?>
                <li class="page-item <?php if($page_no >= $total_no_of_pages) echo "disabled"; ?>">
                    <a class="page-link" <?php if($page_no < $total_no_of_pages) echo "href='?page_no=$next_page'"; ?>>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </a>
                </li>
                <?php if($page_no < $total_no_of_pages){
                    echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Trang cuối</a></li>";
                }
                ?>
            </ul>    
        </div>
        <div class="ScenePreview">
            <a id="OffScenePreview" class="kesh3"><img src="https://img.icons8.com/fluency/68/000000/delete-sign.png"/></a>
            <div id="showdatapost"></div>
        </div>
        <div class="SceneEditInfoPost">
            <a id="OffSceneEditInfoPost" class="kesh3"><img src="https://img.icons8.com/fluency/39/000000/delete-sign.png"/></a>
            <div id="showeditinfopost" style="width:100%;height:100%">
                <p style="font-weight:bold;font-size:1.8rem; font-weight: bold;margin: 1rem;line-height: 39px;height: 39px;">Chỉnh sửa thông tin bài viết</p>
                <div style="padding:0 1.5rem">
                    <lable class="form-label">Tiêu đề bài viết</lable>
                    <input class="form-control"  type="text" id="hs35b"></input>
                    <lable class="form-label">Chủ đề bài viết</lable>
                    <input class="form-control"  id="cshw3"></input>
                    <lable class="form-label">Tác giả bài viết</lable>
                    <input class="form-control"  id="dawtg"></input>
                    <lable class="form-label">Token bài viết</lable>
                    <input class="form-control"  id="vsjw4"></input>
                    <div id="infoEdit" style="width:100%;height:auto;margin-top:1rem"></div>
                    <div class="h34isb" style="margin-top:1rem;display:flex;justify-content:space-around">
                        <button id="compare-editPost" class="btn" style="background-color:var(--bs-success);color:white;width:180px" >Xem trước thay đổi</button>
                        <button id="pushDB-editPost" class="btn" style="background-color:var(--bs-cyan);color:white;width:180px" >Cập nhật thay đổi</button>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="NoticeDeletePost">
       
            <div id="showeditinfopost" class="showeditinfopost" style="width:100%;height:100%">
                <p style=" line-height: 5vh;
                            height: 5vh;
                            font-size: 1.6rem;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;color: white;text-align: center;background-color: brown;margin: 0;}">Bạn có muốn xoá không ????</p>
                <div style="display: flex;
                    justify-content: space-around;
                    height: 10vh;
                    background-color:whitesmoke;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;">
                    <button id="deletePost"  class="btn" style="height: max-content;margin: auto;background-color:var(--bs-red);color:white;width:180px" class="kesh3">Xoá ngay !</button>
                    <button id="OutDeletePost"  class="btn"  style="height: max-content;margin: auto;background-color:var(--bs-warning);color:white;width:180px"  class="kesh3">Suy nghĩ lại</button>
                </div>
            </div>
           
        </div>
        <div class="ad3tfdbv" id="vbsedr">
                <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 7.9rem;
                    position: absolute;
                    left: 50%;
                    color: white;
                    top: 10%;
                    transform: translateX(-50%);"></i>
                <span style="position: absolute;
                    font-size: 1.8rem;
                    top: 70%;
                    font-weight: bold;
                    width: 100%;
                    text-align: center;
                    color: white;
                    left: 50%;
                    transform: translateX(-50%);" id="w4jh2"></span>
            </div>
    </div>
</body>


<script>
    $(document).ready(function(){
        //
        //
        //------- SELECT MUTIL BUTTON
        var x = document.querySelectorAll('#fa23av');
        var y = document.querySelectorAll('#lsmei4');
        var t = document.querySelectorAll('#ad21xd');
        //
        //--------CLICK PREVIEW HMTL POST
        $(x).each(function( index ) {
            $(this).on('click', function() {
                var tokenbaiviet = $(this).val();
                $( '.ScenePreview' ).addClass("drgt4");
                console.log(`Đây là TOKEN bài viết ${tokenbaiviet}`);
                $.ajax({
                    url: "../PageShowFeeds.php",
                    method: "POST",
                    dataType: "json",
                    data: { TokenPostClientPicker: tokenbaiviet },
                    success: function(responseData) {
                        $('#showdatapost').html(responseData.html);
                    }
                });
            });
        });
        $('#OffScenePreview').click(function() {
            //console.log('Tắt chế độ xem thử');
            $( '.ScenePreview' ).removeClass("drgt4");
            const diaLogshow = document.getElementById("showdatapost");
            diaLogshow.innerHTML = "";
            
        }); 

        //
        //--------INFO AFTER EDIT POST
        $(y).each(function( index ) {
            $(this).on('click', function() {
                var hvn4ds = $(this).val();
                //console.log(hvn4ds);
                //console.log(typeof hvn4ds); => string 
                // So set struc is {"a":"b"} and push to JSON.parse to get Obj
                var theobj = JSON.parse(hvn4ds);
                console.log(theobj.titleDONE);
               $('#hs35b').val(theobj.titleDONE);
               $('#cshw3').val(theobj.topicDONE);
               $('#dawtg').val(theobj.authorDONE);
               $('#vsjw4').val(theobj.tokenDONE);
              
               var vef =  $('#hs35b').val();
               var sfs =  $('#cshw3').val();
               var vd5 =  $('#dawtg').val();
               var cva =  $('#vsjw4').val();
               var iDselectChange =  theobj.idSelect;
              
               //console.log(vef);
            $( '.SceneEditInfoPost' ).addClass("drgt4");       
            localStorage.setItem('cOmpare01', vef);
            localStorage.setItem('cOmpare02', sfs);
            localStorage.setItem('cOmpare03', vd5);
            localStorage.setItem('cOmpare04', cva);
            localStorage.setItem('cOmpare05isId', iDselectChange);
            });
        });
        $('#compare-editPost').click(function(e) {
            e.preventDefault();
            document.getElementById("infoEdit").innerHTML = "";
            var kjse = 'notistyle-editpost'; // set css style cho info after edit
            document.getElementById("infoEdit").innerHTML += `<p class="${kjse}">Thông tin thay đổi</p>`;
            var yu = $('#hs35b').val();
            var ku = $('#cshw3').val();
            var vu = $('#dawtg').val();
            var tu = $('#vsjw4').val();
        //console.log(yu,ku,vu,tu);
        //COMPARE 2 VALUE BEFORE AND AFTER OF INPUT(THIS VALUE FETCH FROM SERVER(AJAX))
            var afa3 = localStorage.cOmpare01;
            var sdh2 = localStorage.cOmpare02;
            var sdf4 = localStorage.cOmpare03;
            var vxwfg = localStorage.cOmpare04;
        //console.log(`DATA LƯU TRÊN APP(LOCALSTORE) ${afa3}/${sdh2}/${sdf4}/${vxwfg}`);
            if(yu !== afa3){
                //   console.log(`Bạn đã thay đổi TIÊU ĐỀ BÀI VIẾT \n Từ: ${afa3}\n Sang:${yu} !!!`);
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Tiêu đề mới :</lable><p>${yu}</p>`;
            }else{
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Tiêu đề giữ nguyên !!!</lable>`;
            }
            if(ku !== sdh2){
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Chủ đề mới :</lable><p>${ku}</p>`;
            }else{
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Chủ đề giữ nguyên !!!</lable>`;
            }
            if(vu !== sdf4){
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Tác giả mới</lable><p>${vu}</p>`;
            }else{
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">Tác giả giữ nguyên !!!</lable>`;
            }
            if(tu !== vxwfg){
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">TOKEN mới :</lable><p>${tu}</p>`;
            }else{
                document.getElementById("infoEdit").innerHTML += `<lable class="form-label">TOKEN giữ nguyên !!!</lable>`;
            }

        }); 
        //
        //
        //--------PUSH EDIT POST
        $('#pushDB-editPost').click(function() {
            var titleeditChange = $('#hs35b').val();
            var topiceditChange = $('#cshw3').val();
            var authoreditChange = $('#dawtg').val();
            var tokeneditChange = $('#vsjw4').val();
            var ideditchange = localStorage.cOmpare05isId;
           
            $.ajax({
                url: "PushPost-Action.php",
                method: "POST",
                dataType: "json",
                data: { ideditchange:ideditchange,titleeditChange: titleeditChange,topiceditChange: topiceditChange,authoreditChange: authoreditChange,tokeneditChange: tokeneditChange },
                success: function(response) {
                    if(response.infoFromServer !== "") {
                        $( '.SceneEditInfoPost' ).removeClass("drgt4");
                        $('#vbsedr').addClass('srfhbs');
                        document.getElementById('w4jh2').innerHTML = response.html;
                        console.log(response.html);
                         setTimeout(() => {
                            location.reload();
                        }, 600);
                    }
                }
            });
        }); 
        $('#OffSceneEditInfoPost').click(function() {
            $( '.SceneEditInfoPost' ).removeClass("drgt4");
            document.getElementById("infoEdit").innerHTML = "";
            localStorage.removeItem('cOmpare01');
            localStorage.removeItem('cOmpare02');
            localStorage.removeItem('cOmpare03');
            localStorage.removeItem('cOmpare04');
            localStorage.removeItem('cOmpare05isId');
        }); 

        
        //-------- DELETE POST
        $(t).each(function( index ) {
            $(this).on('click', function() {
                $( '.NoticeDeletePost' ).addClass("drgt4");
                var idDelete = $(this).val();
                console.log(idDelete);
                localStorage.setItem('cOmpareDELETEPOST', idDelete);
            });
        });

        $('#deletePost').click(function() { 
            var sendIDdelete = localStorage.cOmpareDELETEPOST;
         
          $.ajax({
                url: "PushPost-Action.php",
                method: "POST",
                dataType: "json",
                data: { sendIDdelete:sendIDdelete },
                success: function(response) {
             
                        localStorage.removeItem('cOmpareDELETEPOST');
                        $( '.NoticeDeletePost' ).removeClass("drgt4");
                        $('#vbsedr').addClass('srfhbs');
                        document.getElementById('w4jh2').innerHTML = response.html;
                        console.log(response);
                        setTimeout(() => {
                            location.reload();
                        }, 600);  
                 
                }
            }); 
        });
        $('#OutDeletePost').click(function() {
          
            $( '.NoticeDeletePost' ).removeClass("drgt4");

        }); 
        //--------FETCH DATA POST
        var totalPage = parseInt($('#totalPages').val());
        var pag = $('#pagination').simplePaginator({
        totalPages: totalPage,
        maxButtonsVisible: 8,
        currentPage: 1,
        nextLabel: '»',
        prevLabel: '«',
        firstLabel: 'Trang đầu',
        lastLabel: 'Trang cuối',
        clickCurrentPage: true,
        pageChange: function(page) {
            $("#content-news").html('<div class="page-loading"><i class="fa fa-spinner" aria-hidden="true"></i><strong>loading...</strong></div>');
            $.ajax({
                url: "./PaginationFUNCT/load_data_news.php",
                method: "POST",
                dataType: "json",
                data: { page: page },
                success: function(responseData) {
                    $('#content-news').html(responseData.html);
                }
            });
        }
    })


    });
</script>
<script type="text/javascript" src="../lib/pagination/simple-bootstrap-paginator.js"></script>
<script type="text/javascript" src="./Pagination/pagina-MannagerPost.js"></script>
</html>