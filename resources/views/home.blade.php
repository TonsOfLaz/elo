@extends('app')

@section('content')

    <img src="http://lorempixel.com/1900/500/sports/8" alt="" />
    
    <div id="image_overlay" class="row">
      <div class="columns small-12">
        <p>The simplest, fastest way to rank anything</p>
      </div>
    </div>
    <div class="row row-light">
      <div class="columns small-12 large-4">
      <div class="row">
        <div class="columns small-6 large-12">
          <div class="circleimage" style="background-image:url(http://lorempixel.com/200/200/sports/5)">
            <h3>Play Elo</h3>
            
          </div>
        </div>
        <div class="columns small-6 large-12">
          <p>The game is simple: Just choose between two things.</p>
        </div>
        
      </div>
        
      </div>
      <div class="columns small-12 large-4">
      <div class="row">
        <div class="columns small-6 large-12">
        <div class="circleimage" style="background-image:url(http://lorempixel.com/200/200/sports/10)">
          <h3>Check rankings</h3>
          </div>
        </div>
        <div class="columns small-6 large-12">
          <p>Based on chess ratings, elo updates the rankings after every match.</p>
        </div>
        </div>
      </div>
      <div class="columns small-12 large-4">
      <div class="row">
        <div class="columns small-6 large-12">
        <div class="circleimage" style="background-image:url(http://lorempixel.com/200/200/sports/6)">
          <h3>Share</h3>
          </div>
        </div>
        <div class="columns small-6 large-12">
          <p>The more matches played, the more accurate the rankings.</p>
        </div>
        </div>
      </div>
    </div>
    

@endsection
