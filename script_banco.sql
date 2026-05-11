-- script_banco.sql - Script para criar o banco de dados do PC Fusion
-- Copie e cole este código no phpMyAdmin para criar a estrutura

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` TEXT,
  `ordem` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `pecas` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `categoria_id` INT NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `descricao` TEXT,
  `especificacoes` TEXT,
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (categoria_id) REFERENCES categorias(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `videos` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `titulo` VARCHAR(200) NOT NULL,
  `categoria` VARCHAR(50) NOT NULL,
  `url_youtube` VARCHAR(255) NOT NULL,
  `descricao` TEXT,
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `desenvolvedores` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `funcao` VARCHAR(100),
  `descricao` TEXT,
  `foto` VARCHAR(255),
  `facebook` VARCHAR(255),
  `whatsapp` VARCHAR(20),
  `github` VARCHAR(255),
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir categorias de peças
INSERT INTO categorias (nome, descricao, ordem) VALUES
('CPU', 'Processadores', 1),
('Placa-mãe', 'Placas-mãe', 2),
('RAM', 'Memória RAM', 3),
('GPU', 'Placas de Vídeo', 4),
('SSD', 'Armazenamento SSD', 5),
('Fonte', 'Fontes de Alimentação', 6),
('Cooler', 'Coolers e Ventiladores', 7),
('Gabinete', 'Gabinetes', 8),
('Monitor', 'Monitores', 9),
('Teclado', 'Teclados', 10),
('Mouse', 'Mouses', 11),
('Headset', 'Headsets e áudio', 12),
('Acessório', 'Periféricos e acessórios', 13);

-- Inserir CPUs
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(1, 'Intel Core i9 14900K', 'Processador topo de linha Intel', 'Socket: LGA1700, Núcleos: 24, TDP: 125W'),
(1, 'Intel Core i9 14900KF', 'Processador Intel sem iGPU', 'Socket: LGA1700, Núcleos: 24, TDP: 125W'),
(1, 'Intel Core i7 14700K', 'Processador Intel de alta performance', 'Socket: LGA1700, Núcleos: 20, TDP: 125W'),
(1, 'Intel Core i5 14600K', 'Processador Intel mid-range', 'Socket: LGA1700, Núcleos: 14, TDP: 125W'),
(1, 'Intel Core i5 8400', 'Processador Intel usado custo-benefício', 'Socket: LGA1151v2, Núcleos: 6, TDP: 65W'),
(1, 'Intel Core i5 4590', 'Processador Intel DDR3 econômico', 'Socket: LGA1150, Núcleos: 4, TDP: 84W'),
(1, 'AMD Ryzen 9 7950X', 'Processador AMD topo de linha', 'Socket: AM5, Núcleos: 16, TDP: 105W'),
(1, 'AMD Ryzen 9 7900X', 'Processador AMD high-end', 'Socket: AM5, Núcleos: 12, TDP: 105W'),
(1, 'AMD Ryzen 7 7700X', 'Processador AMD mid-high', 'Socket: AM5, Núcleos: 8, TDP: 105W'),
(1, 'AMD Ryzen 5 7600X', 'Processador AMD mid-range', 'Socket: AM5, Núcleos: 6, TDP: 105W');

-- Inserir Placas-mãe
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(2, 'ASUS ROG Z790-E', 'Placa-mãe Intel Z790 premium', 'Socket: LGA1700, Formato: ATX'),
(2, 'MSI MPG Z790 EDGE WIFI', 'Placa-mãe Intel Z790 gaming', 'Socket: LGA1700, Formato: ATX'),
(2, 'ASUS Prime H310M-E', 'Placa-mãe econômica Intel 8ª/9ª geração', 'Socket: LGA1151v2, Formato: M-ATX'),
(2, 'ASUS H81M-C', 'Placa-mãe DDR3 para builds antigas', 'Socket: LGA1150, Formato: M-ATX'),
(2, 'ASUS TUF X870-E', 'Placa-mãe AMD X870 robusta', 'Socket: AM5, Formato: ATX'),
(2, 'MSI MPG X870-E EDGE WIFI', 'Placa-mãe AMD X870 gaming', 'Socket: AM5, Formato: ATX'),
(2, 'Gigabyte B850 AORUS ELITE', 'Placa-mãe AMD B850 entry', 'Socket: AM5, Formato: ATX');

-- Inserir RAM
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(3, 'Corsair Vengeance DDR4 32GB', 'RAM DDR4 de qualidade', '32GB, 3600MHz, CAS 18'),
(3, 'Kingston FURY Beast DDR4 16GB', 'RAM DDR4 budget-friendly', '16GB, 3200MHz, CAS 16'),
(3, 'Kingston DDR3 8GB 1600MHz', 'RAM DDR3 para plataformas antigas', '8GB, 1600MHz, DDR3'),
(3, 'G.Skill Trident Z5 DDR5 32GB', 'RAM DDR5 de performance', '32GB, 6000MHz, CAS 30'),
(3, 'Corsair DOMINATOR PLATINUM DDR5', 'RAM DDR5 premium', '32GB, 5600MHz, CAS 28');

-- Inserir GPUs
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(4, 'NVIDIA RTX 4090', 'Placa de vídeo topo de linha', 'VRAM: 24GB GDDR6X, Power: 575W TDP'),
(4, 'NVIDIA RTX 4080', 'Placa de vídeo high-end', 'VRAM: 16GB GDDR6X, Power: 320W TDP'),
(4, 'NVIDIA RTX 4070 Ti', 'Placa de vídeo mid-high', 'VRAM: 12GB GDDR6X, Power: 285W TDP'),
(4, 'NVIDIA RTX 4070', 'Placa de vídeo mid-range', 'VRAM: 12GB GDDR6, Power: 200W TDP'),
(4, 'AMD RX 7900 XTX', 'Placa de vídeo AMD topo', 'VRAM: 24GB GDDR6, Power: 485W TDP'),
(4, 'AMD RX 7900 XT', 'Placa de vídeo AMD high-end', 'VRAM: 20GB GDDR6, Power: 420W TDP'),
(4, 'AMD RX 7800 XT', 'Placa de vídeo AMD mid-high', 'VRAM: 16GB GDDR6, Power: 320W TDP'),
(4, 'AMD RX 550', 'Placa de vídeo AMD de entrada', 'VRAM: 2GB/4GB GDDR5, Power: 50W TDP'),
(4, 'NVIDIA GTX 1050 Ti', 'Placa de vídeo usada de baixo consumo', 'VRAM: 4GB GDDR5, Power: 75W TDP');

-- Inserir SSDs
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(5, 'Samsung 990 Pro NVMe 1TB', 'SSD NVMe ultra-rápido', 'Tipo: NVMe M.2, Capacidade: 1TB, Velocidade: 7100MB/s'),
(5, 'Kingston A3000 NVMe 500GB', 'SSD NVMe budget', 'Tipo: NVMe M.2, Capacidade: 500GB, Velocidade: 2100MB/s'),
(5, 'Kingston A400 SATA 240GB', 'SSD SATA econômico', 'Tipo: SATA 2.5", Capacidade: 240GB, Velocidade: 500MB/s'),
(5, 'Crucial MX500 SATA 1TB', 'SSD SATA confiável', 'Tipo: SATA 2.5", Capacidade: 1TB, Velocidade: 560MB/s'),
(5, 'WD Blue SATA 1TB', 'SSD SATA Western Digital', 'Tipo: SATA 2.5", Capacidade: 1TB, Velocidade: 550MB/s');

-- Inserir Fontes
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(6, 'Corsair RM850x Gold', 'Fonte 850W Gold Modular', 'Potência: 850W, Eficiência: Gold, Tipo: Modular'),
(6, 'EVGA SuperNOVA 750W', 'Fonte 750W Gold', 'Potência: 750W, Eficiência: Gold'),
(6, 'MSI MAG A650GL', 'Fonte 650W Gold', 'Potência: 650W, Eficiência: Gold'),
(6, 'Seasonic Focus GX-550', 'Fonte 550W Gold', 'Potência: 550W, Eficiência: Gold'),
(6, 'Corsair CV450 Bronze', 'Fonte econômica para PCs de baixo consumo', 'Potência: 450W, Eficiência: Bronze');

-- Inserir Coolers
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(7, 'Cooler Master Hyper 212', 'Cooler ar compacto', 'Tipo: Ar, Soquetes: Intel/AMD'),
(7, 'Be Quiet Dark Rock Pro 4', 'Cooler ar silencioso', 'Tipo: Ar, Ruído: 28.2dB'),
(7, 'Corsair H100i Elite', 'Water cooler AIO 240mm', 'Tipo: Líquido, Radiador: 240mm'),
(7, 'NZXT Kraken X73', 'Water cooler AIO 360mm', 'Tipo: Líquido, Radiador: 360mm');

-- Inserir Gabinetes
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(8, 'NZXT H510 Flow', 'Gabinete gaming moderno', 'Formato: ATX, Compatível: ATX/M-ATX'),
(8, 'Corsair iCUE 4000 Air', 'Gabinete gaming RGB', 'Formato: ATX, Compatível: ATX/M-ATX/Mini-ITX'),
(8, 'Lian Li LANCOOL 205', 'Gabinete compacto', 'Formato: M-ATX, Compatível: M-ATX/Mini-ITX'),
(8, 'Fractal Design Core 1000', 'Gabinete budget', 'Formato: M-ATX, Compatível: M-ATX/Mini-ITX');

-- Inserir Monitores, Teclados, Mouses e Acessórios
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) VALUES
(9, 'LG UltraGear 27GN800-B', 'Monitor gaming 27" 144Hz', 'Resolução: QHD, Painel IPS, 144Hz'),
(9, 'Samsung Odyssey G5', 'Monitor curvo 27"', 'Resolução: QHD, 165Hz, Curvo'),
(10, 'Corsair K70 RGB', 'Teclado mecânico gaming', 'Switch Cherry MX Red, RGB, USB'),
(10, 'Logitech G413', 'Teclado mecânico esportivo', 'Switch Romer-G, USB'),
(11, 'Logitech G502 Hero', 'Mouse gamer preciso', 'Sensor: 25K DPI, 11 botões programáveis'),
(11, 'Razer DeathAdder V2', 'Mouse ergonômico', 'Sensor: 20K DPI, cabo Speedflex'),
(12, 'HyperX Cloud II', 'Headset gamer com microfone', 'Som surround 7.1, conforto para longas sessões'),
(13, 'Elgato Stream Deck Mini', 'Controle para streaming', '6 teclas LCD configuráveis');

-- Inserir Vídeos
INSERT INTO videos (titulo, categoria, url_youtube, descricao) VALUES
('Como montar um PC básico', 'Montagem', 'O9845EjK7o0', 'Tutorial completo para iniciantes'),
('Montagem gamer passo a passo', 'Montagem', '6uVbxr09DBE', 'Montagem detalhada de um PC gamer'),
('Review Aorus Z790', 'Reviews', 'uGwIQbuxb4Y', 'Análise completa da placa Z790'),
('Review GPU RTX 3070', 'Reviews', 'Zewu3lViWdk', 'Performance e testes da RTX 3070'),
('Review CPU Intel i5-12400F', 'Reviews', 'pKQEVAJK3jU', 'Desempenho do i5-12400F'),
('Review CPU Ryzen 5 5600', 'Reviews', 'hX9ctZMR62I', 'Análise do Ryzen 5 5600'),
('Dicas para escolher fonte e RAM', 'Dicas', 'FT998-Piwjg', 'Como escolher fonte e memória ideais'),
('Otimizando SSD e armazenamento', 'Dicas', 'Du9pEDc08Mo', 'Dicas para otimizar seu armazenamento');

-- Inserir Desenvolvedores
INSERT INTO desenvolvedores (nome, funcao, descricao, foto, facebook, whatsapp, github) VALUES
('Isaac', 'Desenvolvedor Front-end', 'Desenvolvedor Front-end apaixonado por tecnologia e design.', 'isaac.jpg', 'https://facebook.com/isaac', '5180636909', 'https://github.com/isaac'),
('Jorge', 'Desenvolvedor Back-end', 'Desenvolvedor Back-end focado em soluções eficientes e escaláveis.', 'Jorge.jpg', 'https://facebook.com/jorge', '5197881983', 'https://github.com/jorge');
