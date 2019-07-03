<html>
<head>
<title>Product Detail</title>

<script>
    digitalData = {
        pageInstanceID: "ProductDetail",
        page:{
            pageInfo:{
                pageName: "Product Detail - MacBook",
                pageID: "100",
                destinationURL: window.location.href,
                pageType: "Checkout",
                
               
            },
            category:{
                pageType: "viewcart"
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
                        productID: "610",
                        productName: "MacBook 610",
                        sku: "M610",
                        manufacturer: "Apple",
                    },
                    category:{
                        primaryCategory: "Laptop"
                    }
                },
                {
                    productInfo:{
                        productID: "620",
                        productName: "Mobile 620",
                        sku: "S620",
                        manufacturer: "Samsung",
                    },
                    category:{
                        primaryCategory: "Mobile"
                    }
                }
        ]
    };
</script>
<script src="//assets.adobedtm.com/launch-ENe7228d78d68344d8a2c4df4ff809fa4f-development.min.js" async></script>
</head>
<body>
This is Adobe Sample View Cart Page.<br/>
<h1>checkout</h1><br/>
<a href='index.php' link-name='Home' class='link' >Home</a><br/>
<a href='about.php' link-name='About Us' class='link' >About</a><br/>
<a href='contact.php' link-name='Contact Us' class='link'>Contact</a><br/>
<a href='searchresult.php' link-name='Search Result 1' class='link' >Search Result 1</a><br/>
<a href='searchresult2.php' link-name='Search Result 2' class='link' >Search Result 2</a><br/>
<a href='checkout.php' link-name='Checkout' class='link' >Checkout</a><br/>
<a href='confirmation.php' link-name='Confirmation' class='link'>Confirmation</a><br/>
</body>
</html>