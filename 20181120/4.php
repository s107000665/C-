
<!Doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta property="qc:admins" content="465267610762567726375" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>CSS 教程 | 菜鸟教程</title>

  <link rel='dns-prefetch' href='//s.w.org' />
<link rel="canonical" href="http://www.runoob.com/css/css-tutorial.html" />
<meta name="keywords" content="CSS 教程,css,css3">
<meta name="description" content="CSS  教程   通过使用 CSS 我们可以大大提升网页开发的工作效率！ 在我们的 CSS 教程中，您会学到如何使用 CSS 同时控制多重网页的样式和布局。 各章节实例 本 CSS 教程包含了数百个CSS在线实例 通过本站的在线编辑器，你可以在线编辑CSS,并且可以在线查看修改后的效果。    CSS 实例  [mycode3 type=&#039;css&#039;] body {     background-color:#d0e..">
		
	<link rel="shortcut icon" href="//static.runoob.com/images/favicon.ico" mce_href="//static.runoob.com/images/favicon.ico" type="image/x-icon" >
	<link rel="stylesheet" href="/wp-content/themes/runoob/style.css?v=1.147" type="text/css" media="all" />	
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" media="all" />	
  <!--[if gte IE 9]><!-->
  <script src="//cdn.staticfile.org/jquery/2.0.3/jquery.min.js"></script>
  <!--<![endif]-->
  <!--[if lt IE 9]>
     <script src="//cdn.staticfile.org/jquery/1.9.1/jquery.min.js"></script>
     <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
  <![endif]-->
  <link rel="apple-touch-icon" href="//static.runoob.com/images/icon/mobile-icon.png"/>
  <meta name="apple-mobile-web-app-title" content="菜鸟教程">
</head>
<body>

<!--  头部 -->
<div class="container logo-search">

  <div class="col search row-search-mobile">
    <form action="index.php">
      <input class="placeholder" placeholder="搜索……" name="s" autocomplete="off">
    </form>
  </div>

  <div class="row">
    <div class="col logo">
      <h1><a href="/">菜鸟教程 -- 学的不仅是技术，更是梦想！</a></h1>
    </div>
        <div class="col right-list"> 
    <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse" id="pull" style=""> <i class="fa fa-navicon"></i> </button>
    </div>
        <div class="col search search-desktop last">
      <form action="//www.runoob.com/" target="_blank">
        <input class="placeholder" id="s" name="s" placeholder="搜索……"  autocomplete="off">
      </form>
    </div>
  </div>
</div>


<!-- 导航栏 -->
<!-- 导航栏 -->
<div class="container navigation">
	<div class="row">
		<div class="col nav">
			<ul class="pc-nav">
				<li><a href="//www.runoob.com/">首页</a></li>
				<li><a href="/html/html-tutorial.html">HTML</a></li>
				<li><a href="/css/css-tutorial.html">CSS</a></li>
				<li><a href="/js/js-tutorial.html">JavaScript</a></li>
				<li><a href="/jquery/jquery-tutorial.html">jQuery</a></li>
				<li><a href="/bootstrap/bootstrap-tutorial.html">Bootstrap</a></li>
				<li><a href="/sql/sql-tutorial.html">SQL</a></li>
				<li><a href="/mysql/mysql-tutorial.html">MySQL</a></li>
				<li><a href="/php/php-tutorial.html">PHP</a></li>
				<li><a href="/python/python-tutorial.html">Python2</a></li>
				<li><a href="/python3/python3-tutorial.html">Python3</a></li>
				<li><a href="/cprogramming/c-tutorial.html">C</a></li>
				<li><a href="/cplusplus/cpp-tutorial.html">C++</a></li>
				<li><a href="/csharp/csharp-tutorial.html">C#</a></li>
				<li><a href="/java/java-tutorial.html">Java</a></li>
				<li><a href="/browser-history">本地书签</a></li>
				<li><a href="https://s.click.taobao.com/VCtS1Lw" target="_blank" data-id="1111" >红包 <img style="height: 12px; width: 24px;" src="//img.alicdn.com/tfs/TB1WzrtiSzqK1RjSZPcXXbTepXa-48-24.png"></a></li>
				
				<!--
				<li><a href="javascript:;" class="runoob-pop">登录</a></li>
				-->
      		</ul>
			<ul class="mobile-nav">
				<li><a href="//www.runoob.com/">首页</a></li>
				<li><a href="/html/html-tutorial.html">HTML</a></li>
				<li><a href="/css/css-tutorial.html">CSS</a></li>
				<li><a href="/js/js-tutorial.html">JS</a></li>
				<li><a href="/browser-history">本地书签</a></li>
				<li><a href="https://s.click.taobao.com/VCtS1Lw" target="_blank" data-id="1111" >红包 <img style="height: 12px; width: 24px;" src="//img.alicdn.com/tfs/TB1WzrtiSzqK1RjSZPcXXbTepXa-48-24.png"></a></li>
				<a href="javascript:void(0)" class="search-reveal">Search</a> 
			</ul>
			
		</div>
	</div>
</div><!--  内容  -->
<div class="container main">
	<!-- 中间 -->
	<div class="row">
	
