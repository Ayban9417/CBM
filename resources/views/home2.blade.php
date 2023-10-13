@extends('layouts.web')

@section('title', "Dashboard || CBA")

@section('breadtitle', "Dashboard")

@section('breadli')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')




<div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel2"><i class="la la-road2"></i> Upgrade to next Level
                    (₦{{number_format($pay_amount)}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="registerForm" method="post">
                <div class="modal-body">



                    <h5><i class="icon-arrow-right"></i> <b class="text-danger">Select Prefered Upgrade method!!</b>
                    </h5>
                    <div class="input-group">
                        <ul class="list-group col-sm-12">
                            <li class="list-group-item p-3">
                                <input type="radio" class="check " id="flat-radio-1" name="payment_method" checked
                                    data-radio="iradio_flat-red" value="wallet">
                                <label for="flat-radio-1">Upgrade with Wallet Balance -
                                    <em><b>Php{{number_format($pay_amount)}}</b></em></label>
                            </li>
                            <li class="list-group-item p-3">
                                <input type="radio" class="check " id="flat-radio-2" name="payment_method"
                                    data-radio="iradio_flat-red" value="paystack">
                                <label for="flat-radio-2">Upgrade with Credit Card </label>
                                <img src="/assets/images/paystack-ii.png" alt="PAYSTACK" class="img-fluid">
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-info waves-effect waves-light">Make Payment</button>

                </div>
            </form>
        </div>
    </div>
</div>



@if(Auth::user()->role == 'admin')
    <div class="col-md-6">
        <div class="card border-success">
            <div class="card-header bg-light">
                <h3 class="m-b-0 text-dark">MEMBERS</h3>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle">Total Members: {{$allusers}} </h6>
                <h6 class="card-subtitle">Total Entry Today: {{$todays}} </h6>
        </div>
    </div>
</div>
@endif


    <div class="row">
        <div class="col-md-6">
            <div class="card border-success">
                <div class="card-header bg-light">
                    <h3 class="m-b-0 text-dark">User Summary</h3>
                </div>
                <div class="card-body">

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <!-- @if(Auth::user()->level < 1) <a onclick="payWithPaystack()" id="buttonText" href="javascript:void(0)"
                    class="btn btn-outline-info"></i> Activate Your Account</a>
                    @else -->
                    @if(Auth::user()->level < 6) <!-- <a href="javascript:void(0)" id="buttonText" data-toggle="modal"
                        data-target="#modal" class="btn btn-outline-success">Upgrade to next level</a> -->
                        <!-- <a href="javascript:void(0)" class="btn btn-info mt-2 ml-2">Edit Profile</a> -->
                        @else
                        <div class="alert alert-success"> You did it! </div>
                        @endif
                        @endif

                        <!-- <a href="javascript:void(0)" class="btn btn-outline-info" data-toggle="modal"
                          data-target="#iconModal">How to?</a> -->
                        <table class="table mt-3">

                            <tbody>
                                <!-- <tr>
                                    <td>Level:</td>
                                    <td class="{{Auth::user()->level == 0 ? 'text-danger' : ''}}">
                                        {{Auth::user()->level == 0 ? "Not activated" : Auth::user()->level}}</td>
                                </tr> -->

                                <tr>
                                    <td>Total Income:</td>
                                    <td class="text-success">Php{{number_format($transIn)}}</td>
                                </tr>

                                <tr>
                                    <td>Total Withdrawal:</td>
                                    <td class="text-danger">Php{{number_format($transOut)}}</td>
                                </tr>
                                <tr>
                                    <td>Joined:</td>
                                    <td class="text-dark">{{date_format(date_create(Auth::user()->created_at),"d-M-Y")}}
                                    </td>
                                </tr>
                                @if(Auth::user()->level > 0)
                                <tr>
                                    <td>Referral Link:</td>
                                    <td><a class="text-info"
                                            href="http://127.0.0.1:8000/register?ref={{Auth::user()->username}}">http://127.0.0.1:8000/register?ref={{Auth::user()->username}}</a>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-success">
                <div class="card-header bg-light">
                    <h3 class="m-b-0 text-dark">Sponsor Details</h3>
                </div>
                <div class="card-body">

                    <table class="table mt-3">

                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{ !$upline ? "N/A": $upline->name }}</td>
                            </tr>
                            <tr>
                                <td>Username:</td>
                                <td>{{ !$upline ? "N/A": $upline->username }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ !$upline ? "N/A": $upline->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>{{ !$upline ? "N/A": $upline->phone }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- modal -->


    <script>
    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: '{{$paystack_key}}',
            email: '{{Auth::user()->email}}',
            amount: {
                {
                    $pay_amount * 100
                }
            },
            currency: "NGN",
            ref: '' + Math.floor((Math.random() * 1000000000) +
                1
                ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

            // label: "Optional string that replaces customer email"
            metadata: {
                custom_fields: [{
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "{{Auth::user()->phone}}"
                    },
                    {
                        display_name: "Username",
                        variable_name: "username",
                        value: "{{Auth::user()->username}}"
                    }
                ]
            },
            callback: function(response) {
                //   alert('success. transaction ref is ' + response.reference);

                document.getElementById("buttonText").innerHTML =
                    '<h3>Processing... <i class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true"></i></h3>';

                $.ajax({
                    url: '/verify/' + response.reference,
                    method: 'GET'
                }).done(function(data) {

                    location.reload();

                }).fail(function(err) {

                    swal("Opps!", err.message, "error");

                })

            },
            onClose: function() {
                //   alert('window closed');

            }
        });
        handler.openIframe();
    }
    </script>
    @endsection