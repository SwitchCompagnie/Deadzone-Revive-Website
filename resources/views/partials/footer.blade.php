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
    <p>Made In {{ now()->year }}. Ruby Realms Studios [BY SWITCH COMPAGNIE] - Revive Forever.</p>
    <a href="#" class="footer-logo th inline-block">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full object-cover" />
    </a>
  </div>
</div>