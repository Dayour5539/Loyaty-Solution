<?php

use Illuminate\Support\Facades\DB; ?>
@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a Citizen</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('citizen.post') }}">
                            @csrf
                            <label>Name:</label>
                            <input type="text" name="name">
                            <label>Gender:</label>
                            <input type="text" name="gender"> <br>
                            <label>Address:</label>
                            <input type="text" name="address">
                            <label>Phone:</label>
                            <input type="number" name="phone"> <br>
                            <label>Ward:</label>
                            <select name="ward_id">
                                <option value="1">Ward 1</option>
                                <option value="2">Ward 2</option>
                                <option value="3">Ward 3</option>
                                <option value="4">Ward 4</option>
                                <option value="5">Ward 5</option>
                                <option value="6">Ward 6</option>
                                <option value="7">Ward 7</option>
                                <option value="8">Ward 8</option>
                                <option value="9">Ward 9</option>
                            </select>
                            <label>LGA:</label>
                            <select name="lga_id">
                                <option value="1">Aba North</option>
                                <option value="2">Aba South</option>
                                <option value="3">Arochukwu</option>
                                <option value="4">Bende</option>
                                <option value="5">Ikwuano</option>
                                <option value="6">Oko</option>
                                <option value="7">Awka North</option>
                                <option value="8">Ekwelobia</option>
                            </select>
                            <label>State:</label>
                            <select name="state_id">
                                <option value="1">Abia</option>
                                <option value="2">Adamawa</option>
                                <option value="3">Akwa Ibom</option>
                                <option value="4">Anambra</option>
                                <option value="5">Bauchi</option>
                                <option value="6">Bayelsa</option>
                                <option value="7">Benue</option>
                                <option value="8">Ondo</option>
                                <option value="9">Lagos</option>
                            </select>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection