<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css">

</head>

<body>
    <div class="page">
    @include ("partials.sidenav")
    <div class="content">
       <h1 style="text-align:center">Dashboard</h1>
       <hr>
       <div class='link'>
           <div>
            <a href="/admin/room">Xem thông tin</a>
            </div>
           <div> <a href="/admin/room/insert">Thêm phòng</a></div>
       </div>
    </div>
    </div>

    <script src="/js/dashboard.js"></script>
</body>

</html>
