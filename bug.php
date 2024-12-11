```php
$file = fopen("file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
}
```
This code has a potential bug. If `fopen()` fails (e.g., the file doesn't exist, or the user lacks permissions), `$file` will be `false`.  However, the `fclose()` function expects a valid file resource. Attempting to close a `false` value leads to a warning, although it usually won't crash the script.  The warning might be overlooked in production, potentially creating issues in later code that depend on file handle's state.