<link rel="stylesheet" href="../../app/css/nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
  nav i{
    margin-left: 2px;
  }
  nav .logo {
    margin-left: 20px;
    width: 60px; /* Adjust the width as needed */
    height: 60px; /* Adjust the height as needed */
}
#perf{
  margin-left: 700px;
}#perf i{
  margin: 7px;
}#parame i{
  margin: 7px;
}
</style>
<nav>
<a href="../views/dashboard.php" class="logo-container">
      <img src="../assets/img/LogoFST.png" alt="logo" class="logo">
</a>

  <ul>
    <li id="parame"><a href="#"><i class="fa-solid fa-shop"></i> Productos</a>
      <ul>

        <li><a href="../controllers/LandiPages/consultar-product.php">Consultar Productos</a></li>
        <li><a href="#">Consultar por Categoria</a></li>
      </ul>
    </li>
 
    <li id="parame"><a href="#"><i class="fa-solid fa-layer-group"></i> Categorias</a>
      <ul
        <li><a href="#">Consultar Categoria</a></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> Compras</a>
      <ul>
        <li><a href="#">Consultar Compras</a></li>
        <li><a href="#">Compras Pendientes</a></li>
        <li><a href="#">Rembolsos</a></li>
      </ul>
    </li> 

    <li id="perf"><a href="#"><i class="fa-solid fa-sliders"></i>Ajustes</a>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="../../app/index.php">Cerrar Sesión</a></li>
      </ul>
    </li>
  </ul>
  
