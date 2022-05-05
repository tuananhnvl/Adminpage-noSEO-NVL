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

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="../lib/jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Nam Việt Law Admin</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="dashbroad-Setting/app.css" rel="stylesheet">
    <link href= "paganition.css" rel="stylesheet">
</head>
<style>
	.source-html-outer::-webkit-scrollbar {
		display: none;
	}

	.source-html-outer {
		border: #d0d0d0 1px solid;
		height: 83vh;
		background-color:#fff;
		-ms-overflow-style: none;
		/* IE and Edge */
		scrollbar-width: none;
		/* Firefox */
		border-radius: 3px;
		padding: 0px 20px 0px 20px;
		overflow-y: scroll;
	}
	.sadfg34 {
		overflow-x: hidden;
		height: 68vh;
	}

		tbody, td, tfoot, th, thead, tr {

		border-width: 1px !important;
	}
	table {
		margin: 0 auto;
	}
	.styleshowValue {
        width: fit-content;
        display: inline-block;
        height: 20px;
        border: 1px solid gray;
        border-radius:5px;
        background-color:lightblue;
        font-weight:bold !important;
        font-style: italic !important;
        padding:0 0.3rem ;
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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="Dashbroad-EditDocument.php">
						<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Soạn thảo hồ sơ</span>
						</a>
					</li>

					<li class="sidebar-item">
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
					<div class="row">
						<div class="col-lg-9" >
							<div class="source-html-outer">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="denghi1tv-tab" data-bs-toggle="tab" data-bs-target="#denghi1tvfile" type="button" role="tab" aria-controls="denghi1tvfile" aria-selected="true">Giấy đề nghị đăng ký doanh nghiệp</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="dieule1tv-tab" data-bs-toggle="tab" data-bs-target="#dieule1tvfile" type="button" role="tab" aria-controls="dieule1tvfile" aria-selected="false">Điều lệ công ty</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="uyquyen-tab" data-bs-toggle="tab" data-bs-target="#uyquenfile" type="button" role="tab" aria-controls="uyquenfile" aria-selected="false">Giấy Uỷ quyền</button>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="denghi1tvfile" role="tabpanel" aria-labelledby="denghi1tv-tab"><div id="source-html-01"><?php include('./EDIT-DOCX-FORM/FORM-DOCX/CONGTYTNHH1TV/denghi1tv.php');?> </div></div>
									<div class="tab-pane fade" id="dieule1tvfile" role="tabpanel" aria-labelledby="dieule1tv-tab"><div id="source-html-02"><?php include('./EDIT-DOCX-FORM/FORM-DOCX/CONGTYTNHH1TV/dieule1tv.php');?></div></div>
									<div class="tab-pane fade" id="uyquenfile" role="tabpanel" aria-labelledby="uyquyen-tab"><div id="source-html-03"><?php include('./EDIT-DOCX-FORM/FORM-DOCX/CONGTYTNHH1TV/uyquyen.php');?></div></div> 
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="toolDetail" style="overflow-x: hidden;height: 72vh;">
								<h2>Tiêu đề hồ sơ</h2>

									<p class="grfiedinput"><label class="form-label">Nơi nộp hồ sơ</label> 
									<input class="form-control" type="text" /></p>
									<p class="grfiedinput"> <label class="form-label">Cơ quan nộp</label>
										<input type="text"  class="form-control" type="text" />
									</p>
									<p class="grfiedinput"> <label class="form-label">Họ tên người đề nghị</label>
										<input type="text"  class="form-control" type="text"/>
									</p>

								<h2>Hình thức đăng ký</h2>

									<p class="grfiedinput">
										<select id="" class="form-select">
											<option value="">Chọn hình thức đăng ký ...</option>
											<option value="">Thành lập mới</option>
											<option value="">Thành lập trên cơ sở tách doanh nghiệp</option>
											<option value="">Thành lập trên cơ sở chia doanh nghiệp</option>
											<option value="">Thành lập trên cơ sở hợp nhất doanh nghiệp</option>
											<option value="">Thành lập trên cơ sở chuyển đổi loại hình doanh nghiệp</option>
											<option value="">Thành lập trên cơ sở chuyển đổi từ hộ kinh doanh</option>
											<option value="">Thành lập trên cơ sở chuyển đổi từ cơ sở bảo trợ xã hội/quỹ xã hội/quỹ từ thiện</option>
										</select>
									</p>
								

								<h2>Tên Doanh nghiệp</h2>
									<p class="grfiedinput">
										<label class="form-label">Tên công ty (tiếng Việt)</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"><label class="form-label">Tên công ty (tiếng Anh)</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Tên công ty (viết tắt)</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <a>Kiểm tra trùng tên</a></p>

								<h2>Địa chỉ trụ sở chính</h2>
									<p class="grfiedinput"> <label class="form-label">Tỉnh/Thành phố:</label>
										<select id="pick-city" class="form-select" >
											<option value="">Chọn thành phố!</option>
											<?php   
												include "./EDIT-DOCX-FORM/connectdb.php";

												// Fetch CITYDB
												$sql_citydb = "SELECT `_name`,`id` FROM `citydb`";
												$result_citidb = mysqli_query($con,$sql_citydb);
												while($row = mysqli_fetch_assoc($result_citidb) ){
													$city_id = $row['id'];
													$city_name = $row['_name'];
													
													echo "<option value='".$city_id."' >".$city_name."</option>";
												}
											?>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
										<select id="pick-district" class="form-select">
											<option value="">Vui lòng chọn thành phố!</option>
										</select>
									</p>
										<p class="grfiedinput"> <label class="form-label">Xã/Phường/Thị trấn:</label>
										<select id="pick-ward" class="form-select">
											<option value="">Vui lòng chọn quận, huyện!</option>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Số nhà, đường phố/xóm/ấp/thôn:</label>
										<input type="text"  class="form-control"/>
									</p>





								<h2>Vốn điều lệ</h2>
									<p class="grfiedinput"> <label class="form-label">Nhập vốn bằng số</label>
										<input type="number"  class="form-control"/>
									</p>
									<p class="grfiedinput">
										<label class="form-label">Nhập vốn bằng chữ</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Nguồn vốn:</label>
										<select id="" class="form-select">
											<option value="">Vui lòng chọn nguồn vốn!</option>
											<option value="">Vốn ngân sách nhà nước</option>
											<option value="">Vốn tư nhân</option>
											<option value="">Vốn khác</option>
											<option value="">Vui lòng chọn nguồn vốn!</option>
										</select>
									</p>
									<p class="grfiedinput">
										<input type="text"  class="form-control" placeholder="Điền số tiền (bằng số) ..."/>
										<label class="form-label">Tỷ lệ mặc định 100%</label>
									</p>
									<p class="grfiedinput"> <label class="form-label">Tài sản góp vốn:</label>
										<select id="" class="form-select">
											<option value="">Vui lòng chọn nguồn vốn!</option>
											<option value="">Đồng Việt Nam</option>
											<option value="">Ngoại tệ tự do chuyển đổi</option>
											<option value="">Vàng</option>
											<option value="">Quyền sử dụng đất</option>
											<option value="">Quyền sở hữu trí tuệ</option>
											<option value="">Các tài sản khác</option>
										
										</select>
									</p>
									<p class="grfiedinput">
										<input type="text"  class="form-control" placeholder="Điền số tiền (bằng số) ..."/>
										<label class="form-label">Tỷ lệ mặc định</label>
									</p>
								




								<h2>Thông tin Doanh nghiệp</h2>
									<p class="grfiedinput"> <label class="form-label">Điện thoại:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Fax<em>(nếu có)</em>:</label>
										<input type="text"  class="form-control"/>
									</p>

									<p class="grfiedinput"> <label class="form-label">Email<em>(nếu có)</em>:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Website<em>(nếu có)</em>:</label>
										<input type="text"  class="form-control"/>
									</p>
								<h2>Thông tin Chủ sở hữu</h2>
									<p class="grfiedinput"> <label class="form-label">Họ và tên:</label>
										<input type="text" id="valueTTDKinput" style="text-transform :uppercase"  class="form-control"/>
									</p>

									<p class="grfiedinput"> <label class="form-label">Loại giấy tờ:</label>
										<select id="" class="form-select">
											<option value="">Nhập chọn!</option>
											<option value="">Chứng minh nhân dân</option>
											<option value="">Căn cước công dân</option>
											<option value="">Hộ chiếu</option>
											<option value="">Khác ...</option>
										</select>
									</p>

									<p class="grfiedinput"> <label class="form-label">Số chứng thực:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Ngày cấp:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Ngày hết hạn<em>(nếu có)</em>:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Nơi cấp:</label>
										<input type="text" list="noicap-idcard" class="form-control" />
										<datalist id="noicap-idcard">
											<option>Nhập chọn!</option>
											<option>Công An tỉnh ......</option>
											<option>Công An thành phố ......</option>
											<option>Căn cước công dân</option>
											<option>Hộ chiếu</option>
											<option>Khác</option>
										</datalist>
									</p>
									<p class="grfiedinput"> <label class="form-label">Tỉnh/Thành phố:</label>
										<select id="pick-city" class="form-select">
											<option value="">Chọn thành phố!</option>
											<?php   
												include "./EDIT-DOCX-FORM/connectdb.php";

												// Fetch CITYDB
												$sql_citydb = "SELECT `_name`,`id` FROM `citydb`";
												$result_citidb = mysqli_query($con,$sql_citydb);
												while($row = mysqli_fetch_assoc($result_citidb) ){
													$city_id = $row['id'];
													$city_name = $row['_name'];
													
													echo "<option value='".$city_id."' >".$city_name."</option>";
												}
											?>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
										<select id="pick-district" class="form-select">
											<option value="">Vui lòng chọn thành phố!</option>
										</select>
									</p>
										<p class="grfiedinput"> <label class="form-label">Xã/Phường/Thị trấn:</label>
										<select id="pick-ward" class="form-select">
											<option value="">Vui lòng chọn quận, huyện!</option>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Số nhà, đường phố/xóm/ấp/thôn:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <a>Cũng là Đại diện pháp luật</a></p>

								<h2>Thông tin Đại diện pháp luật</h2>
									<p class="grfiedinput"> <label class="form-label">Họ và tên:</label>
										<input type="text" id="valueTTDKinput" style="text-transform :uppercase"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Loại giấy tờ:</label>
										<select id="pick-district" class="form-select">
											<option value="">Nhập chọn!</option>
											<option value="">Chứng minh nhân dân</option>
											<option value="">Căn cước công dân</option>
											<option value="">Hộ chiếu</option>
											<option value="">Khác ...</option>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Số chứng thực:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Ngày cấp:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Ngày hết hạn<em>(nếu có)</em>:</label>
										<input type="text"  class="form-control"/>
									</p>
									<p class="grfiedinput"> <label class="form-label">Tỉnh/Thành phố:</label>
										<select id="pick-city" class="form-select">
											<option value="">Chọn thành phố!</option>
											<?php   
												include "./EDIT-DOCX-FORM/connectdb.php";

												// Fetch CITYDB
												$sql_citydb = "SELECT `_name`,`id` FROM `citydb`";
												$result_citidb = mysqli_query($con,$sql_citydb);
												while($row = mysqli_fetch_assoc($result_citidb) ){
													$city_id = $row['id'];
													$city_name = $row['_name'];
													
													echo "<option value='".$city_id."' >".$city_name."</option>";
												}
											?>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
										<select id="pick-district" class="form-select" name="getvaluenear"> 
											<option value="">Vui lòng chọn thành phố!</option>
										</select>
									</p>
										<p class="grfiedinput"> <label class="form-label">Xã/Phường/Thị trấn:</label>
										<select id="pick-ward" class="form-select">
											<option value="">Vui lòng chọn quận, huyện!</option>
										</select>
									</p>
									<p class="grfiedinput"> <label class="form-label">Số nhà, đường phố/xóm/ấp/thôn:</label>
										<input type="text"  class="form-control"/>
									</p>
						

								<h2>Ngành nghề kinh doanh</h2>
							</div>	
							<div style="display: flex; height: 6vh;">
								<div style="margin:1rem auto">
									<button id="btn-exportDOCX">Xuất DOCX</button>
									<button id="btn-exportPDF">Xuất PDF</button>
									<button id="btn-previewPRINT">Print Preview</button>
								
								
								
								</div>
							</div>
						</div>
					</div>
		        </main>
		<?php require "view/MENUBOTTOM-DASHBROAD.php" ?>
		</div>
	</div>

</body>
<script type="text/javascript" src="./EDIT-DOCX-FORM/CONTROL-VALUE.js"></script>
    <script>
    $(document).ready(function() {

		var yoyoyo = document.querySelectorAll('#pick-city');    
		var bobobo = document.querySelectorAll('#pick-district'); 
		console.log(yoyoyo);              
      


		$(yoyoyo).each(function( index ) {
            $(this).on('click', function() {
				//var xw=$(this).children('option')[1];
				//$(xw).html('<option value="">Chọn quận,huyện ...</option>');
				var cityID = $(this).val();

				var yp = $(this).parent();
				var xp = $(yp).next();
			
				var xasdaa = $(xp).next();
				var adqs = $(xasdaa).children('select');
				
				var ru = $(xp).children('select');
				if(cityID){
                $.ajax({
                    type:'POST',
                    url:'./EDIT-DOCX-FORM/fetch_data_sqlquanhuyen.php',
                    data:'cityID='+cityID,
                    success:function(html){
                        $(ru).html(html);
                 
                    }
                }); 
				}else{
				
					$(ru).html('<option value="">Vui lòng chọn thành phố,tỉnh ...</option>'); 
					$(adqs).html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
				}
            });
        });
		

        $('#pick-district').on('change', function(){
            $('#pick-ward').html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
            var districtID = $(this).val();
            if(districtID){
                $.ajax({
                    type:'POST',
                    url:'./EDIT-DOCX-FORM/fetch_data_sqlquanhuyen.php',
                    data:'districtID='+districtID,
                    success:function(html){
                        $('#pick-ward').html(html);
                    }
                }); 
            }else{
                $('#pick-ward').html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
            }
        });

        $('#btn-exportDOCX').on('click', function() {
            var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
                "xmlns:w='urn:schemas-microsoft-com:office:word' " +
                "xmlns='http://www.w3.org/TR/REC-html40'>" +
                "<head><meta charset='utf-8'><title>HTML to DOCX NamVietLaw</title><style type='text/css'>@page {margin:1cm 1cm 1cm 1cm;}div.Section{page:Section;}p{margin:0.2cm 0}</style></head><body>";
            var footer = "</body></html>";
            var sourceHTML01 = header + document.getElementById("source-html-01").innerHTML + footer;
            var source01 = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML01);


        var fileDownload = document.createElement("a");
            document.body.appendChild(fileDownload);
            fileDownload.href = source01;
            fileDownload.download = 'Giấy Đề nghị.doc';
            fileDownload.click();
            document.body.removeChild(fileDownload); 

          /*   var sourceHTML02 = header + document.getElementById("source-html-02").innerHTML + footer;
            var source02 = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML02);
            var fileDownload = document.createElement("a");
            document.body.appendChild(fileDownload);
            fileDownload.href = source02;
            fileDownload.download = 'Điều lệ.doc';
            fileDownload.click();
            document.body.removeChild(fileDownload);

            var sourceHTML03 = header + document.getElementById("source-html-03").innerHTML + footer;
            var source03 = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML03);
            var fileDownload = document.createElement("a");
            document.body.appendChild(fileDownload);
            fileDownload.href = source03;
            fileDownload.download = 'Giấy Uỷ quyền.doc';
            fileDownload.click();
            document.body.removeChild(fileDownload); */
        });
    });
    </script>
<script src="dashbroad-Setting/app.js"></script>
</html>