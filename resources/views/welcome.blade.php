<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
                @inject('thing', 'hireme\Http\Controllers\Something')
                <div class="thing">{{ $thing->getThing() }}</div>
            </div>
        </div>
    </body>
</html>
