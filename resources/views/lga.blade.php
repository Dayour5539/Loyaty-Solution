<?php

use Illuminate\Support\Facades\DB; ?>
@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add LGA</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('lga.post') }}">
                            @csrf
                            <label>Name of LGA:</label>
                            <input type="text" name="name">
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