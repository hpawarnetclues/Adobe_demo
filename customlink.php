<html>
<head>
<title>Custom Link</title>
<script type='text/javascript'>
    digitalData = {
        pageInstanceID: "cart",
        page:{
            siteSection:'Flights',
            pageInfo:{
                pageName: "Custom Link",
                pageURL: window.location.href,
                pageType: "other",
                referringURL: document.referrer,
               
            },
            category:{
                primaryCategory:'Flights',
            },
            attributes:{
                server: window.location.hostname,
                mobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ?'mobile':'desktop',
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
    };
</script>
<script src="//assets.adobedtm.com/launch-ENe7228d78d68344d8a2c4df4ff809fa4f-development.min.js" async></script>
</head>
<body>
This is Adobe Sample Product Impression Page.<br/>
<h1>Product</h1><br/>
<a href='index.php' link-name='Home' class='link' >Home</a><br/>
<a href='about.php' link-name='About Us' class='link' >About</a><br/>
<a href='contact.php' link-name='Contact Us' class='link'>Contact</a><br/>
<a href='searchresult.php' link-name='Search Result 1' class='link' >Search Result 1</a><br/>
<a href='searchresult2.php' link-name='Search Result 2' class='link' >Search Result 2</a><br/>
<a href='checkout.php' link-name='Checkout' class='link' >Checkout</a><br/>
<a href='confirmation.php' link-name='Confirmation' class='link'>Confirmation</a><br/>
<hr/>
<a href='http://www.google.com/' target='_blank' link-name='External' class='link'>External Link</a>
<a href='http://192.168.1.72/adobedemo/about.php' link-name='Internal' class='link' >Internal Link</a>
<a href='http://192.168.1.72/adobedemo/download.docx' link-name='Download' class='link' >Download Link</a>
<a href='javascript:;' link-name='Javascript' class='link' >Download Link</a>

</body>
</html>