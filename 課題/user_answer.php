<?php
// 回答用
//問題名-１　自力で回答
//問題名-２　答え合わせ中に記載（わからんかった）
// Q1ー１
function calculate($product_a, $product_b, $tax) {
    $subtotal = $product_a + $product_b;
    $total = $subtotal * $tax;
    return $total;
}


// Q2ー１
const tax = 0.08;
function calculateTax($price) {
    return $price * tax;
}

// Q3ー２
function isValid($value) {
  return $value > 0;
}

// Q4ー１
$data = ['John', 30, 'Tokyo', 'Developer'];
$name = 'john';
$age = 30;
$city = 'tokyo';
$occupation = 'developer';

// Q5-２
$isValid = true;

if (!$isValid) {
    // ...
}

// Q6ー１
$usrNm = 'John Doe';
$user_name = 'john doe'


// Q7ー１
$fruits = ['apple', 'banana', 'orange'];

// Q8ー１
for ($count = 0; $count < 10; $count++) {
    // ...
}

// Q9ー２
class MyClass {
  private $globalValue = 10;

  public function process() {
      // $this->globalValue を使用
  }
}

function process($globalValue) {
  // $globalValue を使用
}

// Q10ー２
function example() {
  if (true) {
      $value = 10;
      // ...
      echo $value;
  }
}

// Q11ー１
function processOrder($order) {
    validateOrder($order);// 注文の検証
    $customer = getCustomer($order);// 顧客情報の取得
    checkStock($order);// 在庫の確認
    processPayment($order);// 支払い処理
    saveOrder($order);// 注文の保存
    sendEmail($order);// メール送信

  }

// Q12ー１
function calculateArea($width, $height, $type) {
  if ($type === 'rectangle') {
      return $width * $height;
  } elseif ($type === 'triangle') {
      return $width * $height / 2;
  }
}

// Q13ー２
function createUser($userData) {
  // $userData オブジェクトまたは配列を使用
}

// Q14ー１
function processAscendingData($data) {
  // 昇順処理
}

function processDescendingData($data) {
  // 降順処理
}

//ここで自習時間終了になった。
// Q15ー２
function formatCsvData($data) {
  // CSV形式に変換
}

function formatJsonData($data) {
  // JSON形式に変換
}

// Q16ー２
function calculateDiscountedPrice($price, $discountRate) {
  return $price * $discountRate;
}

// Q17ー２
function deleteUser($userId) {
  // ユーザー情報を削除
}

// Q18ー２
function incrementCount($count) {
  return $count + 1;
}

// Q19ー２
function validateData($data) {
  return !empty($data);
}

function processData2($data) {
  if (!validateData($data)) {
      return false;
  }
  // ...
}

// Q20ー２
function process2($value) {
  if ($value <= 0) {
      return;
  }

  if ($value < 10) {
      // ...
      return;
  }

  // ...
}
