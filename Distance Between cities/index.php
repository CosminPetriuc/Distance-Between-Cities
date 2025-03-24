<!--index.php-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Distance btw Cities App</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
      <div class="jumbotron">
          <div class="container-fluid">
              <h1>Distance between cities App.</h1>
              <p>Our app will help you calculate travelling distances.</p>
              <form class="form-horizontal">
                  <div class="form-group">
                      <label for="from" class="col-xs-2 control-label">From:</label>
                      <div class="col-xs-10">
                          <input type="text" id="from" placeholder="Origin" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="to" class="col-xs-2 control-label">To:</label>
                      <div class="col-xs-10">
                          <input type="text" id="to" placeholder="Destination" class="form-control">
                      </div>
                  </div>
              </form>
              
              <div class="col-xs-offset-2 col-xs-10">
              <button class="btn btn-info " onclick="calcRoute();">Submit</button>
              </div>
          </div>
          <div class="container-fluid">
              <div id="googleMap">
              
              </div>
              <div id="output">
              
              </div>
          </div>
      
      </div>
      
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=Your_Google_Maps_Key&libraries=places"></script>

 

      <!-- Bootstrap JavaScript (Using CDN to avoid 404 errors) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      <script src="javascript.js"></script>

  </body>
</html>
