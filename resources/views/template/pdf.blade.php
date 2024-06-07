<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Generate Statement of Account</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/pdf.css') }}"> --}}

    {{-- font awesome --}}
{{-- <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css"> --}}
<style>
    *{
        box-sizing: border-box;

    }
    .wrapper{
        width: 816px;
        border: 1px dashed red;
        margin: 0;
        padding: 0;
    }
    #header{
        background-color: rgba(0, 162, 255, 0.925);
        margin: 0;
        padding: 0;
    }
    table, th, td {
        /* border: 1px solid black; */
    }
    #logo{
        width: 10%;
        border: 1px solid black;
    }
    #logo #img{
        width: 100%;
        height: 100px;
        background-image: url('./images/logo.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    #logo2{
        border: 1px solid black;
        width: 15%;
        padding: 0;
    }
    #logo2 #p1{
        font-weight: 600;
        font-size: 22px;
        background-color: black;
        color: yellow;
    }
    #logo2 #p2{
        font-size: 32px;
        margin-top: -10px;
        font-weight: 500;
        
    }
    #logo2 #p3{
        font-size: 18px;
        color: white;
        margin-top: -12px;
        font-weight: 500;
    }
    #logo2 #p4{
        font-size: 10px;
        color: white;
        font-weight: 500;
        background-color: black;
    }
    #icons{
        padding-left: 10px;
        font-size: 16px;
        color: white;
    }
    #title{
        font-size: 32px;
        font-weight: 700;
        text-align: right;
        
    }
    #title h1{
        color: yellow;
    }

    
</style>
</head>

<body class="">

    {{-- printing --}}
    <div class="wrapper">
        <div id="header">
            <table>
                <thead>
                    <tr>
                        <td id="logo"><div id="img"></td>
                        <td id="logo2">
                            <p id="p1">DZJV 1458</p>
                            <p id="p2">RADYO</p>
                            <p id="p3">CALABARZON</p>
                            <p id="p4">address here dwadaw</p>
                        </td>
                        <td id="icons">
                            <p><i class="fa-solid fa-location-dot"></i> #143 Barangay Parian, Calamba City, Laguna.</p>
                            <p><i class="fa-solid fa-envelope"></i> radyocalabarzon@dzjv.com.ph</p>
                            <p><i class="fa-solid fa-phone"></i> (0906)468-114 / (0906)682-1336</p>
                        </td>
                        <td id="title">
                            <h1>STATEMENT OF</h1>
                            <h1>ACCOUNT</h1>
                        </td>
                    </tr>
                </thead>
            </table>
            <div class="date">
                <p>Date: <span>04 March 2024</span></p>
            </div>
        </div>
        
    </div>
    {{-- <div class="wrapper">
        <header class="flex justify-between items-center">
            <span>logo</span>
            <span>title</span>
            <span>date</span>
        </header>
       @foreach ($users as $user)
           <span>{{ $user->name }}</span>
       @endforeach
    </div> --}}

</body>

</html>
