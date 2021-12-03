<!DOCTYPE html>
<html  data-wf-page="619c25a6fa244c829a2fc462"
    data-wf-site="619c25a6fa244c19232fc461" data-wf-status="1"
    class="w-mod-js wf-bitter-i4-active wf-changaone-n4-active wf-changaone-i4-active wf-bitter-n7-active wf-bitter-n4-active wf-active">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <title>Trabajo Cloud - Diana Patino</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="./src/top-notch-site-663653.webflow.250d6318c.css" rel="stylesheet" type="text/css">
    <script src="./src/webfont.js.descarga" type="text/javascript"></script>
    <link rel="stylesheet" href="./src/css" media="all">
    <script type="text/javascript">WebFont.load({ google: { families: ["Changa One:400,400italic", "Bitter:400,700,400italic"] } });

        function clearcontent(elementID, code) {
            document.getElementById(elementID).innerHTML = code;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="img/webclip.png" rel="apple-touch-icon">
    <style type="text/css">
        .vue-star-rating-star[data-v-ef4bc576] {
            overflow: visible !important
        }

        .vue-star-rating-star-rotate[data-v-ef4bc576] {
            transition: all .25s
        }

        .vue-star-rating-star-rotate[data-v-ef4bc576]:hover {
            transition: transform .25s;
            transform: rotate(-15deg) scale(1.3)
        }
    </style>
    <style type="text/css">
        .vue-star-rating-star[data-v-fde73a0c] {
            display: inline-block
        }

        .vue-star-rating-pointer[data-v-fde73a0c] {
            cursor: pointer
        }

        .vue-star-rating[data-v-fde73a0c] {
            display: flex;
            align-items: center
        }

        .vue-star-rating-inline[data-v-fde73a0c] {
            display: inline-flex
        }

        .vue-star-rating-rating-text[data-v-fde73a0c] {
            margin-left: 7px
        }

        .vue-star-rating-rtl[data-v-fde73a0c] {
            direction: rtl
        }

        .vue-star-rating-rtl .vue-star-rating-rating-text[data-v-fde73a0c] {
            margin-right: 10px;
            direction: rtl
        }

        .sr-only[data-v-fde73a0c] {
            position: absolute;
            left: -10000px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden
        }

        textarea {
            background: url(http://i.imgur.com/2cOaJ.png);
            background-attachment: local !important;
            background-repeat: no-repeat !important;
            padding-left: 35px !important;
            padding-top: 10px !important;
            border-color: #ccc !important;
            font-size: 11.7px !important;
        }
    </style>
    <style>
        [_nghost-mmn-c60] {
            font-family: Open Sans, sans-serif;
            color: #121212
        }
    </style>
</head>

<body class="body">
    <div class="wf-section">
        <h1 class="heading">Python Console Web</h1>
<h3 class="heading">Trabajo Final - Cloud Computing</h3>
<h4 class="heading">Diana Patiño Polar</h4>
    </div>
    <div class="w-row">
        <div class="w-col w-col-6">
            <div class="w-form">
                <form id="wf-form-Form" name="wf-form-FormCode" data-name="FormCode" action="/" method="post">
                    <input type="submit" value="Run" data-wait="Please wait..." class="w-button">

                    <textarea placeholder="print (&quot;Hola Mundo&quot;)" maxlength="5000" id="texcode" name="code"
                        required="" data-name="field" class="code w-input"
                        onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}"><?php
                		if ($_POST["code"]){
                        		echo htmlspecialchars($_POST["code"]);
				}else{
					echo 'print ("Hola Mundo")';
				}
			?>
			</textarea>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
        <div class="w-col w-col-6">
            <button type="button" class="button w-button"
                onclick="clearcontent('outputcodeid','>	')">Clear</button>
            <div class="outputcode" id="outputcodeid">

	<?php
		function generateRandomString($length = 10) {
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$charactersLength = strlen($characters);
    		$randomString = '';
    		for ($i = 0; $i < $length; $i++) {
        		$randomString .= $characters[rand(0, $charactersLength - 1)];
    		}
    		return $randomString;
		}

		if ($_POST["code"]){
			$start_time = microtime(true);
			//echo htmlspecialchars($_POST["code"]);

			$fichero = generateRandomString().".py";
			$actual = $_POST["code"];
			file_put_contents($fichero, $actual);

			$out = "";
			$code = -1;
			//ob_start();

			$maxtime = 15;

			$salida = exec('timeout '.$maxtime.' python3 '.$fichero. " 2>&1",$out,$code);
			//$salida = str_replace('\n', '<br>', $salida);
			//print_r($out);
			//var_dump($out);
			foreach ($out as $valor){
				echo '>'.$valor."<br>";
			}
			$end_time = microtime(true);
			if ($code == 0){
				echo "<br>Ejecución Existosa en: ".($end_time - $start_time)." seg.<br>";
			}else if ($code == 124){
				echo "<br>Ejecución con ERROR en: ".($end_time - $start_time)." seg.<br>";
				echo "Se excedió tiempo limite de ejecucion de ".$maxtime." seg.<br>";
			}else{
				echo "<br>Ejecución con ERROR en: ".($end_time - $start_time)." seg.<br>";
				echo "Código de Error: ".$code.'<br>';
			}
			unlink ($fichero);
			//echo htmlspecialchars($salida);

		}else{
			echo ">";
		}

	?>
		</div>
        </div>
    </div>
    <script src="./src/jquery-3.5.1.min.dc5e7f18c8.js.descarga" type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./src/webflow.3824faad1.js.descarga" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
<app-content ng-version="11.1.0"></app-content>

</html>
