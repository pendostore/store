<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pendo's</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/css.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            


        </style>
    </head>
    <body>
<!--class="flex-center position-ref full-height"-->
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pendo's Store
                </div>
                
                   
                    
                  <nav id="navbar">
                    <ul>
                    
                     <!--HI PENDO TO ADD A NEW LINK COPY ONE OF THE BELOW
                      REMEMBER href must equal bottom product page
                      -->
                      
                      <li class="links">
                        <a class="nav-link" href="#shoes">Baby Shoes</a>
                      </li>
                      
                     
                      <li class="links">
                        <a class="nav-link" href="#jewellery">Jewellery</a>
                      </li>      
                      
                      
                   

                      <!--HI PENDO TO ADD A NEW LINK COPY ONE OF THE ABOVE
                      REMEMBER href must equal bottom product page
                      -->

                    </ul>
                  </nav>

                <br>
                <div class="description">China Wholesale to Tanzania</div>
                <div class="email">PendoBakari@qq.com</div>
                <div class="email">+255784333216</div>

            </div>


        </div>




        <div data-spy="scroll" data-target="#navbar" data-offset="0">

         <!--HI PENDO TO ADD A PRODUCT PAGE COPY ONE OF THE BELOW
          REMEMBER id must equal top link

          Pictures for products go into public/images folder
          -->
          
          <div id="shoes" data-spy="scroll" data-target="#navbar" data-offset="0" class="mb-5">
            <div class="container">
              
             <div class="row">
               
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/pendo.png">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/image2.jpeg">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/image3.jpeg">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
               </div>
               
               <br>              
               <br>
               <br>
 
               <div class="row">
               
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/pendo.png">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/image2.jpeg">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block" src="{{ URL::to('/') }}/images/image3.jpeg">
                  <h2 class="text-center d-block">Sizes: Pendo's Big Booty </h2>
                </div>
                
               </div>
              
            </div>
          </div>

      
          
          <div id="jewellery"  data-spy="scroll" data-target="#navbar" data-offset="0" class="mb-5" >
            <div class="container">
              <div class="row">
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image4.jpeg">
                </div>
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image5.jpeg">
                </div>
                <div class="col-sm-4"> <!--Image-->
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image5.jpeg">
                </div>
              </div>
            </div>
          </div>
          
          

          <!--HI PENDO TO ADD A PRODUCT PAGE COPY ONE OF THE ABOVE
          REMEMBER id must equal top link

          Pictures for products go into public/images folder
          -->


        </div>


    </body>
</html>
