@extends('layouts.admin')
<style>
    .actionContainer{
        width: 922px;
    }
</style>
@section('content')
<div class="bg-slate-50 container">
<h3 class="mt-14 font-extrabold w-[192px] h-[37px] text-slate-800">Daftar Akun</h3>
<div class="flex justify-between items-center actionContainer">
    <div class="flex">
        <div class="flex w-[263px] h-[52px] bg-white rounded-lg bg-cover mt-4 shadow-md">
            <img src="{{ asset('/icon svg/medium.svg') }}" alt="search" class="h-8 w-8 ml-[18.5px] my-auto">
            <input type="text" placeholder="Cari NIK" class="my-auto h-6 w-[205px] ml-3 placeholder:text-sm ">
        </div>
        <div class="flex">
            <div class="flex w-[154px] h-[52px] bg-white rounded-lg bg-cover mt-4 shadow-md ml-2  text-center">
                <label for="role" class="text-slate-800 text-sm font-bold my-auto ml-5 h-[17px] w-[85px]">Semua Role</label>
                <input type="radio" id="role" name="role" class="hidden">
                <img src="{{ asset('/icon svg/icon.svg') }}" alt="role" class="flex ml-[18.5px] my-auto">
            </div>
        </div>
         <div class="flex w-[140px] h-[52px] bg-blue-400 rounded-lg bg-cover mt-4 shadow-md ml-[210px]">
            <input type="button" value="Tambah Akun" class=" text-white text-sm font-bold my-auto mx-auto h-[17px] w-[85px]">    
        </div>
    </div>
    <div class="">
        <div class="flex w-[140px] h-[52px] bg-slate-100 rounded-lg bg-cover mt-4 shadow-md ml-2  text-center">
            <input type="button" value="Hapus Akun" class="text-slate-800 text-sm font-bold my-auto ml-5 h-[17px] w-[85px]">
          <img src="{{ asset('/icon svg/sampah.svg') }}" alt="role" class="flex ml-2 my-auto ">
        </div>
    </div>
</div>

<table class="actionContainer rounded-2xl mt-4 shadow-lg"> 
  <tr class="bg-tableColor-900 text-white text-center p-2 h-16">
    <th class="text-center rounded-tl-xl pl-2"><input type="checkbox" name="all" id="all" class=""></th>
    <th class="text-center p-2">No</th>
    <th class="text-left pr-[250px]">NIK</th>
    <th class="text-left  ">Role</th>     
    <th class="text-left  ">Staus</th>          
    <th class="text-left p-2 rounded-tr-xl">Aksi</th>   
  </tr>
  <tr class="bg-white">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">1</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left  text-slate-700 font-bold">IKN</td>
    <td class="text-left  "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-slate-50">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">2</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left text-slate-700 font-bold">IKN</td>
    <td class="text-left"><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-white">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">3</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left  text-slate-700 font-bold">IKN</td>
    <td class="text-left  "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-slate-50">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-400 ">4</td>
    <td class="text-left text-slate-400 ">NIK 132138594548</td>
    <td class="text-left text-slate-400 font-bold">IKN</td>
    <td class="text-left  "><span class="bg-slate-100 text-slate-600 p-2 rounded-xl">Non Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon" class="">
        <span class="bg-disetujuiTextColor text-white p-2 rounded-xl flex h-[36px] w-[37px]"><img src="{{ asset('/icon svg/ceklist.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-white">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-400 ">5</td>
    <td class="text-left text-slate-400 ">NIK 132138594548</td>
    <td class="text-left  text-slate-400 font-bold">IKN</td>
    <td class="text-left "><span class="bg-slate-100 text-slate-600 p-2 rounded-xl">Non Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon" class="">
        <span class="bg-disetujuiTextColor text-white p-2 rounded-xl flex h-[36px] w-[37px]"><img src="{{ asset('/icon svg/ceklist.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-slate-50">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">6</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left text-slate-700 font-bold">IKN</td>
    <td class="text-left "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-white">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-400 ">7</td>
    <td class="text-left text-slate-400 ">NIK 132138594548</td>
    <td class="text-left text-slate-400 font-bold">Bank</td>
    <td class="text-left "><span class="bg-slate-100 text-slate-600 p-2 rounded-xl">Non Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon" class="">
        <span class="bg-disetujuiTextColor text-white p-2 rounded-xl flex h-[36px] w-[37px]"><img src="{{ asset('/icon svg/ceklist.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-slate-50">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">8</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left text-slate-700 font-bold">Bank</td>
    <td class="text-left "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-white">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">9</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left text-slate-700 font-bold">Koperasi</td>
    <td class="text-left "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr>
  <tr class="bg-slate-50">
  <td class="text-center "><input type="checkbox" name="all" id="all" class=""></td>
    <td class="text-center text-slate-700 ">10</td>
    <td class="text-left text-slate-700 ">NIK 132138594548</td>
    <td class="text-left text-slate-700 font-bold">Bank</td>
    <td class="text-left "><span class="bg-disetujuiBgColor text-disetujuiTextColor p-2 rounded-xl">Aktif</span></td>
    <td class="text-center p-2">
      <div class="flex ml-2">
        <img src="{{ asset('/icon svg/mata.svg') }}" alt="icon">
        <span class="bg-ditolakTextColor text-white p-2 rounded-xl"><img src="{{ asset('/icon svg/dilarang.svg') }}" alt="icon"></span>
      </div>
    </td>
  </tr> 
</table>
<div class="flex actionContainer bg-white">
    <div class="flex ">
            <div class="flex bg-white rounded-lg mt-4 shadow-md w-16 h-9 border-slate-200" >
                <label for="role" class="text-slate-400 text-sm my-auto ml-4">10</label>
                <input type="radio" id="role" name="role" class="hidden">
                <img src="{{ asset('/icon svg/panahbawah.svg') }}" alt="role" class="flex my-auto ml-1">                                     
            </div>
            <div class="h-9 mt-4 my-auto"><span>showing 1 - 10 of 85</span></div>
    </div>
    <div class="">
    </div>
</div>
</div>
@endsection