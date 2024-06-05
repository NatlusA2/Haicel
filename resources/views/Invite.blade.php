<x-layout>
    <link rel="stylesheet" href="css/invite.css">

    <div class="container-fluid">
        <div class="row d-flex">
          {{-- header --}}   
          <x-header>Invite</x-header>

          <!-- Invite Active -->
          <div class="col-12">
            <div class="invite-message">
              <div class="invite-content text-center">
                  <x-No-data></x-No-data>
                  <div class="invite-bottuns">
                      <a type="button" class="create btn btn-primary" href="/invite-detail">+ Buat Undangan</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-layout>