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
                        <a href="/prefence" class="card-title">Preferences</a>
                        <a href="/security" class="card-title-active">Security</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h4>Two-factor Authentication</h4>
                            <x-prefence :ids="['check1']">Enable or disable two factor authentication</x-prefence>
                            <form>
                                <div class="form-title">
                                    <h4>Change Password</h4>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary my-5">Save</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>