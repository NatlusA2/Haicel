<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image bg-primary">
                           
                    <!-------------      image     ------------->
                    
                    <img src="img/haicel-white-1.png" alt="">
                    <div class="text">
                        <h4>Hi Welcome back</h4>
                        <p>to keep connected with us please login 
                        <br>with your personali info
                        </p>
                    </div>
                    <div class="rectangle-parent">
                        <div class="group-child">
                        </div>
                        <div class="group-item">
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 right">
                    
                    
                    <div class="input-box w-100">
                       <div class="steper">
                        <div class="progress_header">
                            <p class="completed"><span class="step"><i data-feather="check"></i></span>Daftar</p>
                            <p class="completed"><span class="step"><i data-feather="check"></i></span>Verifikasi</p>
                            <p class="completed"><span class="step"><i data-feather="check"></i></span>Pilih Paket</p>
                            <p><span class="step">4</span>Pembayaran</p>
                        </div>
                       </div> 
                       <div class="form-outer">
                        <form action="#">
                            <div class="page">
                                <header class="page-title">Daftar</header>
                                <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                                <div class="pembayaran">
                                </div> 

                                <div class="input-submit">
                                    <button id="openOverlay">Open Overlay</button>
                                
                                    <div id="overlay" class="overlay">
                                        <div class="overlay-content">
                                            <span class="close-btn" id="closeOverlay">&times;</span>
                                            <div class="overlay-title">
                                                <div class="tittle border-bottom">
                                                <h4>Overlay Title</h4><span></span>
                                                <i class="fa-solid fa-building-columns"></i>
                                                </div>
                                            </div>
                                            <div class="overlay-pay">
                                                <div class="card">
                                                    <div class="card-pay d-flex justify-content-between">
                                                        <img src="img/header.png" alt="">
                                                        <h4>BNI</h4>
                                                        <button class="select"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <script src="js/script.js"></script>
                                </div>
                            </div>
                        </form>
                       </div> 
                    </div>             
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var overlay = document.getElementById("overlay");
            var openOverlayBtn = document.getElementById("openOverlay");
            var closeOverlayBtn = document.getElementById("closeOverlay");

            // Open the overlay
            openOverlayBtn.onclick = function() {
                overlay.style.display = "block";
            }

            // Close the overlay
            closeOverlayBtn.onclick = function() {
                overlay.style.display = "none";
            }

            // Close the overlay when clicking outside of the overlay content
            window.onclick = function(event) {
                if (event.target == overlay) {
                    overlay.style.display = "none";
                }
            }
        });
    </script>
    <script>
        feather.replace();
    </script>
    
</div>