<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/grid.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="LoadingPage.css">
    <script type="text/javascript" src="../lib/jquery/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    
</head>
<script>
    window.addEventListener('load', function () { 
    setTimeout(function() {
        $( '#LoadingPage' ).addClass("loh76y82");
    }, 3000);
})
</script> 
<body>
    <div id="LoadingPage">
        <div class="mkh4">
        <div class="gearbox">
        <div class="overlay"></div>
            <div class="gear one">
            <div class="gear-inner">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            </div>
            <div class="gear two">
            <div class="gear-inner">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            </div>
            <div class="gear three">
            <div class="gear-inner">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            </div>
            <div class="gear four large">
            <div class="gear-inner">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            </div>
        </div>
        <h1>Loading...</h1>
        </div>
    </div>

    <div class="container" style="height:90vh;margin-top:10vh !important">
        <div class="row" style="position:relative;display:flex;height:90vh">
            <!-- BOX EDIT STYLE AND SETTING -->
            <form class="EditBoxStyle" action="PushPost-Action.php" method="post" >
                <div class="col-lg-9 sdff4" style="display:flex">
                  
                    <!-- /////// CKEDITOR 4-->
                    <script src="./ckeditor/ckeditor.js"></script>
                    <script src="./ckeditor/plugins/N1ED-editor/plugin.js"></script>
                    <textarea name="authorContent" id="Author-Ckeditor"></textarea>
                </div>
                
                <div class="col-lg-3 sdff4" style="display:flex">
                    <div class="gr-tool" >
                        <div class="input-field">
                            <lable for="tittle"  class="form-label">Nhập tiêu đề bài viết</lable>
                            <input  type="text" name="authorTittle" id="Author-Tittle" class="form-control ryng4" />
                            <lable for="tittle"  class="form-label">Nhập tên tác giả</lable>
                            <input  type="text" name="authorName" id="Author-Name" id="" class="form-control" />
                            <lable for="tittle"  class="form-label">Chọn chủ đề</lable>
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
                        <button class="btn btn-warring"><a  href="./ManagerPost.php" >Quản lý bài viết</a></button>
                        <button type="button" class="btn btn-light">Tùy chỉnh</button>
                    </div>      
                </div>  
            </form>
        </div>

        <div class="ScenePreview">
            <a id="OffScenePreview" class="kesh3"><img src="https://img.icons8.com/fluency/68/000000/delete-sign.png"/></a>
            <div id="showdatapost"></div>
        </div>
        
      
     
    <div id="preview-post"></div>


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

</body>


</html>