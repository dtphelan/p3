@extends('layouts.master')


@section('title')
    Index
@stop

@section('head')

@stop

@section('content')

<form method='POST' action='/password'>

   <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <div class='col-md-3 col-sm-6'>
        <div class='input-group'>
            <span class='input-group-addon' id='basic-addon1'>Number</span>
            <input type='number' name='number' class='form-control'>
            </input>
        </div>
    </div>
    <div class='col-md-3 col-sm-6'>
        <div class='input-group'>
            <button type='submit' class='btn btn-primary'>Gimme' some passwords</button>
        </div>
    </div>
</form>

<div class='col-md-6'>
    <p>Here's a nice description of what the page does.</p>
</div>

@stop
