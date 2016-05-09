<?php
   $result = 0;
 
   $target_path = '.'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'SimpleGallery'.DIRECTORY_SEPARATOR . basename( $_FILES['imageFile']['name']);
   
   echo $target_path;
 
   if(@move_uploaded_file($_FILES['imageFile']['tmp_name'], $target_path)) {
      $result = 1;
   }
 
   sleep(1);
?>
<script language="javascript" type="text/javascript">
   window.top.window.stopUpload(<?php echo $result; ?>);
</script>   