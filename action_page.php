<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kira_colorefa</title>
    <link rel="stylesheet" href="products.css">
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Crimson Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="image_kira_colorefa/logo.ico">
</head>

<body bgcolor="white">
    <div class="container_nav">
        <img class="nav_icon" src="image_kira_colorefa/logo.ico">
        <p class="title"><span class="span">Kira_colorefa</span></p>
    </div>

    <div class="container_nav1">
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="About us.html">About us</a></li>
            <li><a href="Gallery.html">Gallery</a></li>
            <li><a href="sli.html" class="active">Preview</a></li>
        </ul>
        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="search-bar" id="product" name="product" type="search" placeholder="Search Item">
            <button onclick="searchSite()"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div id="content">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $userProduct = isset($_POST['product']) ? strtolower($_POST['product']) : '';

            $productData = [
                'chimmy keychain' => ['name' => 'CHIMMY KEYCHAIN', 'price' => '₱ 80.00', 'description' =>'Upgrade your style with our Chimmy Keychain, an accessory inspired by the beloved BTS character, perfect for showcasing your ARMY side.','image' => 'image_kira_colorefa/Picture1.png', 'link'=>'https://www.instagram.com/p/CdJ2YyFB6CX/?igshid=MzRlODBiNWFlZA=='],
                'bt21 keychain' => ['name' => 'BT21 KEYCHAIN', 'price' => '₱ 80.00', 'description' =>'With our BT21 keychain collection, you can carry the charm of the entire BT21 universe with you wherever you go.','image' => 'image_kira_colorefa/Picture2.png','link'=>'https://www.instagram.com/p/CdFcCCWlQ__/?igshid=MzRlODBiNWFlZA=='],
                'nameture keychain' => ['name' => 'NAMETURE KEYCHAIN', 'price' => '₱ 80.00', 'description' =>'Add a personal touch to your look with our Nameture Keychain, a personalized accessory that carries your name and character anywhere you go.','image' => 'image_kira_colorefa/Picture3.png', 'link'=>'https://www.instagram.com/p/CdwdNlzvRH2/?igshid=MzRlODBiNWFlZA=='],
                'handmade unicorn' => ['name' => 'HANDMADE UNICORN', 'price' => '₱ 120.00', 'description' =>'Handmade Unicorn Charm, Love, Heart is a sweet and meaningful accessory.','image' => 'image_kira_colorefa/Picture4.png', 'link'=>'https://shopee.ph/Handmade-Unicorn-Charm-Love-Heart-i.84018166.12675409750?sp_atk=5ff49d3b-c715-4377-a440-ab45e5a3169a'],
                'daisy necklace' => ['name' => 'DAISY NECKLACE HANDMADE', 'price' => '₱ 35.00', 'description' =>'Add a touch of charm to your everyday look with our Daisy Necklace, a simple yet sophisticated accessory inspired by the beauty of Daisy.','image' => 'image_kira_colorefa/Picture5.png', 'link'=>'https://shopee.ph/Daisy-necklace-handmade-i.84018166.15233929015?sp_atk=53e64b2c-ecc2-4644-b9e9-42733738c9e1'],
                'purple heart' => ['name' => 'PURPLE HEART NECKLACE', 'price' => '₱ 30.00', 'description' =>'Wear your heart in style with our Purple heart necklace, a charming accessory to display your affection.','image' => 'image_kira_colorefa/Picture6.png', 'link'=>'https://shp.ee/gsrxa6g'],
                'maan 2 bracelet' => ['name' => 'MAAN 2 BRACELET', 'price' => '₱ 35.00', 'description' =>'MAAN 2 Bracelet carries a bouquet of style on your wrist.','image' => 'image_kira_colorefa/Picture7.png', 'link'=>'https://www.instagram.com/p/CtjcFLKyA8r/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=='],
                'macaroons' => ['name' => 'MACAROONS ACCESSORIES', 'price' => '₱ 75.00', 'description' =>'Sweeten your style with our Macarons Accessories, a delightful way to accessorize.','image' => 'image_kira_colorefa/Picture8.png', 'link'=>'https://www.instagram.com/p/CbkCRoRlBPl/?igshid=MTc4MmM1YmI2Ng=='],
                'white sunflower' => ['name' => 'WHITE SUNFLOWER WITH TOUCH OF GOLD', 'price' => '₱ 75.00', 'description' =>'White Sunflower with touch of Gold, which combine natures charm with rustic design.','image' => 'image_kira_colorefa/Picture9.png', 'link'=>'https://shp.ee/k4sx9pu'],
                'ipurpleu dangle' => ['name' => 'IPURPLEU DANGLE EARRINGS', 'price' => '₱ 70.00', 'description' =>'Embrace natures beauty with our IPurpleU dangle earrings, ideal for adding a natural touch to your style.','image' => 'image_kira_colorefa/Picture10.png','link'=>'https://shp.ee/2wcgsup'],
                'pastel heart drop' => ['name' => 'PASTEL HEART DROP EARRINGS', 'price' => '₱ 50.00', 'description' =>'Delight in the simplicity and style of our Heart Drop earrings, the ideal addition to your jewelry collection.','image' => 'image_kira_colorefa/Picture11.png','link'=>'https://shopee.ph/Pastel-Heart-Drop-Earrings-i.84018166.12275404627?sp_atk=5d51d504-c338-4a78-86bf-663f28f36e62'],
                'pink flower dangle' => ['name' => 'PINK FLOWER DANGLE EARRINGS', 'price' => '₱ 65.00', 'description' =>'Show off your allure with our Pink Flower Dangle Earrings, an eye-catching accessory for any occasion.','image' => 'image_kira_colorefa/Picture12.png','link'=>'https://shp.ee/wvsw5tc'],
                'handname hair clip' => ['name' => 'HANDNAME HAIR CLIP', 'price' => '₱ 35.00', 'description' =>'Personalize your look with our Handname Hair Clip, a one-of-a-kind and customizable accessory.','image' => 'image_kira_colorefa/Picture13.png','link'=>'https://www.instagram.com/p/CdsC4wwFVO_/?igshid=MzRlODBiNWFlZA=='],
                'flower hair clip' => ['name' => 'FLOWER HAIR CLIP', 'price' => '₱ 40.00', 'description' =>'Flowers into style with our Handmade Flower Hair Clip, a charming way to add blossoming flower elegance to your hairstyle.','image' => 'image_kira_colorefa/Picture14.png','link'=>'https://shp.ee/tqk8z87'],
                'elegant hair clip' => ['name' => 'ELEGANT HAIR CLIP', 'price' => '₱ 50.00', 'description' =>'An elegant, sophisticated, and one-of-a-kind touch to your hairstyle, our Elegant Handmade Hair Clip.','image' => 'image_kira_colorefa/Picture15.png','link'=>'https://shp.ee/sxck7jd'],        
                'alligator combi' => ['name' => 'ALLIGATOR HAIRCLIP COMBI WHITE AND VIOLET', 'price' => '₱ 85.00', 'description' =>'Add a touch of purple to your look with our Alligator hairclip combi white and violet, a sleek and stylish accessory.','image' => 'image_kira_colorefa/Picture16.png','link'=>'https://shp.ee/wiw4p96'],        
              ];

            if (array_key_exists($userProduct, $productData)) {
                $product = $productData[$userProduct];
                echo "<span style='text-align: center; color: 5f432c; margin-bottom:-50px;font-weight: bold; font-size: 50px;'><p>Product</p></span>";
                echo "<span style='font-family: Crimson Pro; color:#694e2d;'>";
                echo "<div style='padding-bottom: 30px; margin-left: 25%; display: flex;'>";

                echo "<div style='margin-right: 20px;'>";
                echo "<img src='" . $product['image'] . "' alt='" . $userProduct . "' style='width:300px; box-shadow: -15px 15px 0px 8px #ceb290; border-radius: 250px;'>";
                echo "</div>";

                echo "<div style='text-align: left; width: 450px; background-color: #ffffff; color: black; padding: 10px; line-height: 1.0; margin-top: o%; font-size: 25px; '>";
                echo "<p><strong>Name:</strong> " . $product['name'] . "</p>";
                echo "<p style='margin: -15px 0px -15px 0px;'><strong>Price:</strong> " . $product['price'] . "</p>";
                echo "<p style='margin-bottom: 15px;'><strong>Description:</strong> " . $product['description'] . "</p>";
                echo '<a href="' . $product['link'] . '" target="_self"><button style="cursor: pointer; padding: 15px 25px 15px 25px; background-color: #ceb290; border: none; border-radius: 10px; transition: box-shadow 0.60s; font-size: 20px; font-weight:bold; font-family: roboto; color: 5f432c;">Shop Now</button></a>';           
                echo "</div>";
                echo "</div>"; 
                echo "</span>";
            } else {
                echo "<p style='font-size:25px; text-align:center;'>Product not found. Please enter a valid product.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
