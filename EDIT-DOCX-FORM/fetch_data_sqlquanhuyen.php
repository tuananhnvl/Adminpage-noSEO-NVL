<?php   

 

  include_once 'connectdb.php'; 
 
  if(!empty($_POST["cityID"])){ 
  
      $query = "SELECT `_name`,`_prefix`,`_province_id` FROM `districtdb` WHERE _province_id = ".$_POST['cityID'].""; 
      $result = $con->query($query); 
       

      if($result->num_rows > 0){ 
          echo '<option value="">Chọn quận,huyện</option>'; 
          while($row = $result->fetch_assoc()){  
              echo '<option value="'.$row['_province_id'].'">'.$row['_prefix'].' '.$row['_name'].'</option>'; 
          } 
      }else{ 
          echo '<option value="">ERROR</option>'; 
      } 
  }elseif(!empty($_POST["districtID"])){ 
    
    $query = "SELECT `_name`,`_prefix`,`_district_id` FROM `warddb` WHERE _province_id = ".$_POST['districtID'].""; 
    $result = $con->query($query); 
     
   
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
          echo '<option value="'.$row['_district_id'].'">'.$row['_prefix'].' '.$row['_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">ERROR</option>'; 
    } 
} 

?>