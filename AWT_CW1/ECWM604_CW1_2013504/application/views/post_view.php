<!DOCTYPE HTML>
<html>
    <head>
                <link rel="stylesheet" type="text/css" href= "http://localhost/ECWM604_CW1_2013504/css/bootstrap.css">
                <link rel="stylesheet" type="text/css" href= "http://localhost/ECWM604_CW1_2013504/css/bootstrap-grid.css">
        <link rel="stylesheet" href="http://localhost/ECWM604_CW1_2013504/css/bootstrap.min.css">
  <script src="http://localhost/ECWM604_CW1_2013504/css/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <title>Posts</title>
    </head>
    <body>
        <div class="container">
        <div class="well">
            <center><h1>PostIt</h1></center>
            
        <div class="row">
            
        <div class="span12">
                <?php 
                    foreach($records as $rec):
                        //echo $rec->post_id."   ".$rec->username."   ".$rec->link."   ".$rec->description."<br/>";
                        //echo $rec->comment_id."   ".$rec->post_id."   ".$rec->comment."   ";
                                        //echo $rec->comment_id."   ".$rec->post_id."   ".$rec->comment."   ";
                        //echo $rec->comment_id."   ".$rec->post_id."   ".$rec->comment."   ";
                ?>
            <div class="row">
                <h4><?=$rec->username?></h4>
            </div>
            <div class="row">
                <div class="col-lg-1"><p><?=$rec->vote_count?></p></div> 
                <div class="col-lg-11"><p><a href="<?=$rec->link?>"><?=$rec->link?></a></p></div> 
            </div>
            <div class="row">
                <blockquote class="blockquote">
                    <p><?=$rec->description?>   </p>
                </blockquote>
                <hr>
            </div>  
            <?php endforeach;?>
             <div class="row">
                <div class="col-lg-4" style="background-color:lavender;">.col-sm-4</div>
                <div class="col-lg-4" style="background-color:lavenderblush;">.col-sm-4</div>
                <div class="col-lg-4" style="background-color:lavender;">.col-sm-4</div>
            </div>
        </div>
           
        </div>
             
        </div>
            
        </div> 
        
    </body>
    
    
    
    
</html>
