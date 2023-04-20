<?php
if(isset($_FILES['csvfile'])){
$name=$_FILES['csvfile']['name'];
$tmpname=$_FILES['csvfile']['tmp_name'];
$size=$_FILES['csvfile']['size'];
$error=$_FILES['csvfile']['error'];
if(!is_dir('csvfiles')){mkdir('csvfiles',0777);}
if($error==0){
    $allowed=['csv'];
   $ar=strtolower(strrev(explode('.',strrev($name))[0]));
   if(in_array($ar,$allowed)){
    if(move_uploaded_file($tmpname,'csvfiles/'.$name)){
    $newfile='csvfiles/'.$name;
        echo $newfile;
}
   }else{
       echo 'failed';
   }
}else{echo 'failed';}
}



?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php
echo "<div class='card mx-auto' style='height:200px;width:400px;margin-top:20px;'>
<form id='uploadf' method='post'>
<div class='row no-gutters status' style='height:20px;'></div>
<div class='row no-gutters' style='padding-left:10px;margin-top:10px'>Select the file to upload</div>
<div class='row no-gutters' style='padding-left:10px;margin-top:10px'>
<input type='file' id='file' name='csvfile' accept='.csv' required style='padding-left:10px;margin-top:10px'></div>
<div class='row no-gutters' style='padding-left:10px;margin-top:10px'><button class='btn btn-success'>Upload</button></div>
</form>
</div>
";
?>
<script>
$("#uploadf").on('submit',(e)=>{
    e.preventDefault();
    let data=new FormData();
    data.append('csvfile',document.getElementById('file').files[0]);
    let file=document.getElementById('file').files[0];
    let xht= new XMLHttpRequest();
    xht.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){console.log(this.responseText)
            
                
                document.getElementById('uploadf').reset();
                location.replace('view.php?viewfile='+this.responseText)
                
            
        }
    }
    xht.open("POST",'datareceiver.php',true);
    xht.send(data);
})
</script>


<?php
ini_set('auto_detect_line_endings',TRUE);
if(isset($_GET['viewfile'])){
    $filename=$_GET['viewfile'];
    $filedata=fopen($filename,'r');
    
    $ln=0;
    $data='';
    echo "<div class='container card'>";
    $ln=0;
    while($row=fgetcsv($filedata,300,';','"',`\s`)){
       $ln++; 
   if($ln>1) {
    $row = preg_replace('/(\\\",)/','\\ ",',$row);
    $row = preg_replace('/(\\\"("?),)/',' ',$row); 
     echo "<h1>" . $row[7]. " - Darlehen " . $row[4] . "</h1>";
     echo "<p>" . (($row[1] == 'm') ? "Sehr geehrter Herr " : "Sehr geehrte Frau ") . $row[2] . ", </p><p>As a loan administrator, we would like to send you an interest plan for the installment due on " . $row[5] . " for the " . (($row[3] == '1') ? "loan " : "loans ") . " " . $row[4] . ", for the " . (($row[6] == 'm') ? "Darlehensnehmer der " : "Darlehensnehmerin die ") . " " . $row[7] . "</p><p>Mit freundlichen Gr��en,<br>Bing Bang</p><p></p><hr><p></p>";
    }
    echo "</div>";$ln++;
}
fclose($filedata);
}

?>