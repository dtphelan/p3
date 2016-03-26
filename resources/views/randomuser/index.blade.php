@extends('layouts.master')


@section('title')
    Random Users
@stop

@section('head')

@stop

@section('content')

    <div>
        <form method='POST' action='/randomuser'>

           <input type='hidden' value='{{ csrf_token() }}' name='_token'>

            <div class='col-md-3 col-sm-6'>
                <div class='input-group'>
                    <span class='input-group-addon' id='basic-addon1'>Number of Users</span>
                    <input type='number' name='number' class='form-control' value='<?php if(null !== old('number')) echo old('number'); else echo $number; ?>'>
                    </input>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                <div class='input-group'>
                    <button type='submit' class='btn btn-primary'>Gimme' some users</button>
                </div>
            </div>
        </form>
    </div>

    <div class='col-md-6'>
        <p>Here's a nice description of what the page does.</p>
    </div>

    @if(isset($_POST['number']))
        <div class='col-md-6'>
            <p>
                <?php for($i=0; $i < $number; $i++) { ?>
                    <?php echo '<p>'.$faker->name.'</p>'; ?>
                <?php } ?>
            </p>
        </div>
    @else
        <div class='col-md-6'>
            <p>What are you waiting for? Get some users!</p>
        </div>
    @endif


@stop

@section('body')

@stop
