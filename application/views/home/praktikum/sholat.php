<!doctype html>
<html lang="en">
  <head>
  	<title>Praktikum Sholat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url('assets/vendor/asset-praktikum/');?>css/style.css">
		<link rel="icon" href="<?=base_url('assets/img/pelajar/home/');?>pai.png">
		<!-- Speech Recognition -->

		<style>
  * {
    font-family: Verdana, Arial, sans-serif;
  }

  a:link {
    color: #000;
    text-decoration: none;
  }

  a:visited {
    color: #000;
  }

  a:hover {
    color: #33F;
  }

  .button {
    background: -webkit-linear-gradient(top, #008dfd 0, #0370ea 100%);
    border: 1px solid #076bd2;
    border-radius: 3px;
    color: #fff;
    display: none;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.3;
    padding: 8px 25px;
    text-align: center;
    text-shadow: 1px 1px 1px #076bd2;
    letter-spacing: normal;
  }

  .center {
    padding: 10px;
    text-align: center;
  }

  .final {
    color: black;
    padding-right: 3px;
  }

  .interim {
    color: gray;
  }

  .info {
    font-size: 14px;
    text-align: center;
    color: #777;
    display: none;
  }

  .right {
    float: right;
  }

  .sidebyside {
    display: inline-block;
    width: 45%;
    min-height: 40px;
    text-align: left;
    vertical-align: top;
  }

  #headline {
    font-size: 40px;
    font-weight: 300;
  }

  #info {
    font-size: 20px;
    text-align: center;
    color: #777;
    visibility: hidden;
  }

  #results {
    font-size: 14px;
    font-weight: bold;
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
    min-height: 150px;
  }

  #start_button {
    border: 0;
    background-color: transparent;
    padding: 0;
  }
