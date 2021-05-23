<html>
    
    <head>
        <title>İletişim</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="stil.css">
		<link rel="stylesheet" type="text/css" href="sayfam.css">
        <meta charset="UTF-8">

    </head>
    <body>
        <div class="container">
                <div class="row" style="width: 102%; height: 11%; background-color: #242526; color: white; ">
                    <div class="col-sm-6 col-md-2 "style="padding-top:1.3%;text-align: center;"><img class="bastaresim" src="fotolar/baslik1.png" ><b>Osman</b>Aydın</div>
                    <div class="col-sm-6 col-md-1" style="padding-top:2.2%; text-align: left;"><a href="index.html">Hakkımda</a> </div>
                    <div class="col-sm-6 col-md-2" style="padding-top:2.2%; text-align: center;"><a href="ozgecmisim.html">Özgeçmişim</a> </div>
                    <div class="col-sm-6 col-md-1" style="padding-top:1%;text-align: center;"><a href="ilgiAlanlarim.html">İlgi Alanlarım</a> </div>
                    <div class="col-sm-6 col-md-1" style="padding-top:2.2%;text-align: right;"><a href="sehrim.html">Şehrim</a> </div>
                    <div class="col-sm-6 col-md-2" style="padding-top:2.2%;text-align: center;"><a href="takimim.html">Takımım</a> </div>
                    <div class="col-sm-6 col-md-1" style="padding-top:2.2%; text-align: left;"><a href="iletisim.html">İletisim</a> </div>
                    <div class="col-sm-6 col-md-2">
                        <form>
                            <button class="nav-link" style="margin-top: 9%; text-align: center; color:white;border: 2px solid #797C80; border-radius: 16px;background-color: #242526; width: 70%; "><a href="girisyap.html">Giriş Yap</a></button>
                        </form>
                    </div>
                </div>        


                
                <div class="row" style="background-color: #F7F7F7;">
                    <div class="col-sm-12 col-md-12 "><img style="margin-left:42%; margin-top: 10%; margin-bottom:60px; " 
                        src="fotolar/iletisim2.png"> 
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="sayfaBaslik" style="margin-bottom:25px;text-align:center;" >Mesajın İletildi!</div>
                    </div>
                    <div class="col-sm-4 col-md-4" style="margin-left:34%; margin-bottom:100px;">
                        <div class="metinIcerik" style= text-align: center;">Mesajın bana ulaştı. En yakın zamanda inceleyip dönüş
                        yapacağım. İlgin için teşekkür ederim :) </div>

                    </div>
                    
                </div>

                <div class="row" style="background-color: #F7F7F7; ">
                    
                    <div class="col-sm-12 col-md-12" style="text-align:center;"><?php  echo "Adı             : ". $_POST["adi"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="text-align:center;"><?php  echo "Soyadı          : ". $_POST["soyadi"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="text-align:center;"><?php  echo "E-Mail          : ". $_POST["email"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="text-align:center;"><?php  echo "Dogum Tarihi    : ". $_POST["dogumTarihi"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="text-align:center;"><?php  echo "Cinsiyet        : ". $_POST["cinsiyet"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="margin-bottom:100px;text-align:center;"><?php  echo "İletilen Metin  : ". $_POST["iletilecekMetin"]."<br>"; ?> </div>
                    <div class="col-sm-12 col-md-12" style="margin-bottom: 300px;" > 
                        <form>
                            <button class="nav-link" style="margin-top: 5%; margin-left:44%; text-align: center; color:white;border: 2px solid #797C80; 
                            background: #333333; border-radius: 8px;  "><a style=" background: #333333;" href="index.html">Ana Sayfaya Dön</a></button>
                        </form>    

                
                    </div>
            
                </div>

                


               




                <!-- footer -->
                <div class="row" style="background-color:#242526; height: 110px;  " > 
                            <div class="col-md-5" style="margin-left:12%; margin-top: 80px;">
                                <img src="fotolar/baslik.png" style="bwidth: 25px; height: 25px;">
                                <a style="color: #797C80; background-color:#242526;" ><b>Osman</b>Aydın</a>
                                <img src="fotolar/phone.png" style="margin-left: 20px; border-radius: 10px; width: 15px; height: 15px;">
                                <a style=" color: #797C80; background-color:#242526; font-size: 12px;" >0537 769 58 08</a>
                                <img src="fotolar/mail.png" style="margin-left: 20px; border-radius: 10px; width: 15px; height: 15px;">
                                <a style=" color: #797C80; background-color:#242526; font-size: 12px;" >osmnaydin1453@gmail.com</a>
                            </div>
                            <div class="col-md-2" style="margin-left:15%; margin-top: 3%; ">
                                <form>
                            <button class="nav-link" style="margin-top: 9%; text-align: center; color:white;border: 2px solid #797C80; border-radius: 16px;background-color: #242526; width: 70%; "><a href="girisyap.html">Giriş Yap</a></button>
                        </form>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="background-color:#242526; height: 15px;"><hr style=" margin-left:12% ;width:36%; border-bottom: 1px solid #797C80;"/></div>
                    </div>		
                    <div class="row" style="background-color:#242526; height: 80px; font-size: 12px;" >
                            <div class="col-md-5" style="margin-left:12%;margin-top:1.5%;"> 
                                <a style="color: #797C80" href="index.html">Hakkımda</a> 
                                <a style="margin-left:19px; color: #797C80" href="ozgecmisim.html">Özgeçmişim</a>
                                <a style="margin-left:19px; color: #797C80" href="ilgiAlanlarim.html">İlgi Alanlarım</a> 
                                <a style="margin-left:19px; color: #797C80" href="sehrim.html">Şehrim</a>
                                <a style="margin-left:19px; color: #797C80" href="takimim.html">Takımım</a>
                                <a style="margin-left:19px; color: #797C80" href="iletisim.html">İletişim</a>
                            </div>
                            <div class="col-md-5" style="text-align: left; margin-top:1%;">
                                <a style="margin-left:32%; color:#797C80">© 2021 tüm hakları saklıdır.</a>
                            </div>
                    </div>

        </div>



    </body>



</html>