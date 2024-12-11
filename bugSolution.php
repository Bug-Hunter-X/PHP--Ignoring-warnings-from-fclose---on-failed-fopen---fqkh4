```php
$file = fopen("file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error appropriately, e.g., log it, display an error message
    // ... more detailed error handling ...
    error_log("Failed to open file.txt"); 
}
```
This improved version explicitly checks if `$file` is a valid resource before calling `fclose()`.  Additionally, it provides a placeholder for more robust error handling, which should include logging the error and possibly providing informative feedback to the user.