<div class="col left-column">
	<div class="tab">CSS 教程	<a data-cate="5" href="javascript:void(0);" title="夜间模式"  id="moon"><i class="fa fa-moon-o" aria-hidden="true" style="font-size: 1.4em;float: right;margin: 4px 6px 0;"></i></a>
	<a data-cate="5" style="display:none;" href="javascript:void(0);" title="日间模式"  id="sun" ><i class="fa fa-sun-o" aria-hidden="true" style="font-size: 1.4em;float: right;margin: 4px 6px 0;"></i></a>
	</div>
	<div class="sidebar-box gallery-list">
		<div class="design" id="leftcolumn">
						<a target="_top" title="CSS 教程"  href="/css/css-tutorial.html" >
			CSS 教程			</a>
						<a target="_top" title="CSS 简介"  href="/css/css-intro.html" >
			CSS 简介			</a>
						<a target="_top" title="CSS 语法"  href="/css/css-syntax.html" >
			CSS 语法			</a>
						<a target="_top" title="CSS Id 和 Class选择器"  href="/css/css-id-class.html" >
			CSS Id 和 Class选择器			</a>
						<a target="_top" title="CSS 创建"  href="/css/css-howto.html" >
			CSS 创建			</a>
						<a target="_top" title="CSS Backgrounds(背景)"  href="/css/css-background.html" >
			CSS Backgrounds(背景)			</a>
						<a target="_top" title="CSS Text(文本)"  href="/css/css-text.html" >
			CSS Text(文本)			</a>
						<a target="_top" title="CSS Fonts(字体)"  href="/css/css-font.html" >
			CSS Fonts(字体)			</a>
						<a target="_top" title="CSS 链接(link)"  href="/css/css-link.html" >
			CSS 链接(link)			</a>
						<a target="_top" title="CSS 列表样式(ul)"  href="/css/css-list.html" >
			CSS 列表样式(ul)			</a>
						<a target="_top" title="CSS Table(表格)"  href="/css/css-table.html" >
			CSS Table(表格)			</a>
						<a target="_top" title="CSS 盒子模型"  href="/css/css-boxmodel.html" >
			CSS 盒子模型			</a>
						<a target="_top" title="CSS Border(边框)"  href="/css/css-border.html" >
			CSS Border(边框)			</a>
						<a target="_top" title="CSS 轮廓（outline）属性"  href="/css/css-outline.html" >
			CSS 轮廓（outline）属性			</a>
						<a target="_top" title="CSS margin(外边距)"  href="/css/css-margin.html" >
			CSS margin(外边距)			</a>
						<a target="_top" title="CSS padding（填充）"  href="/css/css-padding.html" >
			CSS padding（填充）			</a>
						<a target="_top" title="CSS 分组和嵌套"  href="/css/css-grouping-nesting.html" >
			CSS 分组和嵌套			</a>
						<a target="_top" title="CSS 尺寸 (Dimension)"  href="/css/css-dimension.html" >
			CSS 尺寸 (Dimension)			</a>
						<a target="_top" title="CSS Display(显示) 与 Visibility（可见性）"  href="/css/css-display-visibility.html" >
			CSS Display(显示)			</a>
						<a target="_top" title="CSS Position(定位)"  href="/css/css-positioning.html" >
			CSS Position(定位)			</a>
			<a target="_top" title="CSS Overflow" href="/css/css-overflow.html">CSS Overflow	</a>			<a target="_top" title="CSS Float（浮动）"  href="/css/css-float.html" >
			CSS Float（浮动）			</a>
						<a target="_top" title="CSS 布局 &#8211; 水平 &#038; 垂直对齐"  href="/css/css-align.html" >
			CSS  对齐			</a>
			<a target="_top" href="css-combinators.html">
	CSS 组合选择符	</a>			<a target="_top" title="CSS 伪类"  href="/css/css-pseudo-classes.html" >
			CSS 伪类			</a>
						<a target="_top" title="CSS 伪元素"  href="/css/css-pseudo-elements.html" >
			CSS 伪元素			</a>
						<a target="_top" title="CSS 导航栏"  href="/css/css-navbar.html" >
			CSS 导航栏			</a>
			<a target="_top" title="CSS 下拉菜单" href="css-dropdowns.html"> CSS 下拉菜单 </a>
<a target="_top" title="CSS 提示工具(Tooltip)" href="css-tooltip.html"> CSS 提示工具</a>			<a target="_top" title="CSS 图片廊"  href="/css/css-image-gallery.html" >
			CSS 图片廊			</a>
						<a target="_top" title="CSS 图像透明/不透明"  href="/css/css-image-transparency.html" >
			CSS 图像透明/不透明			</a>
						<a target="_top" title="CSS 图像拼合技术"  href="/css/css-image-sprites.html" >
			CSS 图像拼合技术			</a>
						<a target="_top" title="CSS 媒体类型"  href="/css/css-mediatypes.html" >
			CSS 媒体类型			</a>
						<a target="_top" title="CSS 属性选择器"  href="/css/css-attribute-selectors.html" >
			CSS 属性选择器			</a>
						<a target="_top" title="CSS 总结"  href="/css/css-summary.html" >
			CSS 总结			</a>
						<a target="_top" title="CSS 实例"  href="/css/css-examples.html" >
			CSS 实例			</a>
			<br><h2 class="left"><span class="left_h2">CSS3</span> 教程</h2>
<a target="_top" href="/css3/css3-tutorial.html" >
	CSS3 教程	</a>
		<a target="_top" href="/css3/css3-intro.html" >
	CSS3 简介	</a>
		<a target="_top" href="/css3/css3-borders.html" >
	CSS3 边框（Borders）	</a>
		<a target="_top" href="/css3/css3-backgrounds.html" >
	CSS3 背景	</a>
		<a target="_top" href="/css3/css3-gradients.html">
	CSS3 渐变	</a>
		<a target="_top" href="/css3/css3-text-effects.html" >
	CSS3 文本效果	</a>
		<a target="_top" href="/css3/css3-fonts.html" >
	CSS3 字体	</a>
		<a target="_top" href="/css3/css3-2dtransforms.html" >
	CSS3 2D 转换	</a>
		<a target="_top" href="/css3/css3-3dtransforms.html" >
	CSS3 3D 转换	</a>
		<a target="_top" href="/css3/css3-transitions.html" >
	CSS3 过渡	</a>
		<a target="_top" href="/css3/css3-animations.html" >
	CSS3 动画	</a>
		<a target="_top" href="/css3/css3-multiple-columns.html" >
	CSS3 多列	</a>
		<a target="_top" href="/css3/css3-user-interface.html" >
	CSS3 用户界面	</a>
<br>
<h2 class="left"><span class="left_h2">CSS</span> 响应式设计</h2>
<a target="_top" href="/css/css-rwd-viewport.html">Viewport</a>
<a target="_top" href="/css/css-rwd-grid.html"> 网格视图</a>
<a target="_top" href="/css/css-rwd-mediaqueries.html">媒体查询</a>
<a target="_top" href="/css/css-rwd-images.html">图片</a>
<a target="_top" href="/css/css-rwd-videos.html">视频(Video)</a>
<a target="_top" href="/css/css-rwd-frameworks.html">框架</a>
<br>
<h2 class="left"><span class="left_h2">CSS</span> 参考手册</h2>
<a target="_top" href="/cssref/css-reference.html" >CSS 参考手册</a>
<a target="_top" href="/cssref/css-selectors.html">CSS 选择器</a>
<a target="_top" href="/cssref/css-ref-aural.html">CSS 语音参考</a>
<a target="_top" href="/cssref/css-websafe-fonts.html">CSS Web安全字体</a>
<a target="_top" title="CSS 动画" href="/cssref/css-animatable.html"> CSS 动画 </a>
<a target="_top" href="/cssref/css-units.html">CSS 单位</a>
<a target="_top" href="/cssref/css-colors.html">CSS 颜色</a>
<a target="_top" href="/cssref/css-colors-legal.html">CSS 颜色值</a>
<a target="_top" href="/cssref/css-colornames.html">CSS 颜色名</a>
<a target="_top" href="/cssref/css-colorsfull.html">CSS 十六进制颜色</a>	
		</div>
	</div>	
</div>	<div class="col middle-column">
		
	
	<div class="article">
			<div class="article-heading-ad" style="display: none;">
		
		</div>
		<div class="previous-next-links">
			<div class="previous-design-link"> </div>
			<div class="next-design-link"><a href="http://www.runoob.com/css/css-intro.html" rel="next"> CSS 简介</a> <i style="font-size:16px;" class="fa fa-arrow-right" aria-hidden="true"></i></div>
		</div>
		<div class="article-body">
		
			<div class="article-intro" id="content">
			
			<h1>CSS <span class="color_h1"> 教程</span>
</h1>

<p>通过使用 CSS 我们可以大大提升网页开发的工作效率！</p>
<p>在我们的 CSS 教程中，您会学到如何使用 CSS 同时控制多重网页的样式和布局。</p>
<h2 class="tutheader">各章节实例</h2>
<p>本 CSS 教程包含了数百个CSS在线实例</p>
<p>通过本站的在线编辑器，你可以在线编辑CSS,并且可以在线查看修改后的效果。</p>


