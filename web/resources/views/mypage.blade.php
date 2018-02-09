@extends('layouts.base')

@section('content')

    <div class="container with-border" id="content">
        <div class="sb-account-update-wrapper">
            <div class="sb-verify-account text-center">
                <a href="/account/sendverification">
                    <p>You have not verified your account yet. Click here to get a verification email.</p></a>
            </div>
            <div class="sb-first-row row">
                <section class="col-md-9 hidden-xs">
                    <div class="sb-account-info-wrapper media panel">
                        <div class="sb-account-profile-pic media-left media-middle">
                            <img width="198" class="media-object" src="{{ asset('images/mypage_profile_image.jpg') }}"></div>
                        <div class="sb-account-info media-body">
                            <h3 class="media-heading">Account Information</h3>
                            <ul>
                                <li><span>Lifetime Earnings</span>: <span class="sb-primary-text"><strong>$0.00</strong></span></li>
                                <li><span>Available Balance</span>: <span class="sb-primary-text"><strong>$0.00</strong></span></li>
                                <li><span>Pending Earnings</span>: <span class="sb-primary-text"><strong>$0.00</strong></span></li>
                                <li><span>Withdrawn</span>: <span class="sb-primary-text"><strong>$0.00</strong></span></li>
                            </ul><a class="btn btn-default sb-btn-red sb-btn-cb-details" href="/cashback">Cashback Details</a>
                        </div>
                    </div>
                </section>
                <section class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <div class="sb-account-info-header">
                        <div class="sb-account-profile-pic media-left media-middle"><img class="media-object" src="/shared/assets/images/account/sb-profile-placeholder.png"></div>
                        <div class="sb-account-info col-xs-12">
                            <h3>Account Information</h3>
                            <ul>
                                <li><span>Total Cashback</span>: <span class="sb-account-info__summary-text"><strong>$0.00</strong></span></li>
                                <li><span>Pending</span>: <span class="sb-account-info__summary-text"><strong>$0.00</strong></span></li>
                                <li><span>Redeemable</span>: <span class="sb-account-info__summary-text"><strong>$0.00</strong></span></li>
                                <li><span>Bonus</span>: <span class="sb-account-info__summary-text"><strong>$0.00</strong></span></li>
                                <li><span>Paid out</span>: <span class="sb-account-info__summary-text"><strong>$0.00</strong></span></li>
                            </ul><a class="btn btn-default sb-btn-red sb-btn-cb-details" href="/cashback">Cashback Details</a>
                        </div>
                    </div>
                </section>
            </div><!-- ids here are for customer support to link -->
            <div id="info">
                <div class="row">
                    <section class="col-xs-12 col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="sb-primary-text">
                                    <strong>Account Information</strong>
                                </div><small>*To update email, please contact our Customer Support Team for assistance</small>
                            </div>
                            <div class="panel-body">
                                <form action="/account/update" class="ng-pristine ng-valid" id="updateForm" method="post" name="updateForm" novalidate="novalidate">
                                    <input name="nice_try_token" type="hidden" value="Hd1iGOIs-Unbl4XSclMzbqX-ipsWTMDNGd0M"> <input name="country" type="hidden" value="SG">
                                    <div class="row bot-margin-1">
                                        <div class="col-xs-12 col-md-5 form-group">
                                            <label>Full Name</label> <input class="form-control" name="first_name" value="">
                                        </div>
                                        <div class="col-xs-12 col-md-4 form-group">
                                            <label>Email *</label> <input class="form-control" disabled value="dlt2027_onlyones@hotmail.com">
                                        </div>
                                        <div class="col-xs-12 col-md-3 form-group">
                                            <label>Contact Number</label> <input class="form-control" name="contact" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4 form-group">
                                            <label>Date of Birth</label>
                                            <div class="sb-bday-selector col-xs-12 col-md-12 sb-no-lr-padding">
                                                <div class="col-xs-12 col-md-4 sb-no-l-padding sb-bday-selector">
                                                    <select class="js-bdayDay" data-width="auto" name="bday_day">
                                                        <option class="js-bdayDay-default" selected="selected" value=" Date ">
                                                            Date
                                                        </option>
                                                        @for ($i = 1; $i <= 31; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-md-4 sb-no-l-padding sb-bday-selector">
                                                    <select class="js-bdayMonth" data-width="auto" name="bday_month">
                                                        <option class="js-bdayMonth-default" value=" Month ">
                                                            Month
                                                        </option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 10)) }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-md-4 sb-no-l-padding sb-bday-selector">
                                                    <select class="js-bdayYear" data-width="auto" name="bday_year">
                                                        <option class="js-bdayYear-default" value=" Year ">
                                                            Year
                                                        </option>
                                                        @for ($i = 2014; $i >= 1920; $i--)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 form-group">
                                            <label>Address Line</label> <input class="form-control" name="address" value="">
                                        </div>
                                        <div class="col-xs-12 col-md-2 form-group">
                                            <label>Postal Code</label> <input class="form-control" name="postal_code" value="">
                                        </div>
                                    </div><input name="update_fields" type="hidden" value="user_information"> <button class="btn btn-default sb-btn-red" type="submit">Update Information</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div id="change-password"></div>
            </div>
        </div>
    </div>

@endsection