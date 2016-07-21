<?php
/**
 * Created by PhpStorm.
 * User: usuario-PC
 * Date: 18-07-2016
 * Time: 04:26 PM
 */
?>
<style type="text/css">
    .container{
        margin: 0px auto;
        width: 700px;
    }
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:600);
    /* Menu CSS */
    #cssmenu,#cssmenu > ul{
        background:url(http://3.bp.blogspot.com/-V2tGyRV9wIY/UjqTVGOrmXI/AAAAAAAABdQ/XYS2v7U8DUI/s1600/highlight-bg.png) repeat;
        padding-bottom:3px;
        font-family:'Open Sans',sans-serif;
        font-weight:600
    }
    #cssmenu:before,#cssmenu:after,#cssmenu > ul:before,#cssmenu > ul:after{
        content:'';
        display:table
    }
    #cssmenu:after,#cssmenu > ul:after{
        clear:both
    }
    #cssmenu{
        width:auto;zoom:1
    }
    #cssmenu > ul{
        background:url(http://1.bp.blogspot.com/-fPLR6IIW7dU/UjqTVZksJTI/AAAAAAAABdU/EadZ1JqTCX8/s1600/menu-bg.png) repeat;
        margin:0;
        padding:0;
        position:relative
    }
    #cssmenu > ul li{
        margin:0;
        padding:0;
        list-style:none
    }
    #cssmenu > ul > li{
        float:left;
        position:relative
    }
    #cssmenu > ul > li > a{
        padding:23px 26px;
        display:block;
        color:white;
        font-size:13px;
        text-decoration:none;
        text-transform:uppercase;
        text-shadow:0 -1px 0 #9e3825;
        text-shadow:0 -1px 0 rgba(116,37,2,0.7);
        line-height:18px
    }
    #cssmenu > ul > li:hover > a{
        background:url(http://1.bp.blogspot.com/-efkMXp2H1cU/UjqSzHrMVFI/AAAAAAAABdI/TbVQZkLhC4I/s1600/hover.png) repeat;
        text-shadow:0 -1px 0 #97321f;
        text-shadow:0 -1px 0 rgba(122,42,26,0.64)
    }
    #cssmenu > ul > li > a > span{
        line-height:18px
    }
    #cssmenu > ul > li.active > a,#cssmenu > ul > li > a:active{
        background:url(http://1.bp.blogspot.com/-hKJMJ6tutvA/UjqSigUJTSI/AAAAAAAABdA/EicRvUY_mlw/s1600/active.png) repeat
    }
    #cssmenu > ul ul{
        opacity:0;
        visibility:hidden;
        position:absolute;
        top:120px;
        background:url(http://3.bp.blogspot.com/-V2tGyRV9wIY/UjqTVGOrmXI/AAAAAAAABdQ/XYS2v7U8DUI/s1600/highlight-bg.png) repeat;
        margin:0;
        padding:0;
        z-index:-1
    }
    #cssmenu > ul li:hover ul{
        opacity:1;
        visibility:visible;
        margin:0;
        color:#000;
        z-index:2;
        top:64px;
        left:0
    }
    #cssmenu > ul ul:before{
        content:'';
        position:absolute;
        top:-10px;
        width:100%;
        height:20px;
        background:transparent
    }
    #cssmenu > ul ul li{
        list-style:none;
        padding:0;
        margin:0;
        width:100%
    }
    #cssmenu > ul ul li a{
        padding:18px 26px;
        display:block;
        color:#393939;
        font-size:13px;
        text-decoration:none;
        text-transform:uppercase;
        width:150px;
        border-left:4px solid transparent;
        -webkit-transition:all 0.35s ease-in-out;
        -moz-transition:all 0.35s ease-in-out;
        -ms-transition:all 0.35s ease-in-out;
        transition:all 0.35s ease-in-out;
        text-shadow:0 1px 0 white
    }
    #cssmenu > ul ul li a:hover{
        border-left:4px solid #de553b;
        background:url(http://1.bp.blogspot.com/-efkMXp2H1cU/UjqSzHrMVFI/AAAAAAAABdI/TbVQZkLhC4I/s1600/hover.png) repeat;
        color:white;
        text-shadow:0 1px 0 black;
    }
    #cssmenu > ul ul li a:active{
        background:url(http://1.bp.blogspot.com/-fPLR6IIW7dU/UjqTVZksJTI/AAAAAAAABdU/EadZ1JqTCX8/s1600/menu-bg.png) repeat
    }
</style>
<!-- customize your menus Links -->
<div class="container">
<div id="cssmenu">
    <ul>
        <li class="active"><a href="index.html"><span>Home</span></a></li>
        <li class="has-sub"><a href="#"><span>Products</span></a>
            <ul>
                <li><a href="#"><span>Widgets</span></a></li>
                <li><a href="#"><span>Menus</span></a></li>
                <li class="last"><a href="#"><span>Products</span></a></li>
            </ul>
        </li>
        <li class="has-sub"><a href="#"><span>Company</span></a>
            <ul>
                <li><a href="#"><span>About</span></a></li>
                <li class="last"><a href="#"><span>Location</span></a></li>
            </ul>
        </li>
        <li class="last"><a href="#"><span>Contact</span></a></li>
    </ul>
</div>
</div>