@extends('creator.layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1><b>Event Information</b></h1>
        </div>
    </div>
    <div style="height:30px;"></div>
    <div class="row">
        <div class="col-sm-4">
            <p>Title</p>
            <p>Description</p>
            <p>Created By</p>
            <p>Total Attendee</p>
            <p>Event Date</p>
        </div>
        <div class="col-sm-8">
            <p>: {{ $event->title }}</p>
            <p>: {{ $event->description }}</p>
            <p>: {{ $event->creator->name }}</p>
            <p>: 0</p>
            <p>: {{ $event->event_date}}</p>
        </div>
    </div>
    <div style="height:60px;"></div>
    <div class="row">
        <div class="col-sm-12">
            <h1><b>Attendee List</b></h1>
            @include('creator.event.inc.guest_list')
        </div>
    </div>
</div>
@endsection
