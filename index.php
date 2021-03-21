<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
    <title>SniffRx</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
	<link rel="stylesheet" href="./css/1.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/3.css">
	<link rel="stylesheet" href="./css/4.css">
	<link rel="stylesheet" href="./css/5.css">
	<link rel="stylesheet" href="./css/7.css">
	<link rel="stylesheet" href="./css/8.css">
	<link rel="stylesheet" href="./css/10.css">
	<link rel="stylesheet" href="./css/11.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="splat-toggle">	
  <div class="rain front-row"></div>
  <!--div class="rain back-row"></div-->
  <div class="b-popup" id="popup1" style="display: none;">
    <div class="b-popup-content">
	<input type="range" min="0" max="50" value="30" class="slider" id="myRange">
	<script>
		var audio = document.getElementById("audioplayer");
		var slider = document.getElementById("myRange");
		window.setInterval(function(){audio.volume = slider.value / 100;}, 10);
	</script>
        <!--li onclick="audio.volume = 0.01">10</li>
        <li onclick="audio.volume = 0.02">20</li>
        <li onclick="audio.volume = 0.03">30</li>
        <li onclick="audio.volume = 0.04">40</li>
        <li onclick="audio.volume = 0.05">50</li>
        <li onclick="audio.volume = 0.06">60</li>
        <li onclick="audio.volume = 0.07">70</li>
        <li onclick="audio.volume = 0.08">80</li>
        <li onclick="audio.volume = 0.09">90</li>
        <li onclick="audio.volume = 0.1">100</li-->
    <a href="javascript:PopUpHide()">Hide</a>
    </div>
</div>
  <div class="menumusic">
	<ul class="menumusic_w">
		<li onclick="play_audio('play')"><img src="./images/play.png"></li>
		<li onclick="play_audio('stop')"><img src="./images/pause.png"></li>
		<li onclick="PopUpShow()">V</li>
		<li></li>		
		<li id="glitchbtn" class="glitch2" data-text="G" onclick="glitch()">G</li>
		<li id="neonbtn" class="neon2" data-text="N" onclick="neon()">N</li>
	</ul>
  </div>
<video id="audioplayer" autoplay="autoplay" name="media" hidden></video>
<div class="link" style="top:54%;">
	<div id="linkr" class="linkr"><!--a class="txt anim-text-flow" href="//vk.com/sniffrx" target="_blank">VK</a--><i style="font-size: 1.75em;" class="fa fa-vk fa-2x icon-3d"></i></div>
	<div id="linkr" class="linkr"><!--a class="txt anim-text-flow" href="tg://resolve?domain=SniffRx" target="_blank">Telegram</a--><i style="font-size: 1.75em;" class="fa fa-telegram fa-2x icon-3d"></i></div>
	<div id="linkr" class="linkr"><!--a class="txt anim-text-flow" href="//github.com/SniffRx" target="_blank">Github</a--><i style="font-size: 1.75em;" class="fa fa-github fa-2x icon-3d"></i></div>
</div>
<div class="link link2">
	<div id="music" class="linkr"></div>
	<div class="value" id="server-full-online"></div>
</div>
<p id="def" class="line-1 anim-typewriter">SniffRx</p>
<div id="glitch" class="glitch" data-text="SniffRx">SniffRx</div>
<div id="neon" class="text-effect">
  <h1 class="neon" data-text="SniffRx" contenteditable>SniffRx</h1>
  <div class="gradient"></div>
  <div class="spotlight"></div>
</div>
</body>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
</html>
<css-doodle id="bgcolor" use="var(--rule)"></css-doodle>
<div id="particles-js" style="position:absolute;width:100%;height:100%;margin:0;padding:0;bottom:0;left:0;"></div>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/app.js"></script>
	<script src="./js/1.js"></script>
	<script src="./js/2.js"></script>
	<script src="./js/3.js"></script>
	<script src="./js/player.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.6.2/css-doodle.min.js"></script>
