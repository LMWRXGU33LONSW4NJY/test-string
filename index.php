<?php
$announcements = [
    ['title' => 'Yaz Sezonu İndirimi', 'desc' => '%40\'a varan indirimlerle yeni sezon sneaker modellerini keşfedin.', 'cta' => 'Kampanyayı İncele'],
    ['title' => '2 Al 1 Öde Kampanyası', 'desc' => 'Seçili günlük ayakkabı modellerinde sepette anında 2 al 1 öde fırsatı.', 'cta' => 'Fırsatı Yakala'],
    ['title' => 'Ücretsiz Kargo', 'desc' => '750 TL ve üzeri tüm siparişlerde ücretsiz kargo avantajı seni bekliyor.', 'cta' => 'Alışverişe Başla'],
];

$filters = [
    'Kategori' => ['Sneaker', 'Koşu', 'Klasik', 'Outdoor', 'Sandalet'],
    'Numara' => ['36', '37', '38', '39', '40', '41', '42', '43'],
    'Renk' => ['Siyah', 'Beyaz', 'Gri', 'Mavi', 'Bej'],
    'Fiyat Aralığı' => ['0 - 999 TL', '1000 - 1999 TL', '2000 - 2999 TL', '3000+ TL'],
];

$products = [
    ['name' => 'Urban Flex Pro', 'price' => '2.499 TL', 'tag' => 'Yeni'],
    ['name' => 'Street Motion X', 'price' => '1.899 TL', 'tag' => 'Çok Satan'],
    ['name' => 'Active Run Lite', 'price' => '2.099 TL', 'tag' => 'Koşu'],
    ['name' => 'Classic Mono Leather', 'price' => '2.799 TL', 'tag' => 'Premium'],
    ['name' => 'Trail Guard Outdoor', 'price' => '3.199 TL', 'tag' => 'Outdoor'],
    ['name' => 'Cloud Walk Daily', 'price' => '1.599 TL', 'tag' => 'Rahat'],
];

$corporateLinks = ['İletişim', 'S.S.S', 'Hakkımızda', 'KVKK', 'Mesafeli Satış Sözleşmesi', 'Gizlilik ve Kullanım Şartları'];
$accountLinks = ['Giriş Yap', 'Kayıt Ol', 'Sipariş Takibi'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepNova | Modern Ayakkabı Satış Teması</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="site-header">
        <div class="top-strip">
            <p class="top-strip__text">Bugüne özel: Sepette ekstra %10 indirim kodu: <strong>STEPNOVA10</strong></p>
        </div>
        <div class="nav-wrapper container">
            <a href="#" class="brand">StepNova</a>
            <nav class="main-nav">
                <a href="#">Kadın</a>
                <a href="#">Erkek</a>
                <a href="#">Çocuk</a>
                <a href="#">Yeni Gelenler</a>
                <a href="#">Kampanyalar</a>
            </nav>
            <div class="account-dropdown">
                <button class="account-dropdown__toggle">Hesabım ▾</button>
                <ul class="account-dropdown__menu">
                    <?php foreach ($accountLinks as $item): ?>
                        <li><a href="#"><?php echo htmlspecialchars($item); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="hero-slider" aria-label="Duyuru ve Kampanya Slider">
            <?php foreach ($announcements as $index => $slide): ?>
                <article class="hero-slide <?php echo $index === 0 ? 'is-active' : ''; ?>">
                    <h1><?php echo htmlspecialchars($slide['title']); ?></h1>
                    <p><?php echo htmlspecialchars($slide['desc']); ?></p>
                    <a href="#" class="btn-primary"><?php echo htmlspecialchars($slide['cta']); ?></a>
                </article>
            <?php endforeach; ?>
            <div class="slider-dots">
                <?php foreach ($announcements as $index => $slide): ?>
                    <button class="slider-dot <?php echo $index === 0 ? 'is-active' : ''; ?>" data-slide="<?php echo $index; ?>"></button>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="catalog-layout">
            <aside class="filter-panel">
                <h2>Ürün Filtreleme</h2>
                <?php foreach ($filters as $title => $items): ?>
                    <div class="filter-group">
                        <h3><?php echo htmlspecialchars($title); ?></h3>
                        <?php foreach ($items as $item): ?>
                            <label class="checkbox-item">
                                <input type="checkbox" name="filter_<?php echo strtolower(str_replace(' ', '_', $title)); ?>[]" value="<?php echo htmlspecialchars($item); ?>">
                                <span><?php echo htmlspecialchars($item); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
                <button class="btn-primary btn-block">Filtreyi Uygula</button>
            </aside>

            <div class="product-area">
                <div class="product-area__header">
                    <h2>Ayakkabılar</h2>
                    <select>
                        <option>Önerilen Sıralama</option>
                        <option>Fiyat (Artan)</option>
                        <option>Fiyat (Azalan)</option>
                        <option>En Yeni</option>
                    </select>
                </div>

                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <article class="product-card">
                            <div class="product-card__image"><?php echo htmlspecialchars($product['name']); ?></div>
                            <span class="product-card__tag"><?php echo htmlspecialchars($product['tag']); ?></span>
                            <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p class="product-card__price"><?php echo htmlspecialchars($product['price']); ?></p>
                            <button class="btn-secondary">Sepete Ekle</button>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <section>
                <h4>Kurumsal</h4>
                <ul>
                    <?php foreach ($corporateLinks as $link): ?>
                        <li><a href="#"><?php echo htmlspecialchars($link); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section>
                <h4>Hesabım</h4>
                <ul>
                    <?php foreach ($accountLinks as $item): ?>
                        <li><a href="#"><?php echo htmlspecialchars($item); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section>
                <h4>Bültene Katıl</h4>
                <p>Kampanya ve yeni ürün duyurularını ilk sen öğren.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="E-posta adresin">
                    <button type="submit" class="btn-primary">Katıl</button>
                </form>
            </section>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
