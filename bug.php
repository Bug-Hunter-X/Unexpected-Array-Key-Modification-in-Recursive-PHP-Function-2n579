```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      $data[$key] = explode(',', $value);
    }
  }
  return $data;
}

$data = [
  'name' => 'John Doe',
  'age' => 30,
  'address' => '123 Main St, Anytown, CA',
  'skills' => ['PHP', 'JavaScript,SQL']
];

$processedData = processData($data);
print_r($processedData);
```