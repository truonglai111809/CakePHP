<?php
$href = '';

?>
<link href = "http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src = "http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

<!-- LINK CUSTOM -->
<link rel="stylesheet" type="text/css" href="<?php echo $href ?>css/jquery.multiselect.css" />
<script type="text/javascript" src="<?php echo $href ?>js/jquery.multiselect.js"></script>
<link rel="stylesheet" type="text/css" href = "<?php echo $href ?>css/style.css"/>
<script type="text/javascript">

    $(function () {
        $("#selectLoc").multiselect();
        $("#selectImpor").multiselect();
        $("#selectAge").multiselect();
        $("#selectCat").multiselect();
        $("#selectType").multiselect();
    });
</script>

<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        
        <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

        <label>Danh mục sản phẩm</label>
        <select size="6" multiple="multiple"  class="inp" name="selectArea[]" id="selectLoc" class="ui-autocomplete-input">

            <option value="1"> Hokkaidō</option>
            <option value="2">Saitama</option>
            <option value="3">Tokyo</option>
            <option value="4">Nagoya</option>
            <option value="5">Mie</option>
            <option value="6">Osaka</option>


        </select>
    </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <label>Màu sắc</label>
        <select size="7" multiple="multiple" class="inp" name="selectCat[]" id="selectCat" class="ui-autocomplete-input"> 
            <!-- Category -->
            <option value="oil">Massage oil</option>
            <option value="reflexology">Reflexology</option>
            <option value="body">Body</option>
            <option value="maid">Maid</option>
            <option value="asian">Asian</option>
            <option value="earpick">Earpick</option>
            <option value="other">Other</option>
        </select>
  </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <label>Kích thước</label>
        <select size="3" multiple="multiple" name="selectType[]" id="selectType">

            <option value="1">Type1</option>
            <option value="2">Type 2</option>
            <option value="3">Type 3</option>
        </select>
      </div>
        <!-- AGE -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
              <label>Từ khóa</label>
       
           <input type="text" name="keyword"  class ="form-control" id="keyword" placeholder="Free keyword" />
              </div>
          </div>

  
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
           <button class="btn-search" type="submit" name="search" value="SEARCH">SEARCH</button>
    </div>


  </div>




