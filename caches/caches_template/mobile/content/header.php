<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
	<link rel="stylesheet" href="<?php echo APP_PATH;?>/statics/mobile/layui/css/layui.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="">
	<style type="text/css">
		html,body{ padding-top:55px; width:100%; height:100%; position:absolute; left:0; top:0; overflow:hidden; overflow-y:auto; }
		*{ list-style:none; marign:0; padding:0;}
		a{ text-decoration: none; }
		.blockTextLink{ text-align:left; }
		.active-team{ width:100%; }
		.active-team div{ float:left; width:18%; margin:0 auto; margin-left:1.5%; height:65%; margin-top:10px; border-radius:5px; max-width:80px; }
		.active-team div img{ width:100%; height:100%; }
		.hospital-team{ height:10vh; }
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<li role="resentaion" class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="caret glyphicon glyphicon-align-justify"></span>
			</a>
			<ul class="dropdown-menu">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc121ce9a817ee2216bfb2f4badd7ad7&action=category&siteid=%24siteid&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
							<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
						</li>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</li>
	</div>
</nav>