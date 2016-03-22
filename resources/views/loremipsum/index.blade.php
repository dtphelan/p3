@extends('layouts.master')


@section('title')
    Lorem Ipsum
@stop

@section('head')

@stop

@section('content')

    <form method='POST' action='/loremipsum'>

       <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='col-md-3 col-sm-6'>
            <div class='input-group'>
                <span class='input-group-addon' id='basic-addon1'>Paragraphs</span>
                <input type='number' name='paras' class='form-control'>
                </input>
            </div>
        </div>
        <div class='col-md-3 col-sm-6'>
            <div class='input-group'>
                <button type='submit' class='btn btn-primary'>Gimme' some text</button>
            </div>
        </div>
    </form>

    <div class='col-md-6'>
        <p>Here's a nice description of what the page does.</p>
    </div>

    @if(isset($_POST['paras']))
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
