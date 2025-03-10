<form action="{{ url('save') }}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <th>ID</th>
                <th>Tên thể loại</th>
            </tr>
            <tr>
                <td><input type="text" name="id" required></td>
                <td><input type="text" name="ten_the_loai" required></td>
            </tr>
        </table>
        <button type="submit">Lưu</button>
    </form>
