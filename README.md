# PHP: Ignoring warnings from fclose() on failed fopen()

This repository demonstrates a common, yet subtle, error in PHP file handling.  The code attempts to open a file, processes it if successful, and closes it.  However, it lacks robust error handling for when `fopen()` fails.

The bug lies in calling `fclose()` even if `fopen()` returns `false`.  While this doesn't always cause immediate issues, it generates a warning which may be missed and can lead to unpredictable behavior in larger applications.

The solution provides a more robust approach, ensuring that `fclose()` is only called when a valid file handle exists.

## Usage

1. Clone the repository.
2. Examine `bug.php` to see the flawed code.
3. Examine `bugSolution.php` to see the corrected code.
4. Run both to compare the output (and warning messages).