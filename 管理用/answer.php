<?php


// Q1 意味のない変数名
// $a, $b, $c, $d, $e のような変数名は、コードの意図を理解しにくく、可読性を低下させます。変数名はその役割を明確に示すものにすべきです。
function calculate($price, $quantity, $taxRate) {
    $subtotal = $price * $quantity;
    $total = $subtotal * $taxRate;
    return $total;
}


// Q2　マジックナンバー
// コード中に直接記述された数値（マジックナンバー）は、その意味を理解しにくく、変更にも弱いです。定数として定義することで、可読性と保守性を向上させます。
const TAX_RATE = 0.08;

function calculateTax($price) {
    return $price * TAX_RATE;
}

// Q3　boolean値を返す関数の名前
// boolean値を返す関数名は、is や has などの接頭辞を付け、真偽を明確に示すものにすべきです。
function isValid($value) {
    return $value > 0;
}

// Q4　複数の意味を持つ変数:
// 1つの変数に複数の役割を持たせることは、コードの意図を不明確にし、可読性を低下させます。各変数には単一の役割を持たせるべきです。
$name = 'John';
$age = 30;
$city = 'Tokyo';
$occupation = 'Developer';

// Q5　否定形を含む変数名
// 否定形を含む変数名は、肯定形よりも理解しにくい場合があります。肯定形に変え、条件式を反転させることで、可読性を向上させます。
$isValid = true;

if (!$isValid) {
    // ...
}

// Q6　略語や短縮形:
// 略語や短縮形は、文脈によっては理解しにくい場合があります。変数名は明確かつ完全な単語を使用すべきです。
$userName = 'John Doe';

// Q7　変数名と型
// 変数名は、その型と役割を明確に示すものにすべきです。$count は数値型のように見えますが、配列を格納しているため、$fruits のように変更すべきです。
$fruits = ['apple', 'banana', 'orange'];

// Q8 ループ内の変数名:
// ループ内の変数名 $i は、文脈によっては意味を理解しにくい場合があります。$index や $counter のように、役割を明確に示すものに変更すべきです。
for ($index = 0; $index < 10; $index++) {
    // ...
}

// Q9 グローバル変数
// グローバル変数は、コードの可読性、保守性、テスト容易性を低下させます。クラスのプロパティや関数の引数として扱うべきです。
class MyClass {
    private $globalValue = 10;

    public function process() {
        // $this->globalValue を使用
    }
}

function process($globalValue) {
    // $globalValue を使用
}

// Q10 変数のスコープ
// 変数のスコープは、必要最小限にすべきです。$value のスコープを if 文内に限定することで、意図しない場所での変更を防ぎます。
function example() {
    if (true) {
        $value = 10;
        // ...
        echo $value;
    }
}

// Q11 長すぎる関数
// 1つの関数に複数の役割を持たせることは、コードの可読性、保守性、テスト容易性を低下させます。各処理を別の関数に分割することで、関数の責務を明確にします。
function processOrder($order) {
    validateOrder($order);
    $customer = getCustomer($order);
    checkStock($order);
    processPayment($order);
    saveOrder($order);
    sendEmail($order);
}

// Q12 重複したコード
// 重複したコードは、保守性を低下させます。共通のロジックを別の関数に抽出することで、コードの重複を排除します。
function calculateArea($width, $height, $type) {
    if ($type === 'rectangle') {
        return $width * $height;
    } elseif ($type === 'triangle') {
        return $width * $height / 2;
    }
}

// Q13 多すぎる引数
// 多すぎる引数は、関数の可読性、保守性、テスト容易性を低下させます。引数をオブジェクトや配列にまとめることで、引数の数を減らし、可読性を向上させます。
function createUser($userData) {
    // $userData オブジェクトまたは配列を使用
}

// Q14 boolean値を引数とする関数
// boolean値を引数とする関数は、関数の役割を不明確にする場合があります。関数を分割することで、役割を明確にします。
function processAscendingData($data) {
    // 昇順処理
}

function processDescendingData($data) {
    // 降順処理
}

// Q15 複数の役割を持つ関数:
// 複数の役割を持つ関数は、可読性、保守性、テスト容易性を低下させます。関数を分割することで、役割を明確にします。
function formatCsvData($data) {
    // CSV形式に変換
}

function formatJsonData($data) {
    // JSON形式に変換
}

// Q16 関数内のマジックナンバー
// 関数内のマジックナンバーは、コードの可読性、保守性を低下させます。引数または定数として扱うべきです。
function calculateDiscountedPrice($price, $discountRate) {
    return $price * $discountRate;
}

// Q17 関数名と処理内容
// 関数名は、その処理内容を正確に示すものにすべきです。関数名と処理内容が一致しない場合は、関数名を変更すべきです。
function deleteUser($userId) {
    // ユーザー情報を削除
}

// Q18 関数の副作用
// 関数の副作用は、コードの可読性、保守性、テスト容易性を低下させます。引数と戻り値で扱うように変更すべきです。
function incrementCount($count) {
    return $count + 1;
}

$count = incrementCount($count);


// Q19 コメントで説明
// コメントは、コードの意図を補足するために使用すべきです。複雑なロジックは、関数に抽出することで、コード自体で意図を表現すべきです。
function validateData($data) {
    return !empty($data);
}

function processData2($data) {
    if (!validateData($data)) {
        return false;
    }
    // ...
}

// Q20 深いネスト
// 深いネストは、コードの可読性を低下させます。ガード句や早期returnでネストを浅くすることで、可読性を向上させます。
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


