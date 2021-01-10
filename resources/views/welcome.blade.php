<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    #loading {
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: fixed;
      display: block;
      opacity: 0.7;
      background-color: black;
      z-index: 99;
      text-align: center;
      opacity: 0.5;
    }

    #loading-text {
      position: relative;
top: 50%;
transform: translateY(-50%);
      z-index: 100;
    }

    .display-none{
        display:none !important;
    }

table{
    word-break: break-word;
}

.div-border{
padding:20px;
    box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}


</style>
    </head>
    <body>

        <div id="loading" class="display-none">
         <p id="loading-text" style="color:#fff">Loading..</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-md-4" >
                    
              </div>

              <div class="col-md-4" >
                    <div class="div-border" id="form-cont">
                        
                    </div>
              </div>

              <div class="col-md-4 ">
                <div class="div-border" id="">
                    
                </div>
              </div>

              

          </div>
           <div class="row"></div>
           <div class="row">
            <div class="col-md-3" >
                    
              </div>

              <div class="col-md-6" >
                    <div class="div-border" id="table-cont">
                        
                    </div>
              </div>

              <div class="col-md-3 ">
                <div class="div-border" id="">
                    
                </div>
              </div>

              

          </div>

        </div>


        <script type="text/javascript">

            $( document ).ready(function() {
              
            });


            


        </script>



    </body>



</html>
