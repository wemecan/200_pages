<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:98:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\public/../application/index\view\book\book_info.html";i:1584583926;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\header.html";i:1584580791;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\head_pc.html";i:1584582023;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_seach.html";i:1584582546;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_class.html";i:1584583776;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\footer.html";i:1584580738;}*/ ?>
<!--样式header-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/sanren.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/style.css"/>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/public.js" type="text/javascript" charset="utf-8"></script>
    <title><?php echo $site['name']; ?></title>
</head>
<body>
<title>图书详情</title>
<!--头部-->
<div class="hd1">
    <div class="wrap clearfix">
        <div class="fl hd1l">
            欢迎光临云图购网站&nbsp;&nbsp;请<a href="<?php echo url('user/login'); ?>">登录</a><i>丨</i><a href="<?php echo url('user/register'); ?>">注册</a>
        </div>
        <div class="fr hd1r">
            <span><a href="">商家后台</a></span>
            <span><a href="">买家后台</a></span>
            <span><a href="">帮助中心</a></span>
            <span>
					<a href="<?php echo url('wap/user/login'); ?>">手机端<i class="fa fa-caret-down ml5"></i></a>
					<div class="hdrewm">
						<img src="<?php echo INDEX_SITE_ROOT; ?>/images/ewm_03.jpg"/>
					</div>
				</span>
        </div>
    </div>
</div>



<div class="head">
	<div class="wrap clearfix">
		<!--图书搜索-->
		<div class="headt clearfix">
    <a href="<?php echo url('/'); ?>" class="logo fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/logo_03.png"/></a>
    <div class="fl scw clearfix">
        <div class="scw1 clearfix">
            <div class="fl clearfix scw1_l">
                <input class="fl scw1ipt_l" type="text" placeholder="请输入商品名字" name="" id="" value="" />
                <div class="fl scw1select posrelative">
                    <span class="scw1select_span"><em>搜索全部</em><i class="fa fa-caret-down ml5"></i></span>
                    <div class="scw1select_hide">
                        <span>搜索全部</span>
                        <span>书名</span>
                        <span>作者</span>
                        <span>出版社</span>
                        <span>ISBN</span>
                    </div>
                </div>
            </div>
            <input class="fl scw1ipt_r hoverop" type="submit" name="" id="" value="搜索" />
            <a href="" class="fl scwa">高级搜索</a>
        </div>
        <div class="scw2 ahover">
            热门搜索：	<a href="">宇宙超度指南</a><a href="">潜能者们</a><a href="">十八岁给我一个姑娘</a>
        </div>
    </div>
</div>

		<!--图书分类-->
		<div class="hdb clearfix">
    <div class="fl posrelative hdbl">
        <span class="hdblsp clearfix"><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/navs_03.png"/>图书分类<i class="fa fa-angle-down fr"></i></span>
        <div class="lnav <?php if(\think\Request::instance()->controller()=='Book'): ?> lnavlist <?php endif; ?>">
            <ul>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>文学</h4>
                        <div class="lnllw ahover">
                            <a href="">小说</a>
                            <a href="">青春文学</a>
                            <a href="">中国散文</a>
                            <a href="">外国散文</a>
                            <a href="">悬疑推理</a>
                            <a href="">文学理论</a>
                            <a href="">文学</a>
                            <a href="">世界理论</a>
                        </div>
                    </div>
                    <div class="lnlr ahover">
                        <div class="lnlrw clearfix">
                            <h4 class="fl">小说</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">青春文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">玄幻/科幻</a><i>丨</i>
                                <a href="">悬疑/惊悚</a><i>丨</i>
                                <a href="">叛逆/成长</a><i>丨</i>
                                <a href="">爆笑/无厘头</a><i>丨</i>
                                <a href="">校园</a><i>丨</i>
                                <a href="">港台青春文学</a><i>丨</i>
                                <a href="">外国青春文学</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>社科</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                            <a href="">古籍</a>
                            <a href="">管理</a>
                            <a href="">经济</a>
                            <a href="">成功励志</a>
                            <a href="">法律</a>
                            <a href="">语言文学</a>
                        </div>
                    </div>
                    <div class="lnlr ahover">
                        <div class="lnlrw clearfix">
                            <h4 class="fl">小说</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">青春文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">玄幻/科幻</a><i>丨</i>
                                <a href="">悬疑/惊悚</a><i>丨</i>
                                <a href="">叛逆/成长</a><i>丨</i>
                                <a href="">爆笑/无厘头</a><i>丨</i>
                                <a href="">校园</a><i>丨</i>
                                <a href="">港台青春文学</a><i>丨</i>
                                <a href="">外国青春文学</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>少儿</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                            <a href="">古籍</a>
                            <a href="">管理</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>艺术</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>生活</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>文教</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <a href="<?php echo url('/'); ?>" class="fl nava active">首页</a>
    <a href="<?php echo url('Book/book_list'); ?>" class="fl nava">新书推荐</a>
    <a href="<?php echo url('Book/book_list'); ?>" class="fl nava">特价图书</a>
    <a href="<?php echo url('Book/book_list'); ?>" class="fl nava">畅销书排行榜</a>
