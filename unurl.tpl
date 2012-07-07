<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <head>
    <title>Virtual URL</title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']?>/static/main.css">
    </head>
    <body topmargin=3> 
    <div id=gbar><nobr><a href="/"><span>Vurl</span></a> <b><span>UN.url</span></b>
    </nobr></div> 
    <div id=gbh_left></div>
    <div id=gbh_right></div> 
    <center>
    <br clear=all> 
<img src='http://<?php echo $_SERVER['HTTP_HOST']?>/static/logo2.png' border=0 alt="UN.url" title="UN.url" id=logo><br> 
          <form action="/un.url" method="post">
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
            <div><input type="submit" value="还原网址"></div>
          </form>
          <br>
          <p><span class=noti><b>还原的API正在开发，近期放上</b></span></p>
          <br>
          <p><span class=scheme>填入短地址点一下还原网址,你就可以得到长地址了</span></p>
          <br> 
          <p><span>&copy;2010
- <a href="<?php echo $blog;?>">隐私权政策</a> - <a
    href="mailto:tokune@gmail.com">意见反映</a> - <img
    id=sae_logo src="http://static.sae.sina.com.cn/image/poweredby/poweredby.png"
    alt="Powered by Sina App Engine" /></span></p> </center> </body>
          
