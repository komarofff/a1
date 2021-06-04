<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request page.Only desktop version</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="container">
    <header class="header">
        <img class="header__banner" src="img/header/banner-request.png" srcset="img/header/banner-request@2x.png 2x,
             img/header/banner-request@3x.png 3x">

        <div class="header__topmenu">
            <img class="header__logo" src="img/header/logo.png"
                srcset="img/header/logo@2x.png 2x,img/header/logo@3x.png 3x">
            <nav class="header__topmenu-list">
                <ul>
                    <li><a class="header__topmenu-list_link" href="#">About Us</a></li>
                    <li><a class="header__topmenu-list_link" href="#">Pricing</a></li>
                    <li><a class="header__topmenu-list_link" href="#">FAQ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__content request-header-content">
            <p class="header__content-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum, de quibus
                loquor praecepta dantur.
            </p>
            <p class="header__content-title">
                Reliable Amazon FBA
            </p>
            <p class="header__content-subtitle">
                Freight Forwarding
            </p>
        </div>

    </header>
    <main class=" grid main request">
        <section class="main__people-blocks padding-both-vertical">
            <p class="h2">Create Your Request</p>
            <div class="grid">

                <form class="request__blocks" action="#" id="">
                    <div class="request-single-block">
                        <label class="h3" for="name">Let's Get Acquainted?</label>
                        <input class="request-input-text" type="text" value="" name="" id="name"
                            placeholder="Your name...">
                        <label class="h3" for="incoterm">Incoterm?</label>
                        <input class="request-input-text" type="text" value="" name="" id="incoterm" placeholder="EXW"
                            list="incoterm_list">
                        <datalist id="incoterm_list">
                            <option value="ERW"></option>
                            <option value="ERW2"></option>
                            <option value="ERW3"></option>
                            <option value="ERW4"></option>
                            <option value="ERW5"></option>
                        </datalist>
                    </div>
                    <div class="request-single-block">
                        <label class="h3" for="transport">Means of Transport?</label>
                        <input class="request-input-text" type="text" value="" name="" id="transport"
                            placeholder="No matter" list="transport_list">
                        <datalist id="transport_list">
                            <option value="BUS"></option>
                            <option value="TIR"></option>
                            <option value="CROW"></option>
                            <option value="HORSE"></option>
                            <option value="No matter"></option>
                        </datalist>
                        <label class="h3" for="adress">Manufacturer Address?</label>
                        <input class="request-input-text" type="text" value="" name="" id="adress" placeholder="Adress">
                    </div>
                    <textarea class="request-input-text input-big" value="" name="" id="info"
                        placeholder="Info..."></textarea>

                </form>

            </div>
        </section>
        <section class="main__description-gray-block padding-both-vertical">
            <div class="grid">
                <div class="request__product-forms">
                    <form class="products-form" id="form1">
                        <p class="h2 row-between2">Product #1 <span class="del_product" id="product1">x</span></p>
                        <label class="h3" for="cartons1">1) No. OF Cartons</label><br>
                        <input class="request-input-text" type="text" value="" name="" id="cartons1" placeholder="01"
                            list="carton1_list">
                        <datalist id="carton1_list">
                            <option value="01"></option>
                            <option value="02"></option>
                            <option value="03"></option>
                            <option value="04"></option>
                            <option value="05"></option>
                            <option value="06"></option>
                            <option value="07"></option>
                        </datalist>
                        <p class="h3">2)
                            <input class="radio" type="radio" name="size_carton1" id="size1">
                            <label for="size1">Total Volume</label>
                            <input class="radio" type="radio" name="size_carton1" id="size2" checked>
                            <label for="size2">Single Carton Dimensions</label>
                            <input class="request-little-input-text" type="text" name="" id="s1" value="">
                            <label for="s1"> CM</label>
                            <input class="request-little-input-text" type="text" name="" id="s2" value="">
                            <label for="s2"> CM</label>
                            <input class="request-little-input-text" type="text" name="" id="s3" value="">
                            <label for="s3"> CM</label>
                        </p>
                        <p class="h3">3)
                            <input class="radio" type="radio" name="total_weight1" id="carton_weight1">
                            <label for="carton_weight1">Carton weight</label>
                            <input class="radio" type="radio" name="total_weight1" id="total_weight1" checked>
                            <label for="total_weight1">Total weight</label>
                            <input class="request-little-input-text" style="width: 150px;margin-left:114px;" type="text"
                                name="" id="tw1" value="">
                            <label for="tw1"> KG</label>
                        </p>
                    </form>
                    <form class="products-form" id="form2">
                        <p class="h2 row-between2">Product #2 <span class="del_product" id="product2">x</span></p>
                        <label class="h3" for="cartons2">1) No. OF Cartons</label><br>
                        <input class="request-input-text" type="text" value="" name="" id="cartons2" placeholder="01"
                            list="carton2_list">
                        <datalist id="carton2_list">
                            <option value="01"></option>
                            <option value="02"></option>
                            <option value="03"></option>
                            <option value="04"></option>
                            <option value="05"></option>
                            <option value="06"></option>
                            <option value="07"></option>
                        </datalist>
                        <p class="h3">2)
                            <input class="radio" type="radio" name="size_carton2" id="size1-2">
                            <label for="size1-2">Total Volume</label>
                            <input class="radio" type="radio" name="size_carton2" id="size2-2" checked>
                            <label for="size2-2">Single Carton Dimensions</label>
                            <input class="request-little-input-text" type="text" name="" id="s1-2" value="">
                            <label for="s1-2"> CM</label>
                            <input class="request-little-input-text" type="text" name="" id="s2-2" value="">
                            <label for="s2-2"> CM</label>
                            <input class="request-little-input-text" type="text" name="" id="s3-2" value="">
                            <label for="s3-2"> CM</label>
                        </p>
                        <p class="h3">3)
                            <input class="radio" type="radio" name="total_weight2" id="carton_weight2">
                            <label for="carton_weight2">Carton weight</label>
                            <input class="radio" type="radio" name="total_weight2" id="total_weight2" checked>
                            <label for="total_weight2">Total weight</label>
                            <input class="request-little-input-text" style="width: 150px;margin-left:114px;" type="text"
                                name="" id="tw2" value="">
                            <label for="tw2"> KG</label>
                        </p>
                    </form>
                    <p class="h2 blue" id="add_product">+ Add another product</p>
                </div>
            </div>
        </section>
        <section class="main__description-white-block padding-both-vertical">
            <div class="grid">
                <div class="request__destination">
                    <div class="destination-form">
                        <label class="h3" for="destination">Destination</label>
                        <input class="request-input-text" type="text" value="" name="" id="destination"
                            placeholder="on DHL or UPS Immediately to Amazon" list="destination_list">
                        <datalist id="destination_list">
                            <option value="on DHL or UPS Immediately to Amazon"></option>
                            <option value="22222222on DHL or UPS Immediately to Amazon"></option>
                            <option value="333333333on DHL or UPS Immediately to Amazon"></option>
                            <option value="444444444on DHL or UPS Immediately to Amazon"></option>
                            <option value="555555555on DHL or UPS Immediately to Amazon"></option>
                        </datalist>
                    </div>
                    <div class="destination-form">
                        <label class="h3" for="value">Value of Goods</label>
                        <input class="request-input-text" type="text" value="" name="" id="value" placeholder="">
                    </div>
                    <div class="destination-form">
                        <label class="h3" for="value">Your email</label>
                        <input class="request-input-text" type="text" value="" name="" id="email" placeholder="">
                    </div>
                </div>
            </div>
        </section>
        <section class="main__care">
            <div class="grid">
                <div class="main__care-area">
                    <p class="h2">Let us take care about your goods shipments!</p>
                    <a class="button-link margin-top" href="#">Get a quote</a>
                    <img class="big-logo" src="img/big-logo.png"
                        srcset="img/big-logo@2x.png 2x,   img/big-logo@3x.png 3x">
                </div>
            </div>
        </section>

    </main>
    <footer class="footer padding-both-vertical">
        <div class="grid">
            <div class="footer__area">
                <img class="header__logo" src="img/footer/logo-copy.png"
                    srcset="img/footer/logo-copy@2x.png 2x,img/footer/logo-copy@3x.png 3x">
                <div class="row-between">
                    <p class="text-upper stripe"> ©2020 by ForwarderOne FBA Logistics. </p>
                    <p class="text-upper stripe"> Service@ForwarderOne.com </p>
                    <p class="text-upper ">
                        <span class="material-icons">facebook</span>
                        follow us on facebook
                    </p>

                </div>

            </div>
        </div>
    </footer>

</body>

</html>