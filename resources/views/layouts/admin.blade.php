<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu Kopi</title>
    @livewireStyles
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
<body>
<div class="container">
    <div style="margin-top: 50px">
        <div class="row">
            <div class="col-md-2">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-list-ul"></i> MAIN MENU</h5>
                        <hr>
                        <ul class="list-group">
                            <a style="text-decoration: none;" href="/adminDashboard"><li class="list-group-item"> Dashboard</li></a>
                            <a style="text-decoration: none;" href="/adminDataBarang"><li class="list-group-item"> Data Barang</li></a>
                            <a style="text-decoration: none;" href="/adminInvoice"><li class="list-group-item"> Invoice</li></a>
                            <br>
                            <a style="text-decoration: none;" href=""><li class="list-group-item active">LOGOUT </li></a>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        @yield('admin')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>