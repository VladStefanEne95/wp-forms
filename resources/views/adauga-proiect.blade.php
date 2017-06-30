<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Forms</title>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
              
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
             footer {
                  position: absolute;
                  right: 0;
                  bottom: 0;
                  left: 0;
                  padding: 1rem;
                  background-color: #efefef;
                  text-align: center;
              }
        </style>
    </head>
   <body>


  @include('header')
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Adauga proiect</h1>
      
      <hr>
      
  <form id="form1" method="post" action="/proiect-adaugat">
    <div class="form-group">
      <label >Titlu</label>
      <input type="text" class="form-control"name="titlu">
    </div>
    
        <p>Body</p>
        <textarea name="body" id="mytextarea"></textarea>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="button" value="Submit" onclick="sendData()"/>
  </form>
  </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
  
</footer>
</body>

<script>
 function sendData() {
      //alert($('textarea#mytextarea').val())
      $('#form1').submit();
    }
</script>
             
      
</html>
