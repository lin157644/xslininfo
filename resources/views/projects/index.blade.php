@extends('template')

@section('styles')
@endsection

@section('content')
<div id="projectsIndex">
    <div class="container-fluid">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>OuObot</h2>
                <p>OuOBot是一個基於Python與Discord.py套件的Discord機器人，支援少見的SlashCommands、音樂播放功能。</p>
                <a href="{{ route('projects.discordbot') }}">詳細內容</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Dormnet Tracker</h2>
                <p>因為作者住在中央大學宿舍的時光中，宿網因超量被限用多次搞到焦頭爛額，因而做出的快速用量查詢程式，拜託不要再鎖我宿網了QQ</p>
                <a href="{{ route('projects.dormnet') }}">詳細內容</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>LNMP Practice</h2>
                <p>本網站是使用LNMP開源架構，運行在RaspberryPi4上的個人網站。
                </p>
                <a href="{{ route('projects.lnmp') }}">詳細內容</a>
            </div>
        </div>
    </div>
</div>
@endsection