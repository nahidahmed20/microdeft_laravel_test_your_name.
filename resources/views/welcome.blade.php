<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="cart">
                <div class="card-body col-md-12">
                    <form action="{{route('index')}}" method="post" >
                        @csrf
                        <input class="col-md-3" type="text" name="title" required placeholder="title">
                        <input class="col-md-3" type="text" name="description" required placeholder="Description">
                        <input class="col-md-3" type="number" name="start_time" required placeholder="Start Time">
                        <input class="col-md-3" type="number" name="end_time" required placeholder="End Time">
                        <br>

                        <input type="checkbox" id="developer_one" name="developer_one" value="Developer One">
                        <label > Developer One</label><br>
                        <input type="checkbox" id="developer_two" name="developer_two" value="Developer Two">
                        <label > Developer Two</label><br>
                        <input type="checkbox" id="developer_three" name="developer_three" value="Developer Three">
                        <label > Developer Three</label><br>
                        <input type="checkbox" id="developer_four" name="developer_four" value="Developer Four">
                        <label > Developer Four</label><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
