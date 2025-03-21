<?php

// Q1
function calculate($a, $b, $c) {
    return ($a + $b) * $c;
}

// Q2
const TAX_RATE = 0.08;

function getTax($price) {
    return $price * TAX_RATE;
}

// Q3
function checkValid($value) {
    return $value > 0;
}

// Q4
$data = [
    'name' => 'John',
    'age' => 30,
    'location' => 'Tokyo',
    'occupation' => 'Developer'
];

// Q5
$isValid = true;

// Q6
$userName = 'John Doe';

// Q7
$fruits = ['apple', 'banana', 'orange'];

// Q8
for ($index = 0; $index < 10; $index++) {
    // ...
}

// Q9
function process($value) {
    return $value * 2;
}

$globalValue = 10;
$result = process($globalValue);

// Q10
function example() {
    $value = 10;
    if (true) {
        // ...
        echo $value;
    }
}

// Q11
function processOrder($order) {
    validateOrder($order);
    getCustomerInfo($order);
    checkInventory($order);
    processPayment($order);
    saveOrder($order);
    sendConfirmationEmail($order);
}

function validateOrder($order) {
    // 注文の検証処理
}

function getCustomerInfo($order) {
    // 顧客情報の取得処理
}

function checkInventory($order) {
    // 在庫の確認処理
}

function processPayment($order) {
    // 支払い処理
}

function saveOrder($order) {
    // 注文の保存処理
}

function sendConfirmationEmail($order) {
    // メール送信処理
}

// Q12
function calculateArea($base, $height, $multiplier = 1) {
    return $base * $height * $multiplier;
}

// Q13 未回答
function createUser($name, $age, $address, $email, $phone) {
    // ...
}

// Q14　未回答
function processData($data, $isAscending) {
    if ($isAscending) {
        // 昇順処理
    } else {
        // 降順処理
    }
}

// Q15　未回答
function formatData($data, $type) {
    if ($type === 'csv') {
        // CSV形式に変換
    } elseif ($type === 'json') {
        // JSON形式に変換
    }
}

// Q16　未回答
function calculateDiscountedPrice($price) {
    return $price * 0.9;
}

// Q17　未回答
function getUserData($userId) {
    // ユーザー情報を削除
}

// Q18　未回答
$count = 0;

function incrementCount() {
    global $count;
    $count++;
}

// Q19　未回答
function processData2($data) {
    // データを検証する
    if (empty($data)) {
        return false;
    }
    // ...
}

// Q20　未回答
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
