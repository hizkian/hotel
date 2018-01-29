<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>invoice</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style media="screen">

    </style>
  </head>
  <body>
    <div class="w3-display-container">
      <h1 class="w3-left">Hotel Agung</h1>
      <h3 class="w3-text-grey w3-right">Hotel Invoice</h3>

    </div>

    <div class="w3-container">

      <ul style="list-style:none;margin-left:-40px">
        <li>Jl. Diponegoro No.9, Genteng Kulon,</li>
        <li>Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</li>
        <li>(0333) 845844</li>
      </ul>
    </div>
    <p>invoice No : 0000001</p>
    <hr>
    <ul style="list-style:none;margin-left:-40px">
      <li style="font-weight:bold">Atas Nama:</li>
      <li>Hizkia Nugroho</li>
    </ul>

    <table class="w3-striped" style="width:100%">
        {{-- table head --}}
        <tr>
          <th style="width:250px">Nama Kamar</th>
          <th>Jumlah menginap</th>
          <th>Harga</th>
          <th>Total</th>
        </tr>
        {{-- table body --}}
        <tr>
          <td>Anggrek 1</td>
          <td>5</td>
          <td>@Rp 200.000</td>
          <td>Rp 1.000.000</td>
        </tr>
        <tr>
          <td>Anggrek 1</td>
          <td>5</td>
          <td>@Rp 200.000</td>
          <td>Rp 1.000.000</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="w3-right" style="font-weight:bold">Jumlah</td>
          <td>Rp 3.000.000</td>
        </tr>
    </table>
  </body>
</html>
