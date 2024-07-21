@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body">
                    <h1>Welcome, {{ Auth::user()->name }}!</h1>
                    <p>You are logged in as {{ Auth::user()->email }}.</p>

                    <!-- Tampilkan informasi atau konten lain di dashboard di sini -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
