CREATE TABLE goods (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  name varchar(100) NOT NULL COMMENT '商品名',
  catch_copy varchar(200) NOT NULL COMMENT 'キャッチコピー',
  price int(11) NOT NULL COMMENT '金額', 
  caption varchar(100) NOT NULL COMMENT '説明',
  url varchar(100) NOT NULL COMMENT 'URL',
  imageUrl varchar(100) NOT NULL COMMENT '画像URL',
  PRIMARY KEY (id)
) COMMENT='商品テーブル';


INSERT INTO `goods` (`id`, `name`, `catch_copy`, `price`, `caption`, `url`, `imageUrl`)
VALUES
  (1,'限定特価 (送料無料) 人気希少銘酒 新潟の地酒 久保田 千寿（吟醸酒） 越乃寒梅　(白ラベル) 八海山 720ml×3本 越乃寒梅 日本酒 飲み比べセット 日本酒 ギフト 日本酒 飲み比べ 父の日 ','720ml×3本。一部地域追加送料かかります。父の日 ギフト　',4455,'※一部地域への配送は追加送料が必要となります。 ギフト対応「食事と楽しむ吟醸酒」を 目指した穏やかな香りと柔らかい口当たりの飲み飽きしない味わい。 冷やはもちろん燗にも適したお酒です。 アルコール度数','https://item.rakuten.co.jp/yokogoshi/3101osusume001/','https://thumbnail.image.rakuten.co.jp/@0_mall/yokogoshi/cabinet/shohin/2019/5001top1.jpg?_ex=128x128'),
  (2,'【H30年産】 新潟県産コシヒカリ 10kg(5kg×2)ギフト 御祝 お中元 お歳暮','創業110年のヤマトライスが安心安全のお米をお届けします',4980,'商品詳細 内容量 10kg（5kg×2） 原料玄米 単一原料米 年産：30年産 産地：新潟県産 銘柄：コシヒカリ 保存方法 （注意点） ・直射日光、高温多湿を避け涼しい場所 　で保存して下さい。 　高','https://item.rakuten.co.jp/yamatorice/726303/','https://thumbnail.image.rakuten.co.jp/@0_mall/yamatorice/cabinet/ngt/koshi/yr/007264-2.jpg?_ex=128x1'),
  (3,'【H30年産】【無洗米】 新潟県産コシヒカリ 10kg(5kg×2)手間なく便利！ ギフト 御祝 お祝い 贈り物 お中元 お歳暮','無洗米新潟こしひかりランキング1位の実績！ 創業110年のヤマトライスが安心安全のお米をお届けします',5280,'商品詳細 内容量 10kg（5kg×2） 原料玄米 単一原料米 年産：30年産 産地：新潟県産 銘柄：コシヒカリ 保存方法 （注意点） ・直射日光、高温多湿を避け涼しい場所 　で保存して下さい。 　高','https://item.rakuten.co.jp/yamatorice/455602-x/','https://thumbnail.image.rakuten.co.jp/@0_mall/yamatorice/cabinet/ngt/koshi/bg/004550-2.jpg?_ex=128x1'),
  (4,'【30年産 】新潟県産 新之助 10kg(5kg×2) 特別栽培減農薬減化学肥料米 送料無料 ※北海道は別途送料\\500沖縄一部離島は\\1500が掛かります。','新潟県の新品種 新之助 新潟県の名産地、長岡産の特別栽培　減農薬米です。やや大粒で旨みが乗っていて本当に適度な食べやすさ！！',6980,'ギフト対応 名称 精米 産地 新潟県産 品種 新之助 産年 30年産　新米 使用割合 単一原料米 内容量 10kg(5kg×2) 精米年月日 注文を受けてから精米いたします。新潟県から万を持して登場の','https://item.rakuten.co.jp/okome-gensenmai/10000156/','https://thumbnail.image.rakuten.co.jp/@0_mall/okome-gensenmai/cabinet/05677093/imgrc0072529081.jpg?_'),
  (5,'南蛮えび煎餅 【あす楽対応】 （新潟 土産 お土産 みやげ おみやげ 和菓子 煎餅 日本 国内土産）','【袋付】 新潟 土産 お土産 おみやげ みやげ 日本 国内土産',1080,'アイコンの説明について⇒［新潟お土産］ 南蛮えび煎餅 日本海産甘えびのすり身をせんべい生地に練り込みカリッと焼き上げました。風味豊かな香りが広がります。 内容量・重量 30枚入り サイズ 1箱サイズ約','https://item.rakuten.co.jp/trv/61028043/','https://thumbnail.image.rakuten.co.jp/@0_mall/trv/cabinet/57_kokunai/61028043_z1.jpg?_ex=128x128'),
  (6,'特A 新潟県佐渡産コシヒカリ 10kg（5kg×2） H30年産 送料無料【精米日 訳あり】','甘みが広がる大自然の味',4580,'商品詳細 内容量 10kg(5kg×2) &nbsp;精米日 2019年5月26日〜6月5日 原料玄米 単一原料米 年産：30年産 産地：新潟県佐渡産 銘柄：こしひかり 保存方法（注意点） ・直射日光','https://item.rakuten.co.jp/yamatorice/10000155/','https://thumbnail.image.rakuten.co.jp/@0_mall/yamatorice/cabinet/wakeari/higire.jpg?_ex=128x128'),
  (7,'【米 10kg】コシヒカリ 10kg / 新潟産 こしひかり 白米 5kg x2袋 送料無料 平成30年産 のし対応可','米 10kg 送料無料 コシヒカリ こしひかり 新潟産',4980,'米どころ新潟のコシヒカリを産地直送！新鮮なこしひかりを自社精米。大変お求め安い価格で当店人気ナンバーワンの新潟産コシヒカリ100％です。ご贈答はもちろんご自宅用としても毎日食べられるお米。炊き上がりも','https://item.rakuten.co.jp/echigo-inahoya/tokusen10k/','https://thumbnail.image.rakuten.co.jp/@0_mall/echigo-inahoya/cabinet/tokusen/r-tokusen10k.jpg?_ex=12'),
  (8,'みずほの粒選米 5キロ 新潟産コシヒカリ 農家直送 下越 特A 真空パック','運賃・諸資材高騰、在庫僅少のため、新米収穫前（7月）に価格改定予定です。どうかご理解賜りますようお願い致しますm(_ _)m',2716,'名称：精米／玄米 産地、品種、産年：新潟県、コシヒカリ、平成30年 使用割合：単一原料米 内容量：5kg 精米年月日：パッケージに記載 *北海道、中国、四国、九州、沖縄地方は別途送料必要甘さ、粘り、モ','https://item.rakuten.co.jp/kitsumizuho/hs05x1-r/','https://thumbnail.image.rakuten.co.jp/@0_mall/kitsumizuho/cabinet/io/sam_5.jpg?_ex=128x128'),
  (9,'【アイスペール ステンレス 日本製】18-8ステンレス製 断熱二重構造アイスバスケット （トング付き） 2.0L【2L/新潟県/燕三条/業務用/家庭用/保冷/アイスバケツ/氷入れ/お酒/水割り/おしゃ','【日本製】業務用18-8ステンレス製のアイスバスケット！二重構造で結露しにくく、保冷力にも優れています。業務用はもちろん、ご家庭で水割りを作る時などにも！',8262,'◆日本製・業務用18-8ステンレス製のトング付きアイスバスケットです。 ◆断熱二重構造で結露しにくく、保冷力に優れたアイスバスケットです。 ◆シャンパンクーラーとしてもお使いいただけます。 ◆耐腐食性','https://item.rakuten.co.jp/kokouki/168025/','https://thumbnail.image.rakuten.co.jp/@0_mall/kokouki/cabinet/kanda/kanda3/168025-400-001.jpg?_ex=12'),
  (10,'30kg コシヒカリ 玄米 お米 30年産 新潟県産 送料無料 一等『30年新潟県産コシヒカリ玄米30kg』【RCP】','日本有数の米どころ新潟のこしひかり。噛みしめるたびに口の中に甘さと粘りが広がります♪',11600,'新潟県では化学肥料や農薬を減らした人と環境にやさしいコシヒカリの栽培に取り組んでいます。越後平野の豊かな水と肥沃な土によって育まれた新潟産コシヒカリは、炊きたてのツヤと香り、噛みしめるたびに広がる甘さ','https://item.rakuten.co.jp/anzai-rice/nikg30/','https://thumbnail.image.rakuten.co.jp/@0_mall/anzai-rice/cabinet/02207291/02207296/imgrc0077350790.j'),
  (11,'★取扱店限定★　『雪男　本格焼酎』　越後　吟醸酒粕焼酎　　　青木酒造×西吉田酒造　新潟　720ml　25度　箱付き','越淡麗100％の吟醸酒酒粕使用',1620,'商品情報 名称 本格粕取り焼酎　雪男内容量 720mlアルコール度 25％原料米 越淡麗100％の吟醸酒酒粕使用特徴 ほんのり香る吟醸香をお楽しみいただける逸品です。製造元 販売元：　新潟県南魚沼市　','https://item.rakuten.co.jp/shinbosaketen/yukiotoko720shouchu/','https://thumbnail.image.rakuten.co.jp/@0_mall/shinbosaketen/cabinet/compass1534485068.jpg?_ex=128x12'),
  (12,'わたやのへぎそば 【あす楽対応】 （新潟 土産 お土産 みやげ おみやげ めん類 そば 日本 国内土産）','【袋付】 新潟 土産 お土産 おみやげ みやげ 日本 国内土産',1425,'アイコンの説明について⇒［新潟お土産］ わたやのへぎそば しなやかでツルツルしたのど越しと、厳選したそばの風味が生きた逸品。体にもよいとされる布海苔(ふのり)が入っているので、おいしくて健康的! 内容','https://item.rakuten.co.jp/trv/61216735/','https://thumbnail.image.rakuten.co.jp/@0_mall/trv/cabinet/57_kokunai/61216735_z1.jpg?_ex=128x128'),
  (13,'【H30年産】 新潟県産コシヒカリ 20kg(5kg×4)ギフト 御祝 お中元 お歳暮','創業110年のヤマトライスが安心安全のお米をお届けします',9480,'商品詳細 内容量 20kg（5kg×4袋） 原料玄米 単一原料米 年産：30年産 産地：新潟県産 銘柄：コシヒカリ 保存方法 （注意点） ・直射日光、高温多湿を避け涼しい場所 　で保存して下さい。 　','https://item.rakuten.co.jp/yamatorice/10000255/','https://thumbnail.image.rakuten.co.jp/@0_mall/yamatorice/cabinet/ngt/koshi/yr/007264-4.jpg?_ex=128x1'),
  (14,'新潟大人酒ごはん 2017年版2017年版【電子書籍】','【電子書籍なら、スマホ・パソコンの無料アプリで今すぐ読める！】',400,'※このコンテンツはカラーのページを含みます。カラー表示が可能な端末またはアプリでの閲覧を推奨します。＜br /＞（kobo glo kobo touch kobo miniでは一部見えづらい場合があり','https://item.rakuten.co.jp/rakutenkobo-ebooks/4a9c527afa383f5ca508ec6c4a2e32aa/','https://thumbnail.image.rakuten.co.jp/@0_mall/rakutenkobo-ebooks/cabinet/3209/2000004913209.jpg?_ex='),
  (15,'ルサンクワイナリー カベルネ・ソーヴィニヨン 750ml 赤ワイン 日本ワイン 新潟 国産[cs]','[ルサンクワイナリー / Le CINQ]',3456,'■ワイン名 /カベルネ・ソーヴィニヨン ■色 /赤ワイン ■味わい /ライト〜ミディアムボディ ■ぶどう品種 /カベルネ・ソーヴィニヨン ■生産者名 /ルサンクワイナリー ■産地 /新潟 ■内容量 /','https://item.rakuten.co.jp/attaatta/14009/','https://thumbnail.image.rakuten.co.jp/@0_mall/attaatta/cabinet/02287287/06714432/14009.jpg?_ex=128x1'),
  (16,'【初夏の隠し酒】越の誉純米白麹生酒720ml[新潟県]（クール便）','360本限定の希少品！',1609,'■蔵元：原酒造（新潟県柏崎市） ■原材料：米、米麹 ■原料米：越神楽（新潟県産） ■精米歩合：65％ ■日本酒度：−8 ■アルコール分：15％越の誉の夏の隠し酒！！ 360本限定生産の希少品！ 新潟県','https://item.rakuten.co.jp/jizakeshop/koshinohomare_kakushisake_shiro/','https://thumbnail.image.rakuten.co.jp/@0_mall/jizakeshop/cabinet/meimonsyukai/koshinohomare_siroko.j'),
  (17,'アルミ 平型スノーダンプ No.0019（アルミ平型スノーダンプ NO.0019）新潟県で屋根の雪下ろしの定番品！※大型商品のため、代引き・日曜祝日着・沖縄・離島はご利用出来ません','アルミなので軽くて頑丈！新潟の豪雪地帯はこれです！',7452,'【ここがポイント！】 ・新潟県で屋根の雪下ろしの定番品！ ・アルミ製ですので、軽量3.6kg！ ・柔らかい雪や屋根の雪下ろしに最適です。。 【商品仕様】 サイズ：（約）幅570mm×奥行×530×全長','https://item.rakuten.co.jp/yminfo/10020500/','https://thumbnail.image.rakuten.co.jp/@0_mall/yminfo/cabinet/00045323/arumidamp.jpg?_ex=128x128'),
  (18,'《パック》新潟清酒 潟松 3Lパック新潟 加藤酒造【6本販売】【送料無料】[3,000ml][佳撰酒][長S]','★まとめ買いで送料無料!★《パック》【送料無料】【6本販売】米どころ新潟県産の清酒だから旨い！淡麗辛口で、燗でも冷酒でも料理に合う！',8510,'米の旨味たっぷり、まろやかですっきりとした呑み口の淡麗辛口タイプの晩酌酒。 この価格で新潟県産清酒を味わえて、毎日の晩酌にピッタリ！ ※6本まで同梱可能　','https://item.rakuten.co.jp/likaman/011677-6/','https://thumbnail.image.rakuten.co.jp/@0_mall/likaman/cabinet/cart-img/img-txt/011677-6.jpg?_ex=128x'),
  (19,'永谷園　おとなのふりかけ　新潟限定　【16食分】4種の味が楽しめる♪ご飯のおとも　お弁当　新潟　お土産　プチギフト5,400円以上お買い上げで送料無料!!','永谷園　おとなのふりかけ　新潟限定　【16食分】',648,'製品仕様 商品名 新潟限定　永谷園　おとなのふりかけ 名称 ふりかけ 内容量 48g（南蛮エビ3g×4袋、村上牛3g×4袋、のどぐろ3g×4袋、柿の種3g×4袋） 賞味期限 製造日より12ヶ月 保存方','https://item.rakuten.co.jp/akagimeihan/10000115/','https://thumbnail.image.rakuten.co.jp/@0_mall/akagimeihan/cabinet/mem_item/1bn714.jpg?_ex=128x128'),
  (20,'新潟ブランドいちご 越後姫 2Lサイズ 24〜30個入（約800g）（有）安田興和農事【果物/苺/いちご/えちごひめ/ブランド苺/新潟県産/新潟/プチギフト】【送料無料】','淡雪のように柔らかく、甘くジューシーな果肉が特徴の新潟ブランド苺「越後姫」！選りすぐりの完熟苺を厳選し、可愛らしいパッケージに入れてお届けします！',6400,'商品説明 内容 越後姫 2Lサイズ 24〜30個入（約800g） 賞味期限 到着後、お早めにお召し上がり下さい 保存方法 要冷蔵 配送方法 ヤマト運輸（クール冷蔵便） 返品交換 生鮮品・食品などの商品','https://item.rakuten.co.jp/niigata-shop/0205-001-01/','https://thumbnail.image.rakuten.co.jp/@0_mall/niigata-shop/cabinet/item/0205/0205-001-01.jpg?_ex=128'),
  (21,'【●日本製】新潟県燕三条製 鉄製 注ぎやすい天ぷら鍋 22cm （専用温度計付） 幅広の注ぎ口 湯切りアミ付 オール熱源対応 ガス火 IH対応 鉄製天ぷら鍋 パール金属 【RCP】【HB-1893】','幅広注ぎ口で液ダレしにくく湯切れの良い日本性の鉄製天ぷら鍋天麩羅 天婦羅 てんぷら 鍋 揚げ物 両手鍋 鉄鍋 天ぷら おすすめ',1987,'商品情報 新潟県燕三条製の鉄製天ぷら鍋！ ものづくり産地、新潟県燕三条産の天ぷら鍋です。鉄製で長く使え、鉄分も補給できます。湯切りアミや幅広の注ぎ口で使いやすくなった天ぷら鍋です。 ●使えば使う程自分','https://item.rakuten.co.jp/goodlifeshop/phb-1893/','https://thumbnail.image.rakuten.co.jp/@0_mall/goodlifeshop/cabinet/kitchen6/4549308518931-001.gif?_e'),
  (22,'新潟産コシヒカリ 山並 玄米 30年産 米 25kg 【送料無料】(北海道、九州、沖縄除く)','新潟産 コシヒカリ 山並 玄米 25kg 送料無料 小分け対応 あす楽_土曜営業 16:00まで即日発送【ラッキーシール対応】',9950,'こちらの商品は各サイズございます 5kg│ 10kg│ 25kg│ 30kg ご購入の前にお読みください 食品表示 名　　称 玄米 産　　地 新潟県産 品　　種 コシヒカリ 使 用 割 合 単一原料米','https://item.rakuten.co.jp/imagi/yamanami25/','https://thumbnail.image.rakuten.co.jp/@0_mall/imagi/cabinet/item01/03/002/2018yama_25kg.jpg?_ex=128x'),
  (23,'オタフク 新潟 甘辛タレかつ丼のたれ(1.2kg)','税抜2500円以上で送料無料（北海道・沖縄除く） / オタフク 新潟 甘辛タレかつ丼のたれ',864,'お店TOP＞フード＞フード その他＞フード その他＞オタフク 新潟 甘辛タレかつ丼のたれ (1.2kg)税抜2500円以上で送料無料（北海道・沖縄除く）【オタフク 新潟 甘辛タレかつ丼のたれの商品詳細','https://item.rakuten.co.jp/rakuten24/4970077175238/','https://thumbnail.image.rakuten.co.jp/@0_mall/rakuten24/cabinet/238/4970077175238.jpg?_ex=128x128'),
  (24,'30年産　【送料無料】　新潟県産コシヒカリ10Kg【あす楽対応_東北】【あす楽対応_関東】【あす楽対応_甲信越】【あす楽対応_北陸】【あす楽対応_東海】【あす楽対応_近畿】【あす楽対応_中国】','30年産　コシヒカリ　新潟　新潟の定番のお米　',5250,'※配送日、ご指定可能です。 ※発送先が、沖縄は、別途送料1000円かかります。当店からの受注完了メール時に、加算させて頂きます。予めご了承ください。 内容量 5Kg×2 年　 産 30年度産 産　 地','https://item.rakuten.co.jp/auc-komekome/10000448/','https://thumbnail.image.rakuten.co.jp/@0_mall/auc-komekome/cabinet/1000/imgrc0082147192.jpg?_ex=128x'),
  (25,'【冷蔵】[まとめ買い] なると巻 赤×10本 | 一正蒲鉾 いちまさ おかず お弁当 おつまみ 鍋 煮物 炒め物 チャーハン ラーメン 茶碗蒸し 国内生産 新潟産 保存料 未使用 無添加','様々な料理に利用でき、日持ちが良いので買い置きしておくと便利ななると巻です。麺類の添え物として、またおでんや鍋物、炒め物、チャーハンなどいろいろな料理にご利用頂けます。',2322,'商品特長 ●魚肉の食感を生かし、コシのある商品に仕上げました。 ●ベーシックな年間商品として、様々な料理に利用できる商品です。 ●真空包装で日持ちがよいので便利な買い置きが出来る商品です。 ●保存料は','https://item.rakuten.co.jp/ichimasa/n-191/','https://thumbnail.image.rakuten.co.jp/@0_mall/ichimasa/cabinet/1bn804.jpg?_ex=128x128'),
  (26,'菱湖【りょうこ】 30BY 山酒4号 純米大吟醸 なつのさけ 1800ml 【日本酒/新潟県/峰乃白梅酒造】【要冷蔵商品】','【膨らみのある滑らかな味わい】',3240,'ギフト対応 「菱湖（りょうこ）　純米大吟醸なつのさけ　山酒4号　720ml」の商品ページ 　「菱湖【りょうこ】　純米大吟醸なつのさけ　山酒4号」は 「山田錦」と「金紋錦」の交配種である「山酒4号」を原','https://item.rakuten.co.jp/b-miyoshi/ryou-natu-1800/','https://thumbnail.image.rakuten.co.jp/@0_mall/b-miyoshi/cabinet/ryouko/ryou-banner/ryou-natu-1800sq.'),
  (27,'【2580円】21日14時59分まで！お試し300円OFFクーポン＊＊＊【送料無料 あす楽】米 新潟産 コシヒカリ 5kg 送料無料 (北海道、九州、沖縄を除く) 新潟県産 30年産 白米 玄米 無洗','新潟白米デイリーランキング1位獲得！ あす楽対応',2880,'お試し価格！今だけ使える！21日14時59分まで。 新潟5kg 特価クーポン。 上記バナーをタップしてクーポンを獲得してください。 ▼商品 ●名称：精米 ●産地：新潟県 ●品種：コシヒカリ ●産年：平','https://item.rakuten.co.jp/farmex/b-hiba-05-00/','https://thumbnail.image.rakuten.co.jp/@0_mall/farmex/cabinet/niiga-shared/hiba-05_th-01.jpg?_ex=128x'),
  (28,'新潟県長岡産コシヒカリ 玄米 30年産 米 25kg 【送料無料】(北海道、九州、沖縄除く)','長岡産 コシヒカリ 玄米 25kg 送料無料 小分け対応 あす楽_土曜営業 16:00まで即日発送【ラッキーシール対応】',10500,'こちらの商品は各サイズございます 5kg│ 10kg│ 25kg│ 30kg ご購入の前にお読みください 食品表示 名　　称 玄米 産　　地 新潟県長岡地区 品　　種 コシヒカリ 使 用 割 合 単一','https://item.rakuten.co.jp/imagi/nagaoka25/','https://thumbnail.image.rakuten.co.jp/@0_mall/imagi/cabinet/item01/03/002/2018yama_25kg.jpg?_ex=128x'),
  (29,'あす楽 父の日プレゼント お酒 送料無料 純米大吟醸 日本酒 飲み比べセット 極み 辛口 300ml 3本 大吟醸 ミニボトル 新潟 お酒 飲み比べ [ 父の日 グルメ 誕生日 プレゼント 内祝い 定','父の日プレゼント ギフト 送料無料',3980,'ギフト対応について お得なまとめ買い 「能作」の酒器を同時購入で酒器の送料も無料！ ※その他の酒器（九谷焼など）は別途送料 ＞＞能作の酒器はこちらをクリック＜＜ 蔵直酒屋 方舟オリジナル飲み比べセット','https://item.rakuten.co.jp/hakobune/sake-a-003-007/','https://thumbnail.image.rakuten.co.jp/@0_mall/hakobune/cabinet/original/imgrc0082141068.jpg?_ex=128x');