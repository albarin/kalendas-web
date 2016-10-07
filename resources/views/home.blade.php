<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kalendas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
    <style>
        .jumbotron { text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Kalendas</h3>
        </div>

        <div class="jumbotron">
            <form method="post" action="/create-calendar">
                <div class="form-group">
                    <div class="input-group date">
                        <input class="form-control" type="text" name="date" onkeydown="return false" value="{{ date('F Y') }}">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

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

        <footer class="footer">
            <p>By Alba Rincón | alba@rincon.me</p>
        </footer>
    </div>

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