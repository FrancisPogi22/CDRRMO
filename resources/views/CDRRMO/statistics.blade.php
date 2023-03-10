<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ URL('assets/img/CDRRMO-LOGO.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ URL('assets/css/statistics.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <title>{{ config('app.name')}}</title>
    
</head>
<body class="bg-gray-400">
    <div class="wrapper">
        <header class="header-section w-full bg-slate-50">
            <div class="container-fluid relative w-full h-full">
                <div class="w-full h-full relative">
                    <img class="w-24 float-right h-full" src="{{ URL('assets/img/CDRRMO-LOGO.png') }}" alt="logo">
                    <span class="float-right h-full text-lg font-semibold">Cabuyao City Disaster Risk<br>Reduction and Management Office</span>
                </div>
            </div>
        </header>

        <div class="page-wrap">
            <div class="sidebar drop-shadow-2xl fixed left-0 top-0 h-full w-20">
                <div class="sidebar-heading flex justify-center items-center cursor-pointer text-white ">
                    <span class="links_name">E-LIGTAS</span>
                    <i class="bi bi-list absolute text-white text-center cursor-pointer text-3xl" id="btn-sidebar"></i>
                </div>
                <div class="h-full items-center text-center">
                    <x-nav-item />
                </div>
            </div>
        </div>

        <x-messages />

        <div class="main-content">
            <div class="content-item">
                <div class="content-header">
                    <div class="header-details">
                        <img id="header-logo-right" src="{{ URL('assets/img/CDRRMO-LOGO.png') }}" alt="logo">
                        <span class="item-header">Disaster Data Analytics</span>
                        <img id="header-logo-left" src="{{ URL('assets/img/CDRRMO-LOGO.png') }}" alt="logo">
                    </div>
                </div>
                <div class="content-details">
                    <div class="content-body">
                        <div class="mb-3">
                            <select id="disaster" class="form-select p-2 text-center" >
                                <option value="">Choose Disaster Type</option>
                                <option value="typhoon">Typhoon</option>
                                <option value="roadaccident">Road Accident</option>
                                <option value="rarthquake">Earthquake</option>
                                <option value="flooding">Flooding</option>
                            </select>
                        </div>
                        
                       <div id="highchart">
                            <script>
                                $(function(){
                                    var maleData = {{ json_encode($male) }};
                                    var femaleData = {{ json_encode($female) }};

                                    $('#highchart').highcharts({
                                        chart:{
                                            type:'column'
                                        },
                                        title:{
                                            text:'Typhoon Statistics'
                                        },
                                        xAxis:{
                                            categories:['1-18 Years Old', '19-59 Years Old', '60 Above']
                                        },
                                        yAxis:{
                                            title:{
                                                text:'Data'
                                            }
                                        },
                                        series:[{
                                            name:'Male',
                                            data:maleData
                                        },{
                                            name:'female',
                                            data:femaleData
                                        }]
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    
    <script src="{{ URL('assets/js/landingPage.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>