<div class="example">
<h2 class="example_head">CSS 实例</h2>
<div class="example_code">
<div class="hl-main"><span class="hl-identifier">body</span><span class="hl-code">
</span><span class="hl-brackets">{</span><span class="hl-code">
    </span><span class="hl-reserved">background-color:</span><span class="hl-var">#d0e4fe</span><span class="hl-reserved"></span><span class="hl-code">;
</span><span class="hl-brackets">}</span><span class="hl-code">
</span><span class="hl-identifier">h1</span><span class="hl-code">
</span><span class="hl-brackets">{</span><span class="hl-code">
    </span><span class="hl-reserved">color:</span><span class="hl-code">orange</span><span class="hl-reserved"></span><span class="hl-code">;
    </span><span class="hl-reserved">text-align:</span><span class="hl-string">center</span><span class="hl-reserved"></span><span class="hl-code">;
</span><span class="hl-brackets">}</span><span class="hl-code">
</span><span class="hl-identifier">p</span><span class="hl-code">
</span><span class="hl-brackets">{</span><span class="hl-code">
    </span><span class="hl-reserved">font-family:</span><span class="hl-code">&quot;</span><span class="hl-code">Times</span><span class="hl-code"> </span><span class="hl-code">New</span><span class="hl-code"> </span><span class="hl-code">Roman</span><span class="hl-code">&quot;</span><span class="hl-reserved"></span><span class="hl-code">;
    </span><span class="hl-reserved">font-size:</span><span class="hl-number">20</span><span class="hl-string">px</span><span class="hl-reserved"></span><span class="hl-code">;
</span><span class="hl-brackets">}</span></div>
</div>
<br><a target="_blank" href="/try/try.php?filename=trycss_default" class="tryitbtn">尝试一下 »</a>
</div>
<p><b>点击 "尝试一下" 按钮查看css是如何工作的。</b></p>

<h2 class="tutheader">CSS 实例</h2>
<p>css 在线150个实例，通过本站编辑器，你可以学习在线查看修改后css的运行效果。</p>
<p><a href="//www.runoob.com/css/css-examples.html" target="_blank">尝试一下!</a></p>
<h2 class="tutheader">HTML/CSS/JS 在线工具</h2>
<p>HTML/CSS/JS 在线工具可以在线编辑 HTML、CSS、JS 代码，并实时查看效果，你也可以将优质代码保存分享：<a href="https://c.runoob.com/front-end/61" target="_blank">https://c.runoob.com/front-end/61</a></p>

<h2 class="tutheader">CSS 参考手册</h2>
<p>在菜鸟教程中你可以找到更完整的CSS属性、选择器的语法，浏览器支持等资料.</p>
<p><a href="/cssref/css-reference.html" target="_blank">CSS 属性</a> </p>
<p><a href="/cssref/css-selectors.html" target="_blank">CSS 选择器参考手册</a></p>
<p><a href="/cssref/css-ref-aural.html" target="_blank">CSS 声音参考手册</a></p>
<p><a href="/cssref/css-units.html" target="_blank">CSS 单位</a></p>
<p><a href="/cssref/css-colors.html" target="_blank">CSS 颜色参考手册</a></p>			
			
			</div>
			
		</div>
		
		<div class="previous-next-links">
			<div class="previous-design-link"> </div>
			<div class="next-design-link"><a href="http://www.runoob.com/css/css-intro.html" rel="next"> CSS 简介</a> <i style="font-size:16px;" class="fa fa-arrow-right" aria-hidden="true"></i></div>
		</div>
		<!-- 笔记列表 -->
		<style>
.wrapper {
  /*text-transform: uppercase; */
  background: #ececec;
  color: #555;
  cursor: help;
  font-family: "Gill Sans", Impact, sans-serif;
  font-size: 20px;
  position: relative;
  text-align: center;
  width: 200px;
  -webkit-transform: translateZ(0); /* webkit flicker fix */
  -webkit-font-smoothing: antialiased; /* webkit text rendering fix */
}

.wrapper .tooltip {
  white-space: nowrap;
  font-size: 14px;
  text-align: left;
  background: #96b97d;
  bottom: 100%;
  color: #fff;
  display: block;
  left: -25px;
  margin-bottom: 15px;
  opacity: 0;
  padding: 14px;
  pointer-events: none;
  position: absolute;
  
  -webkit-transform: translateY(10px);
     -moz-transform: translateY(10px);
      -ms-transform: translateY(10px);
       -o-transform: translateY(10px);
          transform: translateY(10px);
  -webkit-transition: all .25s ease-out;
     -moz-transition: all .25s ease-out;
      -ms-transition: all .25s ease-out;
       -o-transition: all .25s ease-out;
          transition: all .25s ease-out;
  -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
     -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
      -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
       -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
          box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
}
.tooltip a {
	color:#fff;
}
/* This bridges the gap so you can mouse into the tooltip without it disappearing */
.wrapper .tooltip:before {
  bottom: -20px;
  content: " ";
  display: block;
  height: 20px;
  left: 0;
  position: absolute;
  width: 100%;
}  

/* CSS Triangles - see Trevor's post */
.wrapper .tooltip:after {
  border-left: solid transparent 10px;
  border-right: solid transparent 10px;
  border-top: solid #96b97d 10px;
  bottom: -10px;
  content: " ";
  height: 0;
  left: 20%;
  margin-left: -13px;
  position: absolute;
  width: 0;
}
.wrapper .tooltip1 {
	margin-left: 50px;
	padding-top: 0px;
}
.wrapper:hover .tooltip {
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: translateY(0px);
     -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
       -o-transform: translateY(0px);
          transform: translateY(0px);
}

/* IE can just show/hide with no transition */
.lte8 .wrapper .tooltip {
  display: none;
}

.lte8 .wrapper:hover .tooltip {
  display: block;
}

</style>


<div id="respond" class="no_webshot"> 
		<div class="comment-signarea" style=" padding: 20px 20px;"> 
	<h3 class="text-muted" id="share_code" style="color: #799961;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 点我分享笔记</h3>
	<!--
	<p style="font-size:14px;">笔记需要是本篇文章的内容扩展！</p><br>
	<p style="font-size:12px;"><a href="//www.runoob.com/tougao" target="_blank">文章投稿，可点击这里</a></p>
	<p style="font-size:14px;"><a href="/w3cnote/runoob-user-test-intro.html#invite" target="_blank">注册邀请码获取方式</a></p>
		<h3 class="text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> 分享笔记前必须<a href="javascript:;" class="runoob-pop">登录</a>！</h3>
		<p><a href="/w3cnote/runoob-user-test-intro.html#invite" target="_blank">注册邀请码获取方式</a></p>-->
	</div>
		
	<form action="/wp-content/themes/runoob/option/addnote.php" method="post" id="commentform" style="display:none;">
		<div class="comt">
			<div class="comt-title">
				<i style="font-size:36px;" class="fa fa-user-circle" aria-hidden="true"></i>				<p><a id="cancel-comment-reply-link" href="javascript:;">取消</a></p>
			</div>
			<div class="comt-box">
			<div id="mded"></div>
			
				<div class="comt-ctrl">
					<div class="comt-tips"><input type='hidden' name='comment_post_ID' value='198' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</div>
					<button type="submit" name="submit" id="submit" tabindex="5"><i class="fa fa-pencil" aria-hidden="true"></i> 分享笔记</button>
				</div>
			</div>
		
				
					<div class="comt-comterinfo"> 
						<ul id="comment-author-info">
							<li class="form-inline"><label class="hide" for="author">昵称</label><input class="ipt" type="text" name="author" id="author" value="" tabindex="2" placeholder="昵称"><span class="text-muted">昵称 (必填)</span></li>
							<li class="form-inline"><label class="hide" for="email">邮箱</label><input class="ipt" type="text" name="email" id="email" value="" tabindex="3" placeholder="邮箱"><span class="text-muted">邮箱 (必填)</span></li>
							<li class="form-inline"><label class="hide" for="url">引用地址</label><input class="ipt" type="text" name="url" id="url" value="" tabindex="4" placeholder="引用地址"><span class="text-muted">引用地址</span></li>
						</ul>
					</div>
				
			
		</div>

	</form>
	</div>
