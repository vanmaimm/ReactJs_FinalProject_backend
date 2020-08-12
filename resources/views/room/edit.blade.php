<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room-Edit</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/room/edit.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="page">
        @include ("partials.sidenav")
        <div class="content">
            <h1 style="text-align:center">Chỉnh sửa thông tin phòng</h1>
            <hr>
            <div class="form-edit">
            <form action="/admin/room/edit/{{$room->id}}" method="POST" class="form-horizontal" role="form"
                enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <table>
                    <tr>
                        <td>Số phòng</td>
                        <td><input type="text" name="room_number" value="{{$room->room_number}}"></td>
                    </tr>
                    <tr>
                        <td>Loại phòng</td>
                        <td><select class="control" name="typeroom">
                                <option value="">Chọn loại</option>
                                @foreach($typerooms as $typeroom)
                                @if ($typeroom->id==$room->typeroom)
                                <option value="{{$typeroom->id}}" selected>{{$typeroom->name}}</option>
                                @else
                                <option value="{{$typeroom->id}}">{{$typeroom->name}}</option>
                                @endif
                                @endforeach
                            </select></td>
                    </tr>

                    <tr>
                        <td colspan=2><button>Edit</button></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
