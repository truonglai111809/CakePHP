<meta charset="utf-8">
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../data/connect.php';
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fImages"]["name"]);
$uploadOk = 1;

if (isset($_POST['addProduct'])) {
    $sizeSPr = 0;
    $sizeMPr = 0;
    $sizeLPr = 0;
    $redPr = 0;
    $whitePr = 0;
    $blackPr = 0;
    $purplePr = 0;
    $pinkPr = 0;
    $greenPr = 0;
    //  $salePricePr = 0;
    $keywordPr = '';
    $descriptPr = '';
    $status = 0;
    $image = basename($_FILES["fImages"]["name"]);
    if ($image == null || $image = '') {
//        $image = $_POST['image'];
        $image = '';
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["fImages"]["tmp_name"]);
        if ($check !== false) {
            $image = basename($_FILES["fImages"]["name"]);

            $uploadOk = 1;
        } else {
            $image = '';
            ?>

            <script type="text/javascript">
                window.location = 'product-add.php?noimage=notimage';
            </script>
            <?php
            $uploadOk = 0;
        }
    }


    //Upload image
    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fImages"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fImages"]["name"]) . " has been uploaded.";
        } else {
//            echo "Sorry, there was an error uploading your file.";
        }
    }
    if (isset($_POST['txtName'])) {
        $namePr = $_POST['txtName'];
    }
    if (isset($_POST['category'])) {
        $categoryPr = $_POST['category'];
    }
    if (isset($_POST['material'])) {
        $marterialPr = $_POST['material'];
    }
    if (isset($_POST['txtPrice'])) {
        $pricePr = $_POST['txtPrice'];
    }

    if (isset($_POST['txtSalePrice'])) {
        $salePricePr = $_POST['txtSalePrice'];
    } else {
        $salePricePr = 0;
    }
    if (isset($_POST['sizeS'])) {
        $sizeSPr = 1;
    }

    if (isset($_POST['sizeM'])) {
        $sizeMPr = 1;
    }
    if (isset($_POST['sizeL'])) {
        $sizeLPr = 1;
    }

    if (isset($_POST['red'])) {
        $redPr = 1;
    }
    if (isset($_POST['white'])) {
        $whitePr = 1;
    }
    if (isset($_POST['black'])) {
        $blackPr = 1;
    }
    if (isset($_POST['purple'])) {
        $purplePr = 1;
    }
    if (isset($_POST['pink'])) {
        $pinkPr = 1;
    }
    if (isset($_POST['green'])) {
        $greenPr = 1;
    }
    if (isset($_POST['txtNumber'])) {
        $quantityPr = $_POST['txtNumber'];
    }
    if (isset($_POST['txtKeyword'])) {
        $keywordPr = $_POST['txtKeyword'];
    } if (isset($_POST['txtDescript'])) {
        $descriptPr = $_POST['txtDescript'];
    }
    if (isset($_POST['status'])) {
        $status = $_POST['status'];
    }



    $sql = "insert into products(name, category_id, image, description, price, saleprice, created, quantity,sizeS, sizeM,sizeL, red, white, black, purple, pink, green, keyword, status) 
values('$namePr', $categoryPr, '$image', '$descriptPr', $pricePr, $salePricePr, now(), $quantityPr, $sizeSPr, $sizeMPr, $sizeLPr, $redPr, $whitePr, $blackPr, $purplePr,$pinkPr, $greenPr, '$keywordPr', $status);";
    echo $sql;

    $res = mysql_query($sql);
    if($res) {
        header("location: product-list.php");
    }
}
else {
    echo 'error';
}
?>