<script type="text/javascript">
$(function() {
	//初始化编辑器
	
	var editor = new Simditor({
	  textarea: $('#mded'),
	  placeholder: '写笔记...',
	  upload:false,
	 // upload: {url:'/api/comment_upload_file.php',params: null,fileKey: 'upload_file',connectionCount: 1,leaveConfirm: '文件正在上传，您确定离开?'},
	  defaultImage: 'http://www.runoob.com/images/logo.png',
	  codeLanguages: '',
	  toolbar: [  'bold','code','ul','ol','image' ]
	});
	editor.on('selectionchanged', function() {
		$(".code-popover").hide();
	});

	// 提交数据
	$("#share_code").click(function() {
		$(".comment-signarea").hide();
		$("#commentform").show();
		
	});
	$("#user_add_note").click(function() {
		$(".comment-signarea").hide();
		$("#commentform").show();
		$('html, body').animate({
       	    scrollTop: $("#respond").offset().top
    	}, 200);
	});

	// 提交笔记
	var commentform=$('#commentform');
	commentform.prepend('<div id="comment-status" style="display:none;" ></div>');
	var statusdiv=$('#comment-status');
	
	commentform.submit(function(e){
		e.preventDefault();
		var noteContent = editor.getValue();
		// console.log(noteContent);
		noteContent = noteContent.replace(/<pre><code>/g,"<pre>");
		noteContent = noteContent.replace(/<\/code><\/pre>/g,"</pre>");
		
		// 系列化表单数据
		var comment_parent = 0;
		var is_user_logged_in = $("#is_user_logged_in").val();
		var comment_post_ID =  198;
		var _wp_unfiltered_html_comment = $("#_wp_unfiltered_html_comment").val();
		var comment = noteContent;
		var author = $("#author").val();
		var url = $("#url").val();
		var email = $("#email").val();
		if(isBlank(author) && is_user_logged_in==0) {
			statusdiv.html('<p  class="ajax-error">请输入昵称！</p>').show();
		} else if(isBlank(email)  && is_user_logged_in==0) {
			statusdiv.html('<p  class="ajax-error">请输入邮箱！</p>').show();
		} else {
			// var formdata=commentform.serialize() + "&comment=" + noteContent ;
			// 添加状态信息
			statusdiv.html('<p>Processing...</p>').show();
			// 获取表单提交地址
			var formurl=commentform.attr('action');
			
			// 异步提交
			$.ajax({
					type: 'post',
					url: formurl,
					dataType:'json',
					data: {"comment_parent":comment_parent,"comment_post_ID":comment_post_ID, "_wp_unfiltered_html_comment":_wp_unfiltered_html_comment,"comment":comment,"url":url, "email":email,"author":author},
					error: function(XMLHttpRequest, textStatus, errorThrown){
					statusdiv.html('<p class="ajax-error" >数据不完整或表单提交太快了！</p>').show();
				},
				success: function(data, textStatus){
					if(data.errorno=="0") {
						$("#submit").prop('disabled', true);
						statusdiv.html('<p class="ajax-success" >笔记已提交审核，感谢分享笔记！</p>').show();
						alert('笔记已提交审核，感谢分享笔记！');
					}else{
						statusdiv.html('<p class="ajax-error" >'+data.msg+'</p>').show();
					}
					commentform.find('textarea[name=comment]').val('');
				}
			});
			setTimeout(function(){
		        $("#submit").prop('disabled', false);
		    }, 10*1000);
		}
		return false;

	});
	
});
function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}
</script>

<link rel="stylesheet" href="/wp-content/themes/runoob/assets/css/qa.css?1.42">
<link rel="stylesheet" type="text/css" href="//cdn.staticfile.org/simditor/2.3.6/styles/simditor.min.css" />
<script type="text/javascript" src="//static.runoob.com/assets/simditor/2.3.6/scripts/module.js"></script>
<script type="text/javascript" src="//static.runoob.com/assets/simditor/2.3.6/scripts/hotkeys.js"></script>
<script type="text/javascript" src="//static.runoob.com/assets/simditor/2.3.6/scripts/uploader.js"></script>
<script type="text/javascript" src="//cdn.staticfile.org/simditor/2.3.6/lib/simditor.min.js"></script>		<div class="sidebar-box ad-box ad-box-large">
				<div id="ad-336280">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- 移动版 自动调整 -->
		<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-5751451760833794"
			data-ad-slot="1691338467"
			data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
				</div>
		
	</div>
</div>
	

<!-- 右边栏 -->
<div class="fivecol last right-column">
<!--
	<div class="tab tab-light-blue" style="text-align: center;">关注微信</div>
	<div class="sidebar-box">
		<a href="http://m.runoob.com/" target="_blank"> <img src="http://www.runoob.com/wp-content/themes/w3cschool.cc/assets/img/qrcode.jpg" alt="移动版"> </a>
		<div class="qqinfo">
		 <a target="_blank" href="http://jq.qq.com/?_wv=1027&k=dOwwKN" id="qqhref">
		<img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="菜鸟家族" title="菜鸟家族"></a>
		<span>(群号：<span id="qqid">365967760</span>)</span>
		</div>
		
	</div>
	-->