</div>
	</div>
</div>
	
	<div class="tjmd">
		<div class="bitit ahover">
			<div class="wrap">
				<a href="">云图购网</a> > <a href="">成功/励志</a> > <a href="">口才/演讲/辩论</a> > 说服力/说话技巧我一开口.就能说服所有人-马云说话之道
			</div>
		</div>
		<div class="wrap clearfix">
			<div class="bi1 mt_60 clearfix">
				<div class="fl bi1l">
					<div class="bi1limg posrelative">
						<img src="<?php echo INDEX_SITE_ROOT; ?>/images/bi1pic_03.jpg"/>
						<i class="zmico"></i>
					</div>
					<!--隐藏图片放大层-->
					<div class="bi1bg textcenter">
						<div class="distab w100 h100">
							<div class="tab_cell w100">
								<img src="<?php echo INDEX_SITE_ROOT; ?>/images/bi1pic_03.jpg"/>
							</div>
						</div>
					</div>
					<div class="bi1ltxt textcenter">
						<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/bi1ico1_03.png"/>分享（220人气）</a>
						<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/bi1ico2_03.png"/>收藏（668人气）</a>
					</div>
				</div>
				<div class="fr bi1r">
					<h4>我一开口.就能说服所有人-马云说话之道</h4>
					<p>作者：吴帝聪</p>
					<p>出版社：台海出版社</p>
					<p>出版时间：2015-01-01</p>
					<p>开本：16开&nbsp;&nbsp;&nbsp;页数：253</p>
					<p>读者评分：<i class="colorindex">5分</i>&nbsp;&nbsp;2条评论</p>
					<p class="jg">优惠价：<i class="colorindex bi1ri">¥23.5</i>&nbsp;&nbsp;&nbsp;&nbsp;定价: <em class="bi1rem">¥35.0</em></p>
					<p>本类榜单：成功/励志销量榜</p>
					<div class="bi1ra mt_15 clearfix">
						<a href="" class="fl active">立即购买</a>
						<a href="" class="fl">收藏</a>
						<div class="bi1ratxt fl">
							<span>温馨提醒：运费6元，满69元免运费</span>
							<span><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/wen_03.png"/>快递不能达地区使用邮政小包，运费14元起</span>
						</div>
					</div>
				</div>
			</div>
			<div class="bi2 mt_60 clearfix">
				<div class="fl bi2l">
					<div class="bi2lw">
						<h4 class="bi2lwtit">书友推荐</h4>
						<a href="" class="m1rwa disblock bi2la">
							<div class="m1rwaimg">
								<img src="<?php echo INDEX_SITE_ROOT; ?>/images/book_03.jpg">
							</div>
							<h4>说魂儿-扪虱谈鬼录之二</h4>
							<p>栾保群 著</p>
							<div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
						</a>
						<a href="" class="bi2la1 clearfix disblock">现代文言<i class="fa fa-angle-right fr"></i></a>
						<a href="" class="bi2la1 clearfix disblock">随风飘舞的塑料布<i class="fa fa-angle-right fr"></i></a>
						<a href="" class="bi2la1 clearfix disblock">戏年<i class="fa fa-angle-right fr"></i></a>
						<a href="" class="bi2la1 clearfix disblock">物什记<i class="fa fa-angle-right fr"></i></a>
					</div>
					<div class="bi2lw mt_25">
						<h4 class="bi2lwtit">本类畅销</h4>
						<a href="" class="m1rwa disblock bi2la">
							<div class="m1rwaimg">
								<img src="<?php echo INDEX_SITE_ROOT; ?>/images/book_03.jpg">
							</div>
							<h4>说魂儿-扪虱谈鬼录之二</h4>
							<p>栾保群 著</p>
							<div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
						</a>
						<a href="" class="m1rwa disblock bi2la">
							<div class="m1rwaimg">
								<img src="<?php echo INDEX_SITE_ROOT; ?>/images/book_03.jpg">
							</div>
							<h4>说魂儿-扪虱谈鬼录之二</h4>
							<p>栾保群 著</p>
							<div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
						</a>
						<a href="" class="m1rwa disblock bi2la">
							<div class="m1rwaimg">
								<img src="<?php echo INDEX_SITE_ROOT; ?>/images/book_03.jpg">
							</div>
							<h4>说魂儿-扪虱谈鬼录之二</h4>
							<p>栾保群 著</p>
							<div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
						</a>
					</div>
				</div>
				<div class="fr bi2r">
					<div class="bi2rtop">
						<a class="active bi2rtopa1" href="javascript:">商品详情</a>
						<a href="javascript:" class="bi2rtopa2">商品评论</a>
					</div>
					<div class="bi2r1">
						<div class="bi2r1w mt_30">
							<h4 class="bi2r1wtit">我一开口.就能说服所有人-马云说话之道 版权信息</h4>
							<div class="bi2r1w_1 mt_15">
								<table class="bi2r1w_1tab" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>ISBN：9787516804988</td>
										<td>条形码：9787516804988 ; 978-7-5168-0498-8</td>
										<td>装帧：暂无</td>
									</tr>
									<tr>
										<td>版次：暂无</td>
										<td>册数：暂无</td>
										<td>重量：暂无</td>
									</tr>
									<tr>
										<td colspan="3">印刷次数：1</td>
									</tr>
									<tr>
										<td colspan="3">所属分类：成功/励志>口才/演讲/辩论>说服力/说话技巧</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="bi2r1w mt_30">
							<h4 class="bi2r1wtit">我一开口.就能说服所有人-马云说话之道 本书特色</h4>
							<div class="bi2r1w_1 mt_15">
								《“我一开口，就能说服所有人”》一书选材于马云创业三十多年来在各种场合、大大小小的演讲和对话，尤其重点分析了马云在关键时刻的谈话，从中总结出马云的口才艺术，以及马云成功的原因。 　　马云的成功85%是“说”出来的。他的演讲极富气场，只要一开口仿佛所有的人都被他吸引过去。他善于用幽默风趣的语言、富于哲理的故事、肢体语言以及语不惊人未肯休的结论，打动听众。 　　本书通过对马云的演讲和对话的经验和技巧进行展示和分析，让你能活学活用马云口才的精髓，手把手教你用睿智、幽默、生动、犀利精练的语言打造属于你自己的气场。你也能轻易掌握演说技巧，打造自己的魔力口才。 　　马云的口才技巧和成功经验，只要你勤于练习和研究，终有一天，你也能做到“我一开口，就能说服所有人”。 
							</div>
						</div>
						<div class="bi2r1w mt_30">
							<h4 class="bi2r1wtit">我一开口.就能说服所有人-马云说话之道 内容简介</h4>
							<div class="bi2r1w_1 mt_15">
								《“我一开口，就能说服所有人”》一书选材于马云创业三十多年来在各种场合、大大小小的演讲和对话，尤其重点分析了马云在关键时刻的谈话，从中总结出马云的口才艺术，以及马云成功的原因。 　　马云的成功85%是“说”出来的。他的演讲极富气场，只要一开口仿佛所有的人都被他吸引过去。他善于用幽默风趣的语言、富于哲理的故事、肢体语言以及语不惊人未肯休的结论，打动听众。 　　本书通过对马云的演讲和对话的经验和技巧进行展示和分析，让你能活学活用马云口才的精髓，手把手教你用睿智、幽默、生动、犀利精练的语言打造属于你自己的气场。你也能轻易掌握演说技巧，打造自己的魔力口才。 　　马云的口才技巧和成功经验，只要你勤于练习和研究，终有一天，你也能做到“我一开口，就能说服所有人”。 
							</div>
						</div>
						<div class="bi2r1w mt_30">
							<h4 class="bi2r1wtit">我一开口.就能说服所有人-马云说话之道 目录</h4>
							<div class="bi2r1w_1 mt_15">
								<div class="bi2r1w_2">
									<div class="bi2r1w_2a">
										<a href="">**章 说话不自信的士兵，当不了将军</a>
										<a href="">像马云一样说话有自信，所有人都挺你</a>
										<a href="">言语自信，更添魅力 003</a>
										<a href="">做专业领域内的“话语权威” 005</a>
										<a href="">马云的身体也会“说话” 008</a>
										<a href="">煽情不是错，用感染力“俘获”人心 010
										<a href="">讲自己相信的，别人才能信 012</a>
										<a href="">激情，是情感的“引线” 015</a>
										<a href="">无论被拒绝多少次，都不要闭嘴 017</a>
										<a href="">把“坏”事往好里说 019</a>
										<a href="">**章 说话不自信的士兵，当不了将军</a>
										<a href="">像马云一样说话有自信，所有人都挺你</a>
										<a href="">言语自信，更添魅力 003</a>
										<a href="">做专业领域内的“话语权威” 005</a>
										<a href="">马云的身体也会“说话” 008</a>
										<a href="">煽情不是错，用感染力“俘获”人心 010
										<a href="">讲自己相信的，别人才能信 012</a>
										<a href="">激情，是情感的“引线” 015</a>
										<a href="">无论被拒绝多少次，都不要闭嘴 017</a>
										<a href="">把“坏”事往好里说 019</a>
									</div>
									<i class="colorindex zkqb">展开全部<em class="fa fa-angle-down ml5"></em></i>
								</div>
							</div>
						</div>
						<div class="bi2r1w mt_30">
							<h4 class="bi2r1wtit">我一开口.就能说服所有人-马云说话之道 作者简介</h4>
							<div class="bi2r1w_1 mt_15">
								《“我一开口，就能说服所有人”》一书选材于马云创业三十多年来在各种场合、大大小小的演讲和对话，尤其重点分析了马云在关键时刻的谈话，从中总结出马云的口才艺术，以及马云成功的原因。 　　马云的成功85%是“说”出来的。他的演讲极富气场，只要一开口仿佛所有的人都被他吸引过去。他善于用幽默风趣的语言、富于哲理的故事、肢体语言以及语不惊人未肯休的结论，打动听众。 　　本书通过对马云的演讲和对话的经验和技巧进行展示和分析，让你能活学活用马云口才的精髓，手把手教你用睿智、幽默、生动、犀利精练的语言打造属于你自己的气场。你也能轻易掌握演说技巧，打造自己的魔力口才。 　　马云的口才技巧和成功经验，只要你勤于练习和研究，终有一天，你也能做到“我一开口，就能说服所有人”。 
							</div>
						</div>
					</div>
					<div class="bi2r2 mt_40">
						<div class="bi2r2tit">
							商品评论（1条）
						</div>
						<div class="bi2r2a clearfix">
							<span class="fl">读者:ztw***</span>
							<div class="fl bi2r2am">
								<p>
									<span>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
									</span>
									主题：
								</p>
								<p>经典读物，看见就赶紧下单了，趁着活动买的，书的品相很好<em>2019-12-22 12:21</em></p>
							</div>
							<div class="fr bi2r2ar clearfix">
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z1_03.png"/>1</a>
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z2_03.png"/>1</a>
							</div>
						</div>
						<div class="bi2r2a clearfix">
							<span class="fl">读者:ztw***</span>
							<div class="fl bi2r2am">
								<p>
									<span>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
									</span>
									主题：
								</p>
								<p>经典读物，看见就赶紧下单了，趁着活动买的，书的品相很好<em>2019-12-22 12:21</em></p>
							</div>
							<div class="fr bi2r2ar clearfix">
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z1_03.png"/>1</a>
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z2_03.png"/>1</a>
							</div>
						</div>
						<div class="bi2r2a clearfix">
							<span class="fl">读者:ztw***</span>
							<div class="fl bi2r2am">
								<p>
									<span>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
										<i class="fa fa-heart"></i>
									</span>
									主题：
								</p>
								<p>经典读物，看见就赶紧下单了，趁着活动买的，书的品相很好<em>2019-12-22 12:21</em></p>
							</div>
							<div class="fr bi2r2ar clearfix">
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z1_03.png"/>1</a>
								<a href=""><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/z2_03.png"/>1</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<script type="text/javascript">
		$(".zmico,.bi1bg").click(function(){
			$(".bi1bg").toggle();
		})
		$(".zkqb").click(function(){
			$(this).toggle();
			$(".bi2r1w_2a").css("height","auto")
		})
		$(".bi2rtopa1").click(function(){
			$('html,body').animate({
		        scrollTop: $(".bi2r1").offset().top - 80
		    }, 600);
		})
		$(".bi2rtopa2").click(function(){
			$('html,body').animate({
		        scrollTop: $(".bi2r2").offset().top - 20
		    }, 600);
		})
	</script>
