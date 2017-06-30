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
      <h1>Adauga formular</h1>
      <hr>
      
  <form method="post" id="form1">
    <div class="form-group">
      <label for="email">Titlu</label>
      <input type="text" class="form-control"name="titlu" required>
    </div>

    <label for="sel1">Proiectul la care va fi adaugat:</label>
      <select id="id_proiect" class="form-control" name="id_proiect">
        <?php 
          foreach ($titles as $title) {
            echo "<option>$title</option>";
          }
        ?>
      </select>

    <a class="btn btn-large btn-default" style="margin-top:10px;" id="addField">Adauga camp</a>

    </form>
    <form id ="form2" style="margin-top:20px;">
        <div id="addText" class="form-group">
        <div>
        <strong>Nume</strong>
          <input  type="text" class="form-control" name="nume1" id="nume1" placeholder="Nume" required>
        </div>
      <label for="sel1">Tipul campului:</label>
      <select class="form-control" name="tip" onchange="displaySelects()">
        <option>text</option>
        <option>select</option>
      </select>
      <input type="text" name="numar-optiuni" placeholder="Numar optiuni" id="numar-optiuni" onchange="newOptions()" style="display:none; margin-top:10px;">
      <div id="addOptions"></div>
      <label><input type="checkbox" name="requiered" style="margin-top:10px;">Requiered</label>
    </div>
        <input type="button" value="Submit" onclick="sendData()"/>
  </form>
  </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>
<div>

</div>
<form id="sendForm" method="post" action="/formular-adaugat" style="display:none">
<input type="text" name="sendObject">
<input type="text" name="titlu2">
<input type="text" name="id_proiect">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form >
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>

  <script>
    function sendData() {
      var formData = JSON.stringify($("#form2").serializeArray());
      $('input[name="sendObject"]').val(formData);
      $('input[name="titlu2"]').val($('input[name="titlu"]').val());
      $('input[name="id_proiect"]').val($('#id_proiect').val());
      $('#sendForm').submit();
    }

  $('#addField').on('click', function (e) {
    var formText = "<div style='margin-top:20px;'><strong>Nume</strong> <input type='text' class='form-control' name='nume1' id='nume1' placeholder='Nume' required> <label for='sel1'> Tipul campului:</label> <select class='form-control' name='tip' > <option>text</option> <option>select</option></select>  <label><input type='checkbox' name='requiered' style='margin-top:10px;'>Requiered</label></div>";                                                                                            

    document.getElementById('addText').innerHTML += formText;
  })

   function displaySelects() {
    if($('#numar-optiuni').css("display") == 'none')
      $('#numar-optiuni').css("display","inline");
    else {
      $('#numar-optiuni').css("display","none");
      $('#numar-optiuni').val(0);
       $('.removable').remove();
    }
   }

   function newOptions() {
      $('.removable').remove();
      var formText = $('#numar-optiuni').val();
      for (var i = 0; i < formText; i++) {
        document.getElementById('addOptions').innerHTML += "<input type='text' style='margin-top:10px;' class='form-control removable' name='options' placeholder='Numele optiunii'>";
      };
      
   }

  </script>
      
</html>
