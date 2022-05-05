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


   <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"> 
    
</head>
<style media="screen">
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            cursor:pointer;
        }
        body{
            background-image: url('./imgAdmin/5739655.jpg');
            background-size:cover;
        }
        .background{
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }
        .background .shape{
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        .shape:first-child{
            background: linear-gradient(
                #1845ad,
                #23a2f6
            );
            left: -80px;
            top: -80px;
        }
        .shape:last-child{
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
            right: -30px;
            bottom: -80px;
        }
        form{
            height: auto;
            width: 420px;
            background-color: rgba(255,255,255,0.13);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h3{
            font-size: 39px;
            font-weight: bold;
            line-height: 39px;
        
            margin: 0;
            font-family: serif;
        }

        label{
            display: block;
            margin-top: 1rem;
            font-size: 16px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder{
            color: #e5e5e5;
        }
   
        .social{
        margin-top: 30px;
        display: flex;
        
        }
        button{
        border-radius: 3px;
        padding: 1rem;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
        }



        .gvs45q button {
            width: 47% !important;
        }
        .sedth3 button {
            width: 20% !important;
            margin:0 2rem;
        }
        .social button:hover{
        background-color: rgba(255,255,255,0.47);
        }
        .icstyle {
            margin-right:0.5rem;
        }
        .sgf32 {
            margin-right:1rem;
        }
        .f45r2q {
             border-radius: 3px;
        padding: 1rem;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
            width:100% !important;
            height: 50px;
            margin-top:3rem;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>

        <p style="margin:1rem 0 3rem 0">Hãy nhập các thông tin liên quan, CHúng tôi sẽ giúp bạn tìm thiết lập lại tài khoản!</p>
        <label  class="form-label" for="username">Nhập thông tin liên quan</label>
        <input class="form-control" type="text" placeholder="Nhập Tên đăng nhập, Email hoặc Số điện thoại" id="forget-LOGCLIENT">
        
        <button type="button" class="f45r2q" >Tìm lại mật khẩu</button>

        <div class="social sedth3" style="justify-content: center;">
            <button type="button"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
            <button type="button"><i class="fa fa-facebook-square" aria-hidden="true"></i></button>
            <button type="button"><i class="fa fa-telegram" aria-hidden="true"></i></button>
        </div>
        <a style="display:block;width:100%;text-align:center;margin-top:30px;" class="sfbgw4" href="AdminPage.php">Quay về trang đăng nhập!</a>
    </form>
</body>
</html>


    <script type="text/javascript" src="../lib/pagination/simple-bootstrap-paginator.js"></script>
    <script type="text/javascript" src="./ajax-data-page-news.js"></script>
</body>


</html>