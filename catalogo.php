<?php

function pc_fusion_catalogo_base(): array
{
    return [
        'CPU' => [
            'descricao' => 'Processadores Intel e AMD para jogos, trabalho e upgrades.',
            'ordem' => 1,
            'icone' => 'fa-microchip',
            'pecas' => [
                ['nome' => 'Intel Core i9 14900K', 'descricao' => 'CPU Intel topo de linha para jogos, streaming e produtividade pesada.', 'especificacoes' => 'Socket LGA1700 | 24 núcleos | DDR5 | TDP 253W', 'preco' => 'R$ 3.800 - R$ 4.800'],
                ['nome' => 'Intel Core i7 14700K', 'descricao' => 'Processador forte para jogos competitivos, edição e multitarefa.', 'especificacoes' => 'Socket LGA1700 | 20 núcleos | DDR5 | TDP 253W', 'preco' => 'R$ 2.600 - R$ 3.500'],
                ['nome' => 'Intel Core i5 14600K', 'descricao' => 'Excelente equilíbrio para builds gamer de alto desempenho.', 'especificacoes' => 'Socket LGA1700 | 14 núcleos | DDR5 | TDP 181W', 'preco' => 'R$ 1.700 - R$ 2.300'],
                ['nome' => 'Intel Core i5 13400F', 'descricao' => 'Custo-benefício para jogos com placa de vídeo dedicada.', 'especificacoes' => 'Socket LGA1700 | 10 núcleos | DDR4/DDR5 | TDP 65W', 'preco' => 'R$ 900 - R$ 1.300'],
                ['nome' => 'Intel Core i5 12400F', 'descricao' => 'Opção popular para PCs gamer de entrada e intermediários.', 'especificacoes' => 'Socket LGA1700 | 6 núcleos | DDR4/DDR5 | TDP 65W', 'preco' => 'R$ 650 - R$ 950'],
                ['nome' => 'Intel Core i5 9400F', 'descricao' => 'Processador usado de 9ª geração para PC gamer econômico com GPU dedicada.', 'especificacoes' => 'Socket LGA1151v2 | 6 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 280 - R$ 450'],
                ['nome' => 'Intel Core i5 8400', 'descricao' => 'i5 de 8ª geração ainda bom para e-sports e upgrades baratos.', 'especificacoes' => 'Socket LGA1151v2 | 6 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 230 - R$ 380'],
                ['nome' => 'Intel Core i3 8100', 'descricao' => 'Entrada LGA1151v2 para uso geral e jogos leves.', 'especificacoes' => 'Socket LGA1151v2 | 4 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 160 - R$ 280'],
                ['nome' => 'Intel Core i5 7500', 'descricao' => 'i5 de 7ª geração para builds usadas com baixo custo.', 'especificacoes' => 'Socket LGA1151v1 | 4 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 180 - R$ 320'],
                ['nome' => 'Intel Core i5 7400', 'descricao' => 'Opção barata para escritório, estudos e jogos leves.', 'especificacoes' => 'Socket LGA1151v1 | 4 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 150 - R$ 280'],
                ['nome' => 'Intel Core i5 6500', 'descricao' => 'Processador Skylake usado para PCs simples e upgrades de baixo orçamento.', 'especificacoes' => 'Socket LGA1151v1 | 4 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 130 - R$ 240'],
                ['nome' => 'Intel Core i5 4590', 'descricao' => 'i5 DDR3 popular para montar PC muito barato.', 'especificacoes' => 'Socket LGA1150 | 4 núcleos | DDR3 | TDP 84W', 'preco' => 'R$ 90 - R$ 170'],
                ['nome' => 'Intel Core i5 4460', 'descricao' => 'Opção Haswell econômica para tarefas básicas e jogos antigos.', 'especificacoes' => 'Socket LGA1150 | 4 núcleos | DDR3 | TDP 84W', 'preco' => 'R$ 80 - R$ 150'],
                ['nome' => 'Intel Core i3 4170', 'descricao' => 'CPU simples para PC de entrada, estudos e navegação.', 'especificacoes' => 'Socket LGA1150 | 2 núcleos / 4 threads | DDR3 | TDP 54W', 'preco' => 'R$ 50 - R$ 100'],
                ['nome' => 'AMD Ryzen 9 9950X', 'descricao' => 'Processador AM5 para criação, renderização e multitarefa pesada.', 'especificacoes' => 'Socket AM5 | 16 núcleos | DDR5 | TDP 170W', 'preco' => 'R$ 4.000 - R$ 5.500'],
                ['nome' => 'AMD Ryzen 7 9800X3D', 'descricao' => 'CPU gamer com cache 3D para alto FPS.', 'especificacoes' => 'Socket AM5 | 8 núcleos | DDR5 | TDP 120W', 'preco' => 'R$ 3.000 - R$ 4.200'],
                ['nome' => 'AMD Ryzen 7 7800X3D', 'descricao' => 'Um dos processadores mais desejados para jogos.', 'especificacoes' => 'Socket AM5 | 8 núcleos | DDR5 | TDP 120W', 'preco' => 'R$ 2.400 - R$ 3.400'],
                ['nome' => 'AMD Ryzen 5 7600', 'descricao' => 'Base AM5 eficiente para PC gamer atual.', 'especificacoes' => 'Socket AM5 | 6 núcleos | DDR5 | TDP 65W', 'preco' => 'R$ 950 - R$ 1.300'],
                ['nome' => 'AMD Ryzen 7 5700X3D', 'descricao' => 'Upgrade AM4 muito forte para jogos.', 'especificacoes' => 'Socket AM4 | 8 núcleos | DDR4 | TDP 105W', 'preco' => 'R$ 1.300 - R$ 1.900'],
                ['nome' => 'AMD Ryzen 5 5600', 'descricao' => 'Custo-benefício clássico para plataforma AM4.', 'especificacoes' => 'Socket AM4 | 6 núcleos | DDR4 | TDP 65W', 'preco' => 'R$ 600 - R$ 850'],
                ['nome' => 'AMD Ryzen 3 3200G', 'descricao' => 'APU AM4 barata com vídeo integrado para PC sem placa de vídeo.', 'especificacoes' => 'Socket AM4 | 4 núcleos | DDR4 | TDP 65W | Vega integrada', 'preco' => 'R$ 250 - R$ 400'],
                ['nome' => 'AMD Athlon 3000G', 'descricao' => 'Processador AM4 muito econômico para uso básico.', 'especificacoes' => 'Socket AM4 | 2 núcleos / 4 threads | DDR4 | TDP 35W | Vega integrada', 'preco' => 'R$ 120 - R$ 220'],
            ],
        ],
        'Placa-mãe' => [
            'descricao' => 'Placas com chipsets Intel e AMD para DDR4 e DDR5.',
            'ordem' => 2,
            'icone' => 'fa-chess-board',
            'pecas' => [
                ['nome' => 'ASUS ROG Z790-E', 'descricao' => 'Placa Intel premium para processadores LGA1700.', 'especificacoes' => 'LGA1700 | Z790 | DDR5 | ATX | PCIe 5.0', 'preco' => 'R$ 2.500 - R$ 3.600'],
                ['nome' => 'MSI MPG Z790 EDGE WIFI', 'descricao' => 'Modelo gamer com Wi-Fi e boa alimentação.', 'especificacoes' => 'LGA1700 | Z790 | DDR5 | ATX | Wi-Fi', 'preco' => 'R$ 2.100 - R$ 3.000'],
                ['nome' => 'Gigabyte B760 AORUS Elite AX', 'descricao' => 'Placa Intel equilibrada para builds sem overclock.', 'especificacoes' => 'LGA1700 | B760 | DDR5 | ATX | Wi-Fi', 'preco' => 'R$ 1.200 - R$ 1.800'],
                ['nome' => 'ASUS TUF Gaming B660M-Plus', 'descricao' => 'Opção DDR4 confiável para Intel 12ª a 14ª geração.', 'especificacoes' => 'LGA1700 | B660 | DDR4 | mATX', 'preco' => 'R$ 800 - R$ 1.200'],
                ['nome' => 'ASUS TUF X870-E', 'descricao' => 'Placa AM5 robusta para Ryzen atuais.', 'especificacoes' => 'AM5 | X870 | DDR5 | ATX | PCIe 5.0', 'preco' => 'R$ 2.800 - R$ 4.000'],
                ['nome' => 'MSI MPG X870-E EDGE WIFI', 'descricao' => 'Placa AM5 premium com conectividade moderna.', 'especificacoes' => 'AM5 | X870E | DDR5 | ATX | Wi-Fi', 'preco' => 'R$ 3.000 - R$ 4.400'],
                ['nome' => 'Gigabyte B850 AORUS ELITE', 'descricao' => 'Base AM5 atual para Ryzen com bom custo-benefício.', 'especificacoes' => 'AM5 | B850 | DDR5 | ATX | PCIe 5.0', 'preco' => 'R$ 1.600 - R$ 2.400'],
                ['nome' => 'MSI B650 Tomahawk WiFi', 'descricao' => 'Placa AM5 muito sólida para Ryzen 7000 e 9000.', 'especificacoes' => 'AM5 | B650 | DDR5 | ATX | Wi-Fi', 'preco' => 'R$ 1.500 - R$ 2.200'],
                ['nome' => 'ASUS TUF B550M-Plus', 'descricao' => 'Placa AM4 confiável para Ryzen 3000 e 5000.', 'especificacoes' => 'AM4 | B550 | DDR4 | mATX | PCIe 4.0', 'preco' => 'R$ 650 - R$ 950'],
                ['nome' => 'Gigabyte B550M AORUS Elite', 'descricao' => 'Modelo AM4 compacto para upgrades custo-benefício.', 'especificacoes' => 'AM4 | B550 | DDR4 | mATX', 'preco' => 'R$ 600 - R$ 900'],
                ['nome' => 'ASUS Prime H310M-E', 'descricao' => 'Placa barata para Intel 8ª/9ª geração.', 'especificacoes' => 'LGA1151v2 | H310 | DDR4 | mATX', 'preco' => 'R$ 220 - R$ 380'],
                ['nome' => 'Gigabyte H310M M.2', 'descricao' => 'Base econômica LGA1151v2 com suporte a SSD M.2.', 'especificacoes' => 'LGA1151v2 | H310 | DDR4 | mATX | M.2', 'preco' => 'R$ 240 - R$ 420'],
                ['nome' => 'ASUS Prime B250M-K', 'descricao' => 'Placa de entrada para Intel 6ª/7ª geração.', 'especificacoes' => 'LGA1151v1 | B250 | DDR4 | mATX', 'preco' => 'R$ 180 - R$ 320'],
                ['nome' => 'Gigabyte GA-H110M-H', 'descricao' => 'Placa básica para builds usadas com i5 6ª/7ª geração.', 'especificacoes' => 'LGA1151v1 | H110 | DDR4 | mATX', 'preco' => 'R$ 150 - R$ 280'],
                ['nome' => 'ASUS H81M-C', 'descricao' => 'Placa DDR3 barata para Intel 4ª geração.', 'especificacoes' => 'LGA1150 | H81 | DDR3 | mATX', 'preco' => 'R$ 140 - R$ 260'],
                ['nome' => 'Gigabyte GA-B85M-D3PH', 'descricao' => 'Placa LGA1150 usada com mais recursos que H81.', 'especificacoes' => 'LGA1150 | B85 | DDR3 | mATX', 'preco' => 'R$ 180 - R$ 320'],
            ],
        ],
        'RAM' => [
            'descricao' => 'Memórias DDR4 e DDR5 para diferentes orçamentos.',
            'ordem' => 3,
            'icone' => 'fa-memory',
            'pecas' => [
                ['nome' => 'Corsair Vengeance DDR4 32GB', 'descricao' => 'Kit DDR4 estável para jogos e produtividade.', 'especificacoes' => '32GB | 2x16GB | 3600MHz | DDR4', 'preco' => 'R$ 450 - R$ 650'],
                ['nome' => 'Kingston FURY Beast DDR4 16GB', 'descricao' => 'Memória DDR4 para builds econômicas.', 'especificacoes' => '16GB | 2x8GB | 3200MHz | DDR4', 'preco' => 'R$ 230 - R$ 350'],
                ['nome' => 'Kingston DDR4 8GB 2666MHz', 'descricao' => 'Módulo simples para PC usado de 6ª a 9ª geração.', 'especificacoes' => '8GB | 2666MHz | DDR4', 'preco' => 'R$ 70 - R$ 120'],
                ['nome' => 'Crucial DDR4 16GB 2666MHz', 'descricao' => 'Memória DDR4 barata para upgrades de escritório e jogos leves.', 'especificacoes' => '16GB | 2666MHz | DDR4', 'preco' => 'R$ 130 - R$ 220'],
                ['nome' => 'Kingston DDR3 8GB 1600MHz', 'descricao' => 'Memória DDR3 para plataformas LGA1150 antigas.', 'especificacoes' => '8GB | 1600MHz | DDR3', 'preco' => 'R$ 45 - R$ 80'],
                ['nome' => 'Corsair Vengeance DDR3 16GB', 'descricao' => 'Kit DDR3 para dar fôlego a PCs de 4ª geração.', 'especificacoes' => '16GB | 2x8GB | 1600MHz | DDR3', 'preco' => 'R$ 110 - R$ 180'],
                ['nome' => 'G.Skill Trident Z5 DDR5 32GB', 'descricao' => 'Kit DDR5 de alta frequência para PCs gamer.', 'especificacoes' => '32GB | 2x16GB | 6000MHz | DDR5', 'preco' => 'R$ 700 - R$ 1.000'],
                ['nome' => 'Corsair DOMINATOR PLATINUM DDR5', 'descricao' => 'Memória premium com visual sofisticado.', 'especificacoes' => '32GB | 5600MHz | DDR5 | RGB', 'preco' => 'R$ 850 - R$ 1.300'],
                ['nome' => 'Kingston FURY Beast DDR5 32GB', 'descricao' => 'Kit DDR5 com ótimo equilíbrio de preço e desempenho.', 'especificacoes' => '32GB | 6000MHz | DDR5', 'preco' => 'R$ 620 - R$ 900'],
                ['nome' => 'XPG Lancer RGB DDR5 32GB', 'descricao' => 'Memória DDR5 com RGB para setups gamer.', 'especificacoes' => '32GB | 6000MHz | DDR5 | RGB', 'preco' => 'R$ 650 - R$ 950'],
            ],
        ],
        'GPU' => [
            'descricao' => 'Placas de vídeo NVIDIA e AMD para 1080p, 1440p e 4K.',
            'ordem' => 4,
            'icone' => 'fa-desktop',
            'pecas' => [
                ['nome' => 'NVIDIA RTX 4090', 'descricao' => 'GPU extrema para 4K, IA, renderização e workstation.', 'especificacoes' => '24GB GDDR6X | TDP 450W | 4K Ultra', 'preco' => 'R$ 10.000 - R$ 15.000'],
                ['nome' => 'NVIDIA RTX 4080 SUPER', 'descricao' => 'Placa premium para 4K com alto desempenho.', 'especificacoes' => '16GB GDDR6X | TDP 320W | 4K', 'preco' => 'R$ 6.500 - R$ 9.000'],
                ['nome' => 'NVIDIA RTX 4070 Ti SUPER', 'descricao' => 'GPU forte para 1440p ultra e 4K equilibrado.', 'especificacoes' => '16GB GDDR6X | TDP 285W | 1440p/4K', 'preco' => 'R$ 4.500 - R$ 6.000'],
                ['nome' => 'NVIDIA RTX 4070 SUPER', 'descricao' => 'Excelente escolha para 1440p.', 'especificacoes' => '12GB GDDR6X | TDP 220W | 1440p', 'preco' => 'R$ 3.400 - R$ 4.600'],
                ['nome' => 'NVIDIA RTX 4060 Ti', 'descricao' => 'Placa eficiente para 1080p alto e 1440p moderado.', 'especificacoes' => '8GB GDDR6 | TDP 160W | 1080p/1440p', 'preco' => 'R$ 2.200 - R$ 3.000'],
                ['nome' => 'NVIDIA RTX 4060', 'descricao' => 'Entrada moderna com baixo consumo.', 'especificacoes' => '8GB GDDR6 | TDP 115W | 1080p', 'preco' => 'R$ 1.600 - R$ 2.200'],
                ['nome' => 'AMD RX 7900 XTX', 'descricao' => 'GPU AMD topo para 4K e muita VRAM.', 'especificacoes' => '24GB GDDR6 | TDP 355W | 4K', 'preco' => 'R$ 5.500 - R$ 7.500'],
                ['nome' => 'AMD RX 7900 XT', 'descricao' => 'Placa forte para 4K com boa relação preço/desempenho.', 'especificacoes' => '20GB GDDR6 | TDP 315W | 4K', 'preco' => 'R$ 4.300 - R$ 5.800'],
                ['nome' => 'AMD RX 7800 XT', 'descricao' => 'Ótima para 1440p com bastante VRAM.', 'especificacoes' => '16GB GDDR6 | TDP 263W | 1440p', 'preco' => 'R$ 3.000 - R$ 4.000'],
                ['nome' => 'AMD RX 7600', 'descricao' => 'Opção AMD para jogos em 1080p.', 'especificacoes' => '8GB GDDR6 | TDP 165W | 1080p', 'preco' => 'R$ 1.400 - R$ 1.900'],
                ['nome' => 'AMD RX 580', 'descricao' => 'Placa usada popular para 1080p econômico.', 'especificacoes' => '8GB GDDR5 | TDP 185W | 1080p', 'preco' => 'R$ 350 - R$ 600'],
                ['nome' => 'AMD RX 570', 'descricao' => 'GPU barata para e-sports e jogos em Full HD ajustado.', 'especificacoes' => '4GB/8GB GDDR5 | TDP 150W | 1080p', 'preco' => 'R$ 300 - R$ 500'],
                ['nome' => 'AMD RX 560', 'descricao' => 'Placa de entrada para jogos leves e PCs simples.', 'especificacoes' => '4GB GDDR5 | TDP 75W | 1080p baixo', 'preco' => 'R$ 220 - R$ 350'],
                ['nome' => 'AMD RX 550', 'descricao' => 'GPU bem barata para vídeo, jogos leves e upgrade de PC básico.', 'especificacoes' => '2GB/4GB GDDR5 | TDP 50W | Jogos leves', 'preco' => 'R$ 180 - R$ 300'],
                ['nome' => 'NVIDIA GTX 1650', 'descricao' => 'Placa econômica e fria para Full HD.', 'especificacoes' => '4GB GDDR5/GDDR6 | TDP 75W | 1080p', 'preco' => 'R$ 500 - R$ 800'],
                ['nome' => 'NVIDIA GTX 1050 Ti', 'descricao' => 'GPU usada com baixo consumo para PCs sem fonte forte.', 'especificacoes' => '4GB GDDR5 | TDP 75W | 1080p baixo/médio', 'preco' => 'R$ 350 - R$ 550'],
                ['nome' => 'NVIDIA GT 1030', 'descricao' => 'Placa simples para vídeo, estudos e jogos muito leves.', 'especificacoes' => '2GB GDDR5 | TDP 30W | Entrada', 'preco' => 'R$ 220 - R$ 350'],
            ],
        ],
        'SSD' => [
            'descricao' => 'SSDs NVMe e SATA para sistema, jogos e arquivos.',
            'ordem' => 5,
            'icone' => 'fa-hard-drive',
            'pecas' => [
                ['nome' => 'Samsung 990 Pro NVMe 1TB', 'descricao' => 'SSD NVMe premium para sistema e jogos.', 'especificacoes' => 'NVMe PCIe 4.0 | 1TB | até 7450MB/s', 'preco' => 'R$ 600 - R$ 900'],
                ['nome' => 'Kingston KC3000 NVMe 2TB', 'descricao' => 'Alta capacidade e desempenho para biblioteca grande.', 'especificacoes' => 'NVMe PCIe 4.0 | 2TB | até 7000MB/s', 'preco' => 'R$ 900 - R$ 1.300'],
                ['nome' => 'WD Black SN850X NVMe 1TB', 'descricao' => 'SSD rápido voltado para games.', 'especificacoes' => 'NVMe PCIe 4.0 | 1TB | até 7300MB/s', 'preco' => 'R$ 580 - R$ 850'],
                ['nome' => 'Kingston NV2 NVMe 1TB', 'descricao' => 'NVMe custo-benefício para upgrades.', 'especificacoes' => 'NVMe PCIe 4.0 | 1TB', 'preco' => 'R$ 330 - R$ 480'],
                ['nome' => 'Crucial MX500 SATA 1TB', 'descricao' => 'SSD SATA confiável para armazenamento secundário.', 'especificacoes' => 'SATA 2.5" | 1TB | até 560MB/s', 'preco' => 'R$ 350 - R$ 500'],
                ['nome' => 'Kingston A400 SATA 240GB', 'descricao' => 'SSD barato para tirar PC antigo do HD.', 'especificacoes' => 'SATA 2.5" | 240GB | até 500MB/s', 'preco' => 'R$ 90 - R$ 140'],
                ['nome' => 'Crucial BX500 SATA 480GB', 'descricao' => 'SSD de entrada com espaço suficiente para Windows e alguns jogos.', 'especificacoes' => 'SATA 2.5" | 480GB | até 540MB/s', 'preco' => 'R$ 150 - R$ 230'],
                ['nome' => 'WD Green SATA 480GB', 'descricao' => 'SSD simples para upgrade econômico.', 'especificacoes' => 'SATA 2.5" | 480GB', 'preco' => 'R$ 140 - R$ 220'],
            ],
        ],
        'Fonte' => [
            'descricao' => 'Fontes com margem de segurança para cada build.',
            'ordem' => 6,
            'icone' => 'fa-plug',
            'pecas' => [
                ['nome' => 'Corsair RM1000x SHIFT Gold', 'descricao' => 'Fonte premium para PCs high-end.', 'especificacoes' => '1000W | 80 Plus Gold | Modular | ATX 3.0', 'preco' => 'R$ 1.100 - R$ 1.600'],
                ['nome' => 'Corsair RM850x Gold', 'descricao' => 'Fonte 850W confiável para builds fortes.', 'especificacoes' => '850W | 80 Plus Gold | Modular', 'preco' => 'R$ 750 - R$ 1.100'],
                ['nome' => 'XPG Core Reactor 850W', 'descricao' => 'Fonte modular com excelente reputação.', 'especificacoes' => '850W | 80 Plus Gold | Modular', 'preco' => 'R$ 650 - R$ 900'],
                ['nome' => 'EVGA SuperNOVA 750W', 'descricao' => 'Boa opção para PCs intermediários.', 'especificacoes' => '750W | 80 Plus Gold', 'preco' => 'R$ 550 - R$ 800'],
                ['nome' => 'MSI MAG A650GL', 'descricao' => 'Fonte atual para builds com GPUs médias.', 'especificacoes' => '650W | 80 Plus Gold | ATX 3.0', 'preco' => 'R$ 420 - R$ 650'],
                ['nome' => 'Seasonic Focus GX-550', 'descricao' => 'Fonte eficiente para builds econômicas.', 'especificacoes' => '550W | 80 Plus Gold | Modular', 'preco' => 'R$ 380 - R$ 600'],
                ['nome' => 'Corsair CV450 Bronze', 'descricao' => 'Fonte simples para PCs com RX 550, GT 1030 ou GTX 1050 Ti.', 'especificacoes' => '450W | 80 Plus Bronze', 'preco' => 'R$ 230 - R$ 340'],
                ['nome' => 'PCYes Electro V2 500W', 'descricao' => 'Fonte nacional de entrada para builds econômicas.', 'especificacoes' => '500W | 80 Plus White/Bronze', 'preco' => 'R$ 200 - R$ 320'],
                ['nome' => 'Redragon RGPS 500W', 'descricao' => 'Fonte barata para PCs de baixo consumo.', 'especificacoes' => '500W | 80 Plus Bronze', 'preco' => 'R$ 220 - R$ 330'],
            ],
        ],
        'Cooler' => [
            'descricao' => 'Air coolers e water coolers para controlar temperatura.',
            'ordem' => 7,
            'icone' => 'fa-fan',
            'pecas' => [
                ['nome' => 'Cooler Master Hyper 212', 'descricao' => 'Air cooler clássico para CPUs intermediárias.', 'especificacoes' => 'Air cooler | 120mm | LGA1700/AM4/AM5', 'preco' => 'R$ 180 - R$ 280'],
                ['nome' => 'DeepCool AK400', 'descricao' => 'Cooler custo-benefício silencioso.', 'especificacoes' => 'Air cooler | 120mm | LGA1700/AM4/AM5', 'preco' => 'R$ 160 - R$ 260'],
                ['nome' => 'Noctua NH-D15', 'descricao' => 'Air cooler premium para alta performance.', 'especificacoes' => 'Dual tower | 140mm | LGA1700/AM4/AM5', 'preco' => 'R$ 700 - R$ 1.000'],
                ['nome' => 'Corsair H100i Elite', 'descricao' => 'Water cooler AIO para setups gamer.', 'especificacoes' => 'AIO líquido | 240mm | RGB', 'preco' => 'R$ 700 - R$ 1.100'],
                ['nome' => 'NZXT Kraken X73', 'descricao' => 'AIO 360mm para builds high-end.', 'especificacoes' => 'AIO líquido | 360mm | Display/RGB', 'preco' => 'R$ 1.000 - R$ 1.600'],
            ],
        ],
        'Gabinete' => [
            'descricao' => 'Gabinetes com fluxo de ar, vidro temperado e bom espaço interno.',
            'ordem' => 8,
            'icone' => 'fa-cube',
            'pecas' => [
                ['nome' => 'Corsair 4000D Airflow', 'descricao' => 'Gabinete ATX com excelente fluxo de ar.', 'especificacoes' => 'ATX | GPU até 360mm | Airflow', 'preco' => 'R$ 550 - R$ 800'],
                ['nome' => 'NZXT H510 Flow', 'descricao' => 'Visual limpo com boa ventilação frontal.', 'especificacoes' => 'ATX | GPU até 381mm | Vidro temperado', 'preco' => 'R$ 450 - R$ 700'],
                ['nome' => 'Lian Li Lancool 216', 'descricao' => 'Gabinete espaçoso para builds potentes.', 'especificacoes' => 'ATX | GPU até 392mm | Alto airflow', 'preco' => 'R$ 700 - R$ 1.000'],
                ['nome' => 'Montech Air 903 Max', 'descricao' => 'Ótimo custo-benefício com fans inclusas.', 'especificacoes' => 'ATX | GPU até 400mm | Fans ARGB', 'preco' => 'R$ 400 - R$ 650'],
                ['nome' => 'Lian Li PC-O11 Dynamic', 'descricao' => 'Gabinete premium para setups showcase.', 'especificacoes' => 'ATX | GPU até 360mm | Vidro duplo', 'preco' => 'R$ 900 - R$ 1.400'],
                ['nome' => 'Fractal Design Core 1000', 'descricao' => 'Gabinete compacto para builds mATX.', 'especificacoes' => 'Micro-ATX | GPU até 315mm', 'preco' => 'R$ 250 - R$ 400'],
                ['nome' => 'T-Dagger Cube', 'descricao' => 'Gabinete de entrada para builds mATX econômicas.', 'especificacoes' => 'Micro-ATX | GPU até 300mm | Compacto', 'preco' => 'R$ 160 - R$ 260'],
                ['nome' => 'Aerocool Bolt Mini', 'descricao' => 'Gabinete barato com visual gamer discreto.', 'especificacoes' => 'Micro-ATX | GPU até 318mm', 'preco' => 'R$ 180 - R$ 300'],
            ],
        ],
        'Monitor' => [
            'descricao' => 'Monitores gamer para alta taxa de atualização.',
            'ordem' => 9,
            'icone' => 'fa-tv',
            'pecas' => [
                ['nome' => 'LG UltraGear 27GN800-B', 'descricao' => 'Monitor QHD rápido para jogos competitivos.', 'especificacoes' => '27" | QHD | IPS | 144Hz | 1ms', 'preco' => 'R$ 1.300 - R$ 1.800'],
                ['nome' => 'Samsung Odyssey G5', 'descricao' => 'Monitor curvo para imersão em jogos.', 'especificacoes' => '27" | QHD | 165Hz | Curvo', 'preco' => 'R$ 1.200 - R$ 1.700'],
                ['nome' => 'AOC Hero 24G2', 'descricao' => 'Monitor 1080p muito popular para e-sports.', 'especificacoes' => '24" | Full HD | IPS | 144Hz', 'preco' => 'R$ 750 - R$ 1.050'],
                ['nome' => 'Alienware AW2724DM', 'descricao' => 'Monitor QHD premium com alta fluidez.', 'especificacoes' => '27" | QHD | IPS | 180Hz', 'preco' => 'R$ 2.000 - R$ 3.200'],
            ],
        ],
        'Teclado' => [
            'descricao' => 'Teclados mecânicos e compactos para setup gamer.',
            'ordem' => 10,
            'icone' => 'fa-keyboard',
            'pecas' => [
                ['nome' => 'Corsair K70 RGB', 'descricao' => 'Teclado mecânico premium com RGB.', 'especificacoes' => 'Mecânico | RGB | ABNT2/US | USB', 'preco' => 'R$ 650 - R$ 1.000'],
                ['nome' => 'Logitech G413', 'descricao' => 'Teclado mecânico discreto e resistente.', 'especificacoes' => 'Mecânico | Switch tátil | USB', 'preco' => 'R$ 300 - R$ 500'],
                ['nome' => 'Redragon Kumara K552', 'descricao' => 'Teclado mecânico custo-benefício.', 'especificacoes' => 'Mecânico | TKL | RGB', 'preco' => 'R$ 180 - R$ 280'],
                ['nome' => 'HyperX Alloy Origins Core', 'descricao' => 'Teclado compacto com construção sólida.', 'especificacoes' => 'Mecânico | TKL | RGB', 'preco' => 'R$ 420 - R$ 650'],
            ],
        ],
        'Mouse' => [
            'descricao' => 'Mouses com sensores precisos para jogos e produtividade.',
            'ordem' => 11,
            'icone' => 'fa-computer-mouse',
            'pecas' => [
                ['nome' => 'Logitech G502 Hero', 'descricao' => 'Mouse gamer com muitos botões e sensor preciso.', 'especificacoes' => '25K DPI | 11 botões | RGB', 'preco' => 'R$ 220 - R$ 350'],
                ['nome' => 'Razer DeathAdder V2', 'descricao' => 'Mouse ergonômico clássico para FPS.', 'especificacoes' => '20K DPI | Sensor óptico | Cabo Speedflex', 'preco' => 'R$ 230 - R$ 380'],
                ['nome' => 'Logitech G Pro X Superlight', 'descricao' => 'Mouse sem fio leve para competitivo.', 'especificacoes' => 'Wireless | 25K DPI | 63g', 'preco' => 'R$ 650 - R$ 950'],
                ['nome' => 'Redragon Cobra M711', 'descricao' => 'Mouse RGB acessível para setup gamer.', 'especificacoes' => '10K DPI | RGB | 7 botões', 'preco' => 'R$ 100 - R$ 160'],
            ],
        ],
        'Headset' => [
            'descricao' => 'Headsets e áudio para jogos, calls e streaming.',
            'ordem' => 12,
            'icone' => 'fa-headphones',
            'pecas' => [
                ['nome' => 'HyperX Cloud II', 'descricao' => 'Headset gamer confortável e conhecido.', 'especificacoes' => '7.1 virtual | USB/P2 | Microfone removível', 'preco' => 'R$ 350 - R$ 550'],
                ['nome' => 'Logitech G Pro X', 'descricao' => 'Headset com microfone Blue Voice.', 'especificacoes' => 'Drivers 50mm | USB | Blue Voice', 'preco' => 'R$ 600 - R$ 900'],
                ['nome' => 'Razer BlackShark V2', 'descricao' => 'Headset leve com bom isolamento.', 'especificacoes' => 'Drivers 50mm | USB/P2 | Microfone cardioide', 'preco' => 'R$ 380 - R$ 650'],
            ],
        ],
        'Acessório' => [
            'descricao' => 'Itens extras para streaming, organização e setup.',
            'ordem' => 13,
            'icone' => 'fa-gamepad',
            'pecas' => [
                ['nome' => 'Elgato Stream Deck Mini', 'descricao' => 'Controle compacto para lives e produtividade.', 'especificacoes' => '6 teclas LCD | Mac/Windows | USB', 'preco' => 'R$ 450 - R$ 700'],
                ['nome' => 'Husky Mousepad Gaming XXL', 'descricao' => 'Mousepad grande para setups gamer.', 'especificacoes' => '900x400mm | Base emborrachada', 'preco' => 'R$ 70 - R$ 120'],
                ['nome' => 'Filtro de Linha iClamper Energia 5', 'descricao' => 'Proteção elétrica para PC e periféricos.', 'especificacoes' => '5 tomadas | DPS | Cabo 1m', 'preco' => 'R$ 70 - R$ 120'],
            ],
        ],
    ];
}

