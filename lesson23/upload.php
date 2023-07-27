
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Kiểm tra xem tệp có phải là hình ảnh hay không
        $allowedTypes = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "Tải lên thành công: " . htmlspecialchars(basename($_FILES["image"]["name"]));
            } else {
                echo "Có lỗi xảy ra khi tải lên tập tin.";
            }
        } else {
            echo "Chỉ cho phép tải lên các tập tin hình ảnh (jpg, jpeg, png, gif).";
        }
    } else {
        echo "Có lỗi xảy ra khi tải lên tập tin.";
    }
}
//Sử dụng hướng đối tượng lớp ImageUpload
/*
class ImageUpload
{
    protected $sever;
    protected $file;
    public function __construc($file)
    {
        $this->file= $file;
    }
    public function getFileName()
    {
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        return $targetFile;
    }
    public function uploadFile()
    {
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    }
    public function checkFile()
    {
        $allowedTypes = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "Tải lên thành công: " . htmlspecialchars(basename($_FILES["image"]["name"]));
            } else {
                echo "Có lỗi xảy ra khi tải lên tập tin.";
            }
        } else {
            echo "Chỉ cho phép tải lên các tập tin hình ảnh (jpg, jpeg, png, gif).";
        }
    } else {
        echo "Có lỗi xảy ra khi tải lên tập tin.";
    }
    }
}
*/
?>
