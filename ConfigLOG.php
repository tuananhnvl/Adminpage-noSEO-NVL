<?php 
    require_once ('./connectdb.php');

    if (isset($_POST['usernameCREAT'],$_POST['passwordCREAT'],$_POST['emailCREAT'],$_POST['pickInfoCREAT'])) {
        $usernameCREAT = mysqli_real_escape_string($con,$_POST['usernameCREAT']);
        $passwordCREAT = mysqli_real_escape_string($con, $_POST['passwordCREAT']);
        $emailCREAT = mysqli_real_escape_string($con, $_POST['emailCREAT']);
        $phoneCREAT = mysqli_real_escape_string($con, $_POST['phoneCREAT']);
        $pickInfoCREAT = mysqli_real_escape_string($con, $_POST['pickInfoCREAT']); 
     
        if(empty($phoneCREAT)) {
            $phoneCREAT = 'Không đăng ký số điện thoại';
        }
        // Chưa get dc value pickSer tại creatUser
        if($pickInfoCREAT === 'on') {
            $pickInfoCREAT = 'Đăng ký nhận tin từ Nam Việt Law';
        }
    
        if(!empty($usernameCREAT) ||!empty($passwordCREAT) || !empty($emailCREAT) || !empty($phoneCREAT)|| !empty($pickInfoCREAT)) {
            $sqlCREATUSER = "INSERT INTO userlog (`userName`,`userPassword`,`userEmail`,`userPhone`,`userSer`) VALUES ('$usernameCREAT','$passwordCREAT','$emailCREAT','$phoneCREAT','$pickInfoCREAT');";
            $excuteCREATUSER = mysqli_query($con,$sqlCREATUSER);
            if(!$excuteCREATUSER) {
                echo "Creat User ERROR!";
                exit();
            }
            else {
                $infoCREATUSER = "Chào mừng ${usernameCREAT}!";
       
                $jsonData = array(
                    "html"	=> $infoCREATUSER,	
                );
            
                echo json_encode($jsonData);  
            }
        } 
        else {
            echo ' Lỗi FUNCT CREAT USER';
        }
    }
  
    
    
    if (isset($_POST['usernameLOGIN'],$_POST['passwordLOGIN'])) {
        
        $usernameLOGIN = mysqli_real_escape_string($con,$_POST['usernameLOGIN']);
        $passwordLOGIN = mysqli_real_escape_string($con, $_POST['passwordLOGIN']);
        if(!empty($usernameLOGIN) ||!empty($passwordLOGIN)) {
         
            $sqlLOGINUSER = "SELECT userName,userPassword FROM `userlog` WHERE userName LIKE '%$usernameLOGIN%' AND userPassword LIKE '$passwordLOGIN%' ";
            $excuteLOGINUSER = mysqli_query($con,$sqlLOGINUSER);
            if (mysqli_num_rows($excuteLOGINUSER)>0)
            {
                $infoLOGINUSER = "Chào mừng ${usernameLOGIN} ĐÃ ĐĂNG NHẬP THÀNH CÔNG!";
                session_start();
                $_SESSION['sesionLOG'] = $usernameLOGIN;
                 $jsonData = array(
                    "html"	=> $infoLOGINUSER,	
                 
                    "tokenLOGSUCESS" => "4AK34I867T38RGIAE343",
                );  
             
                echo json_encode($jsonData);  
                exit(); 
            }
            else
            {
                $infoLOGINUSER = "Sai tên đăng nhập hoặc mật khẩu";
                $jsonData = array(
                    "html"	=> $infoLOGINUSER,	
                );
                echo json_encode($jsonData);   
            }
        } 
        else {
            echo ' Lỗi FUNCT LOGIN USER';
        }
    }
?>