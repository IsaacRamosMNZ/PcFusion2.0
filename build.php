<?php
require_once 'config.php';
require_once 'catalogo.php';

$page_title = 'Montar PC';
$style_file = 'style.css';
$extra_css = 'styles1.css';
$extra_js = 'dados.js';

$categoriasMontagem = ['CPU', 'Placa-mãe', 'RAM', 'GPU', 'SSD', 'Fonte', 'Cooler', 'Gabinete'];
$catalogo = pc_fusion_catalogo($conn, $categoriasMontagem);
$e = fn($valor) => htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');

$componentes = [
    ['id' => 'processador', 'key' => 'cpu', 'group' => 'cpus', 'categoria' => 'CPU', 'label' => 'Processador', 'icon' => 'fa-microchip', 'required' => true, 'hint' => 'Define socket, consumo e tipo de memória.'],
    ['id' => 'placaMae', 'key' => 'mobo', 'group' => 'motherboards', 'categoria' => 'Placa-mãe', 'label' => 'Placa-mãe', 'icon' => 'fa-chess-board', 'required' => true, 'hint' => 'Precisa bater socket, RAM e formato do gabinete.'],
    ['id' => 'RAM', 'key' => 'ram', 'group' => 'rams', 'categoria' => 'RAM', 'label' => 'Memória RAM', 'icon' => 'fa-memory', 'required' => true, 'hint' => 'Escolha DDR4 ou DDR5 de acordo com a placa.'],
    ['id' => 'GPU', 'key' => 'gpu', 'group' => 'gpus', 'categoria' => 'GPU', 'label' => 'Placa de vídeo', 'icon' => 'fa-desktop', 'required' => true, 'hint' => 'Impacta jogos, consumo e espaço no gabinete.'],
    ['id' => 'SSD', 'key' => 'ssd', 'group' => 'storages', 'categoria' => 'SSD', 'label' => 'Armazenamento', 'icon' => 'fa-hard-drive', 'required' => true, 'hint' => 'NVMe para velocidade; SATA para expansão.'],
    ['id' => 'Fonte', 'key' => 'psu', 'group' => 'psus', 'categoria' => 'Fonte', 'label' => 'Fonte', 'icon' => 'fa-plug', 'required' => true, 'hint' => 'Deixe margem para CPU, GPU e upgrades.'],
    ['id' => 'Fan', 'key' => 'cooler', 'group' => 'coolers', 'categoria' => 'Cooler', 'label' => 'Cooler', 'icon' => 'fa-fan', 'required' => false, 'hint' => 'Recomendado para CPUs quentes e silêncio.'],
    ['id' => 'Case', 'key' => 'case', 'group' => 'cases', 'categoria' => 'Gabinete', 'label' => 'Gabinete', 'icon' => 'fa-cube', 'required' => false, 'hint' => 'Confere formato da placa e tamanho da GPU.'],
];

