<div class="row">
  <div id="footer">
    <ul>
      <li>
        <a href="{{ url('/') }}">Home</a>
      </li> | <li>
        <a href="{{ route('terms') }}">Terms of Service</a>
      </li> | <li>
        <a href="{{ route('policy') }}">Privacy Policy</a>
      </li>
    </ul>
    <p>Made In {{ now()->year }}. Switch Compagnie - Revive Forever.</p>
    <a class="footer-logo" href="#" class="th">
      <i class="fa-solid fa-users"></i>
    </a>
  </div>
</div>