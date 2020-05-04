<div class="alertBox hidden" id="error">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close alertClose">
            <span aria-hidden="true">×</span>
        </button>
        <span class="message"></span>
    </div>
</div>
<div class="alertBox hidden" id="success">
    <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close alertClose">
            <span aria-hidden="true">×</span>
        </button>
        <span class="message"></span>
    </div>
</div>
<div class="alertBox hidden" id="please-wait">
    <div class="alert alert-info alert-dismissible " role="alert" style=" background: rgba(58, 241, 132, 0.31); padding: 15px 0 5px;">
        <button type="button" class="close alertClose">
            <span aria-hidden="true">×</span>
        </button>
        <span class="message">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
            <p class="alertPleaseWait"> aan het laden ...</p>
        </span>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
