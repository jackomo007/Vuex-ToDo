<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo Vuex</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <style>
            .principal {
                    display: flex;
            }
            html, body {
                background-color: #fff;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-top{
                margin-top: 30%;
            }
            .s-top{
                margin-top: 10%;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            .m-r-md {
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <div id="app">
                    <div class="principal m-top">
                        <h3 class="m-r-md">O que eu preciso fazer hoje?</h3>
                        <button class="btn btn-primary btn-sm" @click="completeAll" v-show="! allCompleted">Complete tudo!</button>
                    </div>

                    <p>
                        <input class="form-control s-top" placeholder="Eu preciso fazer .." @keyup.enter="addToDo">
                    </p>
                    <todo v-for="(todo,index) in todos" :key="index" :todo="todo"></todo>
                </div>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
