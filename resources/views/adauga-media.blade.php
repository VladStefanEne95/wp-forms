<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
        <title>Forms</title>

        <!-- Styles -->
        <style>
             footer {
                  position: absolute;
                  right: 0;
                  bottom: 0;
                  left: 0;
                  padding: 1rem;
                  background-color: #efefef;
                  text-align: center;
              }
               .image_list {
                 display:flex;
                  margin-left:10px;
    }
    .dz-preview:not(:first-child) {
      margin-left: 30px;
    }
    .dz-preview {
      margin-top: 5px;
    }
        </style>
    </head>
   <body>


  @include('header')
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p>Proiecte</p>
      <p>Formulare</p>
      <p>Media</p>
      <p>Înregistrări</p>
    </div>

    <div class="col-sm-8 sidenav">
      <div class="container">
        <h3>Adaugă media</h3>
        <div class="row">
          <div class="col-md-12">
             <form action="/upload" class="dropzone" enctype="multipart/form-data" id="imageUpload" method="post">
              <div>    
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container image_list" id="template-preview">
      </div>
    </div>


<script type="text/javascript">
  images = "";
   Dropzone.options.imageUpload = {
         success: function( file, response ){
         obj = JSON.parse(response);
         alert(obj.filename);
    },
        maxFilesize:8,
        dictDefaultMessage: "Adauga fisiere",
       // acceptedFiles: ".jpeg,.jpg,.png,.gif",
        previewsContainer: "#template-preview"
     };


</script>



  <script>
 function sendData() {
      //alert($('textarea#mytextarea').val())
      $('#form1').submit();
    }
</script>
             
      
</html>
