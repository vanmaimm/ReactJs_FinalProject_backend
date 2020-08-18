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
            <h1 style="text-align:center">Thêm loại phòng</h1>
            <hr>
            <div id="create">
                <br>
                <form action="/admin/typeroom" method="POST" role="form" enctype="multipart/form-data">
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
        </div>
    </div>

    <script src="/js/dashboard.js"></script>
</body>

</html>
