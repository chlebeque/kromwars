<?php 
	//define('BURL','http://www.kromwars.cz/'); 
	define('BURL','http://localhost/kromwars/'); 
?>
<!DOCTYPE html> 
<html lang="cs"> 
<head>
	<meta charset="utf-8" /> 
	<meta property="og:title" content="KROM WARS - EPIZODA II.">
	<meta property="og:image" content="http://www.kromwars.cz/img/KW_FB.png">
	<meta property="og:description" content="KROM WARS - 2. ročník největší letní freeski akce. Vybraní jezdci z celé střední Evropy. 31. srpna 2013 koupaliště Hulín. To nepochopíš!"/>

	<title>KROM WARS - EPIZODA II.</title> 
	<link rel="shortcut icon" href="<?php echo BURL; ?>favicon.ico" type="image/x-icon" /> 
	<link rel="stylesheet" href="<?php echo BURL; ?>css/styles.css" type="text/css" media="screen,projection,tv,handheld" /> 
	<link rel="stylesheet" href="<?php echo BURL; ?>css/fonts.css" type="text/css" media="screen,projection,tv,handheld" /> 
	<link rel="stylesheet" href="<?php echo BURL; ?>css/fonts2.css" type="text/css" media="screen,projection,tv,handheld" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo BURL; ?>css/jquery.lightbox.css" media="all" /> 
	
	<script type="text/javascript" src="<?php echo BURL; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo BURL; ?>js/jquery.carouFredSel.js"></script>
	<script type="text/javascript" src="<?php echo BURL; ?>js/jquery.lightbox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		
			$(".scroll").click(function(event){
				 event.preventDefault();
				 //calculate destination place
				 var dest=0;
				 if($(this.hash).offset().top > $(document).height()-$(window).height()){
					  dest=$(document).height()-$(window).height();
				 }else{
					  dest=$(this.hash).offset().top;
				 }
				 //go to destination
				 $('html,body').animate({scrollTop:dest}, 2000,'swing');
			 });
		
			$(".top a").mouseover(function () {
			  //$(".top").effect("shake", { times:3 }, 300);
			  
			  $(this).animate({"bottom": "+=5px"}, "fast");
			  $(this).animate({"bottom": "-=10px"}, "fast");
			  $(this).animate({"bottom": "+=5px"}, "fast");
			  
			});
			
			// $("#menu1").mouseover(function () { $("#flek").css({"left": "165px"}, "fast"); });
			// $("#menu2").mouseover(function () { $("#flek").css({"left": "240px"}, "fast"); });
			// $("#menu3").mouseover(function () { $("#flek").css({"left": "320px"}, "fast"); });
			// $("#menu4").mouseover(function () { $("#flek").css({"left": "470px"}, "fast"); });
			// $("#menu5").mouseover(function () { $("#flek").css({"left": "580px"}, "fast"); });
			// $("#menu6").mouseover(function () { $("#flek").css({"left": "670px"}, "fast"); });
			// $("#menu7").mouseover(function () { $("#flek").css({"left": "800px"}, "fast"); });
			
			// var i = 1;
			// $("#menu a").mouseover(function () {
				// $("#flek").hide();
				// $("#flek").fadeIn();
				// $("#flek").css({'rotation':'90deg'});
			// }).bind("mouseleave",function(){
					// $("#flek").hide();	
				// });
				  
			// $("#menu a").mouseout(function () {
				// //$("#flek").animate({"left": "960px"}, "fast");
				// $("#flek").hide();
			// });
			
			$(window).bind('scroll',function(e){
				parallaxScroll();
			});
			 
			function parallaxScroll(){
				var scrolled = $(window).scrollTop();
				$('#flare').css('top',(0-(scrolled*.15))+'px');
				//$('#master').css('backgroundPosition', '0 '+(0-(scrolled*.5))+'px');
				if(scrolled<350) {
					$('#container').css('backgroundPosition', '0 '+(160+(scrolled*0.5))+'px');
				}					
				//$('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
				//$('#parallax-bg3').css('top',(0-(scrolled*.75))+'px');
			}

		});
	</script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23623719-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body id="master">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&appId=230328023645329";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<a name="top" id="top"></a>
	
<?php
  $day   = 31;     // Day of the countdown
  $month = 8;      // Month of the countdown
  $year  = 2013;   // Year of the countdown
  $hour  = 12;     // Hour of the day (east coast time)
  $event = "New Year's Eve, 2011"; //event

   $calculation = ((mktime ($hour,0,0,$month,$day,$year) - time())/3600);
   $hours = intval($calculation);
   $days  = intval($hours/24);
/*
  mktime() http://www.php.net/manual/en/function.mktime.php
  time()   http://www.php.net/manual/en/function.time.php
  (int)    http://www.php.net/manual/en/language.types.integer.php
*/
?>


<h1 class="none">KROM WARS - epizoda II.</h1>
<p class="none">KROM WARS - 2. ročník největší letní freeski akce. Vybraní jezdci z celé střední Evropy. 3. září koupaliště Bajda Kroměříž. To nepochopíš!</p>


