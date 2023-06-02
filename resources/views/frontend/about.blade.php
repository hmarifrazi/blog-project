@extends('layout.master')
@section('PageHeader')
<div class="text-center my-5">
    <h1 class="fw-bolder">Welcome to About Page</h1>
    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
</div>
@endsection
@section('content')
    <div>
        <h2>This is About content area</h2>
        <x-header>
            <span>This is subheader from about</span>
            <br>
            <x-slot:title>
                <span>This name slot from about</span>
            </x-slot>
        </x-header>
       
    </div>
@endsection