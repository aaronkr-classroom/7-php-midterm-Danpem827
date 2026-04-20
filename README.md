# PHP 실기 평가 (30분)

## 목표
기본적인 PHP 문법, 변수, 배열, 반복문, 조건문, 함수, include 사용 능력을 확인한다.

---

## 과제: 간단한 상품 목록 페이지 만들기

다음 파일 3개를 만든다.

- header.php
- footer.php
- index.php

페이지에는 상품 3개의 이름, 가격, 재고 수량, 재고 상태를 표시한다.

예시 상품:

- 키보드 / 30000원 / 재고 10개
- 마우스 / 15000원 / 재고 3개
- 모니터 / 120000원 / 재고 0개

---

## 요구사항

### 1. include 사용
- index.php에서 header.php와 footer.php를 include 한다.

### 2. 배열 사용
- 상품 정보를 배열에 저장한다.
- 각 상품은 이름(name), 가격(price), 재고(stock)를 가진다.

### 3. foreach 반복문 사용
- foreach를 사용하여 모든 상품을 출력한다.

### 4. 함수 사용
다음 함수를 작성한다.

```php
function getStockMessage($stock)
{
    // 재고가 5개 이상이면 "재고 충분"
    // 재고가 1개 이상 4개 이하이면 "재고 부족"
    // 재고가 0개이면 "품절"
}
```

### 5. 총 재고 금액 계산
- 각 상품의 가격 × 재고 수량을 계산한다.
- 모든 상품의 총 재고 금액을 페이지 아래에 출력한다.

---

## 추가 점수

다음 기능을 추가하면 가산점:

- 재고 상태에 따라 글자 색상 변경
  - 재고 충분: 초록색
  - 재고 부족: 주황색
  - 품절: 빨간색
- 상품 수를 자동으로 계산하여 출력
- `number_format()`을 사용하여 가격에 쉼표 표시

---

## header.php

```php
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 목록</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4a69bd;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        .good {
            color: green;
            font-weight: bold;
        }

        .low {
            color: orange;
            font-weight: bold;
        }

        .out {
            color: red;
            font-weight: bold;
        }

        .summary {
            margin-top: 30px;
            padding: 20px;
            background-color: #eef3ff;
            border-radius: 8px;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>상품 목록 페이지</h1>
```

## footer.php

```php
        <footer>
            <p>PHP 실기 평가 페이지</p>
        </footer>
    </div>
</body>
</html>
```

## index.php 시작 코드

학생들은 아래 코드를 시작점으로 사용할 수 있다.

```php
<?php include 'header.php'; ?>

<?php
$products = [
    [
        'name' => '키보드',
        'price' => 30000,
        'stock' => 10
    ],
    [
        'name' => '마우스',
        'price' => 15000,
        'stock' => 3
    ],
    [
        'name' => '모니터',
        'price' => 120000,
        'stock' => 0
    ]
];

function getStockMessage($stock)
{
    // 여기에 코드 작성
}
?>

<table>
    <tr>
        <th>상품명</th>
        <th>가격</th>
        <th>재고</th>
        <th>재고 상태</th>
    </tr>

    <!-- foreach로 상품 출력 -->
</table>

<?php include 'footer.php'; ?>
```

---

## 채점 포인트

- [ ] include 사용 여부
- [ ] 배열 작성 여부
- [ ] foreach 반복문 사용 여부
- [ ] 함수 작성 여부
- [ ] 조건문 사용 여부
- [ ] HTML 출력 여부
- [ ] 코드 오류 없이 실행되는지
- [ ] CSS가 정상 적용되는지

