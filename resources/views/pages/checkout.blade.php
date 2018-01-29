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
      <h3>Hotel Agung</h3>
      <a class="w3-button w3-blue" href="/registrasi">Check In</a>
      <a class="w3-button w3-blue" href="/checkout">Check Out</a>

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
    @if(session()->has('message'))
    <div class="w3-panel w3-green">
      <span class="fa-stack fa-lg close-button">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
        <strong>Success! </strong>{{ session()->get('message') }}
    </div>
    @endif

    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          <span class="fa-stack fa-lg close-button">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-times fa-stack-1x fa-inverse"></i>
          </span>
            <strong>Failed!</strong> {{$error}}
        </div>
      @endforeach
    @endif

    <div class="w3-content">

      {{-- mewakili 1 kamar --}}
      @foreach ($rooms as $room)
        <div class="w3-blue w3-round-xlarge w3-display-container w3-padding w3-margin" style="height:100px">
          <p class="w3-xlarge w3-left">{{$room->kamar}}</p>
          <form class="" action="/out" method="post">
            <button type="submit" class="w3-button w3-round-large w3-right w3-red" name="button" style="margin-top:23px" value="{{$room->kamar}}">Check Out </button>
            {{ csrf_field()}}
          </form>

        </div>
      @endforeach

    </div>

    <script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("Demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
  </body>
</html>
