<?php

// Q1
function calculate($augend, $addend, $multiplicand) {
    $sum = $augend + $addend;
    $result = $sum * $multiplicand;
    return $result;
}


// Q2
// 税率を定数化
const TAX = 0.08;
function calculateTax($price) {
    return $price * TAX;
}

// Q3
function checkValid($value) {
    return true ? $value > 0 : false;
}

// Q4
$data = [
    "name" => 'John',
    "age" => 30,
    "prefectures" => "Tokyo",
    "position" => "Developer",
];

// Q5
$isValid = false;

// Q6
$userName = 'John Doe';

// Q7
$fruits = ['apple', 'banana', 'orange'];

// Q8
for ($index = 0; $index < 10; $index++) {
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
    // 注文の検証メソッドの呼び出し
    // 顧客情報の取得メソッドの呼び出し
    // 在庫の確認メソッドの呼び出し
    // 支払い処理メソッドの呼び出し
    // 注文の保存メソッドの呼び出し
    // メール送信メソッドの呼び出し
}

// Q12
function calculateAreaOfRectangle($width, $height) {
    return $width * $height;
}

function calculateAreaOfTriangle($base, $height) {
    return $base * $height / 2;
}

// Q13
$userInfo = [
    "name" => "名前",
    "age" => "年齢",
    "address" => "住所",
    "email" => "メールアドレス",
    "phone" => "電話番号",
];
function createUser($userInfo) {
    // ...
}

// Q14
function processData($data, bool $isAscending) {
    if ($isAscending) {
        // 昇順処理
    } else {
        // 降順処理
    }
}

// Q15

// CSV形式に変換する場合はformatDataAsCsvメソッドを呼び出し
function formatDataAsCsv($data) {
    // CSV形式に変換
}

// JSON形式に変換する場合はformatDataAsJsonメソッドを呼び出し
function formatDataAsJson($data) {
    // JSON形式に変換
}

// Q16
function calculateDiscountedPrice($price) {
    // 割引率を定数化
    define("DISCOUNT", 0.9);
    return $price * DISCOUNT;
}

// Q17
function deleteUserData($userId) {
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
// 0より大きくて10より小さい、10以上、0以下
function process2($value) {
    if ($value <= 0) {
        // ...
    } elseif ($value < 10) {
        // ...
    } else {
        // ...
    }
}
