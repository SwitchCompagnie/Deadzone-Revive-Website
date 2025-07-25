@extends('layouts.app')

@section('title', 'The Last Stand: Dead Zone Revive | Home')

@section('content')

<div id="wrapper">
  <div class="row featured">&nbsp;</div>
  <div class="row content">
    <img src="{{ asset('assets/images/zombie.png') }}" class="zombie" />
    <div class="hero">
      <div class="content-inner">
        <div class="row">
          <div class="columns large-offset-8 large-4">
            <div class="fight-rebuild-survive content-box no-border">
              <div class="content-box-inner">
                <h3>FIGHT. REBUILD. SURVIVE</h3>
                <p>The Last Stand: Dead Zone Revive brings RPG, Action and Strategy to the zombie apocalypse.</p>
                <p>Load out your team and run real-time missions to gather weapons, gear, construction materials and supplies in locations across the Dead Zone all while holding off the horde. With 30,000+ items available there's plenty of ways to despatch the walking dead.</p>
                <br />
                <a href="{{ route('register') }}" class="button alert expand">
                  <i class="fa-solid fa-gamepad"></i> PLAY NOW </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="content-inner">
        <div class="columns large-4">
          <div class="content-box">
            <h1>Links</h1>
            <div class="content-box-inner">
              <ul class="ul">
                <li>
                  <a href="http://forum.deadzonegame.net/">Support Forum</a>
                </li>
                <li>
                  <a href="http://forum.deadzonegame.net/">Frequently Asked Questions</a>
                </li>
                <li>
                  <a href="http://tlaststand.wikia.com/wiki/The_Last_Stand_Wiki" target="_blank">Fan-made Wiki</a>
                </li>
              </ul>
            </div>
          </div>
          <br />
          <div class="content-box light">
            <h1>Find us on Discord</h1>
            <div class="content-box-innerfb">
              <iframe src="https://discord.com/widget?id=1145726192939454568&theme=dark" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:260px;" allowtransparency="true"></iframe>
            </div>
          </div>
        </div>
        <div class="columns large-8">
          <div class="content-box no-border">
            <ul class="large-block-grid-2">
              <li>
                <a href="{{ asset('assets/images/FB-Screenshot-CombatMilStreet.jpg') }}" target="_blank">
                  <img src="{{ asset('assets/images/FB-Screenshot-CombatMilStreet-Thumb.jpg') }}" />
                </a>
              </li>
              <li>
                <ul class="large-block-grid-2">
                  <li>
                    <a href="{{ asset('assets/images/FB-Screenshot-1.jpg') }}" target="_blank">
                      <img src="{{ asset('assets/images/FB-Screenshot-1-Thumb.jpg') }}" />
                    </a>
                  </li>
                  <li>
                    <a href="{{ asset('assets/images/FB-Screenshot-CombatRes.jpg') }}" target="_blank">
                      <img src="{{ asset('assets/images/FB-Screenshot-CombatRes-Thumb.jpg') }}" />
                    </a>
                  </li>
                  <li>
                    <a href="{{ asset('assets/images/FB-Screenshot-Compound.jpg') }}" target="_blank">
                      <img src="{{ asset('assets/images/FB-Screenshot-Compound-Thumb.jpg') }}" />
                    </a>
                  </li>
                  <li>
                    <a href="{{ asset('assets/images/FB-Screenshot-Loot.jpg') }}" target="_blank">
                      <img src="{{ asset('assets/images/FB-Screenshot-Loot-Thumb.jpg') }}" />
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <h2>The Last Stand: Dead Zone Revive</h2>
            <p>350 days have passed since the initial outbreak and you are one of the few remaining in the ruins of Union City, now known only as the Dead Zone. After repeated bombings in an attempt to wipe out the remaining infected, very few citizens remain. Those that do fight over the scraps left in the city.</p>
            <br />
            <h4>BUILD YOUR COMPOUND</h4>
            <p>Build and defend your compound to protect you from the infected and human raiders. Set up barricades and traps to hold the hordes at bay. Your survival depends on it.</p>
            <br />
            <h4>ASSEMBLE YOUR SURVIVORS</h4>
            <p>Attract new survivors, decide their role then equip them to help you survive. Select from a number of classes including Fighters, Engineers, Medics, Scavengers and Recon. Each role is important and will affect your chances of survival.</p>
            <br />
            <h4>LOOT AND CRAFTING!</h4>
            <p>Loot or craft over 30,000 weapon and gear items in real time missions across the city. Gather schematics for weapons and gear through scavenging or trade.</p>
            <br />
            <h4>ALLIANCES AND RAIDING</h4>
            <p>Raid other players for precious resources or help them with construction. Join an alliance and secure your position in the Dead Zone!</p>
            <br />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="sulivanm" data-description="Support me on Buy me a coffee!" data-message="Buy me a coffee to support !" data-color="#40DCA5" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

@endsection