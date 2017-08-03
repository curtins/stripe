@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td field-key='role'>{{ $user->role->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.premium')</th>
                            <td field-key='premium'>{{ Form::checkbox("premium", 1, $user->premium == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#stripetransactions" aria-controls="stripetransactions" role="tab" data-toggle="tab">Stripe Transactions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="stripetransactions">
<table class="table table-bordered table-striped {{ count($stripe_transactions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.stripe-transactions.created_at')</th>
                        <th>@lang('quickadmin.stripe-transactions.fields.transaction-user')</th>
                        <th>@lang('quickadmin.stripe-transactions.fields.amount')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($stripe_transactions) > 0)
            @foreach ($stripe_transactions as $stripe_transaction)
                <tr data-entry-id="{{ $stripe_transaction->id }}">
                    <td>{{ $stripe_transaction->created_at or '' }}</td>
                                <td field-key='transaction_user'>{{ $stripe_transaction->transaction_user->email or '' }}</td>
                                <td field-key='amount'>{{ $stripe_transaction->amount }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
