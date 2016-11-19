<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href= "http://localhost/ECWM604_CW1_2013504/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/ECWM604_CW1_2013504/css/bootstrap.min.css">
        <script src="http://localhost/ECWM604_CW1_2013504/css/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Posts</title>
    </head>
    <body>
        <?php include_once('header.php');?>
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="span12">
                        <?php foreach ($records as $rec):?>
                            <div class="row">
                                <div class="col-lg-1"><input type="image" src="http://localhost/ECWM604_CW1_2013504/images/up-arrow1.png" alt="Submit"></div>
                                <div class="col-lg-11"><h4><?= $rec->username ?></h4></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1"><h5><?= $rec->vote_count ?></h5></div> 
                                <div class="col-lg-11"><h5><a href="  <?= $rec->link ?>"><?= $rec->link ?></a></h5></div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-1"><input type="image" src="http://localhost/ECWM604_CW1_2013504/images/down-arrow1.png" alt="Submit"></div>
                                <div class="col-lg-11">
                                    <p><?= $rec->description ?></p>
                                </div>
                            </div>  
                            <div>
                                <button type="button" class="btn btn-default active">View Comments</button>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"><center><button type="button" class="btn btn-default btn-lg active">Add Post</button></center></div>
                    <div class="col-lg-3"><center><button type="button" class="btn btn-default btn-lg active">More Posts</button></center></div>
                </div>

            </div>

        </div> 

    </body>

</html>
