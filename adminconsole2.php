<?php
session_start();


if (isset($_GET["logout"])) {
    $_SESSION = [];
    session_destroy();
    header("Location: adminconsole.php");
    exit;
}


if (isset($_POST["admin_pass"])) {
    if (hash_equals($ADMIN_PASSWORD, $_POST["admin_pass"])) {
        $_SESSION["is_admin"] = true;

        header("Location: adminconsole.php");
        exit;
    } else {
        $error = "Wrong password.";
    }
}

if (empty($_SESSION["is_admin"])) {
    ?>
    <!doctype html>
    <html>
    <head>
        <link rel="stylesheet" href="adminconsolestyles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Admin Login</title>
      <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        .box { max-width: 360px; margin: 0 auto; }
        input, button { width: 100%; padding: 12px; margin-top: 10px; }
      </style>
    </head>
    <body>
      <div class="box">
        <h2 class="ad_log_heading" id="ad_log_heading_alt">Admin Console</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>".htmlspecialchars($error)."</p>"; ?>
        <form method="POST">
          <input class="login_in" id="login_in_alt" type="password" name="admin_pass" placeholder="Password" autofocus required>
          <button class="login_but" id="login_but_alt" type="submit">Login</button>
        </form>
      </div>
    </body>
    </html>
    <?php
    exit;
}
?>

<?php
$file = "listingsframe.html";


