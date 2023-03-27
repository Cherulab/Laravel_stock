<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel - @yield('title')</title>
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:100,600"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Styles -->
    <style>
      html,
      body {
        background-color: #fff;
        color: #636b6f;
        font-family: "Raleway", sans-serif;
        font-weight: 80;
        height: 100%;
        margin: 0;
      }
      td{
        font-size: 20px
      }
      img{
        height: 80px;
        width: 80px;
      }
      .tableau_stock{
        display: flex;
        flex-direction: column;
      }
      .full-height {
        height: 100%;
      }
      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .position-ref {
        position: relative;
      }
      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }
      .top-left {
        position: absolute;
        left: 10px;
        top: 18px;
      }
      .content {
        text-align: center;
        display: flex;
        flex-direction: column;
      }
      .title {
        font-size: 84px;
      }
      .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.1rem;
        text-decoration: none;
        text-transform: uppercase;
      }
      .nav-wrapper{
        display: block;
        align-items: center;
        margin: 2%;
      }
      a{
        color: black;
        font-size: 10px
      }
      p{
        color: black;
      }
      .supp_button{
        color: rgb(0, 0, 0);
      }
      .supp_button:hover{
        color: red;
      }
      .m-b-md {
        margin-bottom: 30px;
      }
      .m-t-mt {
        margin-top: 50px;
      }
      button{
        background-color: rgb(209, 209, 209);
        border-radius: 10%;
        margin: 1%
      }
      button:hover{
        background-color: orange;
      }
      a{
        text-decoration: none;
        font-size: 20px;
        color: rgb(0, 0, 0);
      }
      nav{
        margin: 10px;
        display: flex;
        align-content: center;
        flex-direction: column;
        height: 150px;
        background-color: rgb(221, 138, 79);
      }
    </style>
  </head>
  <body>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="top-right">Logo</a>
          <ul id="nav-mobile" class="top-left hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/stock">Stock</a></li>
            <li><a href="/stock_patissier">Patissier</a></li>
            <li><a href="/users"> Clients</a></li>
            <li><a href="/commande_client">Commandes</a></li>
          </ul>
        </div>
      </nav>
      <div class="content">@yield('content')</div>
    
  </body>
</html>
