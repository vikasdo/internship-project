
  <!DOCTYPE html>
<html lang="en">

<head>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<body >
<div class="container contact-form  mt-3 " >
  <br>
            <div class="contact-image mt-1">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="db1.php">
                <h3>Compose your message</h3>
                <hr>
               <div class="row well">
                    <div class="col-md-6">
                      
                        <div class="form-group">
                            <input type="text" name="fromemail" class="form-control" placeholder="Your Email *" />
                        </div>
                         <div class="form-group">
                            <input type="text" name="toemail" class="form-control" placeholder="to Email *" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="heading" class="form-control" placeholder="Heading*" />
                        </div>
                       
                       <br>
                        <div class="form-group mt-1">
                            <input type="submit" name="compose" class="btnContact" value="Send Message" />
                        </div>
                        <br><hr>
                    </div>
                    <div class="col-md-6">
                        <label>Atachment:</label><br> <input type="file" name="filew">
                        <br>

                        <div class="form-group">
                          <br>
                            <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 175px;"></textarea>
                        </div>
<hr>
                    </div>
                </div>
            </form>
             <h3>  Inbox</h3>
                <hr>
               <div class=" well col-md-112">
    
                                  <div class="row">
                          
                               <input type="checkbox" class="mail-checkbox">
                                  
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="name" style="min-width: 230px;
                                display: inline-block;">Bhaumik Patel</span> 
                                <span class="" style="min-width: 400px">This is big title</span>
                            <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> 
                            <span class="badge" style="min-width: 200px">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span>
                              </div>
                               <div class="row">
                          
                                      <input type="checkbox" class="mail-checkbox">
                                  
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="name" style="min-width: 230px;
                                display: inline-block;">Bhaumik Patel</span> 
                                <span class="" style="min-width: 400px">This is big title</span>
                            <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> 
                            <span class="badge" style="min-width: 200px">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span>
                              </div>
                            </div>
                            
                              
</div>

</body>
</html>