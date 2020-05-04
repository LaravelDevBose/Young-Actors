@extends('layouts.admin.admin')

@section('title', __('admin.menu.code'))
@section('PageCss')

@endsection
@section('mainContainer')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{__('admin.Generate New Code')}}</h3>
                        </div>
                        <div class="block-content block-content-full" id="form_field">

                            {!! Form::open([ 'route' => [ 'admin.code.store'], 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}

                            <div class="items-push">
                                <div class="form-group row">
                                    <label class="col-md-2" for="val-username">{{__('admin.no of code')}}:<span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        {!!Form::text('num_code',  null,
                                            [
                                                'class'=>'form-control border-radius-0',
                                                'placeholder'=>__('admin.no of code'),
                                                'data-fv-notempty' => true,
                                                'data-fv-blank' => true,
                                                'data-rule-required' => true,
                                                'data-fv-notempty-message' => __('admin.no of code required')
                                            ]) !!}
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm col-md-3">{{__('admin.Generate New Code')}} </button>
                                </div>
                                <div class="block-content pt-0 mt-0 mb-0">
                                    <div class="col-sm-12" style="margin-top: 5px;">
                                        @include('layouts.admin.include.alert_process')
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{__('admin.Sign Up Code List')}}</h3>
                        </div>
                        <div class="block-content" style="padding-bottom: 25px;">
                            @include("layouts.admin.include.alert_process")
                            <div class="table-responsive">
                                <table class="table table-sm table-inverse table-bordered " width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('admin.Code')}}</th>
                                        <th>{{__('admin.Status')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($codes))
                                        @foreach($codes as $code)
                                            <tr>
                                                <td> {{ $loop->iteration }}</td>
                                                <td> {{ $code->code }}</td>
                                                <td>
                                                    @if($code->code_status == 1)
                                                        <span class="badge badge-success">{{__('admin.Unused')}}</span>
                                                    @else
                                                        <span class="badge badge-warning">{{__('admin.Used')}}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            {{ $codes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')

@endsection
