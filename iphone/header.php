<?php 
include_once('../w/wp-load.php');
$query = "?".$_SERVER['QUERY_STRING'];
$search = array('?f=index.php&','?f=index.php');
$query2 = str_replace($search, '', $query);
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <script language="javascript">
  (function() {
    var _lgy = document.createElement('script');
    var _lgy_adv = 8219;
    window._lgy_advs = window._lgy_advs || {};
    window._lgy_advs[_lgy_adv] = false;
    window._lgy_options = window._lgy_options || {};
    window._lgy_options[_lgy_adv] = {};
    _lgy.async = true;
    _lgy.src = 'https://dsp.logly.co.jp/seg.js';
    var _lgy0 = document.getElementsByTagName('script')[0];
    _lgy0.parentNode.insertBefore(_lgy, _lgy0);
  })();
  </script>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-T329LCK');
  </script>
  <!-- End Google Tag Manager -->

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>優良乳酸菌サプリメントをご紹介</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <!-- <link rel="stylesheet" href="./styles.css" type="text/css" /> -->
  <link rel="stylesheet" href="./n_styles.css?v<?php echo time(); ?>" type="text/css" />
  <link rel="stylesheet" href="./css/textstyles.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <style>
  each input[type="checkbox"].c1 {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck1.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c1:checked:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 0px;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck1_on.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c2 {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck2.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c2:checked:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 0px;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck2_on.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c3 {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck3.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c3:checked:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 0px;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck3_on.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c4 {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck4.png) no-repeat;
    background-size: contain;
  }

  input[type="checkbox"].c4:checked:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 0px;
    display: inline-block;
    width: 47%;
    height: 51px;
    background: url(./img/spcheck4_on.png) no-repeat;
    background-size: contain;
  }
  </style>
    <script>
      function route_query(){
      var _KEYS = ["gclid", "yclid", "fbclid","msclkid"];
      var _LPU = "https://xn--hdks4057bh4s.net/";
      var _LPTU = "./";
      var _ATTRN = "href";
      var _OPSL = ["^=", "=", "*="];
      var _OPSV = 0;
      var _params = location.search.substring(1).split("&");
      var _in = [];
      _KEYS.forEach(function (key){ _params.forEach(function (param){ var kv = param.split("="); if(kv[0] === key){ _in[key] = kv[1]; } }); });
      var _pp = ""; Object.keys(_in).forEach(function (key){ _pp += "key[]=AC_" + key + "&"; _pp += "val[]=" + _in[key] + "&"; localStorage.setItem("AC_" + key, _in[key]); }); _pp = _pp.slice(0, -1); _LPTU += "route_tag.php?" + _pp;
      _xhr = new XMLHttpRequest(); _xhr.open("GET", _LPTU, false); _xhr.onreadystatechange = function (){ if(_xhr.readyState === 4 && _xhr.status !== 200){ Object.keys(_in).forEach(function (key){ if(_in[key]){ document.cookie = "AC_" + key + "=" + decodeURIComponent(_in[key]) + "; expires=" + new Date(new Date().getTime() + 63072000000).toUTCString(); } }); } }; _xhr.send();
      var _cookie = document.cookie.split("; "); var _out = _in; _KEYS.forEach(function (key){ if(_out.hasOwnProperty(key)){ return; } if(!_out[key]){ _cookie.forEach(function (param){ var kv = param.split("="); if(kv[0] === "AC_" + key){ _out[key] = kv[1]; } }); } if(!_out[key] && localStorage.getItem("AC_" + key)){ _out[key] = localStorage.getItem("AC_" + key); } if(!_out[key]){ _out[key] = ""; } });
      var _node_list = document.querySelectorAll("[" + _ATTRN + _OPSL[_OPSV] + '"' + _LPU + '"]'); var _node = Array.prototype.slice.call(_node_list, 0); _node.forEach(function (elem){ var url = ""; var attr = elem.getAttribute(_ATTRN); var regexp = new RegExp(/\?/); Object.keys(_out).forEach(function (key, i){ if(i === 0){ if(regexp.test(attr)){ url = attr + "&" + key + "=" + _out[key]; }else{ url = attr + "?" + key + "=" + _out[key]; } }else{ url += "&" + key + "=" + _out[key]; } }); elem.setAttribute(_ATTRN, url); }); }
      if(document.readyState !== "loading"){ route_query(); }else{ document.addEventListener("DOMContentLoaded", route_query); }
  </script>  
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->