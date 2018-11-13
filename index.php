<?php

include_once('config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 1;
}


include('header.php');

?>

<div id="site_content">
<div class="sidebar">
  <!-- insert your sidebar items here -->
  <h3>Latest News</h3>
  <h4>New Website Launched</h4>
  <h5>August 1st, 2013</h5>
  <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
  <p></p>
  <h4>New Website Launched</h4>
  <h5>August 1st, 2013</h5>
  <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
  <h3>Useful Links</h3>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
    <li><a href="#">link 3</a></li>
    <li><a href="#">link 4</a></li>
  </ul>
  <h3>Search</h3>
  <form method="post" action="#" id="search_form">
    <p>
      <input class="search" type="text" name="search_field" value="Enter keywords....." />
      <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
    </p>
  </form>
</div>
<div id="content">
  <!-- insert the page content here -->
<?php

    $sql_content = "select titlu_pagina, content from pages where id='$id'";
    $result_content = $conn->query($sql_content);

    if($result_content->num_rows) {
        while($content = $result_content->fetch_assoc() ) {
            echo "<h1>".$content['titlu_pagina']."</h1>";
            echo $content['content'];
        }
    }
?>       

</div>
</div>




<?php

include('footer.php');