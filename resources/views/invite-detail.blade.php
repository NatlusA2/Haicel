<x-layout>
    <link rel="stylesheet" href="css/invite-detail.css">
    
    <div class="container-fluid">
        <div class="row d-flex">
          {{-- header --}}   
          <x-header>Invite</x-header>

          <!-- Invite Active -->
          <div class="col-12">
            <div class="invite-message">
                <div class="invite-title border-bottom text-start mb-3">
                  <h4>Undangan Aktif</h4>
                </div>
                <div class="col-xl-12 p-0">
                  <form action="" class="form">
                      <div class="row justify-content-end">
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="acara">Nama Acara</label>
                                  <input type="text" id="acara" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.761004404532!2d106.95991747498991!3d-6.162753793824469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMDknNDUuOSJTIDEwNsKwNTcnNDUuMCJF!5e0!3m2!1sid!2sid!4v1717395185251!5m2!1sid!2sid" width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="tanggal">Tanggal</label>
                                  <input type="datetime" id="tanggal" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="alamat">Alamat</label>
                                  <input type="text" id="alamat" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="jumblah">Jumblah Undangan</label>
                                  <input type="text" id="jumblah" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="detail-alamat">Details Alamat</label>
                                  <input type="text" id="detail-alamat" class="form-control">
                                  <input type="text" id="detail-alamat" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="your-name">Ubah URL Undangan</label>
                                  <input type="text" id="your-name" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-edit">
                                  <label form="link-maps">Link Lokasi</label>
                                  <input type="text" id="link-maps" class="form-control">
                              </div>
                          </div>
                          <div class="col-12 d-flex justify-content-end">
                              <a href="/template" class="btn btn-primary my-5">Simpan dan lanjut</a>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-layout>