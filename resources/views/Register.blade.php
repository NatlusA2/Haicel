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
         <form method="POST" action="{{ route('register') }}">
         @csrf
             <div class="page">
                 <header class="page-title">Daftar</header>
                 <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                 <div class="input-field">
                     <label for="nama">Nama</label>
                     <input type="text" class="input" name="Nama" id="Nama" value="{{ old('Nama') }}" placeholder="Masukan Nama" required="" autocomplete="off"> 
                     @error('Nama')
                    <div class="error">{{ $message }}</div>
                @enderror
                 </div> 
                 <div class="input-field">
                     <label for="whatsap">Nomor Whatsap</label>
                     <input type="string" class="input" name="Nomor_Telp" id="Nomor_Telp" value="{{ old('Nomor_Telp') }}" placeholder="Masukan Nomor Whatsap" required="">
                     @error('Nomor_Telp')
                    <div class="error">{{ $message }}</div>
                @enderror
                 </div>
                 <div class="input-submit">
                 <button class="submit" type="submit">Daftar</button>
                 </div>
             </div>
         </form>
        </div> 
     </div>
    </div>
</x-register>