if (isset($_POST["delete_listing"], $_POST["delete_id"])) {
    $deleteId = $_POST["delete_id"];
    $html = file_get_contents($file);


    $imgPath = "";
    if (preg_match("/<!--LISTING_START " . preg_quote($deleteId, "/") . "-->.*?<img[^>]+src='([^']+)'/s", $html, $m)) {
        $imgPath = $m[1];
    }

    $pattern = "/<!--LISTING_START " . preg_quote($deleteId, "/") . "-->.*?<!--LISTING_END " . preg_quote($deleteId, "/") . "-->\\s*/s";
    $newHtml = preg_replace($pattern, "", $html, 1);

    file_put_contents($file, $newHtml);

    if ($imgPath && str_starts_with($imgPath, "uploads/") && file_exists($imgPath)) {
        unlink($imgPath);
    }

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

$html = file_get_contents($file);

preg_match_all(
    "/<!--LISTING_START ([^-]+)-->.*?<span class='listingmodel'>(.*?)<\/span>.*?<!--LISTING_END \\1-->/s",
    $html,
    $matches,
    PREG_SET_ORDER
);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN CONSOLE</title>
        <link rel="stylesheet" href="adminconsolestyles.css">
        <script src="rrmmichaelactions.js"></script>
    </head>
<body class="con_bod">
    <br>
        <br>
            <br>
<h3 class="admin_con_heading">ADMIN CONSOLE</h3>
<br>
    <p class="console_time" id="console_time_alt"></p>
<div class="option_selection_container" id="option_selection_container_alt">
    <button class="calbutt" id="calbutt_alt" onclick="showcal()">create a listing</button>
    <br>
        <br>
    <button class="caabutt" id="caabutt_alt" onclick="showcaa()">create an announcement</button>
    <br>
        <br>
    <button class="caldeletebutt" id="caldeletebutt_alt" onclick="showdal()">delete a listing</button>
    <br>
        <br>
    <a class="formsp_link" id="formsp_link_alt" href="https://formspree.io/login">Go to formspree.io</a>
</div>
<br>
    <br>
<div class="create_a_listing_container" id="create_a_listing_container_alt">
    <button class="cal_backb" id="cal_backb_alt" onclick="hidecal()">Back</button>
    <br>
        <br>
            <br>
                <br>
                    <br>
    <div class="cal_contect_main_container" id="cal_contect_main_container">
        <form action="" method="POST" enctype="multipart/form-data">
            <br>
                <br>
            <div class="picture_prev_contianer" id="picture_prev_contianer_alt" name="picturecontainer"></div>
            <input class="uploadpic_butt" id="uploadpic_butt_alt" type="file" name="importfile" accept="image/*">
            <br>
                <br>
                <div class="v_make_and_mod_container" id="v_make_and_mod_container_alt">
                    <label class="make_and_mod_lab" id="make_and_mod_lab_alt">Vehicle Make and Model:</label>
                    <br>
                    <input type="text" class="m_and_v_box" id="m_and_v_box_alt" name="makeandmod">
                    <br>
                        <br>
                    <div class="v_price_container" id="v_price_container_alt">
                        <label class="make_and_mod_price_lab" id="make_and_mod_price_lab_alt">Price:</label>
                        <br>
                        <input class="price_listing_selection" id="price_listing_selection_alt" name="priceveh">
                        <br>
                            <br>
                    </div>
                </div>
                <br>
                    <br>
                    <div class="milage_main_container" id="milage_main_container_alt">
                        <label class="milage_lab" id="milage_lab_alt">Mileage:</label>
                        <br>
                        <input class="milage_listing_input_box" id="milage_listing_input_box_alt" name="mileage">
                    </div>
                    <br>
                        <br>
                 <div class="cal_desc_container" id="cal_desc_container_alt">
                    <label class="desc_lab" id="desc_lab_alt">Description</label>
                    <br>
                    <textarea class="cal_desc_input_box" id="cal_desc_input_box_alt" name="listingdescription"></textarea>
                    </div>
                <br>
                <input type="submit" class="cal_sub_button" id="cal_sub_button_alt" name="Submittwo" value="Submit">
        </form>
    </div>
</div>



<div class="caa_outermain_container" id="caa_outermain_container_alt">
    <button class="cal_backb" id="cal_backb_alt" onclick="hidecal()">Back</button>
     <br>
        <br>
            <br>
                <br>
                    <br>
    <form action="" method="POST">
    <div class="subject_main_container" id="subject_main_container_alt">
    <label class="subject_lab" id="subject_lab_alt">Subject:</label>
    <br>
    <input type="text" class="caa_input_sub_box" id="caa_input_sub_box_alt" name="Subject">
    </div>
    <br>
        <br>
    <div class="message_main_container" id="message_main_container_alt">
        <label class="mess_lab" id="mess_lab_alt">Message:</label>
        <br>
        <textarea class="caa_message_box" id="caa_message_box_alt" name="caamessage"></textarea>
        <br>
        <input type="submit" class="caa_sub_butt" id="caa_sub_butt_alt" name="Submit" value="Submit">
    </div>
    </form>
</div>

<div class="dal_main_container" id="dal_main_container_alt">
    <button class="dal_back_butt" id="dal_back_butt_alt" onclick="hidedal()">Back</button>
    <h3 class="choose_listing_heading" id="choose_listing_heading_alt">Choose a Listing</h3>
<?php if (empty($matches)): ?>
    <br>
    <br>
    <br>
  <p class="dal_nolifound" id="dal_nolifound_alt">No listings found.</p>
<?php else: ?>
  <?php foreach ($matches as $m): 
      $id = trim($m[1]);
      $title = strip_tags($m[2]);
  ?>
  <form method="POST" class="form_outer_container" id="form_outer_container-alt">
    <div>
      <strong class="dal_listing_title" id="dal_listing_title_alt"><?php echo htmlspecialchars($title); ?></strong>
      <br>
        <br>
      <div class="dal_id_numb" id="dal_id_numb_alt">
        ID: <?php echo htmlspecialchars($id); ?>
      </div>
        <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($id); ?>">
        <br>
            <br>
        <button class="del_dal_button" id="del_dal_button_alt" type="submit" name="delete_listing">Delete</button>
      </form>
    </div>
    <br>
        <br>
  <?php endforeach; ?>
<?php endif; ?>
</div>
    </body>
</html>



<script>
const imageInput = document.getElementById("uploadpic_butt_alt");
const imagePreview = document.getElementById("picture_prev_contianer_alt");

imageInput.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
        const img = document.createElement("img");
        img.src = URL.createObjectURL(file);

        imagePreview.innerHTML = "";
        imagePreview.appendChild(img);
    }
});
</script>

