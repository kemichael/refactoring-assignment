<?php

// Q1
function calculate($a, $b, $c) {
    return ($a + $b) * $c;
}


// Q2
function calculateTax($price) {
    $Tax = 0.08;
    return $price * $Tax;
}

// Q3
function checkValid($value) {
    return $value >= 0;
    return $value <= 0;
}

// Q4
function UserInformation(){
    return [
        'name' => 'John',
        'age' => 30,
        'address' => 'Tokyo',
        'post' => 'Developer',
    ];
}

// Q5
$isValid = false;

// Q6
$userName = 'John Doe';

// Q7
$fruitsName = ['apple', 'banana', 'orange'];

// Q8
for ($i = 0; $i < 10; $i++) {
    // ...
}

// Q9
$globalValue = 10;

function process() {
    global $globalValue;
    // ...
}

// Q10
function example() {
    $value = 10;
    if (true) {
        // ...
    }
    echo $value;
}

// Q11
function processOrder($order) {
    // 注文の検証
    orderValidation
    // 顧客情報の取得
    getCustomerInfo(){}
    // 在庫の確認
    stockStatus
    // 支払い処理
    paymentProcess
    // 注文の保存
    saveOrder
    // メール送信
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

// Q14
function processData($data, $isAscending) {
    if ($isAscending) {
        // 昇順処理
    } else {
        // 降順処理
    }
}

// Q15
function formatData($data, $type) {
    if ($type === 'csv') {
        // CSV形式に変換
    } elseif ($type === 'json') {
        // JSON形式に変換
    }
}

// Q16
function calculateDiscountedPrice($price) {
    return $price * 0.9;
}

// Q17
function getUserData($userId) {
    // ユーザー情報を削除
}

// Q18
$count = 0;

function incrementCount() {
    global $count;
    $count++;
}

// Q19
function processData2($data) {
    // データを検証する
    if (empty($data)) {
        return false;
    }
    // ...
}

// Q20
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
