```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else {
      // Some processing of $value
      $data[$key] = $value * 2; 
    }
  }
  return $data; 
}

$data = [1, [2, 3], 4, [5, [6, 7]]];
$result = processData($data);
print_r($result); // Outputs modified data
```