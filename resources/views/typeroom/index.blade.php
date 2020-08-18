<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typeroom</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/typeroom/index.css">

</head>

<body>
    <div class="page">
        @include ("partials.sidenav")
        <div class="content">
            <h1 style="text-align:center">Quản lý các loại phòng</h1>
            <hr>
            <div>
                <br>
                <table cellpadding="0" ; cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Diện tích</th>
                            <th>Hình ảnh</th>
                            <th>Diện tích</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Số lượng người</th>
                            <th colspan="2">
                                <form action="/admin/typeroom/add">
                                    <button>Add</button>
                                </form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($typerooms as $typeroom)
                        <tr>
                            <td>{{$typeroom->id}}</td>
                            <td>{{$typeroom->name}}</td>
                            <td><img src="/storage/{{$typeroom->image}}" alt="" style="width:100px;height:100px"></td>
                            <td>{{$typeroom->area}}</td>
                            <td>{{$typeroom->price_per_day}}</td>
                            <td>{{$typeroom->description}}</td>
                            <td>{{$typeroom->max_person}}</td>
                            <td>
                                <form action="/admin/typeroom/delete/{{$typeroom->id}}" method="POST" role="form">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="delete">
                                        <img src="/storage/public/remove.PNG" alt="" style="width:20px;height:20px">
                            </td>
                            </button>
                            </form>
                            </td>
                            <td>
                                <form action="/admin/typeroom/edit/{{$typeroom->id}}" method="get">
                                    <button class="edit">
                                        <img src="/storage/public/edit.PNG" alt="" style="width:20px;height:20px">
                            </td>
                            </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- <div id="create" style="display:none">
                <br>
                <hr>
                <form action="/admin/typeroom" method="POST" role="form">
                    @csrf
                    <h3>Thêm loại phòng</h5>
                        <table cellpadding="0" ; cellspacing="0" name="add_typeroom">
                            <tr>
                                <td>Tên loại</td>
                                <td><input type="text" name="typeroom"></td>
                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td><input type="file" name="img"></td>
                            </tr>
                            <tr>
                                <td>Diện tích</td>
                                <td><input type="text" name="area"></td>
                            </tr>
                            <tr>
                                <td>Giá</td>
                                <td><input type="text" name="price"></td>
                            </tr>
                            <tr>
                                <td>Mô tả</td>
                                <td> <textarea name="description" id="" cols="30" rows="10" value=""></textarea></td>
                            </tr>
                            <tr>
                                <td>Số lượng người</td>
                                <td><input type="text" name="person"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit"> Thêm</button>
                                </td>
                            </tr>
                        </table>
                </form>
            </div>
            <script language="javascript">
            document.getElementById("add").onclick = function() {
                document.getElementById("create").style.display = 'block';
            }; -->
            </script>
        </div>
    </div>

    <script src="/js/dashboard.js"></script>
</body>

</html>
