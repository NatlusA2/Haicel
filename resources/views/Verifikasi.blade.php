<x-register>
    <div class="col-lg-4 side-image bg-primary">
        <x-LR>
            <x-slot name="title">Verifikasi</x-slot>
            <x-slot name="paragraph">"Silakan cek email Anda untuk kode verifikasi. Masukkan kode tersebut untuk mengaktifkan akun Anda."</x-slot>
            <x-slot name="additionalText"></x-slot>
        </x-LR>
        <img class="cover" src="img/fill out (1).png" alt="">
        <x-rectangle></x-rectangle>
    </div>
    <div class="col-lg-8 right px-3">
    <div class="input-box w-100">
        <div class="steper">
         <div class="progress_header">
             <p class="completed"><span class="step"><i data-feather="check"></i></span>Daftar</p>
             <p><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form method="POST" action="{{ route('verify.otp') }}" >
         @csrf
            <div class="page">
                <header class="page-title">Verifikasi</header>
                <p>Kami telah mengirimkan kode OTP ke nomor anda </p>
               
                <div class="otp-field">
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off"> 
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                </div>
                <div class="timer d-flex justify-content-center">
                    <p>01:00</p>
                </div>
                <div class="re-mesage d-flex justify-content-center">
                    <p>Tidak mendapatkan mesage ? <a href="">Kirim Ulang mesage</a></p>
                </div>
                <div class="input-submit">
                <button class="submit" type="submit" >Daftar</button>
                </div>
            </div>
         </form>
        </div> 
     </div>
    </div>

  
</x-register>