<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="container">
    <hr class="layui-bg-blue">
</div>
<div class="container footer">
    <p>友情链接</p>
    <p>
        <a href="#">广元协和医院男科</a>
        <a href="#">广元协和医院妇科</a>
    </p>
</div>
<div class="container">
    <hr class="layui-bg-blue">
</div>

<div class="container">
    <div class="foot_info">
        <p style="font-size:13px; text-align:center; ">Copyright © <?php echo date('Y', time());?> Guangyuan Union Hospital. 广元协和医院 版权所有</p>
        <p style="font-size:13px; text-align:center; ">医院地址:广元市利州区东坝电子路中段56号  邮编:628040</p>
        <p style="font-size:13px; text-align:center; ">咨询热线:0839-5513677  传真:0839-5513677  email:service@gyxhyy.com</p>
        <p style="font-size:13px; text-align:center; ">前置批号:川卫网审[2016-096]号  ICP备案号:蜀ICP备10035726号-1</p>
        <p style="font-size:13px; text-align:center; "><img style="position:absolute;margin-left:15%;" src="http://app.gyxhyy.com/statics/images/ban.png" />川公网安备 51080202000181号</p>
    </div>
</div>

<script src="<?php echo APP_PATH;?>/statics/mobile/layui/layui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    layui.use(['carousel', 'form'], function () {
        var carousel = layui.carousel;
        var form = layui.form;
        carousel.render({
            elem: '#active1',
            arrow: 'arrow',
            indicator: 'none',
            interval: 2500,
            anim: 'updown',
            width: '100%',
        });
        carousel.render({
            elem:'#active2',
            arrow:'arrow',
            indicator:'none',
            interval: 2800,
            anim:'fade',
            width: '100%',
            height: '100%'
        });
    })
</script>
</body>
</html>