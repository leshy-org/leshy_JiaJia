<?php
/*
Template Name: Guestbook
*/
?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<div id="mapsite">当前位置： <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; 留言</div>
<div class="left left_page">
<div class="article article_page">
<h2>灌水先锋队</h2>
<div class="v_comment"><ul>
			<?php
				$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 56";
				$wall = $wpdb->get_results($query);
				foreach ($wall as $comment)
				{
					if( $comment->comment_author_url )
					$url = $comment->comment_author_url;
					else $url="#";
					$r="rel='external nofollow'";
					$tmp = "<a href='".$url."' '".$r."' title='".$comment->comment_author." (留下".$comment->cnt."个脚印)'>".get_avatar($comment->comment_author_email, 40)."</a>";
					$output .= $tmp;
				}
				echo $output ;
			?></ul>
</div>
<div class="clear"></div>
<p class="articles_all">欢迎大家多多灌水，有访必回！</p>
</div></div>

<div class="articles article_page">
<?php comments_template(); ?>
</div>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>