<script>
//var _0x4dac=['innerHTML','sounds/Secret\x20Base\x20_Kimi\x20ga\x20Kureta\x20Mono_\x2010\x20Years\x20After\x20-\x20Ano\x20Hana.mp3','sounds/Onepunch\x20Man\x20-\x20The\x20Hero.mp3','replace','sounds/Sword\x20Art\x20Online\x20Opening\x201.mp3','sounds/狂乱Hey\x20Kids!!\x20[chiptune]\x20-\x20Noragami\x20Aragoto\x20OP.mp3','floor','addEventListener','sounds/','sounds/Unravel\x20-\x20Tokyo\x20Ghoul.mp3','sounds/Death\x20note\x20Opening\x201.mp3','slice','sounds/Fullmetal\x20alchemist\x20-\x20Opening\x201.mp3','random','sounds/Date\x20A\x20Live\x20Opening\x208-Bit.mp3','audioplayer','src','split','sounds/Tengen\x20Toppa\x20Gurren\x20Lagann\x20OP\x20-\x20Sorairo\x20Days.mp3','length','music'];(function(_0x468dca,_0x4dacee){var _0x59f8fb=function(_0x3e745e){while(--_0x3e745e){_0x468dca['push'](_0x468dca['shift']());}};_0x59f8fb(++_0x4dacee);}(_0x4dac,0x18c));var _0x59f8=function(_0x468dca,_0x4dacee){_0x468dca=_0x468dca-0x0;var _0x59f8fb=_0x4dac[_0x468dca];return _0x59f8fb;};var lastSong=null;var selection=null;var playlist=[_0x59f8('0x11'),_0x59f8('0x7'),_0x59f8('0xd'),_0x59f8('0xf'),_0x59f8('0x5'),_0x59f8('0x4'),_0x59f8('0x0'),_0x59f8('0xc'),_0x59f8('0x8')];var player=document['getElementById'](_0x59f8('0x12'));player['autoplay']=!![];player[_0x59f8('0xa')]('ended',selectRandom);function selectRandom(){while(selection==lastSong){selection=Math[_0x59f8('0x9')](Math[_0x59f8('0x10')]()*playlist[_0x59f8('0x1')]);}lastSong=selection;player[_0x59f8('0x13')]=playlist[selection];songname=playlist[selection];songname=songname[_0x59f8('0x14')](_0x59f8('0xb'));songname=songname[_0x59f8('0xe')](0x1);songname=songname['toString']()[_0x59f8('0x6')](/.mp3/,'');document['getElementById'](_0x59f8('0x2'))[_0x59f8('0x3')]=songname;}selectRandom();player['play']();
var _0x16d2=['slider','value','left','0\x200','.volume','css','fast','.tooltip','background-position','fadeOut','hide','#slider','min','0\x20-50px','0\x20-25px'];(function(_0x4b60f2,_0x16d22b){var _0x558267=function(_0x1caacb){while(--_0x1caacb){_0x4b60f2['push'](_0x4b60f2['shift']());}};_0x558267(++_0x16d22b);}(_0x16d2,0x1a0));var _0x5582=function(_0x4b60f2,_0x16d22b){_0x4b60f2=_0x4b60f2-0x0;var _0x558267=_0x16d2[_0x4b60f2];return _0x558267;};$(function(){var _0x2e05bc=$(_0x5582('0x0')),_0x525ad8=$(_0x5582('0xb'));_0x525ad8[_0x5582('0xe')]();_0x2e05bc[_0x5582('0x4')]({'range':_0x5582('0x1'),'min':0x1,'value':0x23,'start':function(_0x438761,_0x2974b4){_0x525ad8['fadeIn'](_0x5582('0xa'));},'slide':function(_0x4d8a46,_0x257037){var _0x4b55e2=_0x2e05bc[_0x5582('0x4')](_0x5582('0x5')),_0x540e01=$(_0x5582('0x8'));_0x525ad8['css'](_0x5582('0x6'),_0x4b55e2)['text'](_0x257037[_0x5582('0x5')]);if(_0x4b55e2<=0x5){_0x540e01[_0x5582('0x9')]('background-position',_0x5582('0x7'));}else if(_0x4b55e2<=0x19){_0x540e01[_0x5582('0x9')](_0x5582('0xc'),_0x5582('0x3'));}else if(_0x4b55e2<=0x4b){_0x540e01[_0x5582('0x9')](_0x5582('0xc'),_0x5582('0x2'));}else{_0x540e01[_0x5582('0x9')]('background-position','0\x20-75px');};},'stop':function(_0x305b8d,_0xf24cfd){_0x525ad8[_0x5582('0xd')](_0x5582('0xa'));}});});
var _0x2bd3=['<span>','</span><span>','trim','join','.txt','split','</span>'];(function(_0x4ce07f,_0x2bd305){var _0x506aff=function(_0x471a42){while(--_0x471a42){_0x4ce07f['push'](_0x4ce07f['shift']());}};_0x506aff(++_0x2bd305);}(_0x2bd3,0x1a7));var _0x506a=function(_0x4ce07f,_0x2bd305){_0x4ce07f=_0x4ce07f-0x0;var _0x506aff=_0x2bd3[_0x4ce07f];return _0x506aff;};$(_0x506a('0x1'))['html'](function(_0x44ae46,_0x3e7b95){var _0x228431=$[_0x506a('0x6')](_0x3e7b95)[_0x506a('0x2')]('');return _0x506a('0x4')+_0x228431[_0x506a('0x0')](_0x506a('0x5'))+_0x506a('0x3');});
</script>

<script>
$(document).ready(function(){PopUpHide();});function PopUpShow(){$("#popup1").show();}function PopUpHide(){$("#popup1").hide();}
</script>





<script>
var lastSong = null;
var selection = null;
var playlist = [	"sounds/Date A Live Opening 8-Bit.mp3",
					"sounds/Sword Art Online Opening 1.mp3",
					"sounds/Death note Opening 1.mp3",
					"sounds/Fullmetal alchemist - Opening 1.mp3",
					"sounds/Onepunch Man - The Hero.mp3",
					"sounds/Secret Base _Kimi ga Kureta Mono_ 10 Years After - Ano Hana.mp3",
					"sounds/Tengen Toppa Gurren Lagann OP - Sorairo Days.mp3",
					"sounds/Unravel - Tokyo Ghoul.mp3",
					"sounds/狂乱Hey Kids!! [chiptune] - Noragami Aragoto OP.mp3"
				];
var player = document.getElementById("audioplayer");
player.autoplay=true;
player.addEventListener("ended", selectRandom);
function selectRandom(){
	while(selection == lastSong){
		selection = Math.floor(Math.random() * playlist.length);
		}
		lastSong = selection;
		player.src = playlist[selection];
		songname = playlist[selection];
		songname = songname.split("sounds/");
		//songname = songname.slice(1);
		//songname = songname.split(".mp3");
		songname = songname.slice(1);
		songname = songname.toString().replace(/.mp3/, '');
		//songname = songname.toString().replace('/(^sounds//)|/(.mp3,$/)|/(.mp3$/)', '');
		//songname = songname.toString().replace((^sounds/)|(.mp3,$)|(.mp3));
		document.getElementById('music').innerHTML=songname;
		}
		selectRandom();
		player.play();
</script>