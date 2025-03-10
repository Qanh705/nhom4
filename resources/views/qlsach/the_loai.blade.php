<html>
    <head>

    </head>
    <body>
    <table border="1">
            <tr>
                <td>Mã thể loại</td>
                <td>Tên thể loại</td>
            </tr>
            @foreach($the_loai_sach as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->ten_the_loai}}</td>
            </tr>
            @endforeach
        </table>  
    </body>
</html>