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
                      <a href="/set" class="card-title-active">Edit profile</a>
                      <a href="/prefence" class="card-title">Preferences</a>
                      <a href="/security" class="card-title">Security</a>
                  </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-auto p-0">
                                    <div class="card-profile d-flex">
                                        <img class="img-profile" src="img/pexels-christina-morillo.png" alt="">
                                        <i class="edit" data-feather="edit-2"></i>
                                      
                                    </div>
                                </div>
                                <div class="col-xl-12 p-0">
                                    <form action="" class="form">
                                        <div class="row justify-content-end">
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="your-name">Your Name</label>
                                                    <input type="text" id="your-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="user-name">User Name</label>
                                                    <input type="text" id="user-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="email">Email</label>
                                                    <input type="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="Password">Password</label>
                                                    <input type="password" id="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="birth-day">Date of Birth</label>
                                                    <input type="datetime" id="birth-day" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-edit">
                                                    <label form="phone">Phone Number</label>
                                                    <input type="password" id="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="#" class="btn btn-primary ">Save</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>