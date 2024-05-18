@extends('layouts.app')

@section('content')
    <h1>Create Reservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NIKID">NIK ID</label>
            <input type="number" class="form-control" id="NIKID" name="NIKID" required>
        </div>
        <div class="form-group">
            <label for="RoomID">Room ID</label>
            <input type="number" class="form-control" id="RoomID" name="RoomID" required>
        </div>
        <div class="form-group">
            <label for="CheckInDate">Check In Date</label>
            <input type="date" class="form-control" id="CheckInDate" name="CheckInDate" required>
        </div>
        <div class="form-group">
            <label for="CheckOutDate">Check Out Date</label>
            <input type="date" class="form-control" id="CheckOutDate" name="CheckOutDate" required>
        </div>
        <div class="form-group">
            <label for="TotalAmount">Total Amount</label>
            <input type="number" step="0.01" class="form-control" id="TotalAmount" name="TotalAmount" required>
        </div>
        <div class="form-group">
            <label for="idPenyewaanMobil">Car Rental ID</label>
            <input type="text" class="form-control" id="idPenyewaanMobil" name="idPenyewaanMobil" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection