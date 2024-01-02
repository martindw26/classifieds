<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List an item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" 	type="text/css"       
    media="all">
    <link rel="stylesheet" href="https://klsy.dev/Kelsey_classifieds/CSS/style.css">
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/f17ce93fzwichf33mmmkkzj6cf2oq2gdfisixw30hmhjlrr6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    height : '280',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
      
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });

</script>

<style>
    
    .post-code-form {
    text-align: right!import;
    
}


        #youtube {
            display: none; 
        }

	#message{
  	  font-weight: lighter;
      padding:10px;
  	}
    
            #tradeDiv {
            display: none; 
        }
        
                    #tradeContact {
            display: none; 
        }
        
        

</style>
    
</head>
<body>


<div class="container mt-4">

<h1>Create your listing</h1>

<div class="row">
 
</div>

    <div class="listing">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg">
                <!-- Display Ads -->
                <div class="ad-card">
                    <div class="card-body">
                <div class="container">
  <div class="row">
    <div class="col">
<div class="container bg-light m-2">
<h4>Select Private or Dealer</h4>   

<div>

    <!-- Content for private listing -->
    <label for="seller-type">Please select your advert type*:</label>
    <select name="seller-type" id="seller-type" class="form-select form-control mb-4" style="width: 400px;" onchange="toggleTradeDiv()">
        <option value="private">Private</option>
        <option value="trade">Dealer</option>
    </select>


<div id="privateDiv">


<!-- Content for trade listing -->
<a href="#"><h4>Click here for the issue schedule</h4></a>
<p>Please fill out the below form to submit your listing</p>
<h4>Select Listing Package</h4>

<label for="plan">Please select your advert type*:</label>
<select name="plan" id="plan" class="form-select form-control" style="width: 400px;" onchange="toggleMessageDiv()">
    <option selected="selected" value="1">Package 1 - £0.00 + VAT</option>
    <option value="2">Package 2 - £29.00 + VAT </option>
    <option value="3">Package 3 - £49.00 + VAT </option>
</select>

<div id="message">This package includes a private listing in the next edition of Farm Machinery.</div>






    
    
</div>