<?php

   if (isset($_POST["Submittwo"])) {
    
    $listingId = uniqid("listing_", true);
    $carmodel  = $_POST["makeandmod"];
    $priceport = $_POST["priceveh"];
    $descriptionport = $_POST["listingdescription"];
    $mileageport = $_POST["mileage"];

    $imagePath = "";

if (isset($_FILES["importfile"]) && $_FILES["importfile"]["error"] === 0) {

    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $tmpName = $_FILES["importfile"]["tmp_name"];

    $ext = strtolower(pathinfo($_FILES["importfile"]["name"], PATHINFO_EXTENSION));
    $allowed = ["jpg", "jpeg", "png", "gif", "webp"];

    if (in_array($ext, $allowed)) {
        $newName = uniqid("listing_", true) . "." . $ext;
        $imagePath = $uploadDir . $newName;

        move_uploaded_file($tmpName, $imagePath);
    }
}

    $old = fopen("listingsframe.html", "r+t");
    $old_Comments = fread($old, 100000);
    fclose($old);

    $old_Comments = file_get_contents("listingsframe.html");

   $listingBlock =
"<!--LISTING_START {$listingId}-->
<link rel='stylesheet' href='listingsframestyles.css'>
<div class='listing' data-id='{$listingId}'>
  <div class='listingphoto_box_container'>
    <br><br>
    <img class='listing_photo' src='{$imagePath}' alt='Listing photo'>
    <br><br>

    <div class='text_content_container'>
      <span class='listingmodel'>".htmlspecialchars($carmodel)."</span>
      <br><br><br><br>
      <span class='listing_price'>".htmlspecialchars($priceport)."</span>
      <br><br><br><br>
      <p class='mileage_text'>".htmlspecialchars($mileageport)."</p><br><br>
      <p class='listingdesctext'>".htmlspecialchars($descriptionport)."</p>
    </div>

    <div class='contactlinks'>
      <a class='emaillink' href='mailto:jacksonzenisek@gmail.com'>Email</a>
      <a href='tel:737-275-4868' class='phonelink'>Call</a>
    </div>
  </div>
</div>
<br><br>
<!--LISTING_END {$listingId}-->";

    $old = file_get_contents("listingsframe.html");
    file_put_contents("listingsframe.html", $listingBlock . "\n" . $old);
}

   $html = file_get_contents("listingsframe.html");

preg_match_all(
    "/<!--LISTING_START ([^>]+)-->(.*?)<!--LISTING_END \\1-->/s",
    $html,
    $matches,
    PREG_SET_ORDER
);

foreach ($matches as $m) {
    $id = trim($m[1]);
    $block = $m[2];

    $title = $id;
    if (preg_match("/<span class='listingmodel'>(.*?)<\/span>/s", $block, $t)) {
        $title = strip_tags($t[1]);
    }

}

    ?>


<?php
    if(isset($_POST["Submit"])){
        $caasubject = $_POST["Subject"];
        $caamessage = $_POST["caamessage"];

        $Old = fopen("announcementsframe.html", "r+t");
        $Old_Comments = fread($Old, 100000);


        $Write = fopen("announcementsframe.html", "w+");

        $String = 
        "<link rel='stylesheet' href='announcementsstyles.css'><div class='comments_box_container'><span class='subject_name'><b>".$caasubject."</b></span><br><br><span class='announcement_text'>".$caamessage."</span><br><br><span class='date_text'>".date("m/d/Y")."</span></div><br><br>\n".$Old_Comments;
        
        fwrite($Write, $String);
        fclose($Write);
        fclose($Old);
    }
    $Read = fopen("announcementsframe.html", "r+t");
    fclose($Read);

    ?>
      <?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
