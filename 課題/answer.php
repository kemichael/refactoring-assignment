<?php


// Q1 意味のない変数名
// $a, $b, $c をそれぞれ $price, $quantity, $taxRate に変更する。
// $d, $e をそれぞれ $subtotal, $total に変更する。
function calculate($a, $b, $c) {
    $d = $a + $b;
    $e = $d * $c;
    return $e;
}


// Q2　マジックナンバー
// 0.08 を定数 TAX_RATE に置き換える。
function calculateTax($price) {
    return $price * 0.08;
}

// Q3　boolean値を返す関数の名前
// 関数名を isValid に変更する。
function checkValid($value) {
    if ($value > 0) {
        return true;
    } else {
        return false;
    }
}

// Q4　複数の意味を持つ変数:
// $data を $name, $age, $city, $occupation に分割する。
$data = ['John', 30, 'Tokyo', 'Developer'];

// Q5　否定形を含む変数名
// $isNotValid を $isValid に変更し、条件式を反転させる。
$isNotValid = false;

// Q6　略語や短縮形:
// $usrNm を $userName に変更する。
$usrNm = 'John Doe';

// Q7　変数名と型
// $count を $fruits に変更する。
$count = ['apple', 'banana', 'orange'];

// Q8 ループ内の変数名:
// $i を $index または $counter に変更する。
for ($i = 0; $i < 10; $i++) {
    // ...
}

// Q9 グローバル変数
// $globalValue をクラスのプロパティまたは関数の引数に置き換える。
$globalValue = 10;

function process() {
    global $globalValue;
    // ...
}

// Q10 変数のスコープ
// $value のスコープを if 文内に限定する。
function example() {
    $value = 10;
    if (true) {
        // ...
    }
    echo $value;
}

// Q11 長すぎる関数
// 各処理をそれぞれ別の関数に分割する。
function processOrder($order) {
    // 注文の検証
    // 顧客情報の取得
    // 在庫の確認
    // 支払い処理
    // 注文の保存
    // メール送信
}

// Q12 重複したコード
// 共通の面積計算ロジックを別の関数に抽出する。
function calculateAreaOfRectangle($width, $height) {
    return $width * $height;
}

function calculateAreaOfTriangle($base, $height) {
    return $base * $height / 2;
}

// Q13 多すぎる引数
// 引数を $userData オブジェクトまたは配列にまとめる。
function createUser($name, $age, $address, $email, $phone) {
    // ...
}

// Q14 boolean値を引数とする関数
// processAscendingData と processDescendingData に分割する。
function processData($data, $isAscending) {
    if ($isAscending) {
        // 昇順処理
    } else {
        // 降順処理
    }
}

// Q15 複数の役割を持つ関数:
// formatCsvData と formatJsonData に分割する。
function formatData($data, $type) {
    if ($type === 'csv') {
        // CSV形式に変換
    } elseif ($type === 'json') {
        // JSON形式に変換
    }
}

// Q16 関数内のマジックナンバー
// 0.9 を引数または定数 DISCOUNT_RATE に置き換える。
function calculateDiscountedPrice($price) {
    return $price * 0.9;
}

// Q17 関数名と処理内容
// 関数名を deleteUser に変更する。
function getUserData($userId) {
    // ユーザー情報を削除
}

// Q18 関数の副作用
// $count を引数と戻り値で扱うように変更する。
$count = 0;

function incrementCount() {
    global $count;
    $count++;
}

// Q19 コメントで説明
// 検証ロジックを validateData 関数に抽出する。
function processData2($data) {
    // データを検証する
    if (empty($data)) {
        return false;
    }
    // ...
}

// Q20 深いネスト
// ガード句または早期returnでネストを浅くする。
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



