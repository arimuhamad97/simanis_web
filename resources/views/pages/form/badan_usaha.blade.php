@extends("layouts.{$userType}")

<?php
$forms = array(
    (object)array(
        "type" => "text",
        "placeholder" => "NOMOR INDUK KEPENDUDUKAN (NIK)",
        "prop" => "nik"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "NAMA",
        "prop" => "nama_direktur"
    ),
    (object)array(
        "type" => "select",
        "placeholder" => "KABUPATEN",
        "prop" => "id_kabupaten",
        "options" => $Kabupaten,
    ),
    (object)array(
        "type" => "select",
        "placeholder" => "KECAMATAN",
        "prop" => "kecamatan",
        "options" => $Kecamatan,
    ),
    (object)array(
        "type" => "select",
        "placeholder" => "KELURAHAN/DESA",
        "prop" => "kelurahan",
        "options" => $Kelurahan,
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "ALAMAT LENGKAP",
        "prop" => "alamat_lengkap"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "NO. HP",
        "prop" => "no_hp"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "NAMA USAHA",
        "prop" => "nama_usaha"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "BENTUK USAHA",
        "prop" => "bentuk_usaha"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "TAHUN BERDIRI",
        "prop" => "tahun_berdiri"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "LEGALITAS USAHA",
        "prop" => "formal_informal"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "NIB/TAHUN",
        "prop" => "nib_tahun"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "NOMOR SERTIFIKAT HALAL/ TAHUN",
        "prop" => "nomor_sertifikat_halal_tahun"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "SERTIFIKAT MEREK/TAHUN",
        "prop" => "sertifikat_merek_tahun"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "NOMOR TEST REPORT/TAHUN",
        "prop" => "nomor_test_report_tahun"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "SNI/TAHUN",
        "prop" => "sni_tahun"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "JENIS USAHA",
        "prop" => "jenis_usaha"
    ),
    (object)array(
        "type" => "select",
        "placeholder" => "CABANG INDUSTRI",
        "prop" => "cabang_industri",
        "options" => $CabangIndustri,
    ),
    (object)array(
        "type" => "select",
        "placeholder" => "SUB CABANG INDUSTRI",
        "prop" => "sub_cabang_industri",
        "options" => $SubCabangIndustri,
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "INVESTASI/ MODAL (RP. 000)",
        "prop" => "investasi_modal"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "JUMLAH TENAGA KERJA PRIA",
        "prop" => "jumlah_tenaga_kerja_pria"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "JUMLAH TENAGA KERJA WANITA",
        "prop" => "jumlah_tenaga_kerja_wanita"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "KAPASITAS PRODUKSI (RP. 000)",
        "prop" => "kapasitas_produksi_perbulan"
    ),
    (object)array(
        "type" => "text",
        "placeholder" => "SATUAN PRODUKSI",
        "prop" => "satuan_produksi"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "NILAI PRODUKSI (RP.000)",
        "prop" => "nilai_produksi_perbulan"
    ),
    (object)array(
        "type" => "number",
        "placeholder" => "NILAI BAHAN BAKU (RP.000)",
        "prop" => "nilai_bahan_baku_perbulan"
    ),

)


?>
<style>
    .inputstyle {
        margin: 10px 0px;
        display: flex;
        width: 40%;
        justify-content: space-between;


    }

    .inputstyle>select {
        width: 185px;
    }

    .inputstyle>span {
        word-wrap: break-word;
        width: 50%
    }
</style>
@section('content')
<form method="POST" action="/form/admin/{{!empty($badan_usaha) ? $badan_usaha->id : ''}}">
    @csrf
    @foreach($forms as $key=>$form)
    <div class="inputstyle">
        <span>{{$form->placeholder}} : </span>
        @if($form->type == 'select')
        <select class="selectpicker" data-live-search="true" name="{{$form->prop}}" value="{{strtolower(!empty($badan_usaha) ? $badan_usaha->{$form->prop} : '')}}">
            <option value="" disabled selected>pilih</option>
            @foreach($form->options as $key=>$option)
            <option value="{{$form->prop == 'id_kabupaten'?$option->id:$option->name}}" {{!empty($badan_usaha) ? strtolower($badan_usaha->{$form->prop})==strtolower(($form->prop == 'id_kabupaten'?$option->id:$option->name))?'selected' : '' : ''}}>{{$option->name}}</option>
            @endforeach
        </select>
        @else
        <input type="{{$form->type}}" name="{{$form->prop}}" value="{{!empty($badan_usaha) ? $badan_usaha->{$form->prop} : ''}}" placeholder="{{$form->placeholder}}">
        @endif
    </div>
    @endforeach
    <button type="submit">Submit</button>
</form>
@endsection

<script>
    const a = document.getElementsByName("sub_cabang_industri");
    console.log(a)
</script>