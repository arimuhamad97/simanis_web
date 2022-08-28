@extends('layouts.member')
<style>
    .actionContainer{
        width: 1000px;
    }
    .popUpContainer{
        width: 800px;
        height:600px
    }
    .imgSize{
        width:80px;
    }
</style>

@section('content')
<div class="flex justify-end items-center actionContainer">
    <!-- <div class="p-2 bg-white mr-2 rounded-xl cursor-pointer"><img src="{{ asset('/icon svg/notif.svg') }}"></div> -->
    <div class="flex p-2 bg-buttonColor-900 cursor-pointer text-white rounded-xl"><img class="mr-1" src="{{ asset('/icon svg/dana.svg') }}"> <span>Tambah Produk</span></div>
</div>
<div class="flex items-center actionContainer">
   <h5>Produk</h5>
</div>
<table class="actionContainer rounded-2xl">
  <tr class="bg-tableColor-900 text-center text-white p-2">
    <th class="text-center p-2 rounded-tl-xl">No</th>
    <th class="text-center p-2 ">Foto Poduk</th>
    <th class="text-center p-2 ">Nama</th>
    <th class="text-center p-2 ">Halal</th>
    <th class="text-center p-2 ">SNI</th>
    <th class="text-center p-2 ">Haki</th>
    <th class="text-center p-2 rounded-tr-xl">Deskripsi</th>
  </tr>
  <tr>
    <td class="text-center p-4 ">1</td>
    <td class="text-center p-1 imgSize"><img src="{{ asset('/img/produk1.png') }}" alt=""></td>
    <td class="text-center p-4 ">Sepatu Kain Tenun</td>
    <td class="text-center p-4 "><span class="bg-halalBgColor text-halalTextColor p-2 rounded-xl">Ada</span></td>
    <td class="text-center p-2"><span class="bg-menungguBgColor text-menungguTextColor p-2 rounded-xl">Ada</span></td>
    <td class="text-center p-2"><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Ada</span></td>
    <td class="text-center p-4 cursor-pointer"><a href="{{ url('/member/produkDetails') }}" class="text-center text-disetujuiTextColor cursor-pointer">Lihat Detail</a></td>
  </tr>
  <tr>
    <td class="text-center p-4 ">2</td>
    <td class="text-center p-1 imgSize"><img src="{{ asset('/img/produk2.png') }}" alt=""></td>
    <td class="text-center p-4 ">Sepatu Kain Tenun</td>
    <td class="text-center p-4 "><span class="bg-halalBgColor text-halalTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-2"><span class="bg-menungguBgColor text-menungguTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-2"><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Ada</span></td>
    <td class="text-center p-4 text-disetujuiTextColor cursor-pointer">Lihat Detail</td>
  </tr>
  <tr>
    <td class="text-center p-4 ">3</td>
    <td class="text-center p-1 imgSize"><img src="{{ asset('/img/produk3.png') }}" alt=""></td>
    <td class="text-center p-4 ">Sepatu Kain Tenun</td>
    <td class="text-center p-4 "><span class="bg-halalBgColor text-halalTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-2"><span class="bg-menungguBgColor text-menungguTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-2"><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-4 text-disetujuiTextColor cursor-pointer">Lihat Detail</td>
  </tr>
  <tr>
    <td class="text-center p-4 ">4</td>
    <td class="text-center p-1 imgSize"><img src="{{ asset('/img/produk4.png') }}" alt=""></td>
    <td class="text-center p-4 ">Sepatu Kain Tenun</td>
    <td class="text-center p-4 "><span class="bg-halalBgColor text-halalTextColor p-2 rounded-xl">Ada</span></td>
    <td class="text-center p-2"><span class="bg-menungguBgColor text-menungguTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-2"><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">-</span></td>
    <td class="text-center p-4 text-disetujuiTextColor cursor-pointer">Lihat Detail</td>
  </tr>
 
</table>


@endsection