<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bosh sahifa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="sidebar1">
        <?php require_once "sidebar.php" ?>
    </div>
    <div class="main1">

        <!-- Bosh sahifa -->
        <div class="col1-9" style="background-color: lightblue;">    
            <section class="section1">
               <div class="navb py-3 px-3" style="background-color: orange;">
                    <a href="" class="btn btn-primary">Kassir savdo oynasi</a>
                    <a href="" class="btn btn-primary">Kunlik hisobotlar</a>
                    <a href="" class="btn btn-primary ">Hisobot</a>
                </div>

            </section>

            <section class="row section2 ">
               <div style="width: 100%;">


                             <div class="malumot1 ms-3 my-1">
                                 <p class="h4 text-center">Taminotchilardan qarzdorlik</p>
                                 <h5 class=" ms-3">0 / sum</h5>
                                 <h5 class=" ms-3">0 / $</h5>
                             </div>
                             <div class="malumot1 ms-3my-1 ">
                                 <p class="h4 text-center">Xaridorlardan haqdorlik</p>
                                 <h5 class=" ms-3">0 / sum</h5>
                                 <h5 class=" ms-3">0 / $</h5>
                             </div>
                             <div class="malumot1 ms-3 my-1">
                                 <p class="h4 text-center">Taminotchilardan qarzdorlik</p>
                                 <h5 class=" ms-3">0 / sum</h5>
                                 <h5 class=" ms-3">0 / $</h5>
                             </div>
                             <div class="malumot1 ms-3 my-1 ">
                                 <p class="h4 text-center">tavorlar qoldig'ini sotish narxida</p>
                                 <h5 class=" ms-3">0 / sum</h5>
         
                             </div>
                 </div>

                
            </section>

            <section class="section3 row" >
                       <h4>Kassa malumotlari</h4>
                
                       <div class="m-2" style="height: 130px; width: 300px; border: 1px solid black;">
                           <p class="h5 text-center">asosiy kassa</p>
                           <h5 class=" p-1">0 / sum</h5>
                           <h5 class=" p-1">0 / $</h5>
       
                       </div>
                       <div class="m-2" style="height: 130px; width: 300px; border: 1px solid black;">
                           <p class="h5 text-center">Plastik kassa</p>
                           <h5 class=" p-1">0 / sum</h5>
                           <h5 class=" p-1">0 / $</h5>
       
                       </div>
                       <div  style="height: 130px; width: 350px; ">  
                        <h5 class=" p-1">Taminotchilardan qarzdorlik</h5>
                        <h5 class=" p-1">Tovar qoldig'i tan narxida</h5>
    
                       </div>
                       <div style="height: 130px; width: 350px; ">  
                        <h5 class=" p-1">Haridorlardan qarzdorlik</h5>
                        <h5 class=" p-1">mavjud pul mablag'i</h5>
    
                       </div>

            </section>
        </div>
        <!-- Bosh sahifa tugadi -->

    </div>
    <div class="footer1">
        <?php require_once "footer.php" ?>
    </div>
</body>
</html>