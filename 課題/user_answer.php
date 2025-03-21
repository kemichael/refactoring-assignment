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
function checkValid($value) {
    if ($value > 0) {
        return true;
    } else {
        return false;
    }
}

// Q4ー１
$data = ['John', 30, 'Tokyo', 'Developer'];
$name = 'john';
$age = 30;
$city = 'tokyo';
$occupation = 'developer';

// Q5-２
$isNotValid = false;

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
$globalValue = 10;

function process() {
    global $globalValue;
    // ...
}

// Q10ー２
function example() {
    $value = 10;
    if (true) {
        // ...
    }
    echo $value;
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

// Q12
function calculateAreaOfRectangle($width, $height) {
    return $width * $height;
}

function calculateAreaOfTriangle($base, $height) {
    return $base * $height / 2;
}

// Q13
function createUser($name, $age, $address, $email, $phone) {
    // ...
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
function formatData($data, $type) {
    if ($type === 'csv') {
        // CSV形式に変換
    } elseif ($type === 'json') {
        // JSON形式に変換
    }
}

// Q16ー２
function calculateDiscountedPrice($price) {
    return $price * 0.9;
}

// Q17ー２
function getUserData($userId) {
    // ユーザー情報を削除
}

// Q18ー２
$count = 0;

function incrementCount() {
    global $count;
    $count++;
}

// Q19ー２
function processData2($data) {
    // データを検証する
    if (empty($data)) {
        return false;
    }
    // ...
}

// Q20ー２
function process2($value) {
    if ($value > 0) {
        if ($value < 10) {
            // ...
        } else {
            // ...
        }
    } else {
        // ...
    }
}
