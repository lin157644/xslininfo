@extends('template')

@section('content')
<p class="h3">LNMP</p>
<p>
    　　我於Raspberry Pi 4上建立基於LNMP(Laravel Nginx MariaDB PHP) 開放原始碼框架的網頁伺服器
    ，並透過Cloudflare進行DNS代管，及Let’s encrypt取得SSL憑證，提供了個人的簡歷與作品的連結
    ，透過Database實現了簡易的開發日誌的功能，前端則是使用Bootstrap實現，這項Project也令我更加熟悉Linux環境與網路架構。
</p>
@endsection