function pc_fusion_catalogo_key(string $valor): string
{
    $valor = trim($valor);

    return function_exists('mb_strtolower')
        ? mb_strtolower($valor, 'UTF-8')
        : strtolower($valor);
}

function pc_fusion_mesclar_peca(array $base, array $nova): array
{
    foreach ($nova as $chave => $valor) {
        if (($base[$chave] ?? '') === '' && $valor !== null && $valor !== '') {
            $base[$chave] = $valor;
        }
    }

    return $base;
}

function pc_fusion_catalogo(mysqli $conn = null, array $apenasCategorias = []): array
{
    $catalogo = pc_fusion_catalogo_base();

    if ($conn) {
        $query = "SELECT c.nome AS categoria_nome, c.descricao AS categoria_descricao, c.ordem, p.nome, p.descricao, p.especificacoes
                  FROM categorias c
                  LEFT JOIN pecas p ON p.categoria_id = c.id
                  ORDER BY c.ordem, p.nome";
        $result = $conn->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $categoriaNome = $row['categoria_nome'];

                if (!isset($catalogo[$categoriaNome])) {
                    $catalogo[$categoriaNome] = [
                        'descricao' => $row['categoria_descricao'] ?: 'Componentes para o seu setup.',
                        'ordem' => (int) $row['ordem'],
                        'icone' => 'fa-box',
                        'pecas' => [],
                    ];
                }

                if (!empty($row['nome'])) {
                    $peca = [
                        'nome' => $row['nome'],
                        'descricao' => $row['descricao'] ?: '',
                        'especificacoes' => $row['especificacoes'] ?: '',
                    ];

                    $encontrou = false;
                    foreach ($catalogo[$categoriaNome]['pecas'] as $index => $existente) {
                        if (pc_fusion_catalogo_key($existente['nome']) === pc_fusion_catalogo_key($peca['nome'])) {
                            $catalogo[$categoriaNome]['pecas'][$index] = pc_fusion_mesclar_peca($existente, $peca);
                            $encontrou = true;
                            break;
                        }
                    }

                    if (!$encontrou) {
                        $catalogo[$categoriaNome]['pecas'][] = $peca;
                    }
                }
            }
        }
    }

    if ($apenasCategorias) {
        $permitidas = array_flip($apenasCategorias);
        $catalogo = array_filter($catalogo, fn($categoria) => isset($permitidas[$categoria]), ARRAY_FILTER_USE_KEY);
    }

    uasort($catalogo, fn($a, $b) => ($a['ordem'] ?? 999) <=> ($b['ordem'] ?? 999));

    foreach ($catalogo as &$categoria) {
        usort($categoria['pecas'], fn($a, $b) => strnatcasecmp($a['nome'], $b['nome']));
    }
    unset($categoria);

    return $catalogo;
}

