<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "tofrar@arnulfur.is";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name", $message, "From:" . $email);
  
  //Email response
    echo '<script language="javascript">';
    echo 'alert("Sent!")';
    echo '</script>';
  }
  
  //if "email" variable is not filled out, display the form

?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="keywords" content="Töfrar, Magic, Töframaður, Magician, Arnúlfur, Eaglewolf, Spilagaldur, Galdur, Card magic, Ísland, Iceland, Reykjavík, Skemmtikraftur, Entertainer, Barnaafmæli, Afæli, veislur,">
        <meta name="description" content="Arnúlfur er einn skemmtilegasti töframaður Íslands. Bættu töfrum við í boðið þitt og veislan breytist í töfra!">
        <meta name="Page-topic" content="Töfrar, Magic, Iceland, Reykvaik, Töframaður, Arnúlfur, Eaglewolf, Magician">
   
        <title>Arnúlfur Töframaður</title>
        <link rel="stylesheet" type="text/css" href="arnulfur.css">

        <script type="text/javascript" src="jquery.js"></script>
        <script src="arnulfur.js"></script>

        <link rel="shortcut icon" type="image/x-icon" href="bilder/favicon.ico" />

        <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>

    </head>
    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <ul class="cb-slideshow">
            <li>
                <span>01</span>
            </li>
            <li>
                <span>02</span>
            </li>
            <li>
                <span>03</span>
            </li>
        </ul>

        <header>
            <div class="logo">
                <img src="bilder/LogoF.png" id="logo">
            </div>
            <div class="headerlist">
                <ul>
                    <!-- <li><a class="active" href="#logo">Start</a></li> -->
                    <li><a href="#events">Töfrar eru málið!</a></li>
                    <li><a href="#about">Um mig</a></li>
                    <li><a href="#contact">Hafa samband</a></li>
                    <li><a target="_blank" href="https://www.facebook.com/eaglewolfmagic"/><img id="facebook" src="bilder/facebook.png" width="20"></a><a target="_blank" href="https://www.youtube.com/channel/UCxXRJsnQULNh6TKz79v1Wrg"/><img src="bilder/youtube.png" width="20"></a></li>
                </ul>
            </div>
            <div class="buttons">
                
                <!-- <a target="_blank" href="https://www.facebook.com/eaglewolfmagic"/><img src="bilder/insta.png" width="20"></a> -->
                
            </div>
        </header>

        <div class="scroll">
            +356 865 9921 <a id="arrow" href="#about" onClick="jumpScroll()">    &#8681;</a>
            <a id="maillink" href="mailto:blessad@arnulfur.is"> tofrar@arnulfur.is</a></p>
        </div>
        <div class="wrapper">
            <div class="yellow_header" id="events">
                <div class="content">
                    <h2 class="yellow">Töfrar eru málið!</h2>
                    <hr class="yellow">
                </div>
            </div>
            <div class="light">
                <div class="content">
                    <p id="events">Ertu að leita eftir punktinum yfir i-ið í veisluna þína?<br><br>

                    Ég býð upp á eftirminnilega sýningu sem skilur þig og gestina þína eftir bæði undrandi og hlæjandi á sama tíma. Sýningarnar mínar eru sniðnar að óskum hvers og eins, hvort sem um er að ræða lítið fjölskylduboð, barnaafmæli eða mega árshátíð.<br><br>

                    Ef þú ert að leita að aðeins öðruvísi skemmtun þá er ég þinn fullkomni kostur. Í mínum atriðum taka allir þátt þar sem ég fæ sjálfboðaliða úr sal til þess að hjálpa mér að takast á við hin ýmsu verkefni, sem lyftir upp stemningunni í hvaða boði sem er.

                    <h3 class="yellow">Árshátiðir - afmæli</h3>
                    <hr class="yellow"><br/>

                    Hvort sem það er lítil árshátíð hjá ykkur vinkonum/vinum eða lokahóf hjá fyrirtækinu þínu þá eru töfrarnir mínir hið fullkomna krydd í skemmtunina þína. Stórt afmæli eða lítið, ungur eða gamall - skiptir ekki máli, töfrar slá alltaf í gegn.<br><br>

                    Bættu töfrum við í boðið þitt og veislan breytist í töfra!<br><br>

                    Ef þig vantar góðan og áhugaverðan töframann, ekki hika við að hafa samband!<br>
                    Ég hlakka til þess að skemmta þér og þínum :)</p>
                </div>
            </div>

            <div id="testamonials" class="yellow_header">
                <div id="test">
                    <p class="rev">I was blown away at how easy our guide made this naturally daunting experience.. I was soo comfortable, and felt safe and well looked after. It was my first dry suit experience at with his experience and i felt completly at ease. Would give 6 stars if I could. Cheers again :D</p>
                    <p class="nam">- Troy T, March 2015</p>
                </div>
                <div id="test">
                    <p class="rev">For those who dive at 4 degrees celcius for the first time there is no better man to make you feel comfortable and confident than Hedinn. For those who have done it before elsewhere the combination of Hedinn skills, company and the dive site itself will make the dive a memorable experience. Try it regardless of any reservations you may have. Hedinn thank you and really hope to see you again!</p>
                    <p class="nam">- George and Natassa, Greece</p>
                </div>
                <div id="test">
                    <p class="rev">This was one of the most incredible diving experiences ever. we read  somewhere that if you wanted to dive silfra, Hedinn was the man to go with - they weren't wrong. Not only is he a master of this area, he's got a great personality and dishes out all sorts of interesting info on  Iceland and diving stories. Highly recommended!! Thank you for a wonderful underwater experience and for the pics to remember it by!</p>
                    <p class="nam">- Melody and Toby, Hobart, Australia</p>
                </div>
            </div>
            
            <div id="about" class="content">
                <h2 class="darker">Um mig</h2>
                <hr class="darker"><br/>
                <p id="about">Ég heiti Arnúlfur og ég er töframaður. Áhugi minn á töfrum kviknaði sumarið 2008 eftir að ég sá flottan galdur hér á veraldarvefnum. Núna mörgum árum seinna þá er ég orðinn ritari HÍT (Hið Íslenska Töframannagildi) og hvert sem ég fer þá er spilastokkurinn með í för.<br><br>

                Fyrir mér eru töfrar gleðigjafi. Töfrar eru þannig meira er einungis einhver trix. Töfrar eru mín leið til þess að gefa af mér. Mín leið til þess að gleðja ykkur.Ég hef gaman af öllum gerðum af töfrum. Ég er stöðugt að bæta við mig nýjum töfrabrögðum og legg metnað í að læra ný og framandi töfrabrögð.<br><br>
                    
                Ég hef komið fram víða. Á ferðalagi mínu um Asíu árið 2015 sýndi ég töfra á mörgum stöðum í m.a. Tælandi, Laos, Kambodiu, Víetnam, Malasíu og Indónesíu. Það er ekkert sem mér finnst skemmtilegra en að gleðja fólk með töfrum og sýna því að það er ekki allt sem sýnist. Ég vona að einn daginn fái ég tækifæri til þess að skemmta þér.<br><br>
                    
                Knús til ykkar allra<br>
                Arnúlfur Töframaður.</p>

