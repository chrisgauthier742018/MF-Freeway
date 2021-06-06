<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name',"MF-Freeway Caffine App")}}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: white;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .input {
            width: 30px;
            height: 25px;

        }

        .label {
            font-size: 15px;
        }

        .form-header {
            font-size: 10px;
            font-weight: bold;
            align-items: center;

        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="row">
                <h1 class="form-header col-lg-9"> Coffee Type</h1>
                <h1 class="form-header col-lg-3"># of Cups</h1>
            </div>

            <form action=/submit method=POST>
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <select name="cafftypes" id="cafftypes">
                            <option value="monsterultrasunrise">Monster Ultra Sunrise</option>
                            <option value="blackcoffee">Black Coffee</option>
                            <option value="americano">Americano</option>
                            <option value="sugarfreenos">Sugar Free NOS</option>
                            <option value="5hourenergy">5 Hour Engery</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <input class="input" type="text" id="monsterultra" name="numofcups"><br><br>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="button" type="submit" value="Submit">Calculate Caffeine</button>
                </div>

            </form>
            <br>
            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</body>

</html>