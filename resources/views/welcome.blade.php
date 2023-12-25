<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

                

.header {
            margin-bottom: 10px;
        }

        .w-full {
            width: 100%;
        }

        .h-[50px] {
            height: 50px;
        }

        .bg-white {
            background-color: white;
        }

        .grid {
            display: grid;
        }

        .content-center {
            place-content: left;
        }

.custom-background {
            background-image: url('images/gambar_background.png'); /* Gantilah dengan path gambar Anda */
            background-size: cover;
            background-position: center;/*70px 0*/
            background-attachment: scroll;
            height: 460px; /* Sesuaikan dengan tinggi yang diinginkan */
            /* tambahkan properti lain sesuai kebutuhan */
            width: 645px;
            margin-left: 70px;
            
        }

.container {
  text-align: left;
  padding: 100px; /* Sesuaikan dengan kebutuhan Anda */
  color: black; /* Warna teks di atas gambar */
  position: relative;
  text-decoration: bold;
}

h1 {
    margin-top: 0px;
  font-size: 3.2em;
}

span {
    font-size: 1.5em;
}

p {
    font-size: 1.1em;
    text-decoration: gray;
    margin-top: 10px;
}

.text-\[\#102785\] {
    --tw-text-opacity: 1;
    color: rgb(16 39 133 / var(--tw-text-opacity));
}
.font-semibold {
    font-weight: 600;
}


.text-slate-400 {
    --tw-text-opacity: 1;
    color: rgb(148 163 184 / var(--tw-text-opacity));
}
.font-medium {
    font-weight: 600;
}

.custom-button {
  background-color: #102785;
  color: white;
  padding: 10px 20px;
  border-radius: 50px; /* Use a large value to get a round shape */
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-left: 320px;
  font-size: 1em;
  width: 130px;
  
}

.custom-button:hover {
  background-color: #0a1c4e; /* Darken the color on hover */
}
/* Media Query untuk ukuran layar yang lebih kecil */
@media screen and (max-width: 600px) {
  body {
    background-image: none; /* Menyembunyikan gambar pada layar yang lebih kecil */
  }

  .container {
    padding: 20px; /* Mengurangi padding pada layar yang lebih kecil */
  }
}

/* ... (kode CSS yang sudah ada) */

/* Media Query untuk ukuran layar yang lebih kecil */
@media screen and (max-width: 768px) {
  .custom-background {
    background-image: none; /* Menghilangkan gambar latar belakang pada layar yang lebih kecil */
  }

  .container {
    text-align: center;
    padding: 20px; /* Mengurangi padding pada layar yang lebih kecil */
  }

  .custom-button {
    margin-left: 0; /* Menghilangkan margin pada layar yang lebih kecil */
  }

  .image-container {
    display: none;
}

.flex {
  display: flex;
}
}

/*content2*/
.custom-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .text-container {
      text-align: center;
      margin: 0 20px; /* Jarak antara gambar dan teks */
    }

    .text-container p {
      color: black;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
      font-size: 2em;
    }

    .gambar-konten {
      max-width: 50%;
      width: 90px;
      height: auto;
      margin-right: 900px;
    }

    .centered-image {
      display: block;
      margin: 20px auto; /* Jarak antara teks dan gambar */
      width: 900px;
      height: 350px;
    }

    /* Responsivitas untuk layar kecil */
