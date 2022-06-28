<?php



const ORDER_BY_PRICE_ASC = 'price-asc';
const ORDER_BY_PRICE_DESC = 'price-desc';


function getAllProducts()
{
    $allProducts = [
        [
            'id' => '1',
            'title' => 'HUAWEI NOVA 8I',
            'description' => 'STARRY BLACK',
            'img' => 'public/theme/img/huaweinova8i.jpg',
            'price' => 34999,
            'available' => 'true',
            'category' => '1',
            'brand' => 'huawei'
        ],

        [
            'id' => '2',
            'title' => 'HUAWEI NOVA 9 SE 8GB/128GB CRYSTAL BLUE',
            'description' => '8GB/128GB CRYSTAL BLUE',
            'img' => 'public/theme/img/huaweinova9.jpg',
            'price' => 39599,
            'available' => 'true',
            'category' => '1',
            'brand' => 'huawei'
        ],
        [
            'id' => '3',
            'title' => 'HUAWEI P50 PRO',
            'description' => '8GB/256GB GOLD',
            'img' => 'public/theme/img/huaweip50.jpg',
            'price' => 149999,
            'available' => 'true',
            'category' => '1',
            'brand' => 'huawei'
        ],
        [
            'id' => '4',
            'title' => 'HUAWEI P50 PRO',
            'description' => '8GB/256GB BLACK',
            'img' => 'public/theme/img/huaweip50pro.jpg',
            'price' => 148499,
            'available' => 'true',
            'category' => '1',
            'brand' => 'huawei'
        ],

        [
            'id' => '5',
            'title' => 'SAMSUNG GALAXY A52',
            'description' => '6GB/128GB BLACK SM-A525FZKGEUC',
            'img' => 'public/theme/img/samsunga52.png',
            'price' => 34999,
            'available' => 'true',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '6',
            'title' => 'SAMSUNG GALAXY A22',
            'description' => 'DS BLACK 4 64GB SM-A225FZKDEUC',
            'img' => 'public/theme/img/samsunga22.jpg',
            'price' => 25999,
            'available' => 'true',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '7',
            'title' => 'SAMSUNG GALAXY A32',
            'description' => '4GB/128GB AWESOME BLACK SM-A325FZKGEUC',
            'img' => 'public/theme/img/samsunga32.jpg',
            'price' => 30599,
            'available' => 'true',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '8',
            'title' => 'SAMSUNG GALAXY S21',
            'description' => 'FE 5G 6GB/128GB GRAPHITE SM-G990BZADEUC',
            'img' => 'public/theme/img/samsungs21.jpg',
            'price' => 72999,
            'available' => 'true',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '9',
            'title' => 'SAMSUNG GALAXY A53',
            'description' => '5G 6GB/128GB BLACK',
            'img' => 'public/theme/img/samsunga53.jpg',
            'price' => 52499,
            'available' => 'true',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '10',
            'title' => 'SAMSUNG GALAXY A13',
            'description' => '3GB/32GB BLUE SM-A135FLBUEUC',
            'img' => 'public/theme/img/samsunga13.jpg',
            'price' => 18899,
            'available' => 'false',
            'category' => '2',
            'brand' => 'samsung'
        ],
        [
            'id' => '11',
            'title' => 'APPLE IPHONE 11',
            'description' => '64GB BLACK MHDA3SE/A',
            'img' => 'public/theme/img/iphone11.jpg',
            'price' => 69900,
            'available' => 'true',
            'category' => '3',
            'brand' => 'apple'
        ],
        [
            'id' => '12',
            'title' => 'APPLE IPHONE 13',
            'description' => '128GB BLUE MLPK3SE/A',
            'img' => 'public/theme/img/iphone13.jpg',
            'price' => 112900,
            'available' => 'false',
            'category' => '3',
            'brand' => 'apple'
        ],
        [
            'id' => '13',
            'title' => 'APPLE IPHONE 12',
            'description' => '64GB GREEN MGJ93ZD/A',
            'img' => 'public/theme/img/iphone12.jpg',
            'price' => 99900,
            'available' => 'true',
            'category' => '3',
            'brand' => 'apple'
        ],
        [
            'id' => '14',
            'title' => 'APPLE IPHONE 12 PRO',
            'description' => '512GB SILVER MGMV3SE/A',
            'img' => 'public/theme/img/iphone12pro.jpg',
            'price' => 198590,
            'available' => 'true',
            'category' => '3',
            'brand' => 'apple'
        ],
        [
            'id' => '15',
            'title' => 'APPLE IPHONE 12 MINI',
            'description' => '64GB PURPLE MJQF3SE/A',
            'img' => 'public/theme/img/iphone12mini.jpg',
            'price' => 83900,
            'available' => 'true',
            'category' => '3',
            'brand' => 'apple'
        ],
        [
            'id' => '16',
            'title' => 'HONOR 50',
            'description' => '8/256GB FROST CRYSTAL',
            'img' => 'public/theme/img/honor50.jpg',
            'price' => 69999,
            'available' => 'true',
            'category' => '4',
            'brand' => 'honor'
        ],
        [
            'id' => '17',
            'title' => 'HONOR X8',
            'description' => '6GB/128GB SILVER',
            'img' => 'public/theme/img/honorx8.jpg',
            'price' => 29699,
            'available' => 'true',
            'category' => '4',
            'brand' => 'honor'

        ],
        [
            'id' => '18',
            'title' => 'HONOR X7',
            'description' => '4GB/128GB OCEAN BLUE',
            'img' => 'public/theme/img/honorx7.jpg',
            'price' => 24699,
            'available' => 'true',
            'category' => '4',
            'brand' => 'honor'
        ],
        [
            'id' => '19',
            'title' => 'XIAOMI REDMI 9A',
            'description' => '2GB/32GB GRANITE GREY MZB9953EU',
            'img' => 'public/theme/img/redmi9a.jpg',
            'price' => 11999,
            'available' => 'false',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '20',
            'title' => 'XIAOMI REDMI NOTE 11',
            'description' => '4GB/128GB GRAPHITE GRAY',
            'img' => 'public/theme/img/redminote11.jpg',
            'price' => 26699,
            'available' => 'true',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '21',
            'title' => 'XIAOMI 11 LITE 5G',
            'description' => '8GB/128GB PEACH PINK',
            'img' => 'public/theme/img/lite5g.jpg',
            'price' => 39999,
            'available' => 'false',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '22',
            'title' => 'XIAOMI MI 11 LITE',
            'description' => '6/128 BUBBLEGUM BLUE',
            'img' => 'public/theme/img/bubblegum.jpg',
            'price' => 39999,
            'available' => 'true',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '23',
            'title' => 'XIAOMI MI 10T',
            'description' => '6+128GB LUNAR SILVER',
            'img' => 'public/theme/img/xiaomi10t.jpg',
            'price' => 49749,
            'available' => 'true',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '24',
            'title' => 'XIAOMI 11T PRO',
            'description' => 'METEORITE GRAY 8GB RAM 128GB ROM',
            'img' => 'public/theme/img/11tpro.jpg',
            'price' => 76299,
            'available' => 'true',
            'category' => '5',
            'brand' => 'xiaomi'
        ],
        [
            'id' => '25',
            'title' => 'XIAOMI REDMI NOTE',
            'description' => '9S EU 4+64 INTERSTELLAR GREY',
            'img' => 'public/theme/img/9seu.jpg',
            'price' => 27699,
            'available' => 'true',
            'category' => '5',
            'brand' => 'xiaomi'
        ]
    ];


    $available = [];
    foreach ($allProducts as $value) {
        if ($value['available'] == 'true') {
            $available[] = $value;
        }
    }
    return $available;


}




