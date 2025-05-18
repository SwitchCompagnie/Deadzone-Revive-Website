@extends('layouts.app')

@section('title', 'The Last Stand: Dead Zone Revive | Register')

@section('content')

<div id="wrapper">
  <div class="row featured">&nbsp;</div>
  <div class="row content">
    <div class="content-inner">
      <div class="content-box">
        <h1>SELECT A SITE TO PLAY ON</h1>
        <div class="content-box-inner">
          <div class="content-box light" style="width:310px; height:485px; margin-left: -2px; margin-right:2px; padding:5px; align:center; float:left;">
            <h1>PLAY HERE</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-here.jpg') }}" alt="Play Here">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'ArmorGames');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
          <div class="content-box light" style="width:310px; height:485px; padding:5px; align:center; float:left;">
            <h1>PLAY OB ?</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-ob.jpg') }}" alt="Play OB">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'Facebook');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
          <div class="content-box light" style="width:310px; height:485px; margin-left:2px; padding:5px; align:center; float:left;">
            <h1>PLAY ON ?</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-on.jpg') }}" alt="Play On">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'Kongregate');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
        </div>
        <div style="padding:10px">
          <h1>BEFORE ENTERING THE DEAD ZONE</h1>
          <br /> All platforms run the same version of the game and are updated simultaneously, with some exceptions. Kongregate currently has a lower level cap and some paid upgrades are not available. <br />
          <br /> Armor Games and Facebook users are on the same servers and can interact with each other. Kongregate players are on their own server. <br />
          <br /> It is <strong>NOT POSSIBLE</strong> to merge, move or migrate accounts between services, so choose wisely! <br />
          <br /> Take the time to read the <a href="{{ route('terms') }}" onclick="ga('send', 'event', 'Play', 'TermsService');">Terms Of Service</a> before entering the game.
        </div>
      </div>
    </div>
  </div>
</div>

@endsection