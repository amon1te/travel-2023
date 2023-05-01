<?php
    include_once "header.php";
?>
<link rel="stylesheet" href="/css/listing-styles.css">
    <div class="main-listing">
         <div class="listing">
            <h1 class="title">Create Listing</h1>
            <div class="general-info">
                <h2 class="mini-title">Information</h2>
                <input type="text" placeholder="Title" required>
                <select class="select1" name="format" id="format">
                    <option selected disabled>Choose category</option>
                    <option value="restaurant">restaurant</option>
                    <option value="shopping">shopping</option>
                    <option value="nature">nature</option>
                    <option value="museum">museum</option>
                </select>
                <select class="select2" name="format" id="format">
                    <option selected disabled>Select price range</option>
                    <option value="restaurant">0-1000tg</option>
                    <option value="shopping">1000tg-3000tg</option>
                    <option value="nature">3000tg-5000tg</option>
                    <option value="museum">5000tg-7500tg</option>
                    <option value="museum">7500tg-10000tg</option>
                    <option value="museum">10000tg+</option>
                </select>
                <h3>Short description</h3>
                <textarea id="my-Text" class="comment" rows="5" placeholder=""></textarea>
            </div>
         </div>
    </div>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/main.js"></script>
<?php
    include_once "footer.php";
?>