<div id="tradeDiv">
<h6>Dealer logo</h6><br>
         <form action="/upload" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <!-- Input for the first image -->
        <label for="image1">Upload new logo (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image1" id="image1" accept=".png, .jpg, .jpeg, .heic" required>
        </form><br><hr>
 <h6>Dealer profile text</h6>
 <textarea id="editor">
   &lt;p class="d-flex align-items-center"&gt;Tallis Amos Group (TAG) are one of the oldest John Deere dealerships in the UK with farming roots that can be traced back to the late 1800s. We supply and support a full range of quality products for agricultural, turf care and commercial customers from a comprehensive array of machinery partners.&lt;/p&gt;
 </textarea>
 
      </div>
        </div><br>


<div id="privateContact">
    <h4>Contact Details</h4>

    <div class="col">
        <label for="privateName" class="labels">Name*</label>
        <input type="text" id="privateName" class="form-control mb-2" style="width: 400px;" placeholder="Enter your name" required>
        
                <label for="privateSurname" class="labels">Surame*</label>
        <input type="text" id="privateSurname" class="form-control mb-2" style="width: 400px;" placeholder="Enter your name" required>
        
                <label for="privateTelephone" class="labels">Telephone number</label>
        <input type="text" id="privateTelephone" class="form-control mb-2" style="width: 400px;" placeholder="Enter Telephone number">
        
                        <label for="privateMobile" class="labels">Mobile number*</label>
        <input type="text" id="privateMobile" class="form-control mb-2" style="width: 400px;" placeholder="Enter Mobile number" required>
        
                      <label for="privateAddressLine1" class="labels">Address Line 1*</label>
        <input type="text" id="privateAddressLine1" class="form-control mb-2" style="width: 400px;" placeholder="Enter Address Line 1" required>
        
            <label for="privateAddressLine2" class="labels">Address Line 2*</label>
        <input type="text" id="privateAddressLine2" class="form-control mb-2" style="width: 400px;" placeholder="Enter Address Line 2" required>
        
         <label for="privateEmailAddress" class="labels">Email Address*</label>
        <input type="text" id="tradeDealerEmailAddress" class="form-control mb-2" style="width: 400px;" placeholder="Enter Email Address" required>
        
    </div>
</div>

<div id="tradeContact">
    <h4>Dealer Details</h4>

    <div class="col">
        <label for="tradeDealerName" class="labels">Dealer Name*</label>
        <input type="text" id="tradeDealerName" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's name" required>
        
                <label for="tradeDealerSurnameName" class="labels">Dealer Surame*</label>
        <input type="text" id="tradeDealerSurnameName" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Surame" required>
        
                <label for="tradeDealerTelephone" class="labels">Dealer Telephone number*</label>
        <input type="text" id="tradeDealerTelephone" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Telephone number" required>
        
               <label for="tradeDealerMobile" class="labels">Dealer Mobile number*</label>
        <input type="text" id="tradeDealerMobile" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Mobile number" required>
        
              <label for="tradeDealerAddressLine1" class="labels">Dealer Address Line 1*</label>
        <input type="text" id="tradeDealerAddressLine1" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Address Line 1" required>
        
            <label for="tradeDealerAddressLine2" class="labels">Dealer Address Line 2*</label>
        <input type="text" id="tradeDealerAddressLine1" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Address Line 1" required>
        
         <label for="tradeDealerEmailAddress" class="labels">Dealer Email Address*</label>
        <input type="text" id="tradeDealerEmailAddress" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Dealer Email Address" required>
        
            <label for="tradeDealerWebsiteAddress" class="labels">Dealer Website Address*</label>
        <input type="text" id="tradeDealerWebsiteAddress" class="form-control mb-2" style="width: 400px;" placeholder="Enter dealer's Dealer Website Address" required>
    </div>
             



<script>
    // Call toggleMessageDiv initially to show/hide private listing elements
    toggleMessageDiv();

    function toggleTradeDiv() {
        var selectedValueTrade = document.getElementById("seller-type").value;
        var tradeDiv = document.getElementById("tradeDiv");
        var privateDiv = document.getElementById("privateDiv");
        var privateContact = document.getElementById("privateContact");
		var tradeContact = document.getElementById("tradeContact");

        if (selectedValueTrade === "private") {
            tradeDiv.style.display = "none"; // hide private listing elements
            privateDiv.style.display = "block"; // show private listing elements
            tradeContact.style.display = "none"; // show private listing elements
            privateContact.style.display = "block"; // show private listing elements

        } else {
            tradeDiv.style.display = "block"; // hide private listing elements
            privateDiv.style.display = "none"; // show private listing elements
			tradeContact.style.display = "block"; // show private listing elements
            privateContact.style.display = "none"; // show private listing elements
        }
    }
</script>





</div>



<!-- region block-->
    <script>
        function updateOptions() {
            var select = document.getElementById("region");
            var selectedValue = select.value;

            // Get the options
            var option1 = document.getElementById("option1");
            var option2 = document.getElementById("option2");
            var option3 = document.getElementById("option3");
            var option4 = document.getElementById("option4");
            var option5 = document.getElementById("option5");
            var option6 = document.getElementById("option6");
            var option7 = document.getElementById("option7");
            var option8 = document.getElementById("option8");
            var option9 = document.getElementById("option9");
            var option10 = document.getElementById("option10");
            var option11 = document.getElementById("option11");
            var option12 = document.getElementById("option12");
            

            // Reset all options
            option1.style.display = "none";
            option2.style.display = "none";
            option3.style.display = "none";
            option4.style.display = "none";
            option5.style.display = "none";
            option6.style.display = "none";
            option7.style.display = "none";
            option8.style.display = "none"
            option9.style.display = "none";
            option10.style.display = "none";
            option11.style.display = "none";
            option12.style.display = "none";
  

            // Set display to "none" for all options

            // Show the option based on the selected value
            for (let i = 1; i <= 12; i++) {
                const option = document.getElementById(`option${i}`);
                option.style.display = selectedValue === `${i}` ? "block" : "none";
            }
        }
    </script>
                

<h6 class=""> Select region*</h6>
    <form>
        <label for="region" class="col-4 col-form-label"></label>
        <select id="region" onchange="updateOptions()" class="form-select form-control" style="width: 400px;"required>
<option value="0">Select an option</option>
<option value="1">East Midlands</option>
<option value="2">East of England</option>
<option value="3">London</option>
<option value="4">North East England</option>
<option value="5">North West England</option>
<option value="6">Northern Ireland</option>
<option value="7">Scotland</option>
<option value="8">South East England</option>
<option value="9">South West England</option>
<option value="10">Wales</option>
<option value="11">West Midlands</option>
<option value="12">Yorkshire and the Humber</option>

            
        </select>

      <div id="option1" style="display: none;">
            <!-- Content for Option 1 -->
           <br><select class="form-select form-control" id="1" name="1">
<option value="North East Derbyshire">North East Derbyshire</option>
<option value="Amber Valley">Amber Valley</option>
<option value="Ashfield">Ashfield</option>
<option value="Bassetlaw">Bassetlaw</option>
<option value="Blaby">Blaby</option>
<option value="Bolsover">Bolsover</option>
<option value="Boston">Boston</option>
<option value="Broxtowe">Broxtowe</option>
<option value="Charnwood">Charnwood</option>
<option value="Chesterfield">Chesterfield</option>
<option value="Corby">Corby</option>
<option value="Daventry">Daventry</option>
<option value="Derby">Derby</option>
<option value="Derbyshire">Derbyshire</option>
<option value="Derbyshire">Derbyshire</option>
<option value="Derbyshire Dales">Derbyshire Dales</option>
<option value="East Lindsey">East Lindsey</option>
<option value="East Northamptonshire">East Northamptonshire</option>
<option value="Erewash">Erewash</option>
<option value="Gedling">Gedling</option>
<option value="Harborough">Harborough</option>
<option value="High Peak">High Peak</option>
<option value="Hinckley and Bosworth">Hinckley and Bosworth</option>
<option value="Kettering">Kettering</option>
<option value="Leicester">Leicester</option>
<option value="Leicestershire">Leicestershire</option>
<option value="Leicestershire">Leicestershire</option>
<option value="Lincoln">Lincoln</option>
<option value="Lincolnshire">Lincolnshire</option>
<option value="Lincolnshire">Lincolnshire</option>
<option value="Mansfield">Mansfield</option>
<option value="Melton">Melton</option>
<option value="Newark and Sherwood">Newark and Sherwood</option>
<option value="North Kesteven">North Kesteven</option>
<option value="North West Leicestershire">North West Leicestershire</option>
<option value="Northampton">Northampton</option>
<option value="Northamptonshire">Northamptonshire</option>
<option value="Nottingham">Nottingham</option>
<option value="Nottinghamshire">Nottinghamshire</option>
<option value="Nottinghamshire">Nottinghamshire</option>
<option value="Oadby and Wigston">Oadby and Wigston</option>
<option value="Rushcliffe">Rushcliffe</option>
<option value="Rutland">Rutland</option>
<option value="South Derbyshire">South Derbyshire</option>
<option value="South Holland">South Holland</option>
<option value="South Kesteven">South Kesteven</option>
<option value="South Northamptonshire">South Northamptonshire</option>
<option value="Wellingborough">Wellingborough</option>
<option value="West Lindsey">West Lindsey</option>
</select>
        </div>


 <div id="option2" style="display: none;">
            <!-- Content for Option 2 -->
           <br><select class="form-select" id="2" name="2">
           <option value="Babergh">Babergh</option>
<option value="Basildon">Basildon</option>
<option value="Bedford">Bedford</option>
<option value="Bedford Borough">Bedford Borough</option>
<option value="Bedfordshire">Bedfordshire</option>
<option value="Braintree">Braintree</option>
<option value="Breckland">Breckland</option>
<option value="Brentwood">Brentwood</option>
<option value="Broadland">Broadland</option>
<option value="Broxbourne">Broxbourne</option>
<option value="Cambridge">Cambridge</option>
<option value="Cambridgeshire">Cambridgeshire</option>
<option value="Cambridgeshire">Cambridgeshire</option>
<option value="Castle Point">Castle Point</option>
<option value="Central Bedfordshire">Central Bedfordshire</option>
<option value="Chelmsford">Chelmsford</option>
<option value="Colchester">Colchester</option>
<option value="Dacorum">Dacorum</option>
<option value="East Cambridgeshire">East Cambridgeshire</option>
<option value="East Hertfordshire">East Hertfordshire</option>
<option value="Epping Forest">Epping Forest</option>
<option value="Essex">Essex</option>
<option value="Essex">Essex</option>
<option value="Fenland">Fenland</option>
<option value="Forest Heath">Forest Heath</option>
<option value="Great Yarmouth">Great Yarmouth</option>
<option value="Harlow">Harlow</option>
<option value="Hertfordshire">Hertfordshire</option>
<option value="Hertsmere">Hertsmere</option>
<option value="Huntingdonshire">Huntingdonshire</option>
<option value="Ipswich">Ipswich</option>
<option value="King's Lynn and West Norfolk">King's Lynn and West Norfolk</option>
<option value="Luton">Luton</option>
<option value="Maldon">Maldon</option>
<option value="Mid Suffolk">Mid Suffolk</option>
<option value="Norfolk">Norfolk</option>
<option value="North Hertfordshire">North Hertfordshire</option>
<option value="North Norfolk">North Norfolk</option>
<option value="Norwich">Norwich</option>
<option value="Peterborough">Peterborough</option>
<option value="Rochford">Rochford</option>
<option value="South Cambridgeshire">South Cambridgeshire</option>
<option value="South Norfolk">South Norfolk</option>
<option value="Southend-on-Sea">Southend-on-Sea</option>
<option value="St Albans">St Albans</option>
<option value="St. Edmundsbury">St. Edmundsbury</option>
<option value="Stevenage">Stevenage</option>
<option value="Suffolk">Suffolk</option>
<option value="Suffolk Coastal">Suffolk Coastal</option>
<option value="Tendring">Tendring</option>
<option value="Three Rivers">Three Rivers</option>
<option value="Thurrock">Thurrock</option>
<option value="Uttlesford">Uttlesford</option>
<option value="Watford">Watford</option>
<option value="Waveney">Waveney</option>
<option value="Welwyn Hatfield">Welwyn Hatfield</option>

</select>
        </div>

       <div id="option3" style="display: none;">
            <!-- Content for Option 3 -->
           <br><select class="form-select" id="3" name="3">
<option value="Barking and Dagenham">Barking and Dagenham</option>
<option value="Barnet">Barnet</option>
<option value="Bexley">Bexley</option>
<option value="Brent">Brent</option>
<option value="Bromley">Bromley</option>
<option value="Camden">Camden</option>
<option value="City of London">City of London</option>
<option value="City of London">City of London</option>
<option value="City of Westminster">City of Westminster</option>
<option value="Croydon">Croydon</option>
<option value="Ealing">Ealing</option>
<option value="Enfield">Enfield</option>
<option value="Greater London">Greater London</option>
<option value="Greenwich">Greenwich</option>
<option value="Hackney">Hackney</option>
<option value="Hammersmith and Fulham">Hammersmith and Fulham</option>
<option value="Haringey">Haringey</option>
<option value="Harrow">Harrow</option>
<option value="Havering">Havering</option>
<option value="Hillingdon">Hillingdon</option>
<option value="Hounslow">Hounslow</option>
<option value="Islington">Islington</option>
<option value="Kensington and Chelsea">Kensington and Chelsea</option>
<option value="Kingston upon Thames">Kingston upon Thames</option>
<option value="Lambeth">Lambeth</option>
<option value="Lewisham">Lewisham</option>
<option value="Merton">Merton</option>
<option value="Newham">Newham</option>
<option value="Redbridge">Redbridge</option>
<option value="Richmond">Richmond</option>
<option value="Southwark">Southwark</option>
<option value="Sutton">Sutton</option>
<option value="Tower Hamlets">Tower Hamlets</option>
<option value="Waltham Forest">Waltham Forest</option>
<option value="Wandsworth">Wandsworth</option>
<option value="Westminster">Westminster</option>
            </select>
        </div>
        
       <div id="option4" style="display: none;">
            <!-- Content for Option 4 -->
           <br><select class="form-select" id="4" name="4">
<option value="County Durham">County Durham</option>
<option value="Darlington">Darlington</option>
<option value="Durham">Durham</option>
<option value="Durham">Durham</option>
<option value="Gateshead">Gateshead</option>
<option value="Hartlepool">Hartlepool</option>
<option value="Middlesbrough">Middlesbrough</option>
<option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
<option value="North Tyneside">North Tyneside</option>
<option value="North Yorkshire">North Yorkshire</option>
<option value="Northumberland">Northumberland</option>
<option value="Redcar and Cleveland">Redcar and Cleveland</option>
<option value="South Tyneside">South Tyneside</option>
<option value="Stockton-on-Tees">Stockton-on-Tees</option>
<option value="Sunderland">Sunderland</option>
<option value="Tyne and Wear">Tyne and Wear</option>

            </select>
        </div>
        
       <div id="option5" style="display: none;">
            <!-- Content for Option 5 -->
           <br><select class="form-select" id="5" name="5">
<option value="Allerdale">Allerdale</option>
<option value="Barrow-in-Furness">Barrow-in-Furness</option>
<option value="Blackburn with Darwen">Blackburn with Darwen</option>
<option value="Blackpool">Blackpool</option>
<option value="Bolton">Bolton</option>
<option value="Burnley">Burnley</option>
<option value="Bury">Bury</option>
<option value="Carlisle">Carlisle</option>
<option value="Cheshire">Cheshire</option>
<option value="Cheshire East">Cheshire East</option>
<option value="Cheshire West and Chester">Cheshire West and Chester</option>
<option value="Chorley">Chorley</option>
<option value="Copeland">Copeland</option>
<option value="Cumbria">Cumbria</option>
<option value="Eden">Eden</option>
<option value="Fylde">Fylde</option>
<option value="Greater Manchester">Greater Manchester</option>
<option value="Halton">Halton</option>
<option value="Hyndburn">Hyndburn</option>
<option value="Knowsley">Knowsley</option>
<option value="Lancashire">Lancashire</option>
<option value="Lancashire">Lancashire</option>
<option value="Lancaster">Lancaster</option>
<option value="Liverpool">Liverpool</option>
<option value="Manchester">Manchester</option>
<option value="Merseyside">Merseyside</option>
<option value="Oldham">Oldham</option>
<option value="Pendle">Pendle</option>
<option value="Preston">Preston</option>
<option value="Ribble Valley">Ribble Valley</option>
<option value="Rochdale">Rochdale</option>
<option value="Rossendale">Rossendale</option>
<option value="Salford">Salford</option>
<option value="Sefton">Sefton</option>
<option value="South Lakeland">South Lakeland</option>
<option value="South Ribble">South Ribble</option>
<option value="St Helens">St Helens</option>
<option value="St. Helens">St. Helens</option>
<option value="Stockport">Stockport</option>
<option value="Tameside">Tameside</option>
<option value="Trafford">Trafford</option>
<option value="Warrington">Warrington</option>
<option value="West Lancashire">West Lancashire</option>
<option value="Wigan">Wigan</option>
<option value="Wirral">Wirral</option>
<option value="Wyre">Wyre</option>


            </select>
        </div>        
<div id="option6" style="display: none;">
            <!-- Content for Option 6 -->
           <br><select class="form-select" id="6" name="6">
<option value="Antrim">Antrim</option>
<option value="Ards">Ards</option>
<option value="Armagh">Armagh</option>
<option value="Ballymena">Ballymena</option>
<option value="Ballymoney">Ballymoney</option>
<option value="Banbridge">Banbridge</option>
<option value="Belfast">Belfast</option>
<option value="Carrickfergus">Carrickfergus</option>
<option value="Castlereagh">Castlereagh</option>
<option value="Coleraine">Coleraine</option>
<option value="Cookstown">Cookstown</option>
<option value="County Armagh">County Armagh</option>
<option value="County Fermanagh">County Fermanagh</option>
<option value="Craigavon">Craigavon</option>
<option value="Derry">Derry</option>
<option value="Down">Down</option>
<option value="Dungannon">Dungannon</option>
<option value="Fermanagh">Fermanagh</option>
<option value="Larne">Larne</option>
<option value="Limavady">Limavady</option>
<option value="Lisburn">Lisburn</option>
<option value="Magherafelt">Magherafelt</option>
<option value="Moyle">Moyle</option>
<option value="Newry and Mourne">Newry and Mourne</option>
<option value="Newry and Mourne">Newry and Mourne</option>
<option value="Newtownabbey">Newtownabbey</option>
<option value="North Down">North Down</option>
<option value="Omagh">Omagh</option>
<option value="South Tyrone">South Tyrone</option>
<option value="Strabane">Strabane</option>



            </select>
        </div>
        
<div id="option7" style="display: none;">
            <!-- Content for Option 7 -->
           <br><select class="form-select" id="7" name="7">
<option value="Aberdeen City">Aberdeen City</option>
<option value="Aberdeenshire">Aberdeenshire</option>
<option value="Angus">Angus</option>
<option value="Argyll and Bute">Argyll and Bute</option>
<option value="Argyllshire">Argyllshire</option>
<option value="Ayrshire">Ayrshire</option>
<option value="Banffshire">Banffshire</option>
<option value="Berwickshire">Berwickshire</option>
<option value="Bute">Bute</option>
<option value="Caithness">Caithness</option>
<option value="City of Edinburgh">City of Edinburgh</option>
<option value="Clackmannanshire">Clackmannanshire</option>
<option value="Dumfries and Galloway">Dumfries and Galloway</option>
<option value="Dumfriesshire">Dumfriesshire</option>
<option value="Dunbartonshire">Dunbartonshire</option>
<option value="Dundee City">Dundee City</option>
<option value="East Ayrshire">East Ayrshire</option>
<option value="East Dunbartonshire">East Dunbartonshire</option>
<option value="East Lothian">East Lothian</option>
<option value="East Renfrewshire">East Renfrewshire</option>
<option value="Edinburgh City">Edinburgh City</option>
<option value="Eilean Siar">Eilean Siar</option>
<option value="Falkirk">Falkirk</option>
<option value="Fife">Fife</option>
<option value="Glasgow City">Glasgow City</option>
<option value="Highland">Highland</option>
<option value="Inverclyde">Inverclyde</option>
<option value="Inverness-shire">Inverness-shire</option>
<option value="Kincardineshire">Kincardineshire</option>
<option value="Kinross-shire">Kinross-shire</option>
<option value="Kirkcudbrightshire">Kirkcudbrightshire</option>
<option value="Lanarkshire">Lanarkshire</option>
<option value="Midlothian">Midlothian</option>
<option value="Moray">Moray</option>
<option value="Nairnshire">Nairnshire</option>
<option value="North Ayrshire">North Ayrshire</option>
<option value="North Lanarkshire">North Lanarkshire</option>
<option value="Orkney">Orkney</option>
<option value="Orkney Islands">Orkney Islands</option>
<option value="Peeblesshire">Peeblesshire</option>
<option value="Perth and Kinross">Perth and Kinross</option>
<option value="Perthshire">Perthshire</option>
<option value="Renfrewshire">Renfrewshire</option>
<option value="Ross and Cromarty">Ross and Cromarty</option>
<option value="Roxburghshire">Roxburghshire</option>
<option value="Selkirkshire">Selkirkshire</option>
<option value="Shetland Islands">Shetland Islands</option>
<option value="South Ayrshire">South Ayrshire</option>
<option value="South Lanarkshire">South Lanarkshire</option>
<option value="South Lanarkshire">South Lanarkshire</option>
<option value="Stirling">Stirling</option>
<option value="Stirlingshire">Stirlingshire</option>
<option value="Sutherland">Sutherland</option>
<option value="The Scottish Borders">The Scottish Borders</option>
<option value="West Ayrshire">West Ayrshire</option>
<option value="West Dunbartonshire">West Dunbartonshire</option>
<option value="West Lothian">West Lothian</option>
<option value="Wigtownshire">Wigtownshire</option>
<option value="Zetland">Zetland</option>




            </select>
        </div>                        

<div id="option8" style="display: none;">
            <!-- Content for Option 8 -->
           <br><select class="form-select" id="8" name="8">
<option value="Adur">Adur</option>
<option value="Arun">Arun</option>
<option value="Ashford">Ashford</option>
<option value="Aylesbury Vale">Aylesbury Vale</option>
<option value="Basingstoke and Deane">Basingstoke and Deane</option>
<option value="Berkshire">Berkshire</option>
<option value="Bracknell Forest">Bracknell Forest</option>
<option value="Brighton and Hove">Brighton and Hove</option>
<option value="Buckinghamshire">Buckinghamshire</option>
<option value="Buckinghamshire">Buckinghamshire</option>
<option value="Canterbury">Canterbury</option>
<option value="Cherwell">Cherwell</option>
<option value="Chichester">Chichester</option>
<option value="Chiltern">Chiltern</option>
<option value="Crawley">Crawley</option>
<option value="Dartford">Dartford</option>
<option value="Dover">Dover</option>
<option value="East Hampshire">East Hampshire</option>
<option value="East Sussex">East Sussex</option>
<option value="East Sussex">East Sussex</option>
<option value="Eastbourne">Eastbourne</option>
<option value="Eastleigh">Eastleigh</option>
<option value="Elmbridge">Elmbridge</option>
<option value="Epsom and Ewell">Epsom and Ewell</option>
<option value="Fareham">Fareham</option>
<option value="Gosport">Gosport</option>
<option value="Gravesham">Gravesham</option>
<option value="Guildford">Guildford</option>
<option value="Hampshire">Hampshire</option>
<option value="Hampshire">Hampshire</option>
<option value="Hart">Hart</option>
<option value="Hastings">Hastings</option>
<option value="Havant">Havant</option>
<option value="Horsham">Horsham</option>
<option value="Isle of Wight">Isle of Wight</option>
<option value="Kent">Kent</option>
<option value="Kent">Kent</option>
<option value="Lewes">Lewes</option>
<option value="Maidstone">Maidstone</option>
<option value="Medway">Medway</option>
<option value="Mid Sussex">Mid Sussex</option>
<option value="Milton Keynes">Milton Keynes</option>
<option value="Mole Valley">Mole Valley</option>
<option value="New Forest">New Forest</option>
<option value="Oxford">Oxford</option>
<option value="Oxfordshire">Oxfordshire</option>
<option value="Portsmouth">Portsmouth</option>
<option value="Reading">Reading</option>
<option value="Reigate and Banstead">Reigate and Banstead</option>
<option value="Rother">Rother</option>
<option value="Runnymede">Runnymede</option>
<option value="Rushmoor">Rushmoor</option>
<option value="Sevenoaks">Sevenoaks</option>
<option value="Shepway">Shepway</option>
<option value="Slough">Slough</option>
<option value="South Bucks">South Bucks</option>
<option value="South Oxfordshire">South Oxfordshire</option>
<option value="Southampton">Southampton</option>
<option value="Spelthorne">Spelthorne</option>
<option value="Surrey">Surrey</option>
<option value="Surrey Heath">Surrey Heath</option>
<option value="Swale">Swale</option>
<option value="Tandridge">Tandridge</option>
<option value="Test Valley">Test Valley</option>
<option value="Thanet">Thanet</option>
<option value="Tonbridge and Malling">Tonbridge and Malling</option>
<option value="Tunbridge Wells">Tunbridge Wells</option>
<option value="Vale of White Horse">Vale of White Horse</option>
<option value="Waverley">Waverley</option>
<option value="Wealden">Wealden</option>
<option value="West Berkshire">West Berkshire</option>
<option value="West Oxfordshire">West Oxfordshire</option>
<option value="West Sussex">West Sussex</option>
<option value="Winchester">Winchester</option>
<option value="Windsor and Maidenhead">Windsor and Maidenhead</option>
<option value="Woking">Woking</option>
<option value="Wokingham">Wokingham</option>
<option value="Worthing">Worthing</option>
<option value="Wycombe">Wycombe</option>





            </select>
        </div>                        


<div id="option9" style="display: none;">
            <!-- Content for Option 9 -->
           <br><select class="form-select" id="9" name="9">
<option value="Bath and North East Somerset">Bath and North East Somerset</option>
<option value="Bournemouth">Bournemouth</option>
<option value="Bristol">Bristol</option>
<option value="Cheltenham">Cheltenham</option>
<option value="Christchurch">Christchurch</option>
<option value="City of Bristol">City of Bristol</option>
<option value="Cornwall">Cornwall</option>
<option value="Cornwall">Cornwall</option>
<option value="Cotswold">Cotswold</option>
<option value="Devon">Devon</option>
<option value="Devon">Devon</option>
<option value="Dorset">Dorset</option>
<option value="Dorset">Dorset</option>
<option value="East Devon">East Devon</option>
<option value="East Dorset">East Dorset</option>
<option value="Exeter">Exeter</option>
<option value="Forest of Dean">Forest of Dean</option>
<option value="Gloucester">Gloucester</option>
<option value="Gloucestershire">Gloucestershire</option>
<option value="Gloucestershire">Gloucestershire</option>
<option value="Isles of Scilly">Isles of Scilly</option>
<option value="Mendip">Mendip</option>
<option value="Mid Devon">Mid Devon</option>
<option value="North Devon">North Devon</option>
<option value="North Dorset">North Dorset</option>
<option value="North Somerset">North Somerset</option>
<option value="Plymouth">Plymouth</option>
<option value="Poole">Poole</option>
<option value="Purbeck">Purbeck</option>
<option value="Sedgemoor">Sedgemoor</option>
<option value="Somerset">Somerset</option>
<option value="Somerset">Somerset</option>
<option value="South Gloucestershire">South Gloucestershire</option>
<option value="South Hams">South Hams</option>
<option value="South Somerset">South Somerset</option>
<option value="Stroud">Stroud</option>
<option value="Swindon">Swindon</option>
<option value="Taunton Deane">Taunton Deane</option>
<option value="Teignbridge">Teignbridge</option>
<option value="Tewkesbury">Tewkesbury</option>
<option value="Torbay">Torbay</option>
<option value="Torridge">Torridge</option>
<option value="West Devon">West Devon</option>
<option value="West Dorset">West Dorset</option>
<option value="West Somerset">West Somerset</option>
<option value="Weymouth and Portland">Weymouth and Portland</option>
<option value="Wiltshire">Wiltshire</option>
<option value="Wiltshire">Wiltshire</option>






            </select>
        </div>                        

<div id="option10" style="display: none;">
            <!-- Content for Option 10 -->
           <br><select class="form-select" id="10" name="10">
<option value="Aberdare">Aberdare</option>
<option value="Bargoed">Bargoed</option>
<option value="Barry">Barry</option>
<option value="Blaenau Gwent">Blaenau Gwent</option>
<option value="Bridgend">Bridgend</option>
<option value="Caerphilly">Caerphilly</option>
<option value="Cardiff">Cardiff</option>
<option value="Carmarthenshire">Carmarthenshire</option>
<option value="Ceredigion">Ceredigion</option>
<option value="Conwy">Conwy</option>
<option value="Cowbridge">Cowbridge</option>
<option value="Denbighshire">Denbighshire</option>
<option value="Dinas Powys">Dinas Powys</option>
<option value="Ferndale">Ferndale</option>
<option value="Flintshire">Flintshire</option>
<option value="Gwynedd">Gwynedd</option>
<option value="Hengoed">Hengoed</option>
<option value="Isle of Anglesey">Isle of Anglesey</option>
<option value="Llantwit Major">Llantwit Major</option>
<option value="Maesteg">Maesteg</option>
<option value="Merthyr Tydfil">Merthyr Tydfil</option>
<option value="Monmouthshire">Monmouthshire</option>
<option value="Monmouthshire">Monmouthshire</option>
<option value="Mountain Ash">Mountain Ash</option>
<option value="Neath Port Talbot">Neath Port Talbot</option>
<option value="Newport">Newport</option>
<option value="Newport">Newport</option>
<option value="Pembrokeshire">Pembrokeshire</option>
<option value="Penarth">Penarth</option>
<option value="Pentre">Pentre</option>
<option value="Pontyclun">Pontyclun</option>
<option value="Pontypridd">Pontypridd</option>
<option value="Porth">Porth</option>
<option value="Porthcawl">Porthcawl</option>
<option value="Powys">Powys</option>
<option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
<option value="Rhoose">Rhoose</option>
<option value="Sully">Sully</option>
<option value="Swansea">Swansea</option>
<option value="The Vale of Glamorgan">The Vale of Glamorgan</option>
<option value="Tonypandy">Tonypandy</option>
<option value="Torfaen">Torfaen</option>
<option value="Treharris">Treharris</option>
<option value="Treorchy">Treorchy</option>
<option value="Wrexham">Wrexham</option>
            </select>
        </div>        

<div id="option11" style="display: none;">
            <!-- Content for Option 11 -->
           <br><select class="form-select" id="11" name="11">
<option value="Birmingham">Birmingham</option>
<option value="Bromsgrove">Bromsgrove</option>
<option value="Cannock Chase">Cannock Chase</option>
<option value="Coventry">Coventry</option>
<option value="Dudley">Dudley</option>
<option value="East Staffordshire">East Staffordshire</option>
<option value="Herefordshire">Herefordshire</option>
<option value="Lichfield">Lichfield</option>
<option value="Malvern Hills">Malvern Hills</option>
<option value="Newcastle-under-Lyme">Newcastle-under-Lyme</option><option value="North Warwickshire">North Warwickshire</option>
<option value="Nuneaton and Bedworth">Nuneaton and Bedworth</option>
<option value="Redditch">Redditch</option>
<option value="Rugby">Rugby</option>
<option value="Sandwell">Sandwell</option>
<option value="Shropshire">Shropshire</option>
<option value="Shropshire">Shropshire</option>
<option value="Solihull">Solihull</option>
<option value="South Staffordshire">South Staffordshire</option>
<option value="Stafford">Stafford</option>
<option value="Staffordshire">Staffordshire</option>
<option value="Staffordshire">Staffordshire</option>
<option value="Staffordshire Moorlands">Staffordshire Moorlands</option>
<option value="Stoke-on-Trent">Stoke-on-Trent</option>
<option value="Stratford-on-Avon">Stratford-on-Avon</option>
<option value="Tamworth">Tamworth</option>
<option value="Telford and Wrekin">Telford and Wrekin</option>
<option value="Walsall">Walsall</option>
<option value="Warwick">Warwick</option>
<option value="Warwickshire">Warwickshire</option>
<option value="West Midlands">West Midlands</option>
<option value="Wolverhampton">Wolverhampton</option>
<option value="Worcester">Worcester</option>
<option value="Worcestershire">Worcestershire</option>
<option value="Wychavon">Wychavon</option>
<option value="Wyre Forest">Wyre Forest</option>

            </select>
        </div>        

<div id="option12" style="display: none;">
<!-- Content for Option 12 -->
<br><select class="form-select" id="12" name="12">
<option value="Barnsley">Barnsley</option>
<option value="Bradford">Bradford</option>
<option value="Calderdale">Calderdale</option>
<option value="City of Kingston-upon-Hull">City of Kingston-upon-Hull</option>
<option value="Craven">Craven</option>
<option value="Doncaster">Doncaster</option>
<option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
<option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
<option value="Hambleton">Hambleton</option>
<option value="Harrogate">Harrogate</option>
<option value="Kingston upon Hull">Kingston upon Hull</option>
<option value="Kirklees">Kirklees</option>
<option value="Leeds">Leeds</option>
<option value="Lincolnshire">Lincolnshire</option>
<option value="North East Lincolnshire">North East Lincolnshire</option>
<option value="North Lincolnshire">North Lincolnshire</option>
<option value="North Yorkshire">North Yorkshire</option>
<option value="North Yorkshire">North Yorkshire</option>
<option value="Richmondshire">Richmondshire</option>
<option value="Rotherham">Rotherham</option>
<option value="Ryedale">Ryedale</option>
<option value="Scarborough">Scarborough</option>
<option value="Selby">Selby</option>
<option value="Sheffield">Sheffield</option>
<option value="South Yorkshire">South Yorkshire</option>
<option value="Wakefield">Wakefield</option>
<option value="West Yorkshire">West Yorkshire</option>
<option value="York">York</option>
</select>

</div>

<form>
<div class="mb-3 mt-3">
<p>Postcode*</p>
</div>
  	<div class="mb-3 mt-3">
    		<label for="text">
    		<input type="text" class="post-code-form form-control" id="text" placeholder="Enter post code" name="postcode" style="width: 400px;" required></label>
  	</div>
	</form>
<hr>
<br>

<h4>Listing Details</h4>

<form>
   <div class="row">
      <div class="col">
    <label for="cat" class="col-4 col-form-label">Category:</label> 
    <div class="col-8">
<select id="cat" onchange="showTextInput('cat', 'otherInput3')"  name="subcat" class="form-select form-control" style="width: 400px;">
		<option value="atvs">Atvs</option>
        <option value="horticulture">Horticulture</option>
        <option value="dairy">Dairy</option>
        <option value="storage-and-building">Storage-and-building</option>
        <option value="tractors">Tractors</option>
        <option value="spreaders-and-sprayers">Spreaders-and-sprayers</option>
        <option value="motors">Motors</option>
        <option value="trailers">Trailers</option>
        <option value="water-solutions">Water-solutions</option>
        <option value="excavators-and-loaders">Excavators-and-loaders</option>
        <option value="miscellaneous">Miscellaneous</option>
        <option value="forage-and-hay">Forage-and-hay</option>
        <option value="forestry-and-hedging">Forestry-and-hedging</option>
        <option value="ground-care">Ground-care</option>
        <option value="harvesters">Harvesters</option>
        <option value="livestock-equipment">Livestock-equipment</option>
        <option value="sowing-and-planting">Sowing-and-planting</option>
        <option value="tillage">Sillage</option>
        <option value="tractor-attachments">Tractor-attachments</option>
        <option value="presses-rolls">Presses-rolls</option>
        <option value="equestrian">Equestrian</option>
        <option value="livestock">Livestock</option>
        <option value="Grain-Dryer">Grain-Dryer</option>
        <option value="Other">Other</option>
      </select> 
      <input type="text" id="otherInput3" class="hidden form-control mt-2" placeholder="Other, please specify" style="width: 400px;">
      <span id="Category" class="form-text text-muted"></span>
    </div>
    
       <div class="row">
      <div class="col">
    <label for="manu" class="col-4 col-form-label">Manufacturer:</label> 
    <div class="col-8">
      <select id="manu" onchange="showTextInput('manu', 'otherInput2')"  name="subcat" class="form-select form-control" style="width: 400px;">
<option value="A. W. Trailers">A. W. Trailers</option>
<option value="Accord">Accord</option>
<option value="Ag Products">Ag Products</option>
<option value="Ag-Bag">Ag-Bag</option>
<option value="AGCO">AGCO</option>
<option value="Agri Spread">Agri Spread</option>
<option value="Agrimac">Agrimac</option>
<option value="Albutt">Albutt</option>
<option value="Alo">Alo</option>
<option value="Alpego">Alpego</option>
<option value="Alto">Alto</option>
<option value="Amazone">Amazone</option>
<option value="Apache">Apache</option>
<option value="Arctic Cat">Arctic Cat</option>
<option value="Ausa">Ausa</option>
<option value="Balfour">Balfour</option>
<option value="Barford">Barford</option>
<option value="Bateson">Bateson</option>
<option value="Beachtech">Beachtech</option>
<option value="Belarus">Belarus</option>
<option value="Belmac">Belmac</option>
<option value="Benford">Benford</option>
<option value="BF Tyres">BF Tyres</option>
<option value="BGU">BGU</option>
<option value="BMW">BMW</option>
<option value="Bobcat">Bobcat</option>
<option value="Bomford">Bomford</option>
<option value="Bosch">Bosch</option>
<option value="Broadwood">Broadwood</option>
<option value="Browns">Browns</option>
<option value="Buffalo">Buffalo</option>
<option value="Cambridge">Cambridge</option>
<option value="Cannon">Cannon</option>
<option value="Case">Case</option>
<option value="Case IH">Case IH</option>
<option value="Caterpillar">Caterpillar</option>
<option value="C-Dax">C-Dax</option>
<option value="Chillton">Chillton</option>
<option value="CLAAS">CLAAS</option>
<option value="CLH">CLH</option>
<option value="Conor">Conor</option>
<option value="Continental">Continental</option>
<option value="Cousins">Cousins</option>
<option value="Daewoo">Daewoo</option>
<option value="Daihatsu">Daihatsu</option>
<option value="David Brown">David Brown</option>
<option value="Davis">Davis</option>
<option value="DeLaval">DeLaval</option>
<option value="Deutz">Deutz</option>
<option value="Deutz Fahr">Deutz Fahr</option>
<option value="Ditch Witch">Ditch Witch</option>
<option value="Dodge">Dodge</option>
<option value="Doosan">Doosan</option>
<option value="Dowdeswell">Dowdeswell</option>
<option value="Ehrle">Ehrle</option>
<option value="Einbock">Einbock</option>
<option value="Enduramaxx">Enduramaxx</option>
<option value="Enorossi">Enorossi</option>
<option value="Farma">Farma</option>
<option value="Farmaster">Farmaster</option>
<option value="Farmco">Farmco</option>
<option value="Farmforce">Farmforce</option>
<option value="Farr">Farr</option>
<option value="Fella">Fella</option>
<option value="Fendt">Fendt</option>
<option value="Ferguson">Ferguson</option>
<option value="Feriboli">Feriboli</option>
<option value="Fiat">Fiat</option>
<option value="Firestone">Firestone</option>
<option value="Fleming">Fleming</option>
<option value="Flexicoil">Flexicoil</option>
<option value="Ford">Ford</option>
<option value="Fordson">Fordson</option>
<option value="Fraser">Fraser</option>
<option value="Gametti">Gametti</option>
<option value="GEA">GEA</option>
<option value="Gehl">Gehl</option>
<option value="GHL">GHL</option>
<option value="Globe">Globe</option>
<option value="Goodyear">Goodyear</option>
<option value="Graham Edwards">Graham Edwards</option>
<option value="Graham Pluess">Graham Pluess</option>
<option value="Grays">Grays</option>
<option value="Gregoire Besson">Gregoire Besson</option>
<option value="Hagie">Hagie</option>
<option value="Hanson">Hanson</option>
<option value="Hardi">Hardi</option>
<option value="Haylock">Haylock</option>
<option value="Herron">Herron</option>
<option value="Hi-Spec">Hi-Spec</option>
<option value="Hitachi">Hitachi</option>
<option value="Honda">Honda</option>
<option value="Honda1">Honda1</option>
<option value="Horsch">Horsch</option>
<option value="Horst">Horst</option>
<option value="Howard">Howard</option>
<option value="Hudson">Hudson</option>
<option value="Hyundai">Hyundai</option>
<option value="Ingersoll Rand">Ingersoll Rand</option>
<option value="International">International</option>
<option value="Isuzu">Isuzu</option>
<option value="JCB">JCB</option>
<option value="Jeep">Jeep</option>
<option value="JF Stoll">JF Stoll</option>
<option value="John Deere">John Deere</option>
<option value="Joskin">Joskin</option>
<option value="JPM">JPM</option>
<option value="K Two">K Two</option>
<option value="Kawasaki">Kawasaki</option>
<option value="Keenan">Keenan</option>
<option value="Ken Wootton">Ken Wootton</option>
<option value="Kioti">Kioti</option>
<option value="Komatsu">Komatsu</option>
<option value="Kongskilde">Kongskilde</option>
<option value="Krone">Krone</option>
<option value="Kubota">Kubota</option>
<option value="Kuhn">Kuhn</option>
<option value="Kverneland">Kverneland</option>
<option value="Lamborghini">Lamborghini</option>
<option value="Land Rover">Land Rover</option>
<option value="Landini">Landini</option>
<option value="Landmec">Landmec</option>
<option value="Lely">Lely</option>
<option value="Lexion">Lexion</option>
<option value="Leyland">Leyland</option>
<option value="Logic">Logic</option>
<option value="LSM">LSM</option>
<option value="Lynx">Lynx</option>
<option value="M & E">M & E</option>
<option value="Major">Major</option>
<option value="Malgar">Malgar</option>
<option value="Manitou">Manitou</option>
<option value="Marshall">Marshall</option>
<option value="Marstons">Marstons</option>
<option value="Maschio">Maschio</option>
<option value="Massey Ferguson">Massey Ferguson</option>
<option value="Matbro">Matbro</option>
<option value="McConnel">McConnel</option>
<option value="McCormick">McCormick</option>
<option value="McHale">McHale</option>
<option value="Mecmar">Mecmar</option>
<option value="Meridian">Meridian</option>
<option value="Merlo">Merlo</option>
<option value="Murska Sobota">Murska Sobota</option>
<option value="New Holland">New Holland</option>
<option value="Nilfisk">Nilfisk</option>
<option value="Noble">Noble</option>
<option value="Nugent">Nugent</option>
<option value="Opico">Opico</option>
<option value="Overum">Overum</option>
<option value="Palax">Palax</option>
<option value="Parmiter">Parmiter</option>
<option value="Pettit">Pettit</option>
<option value="Polaris">Polaris</option>
<option value="Pro Ag">Pro Ag</option>
<option value="PZ">PZ</option>
<option value="Quad-X">Quad-X</option>
<option value="Quicke">Quicke</option>
<option value="Rabe">Rabe</option>
<option value="Ransome">Ransome</option>
<option value="Rau Polymag">Rau Polymag</option>
<option value="Rhino">Rhino</option>
<option value="Richard Weston">Richard Weston</option>
<option value="Ritchie">Ritchie</option>
<option value="Rolland">Rolland</option>
<option value="Russel">Russel</option>
<option value="Samaz">Samaz</option>
<option value="Same">Same</option>
<option value="Samsung">Samsung</option>
<option value="Sanderson">Sanderson</option>
<option value="Saxon">Saxon</option>
<option value="Scat Trak">Scat Trak</option>
<option value="Shelbourne Reynolds">Shelbourne Reynolds</option>
<option value="Simba">Simba</option>
<option value="SIP">SIP</option>
<option value="Siromer">Siromer</option>
<option value="Slewtic">Slewtic</option>
<option value="Spearhead">Spearhead</option>
<option value="Stanhay">Stanhay</option>
<option value="Stihl">Stihl</option>
<option value="Storth">Storth</option>
<option value="Strimech">Strimech</option>
<option value="Stuart">Stuart</option>
<option value="Subaru">Subaru</option>
<option value="Sumo">Sumo</option>
<option value="Suzuki">Suzuki</option>
<option value="Taarup">Taarup</option>
<option value="Tafe">Tafe</option>
<option value="Takeuchi">Takeuchi</option>
<option value="Tanco">Tanco</option>
<option value="Teagle">Teagle</option>
<option value="Terex">Terex</option>
<option value="TGB">TGB</option>
<option value="Titan">Titan</option>
<option value="Toyota">Toyota</option>
<option value="Trioliet">Trioliet</option>
<option value="Tube Line Manufacturing">Tube Line Manufacturing</option>
<option value="Tulip">Tulip</option>
<option value="Twose">Twose</option>
<option value="Twyman">Twyman</option>
<option value="TYM">TYM</option>
<option value="Universal">Universal</option>
<option value="Ursus">Ursus</option>
<option value="Vaderstad">Vaderstad</option>
<option value="Valtra">Valtra</option>
<option value="Vicon">Vicon</option>
<option value="Volvo">Volvo</option>
<option value="Votex">Votex</option>
<option value="Wacker Neuson">Wacker Neuson</option>
<option value="Warwick">Warwick</option>
<option value="Watson">Watson</option>
<option value="Weeks">Weeks</option>
<option value="Weidermann">Weidermann</option>
<option value="Welgar">Welgar</option>
<option value="Wessex">Wessex</option>
<option value="Western">Western</option>
<option value="Yamaha">Yamaha</option>
<option value="Yanmar">Yanmar</option>
<option value="Zetor">Zetor</option>
<option value="Zimmerman">Zimmerman</option>
<option value="Other">Other</option>
</select>
      <input type="text" id="otherInput2" class="hidden form-control mt-2" placeholder="Other, please specify" style="width: 400px;">
<br>

 
      <span id="Category" class="form-text text-muted"></span>
    </div>

  </div>
  
  <div class="form-group row">
    <label for="subcat" class="col-4 col-form-label">Sub Category:</label> 
           <div class="row">
      <div class="col">
<select id="equipmentType" onchange="showTextInput('equipmentType', 'otherInput1')"  name="subcat" class="form-select form-control" style="width: 400px;">
  <option value="Forks">Forks</option>
  <option value="Gates and Fencing">Gates and Fencing</option>
  <option value="Generator">Generator</option>
  <option value="GPS">GPS</option>
  <option value="Grabs">Grabs</option>
  <option value="Grain and Silage Trailers">Grain and Silage Trailers</option>
  <option value="Harrows">Harrows</option>
  <option value="Hay Bobs">Hay Bobs</option>
  <option value="Hedge Trimmer">Hedge Trimmer</option>
  <option value="Hedge trimmers">Hedge trimmers</option>
  <option value="Horsebox">Horsebox</option>
  <option value="Isuzu">Isuzu</option>
  <option value="Landrover">Landrover</option>
  <option value="Link Box">Link Box</option>
  <option value="Livestock Equipment Attachments">Livestock Equipment Attachments</option>
  <option value="Livestock Trailers">Livestock Trailers</option>
  <option value="Livestock Trucks">Livestock Trucks</option>
  <option value="Loaders">Loaders</option>
  <option value="Lorry">Lorry</option>
  <option value="Mancage">Mancage</option>
  <option value="Manure Spreaders">Manure Spreaders</option>
  <option value="Milking Equipment">Milking Equipment</option>
  <option value="Mower-conditioners">Mower-conditioners</option>
  <option value="Mowers">Mowers</option>
<option value="Other Sprayers and Spreaders">Other Sprayers and Spreaders</option>
                <option value="Planters">Planters</option>
                <option value="Plant Excavators">Plant Excavators</option>
                <option value="Plant Loaders">Plant Loaders</option>
                <option value="Plant Trailers">Plant Trailers</option>
                <option value="Ploughs">Ploughs</option>
                <option value="Portacabin">Portacabin</option>
                <option value="Post Driver">Post Driver</option>
                <option value="Potato Harvesters">Potato Harvesters</option>
                <option value="Power Harrows">Power Harrows</option>
                <option value="Precision Seeders">Precision Seeders</option>
                <option value="Presses">Presses</option>
                <option value="Pump">Pump</option>
                <option value="Pumps and Control">Pumps and Control</option>
                <option value="Rainwater Products">Rainwater Products</option>
                <option value="Rakes">Rakes</option>
                <option value="Refrigeration">Refrigeration</option>
                <option value="Renault">Renault</option>
                <option value="Ride-on mowers">Ride-on mowers</option>
                <option value="Rollers">Rollers</option>
                <option value="Rolls">Rolls</option>
                <option value="Root Trailer">Root Trailer</option>
                <option value="Rotovator">Rotovator</option>
                <option value="Round Balers">Round Balers</option>
                <option value="Seed Drills">Seed Drills</option>
                <option value="Self Propelled Sprayers">Self Propelled Sprayers</option>
                <option value="Sewage Treatment">Sewage Treatment</option>
                <option value="Silage Trailer">Silage Trailer</option>
                <option value="Slurry Tankers">Slurry Tankers</option>
                <option value="Spreaders and Sprayers Attachments">Spreaders and Sprayers Attachments</option>
                <option value="Square Balers">Square Balers</option>
                <option value="Stacking and Loading Equipment">Stacking and Loading Equipment</option>
                <option value="Stone Removal and Crushers">Stone Removal and Crushers</option>
                <option value="Straw Choppers">Straw Choppers</option>
                <option value="Stump Grinders">Stump Grinders</option>
                <option value="Subsoilers">Subsoilers</option>
                <option value="Tanks">Tanks</option>
                <option value="Tedders">Tedders</option>
                <option value="Telehandlers">Telehandlers</option>
                <option value="Tillage Attachments">Tillage Attachments</option>
                <option value="Toppers">Toppers</option>
                <option value="Tractor-Based Excavators">Tractor-Based Excavators</option>
                <option value="Tractor-Based Loaders">Tractor-Based Loaders</option>
                <option value="Tractor Mounted Sprayers">Tractor Mounted Sprayers</option>
                <option value="Tractors">Tractors</option>
                <option value="Trailer Sprayers">Trailer Sprayers</option>
                <option value="Tree Harvesters">Tree Harvesters</option>
                <option value="Truck Trailers">Truck Trailers</option>
                <option value="Tyres">Tyres</option>
                <option value="Vacuum Tanker">Vacuum Tanker</option>
                <option value="Van">Van</option>
                <option value="Verge Mowers">Verge Mowers</option>
                <option value="Weights">Weights</option>
                <option value="Wheels">Wheels</option>
                <option value="Windrowers">Windrowers</option>
                <option value="Wood Chippers">Wood Chippers</option>
                <option value="Yard Scrapers">Yard Scrapers</option>
  <option value="Other">Other</option>
</select>
      <input type="text" id="otherInput1" class="hidden form-control mt-2" placeholder="Other, please specify" style="width: 400px;">

</div>
  </div>
  
  <div class="form-group row">
    <label for="model" class="col-4 col-form-label">Model:</label> 
           <div class="row">
      <div class="col">
      <select id="model" onchange="showTextInput('model', 'otherInput4')"  name="model" class="form-select form-control" style="width: 400px;">
  
  
  				<option value="1056XL">1056XL</option>
                <option value="10T">10T</option>
                <option value="10t grain/silage">10t grain/silage</option>
                <option value="10T Mono">10T Mono</option>
                <option value="11 ton">11 ton</option>
                <option value="1140 CX 30">1140 CX 30</option>
                <option value="12 ton">12 ton</option>
                <option value="1200 F reg">1200 F reg</option>
                <option value="13 ton">13 ton</option>
                <option value="140 Top">140 Top</option>
                <option value="1434C">1434C</option>
                <option value="14ft">14ft</option>
                <option value="155/65 L">155/65 L</option>
                <option value="16 ton">16 ton</option>
                <option value="18 Ton">18 Ton</option>
                <option value="2 Tonne">2 Tonne</option>
                <option value="2004 Opico 6m">2004 Opico 6m</option>
                <option value="2004 Suzuki 250">2004 Suzuki 250</option>
                <option value="2006 8080">2006 8080</option>
                <option value="2009 Einbock 5M">2009 Einbock 5M</option>
                <option value="2012 Lucas Raptor">2012 Lucas Raptor</option>
                <option value="2500 HD">2500 HD</option>
                <option value="2650 F">2650 F</option>
                <option value="268 Hydro">268 Hydro</option>
                <option value="2685 D">2685 D</option>
                <option value="3 Leg Ransome Subsoiler">3 Leg Ransome Subsoiler</option>
                <option value="3.25 Meter">3.25 Meter</option>
                <option value="3010 Diesel">3010 Diesel</option>
                <option value="3018 DRILL">3018 DRILL</option>
                <option value="3075 Autotronic">3075 Autotronic</option>
                <option value="312 Profi">312 Profi</option>
                <option value="312 Profi Plus">312 Profi Plus</option>
                <option value="377 conventional baler">377 conventional baler</option>
                <option value="390 4wd">390 4wd</option>
                <option value="3910 2wd">3910 2wd</option>
                <option value="Other">Other</option>

   </select>
         <input type="text" id="otherInput4" class="hidden form-control mt-2" placeholder="Other, please specify" style="width: 400px;">
    </div>
  </div>
  
  
  <script>
  function showTextInput(selectId, otherInputId) {
    var selectBox = document.getElementById(selectId);
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var otherInput = document.getElementById(otherInputId);

    if (selectedValue === "Other") {
      otherInput.classList.remove("hidden");
    } else {
      otherInput.classList.add("hidden");
    }
  }
</script>


    <br> <br>


    <div class="row">
      <div class="col">






<hr>
<h4>Pricing</h4>

  <form>
    <div class="row">
      <div class="col-lg">
        Enter a price (in GBP)* : <input type="text" id="price" class="form-control" name="price" style="width: 400px;">
      </div>
      <div class="col-lg">
        POA <br><input type="checkbox" id="poa" name="poa" value="poa">
      </div>
      <p class="text-muted pt-2">Tick this box if you would like to hide the price and show Price on Application (POA) instead</p>
    </div>
     <div class="col">
         <label for="cars">Price Instruction:</label>
        <select name="PricingInstructions" id="pricinginstructions" class="form-control" style="width: 400px;">
            <option value="vat">+VAT</option>
            <option value="ovno">OVNO</option>
            <option value="reduced">Price Reduced</option>
            <option value="offers">Offers Considered</option>
            <option value="each">Each</option>
            <option value="vat">Inc VAT</option>
            <option value="novat">No VAT</option>
        </select><br>
      </div>
  
<hr>
<h4 class="pt-4">Listing Description</h4><br>

<label for="text">Advert Title :</label>
<input type="text" id="adtitle" name="adtitle" class="form-control" placeholder="This is the main title of your advert."><br>

<label for="text">Full Description* :</label>
<textarea id="addesc" name="addesc" class="form-control" style="height: 150px;" placeholder="This is the main text of your advert. Do not copy and paste from other websites; this needs to be unique for search engines to help people find your advert."
></textarea>

<label for="text">Advert keywords :</label>
<input type="text" id="adref" name="adref" class="form-control" placeholder="Enter commer seperated keywords eg Ford, Tractor"><br><br>


<form action="#" method="get">
    <label for="year">Select a Year:</label>
    <select id="year" name="year" class="form-control" style="width: 400px;">
      <!-- You can customize the range of years as needed -->
      <?php
      $currentYear = date("Y");
      $startYear = 1900; // Change this to your desired start year
      for ($year = $currentYear; $year >= $startYear; $year--) {
        echo "<option value=\"$year\">$year</option>";
      }
      ?>
    </select>
  </form>
<br>


     <div class="col">
         <label for="condition">Condition</label>
        <select name="condition" id="condition" class="form-control" style="width: 400px;">
            <option value="new">New</option>
            <option value="used">Used</option>
            <option value="nearly new">Nearly new</option>
            <option value="nearly new">Spares or repair</option>
         </select><br>
      </div>


<script>
    // Call toggleMessageDiv initially to display the default message for Package 1
    toggleMessageDiv();

    function toggleMessageDiv() {
        var selectedValue = document.getElementById("plan").value;
         var youtubeDiv = document.getElementById("youtube");

        if (selectedValue === "1") {
            
            youtubeDiv.style.display = "none"; // Hide the #youtube div
        } else if (selectedValue === "2") {
            
             youtubeDiv.style.display = "block"; // Hide the #youtube div
        } else if (selectedValue === "3") {
           
             youtubeDiv.style.display = "block"; // Hide the #youtube div
        } else {
            messageDiv.innerHTML = ""; // Clear the message when no package is selected
        }
    }
</script>


<script>
    // Call toggleMessageDiv initially to display the default message for Package 1
    toggleMessageDiv();

    function toggleMessageDiv() {
        var selectedValue = document.getElementById("plan").value;
        var messageDiv = document.getElementById("message");
        var youtubeDiv = document.getElementById("youtube");

        if (selectedValue === "1") {
            messageDiv.innerHTML = "This package includes a private listing in the next edition of Farm Machinery.";
            youtubeDiv.style.display = "none"; // Hide the #youtube div
        } else if (selectedValue === "2") {
            messageDiv.innerHTML = "This package includes an online listing that will go live immediately.";
            youtubeDiv.style.display = "block"; // Hide the #youtube div
        } else if (selectedValue === "3") {
            messageDiv.innerHTML = "This package includes a Farm Machinery and Agricultural Trader print advert.";
            youtubeDiv.style.display = "block"; // Show the #youtube div
        } else {
            messageDiv.innerHTML = ""; // Clear the message when no package is selected
            youtubeDiv.style.display = "none"; // Hide the #youtube div
        }
    }
</script>

<div id="youtube">
<label for="text">Add a YouTube video to your listing:</label>
<input type="textarea" id="yt" name="yt" class="form-control" placeholder="Paste video URL e.g https://youtu.be/0cgzkh6N6hk?si=dlXsJt_7Es-XoXqh"><br><br>
</div>

<h4>Photos</h4>
<hr>

<form action="/upload" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <!-- Input for the first image -->
        <label for="image1">Featured (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image1" id="image1" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Input for the second image -->
        <label for="image2">Image 2 (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image2" id="image2" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Input for the third image -->
        <label for="image3">Image 3 (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image3" id="image3" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Input for the fourth image -->
        <label for="image4">Image 4 (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image4" id="image4" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Input for the fifth image -->
        <label for="image5">Image 5 (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image5" id="image5" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Input for the sixth image -->
        <label for="image6">Image 6 (PNG, JPEG, HEIC, max 4MB):</label>
        <input type="file" name="image6" id="image6" accept=".png, .jpg, .jpeg, .heic" required>
        <br><br>

        <!-- Submit button -->
        <button type="submit" class="form-control" style="width: 200px;">Upload Images</button>
    </form>

    <script>
        function validateForm() {
            var fileInputs = document.querySelectorAll('input[type="file"]');
            for (var i = 0; i < fileInputs.length; i++) {
                var fileInput = fileInputs[i];
                var fileSize = fileInput.files[0]?.size || 0; // Check if a file is selected
                var fileType = fileInput.value.split('.').pop().toLowerCase();

                if (fileSize > 4 * 1024 * 1024) {
                    alert('File size should not exceed 4MB.');
                    return false;
                }

                if (!['png', 'jpg', 'jpeg', 'heic'].includes(fileType)) {
                    alert('Allowed file formats are PNG, JPEG, and HEIC.');
                    return false;
                }
            }
            return true;
        }
    </script>




<br>        

    <div class="col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit listing</button>

    </div>
  </div>

    </div>

  </div>

</div>
</div><hr>

                        




</div>


<br>


</div><hr>
                
<div class="container">
  <div class="row align-items-start">
    
    
    

  </div>
</div>


<br>
                
  
        </div>
     </div>
                
</div>
        </div>
     </div>
         
                </div>
            </div>
        </div>
     </div>
</div>

<div class="row">


  </div>
</div>
        
</div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
