
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="referrer" content="no-referrer-when-downgrade" />
  <title><?php echo $title; ?> 公式サイト</title>
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
  <?php include "tag/headTag.php"; ?>
</head>

<body>
  <?php include "tag/bodyTag.php"; ?>
  <div id="container">
    <div id="wrapper">
      <div class="loading-group">
        <div>
          <div class="loader"></div>
        </div>
        <p>しばらくお待ちください。</p>
      </div>
      <div class="banner-group">
        <img src="<?php echo $img; ?>" alt="">
        <p><?php echo $title; ?>の公式サイトに移動中です。</p>
      </div>

      <?php if(!empty($catch)) : ?>
      <div class="catch-group">
        <h1>
          <?php echo $catch; ?>
        </h1>
      </div>
      <?php endif; ?>

      <div class="link-group">
        <p>ページが移動しない場合は<br><a href="<?php echo $link; ?>">こちらをクリック</a>してください。</p>
      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <!-- acs設定用 -->
  <script>
    function acsRedirect() {
      var url = '<?php echo $link; ?>';
      var params = location.search.substring(1);
      var delay_ms = 1000;
      if (params) {
        var separator = (url.indexOf('?') === -1) ? '?' : '&';
        url += separator + params;
      }
      setTimeout(function() {
        location.href = url
      }, delay_ms);
    }

    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", acsRedirect);
    } else {
      acsRedirect();
    }
  </script>
  <!-- / acs設定用 -->
</body>

</html>