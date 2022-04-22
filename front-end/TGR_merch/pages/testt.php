<?php include('databaseConnect.php'); ?>
<form action="" method="post">
                        <input type="file" class="file-upload" id="filename" name="filename">
                        <div class="buttons">
                            <input type="submit" class="button btn-2" value="Upload Proof of Payment" name="fileUpload" ></input>
                        </div>
                    </form>

                    <?php
                        if (isset($_POST['fileUpload'])) 
                        {
                            $filetype = array('application/pdf','image/jpeg','image/jpg','image/png');
                            $filename = $_FILES['filename']['name'];
                            $tempname = $_FILES['filename']['tmp_name'];    
                            $folder = "uploads/".$filename;
                            $IDOrder = $_SESSION['IDOrder']; 
                        
                            if(in_array($_FILES['filename']['type'],$filetype))
                            {
                              
                                // Get all the submitted data from the form
                                $sql = "INSERT INTO orders (PaymentImage) where OrderID:$IDOrder VALUES ('$filename')";
                            
                                // Execute query
                                $pdo->query($sql);
                                    
                                // Now let's move the uploaded image into the folder: image
                                if (move_uploaded_file($tempname, $folder))  {
                                    $msg = "Image uploaded successfully";
                                }
                                else
                                {
                                    $msg = "Failed to upload image";
                                }
                            }
                        }
                    ?>