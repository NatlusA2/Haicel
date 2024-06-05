<div class="col-lg-6">
    <link rel="stylesheet" href="css/styles.css">
    <div class="dasboard text-start">
      <h4>{{ $slot }}</h4>
      <p>{{ $slot }} Overview</p>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-input">
      <div class="input-box d-flex">
        <button class="search btn bg-white" type="submit"><i data-feather="search"></i></button>
        <input class="form-control me-2" type="search" placeholder="Cari Disini..." aria-label="Search">
        <button class="btn bg-white" type="submit"><i data-feather="bell"></i></button>
        <button class="btn bg-white" type="submit"><i data-feather="mail"></i></button>
      </div>
    </div>
  </div>