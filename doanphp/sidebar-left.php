<div class="panel panel-success">
    <div class="panel-heading color-panel-heading">Danh mục </div>
    <div class="panel-body menu-left">
        <ul>
            <li><a href="product.php?idCat=1">Váy dự tiệc</a></li>
            <li><a href="product.php?idCat=2">Đầm công sở</a></li>
            <li><a href="product.php?idCat=3">Đầm dạo phố</a></li>
            <li><a href="#">Đầm len</a></li>
            <li><a href="#">Chân váy</a></li>
            <li><a href="#">Áo sơ mi nữ</a></li> 
            <li><a href="product.php?idCat=5">Áo khoác</a></li> 
            <li><a href="product.php?idCat=4">Bộ đồ thể thao</a></li> 
            <li><a href="#">Đồ bay</a></li>

        </ul>

    </div>
    <div class ="panel-footer"> </div>
</div><!--  panel-success -->
<div class="panel panel-success">
    <div class="panel-heading color-panel-heading">Tìm kiếm sản phẩm</div>
       <form action="searchKeyword.php" method ="POST">
    <div class="panel-body menu-left">
     
            <ul>
                <li> 
                    <a href= "#">
                        Hot nhất 
                    </a>
                </li>
                <li>
                    <a href="#">
                        Mới nhất
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#searchPrice">		     		
                   Theo giá 
                </li>
                <li id ="searchPrice"  class="search-price collapse" >
                  
                    <input type="number" name="searchLowPrice" min= "20"  value="100000" placeholder = "20"/>
                        <span>~</span>
                        <input type="number" name="searchHightPrice" min = "50" value="200000" placeholder = "50"/>
                  
                </li>
<!--                <li data-toggle = "collapse" data-target = "#searchName">
                    Theo tên 
                </li>-->
<!--                <li id = "searchName" class = "search-name collapse">
                    <input type= "text" name = "searchName" placeholder = "Vay du tiec"/>

                </li>-->
                <li>
                    <button class="button-search" name="search_sidebar">
                        <span class = "glyphicon glyphicon-search">
                        </span>
                    </button>
                </li>
            </ul>
       

    </div>
   </form>
    <div class ="panel-footer"> </div>
</div><!--  panel-success -->