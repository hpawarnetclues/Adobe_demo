<html>
<head>
<title>Adobe Sample</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  //width: 100%;
  background-color: #8dc63f;
  color: white;
  padding: 14px 20px;
  margin: 0px!important;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.firstdiv input {
    float: left;
    width: 40%;
    margin: 0 10px;
}

.firstdiv label {
    float: left;
    width: 10%;
}
.firstdiv {
    float: left;
    width: 100%;
}
.selectdiv {
    float: left;
    width: 20%;
}
form{
  float: left;
    width: 100%;
}
.radiotrip{
  float: left;
    width: 80%;
    padding: 10px 0;
}
input[type="radio"] {
    width: auto;
}
</style>

<script type='text/javascript'>
  
digitalData = {
        page:{
            siteSection:'Flights',
            pageInfo:{
                pageName: "Home",
                pageType: "homepage",
                
               
            },
            category:{
                primaryCategory:'Flights',
            },
            attributes:{
              
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
<h1>Home</h1><br/>
<a href='index.php' link-name='Home' class='link' >Home</a><br/>
<a href='about.php' link-name='About Us' class='link' >About</a><br/>
<a href='contact.php' link-name='Contact Us' class='link'>Contact</a><br/>
<a href='searchresult.php?searchresult=5' link-name='Search Result 1' class='link' >Search Result 1</a><br/>
<a href='searchresult2.php' link-name='Search Result 2' class='link' >Search Result 2</a><br/>
<a href='checkout.php' link-name='Checkout' class='link' >Checkout</a><br/>
<a href='confirmation.php' link-name='Confirmation' class='link'>Confirmation</a><br/>

<!--
<div class="flightstab">
  <label>Category:</label>
  <span class="link" link-name="flights" value="flights">Flights</span>&nbsp;&nbsp;&nbsp;
  <span class="link" link-name="hotels" value="hotels">Hotels</span>&nbsp;&nbsp;&nbsp;
  <span class="link" link-name="vacation" value="vacation">Flight+Hotel</span>
</div> -->

<div class="" style="float:left;width:35%;">
  <h1>Search Flights Here</h1>
<form action="searchresult.php" name="flt_searchForm">
    <div class="firstdiv">
       <div style="float:left;width:10%;">
         <label for="triptype">Trip Type:</label>
        </div>
        <div class="radiotrip">
          <input type="radio" name="triptype" value="roundtrip"> Round Trip<br>
          <input type="radio" name="triptype" value="oneway"> One Way<br>
          <input type="radio" name="triptype" value="multicity"> Multi City<br>  
        </div>
        
    </div>
    <div class="firstdiv">
      <label for="origin">From:</label>
      <input type="text" id="origin" name="origin" placeholder="Enter a city or airport" value="Toronto, Ontario, Canada (YTO)">
      <input type="text" id="originCode" name="originCode" value="Toronto (YTO)" />
    </div>

    <div class="firstdiv">
      <label for="destination">To:</label>
      <input type="text" id="destination" name="destination" placeholder="Enter a city or airport" value="Ahmedabad, India (AMD)">
      <input type="text" id="destinationCode" name="destinationCode" value="Ahmedabad (AMD)" />
    </div>

    <div class="firstdiv">
      <label for="leaving">Leaving:</label>
      <input type="text" id="leaving" name="leaving" placeholder="mm/dd/yyyy" value="07/02/2019">
    </div>

    <div class="firstdiv">
      <label for="returning">Returning:</label>
      <input type="text" id="returning" name="returning" placeholder="mm/dd/yyyy" value="07/15/2019">
    </div>

    
    <div class="firstdiv" style="padding: 0;">
      <div class="selectdiv">
        <label for="adults">Adults:</label>
        <select id="adults" name="adults">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="selectdiv">
        <label for="children">Children:</label>
        <select id="children" name="children">
        <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="selectdiv">
        <label for="preferedClass">Class:</label>
        <select id="preferedClass" name="preferedClass">
          <option value="Economy">Economy</option>
          <option value="PremiumEconomy">PremiumEconomy</option>
          <option value="Business">Business</option>
        </select>
      </div>
    </div>

    <div class="firstdiv">
      <input type="submit" class="link" link-name='flt_submit' value="Search Flights">
    </div>
  </form>
</div>
</body>
</html>