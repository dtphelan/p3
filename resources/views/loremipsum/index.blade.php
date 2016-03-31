@extends('layouts.master')


@section('title')
    Lorem Ipsum
@stop

@section('head')

@stop

@section('content')

    <div class='col-md-6'>
        <p>Generate up to 10 paragraphs of lorem ipsum text. Use it as filler, but never try to explain it to someone who isn't a designer/developer.</p>
    </div>

    <div>
        <form method='POST' action='/loremipsum'>
           <input type='hidden' value='{{ csrf_token() }}' name='_token'>

            <div class='col-md-3 col-sm-6'>
                <div class='input-group'>
                    <span class='input-group-addon' id='basic-addon1'>Paragraphs</span>
                    <input type='number' name='number' class='form-control' value='<?php if(null !== old('number')) echo old('number'); else echo $number; ?>'>
                    </input>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                <div class='input-group'>
                    <button type='submit' class='btn btn-primary'>Gimme' some text</button>
                </div>
            </div>
        </form>
    </div>

    <br>
    <br>

    @if(isset($_POST['number']))
        <div class='col-md-6'>
            <p><?php echo implode('<br><p>', $paragraphs); ?>
        </div>
    @else
        <div class='col-md-6'>
            <p>What are you waiting for? Get some Latin!</p>
        </div>
    @endif


@stop

@section('body')

@stop
