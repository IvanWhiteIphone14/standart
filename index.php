<!DOCTYPE html>
 
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="files/script-js/1.12.4.jquery.min.js"></script>
    <title>World Wide Autos</title>
    <meta property="og:title" content="World Wide Autos" />
    <meta property="og:image" content="{page-images-1}" />
    
    <meta property="og:description" content="World Wide Autos" />
    <meta name="description" content="World Wide Autos" />

    <link rel="stylesheet" href="files/style-css/button.css" />
    <link rel="stylesheet" href="files/style-css/bootstrap.css" />
    <link rel="stylesheet" href="files/style-css/bootstrap.css.map" />
    <link rel="stylesheet" href="files/style-css/icons.css" />
    <link rel="stylesheet" href="files/style-css/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="files/style-css/slick.css" />
    <link rel="stylesheet" type="text/css" href="files/style-css/slick-theme.css" />
    <script type="text/javascript" src="files/script-js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="files/script-js/slick.file.min.js"></script>
    <script type="text/javascript" src="files/script-js/jquery-code-show.show-more.js"></script>

     
    <link rel="shortcut icon" href="logotip.svg" type="image/x-icon" />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap');

      html{
        box-sizing: border-box;
        scroll-behavior: smooth;
      }

      body{
        margin: 0;
        padding: 0;
        direction: ltr;
        font-family: 'Arsenal', sans-serif !important;
      }

      img{
        max-width: 100%;
      }

      a {
        text-decoration: none;
        cursor: pointer;
      }

      .dop-pages {
        background-color: white;
      }

      .dop-pages-text {
        text-align: justify;
      }

      .stayTitl {
        padding-bottom: 23px;
        text-align: start;
        font-weight: bold;
      }

      .flex-style{
        display: flex;
        flex-direction: column-reverse;
      }

      .header-lay{
        position: relative;
        width: 100%;
        background-position: center;
        background-size: cover;
      }

      .header-lay::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(bg/0_bg.jpg);
        background-position: center;
        background-size: cover;
        z-index: -1;
        background-attachment: fixed;
      }

      .header-lay svg{
        position: relative;
        bottom: -4px;
      }

      .header{
        position: relative;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
      }

      .logo{
        display: flex;
        align-items: center;
        cursor: pointer;
        color: black;
        gap: 25px;
      }

      .logoImg img{
        width: 40px;
      }

      .logoTitle h2{
        transition: 0.5s ease;
        color: white;
        margin: 0;
      }

      .logoTitle h2:hover{
        color: #FF6F91;
      }

      nav {
        display: table;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 25px;
      }

      .header-nav-box{
        display: flex;
        align-items: center;
        flex-direction: row;
        gap: 48px;
      }

      .header-nav{
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .topmenu>li {
        float: left;
        position: relative;
      }

      .topmenu li i{
        font-size: 18px;
      }

      .topmenu>li>a {
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
        color: white;
        transition: .1s ease-in-out;
        text-decoration: none;
      }

      .topmenu>li>a:hover {
        border-bottom: 1px solid;
      }

      .header-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 48px;
        padding: 111px 0;
      }

      .header-content h2{
        color: white;
        font-size: 26px;
        text-align: center;
      }

      .header-content-box{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 20px;
      }

      .header-content-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 0.5;
        transition: opacity 1s ease;
        border-radius: inherit;
        z-index: -1;
      }

      .header-content-card {
        flex: 1;
        display: flex;
        text-align: center;
        transition: transform 1s ease;
        transform: scale(1);
        border-radius: 10px;
        flex-direction: column;
        align-items: center;
        background-color: transparent;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        gap: 9px;
        position: relative;
      }


      .header-content-card:hover{
        transform: scale(1.05);
      }

      .header-content-card h4{
        display: flex;
        flex-direction: row;
        align-items: center;
        font-size: 26px;
        gap: 9px;
        font-weight: bold;
      }

      .header-content-card h5{
        font-size: 18px;
      }

      .horse-lay{
        position: relative;
        width: 100%;
        background-position: center;
        background-size: cover;
        margin: 48px 0;
      }

      .horse-lay::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(bg/1_bg.jpg);
        background-position: center;
        background-size: cover;
        z-index: -1;
        background-attachment: fixed;
      }

      .horse{
        text-align: center;
        color: #fff;
        padding: 48px 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
      }

      .horse h2{
        display: flex;
        flex-direction: row;
        align-items: center;
        font-weight: bold;
        gap: 10px;
      }

      .horse h4{
        font-size: 18px;
      }

      .benefits{
        padding: 48px 0;
      }

      .benefits h2{
        font-weight: bold;
        text-align: center;
        margin-bottom: 25px;
      }

      .benefits-box{
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-direction: row;
      }

      .benefits-card{
        flex: 1;
        display: flex;
        text-align: center;
        flex-direction: column;
        transition: 0.5s ease;
        transform: scale(1);
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 25px;
        gap: 10px;
      }

      .benefits-card:hover{
        transform: scale(1.05);
      }

      .benefits-card h3{
        font-size: 18px;
        font-weight: bold;
      }

      .benefits-card p{
        font-size: 18px;
      }

      .product{
        padding: 48px 0;
      }

      .product h2{
        text-align: start;
        margin-bottom: 25px;
      }

      .product-box{
        display: flex;
        flex-direction: column-reverse;
        justify-content: space-between;
        gap: 25px;
      }

      .product-card{
        position: relative;
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 9px;
        flex-direction: row;
      }

      .product-card:nth-child(2), .product-card:nth-child(4), .product-card:nth-child(6){
        flex-direction: row;
      }

      .product-card-img{
        flex: 1;
        overflow: hidden;
        position: relative;
      }

      .product-card-img img{
        width: 100%;
        object-fit: contain;
        transition: transform 1s ease;
        transform: scale(1);
      }

      .product-card-img img:hover{
        transform: scale(1.05);
      }

      .product-card-code {
        position: absolute;
        top: 9px;
        left: 9px;
        margin: 0;
        padding: 9px;
        border-radius: 9px;
        background: #F6F6F6;
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .product-card:hover .product-card-code {
        opacity: 0.8;
      }

      .product-card-code::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        background: #F6F6F6;
        border-radius: 9px;
        z-index: -1;
        transition: opacity 0.3s ease;
      }

      .product-card:hover .product-card-code::before {
        opacity: 0;
      }

      .product-card-content{
        flex: 1;
        display: flex;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
        padding: 25px;
      }

      .product-card-title-box{
        display: flex;
        flex-direction: row;
        align-items: center;
        flex-wrap: wrap;
        gap: 9px;
        justify-content: space-between;
        border-bottom: 1px solid #F6F6F6;
        padding-bottom: 10px;
      }

      .product-card-title{
        font-size: 18px;
        font-weight: bold;
      }

      .aviable-product-card{
        color: #FF6F91;
      }

      .rating{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 9px;
      }

      .rating i{
        font-size: 18px;
        color: gold;
      }

      .product-card-price-box{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 10px;
        border-bottom: 1px solid #F6F6F6;
      }

      .product-card-price{
        font-weight: bold;
        font-size: 26px;
      }

      .rating-num h5{
        margin: 0;
        font-size: 18px;
        font-weight: bold;
      }

      .rating-box{
        border-bottom: 1px solid #F6F6F6;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        flex-direction: row;
      }


      .showmore-button {
        justify-content: center;
        align-items: center;
        background-color: transparent;
        color: black;
        cursor: pointer;
        display: flex;
        font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size:  16px;
        font-weight: 600;
        line-height: 1.5;
        text-decoration: none;
        text-transform: uppercase;
        outline: 0;
        border: 0;
        padding: 10px;
      }

      .showmore-button::before {
        background-color: black;
        content: "";
        display: inline-block;
        height: 1px;
        margin-right: 10px;
        transition: all .42s cubic-bezier(.25,.8,.25,1);
        width: 0;
      }

      .showmore-button::after {
        background-color: black;
        content: "";
        display: inline-block;
        height: 1px;
        margin-left: 10px;
        transition: all .42s cubic-bezier(.25,.8,.25,1);
        width: 0;
      }


      .showmore-button:hover::after, .showmore-button:hover:before {
        background-color: black;
        width: 40;
      }

      .forma-lay{
        position: relative;
        width: 100%;
        margin: 48px 0;
        background-position: center;
        background-size: cover;
      }

      .forma-lay::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(bg/2_bg.jpg);
        background-position: center;
        background-size: cover;
        z-index: -1;
        background-attachment: fixed;
      }

      .osn-form {
        padding: 48px 0;
        display: flex;
        flex-direction: column;
      }

      .title-container{
        margin-bottom: 25px;
        text-align: center;
      }

      .title-container h3{
        margin: 0;
        color: white;
        font-weight: bold;
      }

      .input-container {
        position: relative;
      }

      .input-container label{
        color: white;
      }

      .input-container .input-w11879490, .input-container .textarea-w11879490, .form button {
        outline: none;
        border: 1px solid #f6f6f6;
        margin: 8px 0;
      }

      .input-container .input-w11879490 {
        background-color: white;
        padding: 1rem;
        padding-right: 3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        border-radius: 10px;
        width: 100%;
        box-shadow: 0px 2px 7.68px 0.32px rgba(13, 13, 13, 0.05);
      }

      .input-container .textarea-w11879490 {
        background-color: white;
        padding: 1rem;
        padding-right: 3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        border-radius: 10px;
        width: 100%;
        box-shadow: 0px 2px 7.68px 0.32px rgba(13, 13, 13, 0.05);
      }

      .check{
        text-decoration: underline;
        color: white;
      }

      .check:hover{
        color: #FF6F91;
      }

      .form-check {
        color: white;
        display: flex;
        gap: 10px;
        justify-content: flex-start;
        padding: 15px 0;
      }

      .form-check .form-check-input{
        margin: 0;
      }

      .submit-form {
        margin: 0 auto;
      }

      .gallery{
        direction: initial;
      }

      .gallery div {
        position: relative;
      }

      .gallery img{
        object-fit: cover;
        width: 100%;
        transition: opacity 0.3s;
        height: 174px;
      }

      .gallery img:hover {
        opacity: 0.7;
      }

      .comment-lay{
        position: relative;
        width: 100%;
        margin: 48px 0;
        background-position: center;
        background-size: cover;
      }

      .comment-lay::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(bg/3_bg.jpg);
        background-position: center;
        background-size: cover;
        z-index: -1;
        background-attachment: fixed;
      }

      .comment{
        padding: 77px 0;
      }

      .comment h2{
        color: white;
        text-align: center;
        margin-bottom: 48px;
      }

      .comment-box{
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-direction: row;
      }

      .comment-card{
        flex: 1;
        position: relative;
        display: flex;
        justify-content: flex-end;
        flex-direction: column-reverse;
        background-color: white;
        border-radius: 10px;
        padding: 48px;
      }

      .comment-card img{
        object-fit: cover;
        width: 83px;
        right: 23px;
        bottom: -48px;
        border-radius: 50%;
        border: 2px solid #fff;
        position: absolute;
      }

      .comment-card-description h4{
        font-weight: bold;
        color: #230338;
      }

      .comment-card-description p{
        color: #44000D;
      }

      .footer-lay{
        background-color: #230338;
      }

      .footer-lay svg{
        position: relative;
        top: -4px;
      }

      .footer{
        flex-direction: row;
        gap: 48px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 48px 0;
      }

      .logo-footer{
        flex: 1;
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 25px;
      }

      .logo-footer-img{
        display: flex;
        align-items: flex-start;
        gap: 20px;
        flex-direction: column;
      }

      .logo-footer-img img{
        max-width: 83;
        margin-right: 10px;
      }

      .footer-contact {
        flex: 1;
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        text-align: center;
        gap: 10px;
      }

      .kontact-box h5 {
        font-size: 18px;
        margin-bottom: 10px;
      }

      .footer-politics {
        flex: 1;
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        text-align: center;
        gap: 10px;
      }

      .footer-list{
        padding: 0;
      }

      .footer-list li {
        list-style-type: none;
        margin-bottom: 10px;
      }

      .footer-list li a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        transition: color 0.3s ease;
      }

      .footer-list li a:hover {
        border-bottom: 1px solid;
      }

      .topmenu-box{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 9px;
      }

      @media (max-width: 991px) {
        .header{
          flex-direction: column;
          gap: 23px;
        }

        .header-content{
          padding: 111px 20px;
        }

        .header-content-box{
          flex-direction: column;
        }

        .benefits-box{
          flex-direction: column-reverse;
        }

        .product-card{
          flex-direction: column-reverse;
        }

        .product-card:nth-child(2), .product-card:nth-child(4), .product-card:nth-child(6){
          flex-direction: column-reverse;
        }

        .product-card-content{
          width: 100%;
        }

        #showmore-1{
          max-width: 100% !important;
        }

        #showmore-2{
          max-width: 100% !important;
        }

        #showmore-3{
          max-width: 100% !important;
        }

        #showmore-4{
          max-width: 100% !important;
        }

        .product-card{
          align-items: stretch;
        }

        .product-card-img img{
          width: 100%;
        }

        .product-card-price-box{
          flex-wrap: wrap;
          align-items: flex-start;
          gap: 20px;
        }

        .comment-box{
          flex-direction: column-reverse;
          gap: 93px;
        }

        .footer{
          text-align: center;
          flex-direction: column;
          align-items: center;
          gap: 48px;
        }

        .logo-footer{
          align-items: center;
        }

        .logo-footer-img{
          flex-wrap: wrap;
          flex-direction: column-reverse;
          align-items: center;
        }

        .comment-card{
          padding: 77px 48px;
        }

        .comment-card img{
          width: 93px;
        }

        .topmenu-box{
          flex-direction: column;
          align-items: center;
        }

        nav ul{
          flex-wrap: wrap;
          align-items: center;
          justify-content: center;
        }
      }


      @media (max-width: 575px) {
        .gallery img{
          height: auto;
        }
      }

      #call-window_nhmG9{
        z-index: 1 !important;
      }

      .zvonok_IljSTsvuJZnq_callback-icon{
        z-index: 1 !important;
      }

      #market-LNgef5Hm-main-basket-1 .market-LNgef5Hm-basket {
        color: #fff !important;
      }

      #market-LNgef5Hm-main-basket-1 .market-LNgef5Hm-basket-icon {
        color: #fff !important;
      }

      
      {random_style}
    </style>

    
  </head>

  <style>
        .floating-windows-aSS {
            display: none;
            position: fixed;
            bottom: 0px;
            width: 90%;
            max-width: 1017px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            background-color: #230338;
            border-radius: 0px;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.7);
            gap: 23px;
            z-index: 99999;
            padding: 23px;
            text-align: center;
        }
        .floating-windows-aSS a {
            color: #bbfeff;
        }
        .floating-windows-box-aSS {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .button-aSS {
            margin: 15px;
            position: relative;
            display: inline-block;
            padding: 16px 28px;
            font-weight: bold;
            border: 1px solid #230338;
            color: #230338;
            text-align: center;
            text-decoration: none;
            background-color: #fff;
            border-radius: 40px;
            overflow: hidden;
            z-index: 1;
            cursor: pointer;
            font-size: 13px;
            width: auto;
        }
        
        .button-aSS:hover {
            background-color: #230338;
            color: #fff;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }
        .modal-aSS {
            overflow-y: auto;
            display: none;
            position: fixed;
            z-index: 999999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        
        .modal-content-aSS {
            color: #000;
            background-color: #fff;
            padding: 20px;
            max-width: 700px;    
            border-radius: 0px;    
            box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.7);
            margin: 10% auto;
            position: relative;
        }
        
        .modal-close-aSS {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 28px;
            cursor: pointer;
        }
        
        .accordion-aSS {
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .accordion-header-aSS {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;
            cursor: pointer;
            position: relative;
        }
        
        .accordion-icon-aSS {
            position: absolute;
            right: 0;
            margin: 10px;
            color: #44000D;
            font-weight: bold;
        }
        
        .accordion-header-aSS input[type="checkbox"], input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            height: 2.1rem !important;
            display: inline-block;
            vertical-align: top;
            position: relative;
            margin: 0;
            cursor: pointer;
            border: 1px solid #4F565D;
            background: #fff;
            transition: background .3s, border-color .3s, outline .2s;
        }
        .accordion-header-aSS input[type="checkbox"]:after, input[type="radio"]:after {
            content: "";
            display: block;
            left: 0;
            top: 0;
            position: absolute;
            transition: transform .3s ease, opacity .2s;
        }
        .accordion-header-aSS input[type="checkbox"]:checked, input[type="radio"]:checked {
            background-color: #44000D;
            border-color: #44000D;
            transition: transform .6s cubic-bezier(.2,.85,.32,1.2), opacity .3s;
        }
        .accordion-header-aSS input[type="checkbox"]:disabled, input[type="radio"]:disabled {
            background-color: #44000D;
            border-color: #44000D;
            cursor: not-allowed;
        }
        .accordion-header-aSS input[type="checkbox"]:disabled:checked, input[type="radio"]:disabled:checked {
            background-color: #44000D;
        }
        .accordion-header-aSS input[type="checkbox"]:disabled + label, input[type="radio"]:disabled + label {
            cursor: not-allowed;
        }
        .accordion-header-aSS input[type="checkbox"]:hover:not(:checked):not(:disabled), input[type="radio"]:hover:not(:checked):not(:disabled) {
            border-color: #44000D;
        }
        .accordion-header-aSS input[type="checkbox"]:focus-visible, input[type="radio"]:focus-visible {
            outline: 2px solid #44000D;
            outline-offset: 4px;
        }
        .accordion-header-aSS input[type="checkbox"]:not(.switch-aSS), input[type="radio"]:not(.switch-aSS) {
            width: 2.1rem;
        }
        .accordion-header-aSS input[type="checkbox"] + label, input[type="radio"] + label {
            display: inline-block;
            cursor: pointer;
            font-size: 1.4rem;
            margin-left: .2em;
            vertical-align: top;
        }
        .accordion-header-aSS input[type="checkbox"]:not(.switch-aSS) {
            border-radius: .7rem;
        }
        .accordion-header-aSS input[type="checkbox"]:not(.switch-aSS):after {
            border: 2px solid #fff;
            height: 45%;
            width: 25%;
            border-top: 0;
            border-left: 0;
            left: 38%;
            top: 20%;
            transform: rotate(20deg);
        }
        .accordion-header-aSS input[type="checkbox"]:not(.switch-aSS):disabled:not(:checked):after {
            border-color:#44000D;
        }
        .accordion-header-aSS input[type="checkbox"]:not(.switch-aSS):checked:after {
            transform: rotate(43deg);
        }
        input[type="checkbox"].switch-aSS {
            width: 3.8rem;
            border-radius: 1.1rem;
        }
        .accordion-header-aSS input[type="checkbox"].switch-aSS:after {
            left: 5%;
            top: 10%;
            border-radius: 50%;
            width: 45%;
            height: 80%;
            background: #4F565D;
            transform: translateX(0);
        }
        .accordion-header-aSS input[type="checkbox"].switch-aSS:checked:after {
            background: #F6F8FF;
            transform: translateX(100%);
        }
        .accordion-header-aSS input[type="checkbox"].switch-aSS:disabled:not(:checked):after {
            background-color: #44000D;
        }
        .accordion-header-aSS input[type="radio"] {
            border-radius: 50%;
        }
        .accordion-header-aSS input[type="radio"]:after {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            transform: scale(.7);
        }
        .accordion-header-aSS input[type="radio"]:disabled:after {
            background: #44000D;
        }
        .accordion-header-aSS input[type="radio"]:checked:after {
            transform: scale(.5);
        }
        .accordion-body-aSS {
            padding: 10px;
            display: none;
        }
        
        .button-box-aSS {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 9px;
            margin-top: 10px;
        }
        .cookie-text-aSS{font-size: 13px;}
        @media(max-width: 1024px){
            .floating-windows-box-aSS{
                flex-direction: column;
            }
            .cookie-text-aSS{
                width: 100% !important;
            }
            .button-aSS{
                margin-bottom: 0px;
                padding: 5px 15px;
            }
            .buttons-aSS button:first-child{
                margin-top: 0px;
            }
        }
        @media(max-width: 576px){
            .buttons-aSS button:nth-child(2){
                display: none;
            }
            .buttons-aSS{
                display: flex;
                align-items: center;
                gap: 9px;
                justify-content: center;
            }
            .button-aSS{
                margin:0px;
                font-size: 11px;
            }
            .cookie-text-aSS{
               font-size: 11px;
            }
        }
        @media(max-width: 380px){
            .buttons-aSS{
                flex-wrap: wrap;
            }
        }
        </style>
        
        
        
         <div class="floating-windows-aSS">
                <div class="floating-windows-box-aSS">
                    <div class="cookie-text-aSS">Our site uses scripts, including cookies, to store and process information in your browser. This may include your personal data. We use this information for security, site improvement, and marketing. You can restrict the processing by selecting only the necessary cookies. By continuing to use the site, you agree to our <a href="cookies_policy.html" target="_blank">cookie policy</a>.</div>
                    <div class="buttons-aSS">
                        <button id="allow-all-cookie-aSS" class="button-aSS">Accept all cookies</button>
                        <button id="reject-all-aSS" class="button-aSS">Reject All</button>
                        <button id="cookie-settings-text-aSS" class="button-aSS">Cookie settings</button>
                    </div>
                </div>
            </div>
        
            <div id="modal-aSS" class="modal-aSS">
                <div class="modal-content-aSS">
                    <span id="modal-close-aSS" class="modal-close-aSS">&times;</span>
                    <h2>Cookie settings</h2>
                    <p>Cookies are small pieces of data sent from a website and stored on the user's computer by the web browser while it is running. The browser stores each message in a small file called a cookie. When you request another page from the server, your browser sends the cookie back to the server. Cookies have been developed as a reliable mechanism that allows websites to remember information or record user activity when browsing pages.</p>
        
                    <div class="accordion-aSS">
                        <div class="accordion-header-aSS">
                            <input type="checkbox" class="switch-aSS" checked disabled>
                            <span>&nbsp; Necessary</span>
                            <span class="accordion-icon-aSS">&#8744;</span>
                        </div>
                        <div class="accordion-body-aSS">
                            <p>Strictly necessary cookies - usually these cookies are necessary for the operation of the site. They can help you show the user the information they need, customize their experience, and allow you to implement and maintain security features. As a rule, without these cookies, the operation of the site is not possible or its functioning may be severely impaired.</p>
                        </div>
                    </div>
        
                    <div class="accordion-aSS">
                        <div class="accordion-header-aSS">
                            <input type="checkbox" class="switch-aSS" Unchecked >
                            <span>&nbsp; Functional</span>
                            <span class="accordion-icon-aSS">&#8744;</span>
                        </div>
                        <div class="accordion-body-aSS">
                            <p>Functional cookies - usually these cookies are used to improve the functional characteristics of your site and make it easier for users to use. These cookies remember the settings selected by users (for example, language and time zone settings). With the help of these files, users can avoid changing the settings each time they visit the site.</p>
                        </div>
                    </div>
                    <div class="accordion-aSS">
                        <div class="accordion-header-aSS">
                            <input type="checkbox" class="switch-aSS" Unchecked >
                            <span>&nbsp; Statistics</span>
                            <span class="accordion-icon-aSS">&#8744;</span>
                        </div>
                        <div class="accordion-body-aSS">
                            <p>Performance cookies - usually these cookies show whether the user has visited your site before. Analytical cookies allow you to recognize and count the number of users of your site and see how these users move around your site.</p>
                        </div>
                    </div>
        
                    <div class="accordion-aSS">
                        <div class="accordion-header-aSS">
                            <input type="checkbox" class="switch-aSS" Unchecked >
                            <span>&nbsp; Marketing</span>
                            <span class="accordion-icon-aSS">&#8744;</span>
                        </div>
                        <div class="accordion-body-aSS">
                            <p>Marketing, targeting, and advertising cookies – Usually, these cookies record visitors' visits to your site, the pages they visited, and the links they clicked on. This information is used to make the advertisements displayed on it more relevant to the interests of the user. Advertising cookies allow you to know if the user has already seen a specific advertisement or an advertisement of a certain type.</p>
                        </div>
                    </div>
                    <div class="button-box-aSS">
                        <button id="save-current-settings-aSS" class="button-aSS">Save current settings</button>
                        <button id="accept-all-cookies-aSS" class="button-aSS">Accept all cookies and close</button>
                    </div>
                </div>
            </div>
        
        
            <script>
              
            document.addEventListener("DOMContentLoaded", function () {
            const floatingWindow = document.querySelector(".floating-windows-aSS");
            const allowAllCookieButton = document.getElementById("allow-all-cookie-aSS");
            const rejectAllButton = document.getElementById("reject-all-aSS");
            const cookieSettingsButton = document.getElementById("cookie-settings-text-aSS");
            const modal = document.getElementById("modal-aSS");
            const modalClose = document.getElementById("modal-close-aSS");
            const acceptAllCookiesButton = document.getElementById("accept-all-cookies-aSS");
            const switchCheckboxes = document.querySelectorAll(".switch-aSS");
        
            
            const allCookiesAccepted = localStorage.getItem("allCookiesAccepted");
            if (allCookiesAccepted === "true") {
                switchCheckboxes.forEach(function (checkbox) {
                    checkbox.checked = true;
                });
            }
        
            acceptAllCookiesButton.addEventListener("click", function () {
                switchCheckboxes.forEach(function (checkbox) {
                    checkbox.checked = true;
                });
        
                localStorage.setItem("allCookiesAccepted", "true");
            });
        
        
            const isWindowClosed = localStorage.getItem("windowClosed");
            if (isWindowClosed === "true") {
                floatingWindow.style.display = "none";
            }
            if(localStorage.getItem("windowClosed") === null){
                floatingWindow.style.display = "block";
            }
        
            acceptAllCookiesButton.addEventListener("click", function () {
                switchCheckboxes.forEach(function (checkbox) {
                    checkbox.checked = true;
                });
                modal.style.display = "none";
                floatingWindow.style.display = "none";
                localStorage.setItem("windowClosed", "true"); 
            });
        
            modalClose.addEventListener("click", function () {
                modal.style.display = "none";
            });
        
            allowAllCookieButton.addEventListener("click", function () {
                floatingWindow.style.display = "none";
                localStorage.setItem("windowClosed", "true"); 
                modal.style.display = "none";
            });
        
            rejectAllButton.addEventListener("click", function () {
                floatingWindow.style.display = "none";
                localStorage.setItem("windowClosed", "true"); 
            });
        
            cookieSettingsButton.addEventListener("click", function () {
                modal.style.display = "block";
            });
           
            const accordions = document.querySelectorAll(".accordion-header-aSS");
            accordions.forEach(function (accordion) {
                const body = accordion.nextElementSibling;
                const icon = accordion.querySelector(".accordion-icon-aSS");
        
                 
                accordion.addEventListener("click", function () {
               
                    accordions.forEach(function (otherAccordion) {
                        if (otherAccordion !== accordion) {
                            otherAccordion.nextElementSibling.style.display = "none";
                            otherAccordion.querySelector(".accordion-icon-aSS").innerHTML = "&#8744;";
                        }
                    });
        
                    if (body.style.display === "none" || body.style.display === "") {
                        body.style.display = "block";
                        icon.innerHTML = "&#8743;";
                    } else {
                        body.style.display = "none";
                        icon.innerHTML = "&#8744;";
                    }
                });
         
                if (body.style.display === "block") {
                    icon.innerHTML = "&#8743;";
                } else {
                    icon.innerHTML = "&#8744;";
                }
            });
        
        
            const saveCurrentSettingsButton = document.getElementById("save-current-settings-aSS");
        
            saveCurrentSettingsButton.addEventListener("click", function () {
                modal.style.display = "none";
                localStorage.setItem("windowClosed", "true"); 
                floatingWindow.style.display = "none";
            });
        
            acceptAllCookiesButton.addEventListener("click", function () {
                modal.style.display = "none";
            });
        });
        
        const floatingBox = document.querySelector(`.floating-windows-box-aSS`);
        const cookieText = document.querySelector(`.cookie-text-aSS`);
        
        if (floatingBox) {
          const computedStyle = window.getComputedStyle(floatingBox);
          if (computedStyle.flexDirection === "row") {
            cookieText.style.width = "80%";
          } else if (computedStyle.flexDirection === "column") {
            cookieText.style.width = "100%";
          }
        }
        
        </script>
        
        

  <body class="nhmG9_15">
    <div class="header-lay">
      <div class="header container">
        <a class="logo" href="./">
          <div class="logoImg"><img src="logotip.svg" alt="" /></div>
          <div class="logoTitle"><h2>World Wide Autos</h2></div>
        </a>

        <div class="topmenu-box">
          <nav class="header-nav">
            <ul class="topmenu">
              <li>
                <a href="./"><i class="bi bi-house-fill"></i></a>
              </li>
              <li><a href="./#catalog">Catalog</a></li>
              <li><a href="./#comm">Comments</a></li>
              <li><a target="_blank" href="market-contact.html">Contacts</a></li>
            </ul>
          </nav>
          <div></div>
        </div>
      </div>

      <div class="header-content container">
        <h2>Greetings and welcome to our online store! Start looking for products that are specifically designed for you. Our team of experts is here to help you every step of the way.</h2>
        <div class="header-content-box nhmG9">
          <div class="header-content-card">
            <h4><i class="bi bi-binoculars"></i> That is ok</h4>
            <h5>Order the product online or by phone</h5>
          </div>
          <div class="header-content-card">
            <h4><i class="bi bi-truck"></i> Delivery</h4>
            <h5>Choose your payment method and delivery time</h5>
          </div>
          <div class="header-content-card">
            <h4><i class="bi bi-house-door"></i> Adoptive</h4>
            <h5>Get your order right at your door</h5>
          </div>
        </div>
      </div>
      <svg
        id="wave"
        style="transform: rotate(0deg); transition: 0.3s"
        viewBox="0 0 1440 100"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
      >
        <defs>
          <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
            <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
          </linearGradient>
        </defs>
        <path
          style="transform: translate(0, 0px); opacity: 1"
          fill="#fff"
          d="M0,30L60,40C120,50,240,70,360,66.7C480,63,600,37,720,36.7C840,37,960,63,1080,65C1200,67,1320,43,1440,43.3C1560,43,1680,67,1800,66.7C1920,67,2040,43,2160,33.3C2280,23,2400,27,2520,28.3C2640,30,2760,30,2880,38.3C3000,47,3120,63,3240,70C3360,77,3480,73,3600,65C3720,57,3840,43,3960,35C4080,27,4200,23,4320,21.7C4440,20,4560,20,4680,28.3C4800,37,4920,53,5040,58.3C5160,63,5280,57,5400,50C5520,43,5640,37,5760,41.7C5880,47,6000,63,6120,68.3C6240,73,6360,67,6480,66.7C6600,67,6720,73,6840,75C6960,77,7080,73,7200,61.7C7320,50,7440,30,7560,28.3C7680,27,7800,43,7920,53.3C8040,63,8160,67,8280,65C8400,63,8520,57,8580,53.3L8640,50L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z"
        ></path>
      </svg>
    </div>

    <script>
      $(document).ready(function () {
        function convertHex(hex, opacity) {
          hex = hex.replace('#', '');
          r = parseInt(hex.substring(0, 2), 16);
          g = parseInt(hex.substring(2, 4), 16);
          b = parseInt(hex.substring(4, 6), 16);

          result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
          return result;
        }
        $('.header-lay').css('background-color', convertHex('#060606', 70));
      });
    </script>
    

    <div class="container"></div>

    <div class="container">
      <div class="benefits">
        <h2>Our advantages:</h2>
        <div class="benefits-box">
          <div class="benefits-card">
            <h3>No geographical restrictions</h3>
            <p>We use data analytics to provide customers with personalized product recommendations.</p>
          </div>
          <div class="benefits-card">
            <h3>Compare purchases</h3>
            <p>We will help save time for clients engaged in work or other duties.</p>
          </div>
          <div class="benefits-card">
            <h3>Gift wrapping</h3>
            <p>We have a loyalty program that rewards customers for their purchases.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="horse-lay">
      <div class="container">
        <div class="horse">
          <h2><i class="bi bi-clock-fill"></i> Store Opening Hours:</h2>
          <h4>Monday - Friday: 7:00 - 19:00</h4>
          <h4>Saturday - Sunday: 11:00 - 18:00</h4>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="product">
        <h2>Catalogue of production</h2>
        <div class="product-box" id="catalog">
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img IljSTsvuJZnq">
              <img class="market-LNgef5Hm-img" src="1710186214.jpg" alt="Celebrate Automotive Excellence: 1963 Chevrolet Corvette Sting Ray Z06 (C2) Available Now at Worldwide Vintage Autos" />
              <p class="product-card-code">Product Code: Z26938546</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">Celebrate Automotive Excellence: 1963 Chevrolet Corvette Sting Ray Z06 (C2) Available Now at Worldwide Vintage Autos</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 52160 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">9021560.89 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p style="text-align: center;"><strong>Classic and Vitage autos - World Wide Autos</strong></p>
<p>For sale is a timeless classic, the 1963 Chevrolet Corvette Sting Ray Z06 (C2), a true automotive icon that has captured the hearts of enthusiasts worldwide. This exquisite vintage automobile, proudly brought to you by Worldwide Vintage Autos, embodies the essence of American automotive excellence.</p>
<p><strong>Crafted in the golden era of automotive design, the 1963 Corvette Sting Ray Z06 is a testament to the artistry and innovation worldwide autos of its time. </strong>With its unmistakable silhouette, this legendary sports car is characterized by its sculpted curves, dual headlamps, and iconic split rear window. Its timeless design is a testament to its enduring appeal, turning heads wherever it goes.</p>
<p>Under the hood, the heart of this vintage masterpiece beats with a powerful and performance-oriented spirit. The Z06 variant is equipped with a high-performance V8 engine that roars to life with the turn of the key. <strong>Its thrilling powertrain is perfectly matched with a manual transmission, offering an engaging driving experience that enthusiasts crave.</strong></p>
<p>Step inside the cabin, and you'll be greeted by a vintage interior that exudes charm and character. The cockpit worldwide autos features classic instrumentation, a sporty steering wheel, and comfortable seating, making every drive a nostalgic journey through time.</p>
<p>This 1963 Chevrolet Corvette Sting Ray Z06 is not just a car; it's a piece of automotive history that transcends generations. With its striking aesthetics, potent performance, and timeless appeal, it's a collectible that enthusiasts from vintage worldwide to modern-day auto aficionados can appreciate.</p>
<p><strong>Don't miss the opportunity to own a piece of automotive heritage.</strong> Contact Worldwide Vintage Autos today to make this exceptional 1963 Chevrolet Corvette Sting Ray Z06 (C2) a prized addition to your collection. Embark on a journey through time with our classic and vintage cars. Each car tells a story, each detail exudes style. Welcome to the world of automotive classics</p></div>
            </div>
          </div>
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img">
              <img class="market-LNgef5Hm-img" src="1705400067.webp" alt="Timeless Elegance: 1950 Cadillac Series 62 - Available Worldwide from Vintage Autos" />
              <p class="product-card-code">Product Code: U64951814</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">Timeless Elegance: 1950 Cadillac Series 62 - Available Worldwide from Vintage Autos</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 49462 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">8771408.89 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p>For sale is a stunning 1950 Cadillac Series 62, a true automotive masterpiece that exudes timeless elegance and unparalleled class. This vintage beauty, brought to you by Worldwide Vintage Autos, is a testament to the golden age of American automobiles.</p>
<p><strong>This meticulously crafted Cadillac Series 62 showcases a harmonious blend of classic design and modern convenience. </strong>Its sleek lines and gracefully contoured body are a testament to the era's dedication to artistry and craftsmanship. The chrome accents gleam with a lustrous brilliance, adding a touch of opulence to its overall presence.&nbsp;<strong>Classic and Vitage autos - World Wide Autos</strong></p>
<p>Step inside worldwide autos, and you'll be transported to an era of luxury and sophistication. The interior of this vintage worldwide gem is a showcase of fine materials and meticulous attention to detail. Plush leather seats cradle you in comfort, while the polished woodgrain trim adds warmth and refinement. Every control and feature is a testament to the Cadillac's commitment to driver and passenger satisfaction.</p>
<p><strong>Under the hood, the Series 62 boasts a powerful and smooth-running engine that provides both a nostalgic driving experience and reliable performance. </strong>This vintage worldwide classic is not just a sight to behold; it's also a joy to drive, with its effortless power steering and advanced suspension system ensuring a comfortable journey on any road.</p>
<p>Owning a 1950 Cadillac Series 62 from Worldwide Vintage Autos means becoming a part of automotive history. It's a statement of taste, style, and an appreciation for the artistry that went worldwide autos into crafting these iconic vehicles. Don't miss your chance to own this piece of history &ndash; contact Worldwide Vintage Autos today and make this vintage masterpiece yours. Explore a collection of elegant cars in my store: from luxurious classics to unique vintage gems. Stay in style with our automobiles!</p></div>
            </div>
          </div>
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img">
              <img class="market-LNgef5Hm-img" src="1710103080.jpg" alt="1936 Bugatti Type 57: Classic Elegance from Worldwide Vintage Autos" />
              <p class="product-card-code">Product Code: U2293040</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">1936 Bugatti Type 57: Classic Elegance from Worldwide Vintage Autos</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 69286 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">9692131.89 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p>In 1936, the Bugatti Type 57 is a true work of art and engineering. Available to you today through Worldwide Vintage Autos, this vintage car is the epitome of refined lines and unparalleled style. Every detail of this masterful creation speaks of the rich history of the Bugatti brand.</p>
<p><strong>The Bugatti Type 57, presented by Worldwide Vintage Autos, embodies the spirit of the classic era of automotive design. </strong>Its stunning exterior, with its unparalleled luxury and exquisite details, catches the eye of passers-by, and its elegant silhouette is a true work of art on wheels.</p>
<p>This 1936 Bugatti Type 57, available through Worldwide Vintage Autos, is not only a historical treasure but also a mechanical masterpiece. Its powerful worldwide autos engine and excellent suspension provide an indescribable driving experience, making every trip truly unforgettable.</p>
<p>The acquisition of a Bugatti Type 57 from Worldwide Vintage Autos is an opportunity to own a legend in the automotive industry. A unique chance to make your dreams come true and add indescribable charm and luxury to your collection. <strong>Don't miss this once-in-a-lifetime opportunity to become a Worldwide Autos owner of the classic beauty and history presented by Worldwide Vintage Autos. </strong>Embark on a journey through time with our classic and vintage cars. Each car tells a story, each detail exudes style. Welcome to the world of automotive classics</p></div>
            </div>
          </div>
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img">
              <img class="market-LNgef5Hm-img" src="1705157981.jpg" alt="A Historic Gem: A 1932 Ford Model B at Worldwide Vintage Autos" />
              <p class="product-card-code">Product Code: V80200952</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">A Historic Gem: A 1932 Ford Model B at Worldwide Vintage Autos</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 6489 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">10942456.89 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p>Welcome to Worldwide Vintage Autos, where you can purchase the magnificent vintage Ford Model B. This car is a real gem for collectors and connoisseurs of classics.</p>
<p style="text-align: center;"><strong>History and uniqueness:</strong></p>
<p>The Ford Model B was launched in 1932 and is a member of Ford's legendary line of vehicles known for their reliability and style. This particular specimen draws attention for its unique story. It has been meticulously restored with all the original parts and features, making it a true collector's worldwide vintage autos car.</p>
<p style="text-align: center;"><strong>Design:</strong></p>
<p>The 1932 Ford Model B has an exceptional vintage style from worldwide autos that catches the eye and creates a unique look. Its chrome details, harmonious lines and classic body design make this car a true work of art.</p>
<p style="text-align: center;"><strong>Specifications:</strong></p>
<p>This Ford Model B is equipped with the original engine and transmission, which gives it an authentic and original look. The engine runs smoothly for a pleasant driving experience, and the well-tuned suspension makes worldwide vintage rides comfortable.</p>
<p style="text-align: center;"><strong>Condition:</strong></p>
<p>The worldwide vintage car is in excellent condition thanks to years of careful care and restoration. All mechanical and electrical systems of worldwide vintage autos function properly, making it ready for daily use or participation in car parades and exhibitions.</p>
<p style="text-align: center;"><strong>Collectors' value:</strong></p>
<p>This Ford Model B is a great choice for collectors, true connoisseurs of vintage cars, and those who want to acquire a piece of automotive history. Not only is it a unique car with historical value, but it also has stunning looks and unparalleled aesthetics.</p>
<p>Don't miss the chance to become the proud owner of this vintage Ford Model B. Contact us today for more information, price and purchase conditions. This worldwide autos car will be a real jewel in your collection or a unique addition to your garage.</p></div>
            </div>
          </div>
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img">
              <img class="market-LNgef5Hm-img" src="1701744732.jpg" alt="Art & History: Vintage Chevrolet Bel Air at Worldwide Vintage Autos" />
              <p class="product-card-code">Product Code: J42587723</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">Art & History: Vintage Chevrolet Bel Air at Worldwide Vintage Autos</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 49063 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">11100759.79 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p style="text-align: center;"><strong>Classic and Vitage autos - World Wide Autos</strong></p>
<p>At Worldwide Vintage Autos, a rare vintage Chevrolet Bel Air is in perfect condition. This magnificent car was produced in the distant past and continues to impress with its beauty and style to this day.</p>
<p>The Chevrolet Bel Air is a true symbol of the golden era of Worldwide Vintage Autos. It has a unique and inimitable design that instantly transports you back to the days of rock 'n' roll and American pop culture of the 1950s. The Worldwide Vintage car has exquisite curves, chrome details, and a luxurious interior that showcases the automotive design art of the time.</p>
<p>This Chevrolet Bel Air has been meticulously restored and maintained in perfect technical condition. The exterior of the car has been recreated with love for detail, and every aspect of its original design has been preserved. The worldwide autos car is equipped with a powerful engine that guarantees an amazing driving experience and power worthy of a legend.</p>
<p>This Chevrolet Bel Air isn't just a car, it's a historical artifact that can grace your collection of classic worldwide autos<br />or become a perfect decoration for any event or photo shoot. This is a unique opportunity to acquire a piece of American automotive history and experience the atmosphere of the times when cars were not just a means of transportation, but art and style.</p>
<p>If you are looking for a vintage car that will delight you with its beauty and character, this Chevrolet Bel Air is the perfect choice. Contact me to learn more about this unique worldwide vintage machine and the possibility of purchasing it for your collection or personal use.</p>
<p>Embark on a journey through time with our classic and vintage cars. Each car tells a story, each detail exudes style. Welcome to the world of automotive classics</p></div>
            </div>
          </div>
          <div class="product-card market-LNgef5Hm">
            <div class="product-card-img">
              <img class="market-LNgef5Hm-img" src="1709097808.jpg" alt="Vintage Dodge Charger from Worldwide Vintage Autos." />
              <p class="product-card-code">Product Code: U48059922</p>
            </div>
            <div class="product-card-content">
              <div class="product-card-title-box">
                <h3 class="product-card-title market-LNgef5Hm-content-title">Vintage Dodge Charger from Worldwide Vintage Autos.</h3>
                <h5 class="aviable-product-card"><i class="bi bi-check"></i>&#8194;Accessible</h5>
              </div>
              <div class="rating-box">
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
                <div class="rating-num">
                  <h5>&#40; 18089 &#41;</h5>
                </div>
              </div>
              <div class="product-card-price-box">
                
                <div class="product-card-price">
                  <span> Price&#58;</span> &nbsp
                  <span class="market-LNgef5Hm-content-price">10630023.99 </span>
                  <span> $</span>
                </div>
                   <a href="#section-form" class="button-5"
                  >Buy Now</a
                >
              </div>
              <div class="product-card-description fst-normal"><p>This one-of-a-kind Dodge Charger is a true gem for collectors and connoisseurs of classic cars. Manufactured in the distant past, it inspires admiration for its elegant design and unparalleled style.</p>
<p style="text-align: center;"><strong>Features</strong></p>
<ol>
<li><strong>History:</strong> This Dodge Charger has a rich history and has undergone many changes over the years. Its past and unique atmosphere give it the added charm of worldwide autos.</li>
<li><strong>Appearance:</strong> This worldwide vintage car looks like a work of art on wheels. Majestic lines of worldwide vintage autos, chrome details and original stylistic solutions make it unique.</li>
<li><strong>Engine Power:</strong> The powerful Dodge Charger engine delivers incredible dynamics and authentic sound. It recreates the atmosphere of the golden era of worldwide vintage autos.</li>
<li><strong>Comfort & Style:</strong> The interior of the worldwide vintage combines luxury and convenience. Leather seats, wooden trim elements and a modern audio system create a comfortable space.</li>
<li><strong>Rarity:</strong> This Dodge Charger is a real rare find. Its collectible value only increases with time.</li>
</ol>
<p>Explore a collection of elegant cars in my store: from luxurious classics to unique vintage gems. Stay in style with our automobiles!</p>
<p>If you're looking for a unique car with history and style, this Dodge Charger from Worldwide Vintage Autos is a great choice. He is ready to win the heart of a true connoisseur of vintage cars.&nbsp;</p>
<p><em>Contact us today to learn more about the opportunity to purchase this exclusive vehicle.</em></p></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="forma-lay">
      <div class="container">
        <form class="osn-form" id="section-form" action="successful-purchase.html" method="post">
          <div class="title-container">
            <h3>Order form</h3>
          </div>
          <div class="input-container"> <label for="w11879490-name">Enter your name</label><input class="input-w11879490" id="w11879490-name" type="text" name="name-dHWkX0yM0Fc" required> <label for="w11879490-phone">Enter your phone number</label><input name="phone-dHWkX0yM0Fc" class="input-w11879490" id="w11879490-phone" type="tel" required> <label for="w11879490-email">E-mail address</label><input name="email-dHWkX0yM0Fc" class="input-w11879490" id="w11879490-email" type="email" required> <label for="w11879490-count">Quantity</label><input name="count-dHWkX0yM0Fc" class="input-w11879490" id="w11879490-count" type="number" required> <label for="w11879490-address">Address</label><input name="address-dHWkX0yM0Fc" class="input-w11879490" required id="w11879490-address" type="text"> <label for="w11879490-zip">Postal code</label><input name="zip-dHWkX0yM0Fc" class="input-w11879490" required id="w11879490-zip" type="text"></div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkbox" required />
            <label class="form-check-label" for="checkbox"
              >I accept
              <a href="privacy_policy.html" class="check">Privacy policy</a>
            </label>
          </div>
          <button class="submit-form button-5">Buy Now</button>
        </form>
      </div>
    </div>
    

    <div class="gallery">
      <div>
        <a data-fancybox="gallery" href="gallery/0-gallery.jpg">
          <img src="gallery/0-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/2-gallery.jpg">
          <img src="gallery/2-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/4-gallery.jpg">
          <img src="gallery/4-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/6-gallery.jpg">
          <img src="gallery/6-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/8-gallery.jpg">
          <img src="gallery/8-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/10-gallery.jpg">
          <img src="gallery/10-gallery.jpg" alt="" />
        </a>
      </div>
      <div>
        <a data-fancybox="gallery" href="gallery/12-gallery.jpg">
          <img src="gallery/12-gallery.jpg" alt="" />
        </a>
      </div>
    </div>

    <div class="comment-lay">
      <div class="container">
        <div class="comment" id="comm">
          <h2>Comments</h2>
          <div class="comment-box">
            <div class="comment-card">
              <img src="avatar/w-0.jpg" alt="" />
              <div class="comment-card-description">
                <h4>Chloe-Louise Weaver</h4>
                <p>I was looking for a certain product, and the staff at that store helped me find it. I am so grateful for their help.</p>
              </div>
            </div>
            <div class="comment-card">
              <img src="avatar/m-0.jpg" alt="" />
              <div class="comment-card-description">
                <h4>Kasper Johnson</h4>
                <p>I found the perfect gift for my friend in this store and I couldn't believe my eyes, the prices are super. Highly recommended!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $('.gallery').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,

          arrows: false,
          responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 4,
              },
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        });
      });
    </script>

    <script>
      $('.product-card-description').showMore({
        buttontxtmore: 'Show More',
        buttontxtless: 'Less',
        minheight: 160,
      });
    </script>

    <script>
      $(document).ready(function () {
        function convertHex(hex, opacity) {
          hex = hex.replace('#', '');
          r = parseInt(hex.substring(0, 2), 16);
          g = parseInt(hex.substring(2, 4), 16);
          b = parseInt(hex.substring(4, 6), 16);

          result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
          return result;
        }
        $('.horse-lay').css('background-color', convertHex('#060606', 70));
        $('.forma-lay').css('background-color', convertHex('#060606', 70));
        $('.comment-lay').css('background-color', convertHex('#060606', 70));
      });
    </script>

    

    <div class="footer-lay aSS">
      <svg
        id="wave"
        style="transform: rotate(180deg); transition: 0.3s"
        viewBox="0 0 1440 100"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
      >
        <defs>
          <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
            <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
          </linearGradient>
        </defs>
        <path
          style="transform: translate(0, 0px); opacity: 1"
          fill="#fff"
          d="M0,30L60,40C120,50,240,70,360,66.7C480,63,600,37,720,36.7C840,37,960,63,1080,65C1200,67,1320,43,1440,43.3C1560,43,1680,67,1800,66.7C1920,67,2040,43,2160,33.3C2280,23,2400,27,2520,28.3C2640,30,2760,30,2880,38.3C3000,47,3120,63,3240,70C3360,77,3480,73,3600,65C3720,57,3840,43,3960,35C4080,27,4200,23,4320,21.7C4440,20,4560,20,4680,28.3C4800,37,4920,53,5040,58.3C5160,63,5280,57,5400,50C5520,43,5640,37,5760,41.7C5880,47,6000,63,6120,68.3C6240,73,6360,67,6480,66.7C6600,67,6720,73,6840,75C6960,77,7080,73,7200,61.7C7320,50,7440,30,7560,28.3C7680,27,7800,43,7920,53.3C8040,63,8160,67,8280,65C8400,63,8520,57,8580,53.3L8640,50L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z"
        ></path>
      </svg>
      <div class="container">
        <div class="footer">
          <div class="logo-footer">
            <a class="logo" href="./">
              <div class="logoImg"><img src="logotip.svg" alt="" /></div>
              <div class="logoTitle"><h2>World Wide Autos</h2></div>
            </a>
            <div class="logo-footer-img">
              <img src="visa-logo.svg" alt="" />
              <img src="ppcom.svg" alt="" />
              <img src="mastercard-logo.svg" alt="" />
            </div>
          </div>
          
          <div class="footer-contact">
            <div class="kontact-box">
              <h5> 9168 Gaither Rd, Gaithersburg, MD 20877</h5>
            </div>
            <div class="kontact-box">
              <h5>(479) 750-2805</h5>
            </div>
            <div class="kontact-box">
              <h5>our_mail_literate@mail.us</h5>
            </div>
          </div>
          
          <div class="footer-politics">
            <ul class="footer-list">
              <li>
                <a href="pay_policy.html" target="_blank">Payment & Delivery</a>
              </li>
              <li>
                <a href="refound_policy.html" target="_blank"> Returns & Exchanges</a>
              </li>
              <li>
                <a href="privacy_policy.html" target="_blank">Privacy policy</a>
              </li>

              <li>
                <a href="term_policy.html" target="_blank">Terms & Conditions</a>
              </li>
              <li>
                <a href="disclaimer_policy.html" target="_blank">Disclaimer</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

       
  </body>
</html>

