@extends('layouts.app')

@section('title', 'The Last Stand: Dead Zone Revive | Register')

@section('content')

<div id="wrapper">
  <div class="row featured">&nbsp;</div>
  <div class="row content">
    <div class="content-inner">
      <div class="content-box">
        <h1>SELECT A PLATFORM TO PLAY ON</h1>
        <div class="content-box-inner">
          <div class="content-box light" style="width:310px; height:485px; margin-left: -2px; margin-right:2px; padding:5px; align:center; float:left;">
            <h1>PLAY ON RUBY LAUNCHER</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-here.jpg') }}" alt="Play on Ruby Launcher">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'RubyLauncher');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
          <div class="content-box light" style="width:310px; height:485px; padding:5px; align:center; float:left;">
            <h1>PLAY ON STEAM</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-here.jpg') }}" alt="Play on Steam">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'Steam');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
          <div class="content-box light" style="width:310px; height:485px; margin-left:2px; padding:5px; align:center; float:left;">
            <h1>PLAY ON EPIC GAMES</h1>
            <a href="#">
              <img src="{{ asset('assets/images/register-here.jpg') }}" alt="Play on Epic Games">
            </a>
            <h3>
              <a href="#" class="button alert expand" onclick="ga('send', 'event', 'Play', 'EpicGames');">
                <i class="fa-solid fa-gamepad"></i> COMING SOON </a>
            </h3>
          </div>
        </div>

        <div style="padding:10px">
          <h1>BEFORE ENTERING THE DEAD ZONE</h1>
          <br /> All platforms (Ruby Launcher, Steam, and Epic Games) run the same version of the game and receive updates simultaneously, ensuring a consistent experience across the board. <br />
          <br /> Player accounts are isolated per platform. It is <strong>NOT POSSIBLE</strong> to merge, move, or migrate accounts between services. Please choose your preferred platform carefully before starting. <br />
          <br /> Take the time to read the <a href="{{ route('terms') }}" onclick="ga('send', 'event', 'Play', 'TermsService');">Terms of Service</a> before entering the game.
        </div>
      </div>
    </div>
  </div>
</div>

@endsection