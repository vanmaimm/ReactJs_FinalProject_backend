<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/room/index.css">

</head>

<body>
    <div class="page">
        @include ("partials.sidenav")
        <div class="content">
            <h1 style="text-align:center">Quản lý phòng</h1>
            <hr>
            <div class="module-body table">
                <br>
                <table cellpadding="0"; cellspacing="0" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Số phòng</th>
                            <th>Hình ảnh </th>
                            <th>Loại phòng</th>
                            <th>Diện tích</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Số lượng người</th>
                            <th colspan="2">.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td >{{$room->id}}</td>
                            <td>{{$room->room_number}}</td>
                            <td><img src="/storage/{{$room->image}}" alt="" style="width:100px;height:100px"></td>
                            <td>{{$room->typerooms->name}}</td>
                            <td>{{$room->area}}</td>
                            <td>{{$room->price_per_day}}</td>
                            <td>{{$room->description}}</td>
                            <td>{{$room->max_person}}</td>
                            <td>
                                <form action="/admin/room/edit/{{$room->id}}" method="get">
                                    <button class="edit">
                                    <img src="/storage/public/edit.PNG" alt="" style="width:20px;height:20px"></td>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="/admin/room/delete/{{$room->id}}" method="POST" role="form">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="delete">
                                    <img src="/storage/public/remove.PNG" alt="" style="width:20px;height:20px"></td>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display: flex;justify-content: space-between;">

                    <a class="btn btn-success" href="/admin/room/?page={{$page-1}}">Previous</a>
                    <a class="btn btn-success" href="/admin/room/?page={{$page+1}}">Next</a>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/dashboard.js"></script>
</body>

</html>
