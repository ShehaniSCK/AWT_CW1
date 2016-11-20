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
                    <div class="span10">
                        <table align="center">
                            <tr class="col-lg-25">
                                <td class="col-lg-3"><h3 style="color: grey; font-weight: normal">Username  :</h3></td>
                                <td class="col-lg-15"><input type="text" class="form-control" aria-describedby="sizing-addon1" align="left"></td>
                            </tr>
                            <tr class="col-lg-25">
                                <td class="col-lg-3"><h3 style="color: gray; font-weight: normal">Link  :</h3></td>
                                <td class="col-lg-15"><input type="text" class="form-control" aria-describedby="sizing-addon1" align="left"></td>
                            </tr>
                            <tr class="col-lg-25">
                                <td class="col-lg-3"><h3 style="color: grey; font-weight: normal">Description  :</h3></td>
                                <td class="col-lg-15"><textarea class="form-control" aria-describedby="sizing-addon1" ></textarea></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <center><button type="button" class="btn btn-default btn-lg active" onclick="window.location='http://localhost/ECWM604_CW1_2013504/index.php/PostController/getAllPosts/abx/rr'">Post It</button></center>
                </div>

            </div>

        </div> 
    </body>
    <?php include_once('footer.php');?>
</html>


