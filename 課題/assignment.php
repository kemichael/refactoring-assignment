<?php


// Q1
function calculate($a, $b, $c) {
    $d = $a + $b;
    $e = $d * $c;
    return $e;
}


// Q2
function calculateTax($price) {
    return $price * 0.08;
}

// Q3
function checkValid($value) {
    if ($value > 0) {
        return true;
    } else {
        return false;
    }
}

// Q4
$data = ['John', 30, 'Tokyo', 'Developer'];

// Q5
$isNotValid = false;

// Q6
$usrNm = 'John Doe';

// Q7
$count = ['apple', 'banana', 'orange'];

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
    // 顧客情報の取得
    // 在庫の確認
    // 支払い処理
    // 注文の保存
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
