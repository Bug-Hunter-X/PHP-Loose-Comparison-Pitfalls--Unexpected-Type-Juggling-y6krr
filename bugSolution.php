```php
<?php
function checkValue($value) {
  // Use strict comparison (===) to avoid type juggling
  if ($value === "0") {
    return true;
  } else {
    return false;
  }
}

var_dump(checkValue(0)); // Returns false (Expected)
var_dump(checkValue("0")); // Returns true (Expected)
var_dump(checkValue(false)); // Returns false (Expected)
var_dump(checkValue(null)); // Returns false (Expected)
?>
```
The solution uses strict comparison (`===`) to ensure that only a string with the value "0" will return `true`.  This approach eliminates the unexpected type juggling that caused the original bug.