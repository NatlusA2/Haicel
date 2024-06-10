<x-register>
    <div class="col-lg-4 side-image bg-primary">
        <x-LR>
            <x-slot name="title">Hi Welcome Back</x-slot>
            <x-slot name="paragraph">Untuk tetap terhubung dengan kami,</x-slot>
            <x-slot name="additionalText"> silakan login dengan informasi pribadi Anda</x-slot>
        </x-LR>
        <img class="cover" src="img/fill-out-pana-1.png" alt="">
        <x-rectangle></x-rectangle>
    </div>
    <div class="col-lg-8 right px-3">
    <div class="input-box w-100">
        <div class="steper">
         <div class="progress_header">
             <p class="completed"><span class="step">1</span>Daftar</p>
             <p><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
             <div class="page">
                 <header class="page-title">Daftar</header>
                 <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                 <div class="input-field">
                     <label for="nama">Nama</label>
                     <input type="text" class="input" id="nama" placeholder="Masukan Nama" required="" autocomplete="off"> 
                 </div> 
                 <div class="input-field">
                     <label for="whatsap">Nomor Whatsap</label>
                     <input type="number" class="input" id="whatsap" placeholder="Masukan Nomor Whatsap" required="">
                 </div>
                 <div class="input-submit">
                     <a href="/verifikasi" class="submit">next</a>
                 </div>
             </div>
         </form>
        </div> 
     </div>
    </div>
</x-register>