function pc_fusion_total_pecas(array $catalogo): int
{
    return array_reduce($catalogo, fn($total, $categoria) => $total + count($categoria['pecas']), 0);
}

function pc_fusion_preco_minimo(?string $preco): ?int
{
    if (!$preco || !preg_match('/(\d[\d\.]*)/', $preco, $matches)) {
        return null;
    }

    return (int) str_replace('.', '', $matches[1]);
}

function pc_fusion_faixa_preco(?int $precoMinimo): array
{
    if ($precoMinimo === null) {
        return ['slug' => 'sob-consulta', 'label' => 'Sob consulta'];
    }

    if ($precoMinimo <= 300) {
        return ['slug' => 'entrada', 'label' => 'Entrada'];
    }

    if ($precoMinimo <= 800) {
        return ['slug' => 'economica', 'label' => 'Econômica'];
    }

    if ($precoMinimo <= 2000) {
        return ['slug' => 'intermediaria', 'label' => 'Intermediária'];
    }

    return ['slug' => 'premium', 'label' => 'Premium'];
}

function pc_fusion_icone_categoria(string $categoria, array $dados = []): string
{
    $icones = [
        'CPU' => 'fa-microchip',
        'Placa-mãe' => 'fa-chess-board',
        'RAM' => 'fa-memory',
        'GPU' => 'fa-desktop',
        'SSD' => 'fa-hard-drive',
        'Fonte' => 'fa-plug',
        'Cooler' => 'fa-fan',
        'Gabinete' => 'fa-cube',
        'Monitor' => 'fa-tv',
        'Teclado' => 'fa-keyboard',
        'Mouse' => 'fa-computer-mouse',
        'Headset' => 'fa-headphones',
    ];

    return $dados['icone'] ?? ($icones[$categoria] ?? 'fa-box');
}
