<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-social.css')}}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/carousel.css')}}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <!--data-toggle, data-target, collapse are javascript components-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="{{asset('images/cgLogo.jpg')}}" height="30" width="41"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#" style="color:black">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about" style="color:black">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact" style="color:black">Contact</a></li>
                    </ul>
                    @if (Route::has('login'))
                        <div class="top-right links">
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif

                        </div>
                    @endif
                </div>
            </div>
        </nav>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                        <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="d-block w-100" src="{{asset('images/godrej.png')}}" alt="Godrej" style="height: 600px">
                    </div>

                    <div class="item">
                        <img class="d-block w-100" src="{{asset('images/godrej2.png')}}" alt="Godrej" style="height: 600px">
                    </div>

                    <div class="item">
                        <img class="d-block w-100" src="{{asset('images/godrej3.png')}}" alt="New york" style="height: 600px">
                    </div>
                </div>

                        <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container text-center my-3">
            <h2 class="font-weight-light">Dashain Offer</h2>
            <div class="row mx-auto my-auto">
                <div id="dashainOfferCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/airConditioner.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/airCooler.png')}}">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/microwave.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/hygiene.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/washingMachine.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#dashainOfferCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#dashainOfferCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container text-center my-3">
            <h2 class="font-weight-light">Refrigirator Single Door</h2>
            <div class="row mx-auto my-auto">
                <div id="singleDoorCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RD EDGE 205B 23 TAF.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RD EDGE 205B 23 TAF</p>
                                    <p>Capacity: 190 Ltr</p>
                                    <p><del>MRP: 27890</del></p>
                                    <p>Offer Price: 24390</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RD EDGE 205B 23 WRF.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RD EDGE 205B 23 WRF</p>
                                    <p>Capacity: 185 Ltr</p>
                                    <p><del>MRP: 25790</del></p>
                                    <p>Offer Price: 22390</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RDEDGE205TRF2.2.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RDEDGE205TRF2.2</p>
                                    <p>Capacity: 190 Ltr</p>
                                    <p><del>MRP: 25790</del></p>
                                    <p>Offer Price: 22390</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RDEPRO205TDF3.2.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RDEPRO205TDF3.2</p>
                                    <p>Capacity: 190 Ltr</p>
                                    <p><del>MRP: 33690</del></p>
                                    <p>Offer Price: 29390</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#singleDoorCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#singleDoorCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Refrigirator Double Door</h2>
            <div class="row mx-auto my-auto">
                <div id="doubleDoorCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RT EON 231C SL.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RT EON 231C SL</p>
                                    <p>Capacity: 230 Ltr</p>
                                    <p><del>MRP: 42890</del></p>
                                    <p>Offer Price: 36790</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RTEON240CSL.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RTEON240CSL</p>
                                    <p>Capacity: 240 Ltr</p>
                                    <p><del>MRP: 45790</del></p>
                                    <p>Offer Price: 39290</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/RTEON343SG2.4.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: RTEON343SG2.4</p>
                                    <p>Capacity: 343 Ltr</p>
                                    <p><del>MRP: 79290</del></p>
                                    <p>Offer Price: 67290</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#doubleDoorCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#doubleDoorCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Godrej Front Load Washing Machine</h2>
            <div class="row mx-auto my-auto">
                <div id="frontLoadCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WFEON700PASE-E.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WFEON700PASE-E</p>
                                    <p>Capacity: 7.0kg</p>
                                    <p><del>MRP: 65190</del></p>
                                    <p>Offer Price: 55390</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WFEON600PAEC-E.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WFEON600PAEC-E</p>
                                    <p>Capacity: 6.0kg</p>
                                    <p><del>MRP: 55890</del></p>
                                    <p>Offer Price: 47490</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#frontLoadCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#frontLoadCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Godrej Semi Automatic Washing Machine</h2>
            <div class="row mx-auto my-auto">
                <div id="semiAutoCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WSEDGEPRO750CS.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WSEDGEPRO750CS</p>
                                    <p>Capacity: 7.5kg</p>
                                    <p><del>MRP: 27790</del></p>
                                    <p>Offer Price: 23590</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WSEDGE 8.0TB3MLVDR.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WSEDGE 8.0TB3MLVDR</p>
                                    <p>Capacity: 8.0kg</p>
                                    <p><del>MRP: 27090</del></p>
                                    <p>Offer Price: 22990</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#semiAutoCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#semiAutoCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container text-center my-3">
            <h2 class="font-weight-light">Godrej Fully Automatic Top Load Washing Machine</h2>
            <div class="row mx-auto my-auto">
                <div id="topLoadCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WT7000PFDE-METALLIC RED.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WT7000PFDE-METALLIC RED</p>
                                    <p>Capacity: 7.0kg</p>
                                    <p><del>MRP:34990</del></p>
                                    <p>Offer Price: 29690</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/WTAEON7500CIE-N-GRAPHITE GREY.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Model Number: WTAEON7500CIE-N-GRAPHITE GREY</p>
                                    <p>Capacity: 7.5kg</p>
                                    <p><del>MRP: 33290</del></p>
                                    <p>Offer Price: 28290</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#topLoadCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#topLoadCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Godrej Chest Freezer</h2>
            <div class="row mx-auto my-auto">
                <div id="chestFreezerCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GCHW110R6SIB.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Hard Top Model Number: GCHW110R6SIB</p>
                                    <p>Capacity: 110 Ltr</p>
                                    <p><del>MRP: 28190</del></p>
                                    <p>Offer Price: 23490</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GCHW410R2DXB.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Flat Glass Top Model Number: GCHW410R2DXB</p>
                                    <p>Capacity: 410 Ltr</p>
                                    <p><del>MRP: 71690</del></p>
                                    <p>Offer Price: 59690</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GCHW535R2DHC.png')}}" style="height:200px;width: 100px;align-items: center">
                                    <p>Hard Top Double Door Model Number: GCHW535R2DHC</p>
                                    <p>Capacity: 535 Ltr</p>
                                    <p><del>MRP: 77290</del></p>
                                    <p>Offer Price: 64290</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#chestFreezerCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#chestFreezerCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Godrej Microwave Oven</h2>
            <div class="row mx-auto my-auto">
                <div id="ovenCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GMX20SA2BLM.png')}}" style="height:200px;width: 300px">
                                    <p>Solo Model Number: GMX20SA2BLM</p>
                                    <p>Capacity: 20 Ltr</p>
                                    <p><del>MRP: 10490</del></p>
                                    <p>Offer Price: 8890</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GMX20GA9PLM.png')}}" style="height:200px;width: 300px">
                                    <p>Grill Model Number: GMX20GA9PLM</p>
                                    <p>Capacity: 20 Ltr</p>
                                    <p><del>MRP: 13090</del></p>
                                    <p>Offer Price: 10990</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{asset('images/GME728CF1PM.png')}}" style="height:200px;width: 300px;align-items: center">
                                    <p>Convection Model Number: GME728CF1PM</p>
                                    <p>Capacity: 28 Ltr</p>
                                    <p><del>MRP: 22190</del></p>
                                    <p>Offer Price: 18790</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#ovenCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#ovenCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <hr style="border-top:1px solid #eb9834">

        <footer class="footer" id="contact">
            <div class="container">
                <div class="row mt-5">
                    <div class="row">
                        <div class="col col-sm">
                            <img class="sm:block" src="{{asset('images/cgLogo.jpg')}}" alt="CG logo" style="width: 20px;height:20px">
                        </div>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p><b>For contact</b>(service only)</p></li>
                            <li><p>+977-9801571717 | 01-5188185</p></li>
                        </ul>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p>Tol free no.</p></li>
                            <li><p><i class="fa fa-phone fa-lg"></i>1600100211</p></li>
                        </ul>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p><b>For Dealership Enquiry:</b></p></li>
                            <li><p>9851189357</p></li>
                        </ul>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p><b>For Corporate Enquiry:</b></p></li>
                            <li><p>9851211067</p></li>
                        </ul>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p>ISO <span style="color: red">9001:2015</span></li>
                            <li><p>Certified Company</p></li>
                        </ul>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p>ATTRACTIVE EMI OPTION</p></li>
                            <li><p>6-12-18 Months@ CG Digital </p></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <div class="col col-sm">
                            <img class="sm:block" src="{{asset('images/cgDigital.png')}}" alt="CG logo" style="width: 20px;height:20px">
                        </div>
                    </div>
                    <div class="col col-sm">
                        <ul class="list-unstyled">
                            <li><p><b>Kathmandu:</b>Tangal, Tel: 01-4331837 / 4411269 | Ravibhawan Tel:01-4281749 / 4276049 | Tripureshwor, Tel: 01-411700 / 4117114 | Kumaripati, Tel: 01-5008772 / 5008771 | Nayabazar, Tel: 01-4364072 / 4381029 | Kirtipur, Tel: 01-4331140 / 433324 | Hattigauda, Tel: 01-4376815 / 5008771 | <b>BHAKTAPUR</b>: Radhe Radhe, Tel: 6638472 / 6638871 | <b>ITAHARI</b>, Tel: 025-581126 / 581136 | <b>BHARATPUR</b>, Tel: 056-533230 / 533020 <b>OR VISIT OUR NEAREST DEALER</b></p></li>

                        </ul>
                    </div>
                </div>

            </div>
        </footer>
    </body>
    <script src="{{asset('js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        $('.carousel .carousel-item').each(function(){
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<minPerSlide;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
</html>
