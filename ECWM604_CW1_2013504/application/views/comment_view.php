<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href= "http://localhost/ECWM604_CW1_2013504/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/ECWM604_CW1_2013504/css/bootstrap.min.css">
        <script src="http://localhost/ECWM604_CW1_2013504/css/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="shortcut icon" href="http://localhost/ECWM604_CW1_2013504/images/logo2.png">
        <title>Add Posts</title>
    </head>

    <body>
        <?php include_once('header.php'); ?>

        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="span12">
                        <?php foreach ($records as $key => $rec): ?>

                            <div class="row">
                                <h4><?= $rec->username ?></h4>
                                <p></p>
                            </div>
                            <div class="row">
                                <blockquote class="blockquote"><h5><?= $rec->comment ?></h5></blockquote> 
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                </div>
            
                               

        

        <div class="row">
            <div class="span10">
                <table align="left">
                    <tr class="col-lg-25">
                        <td><h4 style="color: #555555; font-weight: normal">Username  :</h4></td>
                        <td class="col-lg-15"><input type="text" class="form-control" aria-describedby="sizing-addon1" align="left"></td>
                    </tr>
                    <tr class="col-lg-25">
                        <td><h4 style="color: #555555; font-weight: normal">Comment  :</h4></td>
                        <td class="col-lg-15"><textarea class="form-control" aria-describedby="sizing-addon1" ></textarea></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-default btn-lg active">Add Comment</button></td>
                    </tr>
                </table>
            </div>
        </div>
            </div> 
            </div>
        
        <?php include_once('footer.php'); ?>

    </body>
</html>