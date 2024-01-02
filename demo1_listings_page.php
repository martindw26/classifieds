<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified Ads</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all">
    <link rel="stylesheet" href="https://klsy.dev/Kelsey_classifieds/CSS/style.css">
    
    <style>
.checkbox-container {
  display: inline-block;
  margin-right: 15px; /* Adjust the margin as needed */
}


    </style>
    
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md p-1 d-flex align-items-center justify-content-between">
            <!-- Buttons -->
            <div class="btn-group">
                <button class="btn btn-success me-2" type="submit" style="width:200px;">Post an advert</button>
                <button class="btn btn-success" type="submit" style="width:200px;">My account</button>
            </div>

            <!-- Share Icons -->
            <div class="share-icons">
                <h4 style="margin-right:10px;">Share this:</h4>
                <i class="fab fa-facebook-f fa-1x" style="color: #3b5998;"></i>
                <i class="fab fa-twitter fa-1x" style="color: #55acee; margin-left:10px;"></i>
                <i class="fab fa-instagram fa-1x" style="color: #ac2bac; margin-left:10px;"></i>
                <i class="fab fa-linkedin-in fa-1x" style="color: #0082ca; margin-left:10px;"></i>
                <i class="fab fa-youtube fa-1x" style="color: #ed302f; margin-left:10px;"></i>
                <i class="fab fa-whatsapp fa-1x" style="color: #25d366; margin-left:10px;"></i>
            </div>
        </div>
    </div>
    <br>
    
    
<h4>Refine your search</h4>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-none" style="border: 1px solid #d3d3d354;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
     <div class="navbar-nav">
     
     
     <div class="container" style="width:300px;">
    <div class="row mb-3 p-0">
        <div class="col">

  <li class="nav-item me-2 mb-2 mb-lg-0" style="border-right: 1px solid #d3d3d354; padding:8px;">
  <h6> Category select </h6>
    <select class="form-control" aria-label="Select Category" style="font-weight:200;">
      <option selected>Categories</option>
      <option value="category1">Category 1</option>
      <option value="category2">Category 2</option>
      <option value="category3">Category 3</option>
    </select>
  </li>
        </div>
    </div>

    <div class="row">
        <div class="col">
 <li class="nav-item me-2 mb-2 mb-lg-0" style="border-right: 1px solid #d3d3d354; padding:8px;">
       <h6> Brand select </h6>
   <select class="form-control" aria-label="Select Brand" style="font-weight:200">
     <option selected>Brands</option>
     <option value="brand1">Brand 1</option>
     <option value="brand2">Brand 2</option>
     <option value="brand3">Brand 3</option>
   </select>
 </li>
        </div>
    </div>
</div>
     
     
    <!-- Category Select -->
<div class="container" style="width:300px;">
    <div class="row mb-3 p-0">
        <div class="col">
            <h6>Keyword search</h6>
            <input type="text" class="form-control" placeholder="e.g Massey Ferguson" >
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h6>Location search</h6>
            <input type="text" class="form-control" placeholder="e.g Kent">
        </div>
    </div>
</div>



<div class="container" style="width:200px;">
<div class="col-md me-2 border-end pe-3">
  <h6>Select seller type</h6>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="allCheckbox" value="all" checked>
    <label class="form-check-label" for="allCheckbox">All</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="privateCheckbox" value="private">
    <label class="form-check-label" for="privateCheckbox">Private</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="dealerCheckbox" value="dealer">
    <label class="form-check-label" for="dealerCheckbox">Dealer</label>
  </div>
</div>
</div>


        
<div class="container" style="width:400px;">
        <h6> Choose price range </h6>
 <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label for="rangeSlider" class="form-label">Select a range:</label>
        <input type="range" class="form-range" id="rangeSlider" min="0" max="100" value="0">
      </div>
      <hr class="d-md-none">
    </div>
     <div class="col-md-6">
      <div class="mb-3">
        <label for="priceRange" class="form-label">Price Range:</label>
        <output class="form-control" for="rangeSlider" id="priceRange">£0.00 - £5,000</output>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const rangeSlider = document.getElementById('rangeSlider');
    const priceRange = document.getElementById('priceRange');

    rangeSlider.addEventListener('input', updateRange);

    function updateRange(event) {
      const value = event.target.value;

      const minPrice = 0;
      const maxPrice = 5000;
      const step = (maxPrice - minPrice) / 100;
      const lowerBound = formatCurrency(minPrice + step * value);
      const upperBound = formatCurrency(minPrice + step * rangeSlider.max);
      priceRange.value = `£${lowerBound} - £${upperBound}`;
    }

    function formatCurrency(amount) {
      return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }
  });
