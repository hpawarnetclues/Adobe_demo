<html>
<head>
<title>Product Detail</title>
<script type='text/javascript'>
    digitalData = {
        pageInstanceID: "cart",
        page:{
            siteSection:'Flights',
            pageInfo:{
                pageName: "Product",
                pageURL: window.location.href,
                pageType: "products",
                referringURL: document.referrer,
            },
            category:{
                primaryCategory:'Flights',
                orderId:'<?php echo time();?>',
            },
            attributes:{
                server: window.location.hostname,
                mobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ?'mobile':'desktop',
            },
            user:{
                attributes:{
                    loginStatus: "logged-out" //would contain values of "Logged In" or "Not Logged In"
                }
		    }
        },
        product:[{
                productInfo:{
                    productName: "BC515-BC500",
                    qty:2,
                    price:200,
                    productType:'Return',
                },
                category:{
                    primaryCategory: "Flight",
                }
            },{
                productInfo:{
                    productName: "BC515",
                    qty:1,
                    price:150,
                    productType:'Single',
                },
                category:{
                    primaryCategory: "Flight",
                }
            },{
                productInfo:{
                    productName: "BC515-BC7600",
                    qty:2,
                    price:300,
                    productType:'Return',
                },
                category:{
                    primaryCategory: "Flight",
                }
            },{
                productInfo:{
                    productName: "BC7611-BC504",
                    qty:3,
                    price:360,
                    productType:'Return',
                },
                category:{
                    primaryCategory: "Flight",
                }
        }]
    };
</script>
<script src="//assets.adobedtm.com/launch-ENe7228d78d68344d8a2c4df4ff809fa4f-development.min.js" async></script>
</head>
<body>
This is Adobe Sample Product Page.<br/>
<h1>Product</h1><br/>
<select name='addcart' id='addcart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='addtocart' value='Add to Cart'><br/><br/>
<select name='opencart' id='opencart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='opentocart' value='Open Cart'><br/><br/>
<select name='viewcart' id='viewcart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='viewtocart' value='View Cart'><br/><br/>
<select name='removecart' id='removecart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='removetocart' value='Remove Cart'><br/><br/>
<select name='checkoutcart' id='checkoutcart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='checkouttocart' value='Checkout'><br/><br/>
<select name='purchasecart' id='purchasecart'>
    <option value='0'>1</option>
    <option value='1'>2</option>
    <option value='2'>3</option>
    <option value='3'>4</option>
</select><input type='button' class='productbutton' id='purchase' value='Purchase'><br/><br/>
</body>
</html>