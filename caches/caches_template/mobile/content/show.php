<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "header"); ?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e519b6687af1da7d40d068d84a82bf17&action=lists&catid=%24catid&moreinfo=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'20',));}?>
        <div class="container">
            <h3><?php echo $data[$_GET['id']]['keywords'];?></h3>
            <p>发布时间: <?php echo date('Y-m-d', $data[$_GET[id]][updatetime]);?></p>
            <hr class="layui-bg-blue">
            <p>
                <?php echo $data[$_GET['id']]['content'];?>
            </p>
        </div>
<?php $getId = $_GET['id']; ?>
        <div class="container">
            <hr class="layui-bg-blue">
        </div>
    <p style="text-align:center;">
        <a href="<?php echo $previous_page['url'];?>">上一篇: <?php echo $previous_page['title'];?></a><a href="<?php echo $next_page['url'];?>">下一篇：<?php echo $next_page['title'];?></a>
    </p>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php include template("content", "footer"); ?>