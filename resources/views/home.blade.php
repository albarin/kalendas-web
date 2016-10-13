<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kalendas</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/form-elements.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <style>
        body { background-color: darkcyan }
        .github { font-size: 40px; }
    </style>
</head>
<body>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h1>Kalendas</h1>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form method="post" action="/create-calendar">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="date" onkeydown="return false" value="{{ date('F Y') }}">

                                    <!--<div class="title">
                                        <h4>Title</h4>

                                        <input type="checkbox" name="title[bold]" checked="checked">
                                        <label for="title[bold]">Bold</label>

                                        <label for="title[size]">Size</label>
                                        <input type="number" min="1" max="20" name="title[size]" value="20">

                                        <label for="title[color]">Color</label>
                                        <input type="text" name="title[color]" value="000000">
                                    </div>

                                    <div class="header">
                                        <h4>Header</h4>
                                        <label for="header[size]">Size</label>
                                        <input type="number" min="1" max="14" name="header[size]" value="14">

                                        <label for="header[bold]">Bold</label>
                                        <input type="checkbox" name="header[bold]" checked>

                                        <label for="header[color]">Color</label>
                                        <input type="text" name="header[color]" value="424242">

                                        <br>
                                        <label for="header[align]">Alignment</label>
                                        <select name="header[align]">
                                            <option value="center" selected>center</option>
                                            <option value="left">left</option>
                                            <option value="right">right</option>
                                        </select>

                                        <label for="header[bgColor]">Background color</label>
                                        <input type="text" name="header[bgColor]" value="cccccc">

                                        <br>
                                        <label for="header[dayFormat]">Day label</label>
                                        <select name="header[dayFormat]">
                                            <option value="oneLetter">One letter</option>
                                            <option value="short">Short</option>
                                            <option value="full" selected>Full</option>
                                        </select>
                                    </div>

                                    <div class="weekday">
                                        <h4>Days</h4>
                                        <label for="weekday[size]">Size</label>
                                        <input type="number" min="1" max="11" name="weekday[size]" value="11">

                                        <label for="weekday[align]">Alignment</label>
                                        <select name="weekday[align]">
                                            <option value="center">center</option>
                                            <option value="left">left</option>
                                            <option value="right" selected>right</option>
                                        </select>

                                        <label for="weekcell[bgColor]">Background color</label>
                                        <input type="text" name="weekcell[bgColor]" value="ffffff">

                                        <label for="weekendday[bgColor]">Weekends bgColor</label>
                                        <input type="text" name="weekendday[bgColor]" value="eaeaea">
                                    </div>-->
                                </div>

                                <button type="submit" class="btn btn-info">Generate!</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="footer-border"></div>
                <p>By Alba Rincón | <a href="">alba@rincon.me</a></p>
                <a class="github" target="_blank" href="https://github.com/albarin/kalendas"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>



    <!--<nav class="light-blue" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Kalendas</a>
        </div>
    </nav>

    <div class="container">
        <div class="section">
            <form method="post" action="/create-calendar">
                <div class="form-group">
                    <input type="text" name="date" onkeydown="return false" value="{{ date('F Y') }}">

                    <div class="title">
                        <h4>Title</h4>
                        <label for="title[size]">Size</label>
                        <input type="number" min="1" max="20" name="title[size]" value="20">

                        <label for="title[bold]">Bold</label>
                        <input type="checkbox" name="title[bold]" checked="checked">

                        <label for="title[color]">Color</label>
                        <input type="text" name="title[color]" value="000000">
                    </div>

                    <div class="header">
                        <h4>Header</h4>
                        <label for="header[size]">Size</label>
                        <input type="number" min="1" max="14" name="header[size]" value="14">

                        <label for="header[bold]">Bold</label>
                        <input type="checkbox" name="header[bold]" checked>

                        <label for="header[color]">Color</label>
                        <input type="text" name="header[color]" value="424242">

                        <br>
                        <label for="header[align]">Alignment</label>
                        <select name="header[align]">
                            <option value="center" selected>center</option>
                            <option value="left">left</option>
                            <option value="right">right</option>
                        </select>

                        <label for="header[bgColor]">Background color</label>
                        <input type="text" name="header[bgColor]" value="cccccc">

                        <br>
                        <label for="header[dayFormat]">Day label</label>
                        <select name="header[dayFormat]">
                            <option value="oneLetter">One letter</option>
                            <option value="short">Short</option>
                            <option value="full" selected>Full</option>
                        </select>
                    </div>

                    <div class="weekday">
                        <h4>Days</h4>
                        <label for="weekday[size]">Size</label>
                        <input type="number" min="1" max="11" name="weekday[size]" value="11">

                        <label for="weekday[align]">Alignment</label>
                        <select name="weekday[align]">
                            <option value="center">center</option>
                            <option value="left">left</option>
                            <option value="right" selected>right</option>
                        </select>

                        <label for="weekcell[bgColor]">Background color</label>
                        <input type="text" name="weekcell[bgColor]" value="ffffff">

                        <label for="weekendday[bgColor]">Weekends bgColor</label>
                        <input type="text" name="weekendday[bgColor]" value="eaeaea">
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Save</button>
            </form>
        </div>
    </div>

    <footer class="page-footer light-blue">
        <div class="footer-copyright">
            <div class="container">
                By <strong>alba@rincon.me</strong>
            </div>
        </div>
    </footer>-->

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
            integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $('input[name=date]').datepicker({
                format: "MM yyyy",
                viewMode: "months",
                minViewMode: "months",
                autoclose: true
            });
        });
    </script>
</body>
</html>