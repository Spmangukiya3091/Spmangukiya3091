@extends('layouts.main')

@section('main')
    <!-- /breadcrumbs -->
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <a href="{{ '/services' }}">Service</a> » <span class="breadcrumb_last" aria-current="page">Photos</span>
        </div>
    </nav>
    <!-- //breadcrumbs -->
    <section class="w3l-contact-main">
        <div class="container py-md-5 photos">
            <img src="{{ url("assets/images/1.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/2.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/3.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/4.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/5.png") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/2971635.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/about.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/7.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/8.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/9.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/10.png") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/blood-bank.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/blood-cells.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/bloodcheckup.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/blooddonation.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/blood-donation_istock.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/g3.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/blood-donor-day.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/serve.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/serve1.jpg") }}" alt="Blood Bank">
            <img src="{{ url("assets/images/download4.jpg") }}" alt="Blood Bank">
        </div>
    </section>
@endsection
