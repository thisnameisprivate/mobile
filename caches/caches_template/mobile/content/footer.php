<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div style="color:red;">
    This is footer font .
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
        });
    })
</script>
</body>
</html>