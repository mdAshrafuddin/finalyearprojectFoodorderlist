@extends('layouts.frontend.frontend_master')

@push('css')
<link rel="stylesheet" href="{{ asset('shopping/shopping.css') }}">
@endpush

@section('content')
<div class="container">

    <h2 class="mt-5"><i class="fa fa-shopping-cart"></i> Shooping Cart</h2>
    <hr>

    <h4 class="mt-5">4 items(s) in Shopping Cart</h4>

    <div class="panel-body cart-items">
        
        <div class="row">
            
            <div class="col-md-12">
                
                <table class="table">
                    
                    <tbody>
                        
                        <tr>
                            <td><img src="images/12.jpg" style="width: 5em"></td>
                            <td>
                                <strong>Mac</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="images/01.jpg" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="images/12.jpg" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
							<td>$233</td>
							
                        </tr>

                    </tbody>

                </table>

            </div>   
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Price Details</th>
                                    </tr>
                                </thead>
                                    <tbody><tr>
                                        <td>Subtotal </td>
                                        <td>12500.00 </td>
                                    </tr>
                                    <tr>
                                        <td>Text</td>
                                        <td>2133.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <th>1,8444</th>
                                    </tr>
                             </tbody></table>           
                         </div>
                    </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <a href="" class="btn btn-primary">Continue Shopping</a>
                    <a href="{{ route('frontend.checkout') }}" class="btn btn-info">Proceed to checkout</a>
                <hr>

                </div>

                <div class="col-md-12">
                
                <h4>2 items Save for Later</h4>
                <table class="table">
                    
                    <tbody>
                        
                        <tr>
                            <td><img src="" style="width: 5em"></td>
                            <td>
                                <strong>Mac</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="images/01.jpg" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="images/12.jpg" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>
                            
                            <td>
        
                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>$233</td>
                        </tr>

                    </tbody>

                </table>

            </div>  
                </div>


            </div>
        </div>
@endsection

@push('script')

@endpush