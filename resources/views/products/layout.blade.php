<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 - CRUD - alexisrv</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/3a4987f73a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand">
      Laravel 8 CRUD
    </a>
  </nav>

  <script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  </script>

  <div class="container">
      @yield('content')
  </div>

  <nav class="navbar navbar-dark bg-primary fixed-bottom" role="navigation">
      <div class="container text-center">
        <a class="navbar-text col-md-12 col-sm-12 col-xs-12 text-white" href="https://github.com/alexisrv">© 2020 alexisrv</a>
      </div>
  </nav>

</body>
</html>