<style>
.sidebar-tree .double-li {
	width:300px;
}
.sidebar-tree .double-li li {
    width: 44%;
    line-height: 1.5em;
    border-bottom: 1px solid #ccc;
    float: left;
    display: inline;
}
</style>

	
		<div class="sidebar-box ad-box ad-box-large">
		<div class="sidebar-box advertise-here" style="margin: 0 auto;">
			<a href="javascript:void(0);" style="font-size: 16px; color:#64854c;font-weight:bold;"> <i class="fa fa-list" aria-hidden="true"></i> 分类导航</a>
		</div>
	<div class="sidebar-box sidebar-cate">
		
		<div class="sidebar-tree" >
			<ul><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> HTML / CSS</a><ul class="double-li"><li><a title="HTML 教程" href="//www.runoob.com/html/html-tutorial.html">HTML 教程</a></li><li><a title="HTML5 教程" href="//www.runoob.com/html/html5-intro.html">HTML5 教程</a></li><li><a title="CSS 教程" href="//www.runoob.com/css/css-tutorial.html">CSS 教程</a></li><li><a title="CSS3 教程" href="//www.runoob.com/css3/css3-tutorial.html">CSS3 教程</a></li><li><a title="Bootstrap3 教程" href="//www.runoob.com/bootstrap/bootstrap-tutorial.html">Bootstrap3 教程</a></li><li><a title="Bootstrap4 教程" href="//www.runoob.com/bootstrap4/bootstrap4-tutorial.html">Bootstrap4 教程</a></li><li><a title="Font Awesome 教程" href="//www.runoob.com/font-awesome/fontawesome-tutorial.html">Font Awesome 教程</a></li><li><a title="Foundation 教程" href="//www.runoob.com/foundation/foundation-tutorial.html">Foundation 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> JavaScript</a><ul class="double-li"><li><a title="JavaScript 教程" href="//www.runoob.com/js/js-tutorial.html">JavaScript 教程</a></li><li><a title="HTML DOM 教程" href="//www.runoob.com/htmldom/htmldom-tutorial.html">HTML DOM 教程</a></li><li><a title="jQuery 教程" href="//www.runoob.com/jquery/jquery-tutorial.html">jQuery 教程</a></li><li><a title="AngularJS 教程" href="//www.runoob.com/angularjs/angularjs-tutorial.html">AngularJS 教程</a></li><li><a title="AngularJS2 教程" href="//www.runoob.com/angularjs2/angularjs2-tutorial.html">AngularJS2 教程</a></li><li><a title="Vue.js 教程" href="//www.runoob.com/vue2/vue-tutorial.html">Vue.js 教程</a></li><li><a title="React 教程" href="//www.runoob.com/react/react-tutorial.html">React 教程</a></li><li><a title="jQuery UI 教程" href="//www.runoob.com/jqueryui/jqueryui-tutorial.html">jQuery UI 教程</a></li><li><a title="jQuery EasyUI 教程" href="//www.runoob.com/jeasyui/jqueryeasyui-tutorial.html">jQuery EasyUI 教程</a></li><li><a title="Node.js 教程" href="//www.runoob.com/nodejs/nodejs-tutorial.html">Node.js 教程</a></li><li><a title="AJAX 教程" href="//www.runoob.com/ajax/ajax-tutorial.html">AJAX 教程</a></li><li><a title="JSON 教程" href="//www.runoob.com/json/json-tutorial.html">JSON 教程</a></li><li><a title="Highcharts 教程" href="//www.runoob.com/highcharts/highcharts-tutorial.html">Highcharts 教程</a></li><li><a title="Google 地图 教程" href="//www.runoob.com/googleapi/google-maps-basic.html">Google 地图 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> 服务端</a><ul class="double-li"><li><a title="PHP 教程" href="//www.runoob.com/php/php-tutorial.html">PHP 教程</a></li><li><a title="Python 教程" href="//www.runoob.com/python/python-tutorial.html">Python 教程</a></li><li><a title="Python3 教程" href="//www.runoob.com/python3/python3-tutorial.html">Python3 教程</a></li><li><a title="Django 教程" href="//www.runoob.com/django/django-tutorial.html">Django 教程</a></li><li><a title="Linux 教程" href="//www.runoob.com/linux/linux-tutorial.html">Linux 教程</a></li><li><a title="Docker 教程" href="//www.runoob.com/docker/docker-tutorial.html">Docker 教程</a></li><li><a title="Ruby 教程" href="//www.runoob.com/ruby/ruby-tutorial.html">Ruby 教程</a></li><li><a title="Java 教程" href="//www.runoob.com/java/java-tutorial.html">Java 教程</a></li><li><a title="C 教程" href="//www.runoob.com/c/c-tutorial.html">C 教程</a></li><li><a title="C++ 教程" href="//www.runoob.com/cplusplus/cpp-tutorial.html">C++ 教程</a></li><li><a title="Perl 教程" href="//www.runoob.com/perl/perl-tutorial.html">Perl 教程</a></li><li><a title="Servlet 教程" href="//www.runoob.com/servlet/servlet-tutorial.html">Servlet 教程</a></li><li><a title="JSP 教程" href="//www.runoob.com/jsp/jsp-tutorial.html">JSP 教程</a></li><li><a title="Lua 教程" href="//www.runoob.com/lua/lua-tutorial.html">Lua 教程</a></li><li><a title="Scala 教程" href="//www.runoob.com/scala/scala-tutorial.html">Scala 教程</a></li><li><a title="Go 教程" href="//www.runoob.com/go/go-tutorial.html">Go 教程</a></li><li><a title="设计模式" href="//www.runoob.com/design-pattern/design-pattern-tutorial.html">设计模式</a></li><li><a title="正则表达式" href="//www.runoob.com/regexp/regexp-tutorial.html">正则表达式</a></li><li><a title="Maven 教程" href="//www.runoob.com/maven/maven-tutorial.html">Maven 教程</a></li><li><a title="NumPy 教程" href="//www.runoob.com/numpy/numpy-tutorial.html">NumPy 教程</a></li><li><a title="ASP 教程" href="//www.runoob.com/asp/asp-tutorial.html">ASP 教程</a></li><li><a title="AppML 教程" href="//www.runoob.com/appml/appml-tutorial.html">AppML 教程</a></li><li><a title="VBScript 教程" href="//www.runoob.com/vbscript/vbscript-tutorial.html">VBScript 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> 数据库</a><ul class="double-li"><li><a title="SQL 教程" href="//www.runoob.com/sql/sql-tutorial.html">SQL 教程</a></li><li><a title="Mysql 教程" href="//www.runoob.com/mysql/mysql-tutorial.html">Mysql 教程</a></li><li><a title="SQLite 教程" href="//www.runoob.com/sqlite/sqlite-tutorial.html">SQLite 教程</a></li><li><a title="MongoDB 教程" href="//www.runoob.com/mongodb/mongodb-tutorial.html">MongoDB 教程</a></li><li><a title="Redis 教程" href="//www.runoob.com/redis/redis-tutorial.html">Redis 教程</a></li><li><a title="Memcached 教程" href="//www.runoob.com/Memcached/Memcached-tutorial.html">Memcached 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> 移动端</a><ul class="double-li"><li><a title="Android 教程" href="//www.runoob.com/w3cnote/android-tutorial-intro.html">Android 教程</a></li><li><a title="Swift 教程" href="//www.runoob.com/swift/swift-tutorial.html">Swift 教程</a></li><li><a title="jQuery Mobile 教程" href="//www.runoob.com/jquerymobile/jquerymobile-tutorial.html">jQuery Mobile 教程</a></li><li><a title="ionic 教程" href="//www.runoob.com/ionic/ionic-tutorial.html">ionic 教程</a></li><li><a title="Kotlin 教程" href="//www.runoob.com/kotlin/kotlin-tutorial.html">Kotlin 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> XML 教程</a><ul class="double-li"><li><a title="XML 教程" href="//www.runoob.com/xml/xml-tutorial.html">XML 教程</a></li><li><a title="DTD 教程" href="//www.runoob.com/dtd/dtd-tutorial.html">DTD 教程</a></li><li><a title="XML DOM 教程" href="//www.runoob.com/dom/dom-tutorial.html">XML DOM 教程</a></li><li><a title="XSLT 教程" href="//www.runoob.com/xsl/xsl-tutorial.html">XSLT 教程</a></li><li><a title="XPath 教程" href="//www.runoob.com/xpath/xpath-tutorial.html">XPath 教程</a></li><li><a title="XQuery 教程" href="//www.runoob.com/xquery/xquery-tutorial.html">XQuery 教程</a></li><li><a title="XLink 教程" href="//www.runoob.com/xlink/xlink-tutorial.html">XLink 教程</a></li><li><a title="XPointer 教程" href="//www.runoob.com/xlink/xlink-tutorial.html">XPointer 教程</a></li><li><a title="XML Schema 教程" href="//www.runoob.com/schema/schema-tutorial.html">XML Schema 教程</a></li><li><a title="XSL-FO 教程" href="//www.runoob.com/xslfo/xslfo-tutorial.html">XSL-FO 教程</a></li><li><a title="SVG 教程" href="//www.runoob.com/svg/svg-tutorial.html">SVG 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> ASP.NET</a><ul class="double-li"><li><a title="ASP.NET 教程" href="//www.runoob.com/aspnet/aspnet-tutorial.html">ASP.NET 教程</a></li><li><a title="C# 教程" href="//www.runoob.com/csharp/csharp-tutorial.html">C# 教程</a></li><li><a title="Web Pages 教程" href="//www.runoob.com/aspnet/webpages-intro.html">Web Pages 教程</a></li><li><a title="Razor 教程" href="//www.runoob.com/aspnet/razor-intro.html">Razor 教程</a></li><li><a title="MVC 教程" href="//www.runoob.com/aspnet/mvc-intro.html">MVC 教程</a></li><li><a title="Web Forms 教程" href="//www.runoob.com/aspnet/aspnet-intro.html">Web Forms 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> Web Service</a><ul class="double-li"><li><a title="Web Service 教程" href="//www.runoob.com/webservices/webservices-tutorial.html">Web Service 教程</a></li><li><a title="WSDL 教程" href="//www.runoob.com/wsdl/wsdl-tutorial.html">WSDL 教程</a></li><li><a title="SOAP 教程" href="//www.runoob.com/soap/soap-tutorial.html">SOAP 教程</a></li><li><a title="RSS 教程" href="//www.runoob.com/rss/rss-tutorial.html">RSS 教程</a></li><li><a title="RDF 教程" href="//www.runoob.com/rdf/rdf-tutorial.html">RDF 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> 开发工具</a><ul class="double-li"><li><a title="Eclipse 教程" href="//www.runoob.com/eclipse/eclipse-tutorial.html">Eclipse 教程</a></li><li><a title="Git 教程" href="//www.runoob.com/git/git-tutorial.html">Git 教程</a></li><li><a title="Svn 教程" href="//www.runoob.com/svn/svn-tutorial.html">Svn 教程</a></li><li><a title="Firebug 教程" href="//www.runoob.com/firebug/firebug-tutorial.html">Firebug 教程</a></li></ul></li><li style="margin: 0;"><a href="javascript:void(0);" class="tit"> 网站建设</a><ul class="double-li"><li><a title="HTTP 教程" href="//www.runoob.com/http/http-tutorial.html">HTTP 教程</a></li><li><a title="网站建设指南" href="//www.runoob.com/web/web-buildingprimer.html">网站建设指南</a></li><li><a title="浏览器信息" href="//www.runoob.com/browsers/browser-information.html">浏览器信息</a></li><li><a title="网站主机教程" href="//www.runoob.com/hosting/hosting-tutorial.html">网站主机教程</a></li><li><a title="TCP/IP 教程" href="//www.runoob.com/tcpip/tcpip-tutorial.html">TCP/IP 教程</a></li><li><a title="W3C 教程" href="//www.runoob.com/w3c/w3c-tutorial.html">W3C 教程</a></li><li><a title="网站品质" href="//www.runoob.com/quality/quality-tutorial.html">网站品质</a></li></ul></li></ul>			</div>
	
	</div>
	</div>
	<br>
	
	<div class="sidebar-box ad-box ad-box-large">
		<div class="sidebar-box advertise-here">
			<a href="javascript:void(0);">Advertisement</a>
		</div>
		<div class="ad-600160" id="sidebar-right-ads">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- 侧栏1 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:160px;height:600px"
		     data-ad-client="ca-pub-5751451760833794"
		     data-ad-slot="4106274865"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
				</div>
	</div>