<!--底部-->
<div class="foot">
    <div class="wrap">
        <div class="ft1 textcenter">
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico1_03.png"/>
                <div class="fl ft1wtxt">
                    <p>正版保证</p>
                    <p>放心购买</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico2_03.png"/>
                <div class="fl ft1wtxt">
                    <p>精品团购</p>
                    <p>10点上新</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico3_03.png"/>
                <div class="fl ft1wtxt">
                    <p>尾货图书</p>
                    <p>超低折扣</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico4_03.png"/>
                <div class="fl ft1wtxt">
                    <p>全国快递</p>
                    <p>快马加鞭</p>
                </div>
            </div>
        </div>
        <p class="ft2">Copyright ©2019斑马悦读 广西弘轩文化投资有限公司  桂ICP备18005599号</p>
        <div class="ft3 textcenter">
            <div class="ft3bw clearfix">
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico1_03.png"/>
                    <p class="fl">经营性网站<br />备案信息</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico2_03.png"/>
                    <p class="fl">可信网站<br />信用评价</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico3_03.png"/>
                    <p class="fl">网络警察<br />提醒您</p>
                </a>
                <a href="" class="ft3b ft3b1 clearfix">
                    <img class="fl mt0" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico4_03.png"/>
                    <p class="fl">诚信网站</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico5_03.png"/>
                    <p class="fl">中国互联网<br />举报中兴</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico1_03.png"/>
                    <p class="fl">网络举报<br />APP下载</p>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
