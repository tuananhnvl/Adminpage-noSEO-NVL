<?php
session_start();
if(!isset($_SESSION['sesionLOG']))
{
	header('location: AdminPage.php');
}
if(isset($_POST['logout']))
{
 unset($_SESSION['sesionLOG']);
 header('location: AdminPage.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="../lib/jquery/jquery-3.6.0.min.js"></script>

	<title>Nam Việt Law Admin</title>

	<link href="dashbroad-Setting/app.css" rel="stylesheet">

</head>
<style>
    #showdatapost {
background:whitesmoke;
width:100%;
height:100%;
overflow:scroll;
padding:2.2rem;
  
}
.gr-tool {
    width:100%;
    height:auto;
    margin:auto;

    border: 1px solid whitesmoke;
    padding: 1rem;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.gr-tool > button {
    width:100% !important;
    margin: 0.5rem 0;
}

.SceneEditInfoPost {
    width: 39vw;
    height: 39vh;
    background-color: rgba(255, 255, 255, 1);
    overflow-y: scroll;
}
.ScenePreview {
    width: 79vw;
    height: 79vh;
    background-color: rgb(0,0,0,.5);
}
.NoticeDeletePost {
    width: 420px;
    height: 15vh;
    background-color: #fff;
    border-radius:10px ;
    border: 0px !important;
}
.ScenePreview,.SceneEditInfoPost,.NoticeDeletePost {
    display:none;
    position: fixed;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    left: 50%;
    transform: translate(-50%,-50%);
    top: 50%;
    border: 1px solid gray;
    z-index:9999!important;
   
}
.drgt4 {
    display:flex !important;
    z-index:9;
}
#OffScenePreview {
    margin: 1.7rem;
}
#OffSceneEditInfoPost {
    margin: 1rem;
}
#OffScenePreview,#OffSceneEditInfoPost {
    position: absolute;
    right: 0;
   
}

.cke_contents  {
    height:56vh !important;
}

.cke_1_top {
    height: 22vh !important;
}
</style>
<script>
    window.addEventListener('load', function () { 
    setTimeout(function() {
        $( '#LoadingPage' ).addClass("loh76y82");
    }, 3000);
})
</script> 
<body>
	<div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="Dashbroad.php">
          			<span class="align-middle">Admin Space</span>
        		</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Trang chính
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Dashbroad.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Bảng điều khiển</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Thông tin tài khoản</span>
						</a>
					</li>

					<li class="sidebar-header">
						Tiện ích website
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="Dashbroad-EditPostWebsite.PHP">
						<i class="align-middle" data-feather="square"></i> <span class="align-middle">Tạo bài viết website</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Dashbroad-ManagerPostWeb.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Quản lý bài viết website</span>
						</a>
					</li>
                    <li class="sidebar-header">
						Dịch vụ pháp lý
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="Dashbroad-ServiceProgress.php">
						<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quản lý tiến độ</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Dashbroad-EditDocument.php">
						<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Soạn thảo hồ sơ</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Dashbroad-ManagerDocumentCustomer.php.php">
						<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Quản lý hồ sơ khách hàng</span>
						</a>
					</li>

				</ul>

			</div>
		</nav>

		<div class="main">
			
                <?php require "view/MENUTOP-DASHBROAD.php" ?>

                <main class="content" style="padding:1rem !important;height:86h !important">
                    <div style="width:100%;height:100%">
                      
                        <form action="PushPost-Action.php" style="height:100%" method="post" >
                            <div class="row" style="height:100%">
                                <div class="col-lg-9" style="height:100%">
                                    <!-- /////// CKEDITOR 4-->
                                    <script src="ckeditor/ckeditor.js"></script>
                                    <script src="ckeditor/plugins/N1ED-editor/plugin.js"></script>
                                    <textarea name="authorContent" id="Author-Ckeditor"></textarea>
                                </div>
                                
                                <div class="col-lg-3" style="height:100%">
                                    <div class="gr-tool" >
                                        <div class="input-field">
                                            <lable class="form-label">Nhập tiêu đề bài viết</lable>
                                            <input  type="text" name="authorTittle" id="Author-Tittle" class="form-control ryng4" />
                                            <lable class="form-label">Nhập tên tác giả</lable>
                                            <input  type="text" name="authorName" id="Author-Name" id="" class="form-control" />
                                            <lable   class="form-label">Chọn chủ đề</lable>
                                            <select class="form-control" name="authorTopic" aria-label="Default select example" id="Author-Topic"  style="width:100% !important">
                                                <option selected value="0">Nhấp chọn chủ đề của bài viết ....</option>
                                                <option value="Doanh nghiệp Việt Nam">Doanh nghiệp Việt Nam</option>
                                                <option value="Doanh nghiệp Nước ngoài">Doanh nghiệp Nước ngoài</option>
                                                <option value="Kế toán - Thuế">Kế toán - Thuế</option>
                                            </select>
                                            <lable class="form-label">Đặt TOKEN cho bài viết</lable>
                                            <input  style="width:100%!important" class="btn btn-secondary" name="tokenTopic" id="setTOKEN-Post" value=""></input>
                                        </div>
                                        <h2 style="text-align:center">MORE TOOL</h2>
                                        <button  type="button" class="btn btn-primary">Preview Data</button>
                                        <button id="getdata-post" type="submit" name="submit_data" value="publish" class="btn btn-danger">Lưu vào database</button>
                                        <button id="sdg5234"  type="button" class="btn btn-info">Bật chế độ xem thử</button>
                                        <button  class="btn" style="background-color:var(--bs-orange);"><a style="color:#fff;text-decoration:none;" href="./Dashbroad-ManagerPostWeb.php" >Quản lý bài viết</a></button>
                                        <button type="button" class="btn btn-light">Tùy chỉnh</button>
                                    </div>      
                                </div>  
                            </div>
                           
                        </form>
                        <div class="ScenePreview">
                            <a id="OffScenePreview" class="kesh3"><img src="https://img.icons8.com/fluency/68/000000/delete-sign.png"/></a>
                            <div id="showdatapost"></div>
                        </div>

                        <div id="preview-post"></div>
                    </div>
		        </main>
		<?php require "view/MENUBOTTOM-DASHBROAD.php" ?>
		</div>
	</div>

