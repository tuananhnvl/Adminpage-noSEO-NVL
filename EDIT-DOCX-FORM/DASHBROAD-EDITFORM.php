<html>

<head>
    <title>Nam Việt Law</title>
    <script type="text/javascript" src="../lib/jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="customDasboardEditDocx.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    tbody, td, tfoot, th, thead, tr {
   
    border-width: 1px !important;
}
</style>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="height:10vh !important">
    <div class="container"  style="height:10vh">
        <div class="navbar-left" style="width:30%;display:flex;height:10vh">
            <a href="../AdminPage.php" class="navbar-text" style="margin:auto">ADMIN SPACE</a>
        </div>
        <div class="navbar-right" style="width:40%;display:flex;justify-content:flex-end;height:10vh">
          
            <button type="button" style="margin:auto" class="btn btn-default navbar-btn"><a  >Quản lý hồ sơ khách hàng</a></button>
            <button type="button" style="margin:auto" class="btn btn-default navbar-btn"><a  href="../EditPost-DashBoard.php" >Tạo bài viết web</a></button>
            <button type="button" style="margin:auto" class="btn btn-default navbar-btn"><a  href="../ManagerPost.php" >Quản lý bài viết wed</a></button>
            <button type="button" style="margin:auto" class="btn btn-default navbar-btn">Quản lý tài khoản</button>
            <button type="button" style="margin:auto" class="btn btn-default navbar-btn">Đăng xuất</button>
        </div>
    
    </div>