</nav>
<div class="wave">
<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 590" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
          .path-0{
            animation:pathAnim-0 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-0{
            0%{
              d: path("M 0,600 L 0,337 C 68.91550073637703,373.9778166421208 137.83100147275405,410.95563328424157 205,379 C 272.16899852724595,347.04436671575843 337.59149484536084,246.15528350515464 389,216 C 440.40850515463916,185.84471649484536 477.80301914580264,226.42323269513992 531,211 C 584.1969808541974,195.57676730486008 653.1964285714286,124.15178571428572 718,92 C 782.8035714285714,59.848214285714285 843.4112665684831,66.96962444771722 910,54 C 976.5887334315169,41.03037555228277 1049.158505154639,7.969716494845365 1112,-23 C 1174.841494845361,-53.969716494845365 1227.9547128129602,-82.84849042709868 1281,-110 C 1334.0452871870398,-137.15150957290132 1387.02264359352,-162.57575478645066 1440,-188 L 1440,600 L 0,600 Z");
            }
            25%{
              d: path("M 0,600 L 0,337 C 62.14561855670104,312.8900036818851 124.29123711340208,288.78000736377027 182,289 C 239.70876288659792,289.21999263622973 292.98067010309273,313.76997422680415 355,302 C 417.01932989690727,290.23002577319585 487.78608247422676,242.14009572901324 546,216 C 604.2139175257732,189.85990427098676 649.875,185.66964285714286 709,154 C 768.125,122.33035714285714 840.7139175257732,63.181332842415316 908,40 C 975.2860824742268,16.818667157584684 1037.269329896907,29.605025773195877 1096,10 C 1154.730670103093,-9.605025773195878 1210.2087628865982,-61.60143593519882 1267,-100 C 1323.7912371134018,-138.39856406480118 1381.8956185567008,-163.1992820324006 1440,-188 L 1440,600 L 0,600 Z");
            }
            50%{
              d: path("M 0,600 L 0,337 C 48.206921944035344,369.16761782032404 96.41384388807069,401.335235640648 147,392 C 197.5861561119293,382.664764359352 250.5515463917526,331.82667525773195 328,307 C 405.4484536082474,282.17332474226805 507.37997054491905,283.3580633284241 571,237 C 634.620029455081,190.64193667157585 659.9285714285714,96.74107142857143 714,70 C 768.0714285714286,43.25892857142857 850.9057437407954,83.67765095729013 914,62 C 977.0942562592046,40.322349042709874 1020.4484536082475,-43.45167525773195 1071,-67 C 1121.5515463917525,-90.54832474226805 1179.3004418262149,-53.8709499263623 1242,-64 C 1304.6995581737851,-74.1290500736377 1372.3497790868926,-131.06452503681885 1440,-188 L 1440,600 L 0,600 Z");
            }
            75%{
              d: path("M 0,600 L 0,337 C 66.86027245949927,324.8773011782032 133.72054491899854,312.75460235640645 199,306 C 264.27945508100146,299.24539764359355 327.9780927835052,297.85889175257734 383,288 C 438.0219072164948,278.14110824742266 484.36708394698087,259.8098306332842 533,230 C 581.6329160530191,200.1901693667158 632.5535714285713,158.90178571428572 688,126 C 743.4464285714287,93.09821428571428 803.4186303387335,68.5830265095729 868,34 C 932.5813696612665,-0.5830265095728971 1001.7719072164946,-45.23389175257732 1072,-78 C 1142.2280927835054,-110.76610824742268 1213.4937407952873,-131.64745949926362 1275,-148 C 1336.5062592047127,-164.35254050073638 1388.2531296023562,-176.1762702503682 1440,-188 L 1440,600 L 0,600 Z");
            }
            100%{
              d: path("M 0,600 L 0,337 C 68.91550073637703,373.9778166421208 137.83100147275405,410.95563328424157 205,379 C 272.16899852724595,347.04436671575843 337.59149484536084,246.15528350515464 389,216 C 440.40850515463916,185.84471649484536 477.80301914580264,226.42323269513992 531,211 C 584.1969808541974,195.57676730486008 653.1964285714286,124.15178571428572 718,92 C 782.8035714285714,59.848214285714285 843.4112665684831,66.96962444771722 910,54 C 976.5887334315169,41.03037555228277 1049.158505154639,7.969716494845365 1112,-23 C 1174.841494845361,-53.969716494845365 1227.9547128129602,-82.84849042709868 1281,-110 C 1334.0452871870398,-137.15150957290132 1387.02264359352,-162.57575478645066 1440,-188 L 1440,600 L 0,600 Z");
            }
          }</style><path d="M 0,600 L 0,337 C 68.91550073637703,373.9778166421208 137.83100147275405,410.95563328424157 205,379 C 272.16899852724595,347.04436671575843 337.59149484536084,246.15528350515464 389,216 C 440.40850515463916,185.84471649484536 477.80301914580264,226.42323269513992 531,211 C 584.1969808541974,195.57676730486008 653.1964285714286,124.15178571428572 718,92 C 782.8035714285714,59.848214285714285 843.4112665684831,66.96962444771722 910,54 C 976.5887334315169,41.03037555228277 1049.158505154639,7.969716494845365 1112,-23 C 1174.841494845361,-53.969716494845365 1227.9547128129602,-82.84849042709868 1281,-110 C 1334.0452871870398,-137.15150957290132 1387.02264359352,-162.57575478645066 1440,-188 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="#000000" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 300)"></path><style>
          .path-1{
            animation:pathAnim-1 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-1{
            0%{
              d: path("M 0,600 L 0,487 C 74.33965390279823,496.92332474226805 148.67930780559647,506.8466494845361 211,490 C 273.32069219440353,473.1533505154639 323.62242268041234,429.5367268041237 381,393 C 438.37757731958766,356.4632731958763 502.8310014727541,327.0064432989691 565,327 C 627.1689985272459,326.9935567010309 687.0535714285714,356.4375 744,317 C 800.9464285714286,277.5625 854.9547128129602,169.2435567010309 916,133 C 977.0452871870398,96.75644329896907 1045.1275773195878,132.5882731958763 1108,119 C 1170.8724226804122,105.4117268041237 1228.5349779086894,42.40335051546391 1283,8 C 1337.4650220913106,-26.403350515463913 1388.7325110456554,-32.20167525773196 1440,-38 L 1440,600 L 0,600 Z");
            }
            25%{
              d: path("M 0,600 L 0,487 C 56.7107879234168,502.6793998527246 113.4215758468336,518.3587997054492 172,515 C 230.5784241531664,511.6412002945508 291.0244845360824,489.24420103092785 356,456 C 420.9755154639176,422.75579896907215 490.48048600883646,378.6643961708395 557,346 C 623.5195139911635,313.3356038291605 687.0535714285714,292.09821428571433 749,255 C 810.9464285714286,217.9017857142857 871.3052282768776,164.9427466863034 929,134 C 986.6947717231224,103.0572533136966 1041.7255154639176,94.13079896907217 1089,76 C 1136.2744845360824,57.86920103092783 1175.7927098674522,30.534057437407952 1233,10 C 1290.2072901325478,-10.53405743740795 1365.1036450662739,-24.267028718703976 1440,-38 L 1440,600 L 0,600 Z");
            }
            50%{
              d: path("M 0,600 L 0,487 C 48.257916053019144,493.4682437407953 96.51583210603829,499.9364874815906 157,491 C 217.4841678939617,482.0635125184094 290.19458762886603,457.722293814433 348,424 C 405.80541237113397,390.277706185567 448.70581737849784,347.17433726067753 516,327 C 583.2941826215022,306.82566273932247 674.9821428571429,309.58035714285717 733,294 C 791.0178571428571,278.41964285714283 815.3656111929307,244.50423416789397 872,212 C 928.6343888070693,179.49576583210603 1017.555412371134,148.402706185567 1085,118 C 1152.444587628866,87.59729381443299 1198.412739322533,57.884941089837994 1254,32 C 1309.587260677467,6.115058910162003 1374.7936303387335,-15.942470544918999 1440,-38 L 1440,600 L 0,600 Z");
            }
            75%{
              d: path("M 0,600 L 0,487 C 44.83818114874816,472.7712628865979 89.67636229749633,458.54252577319585 146,460 C 202.32363770250367,461.45747422680415 270.1327319587629,478.6011597938145 330,454 C 389.8672680412371,429.3988402061855 441.7927098674521,363.05283505154637 513,309 C 584.2072901325479,254.94716494845363 674.6964285714287,213.1875 749,209 C 823.3035714285713,204.8125 881.4215758468335,238.1971649484536 931,233 C 980.5784241531665,227.8028350515464 1021.6172680412371,184.02384020618558 1068,148 C 1114.3827319587629,111.97615979381442 1166.1093519882181,83.70747422680412 1229,54 C 1291.8906480117819,24.292525773195884 1365.945324005891,-6.853737113402058 1440,-38 L 1440,600 L 0,600 Z");
            }
            100%{
              d: path("M 0,600 L 0,487 C 74.33965390279823,496.92332474226805 148.67930780559647,506.8466494845361 211,490 C 273.32069219440353,473.1533505154639 323.62242268041234,429.5367268041237 381,393 C 438.37757731958766,356.4632731958763 502.8310014727541,327.0064432989691 565,327 C 627.1689985272459,326.9935567010309 687.0535714285714,356.4375 744,317 C 800.9464285714286,277.5625 854.9547128129602,169.2435567010309 916,133 C 977.0452871870398,96.75644329896907 1045.1275773195878,132.5882731958763 1108,119 C 1170.8724226804122,105.4117268041237 1228.5349779086894,42.40335051546391 1283,8 C 1337.4650220913106,-26.403350515463913 1388.7325110456554,-32.20167525773196 1440,-38 L 1440,600 L 0,600 Z");
            }
          }</style><path d="M 0,600 L 0,487 C 74.33965390279823,496.92332474226805 148.67930780559647,506.8466494845361 211,490 C 273.32069219440353,473.1533505154639 323.62242268041234,429.5367268041237 381,393 C 438.37757731958766,356.4632731958763 502.8310014727541,327.0064432989691 565,327 C 627.1689985272459,326.9935567010309 687.0535714285714,356.4375 744,317 C 800.9464285714286,277.5625 854.9547128129602,169.2435567010309 916,133 C 977.0452871870398,96.75644329896907 1045.1275773195878,132.5882731958763 1108,119 C 1170.8724226804122,105.4117268041237 1228.5349779086894,42.40335051546391 1283,8 C 1337.4650220913106,-26.403350515463913 1388.7325110456554,-32.20167525773196 1440,-38 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="#000000" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 300)"></path><style>
          .path-2{
            animation:pathAnim-2 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-2{
            0%{
              d: path("M 0,600 L 0,637 C 76.49061119293077,640.3237297496319 152.98122238586154,643.6474594992636 211,624 C 269.01877761413846,604.3525405007364 308.5657216494846,561.7338917525774 355,520 C 401.4342783505154,478.26610824742266 454.7558910162003,437.4169734904271 526,439 C 597.2441089837997,440.5830265095729 686.4107142857143,484.59821428571433 743,465 C 799.5892857142857,445.40178571428567 823.6012518409426,362.19016936671574 874,310 C 924.3987481590574,257.80983063328426 1001.1842783505153,236.6411082474227 1075,222 C 1148.8157216494847,207.3588917525773 1219.6616347569957,199.2453976435935 1280,182 C 1340.3383652430043,164.7546023564065 1390.1691826215022,138.37730117820325 1440,112 L 1440,600 L 0,600 Z");
            }
            25%{
              d: path("M 0,600 L 0,637 C 50.390648011782034,627.5100331369661 100.78129602356407,618.0200662739322 168,619 C 235.21870397643593,619.9799337260678 319.2654639175258,631.4297680412371 371,593 C 422.7345360824742,554.5702319587629 442.1568483063329,466.26086156111927 506,438 C 569.8431516936671,409.73913843888073 678.1071428571428,441.5267857142858 746,439 C 813.8928571428572,436.4732142857142 841.4145802650959,399.63199558173784 897,353 C 952.5854197349041,306.36800441826216 1036.2345360824743,249.94523195876292 1104,221 C 1171.7654639175257,192.05476804123708 1223.6472754050073,190.5870765832106 1277,177 C 1330.3527245949927,163.4129234167894 1385.1763622974963,137.7064617083947 1440,112 L 1440,600 L 0,600 Z");
            }
            50%{
              d: path("M 0,600 L 0,637 C 46.9878497790869,661.1098122238586 93.9756995581738,685.2196244477173 149,659 C 204.0243004418262,632.7803755522827 267.08505154639175,556.2313144329897 340,519 C 412.91494845360825,481.76868556701027 495.6840942562592,483.85511782032404 555,459 C 614.3159057437408,434.14488217967596 650.1785714285713,382.3482142857143 703,368 C 755.8214285714287,353.6517857142857 825.6016200294551,376.75202503681885 899,352 C 972.3983799705449,327.24797496318115 1049.414948453608,254.64368556701032 1104,221 C 1158.585051546392,187.35631443298968 1190.738586156112,192.67323269513992 1243,181 C 1295.261413843888,169.32676730486008 1367.630706921944,140.66338365243004 1440,112 L 1440,600 L 0,600 Z");
            }
            75%{
              d: path("M 0,600 L 0,637 C 45.03810751104568,636.3086340206186 90.07621502209136,635.6172680412371 152,631 C 213.92378497790864,626.3827319587629 292.73324742268034,617.83956185567 362,606 C 431.26675257731966,594.16043814433 490.9907952871871,579.0244845360825 543,531 C 595.0092047128129,482.97551546391753 639.3035714285714,402.0625 693,374 C 746.6964285714286,345.9375 809.7949189985271,370.72551546391753 876,347 C 942.2050810014729,323.27448453608247 1011.5167525773197,251.03543814432993 1080,225 C 1148.4832474226803,198.96456185567007 1216.1380706921943,219.13273195876286 1276,208 C 1335.8619293078057,196.86726804123714 1387.9309646539027,154.43363402061857 1440,112 L 1440,600 L 0,600 Z");
            }
            100%{
              d: path("M 0,600 L 0,637 C 76.49061119293077,640.3237297496319 152.98122238586154,643.6474594992636 211,624 C 269.01877761413846,604.3525405007364 308.5657216494846,561.7338917525774 355,520 C 401.4342783505154,478.26610824742266 454.7558910162003,437.4169734904271 526,439 C 597.2441089837997,440.5830265095729 686.4107142857143,484.59821428571433 743,465 C 799.5892857142857,445.40178571428567 823.6012518409426,362.19016936671574 874,310 C 924.3987481590574,257.80983063328426 1001.1842783505153,236.6411082474227 1075,222 C 1148.8157216494847,207.3588917525773 1219.6616347569957,199.2453976435935 1280,182 C 1340.3383652430043,164.7546023564065 1390.1691826215022,138.37730117820325 1440,112 L 1440,600 L 0,600 Z");
            }
          }</style><path d="M 0,600 L 0,637 C 76.49061119293077,640.3237297496319 152.98122238586154,643.6474594992636 211,624 C 269.01877761413846,604.3525405007364 308.5657216494846,561.7338917525774 355,520 C 401.4342783505154,478.26610824742266 454.7558910162003,437.4169734904271 526,439 C 597.2441089837997,440.5830265095729 686.4107142857143,484.59821428571433 743,465 C 799.5892857142857,445.40178571428567 823.6012518409426,362.19016936671574 874,310 C 924.3987481590574,257.80983063328426 1001.1842783505153,236.6411082474227 1075,222 C 1148.8157216494847,207.3588917525773 1219.6616347569957,199.2453976435935 1280,182 C 1340.3383652430043,164.7546023564065 1390.1691826215022,138.37730117820325 1440,112 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="#000000" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-2" transform="rotate(-180 720 300)"></path></svg>    
          </div>
<script src="../js/about.js"></script>
