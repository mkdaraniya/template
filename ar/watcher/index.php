<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">


    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!--  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container text-center">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../../img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php
              require '../../vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
              // A session is required
              if (session_status() == PHP_SESSION_NONE) {
                  session_start();
              } 
              // Instantiate the class
              $msg = new \Plasticbrain\FlashMessages\FlashMessages();
              echo $msg->display();
              ?>
        <form id="arWatcherForm" name="ar-watcher-form" method="post" action="../../data.php" novalidate="novalidate">
            <input type="hidden" name="lang" id="Lang" value="ar">
            <input type="hidden" name="user" id="User" value="watcher">
            <div class="form-group">
              <label for="fullName">الاسم بالكامل</label>
              <input type="text" class="form-control" name="fullName" id="fullName" placeholder="الاسم بالكامل">
            </div>
            <div class="form-group">
              <label for="nationality">الجنسية</label>
              <select class="form-control" name="nationality">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">Kittian and Nevisian</option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi">Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
              </select>
            </div>
            <label for="Identification">رقم الهوية/الجواز</label>
            <div class="form-group">
              <input class="form-input" type="radio" name="identification" id="Identification" value="idNumber" checked>
              <label class="form-label" for="Identification">
                رقم الهوية الوطنية
              </label>
            </div>
            <div class="form-group">
              <input class="form-input" type="radio" name="Identification" id="Identification" value="iqama">
              <label class="form-label" for="Identification">
                الإقامة
              </label>
            </div>
            <div class="form-group">
              <input class="form-input" type="radio" name="Identification" id="Identification" value="passport">
              <label class="form-label" for="Identification">
                جواز سفر
              </label>
            </div>
            <div class="form-group">
              <label for="Residence">بلد الإقامة</label>
              <input type="text" class="form-control" name="residence" id="residence" placeholder="بلد الإقامة">
            </div>
            <div class="form-group">
              <label for="phoneNumber">رقم التواصل</label>
              <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="رقم التواصل">
            </div>
            <div class="form-group">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني">
            </div>
            <label for="Gender">الجنس</label>
            <div class="form-group">
              <input class="form-input" type="radio" name="gender" id="Gender" value="male" checked>
              <label class="form-label" for="Gender">
                أنثى
              </label>
            </div>
            <div class="form-group">
              <input class="form-input" type="radio" name="gender" id="Gender" value="female">
              <label class="form-label" for="Gender">
                ذكر
              </label>
            </div>

            <h3>بيانات حساب البنك</h3>
            <div class="form-group">
              <label for="accountNumber">رقم الحساب</label>
              <input type="text" class="form-control" name="accountNumber" id="accountNumber" placeholder="رقم الحساب">
            </div>
            <div class="form-group">
              <label for="bankName">اسم البنك</label>
              <input type="text" class="form-control" name="bankName" id="bankName" placeholder="اسم البنك">
            </div>
            <div class="form-group">
              <label for="holderName">اسم صاحب الحساب</label>
              <input type="text" class="form-control" name="holderName" id="holderName" placeholder="اسم صاحب الحساب">
            </div>
            <div class="form-group">
              <label for="iban">رقم الآيبان</label>
              <input type="text" class="form-control" name="iban" id="iban" placeholder="رقم الآيبان">
            </div>

            <div class="form-group">
              <label for="countryOfBank">الدولة</label>
              <input type="text" class="form-control" name="countryOfBank" id="countryOfBank" placeholder="الدولة">
            </div>
            <label for="countryOfBank">الرجاء قراءة الشروط والأحكام بعناية.</label>
            <div class="termsCondition">
              <h3>الشروط و الأحكام**</h3>
              <ol class="Number">
                <li> أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت
                </li>
                <li> أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت</li>
                <li> أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت</li>
                <li> أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت أبجد  هوز حطي  كلمن سعفص قرشت</li>
              </ol>
            </div>

            <div class="form-group">
              <input type="checkbox" class="form-input" name="termsCondition" id="termsCondition">
              <label class="form-label" for="termsCondition">اوافق على الشروط والأحكام اتفاقية الخصوصية</label>
            </div>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <p class="copyright text-muted">حقوق الطبع والنسخ ؛ موقع الويب الخاص بك 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <!-- <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>
<script src="../../js/jquery.validate.js"></script>
    <!-- Custom scripts for this template -->
    <script src="../../js/clean-blog.min.js"></script>
    <script type="text/javascript" src="../../js/custom.js"></script>

  </body>

</html>
