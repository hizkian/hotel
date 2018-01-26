<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>halaman registrasi</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body>
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
    <div>
      <div>
        <form class="" style="width:600px;margin:0 auto" action="/reg" method="POST">

          <label class="w3-text-green"><b>Nama Lengkap</b></label>
          <input name="nama" class="w3-input w3-border w3-round-large" type="text">
          <br>
          <label class="w3-text-green"><b>Nomor KTP</b></label>
          <input name="ktp" class="w3-input w3-border w3-round-large" type="text">
          <br>
          <label class="w3-text-green"><b>Alamat</b></label>
          <input name="alamat" class="w3-input w3-border w3-round-large" type="text">
          <br>
          <label class="w3-text-green"><b>Nomor Telepon</b></label>
          <input name="telp" class="w3-input w3-border w3-round-large" type="text">
          <br>
          <label class="w3-text-green"><b>Add Room</b></label>
          <div class="w3-border w3-round-large w3-padding">
            <select id="room" class="w3-select" style="margin-bottom:10px;margin-top:10px">
              <option value="" disabled selected>Pilih Kamar</option>

              @foreach ($rooms as $room)
                <option value="{{$room->nomor}}">{{ $room->kamar }}</option>
              @endforeach
            </select>
            <label class="w3-text-green"><b>Check In</b></label>
            <input id="in" class="w3-round-large" type="date">
            <label class="w3-text-green"><b>Check Out</b></label>
            <input id="out" class="w3-round-large" type="date">
            <br>
            <button type="button" id="add" class="w3-btn w3-blue w3-round-large" style="margin-top:10px">Add room</button>
          </div>
          <br>
          <br>
          <label class="w3-text-green"><b>Added Room</b></label>
          <div id="container" name="rooms" class="">

          </div>
          <br>

          <input class="w3-btn w3-green w3-right w3-round-large" type="submit">
          {{ csrf_field() }}
        </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#add").click(function(){
        var a = document.getElementById("room");
        var room = a.options[a.selectedIndex].text;
        var checkin = document.getElementById("in").value;
        var checkout = document.getElementById("out").value;

        var ci = " <b>CheckIn</b> : ";
        var co = " <b>CheckOut</b> : ";

        //close button
        var close = "<div class='w3-btn w3-red w3-round-xlarge w3-right close'>cancel</div>"

        var string = room + " " + ci + checkin + co + checkout + close;

        //added rooms detail
        $("#container").append
        ("<div class='w3-panel w3-light-gray w3-padding w3-round-xlarge'><p class='w3-left' style='margin-top:5px'>" + string + "</p></div>");
      });

      $(document).on('click','.close',function(){
          $(this).parent().remove();
      });
    });

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
