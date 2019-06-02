<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "header"); ?>
<div class="container layui-carousel" id="active1" lay-filter="active2" style="max-width:600px;">
    <div carousel-item="">
        <div>
            条目1
        </div>
        <div>
            条目2
        </div>
        <div>
            条目3
        </div>
        <div>
            条目4
        </div>
        <div>
            条目5
        </div>
    </div>
</div>
<!-- 选项卡面板 -->
<div class="container" style="text-align:center;">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#bulletin" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-globe">院内新闻</span></a></li>
        <li><a href="#rule" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-expand">媒体聚焦</span></a></li>
        <li><a href="#forum" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-bullhorn">本院公告</span></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="bulletin">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7589aa863abf94b32e501b58c2597ec6&action=lists&catid=9&order=listorder+DESC&num=8&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder DESC','limit'=>'8',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li class="blockTextLink">&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], '70', '...');?></a> <!-- <span class="time"><?php echo date('Y-m-d', $r[updatetime]);?></span> --></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="tab-pane fade" id="rule">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe383160d12e8ba081c5ef6a4a15816e&action=lists&catid=10&order=listorder+DESC&num=8&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder DESC','limit'=>'8',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li class="blockTextLink">&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], '70', '...');?></a> <!-- <span class="time"><?php echo date('Y-m-d', $r[updatetime]);?></span> --></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="tab-pane fade" id="forum">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=abec9839d9bd3d4678d9704a78cad7e4&action=lists&catid=11&order=listorder+DESC&num=8&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'listorder DESC','limit'=>'8',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li class="blockTextLink">&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], '70', '...');?></a> <!-- <span class="time"><?php echo date('Y-m-d', $r[updatetime]);?></span> --></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<div class="container">
    <hr class="layui-bg-blue">
</div>
<div class="container hospital-team">
<div class="layui-carousel" id="active2" lay-filter="active2">
    <div carousel-item="">
        <div class="active-team">
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/1.gif" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/4.gif" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/5.gif" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/6.jpg" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/7.jpg" alt="">
            </div>
        </div>
        <div class="active-team">
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/8.jpg" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/9.jpg" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/10.jpg" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/11.jpg" alt="">
            </div>
            <div>
                <img src="http://www.gyxhyy.com/statics/simple/images/12.jpg" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<?php include template("content", "footer"); ?>