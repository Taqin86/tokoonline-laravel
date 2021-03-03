@extends('layouts.dashboard')

@section('title')
    Store Account
@endsection

@section('content')
  <!-- START: Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">My Account</h2>
        <p class="dashboard-subtitle">Update your current profile</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <!-- SRART: My Account -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="Moh. Rizqi Muttaqin"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Your Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="qun@gmail.com"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressOne">Address 1</label>
                      <input
                        type="text"
                        class="form-control"
                        id="addressOne"
                        name="addressOne"
                        value="Jl. Beku Satu"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressTwo">Address 2</label>
                      <input
                        type="text"
                        class="form-control"
                        id="addressTwo"
                        name="addressTwo"
                        value="Di Block No. 240"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="province">Province</label>
                      <select
                        name="province"
                        id="province"
                        class="form-control"
                      >
                        <option value="East Java">Jawa Timur</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="city">City</label>
                      <select
                        name="city"
                        id="city"
                        class="form-control"
                      >
                        <option value="Kediri">Kediri</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="postalCode">postalCode</label>
                      <input
                        type="text"
                        class="form-control"
                        id="postalCode"
                        name="postalCode"
                        value="46161"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input
                        type="text"
                        class="form-control"
                        id="country"
                        name="country"
                        value="Indonesia"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input
                        type="text"
                        class="form-control"
                        id="mobile"
                        name="mobile"
                        value="+62858 9513 6275"
                      />
                    </div>
                  </div>
                  <!-- END: My Account -->
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: Section Content -->
@endsection