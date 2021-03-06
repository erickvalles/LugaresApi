<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Guía de viajes
                </div>

                <div class="row">
                    @if(!@empty('message'))
                        <div class="alert alert-success">
                            Se ha agregado con exito
                        </div>
                        @endif
                </div>

                <div class="form-group">
                    <form action="{{route('lugares.store')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('post')}}
                        <div class="row">

                            <div class="col-lg-12">

                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre lugar">


                                    <input type="text" name="foto" id="foto" placeholder="foto lugar (URL)">


                                    <input type="text" name="descripcion" id="descripcion" placeholder="Descripción lugar">


                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Guardar lugar" class="btn btn-info">
                            </div>

                        </div>

                    </form>
                </div>


                <div class="row">

                    <table class="table-bordered" width="100%">
                        <th>Route</th>
                        <th>Description</th>
                        <tr><td><a target="_blank" href="{{route('lugares.index')}}">api/lugares</a></td><td>The list of all the stored places in the site</td></tr>
                        <tr><td><a target="_blank" href="{{route('lugares.show',['lugare'=>'1'])}}">api/lugares/{id}</a></td><td>Show single stored place.</td></tr>
                    </table>

                </div>
            </div>
        </div>
    </body>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
