@extends('layout.layout')
@section('content')
<div class="container mb-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb2">
      <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li class="breadcrumb-item">My Account</li>
    </ol>
  </nav>
  <div >
    <div class="account-dashboard">
      <div class="dashboard-upper-info">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-3 col-md-6">
            <div class="d-single-info">
              <div class="row">
                <div class="col-md-3"><img src="assets/images/logout.png" alt="" title="" class="img-fluid"></div>
                <div class="col-md-9">
                  <p class="user-name"><span class="text-danger">{{ Auth::user()->userName }}</span></p>
                  <p>( not {{ Auth::user()->userName }} ? <a href="{{ url('/logout') }}">Log Out</a>)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-single-info">
              <div class="row">
                <div class="col-md-3"><img src="assets/images/support.png" alt="" title="" class="img-fluid"></div>
                <div class="col-md-9">
                  <p>Need Assistance? <br>
                    Customer service at</p>
                  <p><a href="mailto:admin@srgit.com">admin@srgit.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-single-info">
              <div class="row">
                <div class="col-md-3"><img src="assets/images/email.png" alt="" title="" class="img-fluid"></div>
                <div class="col-md-9">
                  <p>E-mail them at </p>
                  <p><a href="mailto:contact@srgit.com">contact@srgit.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-single-info border-0">
              <div class="row">
                <div class="col-md-12"><a href="cart.html" class="view-cart"><i class="fa fa-cart-plus"></i>view cart </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-2">
          <!-- Nav tabs -->
          <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="#dashboard" data-toggle="tab" class="active">Dashboard</a></li>
            <li> <a href="#orders" data-toggle="tab">Orders</a></li>
            <li><a href="#address" data-toggle="tab">Addresses</a></li>
            <li><a href="#account-details" data-toggle="tab" >Account details</a></li>
            <li><a href="{{ url('/logout') }}">logout</a></li>
          </ul>
        </div>
        <div class="col-md-12 col-lg-10">
          <!-- Tab panes -->
          <div class="tab-content dashboard-content">
            <div class="tab-pane active" id="dashboard">
              <h3>Dashboard </h3>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-center"><a href="my-account.html"><img src="assets/images/page-img/lunch-box.png"></a></div>
                      <h2>Your Orders</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-center"><a href="login.html"><img src="assets/images/page-img/login.png"></a></div>
                      <h2>Login & security</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-center"><a href="my-account.html"><img src="assets/images/page-img/notebook.png"></a></div>
                      <h2>Your Addresses</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="orders">
              <h3>Orders</h3>
              <div class="table-responsive">
                <table class="table boder-b">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Total</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>May 10, 2018</td>
                      <td>Processing</td>
                      <td>$25.00 for 1 item </td>
                      <td><a href="cart.html" class="view">view</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>May 10, 2018</td>
                      <td>Processing</td>
                      <td>$17.00 for 1 item </td>
                      <td><a href="cart.html" class="view">view</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>May 10, 2018</td>
                      <td>Processing</td>
                      <td>$17.00 for 1 item </td>
                      <td><a href="cart.html" class="view">view</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>May 10, 2018</td>
                      <td>Processing</td>
                      <td>$17.00 for 1 item </td>
                      <td><a href="cart.html" class="view">view</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="downloads">
              <h3>Downloads</h3>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Downloads</th>
                      <th>Expires</th>
                      <th>Download</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Haven - Free Real Estate PSD Template</td>
                      <td>May 10, 2018</td>
                      <td>never</td>
                      <td><a href="#" class="view">Click Here To Download Your File</a></td>
                    </tr>
                    <tr>
                      <td>Nevara - ecommerce html template</td>
                      <td>Sep 11, 2018</td>
                      <td>never</td>
                      <td><a href="#" class="view">Click Here To Download Your File</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="address">
              <p>The following addresses will be used on the checkout page by default.</p>
              <h4 class="billing-address">Billing address</h4>
              <div class="row">
                <div class="col-md-4">
                  <div class="address-1">
                    <p class="biller-name"><strong>Jasmine</strong></p>
                    <address>
                    <small>4301 Peacock Springs Trl
                    Orlando FL<br>
                    P: (123) 456-7890</small>
                    </address>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="address-1">
                    <p class="biller-name"><strong>Bernadette</strong></p>
                    <address>
                    <small>14301 Peacock Springs Trl
                    Orlando FL<br>
                    P: (123) 456-7890</small>
                    </address>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="address-1">
                    <p class="biller-name"><strong>Alexandra</strong></p>
                    <address>
                    <small> 3298 Galaxy Way
                    
                    Orlando, FL <br>
                    P: (123) 456-7890 </small>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="account-details">
              <h3>Account details </h3>
              <div class="login m-0">
                <div class="login-form-container">
                  <div class="account-login-form">
                    <form action="#">
                      <p>Already have an account ? <a href="login.html">Log in instead!</a></p>
                      
                      <div class="input-radio"><p>Social title</p>  <span class="custom-radio">
                        <input type="radio" value="1" name="id_gender">
                        Mr.</span> &nbsp;&nbsp; <span class="custom-radio">
                        <input type="radio" value="1" name="id_gender">
                        Mrs.</span> </div>
                      <div class="account-input-box">
                        <div class="row">
                          <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" name="first-name" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" name="last-name" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" name="email-name" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" name="user-password" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label>Birthdate</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YYYY" value="" name="birthday">
                            <div class="example"> (E.g.: 05/31/1970) </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-checkbox">
                        <input type="checkbox" value="1" name="optin">
                        <label>Receive offers from our partners</label>
                      </div>
                      <div class="custom-checkbox">
                        <input type="checkbox" value="1" name="newsletter">
                        <label>Sign up for our newsletter<br>
                        <em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                      </div>
                      <div class="button-box">
                        <button class="btn default-btn" type="submit">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>

@endsection