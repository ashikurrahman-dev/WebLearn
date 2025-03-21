<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
    $file = $_FILES['uploadedFile'];

    // Get file details
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = $file['type'];
    $fileError = $file['error'];
    // die($fileTmpName);
    // Set the upload directory
    $uploadDir = "uploads/";
    $uploadPath = $uploadDir . basename($fileName);

    // Check if there was an error
    if ($fileError === 0) {
        // Move the file from temporary storage to the final destination
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "File uploaded successfully: $uploadPath";
        } else {
            echo "Error moving the uploaded file!";
        }
    } else {
        echo "Error during file upload!";
    }
} else {
    echo "No file uploaded!";
}
?>
<form action="" method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="uploadedFile">
    <input type="submit" value="Upload">
</form>