</script>


         
         </li>
      </ul>
    </div>

</nav>

<!-- Include the Bootstrap JS library -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Update slider labels and current price dynamically based on slider value
  var priceRange = document.getElementById('priceRange');
  var minLabel = document.getElementById('minLabel');
  var maxLabel = document.getElementById('maxLabel');
  var currentPrice = document.getElementById('currentPrice');

  priceRange.addEventListener('input', function() {
    var formattedValue = formatCurrency(this.value);
    minLabel.textContent = formatCurrency(this.min);
    maxLabel.textContent = formatCurrency(this.max);
    currentPrice.textContent = 'Current Price:\n' + formattedValue;
  });

  // Function to format currency (customize as needed)
  function formatCurrency(value) {
    var formattedValue = Number(value).toLocaleString('en-GB', { style: 'currency', currency: 'GBP' });
    return formattedValue.replace(".00", ""); // Remove cents if .00
  }
</script>


<br>


  <div class="row">
    <div class="col-md-4">
  <div class="card bottom-card" style="border: 5px solid orange; position: relative;">
        <div style="position: absolute; top: 5px; left: 5px; z-index: 1; background-color: orange; color: #ffffff; padding: 5px; color:black; border-radius:5px;">Featured</div>
                        <img src="https://klsy.dev/Kelsey_classifieds/without_flash/Smallholder AGM ST2030 - without flash.png" class="card-img-top rounded-right rounded-left" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Grey Ferguson</h5>
                                                        <p class="card-text">&#163;1,150</p><p class="text-muted p-0">Private listing</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>


    </div>
    <div class="col-md-4">
  <div class="card bottom-card" style="border: 5px solid orange; position: relative;">
        <div style="position: absolute; top: 5px; left: 5px; z-index: 1; background-color: orange; color: #ffffff; padding: 5px; color:black; border-radius:5px;">Featured</div>
                        <img src="https://klsy.dev/Kelsey_classifieds/without_flash/Iseki 2160 compact tractor - without flash.png" class="card-img-top rounded-right" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Iseki 2160 compact tractor</h5>
                                                        <p class="card-text">&#163;1,150</p><p class="text-muted p-0">Private listing</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>

    </div>
    <div class="col-md-4">  <div class="card bottom-card" style="border: 5px solid orange; position: relative;">
        <div style="position: absolute; top: 5px; left: 5px; z-index: 1; background-color: orange; color: #ffffff; padding: 5px; color:black; border-radius:5px;">Featured</div>
                        <img src="https://klsy.dev/Kelsey_classifieds/without_flash/Smallholder AGM ST2030 - without flash.png" class="card-img-top rounded-right" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Smallholder AGM ST2030</h5>
                                                        <p class="card-text">&#163;7,250</p><p class="text-muted p-0">Dealer listing</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
  </div>
  <div class="row">
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2023/01/MF-240.jpg-eb682c4718de02e34ad5aab6acee46fc-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">
Massey Ferguson 240</h5>
                                                        <p class="card-text">&#163;1,150</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2023/01/Ford-3910.jpg-dbe8c1b9585480fe1f4ebab9931aad97-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Ford 3910 Series II</h5>
                                                        <p class="card-text">&#163;21,750</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2022/08/IMG_8030.jpg-da10a21c9479c78e1e2300d061cceff8-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">2019 Valtra N154 165HP</h5>
                                                        <p class="card-text">&#163;63,750</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
  </div>
  <div class="row">
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2022/07/5.jpg-69d5a334360e44e3f2e14c0511792f4f-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">John Deere 6250R</h5>
                                                        <p class="card-text">&#163;129,950</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2022/06/1.jpg-82b546589d0c34e2dc5b1ad7ce0235c4-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">
Massey Ferguson 7718SEXD6</h5>
                                                        <p class="card-text">&#163;1,150</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
    <div class="col-md-4"> <div class="card bottom-card">
                        <img src="https://www.farmmachinery.co.uk/wp-content/uploads/2022/06/8.jpg-023f2d72b7b5fda3babb78431a01ea93-400x320.jpg" class="card-img-top" alt="Bottom Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Fendt 828 Tractor</h5>
                                                        <p class="card-text">&#163;110,000</p>
                            <button type="button" class="btn btn-success">View listing</button>
                        </div>
                    </div>
</div>
  </div>
 
 

</div><br>

<div class="d-flex justify-content-center">
<button type="button" class="btn btn-success">Load more listings</button>
</div>
      
<br><hr>          
               
                
                

               
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
