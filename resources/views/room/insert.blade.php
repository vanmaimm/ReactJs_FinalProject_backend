<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room-add</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/room/edit.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="page">
        @include ("partials.sidenav")
        <div class="content">
            <h1 style="text-align:center">Thêm phòng</h1>
            <hr>
            <div class="form-edit">
            <form action="/admin/room" method="POST" class="form-horizontal" role="form"
                enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>Số phòng</td>
                        <td><input type="text" name="room_number" ></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="file" name="img" ></td>
                    </tr>
                    <tr>
                        <td>Loại phòng</td>
                        <td><select class="control" name="typeroom">
                                <option value="">Chọn loại</option>
                                @foreach($typerooms as $typeroom)
                                <option value="{{$typeroom->id}}" selected>{{$typeroom->name}}</option>
                                @endforeach
                            </select></td>
                    </tr>
                    <tr>
                        <td>Diện tích</td>
                        <td><input type="text" name="area"  ></td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td><input type="text" name="price"  ></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td> <textarea name="description" id="" cols="30" rows="10" value=""></textarea></td>
                    </tr>
                    <tr>
                        <td>Số lượng người</td>
                        <td><input type="text" name="person" ></td>
                    </tr>
                    <tr>
                        <td colspan=2><button>Add</button></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
