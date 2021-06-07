let formProductPattern = `
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
`;
let productCardPattern = `
<div class="check-product-card">
                        <p class="h2-smaller">Product #1</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
</div>
`;