</body>

<script>
    $(document).ready(function(){
       
        var ckeditor = CKEDITOR.replace('Author-Ckeditor',
            { uiColor: '#C2D6FF'});
        // CONFIG PLUGIN
        CKEDITOR.config.removePlugins = 'easyimage';
        CKEDITOR.config.extraPlugins = "N1ED-editor";
      
        $("select#Author-Topic").change(function(){
            var AuthorTopic = $(this).children("option:selected").val();
            //console.log("Data Select : " + AuthorTopic);
            $('#Author-Topic').val(AuthorTopic);
        });
       
        $('#getdata-post').click(function() {
            var Authordata = CKEDITOR.instances['Author-Ckeditor'].getData();
            // REMOVE TAG SCRIPT OFF PLUGIN CKEDITOR BY REGEX

            const patt = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script\s*>/gi
            AuthordatacCLEAN =  Authordata.replace(patt, '');
            //console.log(`Data NOT Clean ${Authordata}`);
            //console.log(`Data Clean ${AuthordatacCLEAN}`);

            const AuthorName = $("#Author-Name").val();
            const AuthorTopic = $("#Author-Topic").val();
            const AuthorTitle = $("#Author-Tittle").val();
            const TOKENPOST = $("#setTOKEN-Post").val();

            if(AuthorName !== "" && AuthorTitle !== "" && AuthorTopic !== "0" && AuthorTitle !== "" && TOKENPOST !== "") {
                const Authortimepush = new Date();
                const year = Authortimepush.getFullYear();
                const month = Authortimepush.getMonth()+1;
                const day = Authortimepush.getDate();
                const minutes = Authortimepush.getMinutes();
                const hour = Authortimepush.getHours();
                const second = Authortimepush.getSeconds();

                console.log(`Data CLEAN: \n
                ${AuthordatacCLEAN}} \n 
                Độ dài data : ${Authordata.length} kí tự \n 
                Thời gian tạo: Ngày ${day}/${month}/${year} lúc ${hour}:${minutes}:${second} \n
                Người tạo: ${AuthorName} \n
                Chủ đề: ${AuthorTopic} \n
                Tiêu đề bài viết: ${AuthorTitle} \n
                TOKEN bài viết : ${TOKENPOST}
                `);

                $.ajax({
                    url: "PushPost-Action.php",
                    method: "POST",
                    dataType: "json",
                    data: { AuthordatacCLEAN : AuthordatacCLEAN,AuthorName : AuthorName,AuthorTopic: AuthorTopic, AuthorTitle:AuthorTitle,TOKENPOST: TOKENPOST},
                    success:function(responseData){
                        


                    } 
                    
                });
            }else {
                alert('Điền đầy đủ thông tin');
            }
           
        });

        $('#sdg5234').click(function() {
            console.log('BẬT chế độ xem thử');
            $( '.ScenePreview' ).addClass("drgt4");
            var Authordata = CKEDITOR.instances['Author-Ckeditor'].getData();
            const patt = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script\s*>/gi
            AuthordatacCLEAN =  Authordata.replace(patt, '');
            const diaLogshow = document.getElementById("showdatapost");
            const showAuthordata00 = $("#Author-Tittle").val();
            diaLogshow.innerHTML += `<p class="j37chl">Tiêu đề bài viết</p><p class="sdg234">${showAuthordata00}</p><p class="j37chl">Nội dung bài viết</p> <br/><div class="loij1">${AuthordatacCLEAN}</div>`;
        
        });

        $('#OffScenePreview').click(function() {

            console.log('Tắt chế độ xem thử');
            $( '.ScenePreview' ).removeClass("drgt4");
            const diaLogshow = document.getElementById("showdatapost");
            diaLogshow.innerHTML = "";

        }); 
     
        $('#setTOKEN-Post').click(function(event) {
            event.preventDefault();
            
          
            const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            function generateString(length) {
                let result = '';
                const charactersLength = characters.length;
                for ( let i = 0; i < length; i++ ) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                }
                return result;
            }
            const tokenPOST = generateString(15);
            //console.log(`Token bài viết này là : ${tokenPOST} `);
          
            $(this).val(`${tokenPOST}`);
        }); 
    });
</script>
<script src="dashbroad-Setting/app.js"></script>
</html>