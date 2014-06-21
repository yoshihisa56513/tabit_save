-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- ホスト: mysql012.phy.lolipop.jp
-- 生成時間: 2014 年 6 月 21 日 14:19
-- サーバのバージョン: 5.6.14
-- PHP のバージョン: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `LAA0469195-video`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `place` text NOT NULL,
  `video_url` text,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- テーブルのデータをダンプしています `videos`
--

INSERT INTO `videos` (`id`, `title`, `place`, `video_url`, `comment`) VALUES
(1, 'タイ　アユタヤ①', 'タイ, アユタヤ', '<iframe width="420" height="315" src="//www.youtube.com/embed/DW0nwiEQQi8" frameborder="0" allowfullscreen></iframe>', ''),
(2, 'タイ　アユタヤ②', 'タイ　', '<iframe width="420" height="315" src="//www.youtube.com/embed/w-Za3zAMFOY" frameborder="0" allowfullscreen></iframe>', ''),
(3, 'バンコクのエアロビw', 'タイ　バンコク', '<iframe width="420" height="315" src="//www.youtube.com/embed/0ukk4XWv_fY" frameborder="0" allowfullscreen></iframe>', 'バンコク市民は至る所でエアロビをしている。一緒にエアロビをやってみたww\r\n'),
(4, 'タイ　フルーツの屋台', 'タイ　バンコク', '<iframe width="420" height="315" src="//www.youtube.com/embed/osCcNl4jwTI" frameborder="0" allowfullscreen></iframe>', 'タイでは路上で様々な食べ物が売られています。その中でもフルーツの屋台はおすすめ。特にスイカが半端なくうまくて、大体20バーツ（60円くらい）で食べられる。'),
(5, 'りぃ散歩(1)　', 'カンボジア　シェムリ川周辺', '<iframe width="560" height="315" src="//www.youtube.com/embed/ydao_QYdTIY?list=UUtRSMPvc0MdqgoRGQrpUcaQ" frameborder="0" allowfullscreen></iframe>', ''),
(6, 'りぃ散歩　地元の飲み屋さん編 夜(1)', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/wp-YjshyoIU" frameborder="0" allowfullscreen></iframe>', ''),
(7, 'りぃ散歩　ArtCenterNightMarket', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/JjQnh_HzXHQ" frameborder="0" allowfullscreen></iframe>', '素敵なNightMarket'),
(8, 'りぃ散歩　お土産屋前編', 'カンボジア　シェムリアップ', '<iframe width="560" height="315" src="//www.youtube.com/embed/uuGDKHBHv1c" frameborder="0" allowfullscreen></iframe>', 'アンコールナイトマーケット'),
(9, 'りぃ散歩　お昼前編', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/RYQSoOMXYHY?rel=0" frameborder="0" allowfullscreen></iframe>', 'お昼前'),
(10, 'りぃ散歩　番外編', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/twQXYI9WTm8?rel=0" frameborder="0" allowfullscreen></iframe>', '番外編です'),
(11, 'りぃ散歩', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/zNbncUx8GLI?rel=0" frameborder="0" allowfullscreen></iframe>', 'シェムリアップ'),
(12, 'りぃ散歩', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/oJLvtWOvFsA?rel=0" frameborder="0" allowfullscreen></iframe>', '楽しい'),
(13, 'アンコールワット', 'カンボジア', '<iframe width="420" height="315" src="//www.youtube.com/embed/TUOuOXnKfzs?rel=0" frameborder="0" allowfullscreen></iframe>', 'アンコールワットの荘厳さ'),
(14, 'りぃ散歩　フードコート', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/lNM1JkjdhGk?rel=0" frameborder="0" allowfullscreen></iframe>', '楽しいフードコート'),
(15, 'りぃ散歩', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/zNbncUx8GLI?rel=0" frameborder="0" allowfullscreen></iframe>', '面白いカンボジア'),
(16, 'りぃ散歩', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/bL4fQkCzrvA?rel=0" frameborder="0" allowfullscreen></iframe>', 'たのしい\r\n'),
(17, 'ロシア人とペン回しをする女', 'ロシア　ノヴォシビルスク', '<iframe width="560" height="315" src="//www.youtube.com/embed/rFfg3vJh350?rel=0" frameborder="0" allowfullscreen></iframe>', 'ペン回し'),
(21, 'りぃさんぽ', 'かんぼじあ', '<iframe width="560" height="315" src="//www.youtube.com/embed/LNELgUkY3Wo?rel=0" frameborder="0" allowfullscreen></iframe>', 'いきます'),
(23, 'プノンペン選挙キャンペーン', 'プノンペン', '<iframe width="420" height="315" src="//www.youtube.com/embed/fx6dwYxoLTA?rel=0" frameborder="0" allowfullscreen></iframe>', '選挙です'),
(24, 'カンボジア選挙', 'カンボジア', '<iframe width="560" height="315" src="//www.youtube.com/embed/IwuruEtJ7DU?rel=0" frameborder="0" allowfullscreen></iframe>', 'カンボジアの選挙'),
(25, 'ロシアの寿司', 'ロシア　', '<iframe width="560" height="315" src="//www.youtube.com/embed/VWkjr3BmRew?rel=0" frameborder="0" allowfullscreen></iframe>', '日本人の方、顔で笑い取りにいってました。'),
(26, 'ロシア語で自己紹介', 'ノヴォシビルスク', '<iframe width="560" height="315" src="//www.youtube.com/embed/1rGyJ4O7CNA?rel=0" frameborder="0" allowfullscreen></iframe>', 'まだ表情筋を活用しきれてない谷さん'),
(27, 'ネコとの闘い', 'ロシア', '<iframe width="560" height="315" src="//www.youtube.com/embed/P5tHwtak8hc?rel=0" frameborder="0" allowfullscreen></iframe>', '腹立つwww'),
(28, 'おにぎりの作り方', 'ロシア', '<iframe width="560" height="315" src="//www.youtube.com/embed/oP8Yz8ebAoE?rel=0" frameborder="0" allowfullscreen></iframe>', 'おにぎり握ってるときの口w'),
(29, 'ロシア人に教えるお箸の持ち方', 'ロシア', '<iframe width="560" height="315" src="//www.youtube.com/embed/5PFADqMKjOE?rel=0" frameborder="0" allowfullscreen></iframe>', '顔');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
