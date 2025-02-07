<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="common/reset.css">
    <link rel="stylesheet" href="styles/style.css">
       
    
  </head>
  <body>
    <div class="div">
      <div class="div1"></div>
      <div class="frame-parent">
        <div class="wrapper">
          <img
            class="icon4"
            loading="lazy"
            alt=""
            src="images/Login.svg"
            id="icon"
          />
        </div>
        <img class="icon2" loading="lazy" alt="" src="images/mainLogo.png">

        <div class="frame-wrapper">
          <div class="parent">
            <div class="textarea" id="container">
              <div class="container">
                <img
                  class="icon2"
                  loading="lazy"
                  alt=""
                  src="images/Login.svg"
                />
              </div>
              <a class="div8">ログイン</a>
            </div>
            <div class="textarea" id="container1">
              <div class="frame">
                <img
                  class="icon1"
                  loading="lazy"
                  alt=""
                  src="images/Cart.svg"
                />
              </div>
              <a class="div8">カート</a>
            </div>
          </div>
        </div>
      </div>
      <textarea class="div2" rows="{2}" cols="{18}"> </textarea>
    </div>

    <script>
      var icon = document.getElementById("icon");
      if (icon) {
        icon.addEventListener("click", function (e) {
          // sync "ドロワーメニュー" to the project
        });
      }
      
      var container = document.getElementById("container");
      if (container) {
        container.addEventListener("click", function (e) {
          // sync "ログインページ" to the project
        });
      }
      
      var container1 = document.getElementById("container1");
      if (container1) {
        container1.addEventListener("click", function (e) {
          // sync "SPカートページ" to the project
        });
      }
      </script>
  </body>
</html>
