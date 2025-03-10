<html>
    <head> 
    </head>
    <body> 
        <h2> NHẬP THỂ LOẠI</h2> 
        <form action="{{url('/qlsach/luutheloai')}}" method="post"> 
        <table> 
            <tr> 
                <td>ID</td> 
                <td>Tên thể loại</td> 
            </tr> 
            <tr> 
                <td><input type="text" size="5" name = "id[]"></td> 
                <td><input type="text" name "ten_the_loai[]"></td> 
            </tr> 
            <tr> 
                td><input type="text" size="5" name="id[]"></td> 
                <td><input type="text" name "ten_the_loai[]"></td> 
            </tr> 
            <tr> 
                <td colspan="2" align="center"> 
                    <input type="submit" value="Luu" name="submit"> 
                </td>  
            </tr> 
        </table> 
        {{ csrf_field() 
        </form>
    </body> 
<html>
