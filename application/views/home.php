<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$_CSS = [
    'jquery.countdown.css',
    'home.css'
];
require('common/head.php');
?>

<div class="main-banner">
    <div id="carouselHeaderIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselHeaderIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHeaderIndicators" data-slide-to="1"></li>
            <li data-target="#carouselHeaderIndicators" data-slide-to="2"></li>
            <li data-target="#carouselHeaderIndicators" data-slide-to="3"></li>
            <li data-target="#carouselHeaderIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="/public/img/hs1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/public/img/hs2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/public/img/hs3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/public/img/hs4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/public/img/hs5.jpg" alt="Fifth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselHeaderIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHeaderIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="main">
    <div class="game-box">
        <div class="game-box-bg">
            <div class="wrap clearfix">
                <div class="game-result">

                    <ul class="nav nav-tabs" id="homeTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mega645 active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Mega 6/45</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link max4d disabled" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Max 4D</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mega655 disabled" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Power 6/55</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="game-wrap">
                                <div class="jackpot-win">
                                    <span>Estimated Jackpot Mega 6/45, draw date 25/08/2017</span>
                                    <h2>
                                        14.430.230.000
                                        <sup class="value-money">đ</sup>
                                    </h2>
                                </div>
                                <div class="countdown-box">
                                    <div class="title">
                                        <span>Countdown :</span>
                                    </div>
                                    <div class="countdown">
                                        <div id="countdown645" class="countdownHolder"></div>                                    
                                    </div>
                                </div>
                                <div id="result_livestreaming" class="clear">
                                    <div class="col-sm-12 lotto-result">
                                        <h4>Winning Results Mega 6/45</h4>
                                        <div id="result-games">
                                            <div class="box-result-detail">
                                                <p class="time-result">Draw No. #00171 | Draw Date 23/08/2017</p>
                                                <p class="time-result">Quay thưởng trực tuyến trên Vietloot vào tất cả các ngày trong tuần</p>
                                                <ul class="result-number">
                                                    <li class="arrow-result">
                                                        <a href="javascript:void(0)" onclick=" return prevNextResultGameMega645(this, 0) " data-gameid="3" data-drawid="171" data-dayprize="8/23/2017 12:00:00 AM">
                                                            <i class="glyphicon glyphicon-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li>06</li>
                                                    <li>25</li>
                                                    <li>27</li>
                                                    <li>34</li>
                                                    <li>42</li>
                                                    <li>43</li>
                                                    <li class="arrow-result">
                                                        <a href="javascript:void(0)" onclick=" return prevNextResultGameMega645(this, 1) " data-gameid="3" data-drawid="171" data-dayprize="8/23/2017 12:00:00 AM">
                                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="time-result" style="margin-top: 10px;">Selected numbers must match winning numbers drawn, but can be in any order</p>
                                            </div>

                                            <div class="result clearfix table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center">Jackpot amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="red" style="font-weight: bold; text-align: center">14.430.230.000 <sup>đ</sup></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Prize</th>
                                                            <th>Matching</th>
                                                            <th style="text-align: right">Number of prize</th>
                                                            <th style="text-align: right">Prize amount (đ)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jackpot</td>
                                                            <td class="circle-num">
                                                                <i></i><i></i><i></i><i></i><i></i><i></i>
                                                            </td>
                                                            <td style="text-align: right">0</td>
                                                            <td style="text-align: right">
                                                                <b>14.430.230.000</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1st Prize</td>
                                                            <td class="circle-num">
                                                                <i></i><i></i><i></i><i></i><i></i>
                                                            </td>
                                                            <td style="text-align: right">39</td>
                                                            <td style="text-align: right">
                                                                <b>10.000.000</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2nd Prize</td>
                                                            <td class="circle-num">
                                                                <i></i><i></i><i></i><i></i>
                                                            </td>
                                                            <td style="text-align: right">1571</td>
                                                            <td style="text-align: right">
                                                                <b>300.000</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3rd Prize</td>
                                                            <td class="circle-num">
                                                                <i></i><i></i><i></i>
                                                            </td>
                                                            <td style="text-align: right">24680</td>
                                                            <td style="text-align: right">
                                                                <b>30.000</b>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="more">
                                                <!-- <a class="btn-pdf pdf_mega645_download" href="#dlpdf" onclick="downloadFilePdfMega(this)" data-toggle="modal" data-id="5278" data-gameid="3" data-drawid="00171">
                                                    <i class="ico-pdf"><img src="http://vietloot.vn/media/images/LogoPDF.png?v=2.8" alt="" width="30"></i>
                                                    &nbsp; In kết quả
                                                </a> -->
                                                <a class="btn btn-link" href="/en/trung-thuong/ket-qua-trung-thuong/mega-6-45/winning-numbers/">
                                                    See past draws
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <br/>
                                        <p class="role-result">
                                            <span>Currently, Vietlott only authorized providing draw result notifications through SMS via the following phone numbers: 9141, 9939, 9911, 8179, 8130, 997, 8193. Vietlott is not responsible for the accuracy of draw result provided by phone numbers which are not listed above.</span>
                                        </p>
                                        <p class="role-result">
                                            <span>The prize claim period of winning ticket is 60 (sixty) days since the date of identifying lottery result. Out of this period, winning tickets shall not be valid for claim.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="game-jackpot">
                                <div class="row-ct-1 clearfix">
                                    <i class="ribbon">Agents</i>
                                    <div class="pull-right">
                                        <a class="btn-red" href="/en/dai-ly/dai-ly/dieu-kien-tro-thanh-dai-ly/">See more</a>
                                    </div>
                                    <div class="pull-left">Requirement to become agents of Vietlott? </div>
                                </div>
                                <div class="row-ct-4">
                                    <a href="/en/choi/power-6-55/cach-choi/">
                                        <img src="/public/img/Banner_Power_655_en.png" />
                                    </a>
                                </div>
                                <div class="row-ct-4">
                                    <a href="/en/tin-tuc/khuyen-cao-khach-hang/">
                                        <img src="/public/img/banner_warning_en.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <h1>Coming soon...</h1>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            <h1>Coming soon...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
    <div class="news-recently">
        <h3>News</h3>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="news-detail">
                    <span class="time">16/10/2016</span>
                    <!-- <span class="topic">
                        <a href="/en/tin-tuc/news-winners/"> Winning news </a>
                    </span> -->
                    <div class="thumb">
                        <a href="/en/tin-tuc/news-winners/2773-jackpot-winner-has-shown-up-----/">
                            <img src="http://static.vietlott.vn/uploads/Images/JACKPOT/FullSizeRender.jpg.230.0.cache">
                        </a>
                    </div>
                    <h4>
                        <a href="/en/tin-tuc/news-winners/2773-jackpot-winner-has-shown-up-----/"> JACKPOT WINNER HAS SHOWN UP!!!!! </a>
                    </h4>
                    <p> On draw dated 16/10/2016, Vietnam Lottery Company (Vietlott) has identified 01 winning ticket f... </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$_JS = [
    'jquery.countdown.js',
    'home.js'
];
require('common/foot.php');
?>