</div></div>

</div>

<script>
var aid = 198;
function coll() {
	$.post( '/wp-content/themes/runoob/option/user/userinfo.php', {aid:aid, action:"collarticle", opt:'add'},function( data ) {
		if(data.error==0) {
			$("#content").find("h1:first").find("a").attr("href","javascript:void(0);");
			$("#content").find("h1:first").find("img").attr("src","http://www.runoob.com/wp-content/themes/runoob/assets/img/coll2.png").css({width:32+"px",height:32+"px"});
		}
		alert(data.msg);
	},'json');
}
</script>


<!-- 反馈对话框开始 -->
<script src="/wp-content/themes/runoob/assets/feedback/stable/2.0/feedback.js?1.0"></script>
<link rel="stylesheet" href="/wp-content/themes/runoob/assets/feedback/stable/2.0/feedback.css?1.0" />
<script type="text/javascript">
$.feedback({
    ajaxURL: '/feedback/runoob_feedback.php',
    html2canvasURL: '/wp-content/themes/runoob/assets/feedback/stable/2.0/html2canvas.js'
});
</script>
<!-- 反馈对话框结束 -->
<button class="feedback-btn feedback-btn-gray">反馈/建议</button>
<!-- 底部 -->


<div id="footer" class="mar-t50">
   <div class="runoob-block">
    <div class="runoob cf">
     <dl>
      <dt>
       在线实例
      </dt>
      <dd>
       &middot;<a target="_blank" href="/html/html-examples.html">HTML 实例</a>
      </dd>
      <dd>
       &middot;<a target="_blank" href="/css/css-examples.html">CSS 实例</a>
      </dd>
      <dd>
       &middot;<a target="_blank" href="/js/js-examples.html">JavaScript 实例</a>
      </dd>
      <dd>
       &middot;<a target="_blank" href="/ajx/ajax-examples.html">Ajax 实例</a>
      </dd>
       <dd>
       &middot;<a target="_blank" href="/jquery/jquery-examples.html">jQuery 实例</a>
      </dd>
      <dd>
       &middot;<a target="_blank" href="/xml/xml-examples.html">XML 实例</a>
      </dd>
      <dd>
       &middot;<a target="_blank" href="/java/java-examples.html">Java 实例</a>
      </dd>
     
     </dl>
     <dl>
      <dt>
      字符集&工具
      </dt>
      <dd>
       &middot; <a target="_blank" href="/charsets/html-charsets.html">HTML 字符集设置</a>
      </dd>
      <dd>
       &middot; <a target="_blank" href="/tags/html-ascii.html">HTML ASCII 字符集</a>
      </dd>
     <dd>
       &middot; <a target="_blank" href="/tags/ref-entities.html">HTML ISO-8859-1</a>
      </dd> 
      <dd>
       &middot; <a target="_blank" href="/tags/html-symbols.html">HTML 实体符号</a>
      </dd>
      <dd>
       &middot; <a target="_blank" href="/tags/html-colorpicker.html">HTML 拾色器</a>
      </dd>
      <dd>
       &middot; <a target="_blank" href="//c.runoob.com/front-end/53">JSON 格式化工具</a>
      </dd>
     </dl>
     <dl>
      <dt>
       最新更新
      </dt>
                   <dd>
       &middot;
      <a href="http://www.runoob.com/mysql/mysql-operator.html" title="MySQL 运算符">MySQL 运算符</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/c-bool-true-false.html" title="C 语言的布尔类型(true 与 false)">C 语言的布尔类...</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/js-delete-json-arr.html" title="JS 中彻底删除 JSON 对象组成的数组中的元素">JS 中彻底删除 J...</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/programmer-joke-21.html" title="搞笑程序员表情包 | 这代码&#8230;&#8230;辣眼睛&#8230;..">搞笑程序员表情...</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/java-json-instro.html" title="Java 中 JSON  的使用">Java 中 JSON  ...</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/cpp-const-keyword.html" title="C++ const 关键字小结">C++ const 关键...</a>
      </dd>
              <dd>
       &middot;
      <a href="http://www.runoob.com/w3cnote/java-fail-ast-fail-safe.html" title="Java 的快速失败和安全失败">Java 的快速失败...</a>
      </dd>
             </dl>
     <dl>
      <dt>
       站点信息
      </dt>
      <dd>
       &middot;
       <a target="_blank" href="//mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=ssbDyoOAgfLU3crf09venNHd3w" rel="external nofollow">意见反馈</a>
      <!--<a class="wxpopup" onclick="popFunction()">合作联系
       <span class="popuptext" id="myPopup">微信：<strong>centos5</strong></span>
      </a>-->
      </dd>
      <dd>
       &middot;
      <a target="_blank" href="/disclaimer">免责声明</a>
       </dd>
       <!--
       <dd style="display: block;">
       &middot;
      <a href="javascript:void(0)" onclick="dashangToggle()" style="font-weight:bold;color:#f00;" title="打赏，支持一下">打赏一下</a>
       </dd>
      -->
      <dd>
       &middot;
       <a target="_blank" href="/aboutus">关于我们</a>
       </dd>
      <dd>
       &middot;
      <a target="_blank" href="/archives">文章归档</a>
      </dd>
      <!--
      <dd>
       &middot;
      <a href="https://www.xiaoyouxi100.com/?from=runoob" onclick="_hmt.push(['_trackEvent', '小游戏', 'click', 'xiaoyouxi100']);" target="_blank" title="小游戏">小游戏</a>
      </dd>
      -->
     </dl>
    
     <div class="search-share">
      <div class="app-download">
        <div>
         <strong>关注微信</strong>
        </div>
      </div>
      <div class="share">
            <img width="128" height="128" src="/wp-content/themes/runoob/assets/images/qrcode.png" />
       </div>
     </div>
     
    </div>
   </div>
   <div class="w-1000 copyright">
     Copyright &copy; 2013-2018    <strong><a href="//www.runoob.com/" target="_blank">菜鸟教程</a></strong>&nbsp;
    <strong><a href="//www.runoob.com/" target="_blank">runoob.com</a></strong> All Rights Reserved. 备案号：闽ICP备15012807号-1
   </div>
  </div>
  <div class="fixed-btn">
    <a class="go-top" href="javascript:void(0)" title="返回顶部"> <i class="fa fa-angle-up"></i></a>
    <a class="qrcode"  href="javascript:void(0)" title="关注我们"><i class="fa fa-qrcode"></i></a>
    <a class="writer" style="display:none" href="javascript:void(0)"   title="标记/收藏"><i class="fa fa-star" aria-hidden="true"></i></a>
    <!-- qrcode modal -->
    <div id="bottom-qrcode" class="modal panel-modal hide fade in">
      <h4>微信关注</h4>
      <div class="panel-body"><img alt="微信关注" width="128" height="128" src="/wp-content/themes/runoob/assets/images/qrcode.png"></div> 
    </div>
  </div>

  <div class="hide_box"></div>
    <div class="shang_box">
      <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭"><img src="//static.runoob.com/images/dashang/close.jpg" alt="取消" /></a>
       
      <div class="shang_tit">
        <p>感谢您的支持，我会继续努力的!</p>
      </div>
      <div class="shang_payimg">
        <img src="//static.runoob.com/images/dashang/weipayimg.png" alt="扫码支持" title="扫一扫" />
      </div>
        <div class="pay_explain">扫码打赏，你说多少就多少</div>
      <div class="shang_payselect">
        <div class="pay_item  checked" data-id="weipay">
          <span class="radiobox"></span>
          <span class="pay_logo"><img src="//static.runoob.com/images/dashang/wechat.jpg" alt="微信" /></span>
        </div>
        <div class="pay_item" data-id="alipay">
          <span class="radiobox"></span>
          <span class="pay_logo"><img src="//static.runoob.com/images/dashang/alipay.jpg" alt="支付宝" /></span>
        </div>
        
      </div>
      <div class="shang_info">
        <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦</p>
        <p><a href="//c.runoob.com/codedemo/5348" target="_blank"><span style=" font-size: 14px;color: #000;font-weight: bold;">点我查看本站打赏源码！</span></a></p>
      </div>
    </div>
  <div id="testClick"></div>
 <div style="display:none;">
 
 <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?3eec0b7da6548cf07db3bc477ea905ee";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84264393-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-84264393-2');
