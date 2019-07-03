<html>
<head>
<title>Product Detail</title>

<script>
    digitalData = {
        pageInstanceID: "cart",
        page:{
            pageInfo:{
                pageName: "Product Cart",
                pageID: "110",
                destinationURL: window.location.href,
              
            },
            category:{
                pageType: "productcart"
            },
            user:{
                profileInfo:{
                    profileId: "265326875d03c320ecb026.96981994" //set with a visitor's user ID on all pages
                },
                attributes:{
                    loginStatus: "logged-out" //would contain values of "Logged In" or "Not Logged In"
                }
		    }
        }
        product:[{
                productInfo:{
                    productID: "GalaxyS7Edge",
                    productName: "Galaxy S7 Edge",
                    sku: "S730",
                    manufacturer: "Samsung",
                },
                category:{
                    primaryCategory: "Mobile"
                }
        }]
    };
</script>
<script src="//assets.adobedtm.com/launch-ENe7228d78d68344d8a2c4df4ff809fa4f-development.min.js" async></script>
</head>
<body>
This is Adobe Sample Product Detail Page.<br/>
<input type='button' id='addtocart' value='Add to Cart' />
<input type='button' id='removecart' value='Remove Cart' />
<br/>
<a href="viewcart.php">View Cart</a>
http://192.168.1.72/adobedemo/viewcart.php

<input type='button' id='checkout' value='Checkout' />
<input type='button' id='purchase' value='Purchase' />
</body>
</html>