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
                        <option data-image="asset/image/product2.jpg" >Christmas Island</option>
                        <option data-image="asset/image/product2.jpg" >South Sudan</option>
                        <option data-image="asset/image/product2.jpg" >Jamaica</option>
                        <option data-image="asset/image/product2.jpg" >Kenya</option>
                        <option data-image="asset/image/product2.jpg" >French Guiana</option>
                        <option data-image="asset/image/product2.jpg" >Mayotta</option>
                        <option data-image="asset/image/product2.jpg" >Liechtenstein</option>
                        <option data-image="asset/image/product2.jpg" >Denmark</option>
                        <option data-image="asset/image/product2.jpg" >Eritrea</option>
                        <option data-image="asset/image/product2.jpg" >Gibraltar</option>
                        <option data-image="asset/image/product2.jpg" >Saint Helena, Ascension and Tristan da Cunha</option>
                        <option data-image="asset/image/product2.jpg" >Haiti</option>
                        <option data-image="asset/image/product2.jpg" >Namibia</option>
                        <option data-image="asset/image/product2.jpg" >South Georgia and the South Sandwich Islands</option>
                        <option data-image="asset/image/product2.jpg" >Vietnam</option>
                        <option data-image="asset/image/product2.jpg" >Yemen</option>
                        <option data-image="asset/image/product2.jpg" >Philippines</option>
                        <option data-image="asset/image/product2.jpg" >Benin</option>
                        <option data-image="asset/image/product2.jpg" >Czech Republic</option>
                        <option data-image="asset/image/product2.jpg" >Russia</option>
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
        <b>&copy; 2024 Your Company </b> <br> <a href="javascript:;" onclick="popup('group');">group</a> | <a href="javascript:;" onclick="popup('list');" >list</a>
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

            var img_list = "";
            <?php for($i=0; $i<12; $i++){ ?>
                img_list += "<span ><img src='asset/image/product1.jpg' alt='Product 1' style='width: 160px; height: 160px; padding:3px;'></span>";
            <?php } ?>

            var html = "<div class='row'>"+
                            "<div class='col-md-6' style='text-align:center;'><img src='asset/image/product1.jpg' alt='Product 1' style='width: 500px; height: 500px;'></div>"+
                            "<div class='col-md-6' style='text-align:center;'>"+
                                "<table class='table table-bordered'>"+
                                    "<tbody>"+
                                        // list
                                        "<tr>"+
                                            "<th class='table-dark' colspan='2'> ID : 1 </th>"+
                                            "<th class='table-dark' colspan='2'> จำนวน 12 เกม </th>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<th class='table-info' colspan='2'> Primay </th>"+
                                            "<th class='table-warning' colspan='2'> Non-Primary </th>"+
                                        "</tr>"+
                                        //price rate
                                        "<tr>"+
                                            "<td>7 วัน </td>"+
                                            "<td> 200 </td>"+
                                            "<td>7 วัน </td>"+
                                            "<td> 100 </td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>15 วัน </td>"+
                                            "<td> 300 </td>"+
                                            "<td>15 วัน </td>"+
                                            "<td> 200 </td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>30 วัน </td>"+
                                            "<td> 400 </td>"+
                                            "<td>30 วัน </td>"+
                                            "<td> 300 </td>"+
                                        "</tr>"+
                                        // status
                                        "<tr>"+
                                            "<td>สถานะ</td>"+
                                            "<td class='table-danger'> ติดเช่า </td>"+
                                            "<td>สถานะ</td>"+
                                            "<td class='table-success'> ว่าง </td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>เช่าถึง</td>"+
                                            "<td> 20/07/2024 </td>"+
                                            "<td>เช่าถึง</td>"+
                                            "<td> </td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>คงเหลือ</td>"+
                                            "<td> 13 วัน </td>"+
                                            "<td>คงเหลือ</td>"+
                                            "<td> </td>"+
                                        "</tr>"+
                                    "</tbody>"+
                                "</table>"+
                            "</div>"+
                            // img
                            "<div class='col-md-12' style='text-align:center;'>"+
                            "<hr>"+
                                img_list +
                            "</div>"+
                       "</div>";

            bootbox.dialog({
                    title: 'A custom dialog with buttons and callbacks',
                    message: html,
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


            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                var baseUrl = state.element.dataset.image;
                var $state = $(
                    '<span><img src="' + baseUrl + '" class="img-flag" style="width: 50px; height: 50px;" /> ' + state.text + '</span>'
                );
                return $state;
            }
        
            $( '#searchInput' ).select2( {
                templateResult: formatState,
                templateSelection: formatState,
                width: '100%',
            } );


    </script>
    </script>

</body>
</html>