</script>
</div>
<script>
window.jsui={
    www: '//wwww.runoob.com',
    uri: '//www.runoob.com/wp-content/themes/runoob'
};
</script>
<style>
ol,ul{list-style:none}.cd-switcher a{text-decoration:none;outline:0}.cd-switcher a:hover{text-decoration:underline}a:focus{outline:0;-moz-outline:0}.main_nav{width:300px;height:60px;margin:60px auto 10px auto}.main_nav li{float:left;width:60px;margin-right:10px;font-size:16px;padding:.6em 1em;border-radius:3em;background:#2f889a;text-align:center}.main_nav li a{color:#fff}.errtip{background-color:#fceaea;color:#db5353;padding:8px 15px;font-size:14px;border:1px solid #fc9797;border-radius:5px}.cd-user-modal{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(52,54,66,0.9);z-index:3;overflow-y:auto;cursor:pointer;visibility:hidden;opacity:0;-webkit-transition:opacity .3s 0,visibility 0 .3s;-moz-transition:opacity .3s 0,visibility 0 .3s;transition:opacity .3s 0,visibility 0 .3s}.cd-user-modal.is-visible{visibility:visible;opacity:1;-webkit-transition:opacity .3s 0,visibility 0 0;-moz-transition:opacity .3s 0,visibility 0 0;transition:opacity .3s 0,visibility 0 0}.cd-user-modal.is-visible .cd-user-modal-container{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}.cd-user-modal-container{position:relative;width:90%;max-width:500px;background:#FFF;margin:3em auto 4em;cursor:auto;border-radius:.25em;-webkit-transform:translateY(-30px);-moz-transform:translateY(-30px);-ms-transform:translateY(-30px);-o-transform:translateY(-30px);transform:translateY(-30px);-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;transition-property:transform;-webkit-transition-duration:.3s;-moz-transition-duration:.3s;transition-duration:.3s}.cd-user-modal-container .cd-switcher:after{content:"";display:table;clear:both}.cd-user-modal-container .cd-switcher li{width:50%;float:left;text-align:center}.cd-user-modal-container .cd-switcher li:first-child a{border-radius:.25em 0 0 0}.cd-user-modal-container .cd-switcher li:last-child a{border-radius:0 .25em 0 0}.cd-user-modal-container .cd-switcher a{font-size:1.2em;font-weight:bold;display:block;width:100%;height:50px;line-height:50px;background:#e8f1e2;color:#96b880}.cd-user-modal-container .cd-switcher a.selected{background:#FFF;color:#505260}@media only screen and (min-width:600px){.cd-user-modal-container{margin:4em auto}.cd-user-modal-container .cd-switcher a{height:70px;line-height:70px}}.cd-form{padding:1.4em}.cd-form .fieldset{position:relative;margin:1.4em 0}.cd-form .fieldset:first-child{margin-top:0}.cd-form .fieldset:last-child{margin-bottom:0}.cd-form label{font-size:16px;font-size:.875rem}.cd-form label.image-replace{display:inline-block;position:absolute;left:15px;top:50%;bottom:auto;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);height:20px;width:20px;overflow:hidden;text-indent:100%;white-space:nowrap;color:transparent;text-shadow:none;background-repeat:no-repeat;background-position:50% 0}.cd-form label.cd-username{background-image:url("/wp-content/themes/runoob/assets/img/cd-icon-username.svg")}.cd-form label.cd-email{background-image:url("/wp-content/themes/runoob/assets/img/cd-icon-email.svg")}.cd-form label.cd-password{background-image:url("/wp-content/themes/runoob/assets/img/cd-icon-password.svg")}.cd-form input{margin:0;padding:0;border-radius:.25em}.cd-form input.full-width{width:80%}.cd-form input.full-width2{width:94%}.cd-form input.has-padding{padding:12px 20px 12px 50px}.cd-form input.has-border{border:1px solid #d2d8d8;-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none}.cd-form input.has-border:focus{border-color:#98b880;box-shadow:0 0 5px rgba(52,54,66,0.1);outline:0}.cd-form input.has-error{border:1px solid #d76666}.cd-form input[type=password]{padding-right:65px}.cd-form input[type=submit]{padding:16px 0;cursor:pointer;background:#96b97d;color:#FFF;font-weight:bold;border:0;-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none;font-size:1.2em;font-weight:bold}.no-touch .cd-form input[type=submit]:hover,.no-touch .cd-form input[type=submit]:focus{background:#3599ae;outline:0}@media only screen and (min-width:600px){.cd-form{padding:2em}.cd-form .fieldset{margin:2em 0}.cd-form .fieldset:first-child{margin-top:0}.cd-form .fieldset:last-child{margin-bottom:0}.cd-form input.has-padding{padding:16px 20px 16px 50px}.cd-form input[type=submit]{padding:16px 0}}.cd-close-form{display:block;position:absolute;width:40px;height:40px;right:0;top:-40px;background:url("/wp-content/themes/runoob/assets/img/cd-icon-close.svg") no-repeat center center;text-indent:100%;white-space:nowrap;overflow:hidden}@media only screen and (min-width:1170px){}#cd-login,#cd-signup,#cd-reset-password{display:none}#cd-login.is-selected,#cd-signup.is-selected,#cd-reset-password.is-selected{display:block}
</style>
<div class="cd-user-modal"> 
	<div class="cd-user-modal-container">
		<ul class="cd-switcher">
			<li><a href="javascript:;">用户登录</a></li>
			<li><a href="javascript:;">注册新用户</a></li>
		</ul>

		<div id="cd-login"> <!-- 登录表单 -->
			<div class="cd-form">
				<p class="fieldset">
					<label class="image-replace cd-username" for="signin-username">用户名</label>
					<input class="full-width has-padding has-border" id="signin-username" name=username type="text" placeholder="输入用户名">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signin-password">密码</label>
					<input class="full-width has-padding has-border" id="signin-password" name="password" type="password"  placeholder="输入密码">
				</p>
				
				<p class="fieldset">
					<input type="checkbox" id="remember-me" checked>
					<label for="remember-me">记住登录状态</label>
          <a href="//www.runoob.com/reset-password" style="float: right;padding-right: 20px;" target="_blank">忘记密码？</a>
				</p>
 				<input type="hidden" name="action" value="signin">
				<p class="fieldset">
					<input class="full-width2" type="submit" value="登 录">
				</p>
        <div class="err-msg"></div>
			</div>
		</div>

		<div id="cd-signup"> <!-- 注册表单 -->
			<div class="cd-form">
				<p class="fieldset">
					<label class="image-replace cd-password" for="verifycode">邀请码</label>
					<input class="full-width has-padding has-border" id="signup-verifycode" name="verifycode" type="text"  placeholder="输入邀请码">
				</p>
				<p class="fieldset">
					<label class="image-replace cd-username" for="signup-username">用户名</label>
					<input class="full-width has-padding has-border" id="signup-username" name="name" type="text" placeholder="输入用户名">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-email" for="signup-email">邮箱</label>
					<input class="full-width has-padding has-border" name="email" id="signup-email" type="email" placeholder="输入mail">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signup-password">密码</label>
					<input class="full-width has-padding has-border" id="signup-password" name="password" type="password"  placeholder="输入密码">
				</p>
				<p class="fieldset">
					<label class="image-replace cd-password" for="signup-password2">重复输入密码</label>
					<input class="full-width has-padding has-border" id="signup-password2" name="password2" type="password"  placeholder="重复输入密码">
				</p>
				
				<!-- 
				<p class="fieldset">
					<input type="checkbox" id="accept-terms">
					<label for="accept-terms">我已阅读并同意 <a href="javascript:;">用户协议</a></label>
				</p>
				 -->
				 
				 <input type="hidden" name="action" value="signup">
				<p class="fieldset">
					<input class="full-width2" type="submit" value="注册新用户">
				</p>
				<p class="fieldset">
				  <a href="//www.runoob.com/w3cnote/runoob-user-test-intro.html#invite" target="_blank">如何获取邀请码？</a>
				  </p>
				<div class="err-msg"></div>
			</div>

		</div>

		<a href="javascript:;" class="cd-close-form">关闭</a>
	</div>
</div> 
<script src="/wp-content/themes/runoob/assets/js/main.js?v=1.189"></script>
<script src="//static.runoob.com/assets/libs/hl/run_prettify.js"></script>
</body>
</html>