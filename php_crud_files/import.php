<?php require 'connection.php';
if(isset($_POST['import'])){
    $filename=$_FILES['file']['tmp_name'];
    if($_FILES["file"]["size"]>0){
        $file=fopen($filename, "r");

        while(($data=fgetcsv($file,10000,","))!==FALSE){
            $sql ='INSERT INTO person (name,email) VALUES(:name,:email)';
            $statement=$connection->prepare($sql);
            $statement->execute([':name'=>$data[0],'email'=>$data[1]]);

        }
        fclose($file);
        header("Location: index.php");
    }
    else{
        echo "please recheck your file";
    }
}
?>