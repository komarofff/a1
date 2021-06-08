let numberOfForm=2;// amount of forms on the page ()
let formProductPattern = `
<form class="products-form" id="form${numberOfForm}">
                    <p class="h2 row-between2">Product #${numberOfForm} <span class="del_product" id="product${numberOfForm}">x</span></p>
                    <label class="h3" for="cartons${numberOfForm}">1) No. OF Cartons</label><br>
                    <input class="request-input-text" type="text" value="" name="" id="cartons${numberOfForm}" placeholder="01"
                        list="carton${numberOfForm}_list">
                    <datalist id="carton${numberOfForm}_list">
                        <option value="01"></option>
                        <option value="02"></option>
                        <option value="03"></option>
                        <option value="04"></option>
                        <option value="05"></option>
                        <option value="06"></option>
                        <option value="07"></option>
                    </datalist>
                    <p class="h3">2)
                        <input class="radio" type="radio" name="size_carton${numberOfForm}" id="size1-${numberOfForm}">
                        <label for="size1-${numberOfForm}">Total Volume</label>
                        <input class="radio" type="radio" name="size_carton${numberOfForm}" id="size2-${numberOfForm}" checked>
                        <label for="size2-${numberOfForm}">Single Carton Dimensions</label>
                        <input class="request-little-input-text" type="text" name="" id="s1-${numberOfForm}" value="">
                        <label for="s1-${numberOfForm}"> CM</label>
                        <input class="request-little-input-text" type="text" name="" id="s2-${numberOfForm}" value="">
                        <label for="s2-${numberOfForm}"> CM</label>
                        <input class="request-little-input-text" type="text" name="" id="s3-${numberOfForm}" value="">
                        <label for="s3-${numberOfForm}"> CM</label>
                    </p>
                    <p class="h3">3)
                        <input class="radio" type="radio" name="weight${numberOfForm}" value="carton_weight${numberOfForm}" id="carton_weight${numberOfForm}">
                        <label for="carton_weight${numberOfForm}">Carton weight</label>
                        <input class="radio" type="radio" name="weight${numberOfForm}"  value="total_weight${numberOfForm}" id="total_weight${numberOfForm}" checked>
                        <label for="total_weight${numberOfForm}">Total weight</label>
                        <input class="request-little-input-text" style="width: 150px;margin-left:114px;" type="text"
                            name="" id="tw${numberOfForm}" value="">
                        <label for="tw${numberOfForm}"> KG</label>
                    </p>
                </form>
`;
let numberOfProduct=1;
let productCardPattern = `
<div class="check-product-card">
                        <p class="h2-smaller">Product #${numberOfProduct}</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
</div>
`;
