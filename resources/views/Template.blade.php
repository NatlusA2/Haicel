<x-layout>
    <link rel="stylesheet" href="css/template.css">
    <div class="container-fluid">
        <div class="row d-flex">
            {{-- header --}}
            <x-header>Undangan</x-header>
            <div class="col-12">
                <div class="invite-message">
                    <div class="invite-title border-bottom text-start mb-3">
                      <h4>Undangan Aktif</h4>
                    </div>
                    <div class="template-post">
                        <div class="row">
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 1</h4>
                            </input>
                            </div>
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 2</h4>
                                </input>
                            </div>
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 3</h4>
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="template-post">
                        <div class="row">
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 4</h4>
                                </input>
                            </div>
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 5</h4>
                                </input>
                            </div>
                            <div class="card-content border border-primary text-center">
                                <img src="" alt="">
                                <input type="checkbox" id="check">
                                <h4>Template 6</h4>
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/upload" class="btn btn-primary my-5">Simpan dan lanjut</a>
                        <!-- <button class="btn btn-primary my-5">Simpan dan lanjut</button> -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-layout>