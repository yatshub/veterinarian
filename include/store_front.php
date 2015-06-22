<?php $obj_order = new AdminOrders();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Пошук та підбір ветеринара для роботи в тваринництві</title>
    
    <link rel="shortcut icon" href="<?=HTTP_HOST?>images/arr.ico" />
    <link rel="stylesheet" type="text/css"  media="screen, projection" href="<?=HTTP_HOST?>css/screen.css" />
    <link rel="stylesheet" href="<?=HTTP_HOST?>css/validationEngine.jquery.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css"  media="screen, projection" href="<?=HTTP_HOST?>css/viewport.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script> 
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?=HTTP_HOST?>js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="<?=HTTP_HOST?>js/countdown.js"></script>
    <script type="text/javascript" src="<?=HTTP_HOST?>js/main.js"></script>
    
</head> 
<body>
    <div id="wrap">
	<div id="header" class="group">
            
            <div class="logo">
                <h1>Ветеринар</h1>
            </div>
           
            <div class="feedback">
                
                <div class="mail">
                    <a href="mailto:veterinarianturnkey@yandex.ru">veterinarianturnkey@yandex.ru</a>
                </div>
                <div class="phone">
                    <a href="tel:+380934517593">(093) 45-175-93</a>
                    <p>Щоденно з 8-00 до 20-00</p>
                </div> 
                
                
            </div>
           
            <div class="line-solid"></div>
    
        </div> <!-- /header -->
		
        <div class="group">
        
            <div class="capture">
            
                <h1 style="font-size: 35px; margin-left:160px; margin-right: 160px;">Пошук та підбір ветеринара </br> для роботи в тваринництві</h1>
                <h1 style="font-size: 25px; margin-top: 60px; margin-left:210px; margin-right: 210px;">Займаєтесь молочними скотарством? </br>  Шукаєте ветлікаря?</h1>
            
            <h1 style="font-size: 25px; margin-top: 60px; margin-left:240px; margin-right: 240px;">Втомилися переглядати резюме?</h1>
        
        <h1 style="font-size: 25px; margin-top: 60px; margin-left:210px; margin-right: 210px;">Залиште заявку і ми Вам його знайдемо! </h1>
                
                
            </div><!-- /capture -->
            
            
            <div class="school school-background-top">
                <div class="form" id="order-top">
                    
                    <h1><b style="color: yellow">БЕЗКОШТОВНА</b> консультація як знайти ветеринара для роботі на фермі</h1>
                    
                    <div class="action">До закінчення акції залишилося: </div>
                    
                    <div id="CDT"></div>
                    <?php
                       if(!$obj_order->mMessage == '')
                        { 
                            echo $obj_order->mMessage;
                        }else{
                    ?>
                    <h1>Залиште заявку і ми Вам його знайдемо!</h1> 
                    <?php }?>
                    <form class="formID" action="#order-top" method="post">
                        
                        <div>
                            <input class="validate[required]" type="text" name="firstname-1" id="firstname-1" placeholder="Введіть ім'я" />
                        </div>
                
                        <div>
                           <input class="validate[required]" type="email" name="email-1" id="email-1" placeholder="Введіть email" />
                        </div>
                        
                        <div>
                           <input class="validate[required]" type="tel" name="phone-1" id="phone-1" placeholder="Введіть телефон" />
                        </div>

                        <div>
                           <input class="inSubmit" type="submit" name="submit-1" value="Залишити заявку!" />
                        </div>
                        
                        <div class="copyright">Ваші контактні дані в безпеці і не будуть передані третім особам</div>
                    </form>
                </div>
                </div><!-- /order-top -->
        
            <div class=" advantage">
                <h1>НАШІ ПЕРЕВАГИ</h1>
                      
                <div>
                        
                    <img src="<?=HTTP_HOST?>images/advantage01.png" width="88" alt="" />
                    <p>Комплексний підхід у забезпеченні потреб споживача (ми пропонуємо рішення проблем а не нового ветлікаря)</p>
                        
                </div>
                    
                <div>
                        
                    <img src="<?=HTTP_HOST?>images/advantage02.png" width="88" alt="" />
                    <p>Приймаємо замовлення цілодобово 24/7</p>
                        
                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/advantage03.png" width="88" alt="" />
                    <p>Підбір кандидата на протязі місяця </p>

                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/advantage04.png" width="88" alt="" />
                    <p>Супровід до закінчення випробувального терміну </p>

                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/advantage05.png" width="88" alt="" />
                    <p>Особистий менеджер завжди з вами 12/24</p>

                </div>
            </div> <!-- /.advantage -->
            
            <div class="we-work">
                <h1>ЯК МИ ПРАЦЮЄМО</h1>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_01.png" width="128" alt="" />
                    <p>Оформлення замовлення через форму або по телефону</p>

                </div>

                <div class="arrow">

                    <img src="<?=HTTP_HOST?>images/arrow.png" width="45" alt="" />

                </div>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_02.png" width="128" alt="" />
                    <p>У перебігу 24-x годин ми уточнюємо всі деталі і переваги</p>

                </div>
                <div class="arrow">

                    <img src="<?=HTTP_HOST?>images/arrow.png" width="45" alt="" />

                </div>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_03.png" width="128" alt="" />
                    <p>Виставляємо вартість роботи</p>

                </div>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_04.png" width="128" alt="" />
                    <p>Укладення договору та внесення передоплати </p>

                </div>

                <div class="arrow">

                    <img src="<?=HTTP_HOST?>images/arrow.png" width="45" alt="" />

                </div>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_05.png" width="128" alt="" />
                    <p>Підбір відповідного кандидата на протязі місяця</p>

                </div>

                <div class="arrow">

                    <img src="<?=HTTP_HOST?>images/arrow.png" width="45" alt="" />

                </div>

                <div>

                    <img src="<?=HTTP_HOST?>images/icon/how_we_work_06.png" width="128" alt="" />
                    <p>Супровід кандидата до закінчення випробувального терміну</p>

                </div>   
            </div> <!-- /.we-work -->
			
            <div class="line-solid"></div>
            
            <div class="difficulties">
                <h1>ТРУДНОЩІ ПРИ ПОШУКУ ВЕТЛІКАРЯ</h1>
                      
                <div>
                        
                    <img src="<?=HTTP_HOST?>images/icon/difficulties.png" width="88" alt="" />
                    <p>Нема бажаючих працювати за пропоновану зарплату</p>
                        
                </div>
                    
                <div>
                        
                    <img src="<?=HTTP_HOST?>images/icon/difficulties.png" width="88" alt="" />
                    <p>Через декілька місяців новий ветлікар звільняється через невдоволеність зарплатою</p>
                        
                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/difficulties.png" width="88" alt="" />
                    <p>Бажають працювати – нема досвіду роботи і відповідних навичок</p>

                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/difficulties.png" width="88" alt="" />
                    <p>Знайшли ветеринара – проблеми залишилися</p>

                </div>
                
                </div>
            <div  class="decision">                 
                  <h1>НАШЕ РІШЕННЯ</h1>
                 
                 <div>
                        
                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Працюємо лише з господарствами, які пропонують зарплату 3000 – 5000 грн</p>
                        
                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Кандидат проходить співбесіду з психологом</p>

                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Проводимо комплексну оцінку здоров`я стада</p>

                </div>
                 
                 <div>
                        
                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Даємо чіткі рекомендації по оздоровленню стада</p>
                        
                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Прописуємо покрокові інструкції для ветлікаря</p>

                </div>
                    
                <div>

                    <img src="<?=HTTP_HOST?>images/icon/decision.png" width="88" alt="" />
                    <p>Проводимо щоквартальну оцінку досягнення поставлених цілей</p>

                </div>
                    
            </div> <!-- /.difficulties -->
            
            <div class="school school-background-bottom">
                <div class="form" id="order-bottom">
                   
                    
                   <h1><b style="color: yellow">БЕЗКОШТОВНА</b> консультація як знайти ветеринара для роботі на фермі</h1>
                    
                    <div class="action">До закінчення акції залишилося: </div>
                    
                    <div id="CDT2"></div>
                    <?php
                       if(!$obj_order->mMessage2 == '')
                        { 
                            echo $obj_order->mMessage2;
                        }else{
                    ?>
                    <h1>Залиште заявку і ми Вам його знайдемо!</h1> 
                    <?php }?>
                    <form class="formID" action="#order-bottom" method="post">
                        
                        <div>
                            <input class="validate[required]" type="text" name="firstname-2" id="firstname-2" placeholder="Введіть ім'я" />
                        </div>
                
                        <div>
                           <input class="validate[required]" type="email" name="email-2" id="email-2" placeholder="Введіть email" />
                        </div>
                        
                        <div>
                           <input class="validate[required]" type="tel" name="phone-2" id="phone-2" placeholder="Введіть телефон" />
                        </div>

                        <div>
                           <input class="inSubmit" type="submit" name="submit-2" value="Залишити заявку!" />
                        </div>
                        
                        <div class="copyright">Ваші контактні дані в безпеці і не будуть передані третім особам</div>
                    </form>
                </div>
            </div> <!-- /.school -->
        
        <div id="footer">
            
            <div class="left">
                
                <div class="phone">
                    <div>Є питання? Телефонуйте!</div>
                    <a href="tel:+380934517593">(093) 45-175-93</a>
                    <p>Щоденно з 8-00 до 20-00</p>
                </div> 
                
           </div>
            
            <div class="right">                
                    <img src="<?=HTTP_HOST?>/images/pay/pay_block2.png" width="380" height="70" alt="" />
            </div>
            
            
        </div>  <!-- /footer -->
            
        </div> <!-- /group --> 
    
        <div style="clear: both;"></div>	
		
    </div>  <!-- /wrap --> 
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter26801490 = new Ya.Metrika({id:26801490,
                        webvisor:true,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/26801490" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <!-- (yats) -->
</body>
</html>