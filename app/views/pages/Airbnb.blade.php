@extends('layouts.project')
@section('content')

<div id="projectNav" class="nav projectNav">
  <div class="container">
    <ul class="pull-left">
      <li><a href="#">Name</a></li>
      <li><a href="#">Browse</a></li>
    </ul>
    <ul class="pull-right">
      <li><a href="#">Sign Up</a></li>
      <li><a href="#">Log In</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </div>
</div>

<div class="jumbotron">
  <div class="container">
    <h1>Find a place to stay.</h1>
    <p>Rent from people in over 34,000 cities and 192 countries.</p>
    <a href="#">Learn More</a>
  </div>
</div> 
<div class="neighborhood-guides">
  <div class="container">
    <h2>Neighborhood Guides</h2>
    <p>Not sure where to stay?  We've created neighborhood guides for cities all around the world."</p>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="/resources/projects/Codecademy-Airbnb/mexico-city.png">
        </div>
        <div class="thumbnail">
          <img src="/resources/projects/Codecademy-Airbnb/ny.png">
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="/resources/projects/Codecademy-Airbnb/tokyo.png">
        </div>
        <div class="thumbnail">
          <img src="/resources/projects/Codecademy-Airbnb/paris.png">
        </div></div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="/resources/projects/Codecademy-Airbnb/invite.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="learn-more">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Travel</h3>
          <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
          <p><a href="#">See how to travel on Airbnb</a></p>
        </div>
        <div class="col-md-4">
          <h3>Host</h3>
          <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
          <p><a href="#">Learn more about hosting</a></p>
        </div>
        <div class="col-md-4">
          <h3>Trust and Safety</h3>
          <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
          <p><a href="#">Learn about trust at Airbnb</a></p>
        </div>
      </div>
    </div>
  </div>
  
@stop