@extends('layouts.app')

@section('title', 'แผนที่แสดงที่ตั้งของสถานที่ฝึกประสบการณ์วิชาชีพ')

@section('content')
<div class="container">
    <div class="container d-flex flex-column py-3">
        <br>
        <h2 class="text-center">แผนที่แสดงที่ตั้งของสถานที่ฝึกประสบการณ์วิชาชีพ <i class="fa-solid fa-building"></i></h2>
        <br>
        <!-- Leaflet Map -->
        <div id="map" style="height: 500px; width: 100%;"></div>
        <br>
        <!-- Button to track current location -->
        <div class="text-center">
            <button type="button" id="trackLocationButton" class="btn btn-primary">Track Location</button>
        </div>
    </div>
</div>

<script>
    let map;
    let marker;

    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map centered at a default location
        const defaultLocation = [13.736717, 100.523186]; // Example: Bangkok, Thailand
        map = L.map('map').setView(defaultLocation, 12);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Add a marker at the default location
        marker = L.marker(defaultLocation, { draggable: true }).addTo(map);

        // Track current location
        document.getElementById('trackLocationButton').addEventListener('click', function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        const currentLocation = [
                            position.coords.latitude,
                            position.coords.longitude,
                        ];
                        marker.setLatLng(currentLocation);
                        map.setView(currentLocation, 12);
                    },
                    function () {
                        alert('Unable to retrieve your location.');
                    }
                );
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        });
    });
</script>
<!-- Include Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endsection