<div id="container_main">
	<div id="flare"></div>	
	<div id="container">

		<div id="header">

			<div id="countdown"><div id="leftdays"><?php echo $days; ?></div></div>
			<div id="fbbox">
				<div class="fb-like" data-href="https://www.facebook.com/KROMWARS" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</div>
			<div id="flek"></div>
			<div id="menu">
				<a href="#news" id="menu1" class="scroll"></a>
				<a href="#info" id="menu2" class="scroll"></a>
				<a href="#contest" id="menu3" class="scroll"></a>
				<a href="#afterparty" id="menu4" class="scroll"></a>
				<a href="#riders" id="menu5" class="scroll"></a>
				<a href="#gallery" id="menu6" class="scroll"></a>
				<a href="#partners" id="menu7" class="scroll"></a>
			</div>
			<div id="info_texts">
				<p><strong>SOBOTA</strong><br />
				31.8.2013<br />
				koupaliště HULÍN<br />
				<span class="span1">start 12:00 vstupné 120CZK</span></p>
				<p><a href="http://www.kromwars.cz">www.kromwars.cz</a></p>
			</div>
		</div>
			
		<div id="content">
		
			<div class="content">
				<iframe src="//player.vimeo.com/video/74466373" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/74466373">KROM WARS epizoda II.</a> from <a href="http://vimeo.com/user4836296">Martin Kaňůrek</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
			</div>
			
			<div class="content">
				<iframe src="http://player.vimeo.com/video/30041214?color=f04d4d" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/30041214">Krom Wars 2011 - Official video</a> from <a href="http://vimeo.com/user4836296">Martin Kaňůrek</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
			</div>
			
			<div class="content" id="news">
			
				<h2><span>LATEST NEWS</span></h2>
				
				<div class="news_box">
					<p class="date"><span>1.9.2013</span></p>
					<p>KROM WARS - EPIZODA II. je úspěšně u konce!<br />A máme tu výsledky:<br />
						1. Martin Horák<br />
						2. Dan Hanka<br />
						3. Robin Holub</p>
				</div>
				<div class="news_box">
					<p class="date"><span>29.8.2013</span></p>
					<p>Pokud nevíte, jak se dostat do Hulína z Kroměříže<br /> nebo spíš v noci z párty, tak využijte služeb<br />TAXI Feďa - 739 659 979, 731 589 076<br />Cena 150,-</p>
				</div>
				<div class="clearleft"></div>
				<div class="news_box">
					<p class="date"><span>18.8.2013</span></p>
					<p><img src="<?php echo BURL; ?>img/afterparty_map.jpg" width="800" /></p>
				</div>
				<div class="clearleft"></div>
				<div class="news_box">
					<p class="date"><span>3.8.2013</span></p>
					<p><iframe width="370" height="278" src="//www.youtube.com/embed/3XSVm9RK-lY?rel=0" frameborder="0" allowfullscreen></iframe></p>
				</div>
				<div class="news_box">
					<p class="date"><span>26.7.2013</span></p>
					<p>Lístky se dají zakoupit v&nbsp;předprodeji na&nbsp;koupališti v&nbsp;Hulíne nebo CHECKPOINT CHARLIE Streetwear shop (Kovářská 122, 76701 Kroměříž), dále pak&nbsp;Zlín (Houseboard skateshop, Zlaté jablko).</p>

					<p>Cena v&nbsp;předprodeji je 100,- obsahuje:<br />
					- vstup do&nbsp;areálu koupaliště<br />
					- vstup na párty (+ welcome drink Jagermeister)<br />
					- pro prvních 500 lidí pivo ZUBR zdarma<br />
					- možnost proletět&nbsp;se vrtulníkem (10 vybraných lidí)</p>
				</div>
				<div class="news_box">
					<p class="date"><span>24.6.2013</span></p>
					<p>Spuštěn web KROM WARS - EPIZODA II.</p>
				</div>
				
				<?php if(false) { ?>
				<div class="news_box">
					<p class="date"><span>4.9.2011</span></p>
					<p>KROM WARS je úspěšně u konce a máme tu výsledky:<br />
						1. Bartek SIBIGA (POL)<br />
						2. Marek SKÁLA (CZE)<br />
						3. Michal PEČ (CZE)</p>
				</div>
				<div class="news_box last">
					<p class="date"><span>18.7.2011</span></p>
					<p>Viliama Tomo, který na&nbsp;KW bohužel nepřijede, nahradí <a href="#riders">Johannes Drexl</a>, mladý zabiják z&nbsp;Německa, který se&nbsp;pravidelně umísťuje na&nbsp;stupních vítězů největších letních závodů v&nbsp;Evropě. Jeho technicky vypilované triky k&nbsp;dokonalosti budou velkou konkurencí pro&nbsp;všechny české závodníky. Je to jeden z&nbsp;největších favoritů na&nbsp;vítězství.</p>
				</div>
				<div class="clearleft"></div>				
				<div class="news_box">
					<p class="date"><span>11.7.2011</span></p>
					<p>KW se rozrůstá o další zemi, tentokrát to je Německo, které bude reprezentovat <a href="#riders">Thomas Trifonitchev</a>.</p>
				</div>
				<div class="news_box last">
					<p class="date"><span>9.7.2011</span></p>
					<p>Spuštěn web KROM WARS.</p>
				</div>

				<div class="news_box last">
					<p class="date"><span>3.6.2011</span></p>
					<p>Integer orci risus, venenatis id posuere in, consequat sed risus. Praesent lacinia nisi nec orci facilisis accumsan.</p>
					<p>Ut elit nisi, vestibulum vitae placerat id, vehicula eget augue. Suspendisse vitae augue eget urna convallis interdum. Nullam arcu diam, egestas sit amet facilisis sit amet, imperdiet eu mauris. Aliquam ac sem orci.</p>
				</div>
				<?php } ?>
				
				<div class="clearleft"></div>
				
				<img src="img/h_news.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			
		
			<div class="content" id="info">
				<h2><span>AKCE</span></h2>
				<div id="fb_box">
					<?php if(false) { ?>
					<div id="poster">
						<a href="img/KROMWARS_poster_websize.jpg" rel="lightbox[poster]"><img src="img/KROMWARS_poster_websize_n.jpg" alt="KROM WARS"></a>
					</div>
					<?php } ?>
					<div class="fb-like-box" data-href="https://www.facebook.com/KROMWARS" data-width="292" data-height="400" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"></div>
				</div>
				<h3><span>KROM WARS - EPIZODA II.</span></h3>
				
				<p>
				<strong>Start: 12:00 | Sobota 31.srpna 2013</strong><br />
				Skoky na lyžích do bazénu v centru města</p>
				<p><strong>Freeski BIGAIR contest</strong> pro 18 pozvaných závodníků,<br />
				nový olympijský sport (premiéra únor 2014 OH SOČI),<br />
				zastoupení (Česko, Švédsko, Švýcarsko, Polsko, Rakousko, Německo, Slovensko, Slovinsko, Maďarsko)<br />
				</p>
				<p>15m vysoká konstrukce z lešení <strong>(firma Ptáček)</strong></p>
				<p>
				koupaliště Hulín u Kroměříže, <br />GPS: 49°19'8.425"N, 17°28'10.369"E<br />
				</p>
				<p><strong>
				Vstupné: v předprodeji od půlky července za 100,-</strong>
				<br />(jako bonus pro prvních 500 lidí pivo zdarma, vstup na afterpárty zdarma a 3 časopisy od Publero.com)
				<br /><strong>Předprodejní místa:</strong><br />
					- obchod Chackpoint Charlie, Kovářská 122 Kroměříž<br />
					- kasa koupaliště Hulín<br />
					- Houseboard Zlín(Zlaté jablko)<br />
					- SNB Zezula - Brno
				</p>
				<p>
				pořádá <br /><a href="http://www.frcime.cz/" target="_blank">CK FRČÍME s.r.o.</a>
				</p>

				<h2><span>PROGRAM</span></h2>
				<h3><span>sobota 31.8.2013</span></h3>
				<ul>
					<li>11:00 - 13:00 - <strong>TRÉNINK</strong></li>
					<li>12:00 - Otevření areálu</li>
					<li>14:00 - 16:00 - <strong>KVALIFIKACE</strong></li>
					<li>16:00 - Trampolínová exhibice</li>
					<li>16:00 - 17:00 - Pauza - trampolíny, slackline, wakeboarding</li>
					<li>17:00 - start <strong>FINÁLE</strong></li>
					<li>18:30 - <strong>SUPERFINÁLE</strong></li>
					<li>19:00 - Vyhlášení vítězů a předání cen </li>
					<li>20:00 - Jägermeister <strong>AFTERPARTY</strong></li>
				</ul>

				<h2><span>DOPROVODNÝ PROGRAM:</span></h2>
				<ul>
					<li><strong>Trampolínová exhibice</strong> (olympijští reprezentanti z&nbsp;Rožnova pod Radhoštěm)</li>
					<li><strong>Splashdiving</strong></li>
					<li><strong>Wakeboarding</strong> exhibice</li>
					<li><strong>Slackline</strong> (chození po napnutém balančním popruhu)</li>
					<li><strong>Stolní fotbálky</strong></li>
					<li><strong>Indoboardy</strong></li>
				</ul>
				
				<h2><span>MÍSTO AKCE</span></h2>
				<div class="map"><iframe src="http://api4.mapy.cz/frame?url=http%3A%2F%2Fmapy.cz%2Fs%2F7CQZ&amp;z=19&amp;x=17.469316963281198&amp;y=49.31946385754299&amp;o=0&amp;layer=14&amp;move=1&amp;prev=1&amp;w=828&amp;h=500" width="828" height="500" style="border:none" frameBorder="0"></iframe></div>

				<h2><span>UBYTOVÁNÍ PRO VEŘEJNOST</span></h2>
				<p>
				<strong>Stanové městečko (500m):</strong>
				SA Hulín - 300m od afterpárty 
				rezervace u akreditace
				Cena: 50,-/noc 
				</p>
				<p>
				<strong>Penzion Hulín (100m):</strong>
				Vrchlického 83, Hulín  
				Tel. 777 678 913 
				<a href="mailto:jjou@centrum.cz">jjou@centrum.cz</a>
				</p>
				<p>
				<strong>Ubytovna AKTIMO (6km):</strong>
				Kaplanova 1759, Kroměříž  
				Tel. 573 336 232, 602 755 717 
				<a href="mailto:kromeriz@ubytovna-z.cz">kromeriz@ubytovna-z.cz</a> | 
				<a href="http://www.ubytovna-kromeriz.cz" target="_blank">www.ubytovna-kromeriz.cz</a>
				</p>
				<p>
				<strong>Ubytovna pozemní stavby Zlín (6km):</strong>
				Na Sádkách 3919, Kroměříž   
				Tel. 573 338 861,577 638 213, 604 297 157
				</p>
				<p>
				<strong>Penzion Černý Orel (7km):</strong>
				Velké náměstí 24, Kroměříž
				Tel. 573 332 769
				<a href="http://www.pension-kromeriz.cz/" target="_blank">http://www.pension-kromeriz.cz/</a>
				</p>
				<p>
				<strong>Penzion Malý Val (7km):</strong>
				Malý Val 1541, Kroměříž
				Tel. 776 799 300, 573 332 496-7
				<a href="http://www.malyval.cz/" target="_blank">http://www.malyval.cz/</a>
				</p>
				<p>
				<strong>Hotel Bouček (7km):</strong>
				Velké náměstí 108, Kroměříž
				Tel. 573 342 777, 724 564 244
				<a href="http://www.hotelboucek.cz/" target="_blank">http://www.hotelboucek.cz/</a> | 
				<a href="hotel@hotelboucek.cz">hotel@hotelboucek.cz</a>
				</p>
				<p>
				<strong>Hotel Hvězda (9km):</strong>
				Vážany 182, Kroměříž
				Tel. 573 339 914
				<a href="http://www.hvezdahotel.cz/" target="_blank">http://www.hvezdahotel.cz/</a> | 
				<a href="mailto:hvezdahotel@hvezdahotel.cz">hvezdahotel@hvezdahotel.cz</a>
				</p>
				<p>
				<strong>Penzion na Jízdáně (10km):</strong>
				Štěchovice 1352, Kroměříž
				Tel. 603 114 886
				<a href="http://www.na-jizdarne.cz/" target="_blank">http://www.na-jizdarne.cz/</a>
				</p>
				<p>
				<strong>Penzion Kroměříž:</strong>
				Moravcova 253, Kroměříž
				Tel. 604 544 557
				<a href="http://www.kromeriz-penzion.cz/" target="_blank">http://www.kromeriz-penzion.cz/</a>
				</p>
				
				<p>
				<strong>Ubytovna Fontána Holešov (9km):</strong>
				Palackého 777/16, Holešov
				Tel. 602 716 230
				<a href="http://www.ubytovnafontana.cz" target="_blank">www.ubytovnafontana.cz</a>
				</p>

				
				<h2><span>VAŠE KOMENTÁŘE</span></h2>
				<fb:comments href="http://www.kromwars.cz" num_posts="5" width="828" colorscheme="dark"></fb:comments>
				
				<img src="img/h_info.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			
			
			<div class="content" id="contest">
				<h2><span>SYSTÉM ZÁVODU</span></h2>
				
				<h3><span>Kvalifikace</span></h3>
				<ul>
					<li><strong>pro 18 pozvaných závodníků</strong></li>
					<li><strong>+ 1 divoká karta Videokvalifikace FREERIDE.CZ</strong></li>
					<li><strong>+ 1 divoká karta Contest BIG AIR Nový Hrozenkov 25. - 26. červenec 2013</strong></li>
					<li>2h JAM</li>
					<li>Postupuje 8 nejlepších</li>
				</ul>

				<h3><span>Finále (nejhorší ven)</span></h3>
				<ul>
					<li>8 závodníků, každý 2 skoky, nejhorší vypadává</li>
					<li>7 závodníků, každý 2 skoky, nejhorší vypadává</li>
					<li>6 závodníků, každý 2 skoky, nejhorší vypadává</li>
					<li>5 závodníků, každý 2 skoky, nejhorší vypadává</li>
					<li>4 závodníků, každý 2 skoky, nejhorší vypadává</li>
				</ul>
				
				<h3><span>Superfinále</span></h3>
				<ul>
					<li>Pro nejlepší 3 závodníky</li>
					<li>Každý 3 skoky</li>
					<li>Součet 2 nejlepších se počítá do konečného pořadí</li>
				</ul>

				<img src="img/h_contest.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			
				
			<div class="content" id="afterparty">
				<h2><span>AFTERPARTY</span></h2>
				<h3><span>Jägermeister AFTERPÁRTY</span></h3>
				<ul>
					<li><strong>SECRET PLACE - pártystan 400m²</strong></li>
					<li><strong>Start: 20:00</strong></li>
					<li>Welcome drink u vstupu <strong>ZDARMA</strong></li>
					<li><strong>Pro návštěvníky koupaliště vstup ZDARMA</strong><br /><br /></li>
					<li><strong>Bohatá tombola o věcné ceny za více než 50.000,-</strong></li>
					<li><strong>Breakdance REBORN SQUAD</strong> (Kroměříž)</li>
					<li>videoprojekce</li>
					<li>DJ Akvamen a DJ NobodyListen</li>
				</ul>

				<p><img src="<?php echo BURL; ?>img/afterparty_map.jpg" width="800" /></p>
				
				<img src="img/h_afterparty.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			
				
			<div class="content" id="riders">
				<script type="text/javascript">
				 $(document).ready(function(){

					$("#foo3").carouFredSel({
						direction	: "left",
						infinite	: true,
						circular	: true,
						items		: 1,
						pagination  : "#foo3_pag",
						scroll : {
									items			: 1,
									effect			: "easeOutBounce",
									duration		: 1000,							
									pauseOnHover	: true
								}
					});
				   
				 });
				 </script>
			
				<div class="html_carousel">
					<div id="foo3">
			
						<?php $i=0; ?>
						<?php $i++; ?>
						
					
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Thomas Trifonitchev'; ?>
						<?php $riders[$i]['flag'] = 'germany'; ?>
						<?php $riders[$i]['country'] = 'Německo'; ?>
						<?php $riders[$i]['city'] = 'GAPA'; ?>
						<?php $riders[$i]['born'] = '19 let'; ?>
						<?php $riders[$i]['nr'] = '19'; ?>
						<?php $riders[$i]['sponsors'] = 'Armada Skis & Outerwear , Smith Optics , Nilton Clothing'; ?>
						<?php $riders[$i]['text'] = 'Německý závodník, který se několikrát skvěle umístil na prestižních letních závodech Rauris Bigair v Rakousku.'; ?>
					
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Viliam Tomo'; ?>
						<?php $riders[$i]['flag'] = 'slovakia'; ?>
						<?php $riders[$i]['country'] = 'Slovensko'; ?>
						<?php $riders[$i]['city'] = 'Liptovský Mikuláš'; ?>
						<?php $riders[$i]['born'] = '21'; ?>
						<?php $riders[$i]['nr'] = '0'; ?>
						<?php $riders[$i]['sponsors'] = 'Apo, Life is Porno, Jibstar'; ?>
						<?php $riders[$i]['text'] = 'Slovenský reprezentant, jež se pravidelně účastní závodů světového poháru, přitom jeho nejlepší výsledek je 21.místo ze Sierra Nevada (Španělsko 2013).'; ?>
					
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Manuel Manca'; ?>
						<?php $riders[$i]['flag'] = 'swiss'; ?>
						<?php $riders[$i]['country'] = 'Švýcarsko'; ?>
						<?php $riders[$i]['city'] = 'Bauma'; ?>
						<?php $riders[$i]['born'] = '24'; ?>
						<?php $riders[$i]['nr'] = '69'; ?>
						<?php $riders[$i]['sponsors'] = 'Rossignol, Monster Energy, Deliver, POC, Hoven, Street-City'; ?>
						<?php $riders[$i]['text'] = 'Závodník ze Švýcarska, jehož triky jsou přesné jako proslulé švýcarské hodinky.'; ?>

						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Szczepan Karpiel'; ?>
						<?php $riders[$i]['flag'] = 'poland'; ?>
						<?php $riders[$i]['country'] = 'Polsko'; ?>
						<?php $riders[$i]['city'] = 'Zakopane'; ?>
						<?php $riders[$i]['born'] = '24'; ?>
						<?php $riders[$i]['nr'] = '23'; ?>
						<?php $riders[$i]['sponsors'] = 'Apo, Monster energy, electric, level gloves, twotip'; ?>
						<?php $riders[$i]['text'] = 'Pravidelný účastník největšího českého závodu O´Neil Soldiers v Deštné. Zatím každý rok se dostal do superfinále mezi nejlepší 4 závodníky. V roce 2012 tento velký závod dokonce vyhrál.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Oskar Pedersen'; ?>
						<?php $riders[$i]['flag'] = 'sweden'; ?>
						<?php $riders[$i]['country'] = 'Švédsko'; ?>
						<?php $riders[$i]['city'] = 'Lerum'; ?>
						<?php $riders[$i]['born'] = '24'; ?>
						<?php $riders[$i]['nr'] = '12'; ?>
						<?php $riders[$i]['sponsors'] = 'Sabotage SB, Faction Skis, Olimp, OWN CMPNY'; ?>
						<?php $riders[$i]['text'] = 'Uplatňuje severský styl, kde podmínky jsou jen pro ty nejtvrdší chlapy. Není zvyklý padat, a proto většinu triků dává s obrovským přehledem a ledovým klidem. '; ?>


						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Robin Holub'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Chodov'; ?>
						<?php $riders[$i]['born'] = '23'; ?>
						<?php $riders[$i]['nr'] = '7'; ?>
						<?php $riders[$i]['sponsors'] = 'K2, Dakine, RedBull, Marker, Chodov'; ?>
						<?php $riders[$i]['text'] = 'Několikanásobný mistr ČR v disciplíně slopestyle, každý ho zná, jako ROBHOL. Kdo měl tu čest poznat ho osobně, tak ten ví, že s Robinem se člověk prostě nenudí. Pokud si vsadíte na Robina, že vyhraje KROM WARS, rozhodně neprohloupíte. '; ?>
										
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Martin Horák'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Ostrava'; ?>
						<?php $riders[$i]['born'] = '29'; ?>
						<?php $riders[$i]['nr'] = '15'; ?>
						<?php $riders[$i]['sponsors'] = 'OX skis, Dakine, Meatfly, Jibstar'; ?>
						<?php $riders[$i]['text'] = 'Skvělý kamarád, bezvadný člověk, jedinečný svým ladným stylem. Jeden ze zakladatelů freeskiingu v ČR. Pro hodně lidí, černý kůň celého závodu!'; ?>
					
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Jirka Štiva'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Šumperk'; ?>
						<?php $riders[$i]['born'] = '27'; ?>
						<?php $riders[$i]['nr'] = '32'; ?>
						<?php $riders[$i]['sponsors'] = 'Vagus, snowpark Paprsek'; ?>
						<?php $riders[$i]['text'] = 'Kdo zná Štiváka, tak si tohle nemusí číst, kdo ho nezná, tak ať přijde do Hulína na bazén! Tenhle kluk prostě nejde přehlédnout. Speciálně do vody umí několik druhů dablů, takže se máme na co těšit. Na párty bude veselo!'; ?>
		
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Ondřej Beneš'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Praha'; ?>
						<?php $riders[$i]['born'] = '25'; ?>
						<?php $riders[$i]['nr'] = '9'; ?>
						<?php $riders[$i]['sponsors'] = 'Armada, Bigair.cz'; ?>
						<?php $riders[$i]['text'] = 'Pravděpodobně nejuhlazenější styl ze všech závodníků. V létě tráví čas v Novém Horzenkově na BIGAIRU, kde trénuje triky a stará se o místní areál. Uvidíme, jakou specialitu si pro nás připraví do Hulína.'; ?>
		
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Daniel Hanka'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Hradec Králové'; ?>
						<?php $riders[$i]['born'] = '23'; ?>
						<?php $riders[$i]['nr'] = '00'; ?>
						<?php $riders[$i]['sponsors'] = 'Faction,Your Gravitypark Destné'; ?>
						<?php $riders[$i]['text'] = 'Mistr stylu, pro mnohé nejlepší český závodník. V létě se mimo lyže věnuje INLINE bruslím, ve kterých je několikanásobný mistr ČR.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Šimon Bartík'; ?>
						<?php $riders[$i]['flag'] = 'czech'; ?>
						<?php $riders[$i]['country'] = 'Česká republika'; ?>
						<?php $riders[$i]['city'] = 'Praha'; ?>
						<?php $riders[$i]['born'] = '19'; ?>
						<?php $riders[$i]['nr'] = '13'; ?>
						<?php $riders[$i]['sponsors'] = 'Oxskis.com, shred optics, jibstar, Meatfly, Bigair.cz'; ?>
						<?php $riders[$i]['text'] = 'Hezounek, pohodář, obrovský talent. Holky přijďte se na něj podívat, nejen na bazén, ale i na párty bude se vám líbit.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Lukáš Tršo'; ?>
						<?php $riders[$i]['flag'] = 'hungary'; ?>
						<?php $riders[$i]['country'] = 'Maďarsko'; ?>
						<?php $riders[$i]['city'] = 'Budapešť'; ?>
						<?php $riders[$i]['born'] = '26'; ?>
						<?php $riders[$i]['nr'] = '87'; ?>
						<?php $riders[$i]['sponsors'] = 'Oakley, Monster, Armada skis'; ?>
						<?php $riders[$i]['text'] = 'Mafián z Maďarska, který se nebojí zkoušet těžké triky a nebolí ho ani spadnout. Rozhodně se s ním musí při závodě počítat.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Bine Žalohar'; ?>
						<?php $riders[$i]['flag'] = 'slovenia'; ?>
						<?php $riders[$i]['country'] = 'Slovinsko'; ?>
						<?php $riders[$i]['city'] = 'Kranj'; ?>
						<?php $riders[$i]['born'] = '27'; ?>
						<?php $riders[$i]['nr'] = '86'; ?>
						<?php $riders[$i]['sponsors'] = 'Oakley, 4FRNT, Dalbello, Skullkendy'; ?>
						<?php $riders[$i]['text'] = 'Tenhle Slovinec se freeskiingem hodně baví, pokud ho nenajdete ve snowparku, tak si zrovna dává lajnu někde poblíž v prašanu. V létě zdolává na surfu vlny v oceánu. Rád si život užívá.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Bartek Sibiga'; ?>
						<?php $riders[$i]['flag'] = 'poland'; ?>
						<?php $riders[$i]['country'] = 'Polsko'; ?>
						<?php $riders[$i]['city'] = 'Katowice'; ?>
						<?php $riders[$i]['born'] = '23'; ?>
						<?php $riders[$i]['nr'] = '99'; ?>
						<?php $riders[$i]['sponsors'] = 'Apo, Modest south wear'; ?>
						<?php $riders[$i]['text'] = 'Vítěz prvního ročníku KROM WARS 2011 v Kroměříži. V létě trénuje na Novém Zélandu. Můžeme se těšit na elegantní triky vyplněné technickými graby.'; ?>
						
						<?php $i++; ?>
						<?php $riders[$i]['name'] = 'Christian Jenny'; ?>
						<?php $riders[$i]['flag'] = 'austria'; ?>
						<?php $riders[$i]['country'] = 'Innsbruck'; ?>
						<?php $riders[$i]['city'] = 'Rakousko'; ?>
						<?php $riders[$i]['born'] = '22'; ?>
						<?php $riders[$i]['nr'] = '8'; ?>
						<?php $riders[$i]['sponsors'] = 'Fischer Sports, SAJAS Store, Gloryfy'; ?>
						<?php $riders[$i]['text'] = 'Velká neznámá z Rakouska. Často v létě trénuje v Tyrolském profi areálu Area 47, který plodí velké talenty. Rozhodně může příjemně překvapit.'; ?>
						
						
						
						
						
						<?php $id=0; foreach($riders as $rider) { $id++; ?>

						<div class="slide">
							<div class="slide_in">
								<div class="rider_gallery">
									<?php if(file_exists('img/gal/rider_g_'.$id.'.jpg')) { ?><a href="img/gal/rider_g_<?php echo $id; ?>.jpg" title="<?php echo $rider['name'] ?>" rel="lightbox[gal]"><img src="img/gal/rider_g_<?php echo $id; ?>t.jpg" width="50" height="50" alt="<?php echo $rider['name'] ?>"></a><?php } ?>
								</div>
								<?php if(file_exists('img/rider_k_'.$id.'.jpg')) { ?><img src="img/rider_k_<?php echo $id; ?>.jpg" width="488" height="340" alt="" class="rider_ksicht" /><?php } ?>
								<div class="rider_info">
									<h3><?php echo $rider['name']; ?><?php if(isset($rider['flag']) && $rider['flag']!="") { ?><img src="img/<?php echo $rider['flag']; ?>-flag.gif" alt="<?php echo $rider['flag']; ?>"><?php } ?></h3>
									<?php if(isset($rider['country']) && $rider['country']!="") { ?><p class="rider_country"><?php echo $rider['country']; ?></p><?php } ?>
									<?php if(isset($rider['city']) && $rider['city']!="") { ?><p class="rider_city"><?php echo $rider['city']; ?></p><?php } ?>
									<?php if(isset($rider['born']) && $rider['born']!="") { ?><p class="rider_born">Věk: <span><?php echo $rider['born']; ?></span></p><?php } ?>
									<?php if(isset($rider['nr']) && $rider['nr']!="") { ?><p class="rider_born">Číslo dresu: <span><?php echo $rider['nr']; ?></span></p><?php } ?>
									<?php if(isset($rider['sponsors']) && $rider['sponsors']!="") { ?><p class="rider_sponsors">Sponzoři: <span><?php echo $rider['sponsors']; ?></span></p><?php } ?>
									<?php if(isset($rider['text']) && $rider['text']!="") { ?><p class="rider_text"><?php echo $rider['text']; ?></p><?php } ?>
								</div>
							</div>
						</div>
						
						<?php } ?>

					</div>
					<div class="clearfix"></div>
					<div class="pagination" id="foo3_pag"></div>
				</div>

				<img src="img/h_riders.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			

	
					
			<div class="content" id="gallery">

				
				<h2><span>KROM WARS 2013</span></h2>
				
				<div class="gallery">
					<?php for($i=1;$i<=20;$i++) { ?>
					<a href="img/gallery/2013/<?php echo $i; ?>.jpg" class="gal_box" rel="lightbox[kw2013]" title="KROM WARS 2013"><img src="img/gallery/2013/<?php echo $i; ?>.jpg" alt="KROM WARS 2013" /></a>
					<?php } ?>
				</div>
				
				<div class="clearleft"></div>
				<div>
					<br /><br />
					<h3>Další fotky a články</h3>
					<a href="http://www.freeskiing.cz/galerie.asp?idg=545" target="_blank">Freeskiing.cz - Fotky z letošních Krom Wars - tentokrát z Hulína.</a><br />
					<a href="http://www.freeride.cz/ski/clanky/report/krom-wars-epizoda-ii--17889/" target="_blank">Freeride.cz - REPORT: Krom Wars - epizoda II.</a><br />
					<a href="http://www.freeride.cz/ski/clanky/videoedit/krom-wars-epizoda-ii-video--17986/" target="_blank">Freeride.cz - VIDEOEDIT: Krom Wars - epizoda II. video</a><br />
				</div>
				<div class="clearleft"></div>

			
				<h2><span>3D MODELS</span></h2>
				
				<div class="gallery">
					<?php for($i=1;$i<=8;$i++) { ?>
					<a href="img/gallery/3d/<?php echo $i; ?>.jpg" class="gal_box" rel="lightbox[kw3d]" title="3D model"><img src="img/gallery/3d/<?php echo $i; ?>.jpg" alt="" /></a>
					<?php } ?>
				</div>
				<div class="clearleft"></div>
				
				<h2><span>KROM WARS 2011</span></h2>

				<div class="gallery">
					<?php for($i=1;$i<=8;$i++) { ?>
					<a href="img/gallery/<?php echo $i; ?>.jpg" class="gal_box" rel="lightbox[kw2011]" title="KROM WARS 2011"><img src="img/gallery/<?php echo $i; ?>.jpg" alt="" /></a>
					<?php } ?>
				</div>
				<div class="clearleft"></div>

				<img src="img/h_gallery.png" class="header" alt="" />				
				<div class="top"><a href="#top" class="scroll"></a></div>
			</div>
			
			
			<div class="clear"></div>
			
		</div>
	


		<div id="footer">
			<div id="footer_inner">
				<a name="partners" id="partners"></a>
				<div id="footer_partners">
					<img  src="img/sponsors.png" usemap="#Image-Maps_5201307260414539" width="960" height="184" alt="" />
					<map id="_Image-Maps_5201307260414539" name="Image-Maps_5201307260414539">
						<area shape="rect" coords="376,85,432,119" href="http://www.maininvest.cz/" alt="main invest, a.s." title="main invest, a.s."    />
						<area shape="rect" coords="15,49,104,81" href="http://www.snowboard-zezula.cz/" alt="snowboard zezula - snowboard online shop v brně" title="snowboard zezula - snowboard online shop v brně"    />
						<area shape="rect" coords="236,43,286,93" href="http://vehicle.cz/" alt=".: vehicle .:. it's good to ride vehicle :." title=".: vehicle .:. it's good to ride vehicle :."    />
						<area shape="rect" coords="116,49,227,84" href="http://www.frcime.cz/" alt="frčíme" title="frčíme"    />
						<area shape="rect" coords="290,44,376,86" href="http://www.toyota-zlin.cz/" alt="toyota t motor zlín - autosalon - prodej a servis vozů toyota" title="toyota t motor zlín - autosalon - prodej a servis vozů toyota"    />
						<area shape="rect" coords="380,38,431,79" href="http://www.k2snow.cz" alt="k2 snow" title="k2 snow"    />
						<area shape="rect" coords="335,125,435,162" href="http://www.grafotyp.cz/" alt="grafotyp - tiskárna, kalendáře jeseníky, šumperk, výroby vizitek ..." title="grafotyp - tiskárna, kalendáře jeseníky, šumperk, výroby vizitek ..."    />
						<area shape="rect" coords="106,95,192,119" href="http://www.dakinecz.cz/" alt="dakinecz.cz: dakine eshop" title="dakinecz.cz: dakine eshop"    />
						<area shape="rect" coords="202,95,290,122" href="http://www.svahzlin.cz/" alt="svah zlín - areál j. šperky" title="svah zlín - areál j. šperky"    />
						<area shape="rect" coords="16,84,95,119" href="http://www.modikov.cz/" alt="modikov, s.r.o." title="modikov, s.r.o."    />
						<area shape="rect" coords="468,126,636,164" href="https://cs.publero.com/" alt="publero" title="publero"    />
						<area shape="rect" coords="138,121,186,158" href="http://www.vak-km.cz/" alt="vodovody a kanalizace kroměříž, as" title="vodovody a kanalizace kroměříž, as"    />
						<area shape="rect" coords="480,29,629,121" href="http://www.zubr.cz/" alt="pivovar zubr" title="pivovar zubr"    />
						<area shape="rect" coords="878,40,927,91" href="http://www.radiobeat.cz/" alt="radio beat : první bigbít u nás" title="radio beat : první bigbít u nás"    />
						<area shape="rect" coords="779,37,841,86" href="http://www.radiohey.cz/" alt="radio hey! - rock a sport - radio hey!" title="radio hey! - rock a sport - radio hey!"    />
						<area shape="rect" coords="691,38,738,89" href="http://www.kiss.cz/" alt="kiss radio" title="kiss radio"    />
						<area shape="rect" coords="792,84,838,122" href="http://www.freeride.cz/" alt="freeride.cz - portál o extrémních sportech" title="freeride.cz - portál o extrémních sportech"    />
						<area shape="rect" coords="676,127,754,165" href="http://zabil.cz/" alt="zabil.cz - extrémní zábava" title="zabil.cz - extrémní zábava"    />
						<area shape="rect" coords="860,128,944,168" href="http://freeski.downdays.eu/" alt="downdays.eu - european freeski community" title="downdays.eu - european freeski community"    />
						<area shape="rect" coords="772,128,853,163" href="http://freeskier.sk/" alt="freeskier.sk - skiers magsite" title="freeskier.sk - skiers magsite"    />
						<area shape="rect" coords="866,93,943,124" href="http://skimagazin.cz/" alt="SKI magazín" title="SKI magazín"    />
						<area shape="rect" coords="673,91,750,120" href="http://www.idnes.cz" alt="DNES" title="DNES"    />
						<area shape="rect" coords="293,88,370,122" href="http://www.jaegermeister.cz/" alt="Jägermeister" title="Jägermeister"    />
						<area shape="rect" coords="18,129,113,163" href="http://www.elexim.net/" alt="ELEXIM" title="ELEXIM"    />
						<area shape="rect" coords="207,126,319,162" href="http://www.kr-zlinsky.cz/" alt="Zlínský kraj" title="Zlínský kraj"    />
					</map>
				</div>
			</div>
		</div>
	</div>	
</div>

<?php /* moje prvni poznamka */ ?>
	
</body> 
</html> 