@media only screen and (max-width: 768px) {
  .gambar-konten {
    display: none; /* Menyembunyikan gambar pada layar kecil */
  }

  .text-container {
    margin: 0; /* Menghapus margin pada layar kecil */
  }

  .centered-image {
    width: 90%; /* Membuat gambar memenuhi lebar pada layar kecil */
    height: 40%;
  }
}

    /*Content3*/
    .container-kustom {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .kiri-container {
      text-align: center;
    }


    .teks-konten {
      color: black;
      font-weight: bold;
      text-decoration: none;
      font-size: 2em;
      margin-top: 310px;
    }

    .konten-gambar {
      max-width: 13%;
      height: auto;
      margin: 20px;
      position: relative;
      margin-right: 1290px;
      margin-top: 2px;
      z-index: 1;
      margin-bottom: -400px;
    }
    

    .gambar-konten2 {
      max-width: 22%;
      height: auto;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1; /* Untuk memastikan gambar2 tampil di depan */
      margin-top: 1225px;
      margin-left: 990px;
    }

    .gambar-konten3 {
  max-width: 13%;
  height: auto;
  position: relative; /* atau gunakan absolute jika diperlukan */
  left: 1120px;
  margin-top: -100px; /* Sesuaikan nilai negatif ini untuk mengatur jarak dari atas */
  margin-bottom: 10px; /* Sesuaikan nilai positif ini untuk mengatur jarak dari bawah */
  z-index: 2;
}

/* Gaya untuk ukuran layar kecil */
@media only screen and (max-width: 768px) {
  .gambar-konten2,
  .gambar-konten3 {
    display: none; /* Menghilangkan gambar pada layar kecil */
  }
}

.box-container {
            display: flex;
            justify-content: space-between;
            margin: 30px;
        }

        .box {
            width: 380px;
            height: 180px;
            background-color: #102785; /* Warna biru tua */
            color: white;
            padding: 10px;
            border-radius: 13px; /* Atur ketajaman sudut */
            margin: 0 10px; /* Atur jarak antara kotak */
        }

        .number {
          font-size: 2.2em;
            font-weight: bold;
            margin-top: -10px;
          margin-left: 20px;
        }

        .svg-container {
            display: flex;
            align-items: center;
        }

        .svg-icon {
          margin-top: 2px;
            margin-left: 115px;
        }

        .text-style {
          font-size: 1.3em;
          margin-top: 18px;
          margin-left: 20px;
        }


        /* Tambahan CSS untuk tata letak pada layar kecil */
@media only screen and (max-width: 767px) {
  .box-container {
    flex-direction: column;
    align-items: center;
  }

  .box {
    width: 100%;
    margin-bottom: 20px;
  }

  .svg-container {
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
  }

  .svg-icon {
    margin-left: 0;
  }
}


        /*footer*/

        /*footer {
            background-color: #102785;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .contact-info {
            width: 45%;
        }

        .contact-info h4 {
            margin-bottom: 10px;
        }

        .address {
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            margin-top: 0;
        }

        .social-media {
            display: flex;
            align-items: center;
        }

        .icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .square {
            width: 190px;
            height: 70px;
            background-color: #102785;
            border: 2px solid white;
            box-sizing: border-box;
            border-radius: 10px;
        }*/


        footer {
      background-color: #102785;
      color: white;
      padding: 20px;
      display: flex;
      /*flex-wrap: wrap; /* Menambahkan wrap agar elemen dapat membungkus ke baris baru */
      justify-content: space-between;
    }

    .contact, .address, .social-media {
      text-align: left;
      margin-bottom: 20px; /* Menambahkan margin bawah antar elemen */
      margin-left: 20px;
    }

    .social-media {
      text-align: left;
      margin-left: -350px;
    }

    .social-media i {
      margin-right: 5px;
      margin-left: -250px;
    }

    .social-media p {
      margin-right: 5px;
      margin-left: -380px;
      text-align: left;
    }
    .social-media h3 {
      margin-right: 5px;
      margin-left: -630px;
      text-align: left;
    }

    .address p {
      margin-bottom: 5px;
      margin-left: -600px;
    }

    .square {
            width: 190px;
            height: 70px;
            background-color: #102785;
            border: 2px solid white;
            box-sizing: border-box;
            border-radius: 10px;
            margin-left: -800px;
            margin-right: -5px;
        }
        @media (max-width: 768px) {
  /* CSS untuk ukuran layar kecil */
  footer {
    flex-direction: column; /* Ubah arah tata letak menjadi kolom pada layar kecil */
    align-items: flex-start; /* Posisikan elemen pada bagian kiri pada layar kecil */
  }

  .contact, .address, .social-media, .square {
    margin-left: 20px; /* Tambahkan margin kiri pada elemen pada layar kecil */
    margin-right: 20px;
  }

  .square {
    display: none; /* Sembunyikan social-media dan square pada layar kecil */
  }
}

/* Sembunyikan gambar pada layar yang lebih kecil */

        </style>
    </head>
    <body class="antialiased">

    <div class="w-full h-[50px] bg-white grid content-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="pl-[30 px] pt-1" style="width: 125px; height: 35px; margin-left: 33px; margin-top: 10px;">
    </div>

<!--Content1-->

<div class="flex">
  <div class="custom-background">
    <div class="container">
    <div class="font-semibold grid content-center text-left md:text-left col-span-5 md:col-span-3">
           <div class="text-7xl md:text-xl mb-2 text-black">
             <h1>Selamat Datang Di</h1>
           </div>

          <div class="text-2xl mt-2 text-black font-medium">
            <h2>
              <span>BALAI TIKOMDIK </span>
              <span class="text-[#102785] font-semibold"><u>Jawa Barat</u></span>
            </h2>
           </div>
           
           <div class="my-3 w-full md:w-35 mx-auto text-slate-400 font-medium text-center md:text-left">
             <p>
              TIKomDik UPTD TIKOMDIK (Teknologi Informasi dan Komunikasi Pendidikan) Dinas Pendidikan Provinsi Jawa Barat.
             </p>
           </div>

           <br>

           <div class="flex justify-center md:justify-end mt-8">
            
            <a class="custom-button" href="/register">Mulai daftar</a>
           </div>

        </div>
    </div>
  </div>

  <br>

  <div class="image-container hidden md:block ml-8">
    <img src="{{ asset('images/gambar1.png') }}" alt="Gambar Kanan" style="max-width: 68%; height: auto; margin-left: 43px; margin-top: 45px;">
  </div>

</div>

<div class="image-container hidden md:block ml-8">
    <img src="{{ asset('images/element1.png') }}" alt="Gambar Kanan" style="max-width: 50%; height: 100px; margin-left: 1098px; margin-top: 0.5px;"><!--h 540px margin-left 962px-->
</div>
<br>
<br>

<!--Content2-->

<div class="custom-container">
    <div class="text-container">
    <p><span style="color: black;">Bagaimana Cara</span><span style="color: #102785;"> Penggunaannya</span>?</p>

      <img class="gambar-konten" src="{{ asset('images/element2.png') }}" alt="Gambar Kiri">

      <img class="centered-image" src="{{ asset('images/gambar2.png') }}" alt="Gambar Kiri">
      
    </div>

 </div>

  <!--Content3-->
  <div class="container-kustom">
    <div class="kiri-container">
    <img class="konten-gambar" src="{{ asset('images/element3.png') }}" alt="Gambar 1">
      <p class="teks-konten"><span style="color: clack;">Statistik</span><span style="color: #102785;"> Pengunjung</span></p>
      <img class="gambar-konten2" src="{{ asset('images/element4.png') }}">
      <img class="gambar-konten3" src="{{ asset('images/element13.png') }}" alt="Gambar 3">
    </div>
  </div>



  <!--Lanjutan Content3-->

  <div class="box-container">
        <div class="box" ><!--style="width: 384px; height: 180px;"-->
            <div class="text-style">Jumlah Pengunjung</div>
            <div class="svg-container">
                <div class="number">198</div>
                <svg class="svg-icon" width="150" height="118" viewBox="0 0 314 118" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M202.271 29.6513H196.95V35.0948H191.996V29.6513H186.675V24.9724H191.996V19.4983H196.95V24.9724H202.271V29.6513ZM204.899 20.5381V15.6757H213.37V38H207.926V20.5381H204.899ZM216.947 26.532C216.947 23.0254 217.62 20.2629 218.965 18.2445C220.331 16.2261 222.523 15.2169 225.54 15.2169C228.558 15.2169 230.739 16.2261 232.085 18.2445C233.451 20.2629 234.134 23.0254 234.134 26.532C234.134 30.0794 233.451 32.8623 232.085 34.8807C230.739 36.8991 228.558 37.9083 225.54 37.9083C222.523 37.9083 220.331 36.8991 218.965 34.8807C217.62 32.8623 216.947 30.0794 216.947 26.532ZM228.996 26.532C228.996 24.4729 228.772 22.8928 228.323 21.7919C227.875 20.6706 226.947 20.11 225.54 20.11C224.134 20.11 223.206 20.6706 222.758 21.7919C222.309 22.8928 222.085 24.4729 222.085 26.532C222.085 27.9184 222.166 29.0703 222.329 29.9877C222.493 30.8848 222.819 31.6187 223.308 32.1896C223.818 32.74 224.562 33.0153 225.54 33.0153C226.519 33.0153 227.253 32.74 227.742 32.1896C228.252 31.6187 228.588 30.8848 228.752 29.9877C228.915 29.0703 228.996 27.9184 228.996 26.532ZM236.468 21.3026C236.468 19.6512 236.937 18.377 237.875 17.48C238.833 16.5829 240.067 16.1344 241.576 16.1344C243.084 16.1344 244.307 16.5829 245.245 17.48C246.183 18.377 246.652 19.6512 246.652 21.3026C246.652 22.954 246.183 24.2282 245.245 25.1253C244.307 26.0223 243.084 26.4709 241.576 26.4709C240.067 26.4709 238.833 26.0223 237.875 25.1253C236.937 24.2282 236.468 22.954 236.468 21.3026ZM257.233 16.4708L245.459 38H240.413L252.187 16.4708H257.233ZM241.545 19.1925C240.566 19.1925 240.077 19.8959 240.077 21.3026C240.077 22.689 240.566 23.3821 241.545 23.3821C242.014 23.3821 242.381 23.2089 242.646 22.8623C242.911 22.5157 243.043 21.9958 243.043 21.3026C243.043 19.8959 242.544 19.1925 241.545 19.1925ZM251.025 33.1682C251.025 31.5168 251.494 30.2425 252.432 29.3455C253.37 28.4484 254.593 27.9999 256.102 27.9999C257.61 27.9999 258.834 28.4484 259.771 29.3455C260.709 30.2425 261.178 31.5168 261.178 33.1682C261.178 34.8195 260.709 36.0938 259.771 36.9908C258.834 37.8879 257.61 38.3364 256.102 38.3364C254.593 38.3364 253.37 37.8879 252.432 36.9908C251.494 36.0938 251.025 34.8195 251.025 33.1682ZM256.071 31.058C255.602 31.058 255.235 31.2313 254.97 31.5779C254.726 31.9245 254.603 32.4546 254.603 33.1682C254.603 34.5545 255.092 35.2477 256.071 35.2477C256.54 35.2477 256.907 35.0744 257.172 34.7278C257.437 34.3812 257.57 33.8613 257.57 33.1682C257.57 32.475 257.437 31.9551 257.172 31.6085C256.907 31.2415 256.54 31.058 256.071 31.058Z" fill="#00D1FF"></path><path d="M1 117C18.3333 74.3334 70.2 -4.59993 139 21.0001C183 37.3722 225 149 313 1" stroke="url(#paint0_linear_216_503)" stroke-width="1.5"></path><defs><linearGradient id="paint0_linear_216_503" x1="1" y1="117" x2="313" y2="-19" gradientUnits="userSpaceOnUse"><stop stop-color="#00F0FF"></stop><stop offset="1" stop-color="#00FFA3"></stop></linearGradient></defs></svg>
            </div>
        </div>

        <div class="box">
            <div class="text-style">Dalam Kota</div>
            <div class="svg-container" style="margin-top: 25px">
                <div class="number">105</div>
                <svg class="svg-icon" width="102" height="40" viewBox="0 0 152 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M74.3718 25.6513H69.0507V31.0948H64.0965V25.6513H58.7754V20.9724H64.0965V15.4983H69.0507V20.9724H74.3718V25.6513ZM77.5501 22.532C77.5501 19.0254 78.2229 16.2629 79.5685 14.2445C80.9344 12.2261 83.1261 11.2169 86.1435 11.2169C89.1608 11.2169 91.3423 12.2261 92.6878 14.2445C94.0538 16.2629 94.7368 19.0254 94.7368 22.532C94.7368 26.0794 94.0538 28.8623 92.6878 30.8807C91.3423 32.8991 89.1608 33.9083 86.1435 33.9083C83.1261 33.9083 80.9344 32.8991 79.5685 30.8807C78.2229 28.8623 77.5501 26.0794 77.5501 22.532ZM89.5991 22.532C89.5991 20.4729 89.3749 18.8928 88.9264 17.7919C88.4778 16.6706 87.5502 16.11 86.1435 16.11C84.7367 16.11 83.8091 16.6706 83.3606 17.7919C82.912 18.8928 82.6878 20.4729 82.6878 22.532C82.6878 23.9184 82.7693 25.0703 82.9324 25.9877C83.0955 26.8848 83.4217 27.6187 83.911 28.1896C84.4207 28.74 85.1649 29.0153 86.1435 29.0153C87.1221 29.0153 87.856 28.74 88.3453 28.1896C88.855 27.6187 89.1914 26.8848 89.3545 25.9877C89.5176 25.0703 89.5991 23.9184 89.5991 22.532ZM103.646 29.1682L100.252 37.945H96.9186L98.6923 29.1682H103.646ZM106.463 17.9754C106.545 15.7939 107.258 14.112 108.604 12.9295C109.95 11.747 111.774 11.1558 114.078 11.1558C115.607 11.1558 116.912 11.4208 117.992 11.9509C119.093 12.481 119.919 13.2047 120.47 14.1222C121.04 15.0396 121.326 16.0692 121.326 17.2109C121.326 18.5565 120.989 19.6574 120.317 20.5137C119.644 21.3495 118.859 21.9204 117.962 22.2262V22.3485C119.124 22.7359 120.041 23.3781 120.714 24.2752C121.387 25.1722 121.723 26.3241 121.723 27.7308C121.723 28.9949 121.428 30.1162 120.836 31.0948C120.266 32.053 119.42 32.8073 118.298 33.3578C117.197 33.9083 115.882 34.1835 114.353 34.1835C111.907 34.1835 109.95 33.5821 108.482 32.3792C107.034 31.1763 106.27 29.3618 106.188 26.9357H111.265C111.285 27.8328 111.54 28.5463 112.029 29.0764C112.518 29.5861 113.232 29.8409 114.17 29.8409C114.965 29.8409 115.576 29.6167 116.005 29.1682C116.453 28.6992 116.677 28.0876 116.677 27.3333C116.677 26.3547 116.361 25.6513 115.729 25.2232C115.118 24.7746 114.129 24.5504 112.763 24.5504H111.784V20.2996H112.763C113.803 20.2996 114.639 20.1263 115.271 19.7797C115.923 19.4127 116.249 18.7705 116.249 17.8531C116.249 17.1191 116.045 16.5483 115.638 16.1405C115.23 15.7328 114.669 15.5289 113.956 15.5289C113.181 15.5289 112.6 15.7634 112.213 16.2323C111.846 16.7012 111.632 17.2822 111.57 17.9754H106.463ZM124.368 17.3026C124.368 15.6512 124.837 14.377 125.774 13.48C126.733 12.5829 127.966 12.1344 129.475 12.1344C130.983 12.1344 132.207 12.5829 133.144 13.48C134.082 14.377 134.551 15.6512 134.551 17.3026C134.551 18.954 134.082 20.2282 133.144 21.1253C132.207 22.0223 130.983 22.4709 129.475 22.4709C127.966 22.4709 126.733 22.0223 125.774 21.1253C124.837 20.2282 124.368 18.954 124.368 17.3026ZM145.132 12.4708L133.359 34H128.313L140.086 12.4708H145.132ZM129.444 15.1925C128.466 15.1925 127.976 15.8959 127.976 17.3026C127.976 18.689 128.466 19.3821 129.444 19.3821C129.913 19.3821 130.28 19.2089 130.545 18.8623C130.81 18.5157 130.943 17.9958 130.943 17.3026C130.943 15.8959 130.443 15.1925 129.444 15.1925ZM138.924 29.1682C138.924 27.5168 139.393 26.2425 140.331 25.3455C141.269 24.4484 142.492 23.9999 144.001 23.9999C145.51 23.9999 146.733 24.4484 147.671 25.3455C148.608 26.2425 149.077 27.5168 149.077 29.1682C149.077 30.8195 148.608 32.0938 147.671 32.9908C146.733 33.8879 145.51 34.3364 144.001 34.3364C142.492 34.3364 141.269 33.8879 140.331 32.9908C139.393 32.0938 138.924 30.8195 138.924 29.1682ZM143.97 27.058C143.501 27.058 143.134 27.2313 142.869 27.5779C142.625 27.9245 142.502 28.4546 142.502 29.1682C142.502 30.5545 142.992 31.2477 143.97 31.2477C144.439 31.2477 144.806 31.0744 145.071 30.7278C145.336 30.3812 145.469 29.8613 145.469 29.1682C145.469 28.475 145.336 27.9551 145.071 27.6085C144.806 27.2415 144.439 27.058 143.97 27.058Z" fill="#00FF75"></path><path d="M49 11L29.1364 30.8636L18.6818 20.4091L3 36.0909" stroke="#00FF75" stroke-width="4.18182" stroke-linecap="round" stroke-linejoin="round"></path><path d="M36.4546 11H49V23.5455" stroke="#00FF75" stroke-width="4.18182" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
        </div>

        <div class="box">
            <div class="text-style">Luar Kota</div>
            <div class="svg-container" style="margin-top: 25px">
                <div class="number">93</div>
                <svg class="svg-icon" width="102" height="40" viewBox="0 0 136 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M71.6362 21.0947V25.4372H58.1804V21.0947H71.6362ZM75.5224 29.8104C76.2156 29.2599 76.5316 29.0051 76.4704 29.0458C78.4684 27.3944 80.0382 26.0387 81.1799 24.9785C82.342 23.9184 83.3206 22.8073 84.1158 21.6452C84.9109 20.4831 85.3084 19.3516 85.3084 18.2506C85.3084 17.4148 85.1147 16.7624 84.7274 16.2934C84.34 15.8245 83.759 15.5901 82.9842 15.5901C82.2095 15.5901 81.5979 15.8857 81.1494 16.4769C80.7212 17.0478 80.5072 17.8633 80.5072 18.9234H75.4612C75.502 17.1905 75.869 15.743 76.5622 14.5809C77.2757 13.4188 78.2034 12.5625 79.3451 12.0121C80.5072 11.4616 81.7916 11.1864 83.1983 11.1864C85.6244 11.1864 87.4491 11.8082 88.6724 13.0518C89.916 14.2955 90.5378 15.9163 90.5378 17.9142C90.5378 20.0957 89.7937 22.1243 88.3054 23.9999C86.8171 25.8552 84.9211 27.6697 82.6173 29.4434H90.8742V33.6942H75.5224V29.8104ZM92.7485 17.3026C92.7485 15.6512 93.2174 14.377 94.1553 13.48C95.1135 12.5829 96.3469 12.1344 97.8556 12.1344C99.3643 12.1344 100.588 12.5829 101.525 13.48C102.463 14.377 102.932 15.6512 102.932 17.3026C102.932 18.954 102.463 20.2282 101.525 21.1253C100.588 22.0223 99.3643 22.4709 97.8556 22.4709C96.3469 22.4709 95.1135 22.0223 94.1553 21.1253C93.2174 20.2282 92.7485 18.954 92.7485 17.3026ZM113.513 12.4708L101.739 34H96.6935L108.467 12.4708H113.513ZM97.825 15.1925C96.8464 15.1925 96.3571 15.8959 96.3571 17.3026C96.3571 18.689 96.8464 19.3821 97.825 19.3821C98.2939 19.3821 98.6609 19.2089 98.9259 18.8623C99.191 18.5157 99.3235 17.9958 99.3235 17.3026C99.3235 15.8959 98.824 15.1925 97.825 15.1925ZM107.305 29.1682C107.305 27.5168 107.774 26.2425 108.712 25.3455C109.65 24.4484 110.873 23.9999 112.382 23.9999C113.89 23.9999 115.114 24.4484 116.051 25.3455C116.989 26.2425 117.458 27.5168 117.458 29.1682C117.458 30.8195 116.989 32.0938 116.051 32.9908C115.114 33.8879 113.89 34.3364 112.382 34.3364C110.873 34.3364 109.65 33.8879 108.712 32.9908C107.774 32.0938 107.305 30.8195 107.305 29.1682ZM112.351 27.058C111.882 27.058 111.515 27.2313 111.25 27.5779C111.006 27.9245 110.883 28.4546 110.883 29.1682C110.883 30.5545 111.373 31.2477 112.351 31.2477C112.82 31.2477 113.187 31.0744 113.452 30.7278C113.717 30.3812 113.85 29.8613 113.85 29.1682C113.85 28.475 113.717 27.9551 113.452 27.6085C113.187 27.2415 112.82 27.058 112.351 27.058Z" fill="#FF4141"></path><path d="M48.8333 36L29.0417 16.2083L18.625 26.625L3 11" stroke="#FF4141" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"></path><path d="M36.3333 36H48.8333V23.5" stroke="#FF4141" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </svg>
            </div>
        </div>
    </div>

    <br>
    <br>

    <!--footer-->
    <!--<footer>
        <div class="contact-info">
            <h4>Nomor Kontak</h4>
            <p>+62 877 2403 9619</p>
            <h4>Alamat</h4>
            <p class="address">Jl. Dr. Radjiman No. 6, Pasir Kaliki, Kec. Cicendo, Kota Bandung Jawa Barat 40171</p>
            <h4>Social Media</h4>
            <div class="social-media">
                <i class="fab fa-instagram icon"></i>
                <p>tikomdik_disdikjabar</p>
                <i class="fab fa-facebook icon"></i>
                <p>Tikomdik Jabar</p>
                <i class="fab fa-twitter icon"></i>
                <p>@tikomdik</p>
            </div>
        </div>
        <div class="square"></div>
    </footer>-->

    <footer>
  <div class="contact">
    <p><strong>Nomor Kontak</strong></p>
    <p>+62 877 2403 9619</p>
  </div>

  <div class="address">
    <p><strong>Alamat</strong></p>
    <p>Jl. Dr. Radjiman No. 6, <br>
      Pasir Kaliki, Kec. <br>
      Cicendo, Kota Bandung <br>
      Jawa Barat 40171</p>
  </div>

  <div class="social-media">
    <h3><strong>Social Media</strong></h3>
    <p><i class="fab fa-instagram"></i>tikomdik_disdikjabar</p>
    <p><i class="fab fa-facebook"></i>Tikomdik Jabar</p>
    <p><i class="fab fa-twitter"></i>@tikomdik</p>
  </div>

  <div class="square"></div>
</footer>

    <!--<footer>
        <div class="contact-info">
            <h4>Nomor Kontak</h4>
            <p>+62 877 2403 9619</p>
            <h4>Alamat</h4>
            <p class="address">Jl. Dr. Radjiman No. 6, Pasir Kaliki, Kec. Cicendo, Kota Bandung Jawa Barat 40171</p>
            <h4>Social Media</h4>
            <div class="social-media">
                <img class="icon" src="instagram-icon-white.svg" alt="Instagram Icon">
                <p>tikomdik_disdikjabar</p>
                <img class="icon" src="facebook-icon-white.svg" alt="Facebook Icon">
                <p>Tikomdik Jabar</p>
                <img class="icon" src="twitter-icon-white.svg" alt="Twitter Icon">
                <p>@tikomdik</p>
            </div>
        </div>
        <div class="square"></div>
    </footer>-->

    </body>
</html>
