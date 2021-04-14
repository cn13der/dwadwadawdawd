<!---  Batuhanates.com / bloğundan indirilmiştir. */ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diyanet saatine göre namaz saatlarini JSON olarak dönen API">
    <meta name="author" content="Batuhan ATES">

    <title>İftara ne kadar kaldı?</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                
                <a class="navbar-brand" href="#page-top">Webinyo.COM İftar ve Sahur Scripti</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                                <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Sayac -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 iftarImsakInfo">
                            <div class="iftarImsak">
                                <span class="city"></span> için <span class="text"></span> <span class="clock"><strong></strong></span>
                            </div>
                            <div class="cityChange">
                                <a class="cityChangeButton" href="#">Şehir Değiştir</a>
                            </div>
                        </div>

                        <div class="col-md-6 selectForm" style="display: none;">
                            <div class="selectText">
                                İftar veya sahur saatini öğren:
                            </div>
                            <select id="citySelect">
                                <option value="EDIRNE">Şehir Seç</option>
                                <option value="ADANA">Adana</option>
                                <option value="ADIYAMAN">Adıyaman</option>
                                <option value="AFYON">Afyon</option>
                                <option value="AGRI">Ağrı</option>
                                <option value="AKSARAY">Aksaray</option>
                                <option value="AMASYA">Amasya</option>
                                <option value="ANKARA">Ankara</option>
                                <option value="ANTALYA">Antalya</option>
                                <option value="ARDAHAN">Ardahan</option>
                                <option value="ARTVIN">Artvin</option>
                                <option value="AYDIN">Aydın</option>
                                <option value="BALIKESIR">Balıkesir</option>
                                <option value="BARTIN">Bartın</option>
                                <option value="BATMAN">Batman</option>
                                <option value="BAYBURT">Bayburt</option>
                                <option value="BILECIK">Bilecik</option>
                                <option value="BINGOL">Bingöl</option>
                                <option value="BITLIS">Bitlis</option>
                                <option value="BOLU">Bolu</option>
                                <option value="BURDUR">Burdur</option>
                                <option value="BURSA">Bursa</option>
                                <option value="CANAKKALE">Çanakkale</option>
                                <option value="CANKIRI">Çankırı</option>
                                <option value="CORUM">Çorum</option>
                                <option value="DENIZLI">Denizli</option>
                                <option value="DIYARBAKIR">Diyarbakır</option>
                                <option value="DUZCE">Düzce</option>
                                <option value="EDIRNE">Edirne</option>
                                <option value="ELAZIG">Elazığ</option>
                                <option value="ERZINCAN">Erzincan</option>
                                <option value="ERZURUM">Erzurum</option>
                                <option value="ESKISEHIR">Eskişehir</option>
                                <option value="GAZIANTEP">Gaziantep</option>
                                <option value="GIRESUN">Giresun</option>
                                <option value="GUMUSHANE">Gümüşhane</option>
                                <option value="HAKKARI">Hakkari</option>
                                <option value="HATAY">Hatay</option>
                                <option value="IGDIR">Iğdır</option>
                                <option value="ISPARTA">Isparta</option>
                                <option value="ISTANBUL">İstanbul</option>
                                <option value="IZMIR">İzmir</option>
                                <option value="KAHRAMANMARAS">Kahramanmaraş</option>
                                <option value="KARABUK">Karabük</option>
                                <option value="KARAMAN">Karaman</option>
                                <option value="KARS">Kars</option>
                                <option value="KASTAMONU">Kastamonu</option>
                                <option value="KAYSERI">Kayseri</option>
                                <option value="KIRIKKALE">Kırıkkale</option>
                                <option value="KIRKLARELI">Kırklareli</option>
                                <option value="KIRSEHIR">Kırşehir</option>
                                <option value="KILIS">Kilis</option>
                                <option value="KOCAELI">Kocaeli</option>
                                <option value="KONYA">Konya</option>
                                <option value="KUTAHYA">Kütahya</option>
                                <option value="MALATYA">Malatya</option>
                                <option value="MANISA">Manisa</option>
                                <option value="MARDIN">Mardin</option>
                                <option value="MERSIN">Mersin</option>
                                <option value="MUGLA">Muğla</option>
                                <option value="MUS">Muş</option>
                                <option value="NEVSEHIR">Nevşehir</option>
                                <option value="NIGDE">Niğde</option>
                                <option value="ORDU">Ordu</option>
                                <option value="OSMANIYE">Osmaniye</option>
                                <option value="RIZE">Rize</option>
                                <option value="SAKARYA">Sakarya</option>
                                <option value="SAMSUN">Samsun</option>
                                <option value="SIIRT">Siirt</option>
                                <option value="SINOP">Sinop</option>
                                <option value="SIVAS">Sivas</option>
                                <option value="SANLIURFA">Şanlıurfa</option>
                                <option value="SIRNAK">Şırnak</option>
                                <option value="TEKIRDAG">Tekirdağ</option>
                                <option value="TOKAT">Tokat</option>
                                <option value="TRABZON">Trabzon</option>
                                <option value="TUNCELI">Tunceli</option>
                                <option value="USAK">Uşak</option>
                                <option value="VAN">Van</option>
                                <option value="YALOVA">Yalova</option>
                                <option value="YOZGAT">Yozgat</option>
                                <option value="ZONGULDAK">Zonguldak</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div id="getCurrentDate"></div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-12 countdownShow">
                            <div id="countdownContainer">
                                <div class="countdownFirstText col-md-4">
                                </div>
                                <div id="countdown_dashboard" class="col-md-4">
                                    <div class="hoursContainer">
                                        <div class="dash hours_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                        </div>
                                        <div class="countdownHour">
                                            SAAT
                                        </div>
                                    </div>

                                    <div class="seperator">
                                        :
                                    </div>

                                    <div class="minutesContainer">
                                        <div class="dash minutes_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                        </div>
                                        <div class="countdownMinute">
                                            DAKİKA
                                        </div>
                                    </div>

                                </div>
                                <div class="countdownLastText col-md-4">
                                    KALDI
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="intro-text">
						<hr class="star-light">
							<span class="name">NAMAZ VAKİTLERİ</span>
						</div>
						
						<div class="intro-text">
							<span class="imsakVakti"></span>
							<span class="ogleVakti"></span>
							<span class="ikindiVakti"></span>
							<span class="aksamVakti"></span>
							<span class="yatsiVakti"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	
	<script src="js/jquery.cookie.js"></script>
	<script src="js/countdown.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>

</html>
