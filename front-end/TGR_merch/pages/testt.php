<?php include('databaseConnect.php'); ?>
<form action="" method="post">
                        <input type="file" class="file-upload" id="filename" name="filename">
                        <div class="buttons">
                            <input type="submit" class="button btn-2" value="Upload Proof of Payment" name="fileUpload" ></input>
                        </div>
                    </form>

                    <?php
                        if(isset($_FILES['filename'])){
                            $errors= array();
                            $file_name = $_FILES['filename']['name'];
                            $file_size =$_FILES['filename']['size'];
                            $file_tmp =$_FILES['filename']['tmp_name'];
                            $file_type=$_FILES['filename']['type'];
                            $file_ext=strtolower(end(explode('.',$_FILES['filename']['name'])));
                            
                            $extensions= array("jpeg","jpg","png");
                            
                            if(in_array($file_ext,$extensions)=== false){
                               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                            }
                            
                            if($file_size > 2097152){
                               $errors[]='File size must be excately 2 MB';
                            }
                            
                            if(empty($errors)==true){
                               move_uploaded_file($file_tmp,"uploads/".$file_name);
                               echo "Success";
                            }else{
                               print_r($errors);
                            }
                         }
                    ?>