<?php

$themename = "Weisay Simple";
$shortname = "swt";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
//Stylesheets Reader
$alt_stylesheet_path = TEMPLATEPATH . '/css/';
$alt_stylesheets = array();
$alt_stylesheets[] = '';

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (
	array(  "name" => $themename." Options",
      		"type" => "title"),

//选择颜色风格
    array( "name" => "选择颜色风格",
           "type" => "section"),
    array( "type" => "open"),

	array(	"name" => "选择颜色风格",
			"desc" => "还有5种主题风格供选择",
			"id" => $shortname."_alt_stylesheet",
			"std" => "Select a CSS skin:",
			"type" => "select",
			"options" => $alt_stylesheets,
			"default_option_value" => "默认风格"),

//各功能模块控制
    array(  "type" => "close"),
    array(  "name" => "综合功能开关设置",
            "type" => "section"),
    array(  "type" => "open"),

	array(  "name" => "是否显示Logo图片",
			"desc" => "默认不显示",
            "id" => $shortname."_logo",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
			
	array(  "name" => "是否显示缩略图",
			"desc" => "默认不显示",
            "id" => $shortname."_thumbnail",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(  "name" => "是否显示文章截图型缩略图",
			"desc" => "默认不显示（开启前确认“是否显示缩略图”已开启）",
            "id" => $shortname."_articlepic",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
            
    array(  "name" => "是否显示顶部独立页面链接",
			"desc" => "默认显示",
            "id" => $shortname."_toppage",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示表情",
			"desc" => "默认不显示",
            "id" => $shortname."_smiley",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),
			
	array(  "name" => "是否显示侧边读者墙",
			"desc" => "默认显示",
            "id" => $shortname."_wallreaders",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

//SEO设置
    array(  "type" => "close"),
	array(  "name" => "网站SEO设置(必填)",
			"type" => "section"),
	array(  "type" => "open"),

	array(	"name" => "描述（Description）",
			"desc" => "",
			"id" => $shortname."_description",
			"type" => "textarea",
            "std" => "输入你的网站描述，一般不超过200个字符"),

	array(	"name" => "关键词（KeyWords）",
            "desc" => "",
            "id" => $shortname."_keywords",
            "type" => "textarea",
            "std" => "输入你的网站关键字，一般不超过100个字符"),

//博客统计及链接设置
    array(  "type" => "close"),
	array(  "name" => "侧边栏博客统计及链接设置(必填)",
			"type" => "section"),
	array(  "type" => "open"),

	array(	"name" => "用户名",
			"desc" => "",
			"id" => $shortname."_user",
            "type" => "textarea",
            "std" => ""),

	array(	"name" => "建站日期",
            "desc" => "",
            "id" => $shortname."_builddate",
            "type" => "textarea",
            "std" => "2007-04-22"),

	array(	"name" => "首页展示友情链接",
            "desc" => "",
            "id" => $shortname."_links",
            "type" => "textarea",
            "std" => ""),

//网站统计、备案号
    array(  "type" => "close"),
	array(  "name" => "网站统计代码及备案号设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "是否显示网站统计",
			"desc" => "默认不显示",
            "id" => $shortname."_tj",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

    array(  "name" => "输入你的网站统计代码",
            "desc" => "",
            "id" => $shortname."_tjcode",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "是否显示备案号",
			"desc" => "默认不显示",
            "id" => $shortname."_beian",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(  "name" => "输入您的备案号",
			"desc" => "",
            "id" => $shortname."_beianhao",
            "type" => "textarea",
            "std" => "沪ICP备20150201号"),

//微博以及订阅设置
    array(  "type" => "close"),
	array(  "name" => "微博以及订阅设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "是否显示腾讯微博",
			"desc" => "默认不显示",
            "id" => $shortname."_tqq",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入腾讯微博地址",
            "desc" => "",
            "id" => $shortname."_tqqurl",
            "type" => "textarea",
            "std" => "http://t.qq.com/weisayok"),

	array(  "name" => "是否显示新浪微博",
			"desc" => "默认不显示",
            "id" => $shortname."_tsina",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入新浪微博地址",
            "desc" => "",
            "id" => $shortname."_tsinaurl",
            "type" => "textarea",
            "std" => "http://weibo.com/weisay"),
	
	array(  "name" => "是否显示用QQ邮箱订阅博客",
			"desc" => "默认不显示",
            "id" => $shortname."_mailqq",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

//广告设置
    array(  "type" => "close"),
	array(  "name" => "博客广告设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "是否显示侧边栏广告",
			"desc" => "默认不显示",
            "id" => $shortname."_ada",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入侧边栏广告代码(250*250)",
            "desc" => "",
            "id" => $shortname."_adacode",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "是否显示文章右侧广告",
			"desc" => "默认不显示",
            "id" => $shortname."_adb",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入文章右侧广告代码(250*250)",
            "desc" => "",
            "id" => $shortname."_adbcode",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "是否显示文章底部广告",
			"desc" => "默认不显示",
            "id" => $shortname."_adc",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入文章底部广告代码(宽度需小于620)",
            "desc" => "",
            "id" => $shortname."_adccode",
            "type" => "textarea",
            "std" => ""),
			
	array(	"type" => "close") 
);



function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=theme_options.php&saved=true");
die;
}
else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=theme_options.php&reset=true");
die;
}
}
add_theme_page($themename." Options", "当前主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/options/options.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/options/rm_script.js", false, "1.0");
}
function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题设置已保存</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题已重新设置</strong></p></div>';
?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/version.php"></script>
<script type="text/javascript">
var _version = '<?php $theme_data = get_theme_data(dirname(__FILE__) . '/../style.css');echo $theme_data['Version'];?>';
jQuery(document).ready(function(){
	jQuery("span.version_number").text(weisaytheme_latest_version);
	jQuery("a.downloand_add").attr("href",downloand_add);
	jQuery("a.author_add").attr("href",author_add);
	if(_version < weisaytheme_latest_version ){
		jQuery(".version_tips").fadeIn(1000);
	}
	else {
		jQuery(".version_tips").hide();
	};
	jQuery(".close_version_tips").click(function(){
		jQuery(this).parent().fadeOut(1000);
	});
	jQuery(".fl_cbradio_op:checked").each(function() {
		jQuery(this).parent().parent().children().eq(3).show();
	});
	jQuery(".fl_cbradio_cl:checked").each(function() {
		jQuery(this).parent().parent().children().eq(3).hide();
	});
	jQuery(".fl_cbradio_cl").click(function(){
		jQuery(this).parent().parent().children().eq(3).slideUp();
	});
	jQuery(".fl_cbradio_op").click(function(){
		jQuery(this).parent().parent().children().eq(3).slideDown();
	});
   jQuery(".theme_options_content > div:not(:first)").hide();
   jQuery(".theme_options_tab li").each(function(index){
       jQuery(this).click(
	   	  function(){
			  jQuery(".theme_options_tab li.current").removeClass("current");
			  jQuery(this).addClass("current");
			  jQuery(".theme_options_content > div:visible").hide();
			  jQuery(".theme_options_content > div:eq(" + index + ")").show();
	  })
   })
});
</script>
<div id="theme_options">
<div class="update-nag version_tips"><span class="vright close_version_tips"> 点击关闭</span>Weisay Simple 主题新版本 <span class="version_number"></span> 可用。<a href="" class="downloand_add" target="_blank">点击这里</a> 下载最新版本 或 <a href="" class="author_add" target="_blank">访问此主题更新页面</a>。</div><div class="clearfix"></div>
<div class=" wrap rm_wrap">
<h2><?php echo $themename; ?> 设置</h2>
    <p>当前使用主题: <?php echo $themename; ?> <?php echo $theme_data['Version']; ?> 版 | 设计者:<a href="http://www.weisay.com" target="_blank"> 威言威语</a> | <a href="http://www.weisay.com/blog/wordpress-theme-weisay-simple.html" target="_blank">查看主题使用及更新</a></p>
<div class="rm_opts">
<form method="post"> 
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
?>
<?php break;
case "close":
?>
</div>
</div>
<?php break;
case "title":
?>
<?php break;
case 'text':
?>
<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'textarea':
?>
<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'select':
?>
<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option value="<?php echo $option;?>" <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>>
		<?php
		if ((empty($option) || $option == '' ) && isset($value['default_option_value'])) {
			echo $value['default_option_value'];
		} else {
			echo $option; 
		}?>
		
		</option><?php } ?>
</select>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
case "checkbox":
?>
<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":
$i++;
?>
<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/includes/options/clear.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" class="button-primary"/>
</span><div class="clearfix"></div></div>
<div class="rm_options">
<?php break;
}
}
?>
<br />
<span class="submit"><input type="submit" value="保存全部设置" class="button-primary" id="newmeta-submit" name="save<?php echo $i; ?>"></span>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="恢复默认设置" class="button"/> <font color=#ff0000>提示：此按钮将恢复主题初始状态，您的所有设置将消失！</font>
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div>
 </div>
 <div id="theme_help">
	<h1>主题使用帮助</h1>
	<div id="help_article">
		<h2 class="bg2">主题相关文章</h2>	
        <ol>
        <li><a href="http://www.weisay.com/blog/wordpress-theme-weisay-simple.html" target="_blank">Weisay Simple主题使用必看教程<font style="font-size:18px;"color=#ff0000><strong>&hearts;&hearts;&hearts;</strong></font></a></li>
        <li><a href="http://www.weisay.com/blog/wordpress-featured-image-and-thumbnail.html" target="_blank">Weisay Simple特色图像功能使用教程<font style="font-size:18px;"color=#ff0000><strong>&hearts;</strong></font></a></li>
        <li><a href="http://www.weisay.com/blog/wordpress-article-excerpt.html" target="_blank">Weisay Simple主题首页摘要使用的方法<font style="font-size:18px;"color=#ff0000><strong>&hearts;</strong></font></a></li>
        <li><a href="http://www.weisay.com/blog/custom-wordpress-smiley-path.html" target="_blank">给Weisay Simple主题自定义表情路径的方法</a></li>
        <li><a href="http://www.weisay.com/blog/navigation-menu-add-icon.html" target="_blank">给Weisay Simple主题导航菜单前面加上个性小图标</a></li>
        <li><a href="http://www.weisay.com/blog/auto-highslide.html" target="_blank">WordPress图片插件推荐：Auto Highslide修改版</a></li>
			<a style="float:right;padding-top:5px;padding-right:10px;font-weight:700;" target="_blank" href='http://www.weisay.com/blog/'>更多内容>></a>
        </ol>
		<h2 class="bg3">捐助：</h2>
		<p>您的支持，是对威言威语最大的鼓励和肯定！<br />
		<strong>支付宝：<span class="mail">weisay@foxmail.com</span></strong></p>
			<form style="padding-bottom: 0;border:none;" method="post" action="https://shenghuo.alipay.com/send/payment/fill.htm" target="_blank">
				<input type="hidden" value="weisay@foxmail.com" name="optEmail">
				<input type="hidden" value="9.9" name="payAmount">
				<input type="hidden" name="title" placeholder="付款说明" value="Pay For weisay's theme">
				<input type="image" value="给我捐助" src="https://img.alipay.com/sys/personalprod/style/mc/btn-index.png" name="pay"> 
			</form>
	</div>
</div>
</div>
<?php
}
?>
<?php
function mytheme_wp_head() { 
	$stylesheet = get_option('swt_alt_stylesheet');
	if($stylesheet != ''){?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/<?php echo $stylesheet; ?>?ver=2.1" />
<?php }
}
add_action('wp_head', 'mytheme_wp_head');
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>