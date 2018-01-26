<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div class="w3-panel w3-green" style="margin-top:0;padding-bottom:10px">
      <h3>Hotel Agung</h3>
      <a class="w3-btn w3-blue w3-round-large w3-right" href="{{ route('login') }}" style="margin-left:15px;margin-right:20px" name="button">Log In</a>
      <table class="w3-right" style="margin-top:-29px">
        <tbody>
          <tr>
            <td><label class="w3-text-white"><b>Username</b></label></td>
            <td><label class="w3-text-white" style="margin-left:10px"><b>Password</b></label></td>
          </tr>
          <tr>
            <td><input class="w3-input w3-border w3-round-large" type="text"></td>
            <td><input class="w3-input w3-border w3-round-large" type="text" style="margin-left:10px"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