<!--                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Feaglewolfmagic%2Fvideos%2Fvb.1064428643600389%2F1086466244729962%2F%3Ftype%3D3&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe> -->
            </div>

            <!-- <img src="bilder/between.png" class="between"> -->
        
            <div class="light" id="contact">
                <div class="content">
                    <h2>Hafa samband</h2>
                    <hr>
                    <p id="topform">Til þess að bóka mig, annað hvort hringið í síma 865-9921, sendið skilaboð á <a href="mailto:hej@icelandfunland.is">tofrar@arnulfur.is</a> eða fyllið í hér fyrir neðan.</p>
                    <form id="emailform" method="post" action="inquiry.php">
                        <fieldset>
                            <legend>Net bókun</legend>
                            <label for="name">Nafn: </label>
                            <input type="text" name="name" size="30">
                            <label for="email">Netfang: </label>
                            <input type="text" name="email" size="30">
                            <label for="message">Skilaboð:</label>
                            <textarea rows="5" name="message" cols="30"></textarea>
                            <button type="submit" value="Submit">Staðfesta</button>
                        </fieldset>
                    </form> 

                    <p>Hlakka til þess að heyra frá ykkur!</p>

                    <script src="https://apis.google.com/js/platform.js"></script>
 
                    <div id="like">
                        <div class="g-ytsubscribe" data-channelid="UCxXRJsnQULNh6TKz79v1Wrg" data-layout="full" data-count="hidden"></div>

                        <div class="fb-like" data-href="https://www.facebook.com/eaglewolfmagic" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <p id="footerleft">+356 865 9921 /// 
                <a href="mailto:blessad@arnulfur.is">tofrar@arnulfur.is</a></p>
                <p id="footerright">Developed and maintained by <a href="www.isisochbast.se">Isis och Bast</p>
            </div>
        </div>

    </body>
</html>

<?php
?>