<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

  
   // echo"<br><pre>";
    //var_dump($_FILES['cv']);
    // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
    $tempf=$_FILES['cv']["tmp_name"];
    $destfile="uploads/".$_FILES['cv']['name'];

    if($_FILES['cv']['type']=="application/pdf")
    {
        if(move_uploaded_file($tempf,$destfile))
        {
            echo"<br> you Submitted your cv with email ".$_POST['email'];
    
            echo"<br> File uploaded successfuly";

            echo"<br>".basename($_FILES["cv"]["name"],'.pdf');
           // echo"<br>".pathinfo($_FILES['cv']['name'])['extension'];
           //echo"<br>".pathinfo($_FILES['cv']['name'],PATHINFO_EXTENSION);
          // var_dump(pathinfo($_FILES['cv']));
        }
        else{
            echo"<br> File not uploaded , Please try again";
        }

    }
    else{
        echo"<br> file type not supported , please upload .pdf files only";

    }
   

}

?>