</nav>
    <div class="dge4">

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
            <div class="tab-pane fade show active" id="denghi1tvfile" role="tabpanel" aria-labelledby="denghi1tv-tab"><div id="source-html-01"><?php include('FORM-DOCX/CONGTYTNHH1TV/denghi1tv.php');?> </div></div>
            <div class="tab-pane fade" id="dieule1tvfile" role="tabpanel" aria-labelledby="dieule1tv-tab"><div id="source-html-02"><?php include('FORM-DOCX/CONGTYTNHH1TV/dieule1tv.php');?></div></div>
            <div class="tab-pane fade" id="uyquenfile" role="tabpanel" aria-labelledby="uyquyen-tab"><div id="source-html-03"><?php include('FORM-DOCX/CONGTYTNHH1TV/uyquyen.php');?></div></div>
        </div>
      
        </div>

        <div class="tollbarEdit" style="display:flex;justify-content: center;height: 90vh;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div>
                <div class="boxtool">
                    <div class="toolDetail">

                        <h2>Tiêu đề hồ sơ</h2>

                            <p class="grfiedinput"><label id="toollable">Nơi nộp hồ sơ</label> <input class="toolinput"
                                    type="text" /></p>
                            <p class="grfiedinput"> <label class="toollable">Cơ quan nộp</label>
                                <input type="text"  value="" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Họ tên người đề nghị</label>
                                <input type="text" />
                            </p>

                        <h2>Hình thức đăng ký</h2>

                            <p class="grfiedinput">
                                <select id="">
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
                                <label class="toollable">Tên công ty (tiếng Việt)</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"><label class="toollable">Tên công ty (tiếng Anh)</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Tên công ty (viết tắt)</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <a>Kiểm tra trùng tên</a></p>

                        <h2>Địa chỉ trụ sở chính</h2>
                            <p class="grfiedinput"> <label class="toollable">Tỉnh/Thành phố:</label>
                                <select id="pick-city" >
                                    <option value="">Chọn thành phố!</option>
                                    <?php   
                                        include "connectdb.php";

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
                            <p class="grfiedinput"> <label class="toollable">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
                                <select id="pick-district">
                                    <option value="">Vui lòng chọn thành phố!</option>
                                </select>
                            </p>
                                <p class="grfiedinput"> <label class="toollable">Xã/Phường/Thị trấn:</label>
                                <select id="pick-ward">
                                    <option value="">Vui lòng chọn quận, huyện!</option>
                                </select>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Số nhà, đường phố/xóm/ấp/thôn:</label>
                                <input type="text" />
                            </p>





                        <h2>Vốn điều lệ</h2>
                            <p class="grfiedinput"> <label class="toollable">Nhập vốn bằng số</label>
                                <input type="number" />
                            </p>
                            <p class="grfiedinput">
                                <label class="toollable">Nhập vốn bằng chữ</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Nguồn vốn:</label>
                                <select id="">
                                    <option value="">Vui lòng chọn nguồn vốn!</option>
                                    <option value="">Vốn ngân sách nhà nước</option>
                                    <option value="">Vốn tư nhân</option>
                                    <option value="">Vốn khác</option>
                                    <option value="">Vui lòng chọn nguồn vốn!</option>
                                </select>
                            </p>
                            <p class="grfiedinput">
                                <input type="text" placeholder="Điền số tiền (bằng số) ..."/>
                                <label class="toollable">Tỷ lệ mặc định 100%</label>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Tài sản góp vốn:</label>
                                <select id="">
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
                                <input type="text" placeholder="Điền số tiền (bằng số) ..."/>
                                <label class="toollable">Tỷ lệ mặc định</label>
                            </p>
                        




                        <h2>Thông tin Doanh nghiệp</h2>
                            <p class="grfiedinput"> <label class="toollable">Điện thoại:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Fax<em>(nếu có)</em>:</label>
                                <input type="text" />
                            </p>

                            <p class="grfiedinput"> <label class="toollable">Email<em>(nếu có)</em>:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Website<em>(nếu có)</em>:</label>
                                <input type="text" />
                            </p>





                        <h2>Thông tin Chủ sở hữu</h2>
                            <p class="grfiedinput"> <label class="toollable">Họ và tên:</label>
                                <input type="text" id="valueTTDKinput" style="text-transform :uppercase"/>
                            </p>
                          
                            <p class="grfiedinput"> <label class="toollable">Loại giấy tờ:</label>
                                <select id="">
                                    <option value="">Nhập chọn!</option>
                                    <option value="">Chứng minh nhân dân</option>
                                    <option value="">Căn cước công dân</option>
                                    <option value="">Hộ chiếu</option>
                                    <option value="">Khác ...</option>
                                </select>
                            </p>

                            <p class="grfiedinput"> <label class="toollable">Số chứng thực:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Ngày cấp:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Ngày hết hạn<em>(nếu có)</em>:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Nơi cấp:</label>
                                <input type="text" list="noicap-idcard" />
                                <datalist id="noicap-idcard">
                                    <option>Nhập chọn!</option>
                                    <option>Công An tỉnh ......</option>
                                    <option>Công An thành phố ......</option>
                                    <option>Căn cước công dân</option>
                                    <option>Hộ chiếu</option>
                                    <option>Khác</option>
                                </datalist>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Tỉnh/Thành phố:</label>
                                <select id="pick-city" >
                                    <option value="">Chọn thành phố!</option>
                                    <?php   
                                        include "connectdb.php";

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
                            <p class="grfiedinput"> <label class="toollable">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
                                <select id="pick-district">
                                    <option value="">Vui lòng chọn thành phố!</option>
                                </select>
                            </p>
                                <p class="grfiedinput"> <label class="toollable">Xã/Phường/Thị trấn:</label>
                                <select id="pick-ward">
                                    <option value="">Vui lòng chọn quận, huyện!</option>
                                </select>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Số nhà, đường phố/xóm/ấp/thôn:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <a>Cũng là Đại diện pháp luật</a></p>

                        <h2>Thông tin Đại diện pháp luật</h2>
                            <p class="grfiedinput"> <label class="toollable">Họ và tên:</label>
                                <input type="text" id="valueTTDKinput" style="text-transform :uppercase"/>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Loại giấy tờ:</label>
                                <select id="pick-district">
                                    <option value="">Nhập chọn!</option>
                                    <option value="">Chứng minh nhân dân</option>
                                    <option value="">Căn cước công dân</option>
                                    <option value="">Hộ chiếu</option>
                                    <option value="">Khác ...</option>
                                </select>
                            </p>

                            <p class="grfiedinput"> <label class="toollable">Số chứng thực:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Ngày cấp:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Ngày hết hạn<em>(nếu có)</em>:</label>
                                <input type="text" />
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Tỉnh/Thành phố:</label>
                                <select id="pick-city" >
                                    <option value="">Chọn thành phố!</option>
                                    <?php   
                                        include "connectdb.php";

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
                            <p class="grfiedinput"> <label class="toollable">Quận/Huyện/Thị xã/Thành phố thuộc tỉnh:</label>
                                <select id="pick-district">
                                    <option value="">Vui lòng chọn thành phố!</option>
                                </select>
                            </p>
                                <p class="grfiedinput"> <label class="toollable">Xã/Phường/Thị trấn:</label>
                                <select id="pick-ward">
                                    <option value="">Vui lòng chọn quận, huyện!</option>
                                </select>
                            </p>
                            <p class="grfiedinput"> <label class="toollable">Số nhà, đường phố/xóm/ấp/thôn:</label>
                                <input type="text" />
                            </p>
                   

                        <h2>Ngành nghề kinh doanh</h2>

                    
                        </div>
                </div>
                <div style="display: flex; height: 10vh;">
                    <div style="margin:1rem auto">
                        <button id="btn-exportDOCX">Xuất DOCX</button>
                        <button id="btn-exportPDF">Xuất PDF</button>
                        <button id="btn-previewPRINT">Print Preview</button>
                       
                       
                      
                    </div>
                </div>
            </div>
        </div>

    </div>



    </div>
    <script type="text/javascript" src="CONTROL-VALUE.js"></script>
    <script>
    $(document).ready(function() {
    
      
        $('#pick-city').on('change', function(){
            $('#pick-ward').html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
            var cityID = $(this).val();
            if(cityID){
                $.ajax({
                    type:'POST',
                    url:'fetch_data_sqlquanhuyen.php',
                    data:'cityID='+cityID,
                    success:function(html){
                        $('#pick-district').html(html);
                       
                    }
                }); 
            }else{
               
                $('#pick-district').html('<option value="">Vui lòng chọn thành phố,tỉnh ...</option>'); 
                $('#pick-ward').html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
            }
        });

        $('#pick-district').on('change', function(){
            $('#pick-ward').html('<option value="">Vui lòng chọn quận,huyện ...</option>'); 
            var districtID = $(this).val();
            if(districtID){
                $.ajax({
                    type:'POST',
                    url:'fetch_data_sqlquanhuyen.php',
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
</body>

</html>