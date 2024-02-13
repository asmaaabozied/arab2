@extends('worker::layouts.worker.app')
@section('title')
    {{trans('employer::employer.wallet_balance')}}
@endsection
@section('content')



    <div class="col-lg-9 col-sm-12 ">

        <div class="row dashboard">
            <div class="card">
                <div class="row profit-padding">

                    <div class="col-md-3 col-sm-6 mt-5">
                        <div class="profits">
                            <div class="sub-profits sub-profits-details">
                                <img src="{{asset('frontend/assets/img/coins.png')}}" class="img-fluid">
                                <h2>{{trans('worker::worker.CurrentlyWorkerWalletBalance')}}</h2>
                                <button class="btn USD "> {{$worker->current_currency}} <br>   {{$worker->wallet_balance ?? ''}}
                                    </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 mt-5">
                        <div class="profits">
                            <div class="sub-profits sub-profits-details">
                                <img src="{{asset('frontend/assets/img/Card.png')}}" class="img-fluid">
                                <h2> {{ trans('employer::employer.accounttype') }}</h2>
                                <button class="btn btn-style ">{{auth()->user()->status ?? ''}}</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 mt-5">
                        <div class="profits">
                            <div class="sub-profits sub-profits-details">
                                <img src="{{asset('frontend/assets/img/Device.png')}}" class="img-fluid">
                                <h2>                                   {{trans('worker::worker.min_withdraw_limit')}}
                                </h2>
                                <button class="btn USD ">
                                    {{$worker->current_currency}} <br>
                                    {{$min_withdraw}}
                                    </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 mt-5">
                        <div class="profits">
                            <div class="sub-profits sub-profits-details">
                                <img src="{{asset('frontend/assets/img/Wallet.png')}}" class="img-fluid">
                                <h2>   {{trans('worker::worker.WorkerWalletBalanceAfterWithdraw')}} </h2>
                                <button class="btn USD"> {{$worker->current_currency}} <br>    {{$worker->wallet_balance}} </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row text-center mt-4">
                    <h4 class="Title"> {{trans('employer::employer.alert')}} </h4>
                    <p>


                        {{trans('employer::employer.The minimum amount to withdraw profits is $10. Complete more tasks Or wait for your pending profits to be approved so that you can withdraw them to your PayPal account')}}



                    </p>

                </div>


                <div>

                </div>




            </div>
        </div>


    </div>

@endsection
