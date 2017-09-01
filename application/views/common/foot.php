
<footer>
    <div class="wrap">
        <!-- <ul class="ft-social">
            <li>
                <img src="http://static.vietlott.vn/media/images/ft-pattern.png?v=2.8" alt="">
            </li>
            <li>
                <a href="https://www.facebook.com/C%C3%B4ng-ty-X%E1%BB%95-s%E1%BB%91-%C4%91i%E1%BB%87n-to%C3%A1n-Vi%E1%BB%87t-Nam-Vietlott-351876888274703/">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://plus.google.com/115042463936591410646/posts">
                    <i class="icon-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/user/Vietlott">
                    <i class="icon-youtube"></i>
                </a>
            </li>
            <li>
                <img src="http://static.vietlott.vn/media/images/ft-pattern.png?v=2.8" alt="">
            </li>
        </ul> -->
        <div class="ft-link-box">
            <div class="ft-link"><a href="#"><?php echo lang('nav_home');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_play');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_win');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_responsibility');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_news');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_about');?></a></div>
            <div class="ft-link"><a href="#"><?php echo lang('nav_sitemap');?></a></div>
        </div>
        <div class="porn-label">
            <span><img src="/public/img/porn-label.png" alt="Game dành cho người trên 8 tuổi"></span>
            <span><img src="/public/img/alpha.png" alt=""></span>
            <span><img src="/public/img/porn-label-3.png" alt=""></span>
        </div>
        <div class="ft-copyright">
            <?php echo lang('copyright_com_name');?><br>
            <?php echo lang('com_address');?>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<?php
if (isset($_JS)) {
    foreach($_JS as $js) {
        echo '<script src="/public/js/', $js, '"></script>';
    }
}
?>

</body>
</html>