include 'header.php';
?>

  <main class="build-page">
    <section id="montar-pc" class="builder-shell">
      <div class="builder-hero">
        <div>
          <p class="eyebrow">Configurador PC Fusion</p>
          <h2>Monte uma build coerente antes de comprar.</h2>
          <p>Escolha os componentes e veja a compatibilidade em tempo real, com resumo de consumo e alertas claros para evitar combinação errada.</p>
        </div>
        <div class="builder-hero-stats" aria-label="Recursos do configurador">
          <span><strong>Socket</strong> validado</span>
          <span><strong>RAM</strong> DDR4/DDR5</span>
          <span><strong>Fonte</strong> com margem</span>
        </div>
      </div>

      <div class="preset-strip">
        <div>
          <p class="eyebrow">Comece rápido</p>
          <h3>Perfis prontos</h3>
        </div>
        <div class="preset-actions" aria-label="Perfis de build">
          <button type="button" class="preset-chip" data-build-name="PC Muito Econômico DDR3">
            <i class="fas fa-coins"></i>
            Muito econômico
          </button>
          <button type="button" class="preset-chip" data-build-name="PC Barato Usado">
            <i class="fas fa-wallet"></i>
            Barato usado
          </button>
          <button type="button" class="preset-chip" data-build-name="Gamer Custo-Benefício">
            <i class="fas fa-gamepad"></i>
            Custo-benefício
          </button>
          <button type="button" class="preset-chip" data-build-name="Gamer 4K Premium">
            <i class="fas fa-bolt"></i>
            4K premium
          </button>
        </div>
      </div>

      <div class="builder-layout">
        <form id="pc-builder-form" class="builder-form">
          <?php foreach ($componentes as $componente): ?>
            <?php
              $categoria = $catalogo[$componente['categoria']] ?? ['pecas' => []];
              $pecas = $categoria['pecas'];
            ?>
            <div class="component-card" data-component-card="<?php echo $e($componente['key']); ?>">
              <div class="component-head">
                <span class="component-icon"><i class="fas <?php echo $e($componente['icon']); ?>"></i></span>
                <div>
                  <label for="<?php echo $e($componente['id']); ?>"><?php echo $e($componente['label']); ?></label>
                  <small><?php echo $componente['required'] ? 'Obrigatório' : 'Recomendado'; ?> · <?php echo $e($componente['hint']); ?></small>
                </div>
              </div>
              <select
                id="<?php echo $e($componente['id']); ?>"
                name="<?php echo $e($componente['id']); ?>"
                data-key="<?php echo $e($componente['key']); ?>"
                data-group="<?php echo $e($componente['group']); ?>"
                <?php echo $componente['required'] ? 'data-required="true"' : ''; ?>
              >
                <option value="">Selecione uma opção</option>
                <?php foreach ($pecas as $peca): ?>
                  <option value="<?php echo $e($peca['nome']); ?>" data-specs="<?php echo $e($peca['especificacoes'] ?? ''); ?>">
                    <?php echo $e($peca['nome']); ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <p class="select-status" id="status-<?php echo $e($componente['id']); ?>"></p>
            </div>
          <?php endforeach; ?>

          <div class="builder-actions">
            <button type="button" id="check-build" class="action primary">
              <i class="fas fa-check-circle"></i>
              Verificar compatibilidade
            </button>
            <button type="button" id="random-build" class="action secondary">
              <i class="fas fa-shuffle"></i>
              Build aleatória
            </button>
            <button type="reset" class="action ghost">
              <i class="fas fa-rotate-left"></i>
              Limpar
            </button>
          </div>
        </form>

        <aside class="build-summary" aria-live="polite">
          <div class="summary-head">
            <p class="eyebrow">Resumo</p>
            <h3>Sua montagem</h3>
          </div>
          <div id="summary-list" class="summary-list"></div>
          <div class="power-box">
            <div>
              <span>Consumo estimado</span>
              <strong id="power-estimate">0W</strong>
            </div>
            <div class="power-track"><span id="power-fill"></span></div>
            <p id="power-note">Selecione CPU e GPU para estimar a fonte ideal.</p>
          </div>
        </aside>
      </div>

      <div id="resultado" class="result-panel" hidden>
        <div class="result-title">
          <i class="fas fa-circle-info"></i>
          <h3>Resultado da compatibilidade</h3>
        </div>
        <div id="resultado-conteudo"></div>
      </div>
    </section>
  </main>

  <script>
    const BUILD_FIELDS = [
      { id: 'processador', key: 'cpu', group: 'cpus', label: 'Processador', required: true },
      { id: 'placaMae', key: 'mobo', group: 'motherboards', label: 'Placa-mãe', required: true },
      { id: 'RAM', key: 'ram', group: 'rams', label: 'Memória RAM', required: true },
      { id: 'GPU', key: 'gpu', group: 'gpus', label: 'Placa de vídeo', required: true },
      { id: 'SSD', key: 'ssd', group: 'storages', label: 'Armazenamento', required: true },
      { id: 'Fonte', key: 'psu', group: 'psus', label: 'Fonte', required: true },
      { id: 'Fan', key: 'cooler', group: 'coolers', label: 'Cooler', required: false },
      { id: 'Case', key: 'case', group: 'cases', label: 'Gabinete', required: false }
    ];

    function getCompatData() {
      return window.compatibilidade || {};
    }

    function asArray(value) {
      if (Array.isArray(value)) return value;
      if (value === undefined || value === null || value === '') return [];
      return [value];
    }

    function hasIntersection(a, b) {
      const left = asArray(a);
      const right = asArray(b);
      return left.some((item) => right.includes(item));
    }

    function escapeHTML(value) {
      const div = document.createElement('div');
      div.textContent = value || '';
      return div.innerHTML;
    }

    function getField(fieldId) {
      return document.getElementById(fieldId);
    }

    function getSelectedValues() {
      return BUILD_FIELDS.reduce((selected, field) => {
        selected[field.key] = getField(field.id)?.value || '';
        return selected;
      }, {});
    }

    function getPart(group, name) {
      return getCompatData()[group]?.[name] || null;
    }

    function estimatePower(selected) {
      const cpu = getPart('cpus', selected.cpu);
      const gpu = getPart('gpus', selected.gpu);
      const cpuTdp = cpu?.tdp || 0;
      const gpuTdp = gpu?.tdp || 0;
      const base = cpuTdp + gpuTdp;
      if (base === 0) return { draw: 0, recommended: 0 };
      const recommended = Math.ceil((base + 120) * 1.25 / 50) * 50;
      return { draw: base, recommended };
    }

    function setSelectStatus(fieldId, text, type = 'neutral') {
      const status = document.getElementById('status-' + fieldId);
      if (!status) return;
      status.textContent = text;
      status.className = 'select-status ' + type;
    }

    function optionDecision(field, value, selected) {
      if (!value) return { disabled: false, title: '' };
      const data = getCompatData();
      const part = data[field.group]?.[value];
      if (!part) return { disabled: false, title: 'Sem ficha completa; será validado manualmente.' };

      if (field.key === 'cpu') {
        const mobo = getPart('motherboards', selected.mobo);
        const ram = getPart('rams', selected.ram);
        if (mobo && part.socket !== mobo.socket) return { disabled: true, title: 'Socket diferente da placa-mãe.' };
        if (ram && !asArray(part.ram).includes(ram.type)) return { disabled: true, title: 'Processador não combina com esse tipo de RAM.' };
      }

      if (field.key === 'mobo') {
        const cpu = getPart('cpus', selected.cpu);
        const ram = getPart('rams', selected.ram);
        if (cpu && cpu.socket !== part.socket) return { disabled: true, title: 'Socket diferente do processador.' };
        if (ram && !asArray(part.ram).includes(ram.type)) return { disabled: true, title: 'Placa-mãe não suporta esse tipo de RAM.' };
      }

      if (field.key === 'ram') {
        const cpu = getPart('cpus', selected.cpu);
        const mobo = getPart('motherboards', selected.mobo);
        if (cpu && !asArray(cpu.ram).includes(part.type)) return { disabled: true, title: 'Tipo de RAM incompatível com o processador.' };
        if (mobo && !asArray(mobo.ram).includes(part.type)) return { disabled: true, title: 'Tipo de RAM incompatível com a placa-mãe.' };
      }

      if (field.key === 'ssd') {
        const mobo = getPart('motherboards', selected.mobo);
        if (mobo && mobo.storage && !mobo.storage.includes(part.type)) return { disabled: true, title: 'Interface de armazenamento incompatível com a placa-mãe.' };
      }

      if (field.key === 'gpu') {
        const caseData = getPart('cases', selected.case);
        if (caseData && caseData.max_gpu_mm && part.length && part.length > caseData.max_gpu_mm) return { disabled: true, title: 'GPU longa demais para o gabinete.' };
      }

      if (field.key === 'psu') {
        const power = estimatePower({ ...selected, psu: value });
        if (power.recommended && part.wattage < power.recommended) return { disabled: true, title: 'Fonte abaixo da margem recomendada.' };
      }

      if (field.key === 'cooler') {
        const cpu = getPart('cpus', selected.cpu);
        if (cpu && part.sockets && !part.sockets.includes(cpu.socket)) return { disabled: true, title: 'Cooler incompatível com o socket da CPU.' };
      }

      if (field.key === 'case') {
        const mobo = getPart('motherboards', selected.mobo);
        const gpu = getPart('gpus', selected.gpu);
        if (mobo && part.form_factors && !part.form_factors.includes(mobo.form_factor)) return { disabled: true, title: 'Gabinete não suporta o formato da placa-mãe.' };
        if (gpu && part.max_gpu_mm && gpu.length && gpu.length > part.max_gpu_mm) return { disabled: true, title: 'Gabinete não suporta o comprimento da GPU.' };
      }

      return { disabled: false, title: '' };
    }

    function applyOptionRestrictions(selected) {
      BUILD_FIELDS.forEach((field) => {
        const select = getField(field.id);
        if (!select) return;

        Array.from(select.options).forEach((option) => {
          if (!option.value) return;
          const decision = optionDecision(field, option.value, selected);
          option.disabled = decision.disabled && !option.selected;
          if (decision.title) option.title = decision.title;
          else option.removeAttribute('title');
        });
      });
    }

    function evaluateBuild(selected) {
      const errors = [];
      const warnings = [];
      const data = getCompatData();
      const cpu = getPart('cpus', selected.cpu);
      const mobo = getPart('motherboards', selected.mobo);
      const ram = getPart('rams', selected.ram);
      const gpu = getPart('gpus', selected.gpu);
      const ssd = getPart('storages', selected.ssd);
      const psu = getPart('psus', selected.psu);
      const cooler = getPart('coolers', selected.cooler);
      const caseData = getPart('cases', selected.case);
      const power = estimatePower(selected);

      BUILD_FIELDS.filter((field) => field.required).forEach((field) => {
        if (!selected[field.key]) warnings.push(`${field.label} ainda não foi selecionado.`);
      });

      if (selected.cpu && !cpu) warnings.push('Processador sem ficha de compatibilidade detalhada.');
      if (selected.mobo && !mobo) warnings.push('Placa-mãe sem ficha de compatibilidade detalhada.');
      if (selected.ram && !ram) warnings.push('Memória sem ficha de compatibilidade detalhada.');
      if (selected.gpu && !gpu) warnings.push('Placa de vídeo sem ficha de consumo e tamanho.');
      if (selected.psu && !psu) warnings.push('Fonte sem ficha de potência cadastrada.');

      if (cpu && mobo && cpu.socket !== mobo.socket) errors.push(`Socket incompatível: CPU ${cpu.socket} e placa-mãe ${mobo.socket}.`);
      if (cpu && ram && !asArray(cpu.ram).includes(ram.type)) errors.push(`RAM ${ram.type} não é indicada para o processador escolhido.`);
      if (mobo && ram && !asArray(mobo.ram).includes(ram.type)) errors.push(`A placa-mãe selecionada não suporta RAM ${ram.type}.`);
      if (mobo && ssd && mobo.storage && !mobo.storage.includes(ssd.type)) errors.push(`O SSD ${ssd.type} não é suportado pela placa-mãe.`);
      if (gpu && caseData && caseData.max_gpu_mm && gpu.length > caseData.max_gpu_mm) errors.push('A placa de vídeo é maior que o espaço do gabinete.');
      if (mobo && caseData && caseData.form_factors && !caseData.form_factors.includes(mobo.form_factor)) errors.push(`Gabinete não suporta placa ${mobo.form_factor}.`);
      if (cpu && cooler && cooler.sockets && !cooler.sockets.includes(cpu.socket)) errors.push(`Cooler incompatível com socket ${cpu.socket}.`);
      if (psu && power.recommended && psu.wattage < power.recommended) errors.push(`Fonte insuficiente: recomendado ${power.recommended}W, selecionado ${psu.wattage}W.`);
      if (psu && power.recommended && psu.wattage >= power.recommended && psu.wattage < power.recommended + 100) warnings.push('A fonte funciona, mas a margem para upgrades é pequena.');

      return { errors, warnings, power };
    }

    function updateStatusMessages(selected, evaluation) {
      BUILD_FIELDS.forEach((field) => {
        if (!selected[field.key]) {
          setSelectStatus(field.id, field.required ? 'Escolha uma opção para completar a build.' : 'Opcional, mas recomendado para validar tudo.', 'warn');
          return;
        }

        const decision = optionDecision(field, selected[field.key], selected);
        if (decision.disabled) {
          setSelectStatus(field.id, decision.title, 'error');
        } else if (decision.title) {
          setSelectStatus(field.id, decision.title, 'warn');
        } else {
          setSelectStatus(field.id, 'Compatível até aqui.', 'ok');
        }
      });

      if (evaluation.errors.length > 0) {
        evaluation.errors.forEach((error) => {
          if (error.includes('Socket')) {
            setSelectStatus('processador', error, 'error');
            setSelectStatus('placaMae', error, 'error');
          }
          if (error.includes('RAM')) setSelectStatus('RAM', error, 'error');
          if (error.includes('Fonte')) setSelectStatus('Fonte', error, 'error');
          if (error.includes('gabinete') || error.includes('Gabinete')) setSelectStatus('Case', error, 'error');
          if (error.includes('Cooler')) setSelectStatus('Fan', error, 'error');
        });
      }
    }

    function renderSummary(selected, evaluation) {
      const list = document.getElementById('summary-list');
      if (!list) return;

      list.innerHTML = BUILD_FIELDS.map((field) => {
        const value = selected[field.key];
        const filled = Boolean(value);
        return `
          <div class="summary-item ${filled ? 'filled' : 'missing'}">
            <span>${escapeHTML(field.label)}</span>
            <strong>${escapeHTML(value || (field.required ? 'Pendente' : 'Opcional'))}</strong>
          </div>
        `;
      }).join('');

      const powerEstimate = document.getElementById('power-estimate');
      const powerFill = document.getElementById('power-fill');
      const powerNote = document.getElementById('power-note');
      const psu = getPart('psus', selected.psu);
      const recommended = evaluation.power.recommended;
      const draw = evaluation.power.draw;

      if (powerEstimate) powerEstimate.textContent = recommended ? `${recommended}W` : '0W';
      if (powerFill) {
        const limit = psu?.wattage || Math.max(recommended, 1000);
        const percent = limit ? Math.min(100, Math.round((recommended / limit) * 100)) : 0;
        powerFill.style.width = `${percent}%`;
        powerFill.className = percent > 92 ? 'danger' : percent > 78 ? 'warn' : '';
      }
      if (powerNote) {
        if (!recommended) powerNote.textContent = 'Selecione CPU e GPU para estimar a fonte ideal.';
        else if (!psu) powerNote.textContent = `Consumo base aproximado: ${draw}W. Fonte recomendada: ${recommended}W.`;
        else powerNote.textContent = `Fonte selecionada: ${psu.wattage}W. Recomendação calculada: ${recommended}W.`;
      }
    }

    function renderResult(randomName) {
      const selected = getSelectedValues();
      const evaluation = evaluateBuild(selected);
      const result = document.getElementById('resultado');
      const content = document.getElementById('resultado-conteudo');
      if (!result || !content) return;

      const status = evaluation.errors.length ? 'error' : evaluation.warnings.length ? 'warn' : 'ok';
      result.className = 'result-panel ' + status;
      result.hidden = false;

      const intro = randomName ? `<p class="random-note"><strong>Build aleatória:</strong> ${escapeHTML(randomName)}</p>` : '';
      const issues = evaluation.errors.map((item) => `<li><i class="fas fa-triangle-exclamation"></i>${escapeHTML(item)}</li>`).join('');
      const warnings = evaluation.warnings.map((item) => `<li><i class="fas fa-circle-info"></i>${escapeHTML(item)}</li>`).join('');
      const success = !evaluation.errors.length && !evaluation.warnings.length
        ? '<p class="success-message"><i class="fas fa-circle-check"></i> Configuração compatível e pronta para comparação de preços.</p>'
        : '';

      content.innerHTML = `
        ${intro}
        ${success}
        ${issues ? `<h4>Problemas encontrados</h4><ul>${issues}</ul>` : ''}
        ${warnings ? `<h4>Avisos</h4><ul>${warnings}</ul>` : ''}
      `;
    }

    function updateBuildState() {
      const selected = getSelectedValues();
      applyOptionRestrictions(selected);
      const evaluation = evaluateBuild(selected);
      updateStatusMessages(selected, evaluation);
      renderSummary(selected, evaluation);
    }

    function verificarCompatibilidade(randomName) {
      updateBuildState();
      renderResult(randomName);
    }

    function aplicarBuild(random) {
      if (!random) return;
      const mapping = {
        processador: random.cpu,
        placaMae: random.mobo,
        RAM: random.ram,
        GPU: random.gpu,
        SSD: random.ssd,
        Fonte: random.psu,
        Fan: random.cooler,
        Case: random.case
      };

      Object.entries(mapping).forEach(([id, value]) => {
        const select = getField(id);
        if (select && Array.from(select.options).some((option) => option.value === value)) {
          select.value = value;
        }
      });

      verificarCompatibilidade(random.name);
    }

    function aplicarBuildPorNome(name) {
      const build = window.randomPCs?.find((item) => item.name === name);
      aplicarBuild(build);
    }

    function gerarBuildAleatoria() {
      if (!window.randomPCs || window.randomPCs.length === 0) return;
      const random = window.randomPCs[Math.floor(Math.random() * window.randomPCs.length)];
      aplicarBuild(random);
    }

    window.verificarCompatibilidade = verificarCompatibilidade;
    window.gerarBuildAleatoria = gerarBuildAleatoria;
    window.aplicarBuildPorNome = aplicarBuildPorNome;

    window.addEventListener('DOMContentLoaded', () => {
      BUILD_FIELDS.forEach((field) => getField(field.id)?.addEventListener('change', updateBuildState));
      document.getElementById('check-build')?.addEventListener('click', () => verificarCompatibilidade());
      document.getElementById('random-build')?.addEventListener('click', gerarBuildAleatoria);
      document.querySelectorAll('[data-build-name]').forEach((button) => {
        button.addEventListener('click', () => aplicarBuildPorNome(button.dataset.buildName));
      });
      document.getElementById('pc-builder-form')?.addEventListener('reset', () => {
        window.setTimeout(() => {
          document.getElementById('resultado').hidden = true;
          updateBuildState();
        }, 0);
      });
      updateBuildState();
    });
  </script>

<?php include 'footer.php'; ?>
