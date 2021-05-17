@extends('template')

@section('content')
<p class="h3">Dorment Tracker</p>
<p>
    　　由於中央大學的宿舍有3GB的上傳限流，而我本身又曾數次不小心超用而受到限制，
    於是我使用 tkinter 和 BeautifulSoup4 製作了一個功能簡單的流向追蹤程式，
    透過輸入 IP 可以定時的去爬宿網系統的當前流量資料，並顯示給使用者，且我在使用該程式後，
    就從來沒有超用的情形，實用度可見一斑。
</p>
@endsection