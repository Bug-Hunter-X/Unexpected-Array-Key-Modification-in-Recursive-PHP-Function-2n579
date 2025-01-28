```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = processData($value);
    } elseif (is_string($value) && strpos($value, ',') !== false) {
      $result[$key] = explode(',', $value);
    } else {
      $result[$key] = $value;
    }
  }
  return $result;
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