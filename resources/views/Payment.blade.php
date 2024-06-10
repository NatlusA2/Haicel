<x-register>
    <div class="col-lg-4 side-image bg-primary">
        <x-LR>
            <x-slot name="title">Pembayaran</x-slot>
            <x-slot name="paragraph">"Untuk menyelesaikan transaksi, silakan pilih metode pembayaran yang Anda inginkan. Transaksi Anda akan diproses dengan aman."</x-slot>
            <x-slot name="additionalText"></x-slot>
        </x-LR>
        <img class="cover" src="img/fill out (3).png" alt="">
        <x-rectangle></x-rectangle>
    </div>
    <div class="col-lg-8 right px-3">
    <div class="input-box w-100">
        <div class="steper">
         <div class="progress_header">
             <p class="completed"><span class="step"><i data-feather="check"></i></span>Daftar</p>
             <p class="completed"><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
            <div class="page">
                <header class="page-title">Daftar</header>
                <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                <div class="tranfer d-flex justify-content-center">
                    <div class="tranfer-title d-flex justify-content-center border-bottom">
                        <h4 class="mx-3">Tranfer</h4><span></span>
                        <i class="fa-solid fa-building-columns mt-2"></i>
                    </div>
                </div>
                <div class="metode">
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bni.png" alt="">
                                <h4>BNI</h4>
                            </div>
                                <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bri.png" alt="">
                                <h4>BRI</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bca.png" alt="">
                                <h4>BCA</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/mandiri.png" alt="">
                                <h4>Mandiri</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                </div>
                <div class="tranfer d-flex justify-content-center">
                    <div class="tranfer-title border-bottom">
                    <h4>Lainnya</h4><span></span>
                    </div>
                </div>
                <div class="metode">
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Dana</h4>
                            </div>
                                <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Shoope</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Alphamart</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/mandiri.png" alt="">
                                <h4>Mandiri</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div> --}}
                </div>
                <div class="invite-bottuns d-flex justify-content-center mt-5">
                    <a type="button" class="create btn btn-primary" href="/mbanking">Selanjutnya</a>
                </div>
            </div>
         </form>
        </div> 
     </div>
    </div>
</x-register>