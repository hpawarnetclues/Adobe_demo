<html>
<head>
<title>Product Detail</title>
<script type="text/javascript">
    digitalData = {
        pageInstanceID: "cart",
        page:{
            pageInfo:{
                pageName: "Search Result",
                pageType: "searchresult",
                searcType: "start",
            },
            attributes:{
                searchTripType: '<?php echo $_GET['triptype'];?>',
                searchOrigin: '<?php echo $_GET['originCode'];?>',
                searchDestination: '<?php echo $_GET['destinationCode'];?>',
                searchLeaving: '<?php echo $_GET['leaving'];?>',
                searchReturning: '<?php echo $_GET['returning'];?>',
                searchAdults: '<?php echo $_GET['adults'];?>',
                searchChildren: '<?php echo $_GET['children'];?>',
                searchClass: '<?php echo $_GET['preferedClass'];?>',
            },
            category:{
                primaryCategory:'Flights',
                pageType: "productcart",
                noOfResult: '5',
            },
            user:{
                profileInfo:{
                    profileId: "265326875d03c320ecb026.96981994" //set with a visitor's user ID on all pages
                },
                attributes:{
                    loginStatus: "logged-out" //would contain values of "Logged In" or "Not Logged In"
                }
		    }
        },
    };
</script>
<script src="//assets.adobedtm.com/launch-ENe7228d78d68344d8a2c4df4ff809fa4f-development.min.js" async></script>
</head>
<body>
<h1>Search Result</h1><br/>
<?php //echo "<pre>"; var_dump($_REQUEST); ?> 
<!--No. Of Result =<?php echo $_GET['searchresult'];?><br/>-->
<a href='index.php' link-name='Home' class='link' >Home</a><br/>
<a href='about.php' link-name='About Us' class='link' >About</a><br/>
<a href='contact.php' link-name='Contact Us' class='link'>Contact</a><br/>
<a href='searchresult.php' link-name='Search Result 1' class='link' >Search Result 1</a><br/>
<a href='searchresult2.php' link-name='Search Result 2' class='link' >Search Result 2</a><br/>
<a href='checkout.php' link-name='Checkout' class='link' >Checkout</a><br/>
<a href='confirmation.php' link-name='Confirmation' class='link'>Confirmation</a><br/>

<!--
<h1>Products</h1>
<table style="width: 30%;float: left;" border="1">
  <tr>
    <th>productID</th>
    <th>productName</th> 
    <th>sku</th>
    <th>productType</th>
    <th>action</th>
  </tr>
 <tr>
    <td>AC111</td>
    <td>Galaxy S8 Edge</td>
    <td>S7730</td>
    <td>feature</td>
    <td><a href="checkout.php?productname=AC111" class-"link" link-name='productinfo'>select</a> </td>
  </tr>
  <tr>
    <td>AC112</td>
    <td>Galaxy S9 Edge</td>
    <td>S7731</td>
    <td>promo</td>
    <td><a href="checkout.php?productname=AC112" class-"link" link-name='productinfo'>select</a> </td>
  </tr>
  <tr>
    <td>AC113</td>
    <td>Galaxy S10 Edge</td>
    <td>S7732</td>
    <td>feature</td>
    <td><a href="checkout.php?productname=AC113" class-"link" link-name='productinfo'>select</a> </td>
  </tr>
</table>-->


</body>
</html>