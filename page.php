
<div id="site_content">
    <?php include('sidebar.php'); ?>
    <div id="content">
        <?php
        
        if(isset($_GET['news'])){

            $id = $_GET['news'];

            $sql_content = "select titlu_pagina, content from pages where id='$id'";
            $result_content = $conn->query($sql_content);

            if($result_content->num_rows) {
                while($content = $result_content->fetch_assoc() ) {
                    echo "<h1>".$content['titlu_pagina']."</h1>";
                    echo $content['content'];
                }
            }

        } else {

        
            $sql_content = "select titlu_pagina, content from pages where id='$id'";
            $result_content = $conn->query($sql_content);

            if($result_content->num_rows) {
                while($content = $result_content->fetch_assoc() ) {
                    echo "<h1>".$content['titlu_pagina']."</h1>";
                    echo $content['content'];
                }
            }


        }

        ?>
    </div>
</div>