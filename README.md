# myportfolio

## プロジェクト概要

ポートフォリオサイト。Web 制作実績やスキル、自己紹介を掲載しています。

## 技術スタック

- HTML5 / PHP
- SCSS（Sass）
- JavaScript（ES6+）
- [particles.js](assets/js/particles.js)（アニメーション背景）
- Intersection Observer API（スクロールアニメーション）
- [progressbar.js](https://github.com/kimmobrunfeldt/progressbar.js)（ローディング演出）
- Webpack（SCSS ビルド・バンドル管理）

## 工夫した点・課題へのアプローチ

- **アクセシビリティ対応**：セマンティックな HTML 構造
- **LCP 最適化**：主要画像の遅延読み込みや CSS 設計による描画高速化
- **レスポンシブデザイン**：SCSS の mixin や clamp/vw 単位を活用し、スマートフォン〜PC まで最適化
- **アニメーション**：Intersection Observer と Web Animations API でパフォーマンスに配慮したフェードイン・スケール演出
- **メンテナンス性**：SCSS の分割管理、ユーティリティ mixin の活用

## ライブデモ URL

[https://pilina-cs.com/]
