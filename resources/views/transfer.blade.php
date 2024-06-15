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
             <p><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
            <div class="page">
                <div class="bill">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-center">
                                <img src="img/haicel-black 1.png" alt="">
                            </div>
                            <p class="card-subtitle mb-2 text-body-secondary"><small>16/5/2024,  17.03.11</small></p>
                            <div class="card-pembayaran d-flex justify-content-center">
                                <i class="check" data-feather="check"></i>
                                <h3>Pembayaran berhasil</h3>
                            </div>
                            <div class="detail-pembelian">
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Pemesan</p>
                                    <p>ramma@gmail.com</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Nama Paket</p>
                                    <p>Gold</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Masa Aktif</p>
                                    <p>30 hari</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Metode Pembayaran</p>
                                    <p>BCA</p>
                                </div>
                            </div>
                            <div class="rincian">
                                <h5>Rincian Pembayaran</h5>
                                <div class="harga d-flex justify-content-between">
                                    <p>Harga Paket</p>
                                    <p>Rp50.000</p>
                                </div>
                            </div>
                            <div class="total d-flex justify-content-between">
                                <p>Total</p>
                                <h3>Rp50.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-submit">
                    <a href="/type" class="submit">next</a>
                </div>
            </div>
         </form>
        </div> 
     </div>
    </div>
</x-register>