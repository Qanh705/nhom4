@extends("layouts.sach_layout")
@section("title","Sách")
@section("content")
<div class='list-book'>
@foreach($data as $row)
<div class='book'>
<img src="{{asset('book_image/'.$row->file_anh_bia)}}" width='200px'
height='200px'><br>
<b>{{$row->tieu_de}}</b><br/>
<i>{{number_format($row->gia_ban,0,",",".")}}đ</i>
</div>
@endforeach
</div>
@endsection