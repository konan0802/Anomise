@extends('layouts.shops')

@section('title', 'Shops')

@section('content')
<div id="display">
    <div id="map"></div>
    <div id="textbox">
        <table id="table">
            <tbody>
                <tr>
                    <td><span style="border-bottom: solid 2px #8a8579;">店舗名</span></td>
                </tr>
                <tr id="info_name">
                    <td id="info_name_child"></td>
                </tr>
                <tr>
                    <td><span style="border-bottom: solid 2px #8a8579;">詳細</span></td>
                </tr>
                <tr id="info_description">
                    <td id="info_description_child"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
window.reqestDatas = @json($items);
</script>
<script src="{{ asset('/js/homePageMapViewModel.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1audfp_9M-W3XFEOT_lpjGHFN5rFC05s &callback=initMap"></script>
@endsection