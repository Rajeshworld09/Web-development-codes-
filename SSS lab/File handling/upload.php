<!DOCTYPE html>
<html>
<head>
  <title>Upload and Display File</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style>
.form{
width: 100%;
display: inline-block;
position: inherit;
padding: 6px;
}

.label {
padding: 50px;
width: 10%;
margin-left:40%;
}
.input{
position: inherit;
padding: 3px;
margin-left: 50%;
}

.btn{
margin-left: 6.5%;
background-color: blue;
color: white;
}
</style>
<?php

?>
<center>
<h1>Upload and Display</h1>
<form class="form" method="post" action="" enctype="multipart/form-data">
<div style="margin-left: 9%">
<label>File:</label>
<input type="file" name="file"> <br/>
</div>
<button type="submit" name="save" class="btn"><i class="fa fa-upload fw-fa"></i> Upload</button>&nbsp 
<button type="submit" name="save" class="btn"><i class="fa fa-display fw-fa"></i>Display</button>

</form>
</center>
<br>


</body>
</html>