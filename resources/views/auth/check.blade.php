<!-- resources/views/check/index.blade.php -->
@extends('layouts.app')
error_reporting(E_ALL);
ini_set('display_errors', true);


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form Kode Referensi</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            position: relative;
        }

        .image1 {
            margin-top: -90px;
            margin-left: -100px;
            width: 250px;
            height: 290px;
            z-index: 3;
        }

        .image2 {
            margin-top: 30px;
            margin-left: -118px;
            width: 450px;
            height: 280px;
            position: relative;
            z-index: 2;
        }

        .image3 {
            margin-top: 20px;
            margin-left: 1130px;
            margin-right: 0;
            width: 150px;
            height: 80px;
            position: absolute;
            z-index: 2;
        }

        .image4 {
            margin-top: 365px;
            margin-left: 1105px;
            margin-right: 0;
            width: 320px;
            height: 340px;
            position: absolute;
            z-index: 2;
        }

        .form-container {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 20px;
            margin-top: 65px;
            margin-left: 250px;
            width: 480px;
            height: 180px;
            position: relative;
            z-index: 1;
        }

        h2 {
            margin-top: 10px;
            margin-left: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #336699;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 10px;
            width: 80px;
            height: 45px;
        }
    </style>
</head>
<body>
@section('content')
    <div class="container">
        <img src="{{ asset('images/element17.png') }}" alt="Gambar 1" class="image1">
        <img src="{{ asset('images/gambar4.png') }}" alt="Gambar 2" class="image2">
        <img src="{{ asset('images/element1.png') }}" alt="Gambar 3" class="image3">
        
        <div class="form-container">
            <label for="kode_referensi">Kode Referensi</label>
            <input type="text" id="kode_referensi" placeholder="Ketik di sini..." />

            <button type="submit">Kirim</button>
        </div>

        <img src="{{ asset('images/element15.png') }}" alt="Gambar 1" class="image4">

    </div>


    <!--<form action="/check" method="post">
    @csrf
    <label for="referral_code">Masukkan Kode Referral:</label>
    <input type="text" name="referral_code" id="referral_code" required>
    <button type="submit">Check</button>
    </form>-->

    <form action="{{ route('verifikasi-referral') }}" method="get">
    @csrf
    <label for="kodeReferral">Masukkan Kode Referral:</label>
    <input type="text" name="kodeReferral" id="kodeReferral" required>
    <button type="button" onclick="verifikasiReferral()">Verifikasi</button>
    <!--<button type="submit">Verifikasi</button>-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Verifikasi
    </button>
    </form>

    @if(isset($formdata))
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Data from form_data table</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                    
                        <p>Nama: {{ $formdata->nama }}</p>
                        <p>Keterangan: {{ $formdata->keterangan }}</p>
                        <p>Nomor: 0812345678910</p>
                   

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>


        @else
        @php dd($error); @endphp
        <div>
          <p>{{ isset($error) ? $error : 'Default Error Message' }}</p>
        </div>
        @endif
        
    

@endsection

    <!-- check.blade.php -->
<!--<form action="{{ route('verifikasi-referral') }}" method="GET">
    <!-- Isi formulir di sini --
    @csrf
    <label for="kodeReferral">Masukkan Kode Referral:</label>
    <input type="text" name="kodeReferral" id="kodeReferral" required>
    <button type="submit">Check</button>
</form>

<!-- resources/views/check/index.blade.php -->
<!--<form action="{{ route('verifikasi-referral') }}" method="GET">
    <!-- Isi formulir di sini --
    @csrf
    <label for="kodeReferral">Masukkan Kode Referral:</label>
    <input type="text" name="kodeReferral" id="kodeReferral" required>
    <button type="submit" onclick="showPopup()">Check</button>
</form>-->


<!--baru ngt ini-->

<script>
document.addEventListener('DOMContentLoaded', function () {
    // ...

    function showPopup() {
        var referralCode = document.getElementById('kodeReferral').value;

        $.ajax({
            url: '/get-popup-data/' + referralCode,
            method: 'GET',
            success: function (data) {
                var formData = data.formData;
                var userData = data.userData;

                // Tampilkan data dalam pop-up (gantilah ini dengan logika tampilan pop-up Anda)
                alert('Nama: ' + formData.nama + '\nKeterangan: ' + formData.keterangan + '\nNomor: ' + userData.nomer_hp);
            },
            error: function () {
                alert('Gagal mendapatkan data.');
            }
        });
    }

    // ...
});
</script>
<!--end baru bgt-->

<!--baru dan berguna-->

<script>
function verifikasiReferral() {
    var kodeReferral = $('#kodeReferral').val();

    $.ajax({
        url: '/get-popup-data/' + kodeReferral,
        type: 'GET',
        success: function(data) {
            showPopup(data);
        },
        error: function() {
            alert('Gagal mendapatkan data.');
        }
    });
}

function showPopup(data) {
    if (data) {
        alert('Nama: ' + data.nama + '\nKeterangan: ' + data.keterangan);
    } else {
        alert('Data tidak ditemukan.');
    }
}
</script>

<!--end-->

    <!--<script>
    document.addEventListener('DOMContentLoaded', function () {
        var referralCode = "{{ session('referral_code') }}";

        if (referralCode) {
            alert('Kode Referral Anda: ' + referralCode);
            // Tambahkan logika pop-up lainnya di sini
        }

        function showPopup() {
        alert('Berhasil!');
    }
    });
    </script>-->

    @if(session('success'))

    <script>
        showPopup();
    </script>

@endif

</body>
</html>

