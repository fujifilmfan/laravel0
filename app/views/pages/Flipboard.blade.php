@extends('layouts.project')
@section('content')

  <div class="header">
    <div class="container">
      <a href="#" class="logo-icon">
        <img src="/resources/projects/Codecademy-Flipboard/logo.png">
      </a>

      <ul class="menu">
        <li><a href="#">Get the App</a></li>
        <li><a href="#">Tutorials</a></li>
        <li><a href="#">Magazines</a></li>
        <li><a href="#">Web Tools</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Careers</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">More <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Community</a></li>
            <li><a href="#">Our Blog</a></li>
            <li><a href="#">Maps Blog</a></li>
            <li><a href="#">Eng Blog</a></li>
            <li><a href="#">Advertisers</a></li>
            <li><a href="#">Publishers</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <div class="slider">

    <div class="slide active-slide">
      <div class="container">
        <div class="row">
          <div class="slide-copy col-xs-5">
            <h1>Flipboard Is Your Personal Magazine</h1>
            <p>It's a single place to discover, collect and share the news you care about.  Add your favorite social networks, publications and blogs to stay connected to the topics and people closest to you.</p>
            
            <ul class="get-app">
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/ios.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/android.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/windows.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/blackberry.png"></a></li>
            </ul>
          </div>
          <div class="slide-img col-xs-7">
            <img src="/resources/projects/Codecademy-Flipboard/home.png" width="540px">
          </div>
        </div>
      </div>      
    </div>

    <div class="slide slide-feature">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <a href="#"><img src="/resources/projects/Codecademy-Flipboard/cnn.png"></a>
            <a href="#">Read Now</a>
          </div>
          
        </div>
      </div>      
    </div> 

    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="slide-copy col-xs-5">
            <h1>Enjoy Flipboard Magazines</h1>
            <h2>on the Web</h2>
            <p>Millions of people use Flipboard to read and collect the news they care about, curating their favorite stories into their own magazines on any topic imaginable. Now magazines created by our readers, from Dali to End Trafficking, can be shared and enjoyed on the Web by anyone, anywhere.</p>
            
          </div>
          <div class="slide-img col-xs-7">
            <img src="/resources/projects/Codecademy-Flipboard/magazines.png">
          </div>
        </div>
      </div>      
    </div> 


    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="slide-copy col-xs-5">
            <h1>Badges & Widgets</h1>
            <p>Millions of people use Flipboard to read and collect the news they care about, curating their favorite stories into their own magazines. Now you can promote the ones you create or think are awesome.</p>
            
            <ul class="get-app">
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/ios.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/android.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/windows.png"></a></li>
              <li><a href="#"><img src="/resources/projects/Codecademy-Flipboard/blackberry.png"></a></li>
            </ul>
          </div>
          <div class="slide-img col-xs-7">
            <img src="/resources/projects/Codecademy-Flipboard/bw.png" width="540px">
          </div>
        </div>
      </div>      
    </div> 

  </div>

  <div class="slider-nav">
    <a href="#" class="arrow-prev"><img src="/resources/projects/Codecademy-Flipboard/arrow-prev.png"></a>
    <ul class="slider-dots">
      <li class="dot active-dot">&bull;</li>
      <li class="dot">&bull;</li>
      <li class="dot">&bull;</li>
      <li class="dot">&bull;</li>
    </ul>
    <a href="#" class="arrow-next"><img src="/resources/projects/Codecademy-Flipboard/arrow-next.png"></a>
  </div>
  
@stop