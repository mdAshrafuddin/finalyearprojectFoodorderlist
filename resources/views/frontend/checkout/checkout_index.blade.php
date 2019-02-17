@extends('layouts.frontend.frontend_master')

@push('css')
<link rel="stylesheet" href="{{ asset('shopping/shopping.css') }}">
@endpush

@section('content')
<div class="container">

    <h2 class="mt-5"><i class="fa  fa-credit-card-alt"></i> Checkout</h2>
    <hr>


        <div class="row"> 

        <div class="col-md-7">  
            <h4>Billing Details</h4>

               <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-5">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="provance">Provance</label>
                        <input type="text" class="form-control" id="provance" placeholder="Provance">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="postal">Postal</label>
                      <input type="text" class="form-control" id="postal" placeholder="Postal">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                  </div>
                  <hr>
                  <h5><i class="fa fa-credit-card"></i> Payment Details</h5>

                  <div class="form-group">
                    <label for="name_card">Name on card</label>
                    <input type="text" class="form-control" id="name_card" placeholder="Name on card">
                  </div>

                  <div class="form-group">
                    <label for="card">Credit or debit card</label>
                    <input type="text" class="form-control" id="card" placeholder="Credit or debit card">
                  </div>
                  
                  <button type="submit" class="btn btn-outline-info col-md-12">Complete Order</button>
                </form>

            </div>

            <div class="col-md-5">
                
            <h4>Your Order</h4>
                
                <table class="table your-order-table">
                    <tbody><tr>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Qty</th>
                    </tr>
                    <tr>
                        <td><img src="images/01.jpg" alt="" style="width: 4em"></td>
                        <td>
                            <strong>Yoga pro</strong><br>
                            this is some text for the product <br> 
                            <span class="text-dark">$355.00</span>
                        </td>
                        <td>
                            <span class="badge badge-light">1</span>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/01.jpg" alt="" style="width: 4em"></td>
                        <td>
                            <strong>Yoga pro</strong><br>
                            this is some text for the product <br> 
                            <span class="text-dark">$355.00</span>
                        </td>
                        <td>
                            <span class="badge badge-light">1</span>
                        </td>
                    </tr>
                </tbody></table>

                <hr>
                <table class="table your-order-table table-bordered">
                    <tbody><tr>
                        <th colspan="2" "="">Price Details</th>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>$1200</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>1200</th>
                    </tr>
                    
                </tbody>
            </table>

            </div>
        </div>

</div>

<div class="mt-5"><hr></div>

@endsection

@push('script')

@endpush