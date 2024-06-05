<x-layout>
    <link rel="stylesheet" href="css/seting.css">

    <!-- head -->
    <x-header>Setting</x-header>

    <!-- Invite Active -->
    <section id="set-profile">
        <div class="row">
            <div class="col-12">
                <div class="card">
                      <div class="card-header d-flex">
                          <a href="/set" class="card-title">Edit profile</a>
                          <a href="/prefence" class="card-title-active">Preferences</a>
                          <a href="/security" class="card-title">Security</a>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <div class="buttons-set">
                                  <x-prefence :ids="['check1']">I send or receive digital currency</x-prefence>
                                  <x-prefence :ids="['check2']">I receive customer order</x-prefence>
                                  <x-prefence :ids="['check3']">Orders that have not been handled</x-prefence>
                              </div>
                              <div class="col-12 d-flex justify-content-end">
                                  <a href="#" class="btn btn-primary my-5">Save</a>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>