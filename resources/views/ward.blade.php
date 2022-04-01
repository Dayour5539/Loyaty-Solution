<?php

use Illuminate\Support\Facades\DB; ?>
@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a Ward</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('ward.post') }}">
                            @csrf
                            <label>Name of Ward:</label>
                            <input type="text" name="name">
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