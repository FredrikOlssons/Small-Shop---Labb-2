<?php
/* 
Plugin Name: Remove admin_bar
Description: This plugin will remove the admin_bar...
*/

//Remove blablabla
add_filter( 'show_admin_bar', '__return_false' );
?>


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/inlamning2/wp-json/wp/v2/media?page1&per_page=2&oauth_consumer_key=ck_e51ce02cc957079b3cb877ae03393c90622ba8ba&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1650807494&oauth_nonce=KptH7Kf5tn6&oauth_version=1.0&oauth_signature=PZ3IROYZoEmsGCTXXLoFifymGQo%253D',
  CURLOPT_URL => 'http://localhost/inlamning2/wp-json/wp/v2/media/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$media_imgs = json_decode($response);
     
for ($i=0; $i <count($media_imgs) ; $i++) { 
  $media_for_blog = $media_imgs[$i];
  $bloggbild = $media_for_blog->guid->rendered;
  echo "<img class='bloggbild' src='$bloggbild' height='200' width='200'>";
}     ?>
</div>


<div class="textHolder">
<?php

$curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/inlamning2/wp-json/wp/v2/posts?oauth_consumer_key=ck_492bfa30655531efd9744a68fc7867f3377e416a&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1650457406&oauth_nonce=PprWtJp75l6&oauth_version=1.0&oauth_signature=MnqZ3MBg21RZkiPsYj6zoT81SSU%253D',
        //CURLOPT_URL => 'http://localhost/inlamning2/wp-json/wp/v2/posts/50',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      
      $all_posts = json_decode($response);

      ?>


        <?php echo "<table>";
        echo "<tr><th>Namn</th><th>Datum</th></tr>";

        for ($y = 0; $y < count($all_posts); $y++) {
          $post = $all_posts[$y];
          $post_title = $post->title->rendered;
          $post_date = $post->date;
          

         echo "<tr><td>$post_title</td><td>$post->date</td></tr>";

        }
          /*   for ($i=0; $i < count($post); $i++) { 
        $content = $post->content;
        echo "<tr><td>Innehåll:</td><td> $content->rendered</td></tr>"; */
        

       echo "</table>";

