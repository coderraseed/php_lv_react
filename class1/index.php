<?php

$file_name = "ostad.txt";
if ( !file_exists( $file_name ) ) {
    $file = fopen( $file_name, "w" ); // Create the file if it doesn't exist
    fclose( $file );
}

$file = fopen( $file_name, "r+" ); // Open the file for reading and writing
if ( $file ) {
    $contents     = fread( $file, filesize( $file_name ) ); // Read the contents of the file
    $new_contents = $contents . "\n" . date( "Y-m-d H:i:s" ); // Add the current date and time to the contents
    fseek( $file, 0 ); // Move the file pointer to the beginning of the file
    fwrite( $file, $new_contents ); // Write the new contents to the file
    fclose( $file ); // Close the file
}
?>
