<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload & Display</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<br/>
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
            </div>
            <?php ?>
                <div class="alert alert-danger text-center">
                <?php ?>
                </div>
            <?php ?>
        </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php ?>
                <tr>
                    <td><?php ?></td>
                    <td><?php ?></td>
                    <td><a href="uploads/<?php ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php ?>" download>Download</td>
                </tr>
                <?php ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>