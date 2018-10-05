<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pendo's</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            li {
                    display:inline-block;
                    *display:inline; /*IE7*/
                    *zoom:1; /*IE7*/
                    padding: 0;
                    margin:0;

            }

            ul {
              padding-left: 0;
}
            .description {
              font-weight:bold;
            }

            .email {
              font-weight:bold;
            }

            .phone {
              font-weight:bold;
            }


        </style>
    </head>
    <body>
<!--class="flex-center position-ref full-height"-->
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pendo's Store
                </div>
                
                    <!--HI PENDO TO ADD A NEW LINK COPY ONE OF THE ABOVE
                      REMEMBER href must equal bottom product page
                    -->
                    
                  <nav id="navbar">
                    <ul>
                      
                      <li class="links">
                        <a class="nav-link" href="#shoes">Baby Shoes</a>
                      </li>
                      
                     
                     
                      <li class="links">
                        <a class="nav-link" href="#tshirts">T-shirts</a>
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

          <div id="shoes" data-spy="scroll" data-target="#navbar" data-offset="0" class="mb-5">
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image1.jpeg">
                </div>
                <div class="col-sm-4">
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image2.jpeg">
                </div>
                <div class="col-sm-4">
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image3.jpeg">
                </div>
              </div>
            </div>
          </div>

      
          
          <div id="tshirts"  data-spy="scroll" data-target="#navbar" data-offset="0" class="mb-5" >
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                  <img class="d-block w-100 h-100" src="{{ URL::to('/') }}/images/image4.jpeg">
                </div>
                <div class="col-sm-4">
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
