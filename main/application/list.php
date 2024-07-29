<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/main/styles.css">
    <link rel="stylesheet" href="asset/css/bootstrap/5.3.3/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/select2/4.0.13/select2.min.css">
    <link rel="stylesheet" href="asset/css/select2/theme-1.3.0/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="asset/css/select2/theme-1.3.0/select2-bootstrap-5-theme.rtl.min.css" />
</head>
<body>
    <header>
        <h1>Product Listing</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
      <!-- Search Bar -->
        <div class="row mt-4 search-bar">
            <div class="col-md-2">
                <select id="categorySelect" class="form-select">
                    <option value="">ทั้งหมด</option>
                    <option value="even">ว่าง Primary</option>
                    <option value="odd">ว่าง Non Primary</option>
                </select>
            </div>
            <div class="col-md-8">
                    <select id="searchInput" class="form-select" data-placeholder="Search for products..." multiple>
                        <option>Christmas Island</option>
                        <option>South Sudan</option>
                        <option>Jamaica</option>
                        <option>Kenya</option>
                        <option>French Guiana</option>
                        <option>Mayotta</option>
                        <option>Liechtenstein</option>
                        <option>Denmark</option>
                        <option>Eritrea</option>
                        <option>Gibraltar</option>
                        <option>Saint Helena, Ascension and Tristan da Cunha</option>
                        <option>Haiti</option>
                        <option>Namibia</option>
                        <option>South Georgia and the South Sandwich Islands</option>
                        <option>Vietnam</option>
                        <option>Yemen</option>
                        <option>Philippines</option>
                        <option>Benin</option>
                        <option>Czech Republic</option>
                        <option>Russia</option>
                    </select>
            </div>
            <div class="col-md-2">
                <button id="searchButton"  class="add-to-cart">Search</button>
            </div>
        </div>

        <div class="product-container">
            <?php  for($i=0; $i<12; $i++){ 

                if($i % 2 == 0){
                    echo "<div class='product-card'>
                        <img src='asset/image/product1.jpg' alt='Product 1'>
                        <h2>Product ".$i."</h2>
                        <p class='price'>$".$i."0.00</p>
                        <p class='description'>This is a great product.</p>
                        <button class='add-to-cart'>รายละเอียด</button>
                      </div>";
                }else{
                    echo "<div class='product-card'>
                        <img src='asset/image/product2.jpg' alt='Product 1'>
                        <h2>Product ".$i."</h2>
                        <p class='price'>$".$i."0.00</p>
                        <p class='description'>This is a great product.</p>
                        <button class='add-to-cart'>รายละเอียด</button>
                      </div>";
                }
            } ?>
            <!-- Add more product-cards as needed -->
        </div>

    <footer>
        <b>&copy; 2024 Your Company </b> <br> <a href="javascript:;" onclick="popup();">group</a> | <a href="javascript:;" onclick="popup();" >list</a>
    </footer>
    
    <!-- JS Script -->
    <script src="asset/js/bootstrap/5.3.3/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery/3.7.1/jquery.min.js"></script>
    <script src="asset/js/popper/popper.js"></script>
    <script src="asset/js/select2/4.0.13/select2.full.min.js"></script>
    <!-- bootbox code -->
    <script src="asset/js/bootbox/bootbox.min.js"></script>
    <script src="asset/js/bootbox/bootbox.all.min.js"></script>
    <script>

        function popup(type){
            bootbox.prompt('What is your Codename?',
                              function(result) {
                                    if(type=="group"){
                                        window.location.assign("group.php")
                                    }else{
                                        window.location.assign("list.php")
                                    }
                              });
        };

        $('.product-card').on("click", function(){
            bootbox.dialog({
                                title: 'A custom dialog with buttons and callbacks',
                                message: "<p>This dialog has buttons. Each button has it's own callback function.</p>",
                                size: 'xl',
                                buttons: {
                                cancel: {
                                label: "Cancel",
                                className: 'btn-danger',
                                callback: function(){
                                console.log('Custom cancel clicked');
                                }
                                },
                                confirm: {
                                label: "Confirm",
                                className: 'btn-info',
                                callback: function() {
                                console.log('Custom OK clicked');
                                }
                                }
                                }
                                });
        });

        $( '#searchInput' ).select2( {
            width: '100%',
        } );

    </script>
    </script>

</body>
</html>
