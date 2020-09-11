<!DOCTYPE html>
<html>
<head>
	<title>Assigment Evidence</title>
</head>
<body>
<div style="clear:both">
    <center>
    <?php 
    include('db_page_2.php');
    $cn=db_connection();
    if(isset($_GET['get_pdf'])){
        $pdf = $_GET['get_pdf'];
        if(file_exists($pdf)){
        ?>
        <embed src="<?php echo $pdf; ?>" width="800px" height="2100px" />
        <?php
        }else{
            echo "<h1 align='center' style='color:red'>No Evidence Found !</h1>";
        }
        
    }elseif(isset($_GET['view_evidence_id'])){
                    $id=$_GET['view_evidence_id'];
                    $sql="SELECT * FROM `submit_assigments` WHERE `primary_key`='$id'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['std_id'];
                        $fk_assigment=$get_submit_data['assigment'];
                      }
                    }

                    $sql="SELECT * FROM `attach_evidences` WHERE `id`='$id_b' and `assigment`='$fk_assigment'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['id'];
                        $fk_assigment=$get_submit_data['assigment'];
                        $fk_assigment_files=$get_submit_data['files'];
                        $text=pathinfo($fk_assigment_files,PATHINFO_EXTENSION);
                        if(file_exists($fk_assigment_files)){
                            if($text == 'pdf' or $text == 'PDF'){
                                ?>
                                <embed src="<?php echo $fk_assigment_files; ?>" style="width: 800px;height: 2100px;"> 
                                    <hr>
                                <?php
                            }else{
                                ?>
                                <embed src="<?php echo $fk_assigment_files; ?>" style="width: auto;height: auto;"> 
                                    <hr>
                                <?php
                            }
                            
                            
                        }else{
                            echo "<h1 align='center' style='color:red'>No Evidence Found !</h1>";
                        }
                      }
                    }

        
    }elseif (isset($_GET['doc_id'])) {
        $doc_file=$_GET['doc_id'];
        ?>
        <div id="docx_id" style="width: auto;height: auto;margin: auto auto;font-family: candara">
        <?php
           include('functions_page.php');
            $content = read_file_docx($doc_file);  
            if($content !== false) {  
               echo nl2br($content);  
            }  
            else {  
                echo 'Couldn\'t open the file. Please check that file.';  
            }
            ?>
            </div>
        <?php
    }
    else{
        echo "<h1 align='center' style='color:red'>No Evidence Found !</h1>";
    }
    ?>
  
    </center>
</div>


</body>
</html>