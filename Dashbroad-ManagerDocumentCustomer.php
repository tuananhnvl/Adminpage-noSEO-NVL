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
    <link rel="stylesheet" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Nam Việt Law Admin</title>
   
	<link href="dashbroad-Setting/app.css" rel="stylesheet">
    <link href= "paganition.css" rel="stylesheet">
</head>
<style>
    #showdatapost {
background:whitesmoke;
width:100%;
height:100%;
overflow:scroll;
padding:2.2rem;
  
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
    position: absolute;
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
.ad3tfdbv {
    width: 420px;
    height: 25vh;
content: "";
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
border-radius: 10px;
z-index:4;
background-color:green;
display:none;
}
.srfhbs {
    display: unset !important;
    z-index:100;
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

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Dashbroad-EditPostWebsite.PHP">
						<i class="align-middle" data-feather="square"></i> <span class="align-middle">Tạo bài viết website</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Dashbroad-ManagerPostWeb.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Quản lý bài viết website</span>
						</a>
					</li>
                    <li class="sidebar-header">
						Dịch vụ pháp lý
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Dashbroad-ServiceProgress.php">
						<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quản lý tiến độ</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Dashbroad-EditDocument.php">
						<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Soạn thảo hồ sơ</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="Dashbroad-ManagerDocumentCustomer.php">
						<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Quản lý hồ sơ khách hàng</span>
						</a>
					</li>

				</ul>

			</div>
		</nav>

		<div class="main">
			
                <?php require "view/MENUTOP-DASHBROAD.php" ?>

                <main  style="padding:1rem !important;height:86vh !important;position:relative !important">
                        <h1>Quản lý hồ sơ khách hàng</h1>
		        </main>
		<?php require "view/MENUBOTTOM-DASHBROAD.php" ?>
		</div>
	</div>

</body>

<script src="dashbroad-Setting/app.js"></script>
</html>