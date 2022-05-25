<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Food</title>

    @include('client.layouts.styles')
    @yield('custom-style')
    <style>
        .flex-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            background-color: #F47038;
            font-size: 20px;
            color: white;
        }

        .flex-header > a {
            color: white;
        }

        .dropbtn {
            border: none;
            background-color: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            border-bottom-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .sticky {
            position: fixed;
            top: 0;
            width: 100%
        }

        /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
        .sticky + .content {
            padding-top: 102px;
        }
        .header {
            padding: 10px 16px;
            background-color: rgba(141,214,89,0.9);
            color: #f1f1f1;
        }
    </style>
</head>

<body>
<!-- Start Header -->
<div class="container-fluid" style="padding: 0;">
    <div class="flex-header">
        <a href="mailto:someone@example.com" class="ml-5"><i class="fas fa-envelope"></i><span>phelieu</span></a>
        <a href="tel:012345678" class="mr-5"><i class="fas fa-phone"></i>012345678 - 012346578 ( Mr: Tuan )</a>
    </div>
</div>
@include('client.layouts.navbar')
@yield('carousel')
<!-- End Header -->

@yield('content')

<!-- Start Footer section -->
@include('client.layouts.footer')
<!-- End Footer section -->
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show hidden-xs visible-sm visible-md visible-lg" id="phonering-alo-phoneIcon" style="left: -50px; top: 510px; display: block;">
    <div class="phonering-alo-ph-circle"></div>
    <div class="phonering-alo-ph-circle-fill"></div>
    <a href="tel:0947508345"></a>
    <div class="phonering-alo-ph-img-circle">
        <a href="tel:0947508345"></a>
        <a href="{{route(HOME_PAGE)}}" class="pps-btn-img " title="Liên hệ">
            <img src="{{asset("images/v8TniL3.png")}}" width="50">
        </a>
    </div>
</div>
<div class="zalo-container right">
    <a id="zalo-btn" href="https://zalo.me/0948112789" target="_blank" rel="noopener noreferrer nofollow">
        <div class="animated_zalo infinite zoomIn_zalo cmoz-alo-circle"></div>
        <div class="animated_zalo infinite pulse_zalo cmoz-alo-circle-fill"></div>
        <span><img src="{{asset("images/zalo-2.png")}}" alt="Contact Me on Zalo"></span>
    </a>
</div>
@include('client.layouts.script')
@yield('jsfiles')
</body>
<script>
    window.onscroll = function() {myFunction()};

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
</html>
