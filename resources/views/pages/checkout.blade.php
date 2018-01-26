<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>halaman checkout</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body>
    {{-- header start --}}
    <div class="w3-panel w3-green" style="margin-top:0">
      <h3>Registration Form</h3>
      <p class="w3-left">Isi setiap baris</p>

      <div class="w3-dropdown-click w3-right">
        <button onclick="myFunction()" class="w3-button w3-black">{{ Auth::user()->name }} <span class="caret"></span></button>
        <div id="Demo" class="w3-dropdown-content">
          <a class="w3-btn w3-red" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
    {{-- header end --}}

    <div class="w3-content">

      {{-- mewakili 1 kamar --}}
      @foreach ($rooms as $room)
        <div class="w3-blue w3-round-xlarge w3-display-container" style="height:100px">
          <p>{{$room->kamar}}</p>
          <button type="button" class="w3-button w3-round-large w3-right w3-red" name="button">Check Out </button>
        </div>
      @endforeach

    </div>

  </body>
</html>
