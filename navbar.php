<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ZFV Enterprises</title>
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
  </head>
  <body>
    <nav>
      <div class="logo">ZFV Enterprises</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
    
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <label for="btn-1" class="show">Features +</label>
          <a href="#">Features</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Elements</a></li>
            <li><a href="#">Icons</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show">Services +</label>
          <a href="#">Services</a>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">App Design</a></li>
            <li>
              <label for="btn-3" class="show">More +</label>
              <a href="#">More <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
              <ul>
                <li><a href="#">Submenu-1</a></li>
                <li><a href="#">Submenu-2</a></li>
                <li><a href="#">Submenu-3</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="content">
     
    </div>
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>
