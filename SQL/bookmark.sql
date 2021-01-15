-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 1 月 16 日 00:50
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookName` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `bookUrl` text COLLATE utf8_unicode_ci,
  `bookComment` text COLLATE utf8_unicode_ci,
  `fname` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookName`, `bookUrl`, `bookComment`, `fname`, `date`) VALUES
(14, '『”常時接続の時代にビジネスはどう変わるか 顧客体験は進化する”, DIAMONDハーバード・ビジネス・レビュー 2020年 1月号』', 'https://www.dhbr.net/ud/backnumber/5de6021f77656131e2000000', '・これから、顧客とどう向き合ってゆけばいいのだろう？\r\n・その為にはどんな仕組み(webサービス、アプリ、データマネジメント...) を作らなきゃいけないんだろう？\r\n...そんな、「わかってるようでわかってない」事が程よくまとまってる一冊です。\r\n　僕は「御上への説明」に悩んでいた時期に重宝しました。\">', 'img_76ab5513a617d75653f1a414ccbf0d32359317.jpg', '2021-01-14 12:11:35'),
(16, '『No Flop! 失敗できない人の失敗しない技術,  アルベルト・サヴォイア』', 'https://www.sunmark.co.jp/detail.php?csid=3749-4', '名著なのでネットに沢山レビューあります:苦笑い:\r\n粗くまとめると、昨日の児玉先生の講義でもあった、0→1 を作る際に「残念な結果」にならないように、どういうことに注意して仮説やコンセプトを作ったら良いか？を纏めています。\r\n　デザイン思考やアジャイル、それらの「前」のフェーズで如何に考えるか？に言及した本かと個人的には認識しています。', '978-4-7631-3749-4.jpg', '2021-01-14 12:18:16'),
(17, '座右の書『貞観政要』 中国古典に学ぶ「世界最高のリーダー論」', 'https://www.amazon.co.jp/dp/4040823516/ref=cm_sw_r_cp_api_i_AB5WFbJ3EKJ0M', 'これからチームを率いていく人、起業を考えている人など、リーダーとなる人が持つべき心構えについて、過去の偉人の歴史から学べる本です:虹:\r\n知の巨人、出口治明さんの著書でおすすめです！', '51gJSa-b7CL._SX310_BO1,204,203,200_.jpg', '2021-01-14 12:18:40'),
(19, 'さあ、才能(じぶん)に目覚めよう 新版 ストレングス・ファインダー2.0', 'https://www.amazon.co.jp/dp/4532321433/ref=cm_sw_r_cp_api_i_uH5WFbXADPGN8', '', 'st.jpg', '2021-01-14 12:22:00'),
(20, '新 コーチングが人を活かす', 'https://www.amazon.co.jp/dp/4799326104/ref=cm_sw_r_cp_api_i_xI5WFbGXHF00E', 'コーチングだけに限らず、後輩育成などにも活用出来ます^ ^\r\n新 コーチングが人を活かす', '51RXwJl838L._SX340_BO1,204,203,200_.jpg', '2021-01-14 12:22:38'),
(21, '不格好経営―チームDeNAの挑戦', 'https://www.amazon.co.jp/dp/4532318955/ref=cm_sw_r_cp_api_fabt1_KO5WFbY3EPRV7', 'DeNA創設者の南場さんが起業に至るまでと、実際に起業後の話を語った「不格好経営」は、これから新規サービスを考える我々は読んで損はない名著だと思います。\r\nコンサルの知見は全く役に立たなかったとか、サービスリリース前日に外注のシステム会社に連絡したら1ミリもプログラムが書かれてなかったなど、いわゆる成功体験談ではなく、リアルな実体験を赤裸々に語っていて、読み物としても非常に面白いです。多分メルカリとかで格安で買えるので未読の方はぜひ！', '31-nLScgtNL._SX344_BO1,204,203,200_.jpg', '2021-01-14 12:23:17'),
(22, 'ノンデザイナーズ・デザインブック [第4版]', 'https://www.amazon.co.jp/dp/4839955557/ref=cm_sw_em_r_mt_dp_X45WFbHNKRXES', 'デザインの名著を一冊。', 'download.jpg', '2021-01-14 12:23:37'),
(23, '【図解まとめ】『イシューからはじめよ』を図解で分かりやすく要約｜くんぺー | 図解×ビジネス書｜note', 'https://note.com/1996_0928/n/n8abfb82f5ed7', '安宅先生の本を一冊。\r\n「迷ったらやる精神」が既に身についている人向けです。\r\nたくさんチャレンジできるアドベンチャー精神を習得した後に来る、いかに打率を上げるかというフェーズで役に立つかと思います。\r\n量良く、質良く前進しようというわけです。\r\n思考のプロセスがわかりやすくディレクティングされています。', 'rectangle_large_type_2_7d7c9923bd55295cb8c17d4af0165bff.webp', '2021-01-14 12:24:18'),
(24, 'Python2年生 スクレイピングのしくみ 体験してわかる！会話でまなべる！ ', 'https://www.shoeisha.co.jp/book/detail/9784798161914 ', '技術寄りになってしまいますが、「Python2年生 スクレイピングのしくみ 体験してわかる！会話でまなべる！ 」という本をご紹介します。\r\npython使ってみたいけど、どんなことできるの？という方におすすめの本です。\r\nまずイラストが可愛くて、読みやすいです。\r\n内容はスクレイピング、データ分析手法、API利用など結構実践的な実例が紹介されています。\r\n', 'L.png', '2021-01-14 12:24:38'),
(25, 'メイクロックマン 史上最大のプログラミング', 'https://www.amazon.co.jp/dp/4052052277/ref=cm_sw_em_r_mt_dp_t-mYFbYH9JFP5', 'ロックマンをプログラムで自作したい方へ。\r\n（言語はScratchベースで、GUIを操作して作成する内容だと思います）', 'download-1.jpg', '2021-01-14 12:24:56'),
(26, '『ほしとんで』', 'https://www.amazon.co.jp/dp/B07HR675J1/ref=cm_sw_em_r_mt_dp_QLfZFbRKKNRGJ', '俳句初心者あるあると創作初めてこじらした人あるあるがいっぱい載ってます。これを読んで俳句を始めたくなったら岡田に声をかけてください。\r\nまるで俳壇の回し者のようだ。', '51WJw74yAbL._SY346_.jpg', '2021-01-14 12:25:20'),
(27, 'スッキリわかるSQL入門 第2版 ドリル222問付き! (スッキリシリーズ)', 'https://www.amazon.co.jp/dp/4295005096/ref=cm_sw_em_r_mt_dp_tBgaGbP4XXB22', 'チューターのカエルです。\r\nSQLはこの本で勉強しました。\r\n基礎固めにはいいかと思います。\r\n正月休みにどうぞ！', 'download-2.jpg', '2021-01-14 12:25:41'),
(28, '広告のデザイン', 'https://www.amazon.co.jp/%E3%83%9A%E3%83%B3%E3%83%96%E3%83%83%E3%82%AF%E3%82%B910-%E5%BA%83%E5%91%8A%E3%81%AE%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3-Pen-BOOKS-%E3%83%9A%E3%83%B3%E7%B7%A8%E9%9B%86%E9%83%A8/dp/4484102099/ref=cm_cr_arp_d_product_top?ie=UTF8', '1冊目はアイデアについて', 'download-3.jpg', '2021-01-14 12:26:08'),
(29, 'デザインのデザイン', 'https://www.amazon.co.jp/%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%AE%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3-%E5%8E%9F-%E7%A0%94%E5%93%89/dp/4000240056', '2冊目はデザインでできること', 'download-4.jpg', '2021-01-14 12:26:23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;