</style>
		<!-- End Pose Classification -->
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(<?=base_url('assets/vendor/asset-praktikum/');?>images/gambar.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
				  <h1><a href="index.html" class="logo">Praktikum<span>Sholat</span></a></h1>
				  <h1 style="font-size:20px;margin-bottom:10px;"><a  class="logo">Pilihan Praktek</a></h1>

	        <ul class="list-unstyled components mb-5">
	          <li class="active">
				  <!-- <div class="container">
					<div class="dropdown  ml-2 mt-n2">
						<button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pilih
						</button>
						<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="<?=base_url('home/praktikum');?>">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				  </div> -->
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek I
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek 2
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek 3
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	          </li>
	        </ul>

	        <div class="mb-5 px-4">
			<a href="" class="btn btn-outline-danger">Kembali</a>
			</div>

	        <div class="footer px-4">
	        	<p>Praktikum PAI</p>
	        </div>

	      </div>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <img class="img-fluid" alt="Responsive image" src="<?=base_url('assets/img/pelajar/praktikum/sholat/');?>sholat.png" alt="" class="rounded">

		<!-- Pose Classification -->
		<div class="container">
				<div id="info">
					<p id="info_start">Baca Basmallah Sebelum Memulai Praktikum Dengan Klik Icon Mic Bawah ini</p>
					<p id="info_speak_now">Mulai Membaca</p>
					<p id="info_no_speech">No speech was detected. You may need to adjust your
						<a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
						microphone settings</a>.</p>
					<p id="info_no_microphone" style="display:none">
						No microphone was found. Ensure that a microphone is installed and that
						<a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
						microphone settings</a> are configured correctly.</p>
					<p id="info_allow">Klik tombol "Allow" untuk mengaktifkan mikrofon anda</p>
					<p id="info_denied">Perizinan untuk mengaktifkan microphone ditolak</p>
					<p id="info_blocked">Permission to use microphone is blocked. To change,
						go to chrome://settings/contentExceptions#media-stream</p>
					<p id="info_upgrade">Web Speech API tidak support di browser anda silahkan update ke <a
						href="//www.google.com/chrome">Chrome</a>
						versi 25 atau yang terbaru.</p>
					</div>
					<div class="right">
					<button id="start_button" onclick="startButton(event)">
						<img id="start_img" src="<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic.gif" alt="Start"></button>
					</div>
					<div id="results">
					<span id="final_span" class="final"></span>
					<span id="interim_span" class="interim"></span>
					<p>
					</div>
					<div class="center">
					<!-- <div class="sidebyside" style="text-align:right">
						<button id="copy_button" class="button" onclick="copyButton()">
						Copy and Paste</button>
						<div id="copy_info" class="info">
						Press Control-C to copy text.<br>(Command-C on Mac.)
						</div>
					</div> -->

					<div id="div_language">
						<select id="select_language" onchange="updateCountry()" hidden></select>
						&nbsp;&nbsp;
						<select id="select_dialect" hidden></select>
					</div>
				</div>
		<!-- <div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="<?=base_url('home/pose');?>" allowfullscreen></iframe>
		</div> -->

		</div>
	  </div>
		</div>

    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/jquery.min.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/popper.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/main.js"></script>

<!-- Speech Recognition -->


	<script>
  var langs = [
    ['Afrikaans', ['af-ZA']],
    ['Bahasa Indonesia', ['id-ID']]

  ];

  for (var i = 0; i < langs.length; i++) {
    select_language.options[i] = new Option(langs[i][0], i);
  }
  select_language.selectedIndex = 1;
  updateCountry();
  select_dialect.selectedIndex = 1;
  showInfo('info_start');

  function updateCountry() {
    for (var i = select_dialect.options.length - 1; i >= 0; i--) {
      select_dialect.remove(i);
    }
    var list = langs[select_language.selectedIndex];
    for (var i = 1; i < list.length; i++) {
      select_dialect.options.add(new Option(list[i][1], list[i][0]));
    }
    select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
  }

  var create_email = false;
  var final_transcript = '';
  var recognizing = false;
  var ignore_onend;
  var start_timestamp;
  if (!('webkitSpeechRecognition' in window)) {
    upgrade();
  } else {
    start_button.style.display = 'inline-block';
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;

    recognition.onstart = function () {
      recognizing = true;
      showInfo('info_speak_now');
      start_img.src = '<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic-animate.gif';
    };

    recognition.onerror = function (event) {
      if (event.error == 'no-speech') {
        start_img.src = '<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic.gif';
        showInfo('info_no_speech');
        ignore_onend = true;
      }
      if (event.error == 'audio-capture') {
        start_img.src = '<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic.gif';
        showInfo('info_no_microphone');
        ignore_onend = true;
      }
      if (event.error == 'not-allowed') {
        if (event.timeStamp - start_timestamp < 100) {
          showInfo('info_blocked');
        } else {
          showInfo('info_denied');
        }
        ignore_onend = true;
      }
    };

    recognition.onend = function () {
      recognizing = false;
      if (ignore_onend) {
        return;
      }
      start_img.src = '<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic.gif';
      if (!final_transcript) {
        showInfo('info_start');
        return;
      }
      showInfo('');
      if (window.getSelection) {
        window.getSelection().removeAllRanges();
        var range = document.createRange();
        range.selectNode(document.getElementById('final_span'));
        window.getSelection().addRange(range);
      }
      if (create_email) {
        create_email = false;
        createEmail();
      }
    };

    recognition.onresult = function (event) {
      var interim_transcript = '';
      for (var i = event.resultIndex; i < event.results.length; ++i) {
        if (event.results[i].isFinal) {
          final_transcript += event.results[i][0].transcript;
        } else {
          interim_transcript += event.results[i][0].transcript;
        }
      }
      final_transcript = capitalize(final_transcript);
      final_span.innerHTML = linebreak(final_transcript);
      interim_span.innerHTML = linebreak(interim_transcript);
      if (final_transcript || interim_transcript) {
        showButtons('inline-block');
      }
    };
  }

  function upgrade() {
    start_button.style.visibility = 'hidden';
    showInfo('info_upgrade');
  }

  var two_line = /\n\n/g;
  var one_line = /\n/g;

  function linebreak(s) {
    return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
  }

  var first_char = /\S/;

  function capitalize(s) {
    return s.replace(first_char, function (m) {
      return m.toUpperCase();
    });
  }

  function createEmail() {
    var n = final_transcript.indexOf('\n');
    if (n < 0 || n >= 80) {
      n = 40 + final_transcript.substring(40).indexOf(' ');
    }
    var subject = encodeURI(final_transcript.substring(0, n));
    var body = encodeURI(final_transcript.substring(n + 1));
    window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
  }

  function copyButton() {
    if (recognizing) {
      recognizing = false;
      recognition.stop();
    }
    copy_button.style.display = 'none';
    copy_info.style.display = 'inline-block';
    showInfo('');
  }

  function emailButton() {
    if (recognizing) {
      create_email = true;
      recognizing = false;
      recognition.stop();
    } else {
      createEmail();
    }
    email_button.style.display = 'none';
    email_info.style.display = 'inline-block';
    showInfo('');
  }

  function startButton(event) {
    if (recognizing) {
      recognition.stop();
      return;
    }
    final_transcript = '';
    recognition.lang = select_dialect.value;
    recognition.start();
    ignore_onend = false;
    final_span.innerHTML = '';
    interim_span.innerHTML = '';
    start_img.src = '<?=base_url('assets/img/pelajar/praktikum/sholat/');?>mic-slash.gif';
    showInfo('info_allow');
    showButtons('none');
    start_timestamp = event.timeStamp;
  }

  function showInfo(s) {
    if (s) {
      for (var child = info.firstChild; child; child = child.nextSibling) {
        if (child.style) {
          child.style.display = child.id == s ? 'inline' : 'none';
        }
      }
      info.style.visibility = 'visible';
    } else {
      info.style.visibility = 'hidden';
    }
  }

  var current_style;

  function showButtons(style) {
    if (style == current_style) {
      return;
    }
    current_style = style;
    copy_button.style.display = style;
    email_button.style.display = style;
    copy_info.style.display = 'none';
    email_info.style.display = 'none';
  }
</script>
  </body>
</html>