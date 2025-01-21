```php
function processData(array $data, int $recursionLevel = 0): array {
  if ($recursionLevel > 10) { // Add recursion depth limit
    throw new Exception('Maximum recursion depth exceeded');
  }

  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value, $recursionLevel + 1); // Recursive call with depth
    } elseif (is_numeric($value)) { // Ensure we're handling numbers only
      $data[$key] = $value * 2; 
    } else {
        // Handle non-numeric values gracefully (e.g., logging a warning)
        error_log('Non-numeric value encountered: ' . gettype($value)); 
    }
  }
  return $data;
}

$data = [1, [2, 3], 4, [5, [6, 7]]];

try {
  $result = processData($data);
  print_r($result); // Outputs modified data
} catch (Exception $e) {
  echo 'Error: ' . $e->getMessage();
}
```