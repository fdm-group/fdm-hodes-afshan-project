<?php 
/*
   Plugin Name: FDM Meta Import
   Author: Michael Ward
*/

    /* Add the media uploader script */
  function my_media_lib_uploader_enqueue() {
    wp_enqueue_media();
    wp_register_script( 'meta-import.js', plugins_url( '/fdm-meta-import/js/meta-import.js' , __FILE__ ), array('jquery') );
    wp_enqueue_script( 'meta-import.js' );
  }
  add_action('admin_enqueue_scripts', 'my_media_lib_uploader_enqueue');


add_action('admin_menu', 'fbm_meta_import_setup_menu');

function fbm_meta_import_setup_menu( $array ) { 
    add_menu_page( 'Meta Import Tool', 'Meta Import Tool', 'manage_options', 'meta-import', 'metaimportfunc' );
}; 


function metaimportfunc(){
    
?>
        <h1>Meta Import Tool</h1>
        <h2>Upload a CSV</h2>
        <!-- Form to handle the upload - The enctype value here is very important -->
        <form  method="post" enctype="multipart/form-data">
                 <input id="image-url" type="text" name="csv" />
				  <input id="upload-button" type="button" class="button" value="Upload CSV" />
				  
				  <input type="submit" value="Submit" />
        </form>
<?php

 test_handle_post();
}
 
function test_handle_post(){
        // First check if the file appears on the _FILES array
        if ( !empty( $_POST['csv'] ) ) {


        	readCSV($_POST['csv']);
        }
}



function readCSV($file) {

ini_set("auto_detect_line_endings", "1");
$uploads = wp_upload_dir();
$upload_path = $uploads['path'];
$path =  realpath($upload_path."/".basename($file));
echo $path;
	
	if(!$metaData = csvtoarray($path, ',')){
		echo "could not open";
	}

echo count($metaData)." rows found<br/>";

echo "<table><tr><th>Page ID</th><th>Page Title</th><th>Url</th><th>New Meta Title</th><th>New Meta Description</th></tr>";
    // Process each product from API and create or update as necessary
    foreach($metaData as $product) {


        // If the SKU is in the SKU-indexed array, update existing product
        $arr = array(
    "https://www.fdmgroup.com" => "",
    "http://www.fdmgroup.com" => "",
    "/en/" => "/");

       $slug = strtr($product['Address'],$arr);
        if(url_to_postid($slug)){
        	$id = url_to_postid($slug);
            echo "<tr><td>".$id."</td><td>".get_the_title($id)."</td><td>". $slug."</td><td>". $product['Page Title']."</td><td>".$product['Meta Description 1']."</td></tr>"; 
           // update_field('fdm_meta_title' , $product['Page Title'], url_to_postid($slug));
//update_field('fdm_meta_desc' , $product['Meta Description 1'], url_to_postid($slug));
        }elseif($slug=='/'){

        	$id = get_option( 'page_on_front' );
        	echo "<tr><td>".$id."</td><td>".get_the_title($id)."</td><td>". $slug."</td><td>". $product['Page Title']."</td><td>".$product['Meta Description 1']."</td></tr>"; 
        }elseif($slug!=''){ 
            echo "not found ".$slug."<br/>"; 
        }
        //linkImages($product);
    }
    echo "</table>";
}


// Handle connection to given endpoint and return JSON-decoded data
function csvtoarray($filename='', $delimiter){

    if(!file_exists($filename) || !is_readable($filename)) return FALSE;
    $header = NULL;
    $data = array();

    if (($handle = fopen($filename, 'r')) !== FALSE ) {
        while (($row = fgetcsv($handle, 500, $delimiter)) !== FALSE)
        {   


            if(!$header){
                $header = $row;
            }else{
                $data[] = array_combine($header, $row);
                
            }
        }
        fclose($handle);
    }
    if(file_exists($filename)) @unlink($filename);

    return $data;
}