// GET PRODUCTS BY TERM  //


function searchProductsByTerm($allProducts, $term)
{

    $allProducts = getAllProducts();
    $searched = [];
    foreach ($allProducts as $key => $value) {
        if (str_contains($value['title'], $term) || str_contains($value['description'], $term) || str_contains($value['brand'], $term)) {
            $searched[] = $value;
        }
    }
    return $searched;
}




// GET PRODUCT BY ID  //



function getOneProductById($id)
{
    $allProducts = getAllProducts();
    foreach ($allProducts as $singleProduct) {
        if ($singleProduct['id'] == $id) {
            return $singleProduct;
        }
    }
}


function getRelatedProducts($oneProduct)
{
    $allProducts = getAllProducts();
    $related = [];
    foreach ($allProducts as $singleProduct) {
        if ($singleProduct['category'] == $oneProduct['category'] && $oneProduct['id'] !=  $singleProduct['id']) {
            $related[] = $singleProduct;
            if (count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}


function getRandomProducts()
{  
   $allProducts=getAllProducts();
 shuffle($allProducts) ;
    $randProd = [];
    foreach ($allProducts as $singleProduct) {
        if (count($randProd) >= 6) {
            break;
        }
        $randProd[] = $singleProduct;
    }
    
    return ($randProd);
}








function isNameValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name'])) {
            return false;
        } elseif (empty($_POST['name']) || ($_POST['name'] == "")) {
            return true;
        }
    }
}



function isLNameValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['last_name'])) {
            return false;
        } elseif (empty($_POST['last_name']) || ($_POST['last_name'] == "")) {
            return true;
        }
    }
}




function isEmailValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['email']) && str_contains($_POST['email'], "@")) {
            return false;
        } elseif (empty($_POST['email']) || ($_POST['email'] == "")) {
            return true;
        }
    }
}



function isCityValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['city'])) {
            return false;
        } elseif (empty($_POST['city']) || ($_POST['city'] == "")) {
            return true;
        }
    }
}

function isAddressValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['address'])) {
            return false;
        } elseif (empty($_POST['address']) || ($_POST['address'] == "")) {
            return true;
        }
    }
}


function isPasswordValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['password'])) {
            return false;
        } elseif (empty($_POST['password']) || ($_POST['password'] == "")) {
            return true;
        }
    }
}

function isNumberValid()
{
    if (isset($_POST['submit'])) {
        if (!empty($_POST['number'])) {
            return false;
        } elseif (empty($_POST['number']) || ($_POST['number'] == "")) {
            return true;
        }
    }
}





// NEXT AND PREVIOUS





function getPrevProductId($productID)
{
    $allProducts = getAllProducts();
    foreach ($allProducts as $key => $singleProduct) {
        if ($singleProduct['id'] == $productID) {
            if ($key == 0) {
                return $allProducts[count($allProducts) - 1]['id'];
            } else {
                return $allProducts[$key - 1]['id'];
            }
        }
    }
}

function getNextProductId($productID)
{
    $allProducts = getAllProducts();
    foreach ($allProducts as $key => $singleProduct) {
        if ($singleProduct['id'] == $productID) {
            if ($key == (count($allProducts) - 1)) {
                return $allProducts[0]['id'];
            } else {
                return $allProducts[$key + 1]['id'];
            }
        }
    }
}



// SORT



function sortProductBy($sortBy, $products = [])
    {
     
        switch ($sortBy) {
            case ORDER_BY_PRICE_ASC:
                usort($products, function ($item1, $item2) {
                    return $item1['price'] > $item2['price'];
                });
                break;
            case ORDER_BY_PRICE_DESC:
                usort($products, function ($item1, $item2) {
                    return $item1['price'] < $item2['price'];
                });
                break;
            default:
                break;
        }
        return $products;
    }
