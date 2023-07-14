<?php
 /* Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError".
  Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu)
  và triển khai interface Logger cho cả hai lớp.
 */
interface Logger
{
    public function logInfo($notification);
    public function logWarning($notification);
    public function logError($notification);
}
class FileLogger implements Drawable
{
    public function logInfo($notification);
    public function logWarning($notification);
    public function logError($notification);
}
class DatabaseLogger implements Drawable
{
    public function logInfo($notification);
    public function logWarning($notification);
    public function logError($notification);
}