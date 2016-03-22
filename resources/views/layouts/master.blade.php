<!DOCTYPE html>
<html>
<head>

    <title>
        @yield('title','Daniel Phelan DWA 15')
    </title>
    <meta charset='utf-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='css/main.css' type='text/css'>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Outside code: Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://p1.danielphelan.me">Daniel Phelan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://p1.danielphelan.me">Project 1</a></li>
            <li><a href="http://p2.danielphelan.me">Project 2</a></li>
            <li class="active"><a href="http://p3.danielphelan.me">Project 3</a></li>
            <li><a href="http://p4.danielphelan.me">Project 4</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
        <div class='container'>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </div>
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;

    </footer>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
