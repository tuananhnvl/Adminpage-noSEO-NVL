<?php 
    require_once ('./connectdb.php');
    if (isset($_POST['sendIDdelete'])) {
        
    $sendIDdelete = mysqli_real_escape_string($con, $_POST['sendIDdelete']);
    if(!empty($sendIDdelete)) {

        $sql02 = "DELETE FROM dataeditor
        WHERE `id` = '$sendIDdelete';";
        $excute02 = mysqli_query($con,$sql02);
        
        if(!$excute02) {
            echo "delete to DB : Thất bại";
            $infoPushedit = "Có lỗi xảy ra ... Vui lòng thử lại sau!!";
   
            $jsonData = array(
                "html"	=> $infoPushedit,	
            );
        
            echo json_encode($jsonData); 
        }
        else {
            $infoPsuhedit = "Đã xoá thành công bài viết có ID là ${sendIDdelete}";
         
            //echo json_encode(array("infoFromServer"=>$infoPsuhedit));

            $jsonData = array(
                "html"	=> $infoPsuhedit,	
            );
        
            echo json_encode($jsonData);  
          
        }
    }
    else {

        exit();
    }
    }
    if (isset($_POST['titleeditChange'], $_POST['topiceditChange'], $_POST['authoreditChange'], $_POST['tokeneditChange'])) {
        $titleeditChange = mysqli_real_escape_string($con,$_POST['titleeditChange']);
    $topiceditChange = mysqli_real_escape_string($con, $_POST['topiceditChange']);
    $authoreditChange = mysqli_real_escape_string($con, $_POST['authoreditChange']);
    $tokeneditChange = mysqli_real_escape_string($con, $_POST['tokeneditChange']);
    $ideditchange = mysqli_real_escape_string($con, $_POST['ideditchange']);
    if(!empty($ideditchange) ||!empty($titleeditChange) || !empty($topiceditChange) || !empty($authoreditChange) || !empty($tokeneditChange)) {

        $sql01 = "UPDATE dataeditor
        SET `tittle-Post` = '$titleeditChange',`topic-Post` = '$topiceditChange',`author-Post` = '$authoreditChange',`token-Post` = '$tokeneditChange'
        WHERE `id` = '$ideditchange';";
        $excute01 = mysqli_query($con,$sql01);
        
        if(!$excute01) {
            echo "Push Change to DB : Thất bại";
            $infoPushedit = "Có lỗi xảy ra ... Vui lòng thử lại sau!!";
   
            $jsonData = array(
                "html"	=> $infoPushedit,	
            );
        
            echo json_encode($jsonData);  
        }
        else {
           
            $infoPushedit = "Đã thay đổi thành công bài viết có ID là ${ideditchange}!";
   
            $jsonData = array(
                "html"	=> $infoPushedit,	
            );
        
            echo json_encode($jsonData);  
          
        }
    }
    else {

        exit();
    }
    }
    if (isset($_POST['authorTittle'], $_POST['authorContent'], $_POST['authorTopic'], $_POST['authorName'], $_POST['tokenTopic'])) {
        $title = mysqli_real_escape_string($con,$_POST['authorTittle']);
        $content = mysqli_real_escape_string($con, $_POST['authorContent']);
        $contentCLEAN = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);
        $topic = mysqli_real_escape_string($con, $_POST['authorTopic']);
        $author = mysqli_real_escape_string($con, $_POST['authorName']);
        $tokenpost = mysqli_real_escape_string($con, $_POST['tokenTopic']); 
        
       
        if(!empty($title) || !empty($contentCLEAN) || !empty($topic) || !empty($author) || !empty($tokenpost)) {
            $sql = "INSERT INTO dataeditor (`tittle-Post`,`content-Post`,`topic-Post`,`author-Post`,`token-Post`) VALUES ('$title','$contentCLEAN','$topic','$author','$tokenpost');";
            $excute = mysqli_query($con,$sql);
            
            if(!$excute) {
                echo "Push Insert to DB : Thất bại";
                exit();
            }
            else {
                header('location: http://localhost/2022/ADMINSPACE/Dashbroad-ManagerPostWeb.php');
                exit();
            }
        }
        else {
            echo "Chưa chạy emort";
            exit();
        }
    }else {

        exit();
    }
  
    


?>