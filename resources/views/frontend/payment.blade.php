@extends('layouts.frontend.app')

@section('title', 'Payment')

@section('PageCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap-select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('mainContainer')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title br-0">Dashboard</h3>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    {!! Form::open([ 'route' => "order", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="border-bottom border-info">
                                            <h4 class="box-title mb-1">Your Information</h4>
                                        </div>
                                    </div>
                                    <div class="col-10 offset-1">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('name', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Full Name',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Full Name Field is Required',
                                                               'id'=>'card-holder-name',
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Username <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('user_name', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your User Name',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'User Name Field is Required',
                                                               'id'=>'card-holder-name',
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::email('email', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Email',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Email Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Phone No. <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('phone_no', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Phone No',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Phone No. Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::password('password',
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> __('auth.enter_pass'),
                                                               'required' => true,
                                                               'data-validation-required-message' => trans('auth.passwordRequired'),
                                                               'min-length'=>6
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Repeat Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::password('password_confirmation',
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> __('auth.enter_c_pass'),
                                                               'required' => true,
                                                               'data-validation-match-match' => 'password',
                                                               'data-validation-required-message' => trans('auth.cPassRequired'),
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="border-bottom border-info">
                                            <h4 class="box-title mb-1">Billing address</h4>
                                        </div>
                                    </div>
                                    <div class="col-10 offset-1 ">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Country <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('country', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Country',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Country Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>State <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('state', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your State',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'State Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5>Address <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('address', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Address',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Address Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>City <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('city', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your City',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'City Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Postal Code <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        {!!Form::text('postal_code', null,
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> 'Your Postal Code',
                                                               'required'=>true,
                                                               'data-validation-required-message' => 'Postal Code Field is Required'
                                                           ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="border-bottom border-info">
                                            <h4 class="box-title mb-1">Card Details</h4>
                                        </div>
                                    </div>
                                    <div class="col-10 offset-1 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" name="payment_token" id="payment_token">
                                                <div class="form-group">

                                                    <div class="controls">
                                                        <div id="card-element" class="form-control form-control-lg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8 offset-4">
                                                <div class="text-xs-right">
                                                    <button type="submit" class="btn btn-rounded btn-info btn-block btn-lg" id="submit-button">Complete Order (25$)</button>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 5px;">
                                                @include('layouts.frontend.include.alert_process')
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    {!! Form::close() !!}
                    <!-- /.box -->
                </div>
            </div>

        </section>
    </div>
@endsection

@section('PageJquery')
    <!-- Form validator JavaScript -->

    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{env('STRIPE_PUBLIC')}}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('submit-button');

        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );

            if (error) {
                // Display "error.message" to the user...
                console.log(error);
                return false;
            } else {
                $('#payment_token').val(paymentMethod.id);
                console.log('handling success', paymentMethod.id);
                $('.GlobalFormValidation').submit();
                return true;
                // The card has been verified successfully...
            }
        });
    </script>
@endsection
