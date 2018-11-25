<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <style>
            body {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    background:#354545;
}
.main_sidebar {
    min-height:100vh;
    position:fixed;
    top:0;
    left:0;
    width:350px;
    transition: all 300ms cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: left, width;
    box-shadow: inset -1px 0 10px rgba(0, 0, 0, 0.4);
    background: #293749;
}
.main_sidebar:after {
    content: '';
    background-color: #253238;
    position: absolute;
    top: 0;
    z-index: -1;
    height: 100%;
    width: 58px;
}
.main_sidebar ul {
    list-style:none;
    padding-left:58px;
}
.main_sidebar ul li {
    padding:10px;
}
.main_sidebar ul li a {
    color:#fff;
    display:block;
}
.main_sidebar ul li i {
    float:left;
    color:grey;
    margin-left:-58px;
    font-size:24px;
    padding-left:7px;
}
.main_sidebar ul li:hover {
    background:#167696;
}
.main_sidebar ul li a:hover {
    color:#fff;
    text-decoration:none;
}
.main_sidebar ul li:hover i {
    color:#fff;
}
.main_sidebar ul li.active {
    background:#0f4698;
}
.main_sidebar ul li.active i {
    color:#fff;
}
.main_sidebar ul li.active:hover {
    background:#167696;
}
.main_sidebar ul li.active:hover i {
    color:#fff;
}

.main {
    float:right;
    color:#fff;
    display:block;
    width:100%;
    background:red;
    min-height:100vh;
}

        </style>
    </head>
    <body>



        <div class="row">
            <div class="col-md-3">
               <div class="wrapper">
                    <aside class="main_sidebar">
                        <ul>

                            <li><i class="fa fa-arrows"></i><a href="#">Dashboard</a></li>
                            <li><i class="fa fa-battery-2"></i><a href="{{route('rooms')}}">Our Rooms</a></li>
                            <li><i class="fa fa-bell"></i><a href="{{route('bookedrooms')}}">Booked Rooms</a></li>
                            <li><i class="fa fa-bell"></i><a href="{{route('ourcostumer')}}">Our Costumer</a></li>


                            <li><i class="fa fa-bell"></i><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-md-9">
              @yield('content')
            </div>
        </div>
    </body>
              @yield('footer_script')

</html>
