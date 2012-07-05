<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <head>
    <title>Virtual URL</title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']?>/static/main.css">
    </head>
    <body topmargin=3> 
    <div id=gbar><nobr><b><span>Vurl</span></b> <a
    href="/un.url"><span>UN.url</span></a> 
    </nobr></div> 
    <div id=gbh_left></div>
    <div id=gbh_right></div> 
    <center>
    <br clear=all> 
<img src='http://<?php echo $_SERVER['HTTP_HOST']?>/static/logo.png' border=0 alt="Virtual URL" title="Virtual URL" id=logo><br> 
          <form action="/" method="post">
            <div><textarea name="url" rows="2" cols="63"></textarea></div>
            <?php if(isset($maked)&&$maked) { ?>
                <a href="<?php echo $maked_url;?>"><?php echo $maked_url;?></a><br>
                <embed height="20" width="64" flashvars="clipboard=<?php echo $maked_url;?>" 
                quality="high" bgcolor="#eeeeee" ame="copy" id="copy" 
                pluginspage="http://www.macromedia.com/go/getflashplayer" 
                mediawrapchecked="true" src="/static/copy.swf" type="application/x-shockwave-flash" 
                splayername="SWF" tplayername="SWF"><br><br>
            <?php }else if(isset($maked)&&!$maked){ ?>
                <p><span class=error><b>输入网址有误!</b></span></p>
            <?php }?>
            <div><input type="submit" value="提交网址"></div>
          </form>
          <br>
          <p><span class=noti><b>已有<?php echo $url_num;?>个网址登记!</b></span></p>
          <br>
          <p><span class=scheme>复制就无所谓啦,手打的话可以省http://试试,也行的。</span></p>
          <br>
          <div id="bookmark">
          <span>把它</span><p class="shortcut"><a href="javascript:var d=document,w=window,f='http://<?php echo $host;?>/bm.php?url='+encodeURIComponent(location.href),l=d.location,e=encodeURIComponent,p='';a=function(){if(!w.open(f+p,'sharer','toolbar=0,status=0,resizable=0,width=600,height=300,left=175,top=150'))l.href=f+'.new'+p};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else{a()}void(0);">-&gt;VurL!</a></p> 
          <span>拖到书签栏,当你想要得到当然页面的短地址,就点它一下.它就会弹窗给出短地址你.</span>
          </div>
          <br>
          <p><span>&copy;2010
- <a href="<?php echo $blog;?>">隐私权政策</a> - <a
    href="mailto:tokune@gmail.com">意见反映</a> - <img
    id=sae_logo src="http://static.sae.sina.com.cn/image/poweredby/poweredby.png"
    alt="Powered by Sina App Engine" /></span></p> </center> </body>
          
